<?php
/**
 * This is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * User: Evren Yurtesen
 * Date: 10-Oct-16
 * Time: 2:07 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Isco
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Isco08 whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Isco08 whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Isco08 whereDescription($value)
 * @mixin \Eloquent
 */
class Isco08 extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'isco08';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id','title','description'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
}
