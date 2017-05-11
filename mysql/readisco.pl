#!/usr/bin/perl

# Database table must be existing. The original isco text files had syntax errors.
# It looked like they were written by hand and some sections had inconsistent characters,
# spaces etc. So, use the file provided.

use strict;
use warnings;

use DBI;
     
my $dbh = DBI->connect("DBI:mysql:database:localhost", "username", "password");
my $sql = 'INSERT INTO isco_08 (id,title,description) VALUES (?, ?, ?)';
my $stmt = $dbh->prepare($sql);

$dbh->do('SET NAMES \'utf8\';');

my $filename = 'groupdefn08.txt';

#open(my $fh, '<', $filename)
open(my $fh, '<:encoding(UTF-8)', $filename)
      or die "Could not open file '$filename' $!";
     
while (my $row = <$fh>) {
  my $level = 0;
  # Remove leading/trailing spaces
  $row = trim($row);

  if (length($row) == 0) {
    $row = nextNonEmptyLine($fh);
  }

  # Found a Major group. There is always 1 empty line after this
  if( $row =~ /^Major Group (\d+)$/ ) {
    $level = 1;
    my $id=$1;
    my $title;
    my $description;
    # Read next line (next line is always empty after Major Group)
    $row = <$fh>;
    $row = trim($row);
    # If we have empty line, read description
    if (length($row) == 0) {
      $row = <$fh>;
      $title = trim($row);
      while ($row = <$fh>) {
        $row = trim($row);
        if (length($row) == 0) { last; }
        $description .= $row . "\n";
      }
    }
    $stmt->execute(trim($id),trim($title),trim($description));
    print "$id $title \n";
  }

  if (length($row) == 0) {
    $row = nextNonEmptyLine($fh);
  }

  if( $row =~ /^Sub-major Group (\d+)$/ ) {
    $level = 2;
    my $id=$1;
    $row = <$fh>;
    my $title = trim($row);
    my $description;
    while ($row = <$fh>) {
      $row = trim($row);
      if (length($row) == 0) { last; }
      $description .= $row . "\n";
    }
    $stmt->execute(trim($id),trim($title),trim($description));
    print "  $id $title \n";
  }

  if (length($row) == 0) {
    $row = nextNonEmptyLine($fh);
  }

  if( $row =~ /^Minor Group (\d+)$/ ) {
    $level = 3;
    my $id=$1;
    $row = <$fh>;
    my $title = trim($row);
    my $description;
    while ($row = <$fh>) {
      $row = trim($row);
      if (length($row) == 0) { last; }
      $description .= $row . "\n";
    }
    $stmt->execute(trim($id),trim($title),trim($description));
    print "    $id $title \n";
  }

  if (length($row) == 0) {
    $row = nextNonEmptyLine($fh);
  }

  # Units
  if( $row =~ /^(\d+) ([ -~|’]+)$/ ) {
    $level = 4;
    my $id=$1;
    my $title=$2;
    my $description;
    while ($row = <$fh>) {
      $row = trim($row);
      if (length($row) == 0) { last; }
      $description .= $row . "\n";
    }
    $stmt->execute(trim($id),trim($title),trim($description));
    print "      $id $title \n";
  }

}


sub trim {
  my ($text) = @_;
  $text =~ s/^\s+//;
  $text =~ s/\s+$//;
  return $text;
}

sub nextNonEmptyLine {
  my ($fh) = @_;
  my $row = <$fh>;
  $row = trim($row);
  if (length($row) == 0) {
    while($row = <$fh>) {
       $row = trim($row);
       if (length($row) != 0) { last; }
    }
  }
  return $row;
}
