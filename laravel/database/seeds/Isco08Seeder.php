<?php

use Illuminate\Database\Seeder;

class Isco08Seeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('isco08')->delete();
        
        \DB::table('isco08')->insert(array (
            0 => 
            array (
                'id' => '0',
                'title' => 'Armed Forces Occupations',
                'description' => 'Armed forces occupations include all jobs held by members of the armed forces.  Members of the armed forces are those personnel who are currently serving in the armed forces, including auxiliary services, whether on a voluntary or compulsory basis, and who are not free to accept civilian employment and are subject to military discipline. Included are regular members of the army, navy, air force and other military services, as well as conscripts enrolled for military training or other service for a specified period.
Occupations in this major group are classified into the following sub-major groups:
01 Commissioned Armed Forces Officers
02 Non-commissioned Armed Forces Officers
03 Armed Forces Occupations, Other Ranks
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.
Notes
Many jobs performed by members of the armed forces are similar, in terms of the nature of the work performed, to civilian occupations such as medical doctors, radio operators, cooks, secretaries and heavy truck drivers.  Conceptually, it may be appropriate, therefore, to classify such jobs in the armed forces with similar civilian jobs.  This approach is adopted in several national occupation classifications.  Typically such classifications also identify a number of military-specific occupational groups.  In many countries, however, it is not possible to produce information about the nature of the work performed by members of the armed forces.  In adapting ISCO-08 for national purposes countries may wish, therefore, to consider what approach best suits their circumstances and user needs.  For purposes of international comparability, however, where data pertaining to members of the armed forces are reported and classified by occupation, they should be included, where possible, in ISCO-08 Major Group 0: Armed Forces Occupations.',
            ),
            1 => 
            array (
                'id' => '01',
                'title' => 'Commissioned Armed Forces Officers',
            'description' => 'Commissioned armed forces officers provide leadership and management to organizational units in the armed forces and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. This group includes all members of the armed forces holding the rank of second lieutenant (or equivalent) or higher. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Occupations in this sub-major group are classified into the following minor group:
011 Commissioned Armed Forces Officers
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            2 => 
            array (
                'id' => '011',
                'title' => 'Commissioned Armed Forces Officers',
            'description' => 'Commissioned armed forces officers provide leadership and management to organizational units in the armed forces and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. This group includes all members of the armed forces holding the rank of second lieutenant (or equivalent) or higher.
Occupations in this minor group are classified into the following unit group:
0110 Commissioned Armed Forces Officers
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            3 => 
            array (
                'id' => '0110',
                'title' => 'Commissioned Armed Forces Officers',
            'description' => 'Commissioned armed forces officers provide leadership and management to organizational units in the armed forces and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. This group includes all members of the armed forces holding the rank of second lieutenant (or equivalent) or higher.
Examples of the occupations classified here:
▪ Admiral
▪ Air commodore
▪ Air marshal
▪ Brigadier (army)
▪ Captain (air force)
▪ Captain (army)
▪ Captain (navy)
▪ Colonel (army)
▪ Field marshal
▪ Flight lieutenant (air force)
▪ Flying officer (military)
▪ General (army)
▪ Group captain, (air force)
▪ Lieutenant (army)
▪ Major (army)
▪ Midshipman
▪ Naval officer (military)
▪ Navy commander
▪ Officer cadet (armed forces)
▪ Second lieutenant (army)
▪ Squadron leader
▪ Sublieutenant (navy)
▪ Wing commander
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            4 => 
            array (
                'id' => '02',
                'title' => 'Non-commissioned Armed Forces Officers',
                'description' => 'Non-commissioned armed forces officers enforce military discipline and supervise the activities of those employed in Sub-major Group 03: Armed Forces Occupations, Other Ranks, and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. This group includes members of the armed forces holding ranks such as sergeant, warrant officer and sergeant major.  Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Occupations in this sub-major group are classified into the following minor group:
021 Non-commissioned Armed Forces Officers
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            5 => 
            array (
                'id' => '021',
                'title' => 'Non-commissioned Armed Forces Officers',
                'description' => 'Non-commissioned armed forces officers enforce military discipline and supervise the activities of those employed in Sub-major  031: Armed Forces Occupations, Other Ranks, and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. This group includes members of the armed forces holding ranks such as sergeant, warrant officer and sergeant major.
Occupations in this minor group are classified into the following unit group:
0210 Non-commissioned Armed Forces Officers
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            6 => 
            array (
                'id' => '0210',
                'title' => 'Non-commissioned Armed Forces Officers',
                'description' => 'Non-commissioned armed forces officers enforce military discipline and supervise the activities of those employed in Sub-major Group 0310: Armed Forces Occupations, Other Ranks, and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. This group includes members of the armed forces holding ranks such as sergeant, warrant officer and sergeant major.
Examples of the occupations classified here:
▪ Boatswain (navy)
▪ Flight sergeant
▪ Sergeant (army)
▪ Sergeant major
▪ Warrant officer
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            7 => 
            array (
                'id' => '03',
                'title' => 'Armed Forces Occupations, Other Ranks',
                'description' => 'Armed forces occupations, other ranks include all conscripted and non-conscripted members of the armed forces except commissioned and non-commissioned officers.  They perform specific military tasks and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces. Most occupations in this sub-major group require skills at the first ISCO skill level.
Occupations in this sub-major group are classified into the following minor group:
031 Armed Forces Occupations, Other Ranks
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            8 => 
            array (
                'id' => '031',
                'title' => 'Armed Forces Occupations, Other Ranks',
                'description' => 'Armed forces occupations, other ranks include all conscripted and non-conscripted members of the armed forces except commissioned and non-commissioned officers.  They perform specific military tasks and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces.
Occupations in this minor group are classified into the following unit group:
0310 Armed Forces Occupations, Other Ranks
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            9 => 
            array (
                'id' => '0310',
                'title' => 'Armed Forces Occupations, Other Ranks',
                'description' => 'Armed forces occupations, other ranks include all conscripted and non-conscripted members of the armed forces except commissioned and non-commissioned officers.  They perform specific military tasks and/or perform similar tasks to those performed in a variety of civilian occupations outside the armed forces.
Examples of the occupations classified here:
▪ Airman
▪ Bombardier
▪ Corporal (air force)
▪ Corporal (army)
▪ Coxswain (navy)
▪ Gunner
▪ Infantryman/woman
▪ Paratrooper
▪ Rifleman/woman
▪ Seaman/woman (navy)
Excluded from this group are:
▪ jobs held by persons in civilian employment of government establishments concerned with defence issues;
▪ police (other than military police);
▪ customs inspectors and members of border or other armed civilian services.',
            ),
            10 => 
            array (
                'id' => '1',
                'title' => 'Managers',
                'description' => 'Managers plan, direct, coordinate and evaluate the overall activities of enterprises, governments and other organizations, or of organizational units within them, and formulate and review their policies, laws, rules and regulations. Competent performance in most occupations in this major group requires skills at the fourth ISCO skill level, except for Sub-major Group 14: Hospitality, Retail and Other Services Managers, for which skills at the third ISCO skill level are generally required.
Tasks performed by managers usually include: formulating and advising on the policy, budgets, laws and regulations of enterprises, governments and other organizational units; establishing objectives and standards and formulating and evaluating programmes and policies and procedures for their implementation; ensuring appropriate systems and procedures are developed and implemented to provide budgetary control; authorizing material, human and financial resources to implement policies and programmes; monitoring and evaluating performance of the organization or enterprise and of its staff; selecting or approving the selection of  staff;  ensuring compliance with health and safety requirements; planning and directing daily operations; representing and negotiating on behalf of the government, enterprise or organizational unit managed in meetings and other forums.
Occupations in this major group are classified into the following sub-major groups:
11 Chief Executives, Senior Officials and Legislators
12 Administrative and Commercial Managers
13 Production and Specialized Services Managers
14 Hospitality, Retail and Other Services Managers
Notes
In distinguishing between managers classified in Major Group 1: Managers, and supervisors, classified in other major groups, it should be noted that both managers and supervisors may plan, organize, coordinate, control and direct the work done by others.  In addition, managers usually have responsibility for and make decisions about: the overall strategic and operational direction of a business or organizational unit (for example about the kinds, quantity and quality of goods to be produced); budgets (how much money is to be spent and for what purposes); and the selection, appointment and dismissal of staff.  Supervisors may provide advice and assistance to managers on these matters, especially in relation to staff selection and dismissal, but do not have authority to make decisions.
It should be noted that it is not a necessary condition that managers have responsibility for all three of strategic and operational direction, budgets and staff selection and dismissal. The degree of autonomy they exercise may also vary. The critical difference is that supervisors are responsible only for the supervision of the activities of other workers, whereas managers have overall responsibility for the operations of an organizational unit.',
            ),
            11 => 
            array (
                'id' => '11',
                'title' => 'Chief Executives, Senior Officials and Legislators',
                'description' => 'Chief executives, senior officials and legislators formulate and review the policies, and plan, direct, coordinate and evaluate the overall activities of enterprises, governments and other organizations with the support of other managers. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level .
Tasks performed by workers in this sub-major group usually include: presiding over or participating in the proceedings of legislative bodies, boards of directors and committees; formulating and advising on the policy budgets, laws and regulations of  enterprises, governments and other organizations; establishing objectives for enterprises, government departments or agencies and other organizations; formulating or approving and evaluating programmes and policies and procedures for their implementation; ensuring appropriate systems and procedures are developed and implemented to provide budgetary control; authorizing material, human and financial resources to implement policies and programmes; monitoring and evaluating performance of the organization or enterprise; selecting or approving the selection of senior staff; performing ceremonial duties and representing the enterprise, government, organization or community at official occasions and in meetings, negotiations, conventions and public hearings.
Occupations in this sub-major group are classified into the following minor groups:
111 Legislators and Senior Officials
112 Managing Directors and Chief Executives',
            ),
            12 => 
            array (
                'id' => '111',
                'title' => 'Legislators and Senior Officials',
                'description' => 'Legislators and senior officials determine, formulate, advise on and direct the implementation of policies of national, state, regional or local governments or communities, and of special-interest organizations. They  make, ratify, amend or repeal laws, public rules and regulations, and  plan, organize, direct, control and evaluate the overall activities of government departments and agencies, traditional communities and special-interest organizations.
Tasks performed usually include: presiding over or participating in the proceedings of legislative bodies and administrative councils of governments, legislative assemblies, local communities and special-interest organizations; serving on government administrative boards or official committees; investigating matters of concern to the public and promoting the interests of constituents; formulating and  advising on government policy, budgets, laws and regulations; establishing objectives for organizations and formulating or approving and evaluating programmes and policies and procedures for their implementation; recommending, reviewing, evaluating and approving documents, briefs and reports submitted; ensuring appropriate systems and procedures are developed and implemented to provide budgetary control; allocating the use of communal land and other resources; performing ceremonial duties and representing the government, organization or community at official occasions and in meetings, negotiations, conventions and public hearings.
Occupations in this minor group are classified into the following unit groups:
1111 Legislators
1112 Senior Government Officials
1113 Traditional Chiefs and Heads of Villages
1114 Senior Officials of Special-interest Organizations',
            ),
            13 => 
            array (
                'id' => '1111',
                'title' => 'Legislators',
                'description' => 'Legislators determine, formulate and direct policies of national, state, regional or local governments and international governmental agencies, and make, ratify, amend or repeal laws, public rules and regulations. They include elected and non-elected members of parliaments, councils and governments.
Tasks include –
(a) presiding over or participating in the proceedings of legislative bodies and administrative councils of national, state, regional or local governments or legislative assemblies;
(b) determining, formulating and directing policies of national, state, regional or local governments;
(c) making, ratifying, amending or repealing laws, public rules and regulations within a statutory or constitutional framework;
(d) serving on government administrative boards or official committees;
(e) investigating matters of concern to the public and promoting the interests of the constituencies which they represent;
(f) attending community functions and meetings to provide service to the community, understand public opinion and provide information on government plans;
(g) negotiating with other legislators and representatives of interest groups in order to reconcile differing interests, and to create policies and agreements;
(h) as members of the government, directing senior administrators and officials of government departments and agencies in the interpretation and implementation of government policies.
Examples of the occupations classified here:
▪ City councillor
▪ Government minister
▪ Mayor
▪ Member of parliament
▪ President (government)
▪ Secretary of state
▪ Senator
▪ State governor',
            ),
            14 => 
            array (
                'id' => '1112',
                'title' => 'Senior Government Officials',
                'description' => 'Senior government officials advise governments on policy matters, oversee the interpretation and implementation of government policies and legislation by government departments and agencies, represent their country abroad and act on its behalf, or carry out similar tasks in intergovernmental organizations. They plan, organize, direct, control and evaluate the overall activities of municipal or local, regional and national government departments, boards, agencies or commissions in accordance with legislation and policies established by government and legislative bodies.
Tasks include –
(a) advising national, state, regional or local governments and legislators on policy matters;
(b) advising on the preparation of government budgets, laws and regulations, including amendments;
(c) establishing objectives for government departments or agencies in accordance with government legislation and policy;
(d) formulating or approving and evaluating programmes and procedures for the implementation of government policies in conjunction or consultation with government,
(e) recommending, reviewing, evaluating and approving documents, briefs and reports submitted by middle managers and senior staff members;
(f) ensuring appropriate systems and procedures are developed and implemented to provide budgetary control;
(g) coordinating activities with other senior government managers and officials;
(h) making presentations to legislative and other government committees regarding policies, programmes or budgets;
(i) overseeing the interpretation and implementation of government policies and legislation by government departments and agencies.
Examples of the occupations classified here:
▪ Ambassador
▪ City administrator
▪ Civil service commissioner
▪ Consul-general
▪ Director-general (government department)
▪ Director-general (intergovernmental organization)
▪ Fire commissioner
▪ Inspector-general (police)
▪ Permanent head (government department)
▪ Police chief constable
▪ Police commissioner
▪ Secretary-general (government administration)
▪ Under-secretary (government)
Note
Chief executives of government-owned enterprises are included in Unit Group 1120: Managing Directors and Chief Executives.',
            ),
            15 => 
            array (
                'id' => '1113',
                'title' => 'Traditional Chiefs and Heads of Villages',
                'description' => 'Traditional chiefs and heads of villages perform a variety of legislative, administrative and ceremonial tasks and duties, determined by ancient traditions as well as by the division of rights and responsibilities between village chiefs and the local, regional and national authorities.
Tasks include –
(a) allocating the use of communal land and other resources among households in the community or village;
(b) collecting and distributing surplus production of the community or village;
(c) settling disputes between members of the community or village;
(d) disciplining members of the community or village for violation of rules and customs;
(e) performing ceremonial duties in connection with births, marriages, deaths, harvests and other important occasions;
(f) representing the community or village on local or regional councils;
(g) informing the community or village about government rules and regulations.
Examples of the occupations classified here:
▪ Village chief
▪ Village head',
            ),
            16 => 
            array (
                'id' => '1114',
                'title' => 'Senior Officials of Special-interest Organizations',
                'description' => 'Senior officials of special-interest organizations determine, formulate and direct the implementation of policies of special-interest organizations, such as political-party organizations, trade unions, employers\' organizations, trade and industry associations, humanitarian or charity organizations, or sports associations, and represent their organizations and act on their behalf.
Tasks include –
(a) determining and formulating the policies, rules and regulations of the organization;
(b) planning, directing and coordinating the general functioning of the organization;
(c) reviewing the operations and results of the organization and reporting to boards of directors and governing bodies, the organization\'s membership and funding agencies;
(d) negotiating on behalf of the organization, its members and relevant special-interest groups;
(e) promoting the interests of the organization, its members and relevant special-interest groups before the legislature, government or general public;
(f) planning, organizing and directing sections charged with implementing the organization\'s policies, programmes, rules and regulations;
(g) ensuring appropriate systems and procedures are developed and implemented to provide budgetary control;
(h) monitoring and evaluating performance of the organization or enterprise against established objectives and policies;
(i) representing the organization at official occasions and board meetings, in negotiations and at conventions, public hearings and forums.
Examples of the occupations classified here:
▪ Chairperson, trade union
▪ Director-general, employers\' organization
▪ Leader, political party
▪ President, political party
▪ Secretary-general, environment protection organization
▪ Secretary-general, human rights organization',
            ),
            17 => 
            array (
                'id' => '112',
                'title' => 'Managing Directors and Chief Executives',
            'description' => 'Managing directors and chief executives formulate and review the policies, and plan, direct, coordinate and evaluate the overall activities, of enterprises or organizations (except special-interest organizations and government departments) with the support of other managers, usually within guidelines established by a board of directors or a governing body to whom they are answerable for the operations undertaken and results.
Tasks performed usually include: planning, directing and coordinating the general functioning of an enterprise or organization; reviewing the operations and results of the enterprise or organization, and reporting to boards of directors and governing bodies; determining objectives, strategies, policies and programmes for the enterprise or organization; providing overall direction and management to organizations; establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources; authorizing material, human and financial resources to implement organizational policies and programmes; monitoring and evaluating performance of the organization or enterprise against established objectives and policies; consulting with senior subordinate staff and reviewing recommendations and reports; representing the organization at official occasions, in negotiations and at conventions, seminars, public hearings and forums; selecting or approving the selection of senior staff; ensuring the organization complies with relevant legislation and regulations.
Occupations in this minor group are classified into the following unit group:
1120 Managing Directors and Chief Executives',
            ),
            18 => 
            array (
                'id' => '1120',
                'title' => 'Managing Directors and Chief Executives',
            'description' => 'Managing directors and chief executives formulate and review the policies, and plan, direct, coordinate and evaluate the overall activities, of enterprises or organizations (except special-interest organizations and government departments) with the support of other managers, usually within guidelines established by a board of directors or a governing body to whom they are answerable for the operations undertaken and results.
Tasks include –
(a) planning, directing and coordinating the general functioning of an enterprise or organization;
(b) reviewing the operations and results of the enterprise or organization and reporting to boards of directors and governing bodies;
(c) determining objectives, strategies, policies and programmes for the enterprise or organization;
(d) providing overall leadership and management to the enterprise or organization;
(e) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(f) authorizing material, human and financial resources to implement organizational policies and programmes;
(g) monitoring and evaluating performance of the organization or enterprise against established objectives and policies;
(h) consulting with senior subordinate staff and reviewing recommendations and reports;
(i) representing the organization at official occasions and board meetings, in negotiations and at conventions, seminars, public hearings and forums;
(j) selecting or approving the selection of senior staff;
(k) ensuring the organization complies with relevant legislation and regulations.
Examples of the occupations classified here:
▪ Chief executive
▪ Managing director
▪ Regional manager
Note
Regional managers and other senior managers who coordinate and supervise the activities of subordinate managers who have a diverse range of functional responsibilities are included in Unit Group 1120: Managing Directors and Chief Executives. Managers responsible for specialized functions within a specific geographic area are excluded from this unit group. For example, regional sales managers are classified in Unit Group 1221: Sales and Marketing Managers. Jobs whose principal responsibility is to participate as a member of the board of directors of one or more enterprises or organizations are included in Unit Group 1120: Managing Directors and Chief Executives. Chief executives of government-owned enterprises are included in Unit Group 1120: Managing Directors and Chief Executives.',
            ),
            19 => 
            array (
                'id' => '12',
                'title' => 'Administrative and Commercial Managers',
                'description' => 'Administrative and commercial managers plan, organize, direct, control and coordinate the financial, administrative, human resource, policy, planning, research and development, advertising, public relations, and sales and marketing activities of enterprises and organizations, or of enterprises that provide such services to other enterprises and organizations. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level
Tasks performed by workers in this sub-major group usually include: formulating and administering policy advice and strategic and financial planning; establishing and directing operational and administrative procedures; implementing, monitoring and evaluating strategies and policies; providing advice to senior managers; directing the development of initiatives for new products, marketing, public relations and advertising campaigns; determining and directing sales activities, product mix and customer service standards; setting prices and credit arrangements; ensuring compliance with relevant legislation, regulations and standards; controlling selection, training and performance of staff; preparing budgets and overseeing financial operations; consulting with the chief executive and with managers of other departments or sections; controlling expenditure and ensuring the efficient use of resources; representing the enterprise or organization in negotiations, and at conventions, seminars, public hearings and forums.
Occupations in this sub-major group are classified into the following minor groups:
121 Business Services and Administration Managers
122 Sales, Marketing and Development Managers
Notes
Specialized qualifications and extensive experience relevant to one or more occupations classified in Major Group 2: Professionals, or Major Group 3: Technicians and Associate Professionals, are usually required. Regional managers and other senior managers who coordinate and supervise the activities of subordinate managers who have a diverse range of functional responsibilities are included in Unit Group 1120:  Managing Directors and Chief Executives.',
            ),
            20 => 
            array (
                'id' => '121',
                'title' => 'Business Services and Administration Managers',
                'description' => 'Business services and administration managers plan, organize, direct, control and coordinate the financial, administrative, human resource, policy and planning activities of organizations, or of enterprises that provide such services to other enterprises and organizations.
Tasks performed usually include: formulating and administering policy advice. and strategic and financial planning; establishing and directing operational and administrative procedures; implementing, monitoring and evaluating strategies and policies; providing advice to senior managers and board members on financial, administrative, strategic, policy, programme and legislative issues; ensuring compliance with relevant legislation, regulations and standards; controlling selection, training and performance of staff; preparing budgets and overseeing financial operations; consulting with the chief executive and with managers of other departments or sections; controlling expenditure and ensuring the efficient use of resources; representing the organization in negotiations, and at conventions, seminars, public hearings and forums.
Occupations in this minor group are classified into the following unit groups:
1211 Finance Managers
1212 Human Resource Managers
1213 Policy and Planning Managers
1219 Business Services and Administration Managers Not Elsewhere Classified',
            ),
            21 => 
            array (
                'id' => '1211',
                'title' => 'Finance Managers',
                'description' => 'Finance managers plan, direct and coordinate the financial operations of an enterprise or organization, in consultation with senior managers and with managers of other departments or sections, or of enterprises that provide financial services to other enterprises and organizations.
Tasks include –
(a) planning, directing and coordinating the financial operations of an enterprise or organization;
(b) assessing the financial situation of the enterprise or organization, preparing budgets and overseeing financial operations;
(c) consulting with the chief executive and with managers of other departments or sections;
(d) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(e) establishing and directing operational and administrative procedures;
(f) planning and directing daily operations;
(g) overseeing the selection, training and performance of staff;
(h) representing the enterprise or organization in dealings with outside bodies.
Examples of the occupations classified here:
▪ Company secretary
▪ Finance manager
Some related occupations classified elsewhere:
▪ Financial institution branch manager – 1346
▪ Financial controller – 2411
▪ Management accountant – 2411',
            ),
            22 => 
            array (
                'id' => '1212',
                'title' => 'Human Resource Managers',
                'description' => 'Human resource managers plan, direct and coordinate policies concerning the personnel, industrial relations and occupational health and safety activities of an enterprise or organization, or of enterprises that provide human resource services to other enterprises and organizations.
Tasks include –
(a) planning, directing and coordinating the personnel and industrial relations activities, policies and practices of an enterprise or organization;
(b) planning and organizing procedures for recruitment, training, promotion, transfer and dismissal of staff;
(c) planning and organizing negotiations and procedures for determination of wage structures and level and for consultation with workers on conditions of employment;
(d) overseeing safety, health and related programmes and activities;
(e) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(f) establishing and directing operational and administrative procedures;
(g) overseeing the development and implementation of management information systems;
(h) ensuring compliance with standards and legislation relating to employees\' rights, health and safety, equal opportunity and related concerns;
(i) overseeing the selection, training and performance of staff for the entire enterprise or organization;
(j) consulting with senior management and with managers of other departments;
(k) representing the enterprise or organization in dealings with outside bodies.
Examples of the occupations classified here:
▪ Industrial relations manager
▪ Personnel manager
▪ Recruitment manager',
            ),
            23 => 
            array (
                'id' => '1213',
                'title' => 'Policy and Planning Managers',
                'description' => 'Policy and planning managers plan, organize, direct and coordinate policy advice and strategic planning activities within government or for non-government organizations and private sector agencies, or manage the activities of enterprises that provide policy and strategic planning services.
Tasks include –
(a) developing, implementing and monitoring strategic plans, programmes, policies, processes, systems and procedures to achieve goals, objectives and work standards;
(b) developing, directing, administering and participating in policy research and analysis;
(c) coordinating the implementation of policies and practices;
(d) establishing activity measures and measurements of accountability;
(e) planning and directing daily operations;
(f) leading and managing the activities of policy development and strategic planning staff;
(g) overseeing the selection, training and performance of staff;
(h) consulting with senior management and with managers of other departments;
(i) representing the enterprise or organization in negotiations, and at conventions, seminars, public hearings and forums.
Examples of the occupations classified here:
▪ Corporate planning manager
▪ Policy manager
▪ Strategic planning manager',
            ),
            24 => 
            array (
                'id' => '1219',
                'title' => 'Business Services and Administration Managers Not Elsewhere Classified',
                'description' => 'This unit group covers business services and administration managers not classified elsewhere in Minor Group 121: Business Services and Administration Managers. For instance, the group includes occupations such as facilities manager, cleaning services manager and administrative services manager employed either as the manager of a department of a large enterprise and organization, or of an enterprise that provides such services to other enterprises and organizations.
In such cases tasks would include –
(a) providing administrative, strategic planning and operational support, research and advice to senior management on matters such as the management of building facilities and administrative services;
(b) developing and managing the organization\'s administrative and physical resources;
(c) developing and implementing administrative and procedural statements and guidelines for use by staff in the organization;
(d) analysing complex resource management issues and initiatives that affect the organization, and  preparing associated reports, correspondence and submissions;
(e) providing information and support for the preparation of financial reports and budgets;
(f) leading, managing and developing administrative staff to ensure smooth business operations and the provision of accurate and timely information;
(g) representing the enterprise or organization in negotiations, and at conventions, seminars, public hearings and forums;
(h) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(i) planning and directing daily operations;
(j) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Administrative services manager
▪ Cleaning services manager
▪ Corporate services manager
▪ Facilities manager',
            ),
            25 => 
            array (
                'id' => '122',
                'title' => 'Sales, Marketing and Development Managers',
                'description' => 'Sales, marketing and development managers plan, organize, direct, control and coordinate the advertising, public relations, research and development, and sales and marketing activities of enterprises and organizations, or of enterprises that provide such services to other enterprises and organizations.
Tasks performed usually include: formulating and implementing policies and plans for advertising, public relations, product development, sales and marketing in consultation with other managers; directing the development of initiatives for new products or scientific research, marketing, public relations and advertising campaigns; determining and directing sales activities, product mix, customer service standards and merchandising methods and distribution policy; setting prices and credit arrangements; establishing and managing budgets and controlling expenditure to ensure the efficient use of resources; overseeing the selection, training and performance of staff; representing the enterprise or organization at conventions, trade exhibitions and other forums.
Occupations in this minor group are classified into the following unit groups:
1221 Sales and Marketing Managers
1222 Advertising and Public Relations Managers
1223 Research and Development Managers',
            ),
            26 => 
            array (
                'id' => '1221',
                'title' => 'Sales and Marketing Managers',
                'description' => 'Sales and marketing managers plan, direct and coordinate the sales and marketing activities of an enterprise or organization, or of enterprises that provide sales and marketing services to other enterprises and organizations.
Tasks include –
(a) planning and organizing special sales and marketing programmes based on sales records and market assessments;
(b) determining price lists, discount and delivery terms, sales promotion budgets, sales methods, special incentives and campaigns;
(c) establishing and directing operational and administrative procedures related to sales and marketing activities;
(d) leading and managing the activities of sales and marketing staff;
(e) planning and directing daily operations;
(f) establishing and managing budgets and controlling expenditure to ensure the efficient use of resources;
(g) overseeing the selection, training and performance of staff;
(h) representing the enterprise or organization at sales and marketing conventions, trade exhibitions and other forums.
Examples of the occupations classified here:
▪ Marketing manager
▪ Sales manager',
            ),
            27 => 
            array (
                'id' => '1222',
                'title' => 'Advertising and Public Relations Managers',
                'description' => 'Advertising and public relations managers plan, direct and coordinate the advertising, public relations and public information activities of enterprises and organizations or of enterprises that provide related services to other enterprises and organizations.
Tasks include –
(a) planning, directing and coordinating the advertising and public relations activities of an enterprise or organization;
(b) negotiating advertising contracts with clients or with newspapers, radio and television stations, sports and cultural organizations and advertising agencies;
(c) planning and managing information programmes to inform legislators, the mass media and the general public about the plans, accomplishments and points of view of the enterprise or organization;
(d) leading and managing the activities of advertising and public relations staff;
(e) establishing and managing budgets and controlling expenditure and ensuring the efficient use of resources;
(f) establishing and directing operational and administrative procedures;
(g) planning and directing daily operations;
(h) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Advertising manager
▪ Public relations manager',
            ),
            28 => 
            array (
                'id' => '1223',
                'title' => 'Research and Development Managers',
                'description' => 'Research and development managers plan, direct and coordinate the research and development activities of an enterprise or organization or of enterprises that provide related services to other enterprises and organizations.
Tasks include –
(a) planning, directing and coordinating research and development activities, in-house or commissioned from external research organizations, to develop new or improved technical processes, products, knowledge, or utilization of materials;
(b) planning the overall research and development programme of an enterprise or organization, specifying goals and budgetary requirements;
(c) leading and managing the activities of research and development staff;
(d) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(e) establishing and directing operational and administrative procedures;
(f) planning and directing daily operations;
(g) overseeing the selection, training and performance of staff;
(h) representing the enterprise or organization at conventions, seminars and conferences.
Examples of the occupations classified here:
▪ Product development manager
▪ Research manager',
            ),
            29 => 
            array (
                'id' => '13',
                'title' => 'Production and Specialized Services Managers',
                'description' => 'Production and specialized services managers plan, direct and coordinate the production of the goods and the provision of the specialized professional and technical services provided by an enterprise or organization, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.  They are responsible for manufacturing, mining, construction, logistics, information and communications technology operations for large-scale agricultural, forestry and fisheries operations, and for the provision of health, education, social welfare, banking, insurance and other professional and technical services. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed by workers in this sub-major group usually include: planning details of activities in terms of output, services provided, quality, quantity, cost, timeliness and labour requirements; setting standards and objectives; controlling the operation of plant and of procedures; assuring quality of the goods produced and services provided; preparing tenders and contract bids; establishing and managing budgets, monitoring costs, and adjusting activities, procedures and resources to minimize costs; overseeing the acquisition and installation of new plant and equipment; coordinating the implementation of health and safety requirements; planning and directing daily operations; overseeing the selection, training and performance of staff; preparing, or arranging for the preparation of, reports, budgets and forecasts; representing the enterprise or organization in negotiations with other agencies, and at conventions, seminars, public hearings and forums.
Occupations in this sub-major group are classified into the following minor groups:
131 Production Managers in Agriculture, Forestry and Fisheries
132 Manufacturing, Mining, Construction and Distribution Managers
133 Information and Communications Technology Services Managers
134 Professional Services Managers
Note
Specialized qualifications and extensive experience relevant to one or more occupations classified in Major Group 2: Professionals, or Major Group 3: Technicians and Associate Professionals, are usually required.  Regional managers and other senior managers who coordinate and supervise the activities of subordinate managers who have a diverse range of functional responsibilities are included in Unit Group 1120:  Managing Directors and Chief Executives.',
            ),
            30 => 
            array (
                'id' => '131',
                'title' => 'Production Managers in Agriculture, Forestry and Fisheries',
                'description' => 'Production managers in agriculture, forestry and fisheries plan, direct and coordinate production in large-scale agricultural, horticultural, forestry aquaculture and fishery operations such as plantations, large ranches, collective farms and cooperatives, to grow and harvest crops, breed and raise livestock, fish and shellfish and to catch and harvest fish and other forms of aquatic life.
Tasks performed usually include: monitoring market activity and planning production to meet contract requirements and market demand; establishing and managing budgets, monitoring production output and costs, recording information such as farm and fisheries management practices, and preparing financial and operational reports; conferring with buyers to arrange for the sale of crops, catch and stock;  contracting with farmers, skippers or independent owners for production of produce and  management of production; planning the type, intensity and sequence of operations; purchasing machinery, equipment and supplies; identifying and controlling environmental toxins, weeds, pests and diseases; organizing operations such as maintaining buildings, water supply systems and equipment; overseeing the selection, training and performance of workers and contractors.
Occupations in this minor group are classified into the following unit groups:
1311 Agricultural and Forestry Production Managers
1312 Aquaculture and Fisheries Production Managers',
            ),
            31 => 
            array (
                'id' => '1311',
                'title' => 'Agricultural and Forestry Production Managers',
                'description' => 'Agricultural and forestry production managers plan, direct and coordinate production in large-scale agricultural, horticultural and forestry operations such as plantations, large ranches, collective farms and agricultural cooperatives to grow and harvest crops, and breed and raise livestock.
Tasks include –
(a) monitoring agricultural and forestry market activity and planning production to meet contract requirements and market demand;
(b) establishing and managing budgets, monitoring production output and costs, recording information such as farm management practices, and preparing financial and operational reports;
(c) conferring with buyers to arrange for the sale of crops and livestock;
(d) contracting with farmers or independent owners for production of crops and livestock, or for management of production;
(e) planning the type, intensity and sequence of farm operations (e.g. determining the best times for planting, spraying and harvesting);
(f) analysing soil to determine types and quantities of fertilizer required for maximum production;
(g) purchasing machinery, equipment and supplies such as tractors, seed, fertilizer and chemicals;
(h) identifying and controlling agricultural and forest environmental toxins, weeds, pests and diseases;
(i) organizing farming operations such as maintaining buildings, water supply systems and equipment;
(j) directing and coordinating activities such as planting, irrigation, chemical application, harvesting and grading;
(k) inspecting plantations and fields to determine maturity dates of crops, or to estimate potential crop damage from weather;
(l) overseeing the selection, training and performance of agricultural and forestry workers and contractors.
Examples of the occupations classified here:
▪ Forestry manager
▪ Plantation manager
▪ Ranch manager',
            ),
            32 => 
            array (
                'id' => '1312',
                'title' => 'Aquaculture and Fisheries Production Managers',
                'description' => 'Aquaculture and fisheries production managers plan, direct and coordinate production in large-scale aquaculture and fishery operations to catch and harvest fish and shellfish, and to grow fish, shellfish or other forms of aquatic life as cash crops or for release into freshwater or saltwater.
Tasks include –
(a) monitoring aquaculture and fishery market activity and planning production and fishing activities to meet contract requirements and market demand;
(b) establishing and managing budgets, monitoring production output and costs, recording information such as fisheries management practices, and preparing financial and operational reports;
(c) conferring with buyers to arrange for the sale of produce and catches;
(d) contracting with fishing skippers or owners of vessels and aquaculture farms for fishing and aquaculture operations, or for management of production;
(e) conducting and organizing aquaculture or fishery stock examinations in order to identify diseases or parasites;
(f) devising and coordinating activities to improve fish hatching and growth rates, and to prevent disease in hatcheries;
(g) monitoring environments to maintain or improve conditions for aquatic life;
(h) directing and monitoring trapping and spawning of fish, egg incubation and fry rearing, applying knowledge of management and fish culturing techniques;
(i) coordinating the selection and maintenance of brood stock;
(j) directing and monitoring the transfer of mature fish to lakes, ponds, streams or commercial tanks;
(k) purchasing machinery, equipment and supplies such as vessels and nets;
(l) organizing operations such as maintenance of ships, boats and equipment;
(m) overseeing the selection, training and performance of aquaculture or fishery workers and contractors.
Examples of the occupations classified here:
▪ Aquaculture production manager
▪ Fishing operations manager
▪ Shore captain (fishing)
▪ Trawler manager
Some related occupations classified elsewhere:
▪ Fish farmer – 6221
▪ Fish hatchery manager – 6221
▪ Oyster farmer – 6221
▪ Seafood farmer – 6221
▪ Fishing vessel skipper (coastal waters) – 6222
▪ Fishing master (deep sea) – 6223',
            ),
            33 => 
            array (
                'id' => '132',
                'title' => 'Manufacturing, Mining, Construction and Distribution Managers',
                'description' => 'Manufacturing, mining, construction and distribution managers plan, organize and coordinate the manufacturing, mineral extraction, construction, supply, storage and transportation operations, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.
Tasks performed usually include: planning details of activities in terms of output quality and quantity, cost, timeliness and labour requirements; controlling the operation of plant and quality procedures through planning of maintenance, designation of operating hours and supply of equipment; preparing tenders and contract bids; establishing and managing budgets, monitoring production output and costs, and adjusting processes and resources to minimize costs; overseeing the acquisition and installation of new plant and equipment; controlling the preparation of production records and reports; coordinating the implementation of health and safety requirements; planning and directing daily operations; overseeing the selection, training and performance of staff.
Occupations in this minor group are classified into the following unit groups:
1321 Manufacturing Managers
1322 Mining Managers
1323 Construction Managers
1324 Supply, Distribution and Related Managers',
            ),
            34 => 
            array (
                'id' => '1321',
                'title' => 'Manufacturing Managers',
                'description' => 'Manufacturing managers plan, direct and coordinate activities concerned with the production of goods, the production and distribution of electricity, gas and water, and the collection, treatment and disposal of waste.  They may manage the production departments of large enterprises or be the managers of small manufacturing companies.
Tasks include –
(a) determining, implementing and monitoring production strategies, policies and plans;
(b) planning details of production activities in terms of output quality and quantity, cost, time available and labour requirements;
(c) controlling the operation of production plant and quality procedures through planning of maintenance, designation of operating hours and supply of parts and tools;
(d) establishing and managing budgets, monitoring production output and costs, and adjusting processes and resources to minimize costs;
(e) consulting with and informing other managers about production matters;
(f) overseeing the acquisition and installation of new plant and equipment;
(g) controlling the preparation of production records and reports;
(h) coordinating the implementation of occupational health and safety requirements;
(i) identifying business opportunities and determining products to be manufactured;
(j) researching and implementing regulatory and statutory requirements affecting manufacturing operations and the environment;
(k) overseeing the provision of quotations for the manufacture of specialized goods and establishing contracts with customers and suppliers;
(l) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Manufacturer
▪ Manufacturing manager
▪ Production and operations manager (manufacturing)
Some related occupations classified elsewhere:
▪ Production supervisor (manufacturing) – 3122',
            ),
            35 => 
            array (
                'id' => '1322',
                'title' => 'Mining Managers',
                'description' => 'Mining managers plan, direct and coordinate the production activities of mining, quarrying and oil and gas extraction operations, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.
Tasks include –
(a) conferring with other managers to set production quotas, plan extraction sites and develop policies for the removal of raw materials;
(b) evaluating efficiency of production sites to determine adequacy of personnel, equipment and technologies used, and make changes to work schedules or equipment when necessary;
(c) planning details of production activities in terms of output quality and quantity, cost, time available and labour requirements;
(d) controlling the operation of plant and quality procedures through planning of maintenance, designation of operating hours and supply of equipment;
(e) establishing and managing budgets, monitoring production output and costs, and adjusting processes and resources to minimize costs;
(f) overseeing the acquisition and installation of new plant and equipment;
(g) controlling the preparation of production records and reports;
(h) coordinating the implementation of health and safety requirements;
(i) researching and implementing regulatory and statutory requirements affecting mineral extraction operations and the environment;
(j) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Mine manager
▪ Production manager (mine)
▪ Production manager (oil and gas extraction)
▪ Production manager (quarry)
▪ Quarry manager
Some related occupations classified elsewhere:
▪ Mine deputy – 3121
▪ Mine supervisor – 3121
▪ Mine under-manager – 3121
▪ Quarry supervisor – 3121',
            ),
            36 => 
            array (
                'id' => '1323',
                'title' => 'Construction Managers',
                'description' => 'Construction managers plan, direct and coordinate the construction of civil engineering projects, buildings and dwellings, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.
Tasks include –
(a) interpreting architectural drawings and specifications;
(b) coordinating labour resources and procurement and delivery of materials, plant and equipment;
(c) negotiating with building owners, property developers and subcontractors involved in the construction process to ensure projects are completed on time and within budget;
(d) preparing tenders and contract bids;
(e) operating and implementing coordinated work programmes for sites;
(f) ensuring adherence to building legislation and standards of performance, quality, cost and safety;
(g) arranging submission of plans to local authorities;
(h) building under contract, or subcontracting specialized building services;
(i) arranging building inspections by relevant authorities;
(j) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(k) overseeing the selection, training and performance of staff and subcontractors.
Examples of the occupations classified here:
▪ Civil engineering project manager
▪ Construction project manager
▪ Project builder
Some related occupations classified elsewhere:
▪ Building construction supervisor – 3123
▪ House builder – 7111',
            ),
            37 => 
            array (
                'id' => '1324',
                'title' => 'Supply, Distribution and Related Managers',
                'description' => 'Supply, distribution and related managers plan, direct and coordinate passenger transportation systems and facilities and the supply, transportation, storage and distribution of goods, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.
Tasks include –
(a) determining, implementing and monitoring purchasing, storage and distribution strategies, policies and plans;
(b) preparing and implementing plans to maintain required stock levels at minimum cost;
(c) negotiating contracts with suppliers to meet quality, cost and delivery requirements;
(d) monitoring and reviewing storage and inventory systems to meet supply requirements, and control stock levels;
(e) overseeing the dispatch of road vehicles, trains, vessels or aircraft;
(f) operating recording systems to track all movements of goods, and ensuring reordering and restocking at optimal times;
(g) liaising with other departments and customers concerning requirements for outward goods and associated forwarding transportation;
(h) overseeing the recording of purchase, storage and distribution transactions;
(i) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(j) establishing and directing operational and administrative procedures;
(k) planning and directing daily operations;
(l) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Bus station manager
▪ Logistics manager
▪ Purchasing manager
▪ Railway station manager
▪ Railway station master
▪ Supply and distribution manager
▪ Supply chain manager
▪ Transport company manager
▪ Urban transit system manager
▪ Warehouse manager
Note
Chief executives of major airports, railway companies, urban transit systems and other transportation corporations that have hierarchies of managers are included in Unit Group 1120: Managing Directors and Chief Executives.',
            ),
            38 => 
            array (
                'id' => '133',
                'title' => 'Information and Communications Technology Services Managers',
                'description' => 'Information and communications technology services managers plan, direct and coordinate the acquisition, development, maintenance and use of computer and telecommunication systems, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.
Tasks performed usually include: consulting with users, management, vendors and technicians to assess computing needs and system requirements, and specifying technology to meet those needs; formulating and directing information and communication technology (ICT) strategies, policies and plans; directing the selection and installation of ICT resources and the provision of user training; directing ICT operations, analysing workflow, establishing priorities, developing standards and setting deadlines; overseeing the security of ICT systems; assigning, reviewing, managing and leading the work of systems analysts, programmers and other computer-related workers; evaluating the organization\'s technology use and needs and recommending improvements such as hardware and software upgrades; establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources; establishing and directing operational and administrative procedures; overseeing the selection, training and performance of staff; representing the enterprise or organization at ICT-related conventions, seminars and conferences.
Occupations in this minor group are classified into the following unit group:
1330 Information and Communications Technology Services Managers',
            ),
            39 => 
            array (
                'id' => '1330',
                'title' => 'Information and Communications Technology Services Managers',
                'description' => 'Information and communications technology services managers plan, direct and coordinate the acquisition, development, maintenance and use of computer and telecommunication systems, either as the manager of a department or as the general manager of an enterprise or organization that does not have a hierarchy of managers.
Tasks include –
(a) consulting with users, management, vendors and technicians to assess computing needs and system requirements, and specifying technology to meet those needs;
(b) formulating and directing information and communication technology (ICT) strategies, policies and plans;
(c) directing the selection and installation of ICT resources and the provision of user training;
(d) directing ICT operations, analysing workflow, establishing priorities, developing standards and setting deadlines;
(e) overseeing the security of ICT systems;
(f) assigning, reviewing, managing and leading the work of systems analysts, programmers and other computer-related workers;
(g) evaluating the organization\'s technology use and needs and recommending improvements such as hardware and software upgrades;
(h) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(i) establishing and directing operational and administrative procedures;
(j) overseeing the selection, training and performance of staff;
(k) representing the enterprise or organization at ICT-related conventions, seminars and conferences.
Examples of the occupations classified here:
▪ Application development manager
▪ Chief information officer
▪ Data operations manager
▪ Data processing manager
▪ ICT development manager
▪ Information systems director
▪ Information technology manager (IT manager)
▪ Internet service provider
▪ Network manager',
            ),
            40 => 
            array (
                'id' => '134',
                'title' => 'Professional Services Managers',
                'description' => 'Professional services managers plan, direct and coordinate the provision of child care, health, welfare, education and other professional services, and manage the branches of institutions providing financial and insurance services.
Tasks performed usually include: formulating policies and plans for the provision of services and operation of establishments; setting standards and objectives; developing and implementing programmes and services to meet the needs of clients; directing and coordinating the allocation of resources; liaising with parents, boards, funding bodies, the community representatives and related agencies to discuss areas of cooperation and coordination; monitoring and controlling expenditure; overseeing the selection, development and performance of staff; preparing, or arranging for the preparation of, reports, budgets and forecasts; representing the organization in negotiations with other agencies, and at conventions, seminars, public hearings and forums.
Occupations in this minor group are classified into the following unit groups:
1341 Child Care Services Managers
1342 Health Services Managers
1343 Aged Care Services Managers
1344 Social Welfare Managers
1345 Education Managers
1346 Financial and Insurance Services Branch Managers
1349 Professional Services Managers Not Elsewhere Classified
Note
Professional services managers are responsible for planning, directing and coordinating the provision of specialized professional and technical services. Specialized qualifications and extensive experience relevant to one or more occupations classified in Major Group 2: Professionals, or Major Group 3: Technicians and Associate Professionals, are usually required.',
            ),
            41 => 
            array (
                'id' => '1341',
                'title' => 'Child Care Services Managers',
                'description' => 'Child care services managers plan, direct, coordinate and evaluate the provision of care for children in before-school, after-school, vacation and day care centres and services.
Tasks include –
(a) developing and implementing programmes to enhance the physical, social, emotional and intellectual development of young children;
(b) establishing and monitoring budgets and determining allocation of funds for staff, supplies, materials, equipment and maintenance;
(c) overseeing and coordinating the provision of care for children in before-school, after-school, day and vacation care centres;
(d) directing and supervising child carers in providing care and supervision for young children;
(e) managing physical facilities and making sure all buildings and equipment are maintained to ensure the centre is a safe area for children, staff and visitors;
(f) reviewing and interpreting government codes, and developing procedures to meet codes (e.g. concerning safety and security);
(g) monitoring children\'s progress and conferring with parents or guardians;
(h) preparing and maintaining records and accounts for a child care centre;
(i) recruiting and evaluating staff and coordinating their professional development.
Example of the occupations classified here:
▪ Child care centre manager',
            ),
            42 => 
            array (
                'id' => '1342',
                'title' => 'Health Services Managers',
                'description' => 'Health services managers plan, direct, coordinate and evaluate the provision of clinical and community health care services in hospitals, clinics, public health agencies and similar organizations.
Tasks include –
(a) providing overall direction and management for the service, facility, organization or centre;
(b) directing, supervising and evaluating the work activities of medical, nursing, technical, clerical, service, maintenance and other personnel;
(c) establishing objectives and evaluative or operational criteria for units they manage;
(d) directing or conducting recruitment, hiring and training of personnel;
(e) developing, implementing and monitoring procedures, policies and performance standards for medical, nursing, technical and administrative staff;
(f) monitoring the use of diagnostic services, inpatient beds, facilities and staff to ensure effective use of resources, and assess the need for additional staff, equipment and services;
(g) controlling administrative operations such as budget planning, report preparation,sand expenditure on supplies, equipment and services;
(h) liaising with other health and welfare service providers, boards and funding bodies to coordinate the provision of services;
(i) advising government bodies about measures to improve health and welfare services and facilities;
(j) representing the organization in negotiations, and at conventions, seminars, public hearings and forums.
Examples of the occupations classified here:
▪ Chief public health officer
▪ Clinical director
▪ Community health care coordinator
▪ Director of nursing
▪ Health facility administrator
▪ Hospital matron
▪ Medical administrator
Some related occupations classified elsewhere:
▪ Aged care services manager – 1343',
            ),
            43 => 
            array (
                'id' => '1343',
                'title' => 'Aged Care Services Managers',
                'description' => 'Aged care services managers plan, direct, coordinate and evaluate the provision of residential and personal care services for individuals and families who are in need of such services due to the effects of ageing.
Tasks include –
(a) providing overall direction and management for a service, facility, organization or centre;
(b) directing, supervising and evaluating the work activities of medical, nursing, technical, clerical, service, maintenance and other personnel;
(c) establishing objectives and evaluative or operational criteria for units they manage;
(d) directing or conducting recruitment, hiring and training of personnel;
(e) developing, implementing and monitoring procedures, policies and performance standards for nursing, personal care, technical and administrative staff;
(f) coordinating and administering welfare programmes and care services for the elderly;
(g) controlling administrative operations such as budget planning, report preparation, and expenditure on supplies, equipment and services;
(h) liaising with other health and welfare providers, boards and funding bodies to coordinate the provision of services;
(i) advising government bodies about measures to improve health and welfare services and facilities;
(j) representing the organization in negotiations, and at conventions, seminars, public hearings and forums.
Examples of occupations classified here:
▪ Aged care home director
▪ Community aged care coordinator
▪ Nursing home director
▪ Retirement village coordinator
Some related occupations classified elsewhere:
▪ Health services manager – 1342',
            ),
            44 => 
            array (
                'id' => '1344',
                'title' => 'Social Welfare Managers',
                'description' => 'Social welfare managers plan, direct and coordinate the provision of social and community service programmes such as income support, family assistance, children\'s services and other community programmes and services.
Tasks include –
(a) providing overall direction and management for a service, facility, organization or centre;
(b) developing, implementing and monitoring procedures, policies and standards for staff;
(c) monitoring and evaluating resources devoted to the provision of welfare, housing and other social services;
(d) controlling administrative operations such as budget planning, report preparation, and expenditure on supplies, equipment and services;
(e) liaising with other welfare and health services providers, boards and funding bodies to discuss areas of health and welfare service cooperation and coordination;
(f) advising government bodies about measures to improve welfare services and facilities;
(g) representing the organization in negotiations, and at conventions, seminars, public hearings and forums;
(h) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(i) establishing and directing operational and administrative procedures;
(j) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Community centre manager
▪ Family services manager
▪ Housing services manager
▪ Welfare centre manager',
            ),
            45 => 
            array (
                'id' => '1345',
                'title' => 'Education Managers',
                'description' => 'Education managers plan, direct, coordinate and evaluate the educational and administrative aspects of education services, primary and secondary schools, colleges and faculties and departments in universities and other educational institutions.
Tasks include –
(a) determining educational programmes based on frameworks established by education authorities and governing bodies;
(b) implementing systems and procedures to monitor school performance and student enrolments;
(c) directing administrative and clerical activities concerning student admissions and educational services;
(d) controlling administrative operations such as budget planning, report preparation, and expenditure on supplies, equipment and services;
(e) providing leadership and guidance to teaching, academic and administrative staff as well as to students;
(f) evaluating the work of teachers and lecturers by visiting classrooms, observing teaching methods, reviewing instructional objectives and examining learning materials;
(g) promoting the educational programme, and representing the service or institution in the wider community;
(h) supervising the maintenance of educational facilities;
(i) developing and enforcing a disciplinary code to create a safe and conducive environment for students and teachers;
(j) organizing and implementing methods of raising additional funds in conjunction with parent and community groups and sponsors;
(k) controlling selection, training and supervision of staff.
Examples of the occupations classified here:
▪ College director
▪ Dean (university)
▪ Head teacher
▪ School principal',
            ),
            46 => 
            array (
                'id' => '1346',
                'title' => 'Financial and Insurance Services Branch Managers',
                'description' => 'Financial and insurance services branch managers plan, direct and coordinate the branches of institutions that provide financial and insurance services, such as banks, building societies, credit unions and insurance companies. They provide advice and assistance to clients on financial and insurance matters.
Tasks include –
(a) planning, directing and coordinating the activities of staff in the branch;
(b) establishing and maintaining relationships with individual and business customers;
(c) providing advice and assistance to customers on their financial and insurance needs and on matters such as changes in law that may affect customers;
(d) examining, evaluating and processing loan and insurance applications;
(e) monitoring credit extension decisions;
(f) conducting financial investigations;
(g) overseeing the flow of cash and financial instruments, and the preparation of financial and regulatory reports;
(h) approving or rejecting, or coordinating the approval or rejection of, lines of credit for commercial, real estate and personal loans;
(i) coordinating cooperation with other branches of the company;
(j) managing budgets, controlling expenditure and ensuring the efficient use of resources;
(k) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Bank manager
▪ Building society manager
▪ Credit union manager
▪ Financial institution branch manager
▪ Insurance agency manager
Some related occupations classified elsewhere:
▪ Finance manager – 1211
▪ Credit and loans officers – 3312
▪ Insurance agent – 3321',
            ),
            47 => 
            array (
                'id' => '1349',
                'title' => 'Professional Services Managers Not Elsewhere Classified',
                'description' => 'This unit group covers managers who plan, direct, coordinate and evaluate the provision of specialized professional and technical services and are not classified in Minor Group 121: Business Services and Administration Managers, or elsewhere in Minor Group 134: Professional Services Managers. For instance, managers responsible for the provision of policing, correctional, library, legal and fire services are classified here.
In such cases tasks would include –
(a) providing overall direction and management for a service, facility, organization or centre;
(b) developing, implementing and monitoring procedures, policies and standards for staff;
(c) directing, supervising and evaluating the work activities of professional, technical, clerical, service, maintenance and other personnel;
(d) monitoring and evaluating resources devoted to the provision of services;
(e) controlling administrative operations such as budget planning, report preparation, and expenditure on supplies, equipment and services;
(f) planning, directing and coordinating the provision of services;
(g) coordinating cooperation with other service provision agencies in the same or related fields;
(h) managing budgets, controlling expenditure and ensuring the efficient use of resources;
(i) overseeing the selection, training and performance of staff.
Examples of the occupations classified here:
▪ Archives manager
▪ Art gallery manager
▪ Correctional services manager
▪ Legal service manager
▪ Library manager
▪ Museum manager
▪ Police superintendent
▪ Prison governor
Note
Professional services managers are responsible for planning, directing and coordinating the provision of specialized professional and technical services. Specialized qualifications and extensive experience relevant to one or more occupations classified in Major Group 2: Professionals, or Major Group 3: Technicians and Associate Professionals, are usually required.',
            ),
            48 => 
            array (
                'id' => '14',
                'title' => 'Hospitality, Retail and Other Services Managers',
                'description' => 'Hospitality, retail and other services managers plan, organize and direct the operations of establishments which provide accommodation, hospitality, retail and other services. Competent performance in most occupations in this sub-major group requires skills at the third ISCO skill level.
Tasks performed by workers in this sub-major group usually include:  planning and organizing special functions, sporting, gaming and entertainment activities and the range and mix of products, stock levels and service standards; promoting and selling goods and services;  observing liquor, gaming, health and other laws and regulations;   developing and reviewing policies, programmes and procedures concerning customer relations and goods and services provided; promoting facilities for conferences, conventions and trade shows to potential customers; organizing the purchase and maintenance of transport vehicles, equipment and fuel, and transporting goods;  controlling the selection, training and supervision of staff;  ensuring compliance with occupational health and safety regulations.
Occupations in this sub-major group are classified into the following minor groups:
141 Hotel and Restaurant Managers
142 Retail and Wholesale Trade Managers
143 Other Services Managers
Notes
Sub-major Group 14: Hospitality, Retail and Other Services Managers is for managers of establishments that provide services directly to the public, usually in organizations that are too small to have hierarchies of managers. Managers responsible for planning, directing and coordinating the provision of specialized professional and technical services that usually require specialized qualifications are classified in various unit groups in Sub-major Groups 12: Administrative and Commercial Managers and 13: Production and Specialized Services Managers.
Operators of small shops, guest houses, cafés, restaurants and bars for whom the management and supervision of staff is not a significant component of the work are classified in the relevant unit group  in Sub-major Groups  51: Personal Services Workers or 52: Sales Workers, depending on the main tasks performed.',
            ),
            49 => 
            array (
                'id' => '141',
                'title' => 'Hotel and Restaurant Managers',
                'description' => 'Hotel and restaurant managers plan, organize and direct the operations of establishments that provide accommodation, meals, beverages and other hospitality services.
Tasks performed usually include: planning and organizing special functions and sporting, gaming and entertainment activities; directing and overseeing reservation, reception, room service and housekeeping activities; observing liquor, gaming, health and other laws and regulations; monitoring quality at all stages of preparation and presentation of food and services; controlling the selection, training and supervision of staff; ensuring compliance with occupational health and safety regulations.
Occupations in this minor group are classified into the following unit groups:
1411 Hotel Managers
1412 Restaurant Managers',
            ),
            50 => 
            array (
                'id' => '1411',
                'title' => 'Hotel Managers',
                'description' => 'Hotel managers plan, organize and direct the operations of hotels, motels and similar establishments to provide guest accommodation and other services.
Tasks include –
(a) directing and overseeing reservation, reception, room service and housekeeping activities;
(b) supervising security arrangements and garden and property maintenance;
(c) planning and supervising bar, restaurant, function and conference activities;
(d) observing liquor, gaming and other laws and regulations;
(e) assessing and reviewing customer satisfaction;
(f) overseeing accounting and purchasing activities;
(g) undertaking budgeting for the establishment;
(h) controlling selection, training and supervision of staff;
(i) ensuring compliance with occupational health and safety regulations;
(j) providing guests with local tourism information, and arranging tours and transportation.
Examples of the occupations classified here:
▪ Hotel manager
▪ Motel manager
▪ Youth hostel manager
Some related occupations classified elsewhere:
▪ Bed and breakfast operator – 5152
Notes
Operators of small establishments, such as some bed and breakfast establishments and small guest houses that provide accommodation and limited meal services to clients effectively as paying guests in private households, and for whom the management and supervision of staff is not a significant component of the work, are classified in Unit Group 5152: Domestic Housekeepers.
Chief executive officers and specialized managers of hotel management companies or hotel chains are classified in the relevant unit group in Sub-major Groups 11 and 12.',
            ),
            51 => 
            array (
                'id' => '1412',
                'title' => 'Restaurant Managers',
                'description' => 'Restaurant managers plan, organize and direct the operations of cafés, restaurants and related establishments to provide dining and catering services.
Tasks include –
(a) planning menus in consultation with chefs and cooks;
(b) planning and organizing special functions;
(c) arranging the purchasing and pricing of goods according to budget;
(d) maintaining records of stock levels and financial transactions;
(e) ensuring that dining, kitchen and food storage facilities comply with health regulations and are clean, functional and of suitable appearance;
(f) conferring with customers to assess their satisfaction with meals and service;
(g) selecting staff, setting staff work schedules, and training and supervising waiting and kitchen staff;
(h) taking reservations, greeting guests and assisting in taking orders;
(i) negotiating arrangements with clients and suppliers;
(j) ensuring compliance with occupational health and safety regulations.
Examples of the occupations classified here:
▪ Café manager
▪ Catering manager
▪ Restaurant manager
Some related occupations classified elsewhere:
▪ Chef – 3434
Note
Operators of small cafés, restaurants and bars for whom the management and supervision of staff is not a significant component of the work are classified in Unit Groups 5120: Cooks, 5131: Waiters or 5132: Bartenders, depending on the main tasks performed.',
            ),
            52 => 
            array (
                'id' => '142',
                'title' => 'Retail and Wholesale Trade Managers',
                'description' => 'Retail and wholesale trade managers plan, organize, coordinate and control the operations of establishments that sell goods on a retail or wholesale basis. They are responsible for the budgets, staffing and strategic and operational direction of shops, or of organizational units within shops that sell particular types of product.
Tasks performed usually include: determining product mix, stock levels and service standards; formulating and implementing purchasing and marketing policies, and setting prices; promoting and advertising the establishment\'s goods and services; maintaining records of stock levels and financial transactions; undertaking budgeting for the establishment; controlling selection, training and supervision of staff; ensuring compliance with occupational health and safety regulations.
Occupations in this minor group are classified into the following unit group:
1420 Retail and Wholesale Trade Managers
Notes
Retail and wholesale trade managers are frequently employed in relatively small establishments that do not have a hierarchy of managers. The managers of large retail establishments such as supermarkets and department stores, however, should also be classified in this group, although such establishments may have a hierarchy of managers and supervisors. General managers of groups of establishments such as supermarket or department store chains are classified, however, in Unit Group 1120: Managing Directors and Chief Executives.
Operators of small shops for whom the management and supervision of staff is not a significant component of the work are classified in Unit Group 5221: Shopkeepers.
Staff who control and direct the activities of shop sales assistants, checkout operators and other workers, but who do not take responsibility for determining product mix, overall setting of prices, budgets and staffing levels, selection and recruitment are classified in Unit Group 5222: Shop Supervisors.',
            ),
            53 => 
            array (
                'id' => '1420',
                'title' => 'Retail and Wholesale Trade Managers',
                'description' => 'Retail and wholesale trade managers, plan, organize, coordinate and control the operations of establishments that sell goods on a retail or wholesale basis. They are responsible for the budgets, staffing and strategic and operational direction of shops, or of organizational units within shops that sell particular types of product.
Tasks include –
(a) determining product mix, stock levels and service standards;
(b) formulating and implementing purchasing and marketing policies, and setting prices;
(c) promoting and advertising the establishment\'s goods and services;
(d) maintaining records of stock levels and financial transactions;
(e) undertaking budgeting for the establishment;
(f) controlling selection, training and supervision of staff;
(g) ensuring compliance with occupational health and safety regulations.
Examples of the occupations classified here:
▪ Grocery manager
▪ Retail manager
▪ Shop manager
▪ Supermarket manager
Some related occupations classified elsewhere:
▪ Sales manager – 1221
▪ Shopkeeper – 5221
▪ Shop supervisor – 5222
▪ Shop sales assistant – 5223
Notes
Retail and wholesale trade managers are frequently employed in relatively small establishments that do not have a hierarchy of managers. The managers of large retail establishments such as supermarkets and department stores, however, should generally also be classified in this group, although such establishments may have a hierarchy of managers and supervisors. General managers of groups of establishments such as supermarket or department store chains are classified, however, in Unit Group 1120: Managing Directors and Chief Executives.
Operators of small shops for whom the management and supervision of staff is not a significant component of the work are classified in Unit Group 5221: Shopkeepers.
Staff who control and direct the activities of shop sales assistants, checkout operators and other workers, but who do not take responsibility for determining product mix, overall setting of prices, budgets and staffing levels, selection and recruitment, are classified in Unit Group 5222: Shop Supervisors.',
            ),
            54 => 
            array (
                'id' => '143',
                'title' => 'Other Services Managers',
                'description' => 'Other services managers plan, organize and control the operations of establishments that provide sporting, cultural, recreational, travel, customer contact and other amenity services.
Tasks performed usually include: planning and organizing the range and mix of services or activities provided; ensuring that facilities are kept clean and in good condition; keeping abreast of new trends and developments relevant to the service provided; advising on the facilities available and promoting publicity; checking and keeping custody of all cash receipts and making regular stock checks; establishing and managing budgets; controlling expenditure and ensuring the efficient use of resources; planning and directing daily operations; controlling the selection, supervision and performance of staff; ensuring compliance with health and safety requirements.
Occupations in this minor group are classified into the following unit groups:
1431 Sports, Recreation and Cultural Centre Managers
1439 Services Managers Not Elsewhere Classified',
            ),
            55 => 
            array (
                'id' => '1431',
                'title' => 'Sports, Recreation and Cultural Centre Managers',
                'description' => 'Sports, recreation and cultural centre managers plan, organize and control the operations of establishments that provide sporting, artistic, theatrical and other recreational and amenity services.
Tasks include –
(a) planning and organizing the range and mix of entertainment, attractions, cultural activities and sports and fitness programmes to be offered by the centre;
(b) ensuring that facilities are kept clean and in good condition;
(c) keeping abreast of new trends and developments in the creative arts and arranging theatrical productions and performances by bands and orchestras;
(d) advising on the facilities available and promoting publicity in relation to events, shows and activities;
(e) checking and keeping custody of all cash receipts and making regular stock checks;
(f) establishing and managing budgets, controlling expenditure and ensuring the efficient use of resources;
(g) planning and directing daily operations;
(h) controlling the selection, supervision and performance of staff;
(i) ensuring compliance with health and safety regulations.
Examples of the occupations classified here:
▪ Amusement park manager
▪ Billiards or pool hall manager
▪ Casino manager
▪ Cinema manager
▪ Leisure centre manager
▪ Riding school manager
▪ Sports centre manager
▪ Theatre manager
▪ Theme park manager
Some related occupations classified elsewhere:
▪ Art gallery manager – 1349
▪ Library manager – 1349
▪ Museum manager – 1349',
            ),
            56 => 
            array (
                'id' => '1439',
                'title' => 'Services Managers Not Elsewhere Classified',
                'description' => 'This unit group covers managers that plan, direct and coordinate the provision of services and are not classified in Sub-major Group 13: Production and Specialized Services Managers or elsewhere in Sub-major Group 14: Hospitality, Retail and Other Services Managers. For instance, managers of travel agencies, conference centres, contact centres and shopping centres are classified here.
Examples of the occupations classified here:
▪ Camp site manager
▪ Caravan park manager
▪ Conference centre manager
▪ Contact centre manager
▪ Shopping centre manager
▪ Travel agency manager
Note
Excluded from this unit group are occupations that involve managing the provision of specialized professional and technical services and require specialized qualifications and experience relevant to one or more occupations classified in Major Group 2:  Professionals or in Major Group 3: Technicians and Associate Professionals. These managerial occupations are classified in various unit groups in Sub-major Groups 12: Administrative and Commercial Managers and 13: Production and Specialized Services Managers.',
            ),
            57 => 
            array (
                'id' => '2',
                'title' => 'Professionals',
                'description' => 'Professionals increase the existing stock of knowledge; apply scientific or artistic concepts and theories; teach about the foregoing in a systematic manner; or engage in any combination of these activities. Competent performance in most occupations in this major group requires skills at the fourth ISCO skill level.
Tasks performed by professionals usually include: conducting analysis and  research, and developing concepts, theories and operational methods; advising on or applying existing knowledge related to physical sciences, mathematics, engineering and technology, life sciences, medical and health services, social sciences and humanities; teaching the theory and practice of one or more disciplines at different educational levels; teaching and educating persons with learning difficulties or special needs;  providing various business, legal and social services; creating and performing works of art; providing spiritual guidance; preparing scientific papers and reports. Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
21 Science and Engineering Professionals
22 Health Professionals
23 Teaching Professionals
24 Business and Administration Professionals
25 Information and Communications Technology Professionals
26 Legal, Social and Cultural Professionals',
            ),
            58 => 
            array (
                'id' => '21',
                'title' => 'Science and Engineering Professionals',
                'description' => 'Science and engineering professionals conduct research; improve or develop concepts, theories and operational methods; or apply scientific knowledge relating to fields such as physics, astronomy, meteorology, chemistry, geophysics, geology, biology, ecology, pharmacology, medicine, mathematics, statistics, architecture, engineering, design and technology.  Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed by workers in this sub-major group usually include: conducting research, enlarging, advising on or applying scientific knowledge obtained through the study of structures and properties of physical matter and phenomena, chemical characteristics and processes of various substances, materials and products, all forms of human, animal and plant life and of mathematical and statistical concepts and methods; advising on, designing and directing construction of buildings, towns and traffic systems, or civil engineering and industrial  structures, as well as machines and other equipment; advising on and applying mining methods and ensuring their optimum use; surveying land and sea and making maps; studying and advising on technological aspects of particular materials, products and processes, and on efficiency of production and work organization; preparing scientific papers and reports. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
211 Physical and Earth Science Professionals
212 Mathematicians, Actuaries and Statisticians
213 Life Science Professionals
214 Engineering Professionals (excluding Electrotechnology)
215 Electrotechnology Engineers
216 Architects, Planners, Surveyors and Designers',
            ),
            59 => 
            array (
                'id' => '211',
                'title' => 'Physical and Earth Science Professionals',
                'description' => 'Physical and earth science professionals conduct research; improve or develop concepts, theories and operational methods; or apply scientific knowledge relating to physics, astronomy, meteorology, chemistry, geology and geophysics.
Tasks performed usually include: enlarging scientific knowledge through research and experiments related to mechanics, thermodynamics, optics, sonics, electricity, magnetism, electronics, nuclear physics, astronomy, various branches of chemistry, atmospheric conditions and the physical nature of the Earth; advising on or applying this knowledge in such fields as manufacturing, agriculture, medicine, navigation, space exploration, oil, gas, water and mineral exploitation, telecommunications and other services, or civil engineering; preparing scientific papers and reports.
Occupations in this minor group are classified into the following unit groups:
2111 Physicists and Astronomers
2112 Meteorologists
2113 Chemists
2114 Geologists and Geophysicists',
            ),
            60 => 
            array (
                'id' => '2111',
                'title' => 'Physicists and Astronomers',
                'description' => 'Physicists and astronomers conduct research and improve or develop concepts, theories and operational methods concerning matter, space, time, energy, forces and fields and the interrelationship between these physical phenomena. They apply scientific knowledge relating to physics and astronomy in industrial, medical, military or other fields.
Tasks include –
(a) conducting research and improving or developing concepts, theories, instrumentation, software and operational methods related to physics and astronomy;
(b) conducting experiments, tests and analyses on the structure and properties of matter in fields such as mechanics, thermodynamics, electronics, communications, power generation and distribution, aerodynamics, optics and lasers, remote sensing, medicine, sonics, magnetism and nuclear physics;
(c) evaluating results of investigations and experiments and expressing conclusions, mainly using mathematical techniques and models;
(d) applying principles, techniques and processes to develop or improve industrial, medical, military and other practical applications of the principles and techniques of physics or astronomy;
(e) ensuring the safe and effective delivery of radiation (ionizing and non-ionizing) to patients to achieve a diagnostic or therapeutic result as prescribed by a medical practitioner;
(f) ensuring the accurate measurement and characterization of physical quantities used in medical applications;
(g) testing, commissioning and evaluating equipment used in applications such as imaging, medical treatment and dosimetry;
(h) advising and consulting with medical practitioners and other health care professionals in optimizing the balance between the beneficial and deleterious effects of radiation;
(i) observing, analysing and interpreting celestial phenomena and developing methods, numerical models and techniques to extend knowledge of fields such as navigation, satellite communication, space exploration, celestial bodies and cosmic radiation;
(j) developing, implementing and maintaining standards and protocols for the measurement of physical phenomena and for the use of nuclear technology in industrial and medical applications;
(k) preparing scientific papers and reports.
Examples of the occupations classified here:
▪ Astronomer
▪ Medical physicist
▪ Nuclear physicist
▪ Physicist
Some related occupations classified elsewhere:
▪ Radiation oncologist – 2212
▪ Radiologist – 2212
▪ Specialist physician (nuclear medicine) – 2212
▪ Radiographer – 3211
Note
It should be noted that, while they are appropriately classified in this unit group with other physicists, medical physicists are considered to be an integral part of the health workforce alongside those occupations classified in Sub-major Group 22: Health Professionals and others classified in a number of other unit groups in Major Group 2: Professionals.',
            ),
            61 => 
            array (
                'id' => '2112',
                'title' => 'Meteorologists',
                'description' => 'Meteorologists prepare short-term or long-term weather forecasts used in aviation, shipping, agriculture and other areas and for the information of the general public. They conduct research related to the composition, structure and dynamics of the atmosphere.
Tasks include –
(a) investigating direction and speed of air movements, pressures, temperatures, humidity, physical and chemical transformation of pollutants and other phenomena such as cloud formation and precipitation, electrical disturbances or solar radiation;
(b) studying data collected from meteorological stations, radar and satellite imagery and computer model output to plot and forecast weather conditions;
(c) preparing and reporting short-term or long-term weather maps, forecasts and warnings relating to atmospheric phenomena such as cyclones, storms and other hazards to life and property, and disseminating information about atmospheric conditions through a variety of media including radio, television, print and the Internet;
(d) conducting experiments in fog dispersal, cloud seeding, rain enhancement and other types of weather modification programmes;
(e) developing and testing mathematical computer models of weather and climate for experimental or operational use;
(f) participating in studies of the effect of weather on the environment;
(g) analysing the impact of industrial projects and human activity on the climate and quality of the air, and working with the social science, engineering and economic communities to develop appropriate mitigation strategies;
(h) engaging in the design and development of new equipment and procedures for meteorological data collection and remote sensing, or for related applications;
(i) conducting research on and improving or developing concepts, theories and operational methods related to the composition, structure and dynamics of the atmosphere, and preparing scientific papers and reports on the outcome of this research.
Examples of the occupations classified here:
▪ Climatologist
▪ Hydrometeorologist
▪ Meteorologist
▪ Weather forecaster',
            ),
            62 => 
            array (
                'id' => '2113',
                'title' => 'Chemists',
                'description' => 'Chemists conduct research, improve or develop concepts, theories and operational methods, or apply scientific knowledge relating to chemistry, to develop new knowledge or products and for quality and process control.
Tasks include –
(a) conducting research and improving or developing concepts, instruments, theories and operational methods related to chemistry;
(b) conducting experiments, tests and analyses to investigate chemical composition and energy and chemical changes in various natural or synthetic substances, materials and products;
(c) developing procedures for environmental control, quality control and various other procedures for manufacturers or users;
(d) conducting programmes of sample and data collection and analysis to identify and quantify environmental toxicants;
(e) participating in interdisciplinary research and development projects working with chemical engineers, biologists, microbiologists, agronomists, geologists or other professionals;
(f) using micro-organisms to convert substances into new compounds;
(g) determining ways to strengthen or combine materials or develop new materials.
(h) reproducing and synthesizing naturally occurring substances and creating new artificial substances;
(i) preparing scientific papers and reports.
Example of the occupations classified here:
▪ Chemist
Some related occupations classified elsewhere:
▪ Biochemist – 2131
▪ Pharmacologist – 2131
▪ Pharmacist – 2262',
            ),
            63 => 
            array (
                'id' => '2114',
                'title' => 'Geologists and Geophysicists',
                'description' => 'Geologists and geophysicists conduct research; improve or develop concepts, theories and operational methods; or apply scientific knowledge relating to geology and geophysics in such fields as oil, gas and mineral exploration and extraction, water conservation, civil engineering, telecommunications and navigation, and assessment and mitigation of the effects of development and waste disposal projects on the environment.
Tasks include –
(a) conducting research and improving or developing concepts, theories and operational methods related to geology and geophysics;
(b) studying composition and structure of the Earth\'s crust, examining rocks, minerals, fossils and other materials to determine processes affecting the development of the Earth, trace evolution of past life, establish the nature and chronology of geological formations and assess their commercial applications;
(c) interpreting research data and preparing geological reports, maps, charts and diagrams, reports and papers;
(d) applying geological knowledge to problems encountered in civil engineering projects such as the construction of dams, bridges, tunnels, and large buildings, and land reclamation projects;
(e) using various remote sensing programmes to investigate and measure seismic, gravitational, electrical, thermal and magnetic forces affecting the Earth;
(f) estimating weight, size and mass of the Earth and composition and structure of its interior, and studying the nature, activity and predictability of volcanoes, glaciers and earthquakes;
(g) charting the Earth\'s magnetic field and applying this and other collected data for broadcasting, navigation and other purposes;
(h) studying and measuring physical properties of seas and the atmosphere and their interrelationship, such as the exchange of thermal energy;
(i) locating and determining the nature and extent of oil, gas and mineral deposits using seismological, gravimetric, magnetic, electrical or radiometric methods;
(j) identifying deposits of construction materials and determining their characteristics and suitability for use as concrete aggregates, road fill or for other applications;
(k) researching the movement, distribution and physical properties of ground and surface waters;
(l) advising in areas such as waste management, route and site selection and the restoration of contaminated sites.
Examples of the occupations classified here:
▪ Geological oceanographer
▪ Geologist
▪ Geophysical oceanographer
▪ Geophysicist
▪ Geoscientist',
            ),
            64 => 
            array (
                'id' => '212',
                'title' => 'Mathematicians, Actuaries and Statisticians',
                'description' => 'Mathematicians, actuaries and statisticians conduct research; improve or develop mathematical, actuarial and statistical concepts, theories and operational models and techniques; and apply this knowledge to a wide range of tasks in such fields as engineering, business and social and other sciences.
Tasks performed usually include: studying, improving and developing mathematical, actuarial and statistical theories and techniques; advising on or applying mathematical principles, models and techniques to a wide range of tasks in the fields of engineering, natural, social or life sciences; conducting logical analyses of management problems, especially in terms of input-output effectiveness, and formulating mathematical models of each problem usually for programming and solution by computer; designing and putting into operation pension schemes and life, health, social and other types of insurance systems; applying mathematics, statistics, probability and risk theory to assess potential financial impacts of future events; planning and organizing surveys and other statistical collections, and designing questionnaires; evaluating, processing, analysing and interpreting statistical data and preparing them for publication; advising on or applying various data collection methods and statistical methods and techniques, and determining reliability of findings, especially in such fields as business or medicine as well as in other areas of natural, social or life sciences; preparing scientific papers and reports; supervising the work of mathematical, actuarial and statistical assistants and statistical clerks.
Occupations in this minor group are classified into the following unit group:
2120 Mathematicians, Actuaries and Statisticians',
            ),
            65 => 
            array (
                'id' => '2120',
                'title' => 'Mathematicians, Actuaries and Statisticians',
                'description' => 'Mathematicians, actuaries and statisticians conduct research and improve or develop mathematical, actuarial and statistical concepts, theories and operational methods and techniques and advise on or engage in their practical application in such fields as engineering, business and social and other sciences.
Tasks include –
(a) studying, improving and developing mathematical, actuarial and statistical theories and techniques;
(b) advising on or applying mathematical principles, models and techniques to a wide range of tasks in the fields of engineering, natural, social or life sciences;
(c) conducting logical analyses of management problems, especially in terms of input-output effectiveness, and formulating mathematical models of each problem usually for programming and solution by computer;
(d) designing and putting into operation pension schemes and life, health, social and other types of insurance systems;
(e) applying mathematics, statistics, probability and risk theory to assess potential financial impacts of future events;
(f) planning and organizing surveys and other statistical collections, and designing questionnaires;
(g) evaluating, processing, analysing and interpreting statistical data and preparing them for publication;
(h) advising on or applying various data collection methods and statistical methods and techniques, and determining reliability of findings, especially in such fields as business or medicine as well as in other areas of natural, social or life sciences;
(i) preparing scientific papers and reports;
(j) supervising the work of mathematical, actuarial and statistical assistants and statistical clerks.
Examples of the occupations classified here:
▪ Actuary
▪ Demographer
▪ Mathematician
▪ Operations research analyst
▪ Statistician
Some related occupations classified elsewhere:
▪ Information systems analyst – 2511
▪ Actuarial assistant – 3314
▪ Mathematical assistant – 3314
▪ Statistical assistant – 3314
▪ Actuarial clerk – 4312
▪ Statistical clerk – 4312',
            ),
            66 => 
            array (
                'id' => '213',
                'title' => 'Life Science Professionals',
                'description' => 'Life science professionals apply knowledge gained from research into human, animal and plant life and their interactions with each other and the environment to develop new knowledge, improve agricultural and forestry production, and solve human health and environmental problems.
Tasks performed usually include: collecting, analysing and evaluating experimental and field data to identify and develop new processes and techniques; providing advice and support to governments, organizations and businesses about ecological sustainable development of natural resources.
Occupations in this minor group are classified into the following unit groups:
2131 Biologists, Botanists, Zoologists and Related Professionals
2132 Farming, Forestry and Fisheries Advisers
2133 Environmental Protection Professionals',
            ),
            67 => 
            array (
                'id' => '2131',
                'title' => 'Biologists, Botanists, Zoologists and Related Professionals',
                'description' => 'Biologists, botanists, zoologists and related professionals study living organisms and their interactions with each other and with the environment, and apply this knowledge to solving human health and environmental problems. They work in diverse fields such as botany, zoology, ecology, marine biology, genetics, immunology, pharmacology, toxicology, physiology, bacteriology and virology.
Tasks include –
(a) undertaking research in laboratories and in the field to increase scientific knowledge of living organisms, to discover new information, to test hypotheses, to solve problems in areas such as the environment, agriculture and health, and to develop new products, processes and techniques for pharmaceutical, agricultural and environmental use;
(b) designing and conducting experiments and tests;
(c) gathering human, animal, insect and plant specimens and data, and studying their origin, development, chemical and physical form, structure, composition, and life and reproductive processes;
(d) examining living organisms using a variety of specialized equipment, instruments, technologies and techniques such as electron microscopes, telemetry, global positioning systems, biotechnology, satellite imaging, genetic engineering, digital imaging analysis, polymerase chain reaction and computer modelling;
(e) identifying, classifying, recording and monitoring living organisms and maintaining databases;
(f) writing scientific papers and reports detailing research and any new findings which are then made available to the scientific community in scientific journals or at conferences for scrutiny and further debate;
(g) designing and carrying out environmental impact assessments to identify changes caused by natural or human factors;
(h) providing advice to governments, organizations and businesses in areas such as conservation, management of natural resources, and the effects of climate change and pollution.
Examples of the occupations classified here:
▪ Animal behaviourist
▪ Bacteriologist
▪ Biochemist
▪ Biologist
▪ Biomedical researcher
▪ Biotechnologist
▪ Botanist
▪ Cell geneticist
▪ Marine biologist
▪ Microbiologist
▪ Molecular biologist
▪ Molecular geneticist
▪ Pharmacologist
▪ Zoologist
Some related occupations classified elsewhere:
▪ Ecologist – 2133
Notes
Medical research professionals who participate in biomedical research using living organisms and do not undertake clinical practice are classified in Unit Group 2131: Biologists, Botanists, Zoologists and Related Professionals. Those who also undertake clinical practice are classified in Minor Group 221: Medical Doctors.',
            ),
            68 => 
            array (
                'id' => '2132',
                'title' => 'Farming, Forestry and Fisheries Advisers',
                'description' => 'Farming, forestry and fisheries advisers study and provide assistance and advice on farm, forestry and fisheries management, including cultivation, fertilization, harvesting, soil erosion and composition, disease prevention, nutrition, crop rotation and marketing. They develop techniques for increasing productivity, and study and develop plans and policies for land and fisheries management.
Tasks include –
(a) collecting and analysing data and samples related to produce, feed, soil, water quality and other factors affecting farm, forest or fishery production;
(b) advising on techniques for improving the production of crops, livestock and fish, and alternative production options;
(c) advising on livestock and crop disease, control of pests and weeds, soil improvement, animal husbandry and feeding programmes;
(d) studying the environmental factors affecting commercial crop production, pasture growth, animal breeding, fish stocks and the growth and health of forest trees;
(e) studying the effects of cultivation techniques, soils, insects, diseases and fisheries practices on animal, crop, forestry and fisheries yield;
(f) studying fish migration, growth, feeding and spawning, and devising methods of collecting, fertilizing, incubating and hatching fish eggs;
(g) researching into characteristics, use capability and productivity of soils, and applying findings to development of improved agricultural, horticultural and forestry practices;
(h) developing procedures and techniques for solving agricultural problems and improving the efficiency of production;
(i) managing forest and fisheries resources to maximize their long-term commercial, recreational and environmental benefits;
(j) studying the propagation and culture of forest trees, methods for improving the growth of stock, and the effects of thinning on forest yields;
(k) investigating, planning and implementing management procedures to cope with the effects of fires, floods, droughts, soil erosion, pests and diseases;
(l) preparing scientific reports and conducting advisory information sessions and lectures for farming, forestry and fishing communities and other groups.
Examples of the occupations classified here:
▪ Agronomist
▪ Fisheries adviser
▪ Forestry adviser
▪ Forestry scientist
▪ Horticultural scientist
▪ Silviculturist
▪ Soil scientist',
            ),
            69 => 
            array (
                'id' => '2133',
                'title' => 'Environmental Protection Professionals',
                'description' => 'Environmental protection professionals study and assess the effects on the environment of human activity such as air, water and noise pollution, soil contamination, climate change, toxic waste and depletion and degradation of natural resources. They develop plans and solutions to protect, conserve, restore, minimize and prevent further damage to the environment.
Tasks include –
(a) conducting research, performing tests, collecting samples, performing field and laboratory analysis to identify sources of environmental problems, and recommending ways to prevent, control and remediate the impact of such problems;
(b) assessing the likely impact that potential or proposed activities, projects and developments may have on the environment, and recommending whether such developments should proceed;
(c) developing and coordinating the implementation of environmental management systems to enable organizations to identify, monitor and control the impact of their activities, products and services on the environment;
(d) conducting audits to evaluate the environmental impact of existing activities, processes, wastes, noises and substances;
(e) assessing an organization\'s compliance with government and internal environmental regulations and guidelines, identifying violations and determining appropriate remedial action;
(f) providing technical advice and support services to organizations on how best to deal with environmental problems in order to reduce environmental damage and minimize financial loss;
(g) developing conservation plans.
Examples of the occupations classified here:
▪ Air pollution analyst
▪ Conservation officer
▪ Conservation scientist
▪ Ecologist
▪ Environmental adviser
▪ Environmental auditor
▪ Environmental consultant
▪ Environmental research scientist
▪ Environmental scientist
▪ Park ranger
▪ Water quality analyst
Some related occupations classified elsewhere:
▪ Environmental engineer – 2143',
            ),
            70 => 
            array (
                'id' => '214',
            'title' => 'Engineering Professionals (excluding Electrotechnology)',
            'description' => 'Engineering professionals (excluding electrotechnology) design, plan and organize the testing, construction, installation and maintenance of structures, machines and their components, and production systems and plants; and plan production schedules and work procedures to ensure that engineering projects are undertaken safely, efficiently and in a cost-effective manner.
Tasks performed usually include: planning and designing chemical process systems, civil engineering projects, mechanical equipment and systems, mining and drilling operations, and other engineering projects; specifying and interpreting drawings and plans, and determining construction methods; supervising the construction of structures, water and gas supply and transportation systems, and the manufacture, installation, operation and maintenance of equipment, machines and plant; organizing and managing project labour and the delivery of materials, plant and equipment; estimating total costs and preparing detailed cost plans and estimates as tools for budgetary control; resolving design and operational problems in the various fields of engineering through the application of engineering technology.
Occupations in this minor group are classified into the following unit groups:
2141 Industrial and Production Engineers
2142 Civil Engineers
2143 Environmental Engineers
2144 Mechanical Engineers
2145 Chemical Engineers
2146 Mining Engineers, Metallurgists and Related Professionals
2149 Engineering Professionals Not Elsewhere Classified',
            ),
            71 => 
            array (
                'id' => '2141',
                'title' => 'Industrial and Production Engineers',
                'description' => 'Industrial and production engineers conduct research and design, organize and oversee the construction, operation and maintenance of industrial production processes and installations. They establish programmes for the coordination of manufacturing activities and assess cost effectiveness and safety.
Tasks include –
(a) studying functional statements, organizational charts and project information to determine functions and responsibilities of workers and work units and to identify areas of duplication;
(b) establishing work measurement programmes and analysing work samples to develop standards for labour utilization;
(c) analysing workforce utilization, facility layout, operational data and production schedules and costs to determine optimum worker and equipment efficiencies;
(d) developing specifications for manufacture, and determining materials, equipment, piping, material flows, capacities and layout of plant and systems;
(e) organizing and managing project labour and the delivery of materials, plant and equipment;
(f) establishing standards and policies for installation, modification, quality control, testing, inspection and maintenance according to engineering principles and safety regulations;
(g) inspecting plant to improve and maintain performance;
(h) directing the maintenance of plant buildings and equipment, and coordinating the requirements for new designs, surveys and maintenance schedules;
(i) advising management on new production methods, techniques and equipment;
(j) liaising with materials buying, storing and controlling departments to ensure a steady flow of supplies.
Examples of the occupations classified here:
▪ Industrial efficiency engineer
▪ Industrial engineer
▪ Industrial plant engineer
▪ Production engineer
Some related occupations classified elsewhere:
▪ Manufacturing production manager – 1321',
            ),
            72 => 
            array (
                'id' => '2142',
                'title' => 'Civil Engineers',
                'description' => 'Civil engineers conduct research, advise on, design, and direct construction; manage the operation and maintenance of civil engineering structures; or study and advise on technological aspects of particular materials.
Tasks include –
(a) conducting research and developing new or improved theories and methods related to civil engineering;
(b) advising on and designing structures such as bridges, dams, docks, roads, airports, railways, canals, pipelines, waste-disposal and flood-control systems, and industrial and other large buildings;
(c) determining and specifying construction methods, materials and quality standards, and directing construction work;
(d) establishing control systems to ensure efficient functioning of structures as well as safety and environmental protection;
(e) organizing and directing maintenance and repair of existing civil engineering structures;
(f) analysing the behaviour of soil and rock when placed under pressure by proposed structures and designing structural foundations;
(g) analysing the stability of structures and testing the behaviour and durability of materials used in their construction.
Examples of the occupations classified here:
▪ Civil engineer
▪ Geotechnical engineer
▪ Structural engineer
Some related occupations classified elsewhere:
▪ Civil engineering project manager – 1323
▪ Geoscientist – 2114
▪ Metallurgist – 2146
▪ Mining engineer – 2146
▪ Town and traffic planners – 2164',
            ),
            73 => 
            array (
                'id' => '2143',
                'title' => 'Environmental Engineers',
                'description' => 'Environmental engineers conduct research, advise on, design and direct implementation of solutions to prevent, control or remedy negative impacts of human activity on the environment utilizing a variety of engineering disciplines. They conduct environmental assessments of construction and civil engineering projects and apply engineering principles to pollution control, recycling and waste disposal.
Tasks include –
(a) conducting research, assessing and reporting on the environmental impact of existing and proposed construction, civil engineering and other activities;
(b) inspecting industrial and municipal facilities and programmes to evaluate operational effectiveness and ensure compliance with environmental regulations;
(c) designing and overseeing the development of systems, processes and equipment for control, management, or remediation of water, air or soil quality;
(d) providing environmental engineering assistance in network analysis, regulatory analysis, and planning or reviewing database development;
(e) obtaining, updating, and maintaining plans, permits, and standard operating procedures;
(f) providing engineering and technical support for environmental remediation and litigation projects, including remediation system design and determination of regulatory applicability;
(g) monitoring progress of environmental improvement programmes;
(h) advising corporations and government agencies of procedures to follow in cleaning up contaminated sites to protect people and the environment;
(i) collaborating with environmental scientists, planners, hazardous waste technicians, engineers from other disciplines, and specialists in law and business to address environmental problems.
Examples of the occupations classified here:
▪ Air pollution control engineer
▪ Environmental analyst
▪ Environmental engineer
▪ Environmental remediation specialist
▪ Wastewater process engineer
Some related occupations classified elsewhere:
▪ Environmental scientist – 2133
▪ Radiation protection expert – 2263',
            ),
            74 => 
            array (
                'id' => '2144',
                'title' => 'Mechanical Engineers',
                'description' => 'Mechanical engineers conduct research; advise on, design, and direct production of machines, aircraft, ships, machinery and industrial plant, equipment and systems; advise on and direct their functioning, maintenance and repair; or study and advise on mechanical aspects of particular materials, products or processes.
Tasks include –
(a) advising on and designing machinery and tools for manufacturing, mining, construction, agricultural, and other industrial purposes;
(b) advising on and designing steam, internal combustion and other non-electric motors and engines used for propulsion of railway locomotives, road vehicles or aircraft, or for driving industrial or other machinery;
(c) advising on and designing: hulls, superstructures and propulsion systems of ships; mechanical plant and equipment for the release, control and utilization of energy; heating, ventilation and refrigeration systems, steering gear, pumps, and other mechanical equipment;
(d) advising on and designing airframes, undercarriages and other equipment for aircraft as well as suspension systems, brakes, vehicle bodies and other components of road vehicles;
(e) advising on and designing non-electrical parts of apparatus or products such as word processors, computers, precision instruments, cameras and projectors;
(f) establishing control standards and procedures to ensure efficient functioning and safety of machines, machinery, tools, motors, engines, industrial plant, equipment or systems;
(g) ensuring that equipment, operation and maintenance comply with design specifications and safety standards.
Examples of the occupations classified here:
▪ Aeronautical engineer
▪ Engine designer
▪ Marine architect
▪ Marine engineer
▪ Mechanical engineer
Some related occupations classified elsewhere:
▪ Ships\' engineer – 3151',
            ),
            75 => 
            array (
                'id' => '2145',
                'title' => 'Chemical Engineers',
                'description' => 'Chemical engineers conduct research and develop, advise on and direct commercial-scale chemical processes and production of various substances and items such as crude oil, petroleum derivatives, food and drink products, medicines, or synthetic materials. They direct maintenance and repair of chemical plant and equipment and study and advise on chemical aspects of particular materials, products or processes.
Tasks include –
(a) conducting research and advising on, and developing, commercial-scale chemical processes to refine crude oil and other liquids or gases, and to produce substances and items such as petroleum derivatives, explosives, food and drink products, medicines, or synthetic materials;
(b) specifying chemical production methods, materials and quality standards and ensuring that they conform to specifications;
(c) establishing control standards and procedures to ensure safety and efficiency of chemical production operations and safety of workers\' operating equipment or of those working in close proximity to ongoing chemical reactions;
(d) designing chemical plant equipment and devising processes for manufacturing chemicals and products;
(e) performing tests throughout stages of production to determine degree of control over variables, including temperature, density, specific gravity, and pressure;
(f) developing safety procedures to be employed;
(g) preparing estimates of production costs and production progress reports for management;
(h) performing laboratory studies of steps in the manufacture of new products and testing proposed processes in small-scale operations such as a pilot plant.
Examples of the occupations classified here:
▪ Chemical engineer
▪ Fuel technologist
▪ Plastics technologist
▪ Refinery process engineer',
            ),
            76 => 
            array (
                'id' => '2146',
                'title' => 'Mining Engineers, Metallurgists and Related Professionals',
                'description' => 'Mining engineers, metallurgists and related professionals conduct research on, design, develop and maintain commercial-scale methods of extracting metals from their ores, or minerals, water, oil or gas from the earth, and of developing new alloys, ceramic and other materials, or study and advise on mining or metallurgical aspects of particular materials, products or processes.
Tasks include –
(a) determining the location and planning the extraction of coal, metallic ores, non-metallic minerals, and building materials such as stone and gravel;
(b) determining the most suitable methods of efficient mining and extraction and types of machinery to be used, planning layout and directing construction of shafts and tunnels;
(c) determining drilling sites and devising methods of controlling the flow of water, oil or gas from wells;
(d) planning and directing storage, initial treatment and transportation of water, oil or gas;
(e) establishing safety standards and procedures and first-aid facilities, especially underground;
(f) conducting research, developing methods of extracting metals from their ores and advising on their application;
(g) investigating properties of metals and alloys, developing new alloys and advising on and supervising technical aspects of metal and alloy manufacture and processing;
(h) maintaining technical liaison and consultancy with other relevant specialists such as geologists and geophysicists;
(i) examining deposits or mines to evaluate profitability.
Examples of the occupations classified here:
▪ Extractive metallurgist
▪ Mining engineer
▪ Petroleum and natural gas extraction engineer
Some related occupations classified elsewhere:
▪ Geologist – 2114
▪ Geophysicist – 2114',
            ),
            77 => 
            array (
                'id' => '2149',
                'title' => 'Engineering Professionals Not Elsewhere Classified',
            'description' => 'This unit group covers engineering professionals not classified elsewhere in Minor Group 214: Engineering Professionals (excluding Electrotechnology) or in Minor Group 215: Electrotechnology Engineers. For instance, the group includes those who conduct research, advise on or develop engineering procedures and solutions concerning workplace safety, biomedical engineering, optics, materials, nuclear power generation and explosives.
In such cases tasks would include –
(a) applying knowledge of engineering to the design, development and evaluation of biological and health systems and products such as artificial organs, prostheses, and instrumentation;
(b) designing devices used in various medical procedures and imaging systems such as magnetic resonance imaging, and devices for automating insulin injections or controlling body functions;
(c) designing components of optical instruments such as lenses, microscopes, telescopes, lasers, optical disc systems and other equipment that utilize the properties of light;
(d) designing, testing, and coordinating the development of explosive ordnance material to meet military procurement specifications;
(e) designing and overseeing the construction and operation of nuclear reactors and power plants and nuclear fuels reprocessing and reclamation systems;
(f) designing and developing nuclear equipment such as reactor cores, radiation shielding and associated instrumentation and control mechanisms;
(g) assessing damage and providing calculations for marine salvage operations;
(h) studying and advising on engineering aspects of particular manufacturing processes, such as those related to glass, ceramics, textiles, leather products, wood and printing;
(i) identifying potential hazards and introducing safety procedures and devices.
Examples of the occupations classified here:
▪ Biomedical engineer
▪ Explosive ordnance engineer
▪ Marine salvage engineer
▪ Materials engineer
▪ Nuclear power generation engineer
▪ Optical engineer
▪ Quantity surveyor
▪ Safety engineer
▪ Time and motion study engineer
Some related occupations classified elsewhere:
▪ Industrial and production engineers – 2141
▪ Environmental engineers – 2143
▪ Surveyor – 2165
Notes:
It should be noted that, while they are appropriately classified in this unit group with other engineering professionals, biomedical engineers are considered to be an integral part of the health workforce alongside those occupations classified in Sub-major Group 22: Health Professionals, and others classified in a number of other unit groups in Major Group 2: Professionals.',
            ),
            78 => 
            array (
                'id' => '215',
                'title' => 'Electrotechnology Engineers',
                'description' => 'Electrotechnology engineers conduct research on and design, advise, plan and direct the construction and operation of electronic, electrical and telecommunications systems, components, motors and equipment. They organize and establish control systems to monitor the performance and safety of electrical and electronic assemblies and systems.
Tasks performed usually include: conducting research, advising on and directing the maintenance and repair of electrical, electronic and telecommunications products and systems; advising on and designing power stations and systems that generate, transmit and distribute electrical power; establishing control standards to monitor performance and safety of electrical, electronic and telecommunication systems and equipment.
Occupations in this minor group are classified into the following unit groups:
2151 Electrical Engineers
2152 Electronics Engineers
2153 Telecommunications Engineers',
            ),
            79 => 
            array (
                'id' => '2151',
                'title' => 'Electrical Engineers',
                'description' => 'Electrical engineers conduct research and advise on, design and direct the construction and operation of electrical systems, components, motors and equipment, and advise on and direct their functioning, maintenance and repair, or study and advise on technological aspects of electrical engineering materials, products and processes.
Tasks include –
(a) advising on and designing power stations and systems which generate, transmit and distribute electrical power;
(b) supervising, controlling and monitoring the operation of electrical generation, transmission and distribution systems;
(c) advising on and designing systems for electrical motors, electrical traction and other equipment, or electrical domestic appliances;
(d) specifying electrical installation and application in industrial and other buildings and objects;
(e) establishing control standards and procedures to monitor performance and safety of electrical generating and distribution systems, motors and equipment;
(f) determining manufacturing methods for electrical systems, as well as maintenance and repair of existing electrical systems, motors and equipment.
Examples of the occupations classified here
▪ Electrical engineer
▪ Electric power generation engineer
▪ Electromechanical engineer
Some related occupations classified elsewhere:
▪ Nuclear power generation engineer – 2149
▪ Electronics engineer – 2152
▪ Broadcast engineer – 2153
▪ Telecommunications engineers – 2153',
            ),
            80 => 
            array (
                'id' => '2152',
                'title' => 'Electronics Engineers',
                'description' => 'Electronics engineers conduct research on, design, and direct the construction functioning, maintenance and repair of electronic systems, and study and advise on technological aspects of electronic engineering materials, products or processes.
Tasks include –
(a) advising on and designing electronic devices or components, circuits, semi-conductors, and systems;
(b) specifying production or installation methods, materials and quality standards, and directing production or installation work of electronic products and systems;
(c) establishing control standards and procedures to ensure efficient functioning and safety of electronic systems, motors and equipment;
(d) organizing and directing maintenance and repair of existing electronic systems and equipment;
(e) designing electronic circuits and components for use in fields such as aerospace guidance and propulsion control, acoustics, or instruments and controls;
(f) researching and advising on radar, telemetry and remote control systems, microwaves and other electronic equipment;
(g) designing and developing signal processing algorithms and implementing these through appropriate choice of hardware and software;
(h) developing apparatus and procedures to test electronic components, circuits and systems.
Examples of the occupations classified here:
▪ Computer hardware engineer
▪ Electronics engineer
▪ Instrumentation engineer
Some related occupations classified elsewhere:
▪ Telecommunications engineer –  2153',
            ),
            81 => 
            array (
                'id' => '2153',
                'title' => 'Telecommunications Engineers',
                'description' => 'Telecommunications engineers conduct research and advise on, design and direct the construction, functioning, maintenance and repair of telecommunication systems and equipment. They study and advise on technological aspects of telecommunication engineering materials, products or processes.
Tasks include –
(a) advising on and designing telecommunications devices or components, systems, equipment and distribution centres;
(b) specifying production or installation methods, materials, quality and safety standards and directing production or installation work of telecommunications products and systems;
(c) organizing and directing maintenance and repair of existing telecommunication systems, motors and equipment;
(d) researching and advising on telecommunications equipment;
(e) planning and designing communications networks based on wired, fibre optical and wireless communication media;
(f) designing and developing signal processing algorithms and implementing these through appropriate choice of hardware and software;
(g) designing telecommunications networks and radio and television distribution systems, including both cable and over the air.
Examples of the occupations classified here:
▪ Broadcast engineer
▪ Telecommunications engineer
▪ Telecommunications engineering technologist
Some related occupations classified elsewhere:
▪ Electronics engineer – 2152',
            ),
            82 => 
            array (
                'id' => '216',
                'title' => 'Architects, Planners, Surveyors and Designers',
                'description' => 'Architects, planners, surveyors and designers plan and design landscapes, building exteriors and interiors, products for manufacture, and visual and audiovisual content for the communication of information. They conduct survey work to precisely position geographical features; design, prepare and revise maps; and develop and implement plans and policies for controlling the use of land.
Tasks performed usually include: determining the objectives and constraints of the design brief by consulting with clients and stakeholders; formulating design concepts and plans that harmonize aesthetic considerations with technical, functional, ecological and production requirements; preparing sketches, diagrams, illustrations, animations, plans, maps, charts, samples and models to communicate design concepts and other information; analysing photographs, satellite imagery, survey documents and data, maps, records, reports and statistics; undertaking research and analysing functional, spatial, commercial, cultural, safety, environmental and aesthetic requirements.
Occupations in this minor group are classified into the following unit groups:
2161 Building Architects
2162 Landscape Architects
2163 Product and Garment Designers
2164 Town and Traffic Planners
2165 Cartographers and Surveyors
2166 Graphic and Multimedia Designers',
            ),
            83 => 
            array (
                'id' => '2161',
                'title' => 'Building Architects',
                'description' => 'Building architects design commercial, industrial, institutional, residential and recreational buildings and plan and monitor their construction, maintenance and rehabilitation.
Tasks include –
(a) developing new or improved architectural theories and methods;
(b) inspecting sites and consulting clients, management and other stakeholders to determine type, style and size of proposed buildings and alterations to existing buildings;
(c) providing information regarding designs, materials and estimated building times;
(d) preparing project documentation, including sketches and scale drawings, and integrating structural, mechanical and aesthetic elements in final designs;
(e) writing specifications and contract documents for use by builders and calling tenders on behalf of clients;
(f) making necessary contacts to ensure feasibility of projects regarding style, cost, timing and compliance with regulations;
(g) identifying and finding best solutions for problems regarding function and quality of interior environments of buildings and making necessary designs, drawings and plans;
(h) monitoring construction or rehabilitation work to ensure compliance with specifications and quality standards;
(i) maintaining technical liaison and consultancy with other relevant specialists.
Examples of the occupations classified here:
▪ Building architect
▪ Interior architect
Some related occupations classified elsewhere:
▪ Landscape architect – 2162
▪ Interior decorator – 3432
▪ Interior designers – 3432',
            ),
            84 => 
            array (
                'id' => '2162',
                'title' => 'Landscape Architects',
                'description' => 'Landscape architects plan and design landscapes and open spaces for projects such as parks, schools, institutions, roads, external areas for commercial, industrial and residential sites, and plan and monitor their construction, maintenance and rehabilitation.
Tasks include –
(a) developing new or improved theories and methods and providing advice on policy related to landscape architecture;
(b) inspecting sites and consulting clients, management and other stakeholders to determine type, style and size of proposed buildings, parks, roads and other open spaces;
(c) compiling and analysing site and community data about geographical and ecological features, landforms, soils, vegetation, site hydrology, visual characteristics and human-made structures, to formulate land use and development recommendations, feasibility studies and environmental impact statements;
(d) preparing reports, strategic plans, site plans, working drawings, specifications and cost estimates for land development, showing location and details of proposals, including ground modelling, structures, vegetation and access;
(e) writing specifications and contract documents for use by builders and civil engineering contractors and calling tenders on behalf of clients;
(f) making necessary contacts to ensure feasibility of projects regarding style, cost, timing and compliance with regulations;
(g) identifying and finding best solutions for problems regarding function and quality of exterior environments and making necessary designs, drawings and plans;
(h) monitoring construction or rehabilitation work to ensure compliance with specifications and quality standards;
(i) maintaining technical liaison and consultancy with other relevant specialists.
Example of the occupations classified here:
▪ Landscape architect
Some related occupations classified elsewhere:
▪ Building architect – 2161
▪ Urban planner – 2164',
            ),
            85 => 
            array (
                'id' => '2163',
                'title' => 'Product and Garment Designers',
                'description' => 'Product and garment designers design and develop products for manufacture and prepare designs and specifications of products for mass, batch and one-off production.
Tasks include –
(a) determining the objectives and constraints of the design brief by consulting with clients and stakeholders;
(b) formulating design concepts for clothing, textiles, industrial, commercial and consumer products, and jewellery;
(c) harmonizing aesthetic considerations with technical, functional, ecological and production requirements;
(d) preparing sketches, diagrams, illustrations, plans, samples and models to communicate design concepts;
(e) negotiating design solutions with clients, management, and sales and manufacturing staff;
(f) selecting, specifying and recommending functional and aesthetic materials, production methods and finishes for manufacture;
(g) detailing and documenting the selected design for production;
(h) preparing and commissioning prototypes and samples;
(i) supervising the preparation of patterns, programmes and tooling, and of the manufacturing process.
Examples of the occupations classified here:
▪ Costume designer
▪ Fashion designer
▪ Industrial designer
▪ Jewellery designer
Some related occupations classified elsewhere:
▪ Engine designer – 2144
▪ Building architect – 2161
▪ Landscape architect – 2162
▪ Interior designers – 3432',
            ),
            86 => 
            array (
                'id' => '2164',
                'title' => 'Town and Traffic Planners',
                'description' => 'Town and traffic planners develop and implement plans and policies for the controlled use of urban and rural land and for traffic systems. They conduct research and provide advice on economic, environmental and social factors affecting land use and traffic flows.
Tasks include –
(a) planning layout and coordinating development of urban areas;
(b) compiling and analysing data on economic, legal, political, cultural, demographic, sociological, physical and environmental factors affecting land use;
(c) conferring with government authorities, communities and specialists in fields such as architecture, planning, social science, the environment and the law;
(d) devising and recommending use and development of land, and presenting narrative and graphic plans, programmes and designs to groups and individuals;
(e) advising governments, companies and communities on urban and regional planning issues and proposals;
(f) reviewing and evaluating environmental impact reports;
(g) planning and coordinating the development of land areas for parks, schools, institutions, airports, roadways and related projects, and for commercial, industrial and residential sites;
(h) planning and advising on routing and control of road traffic and public transportation systems for efficiency and safety.
Examples of the occupations classified here:
▪ Land planner
▪ Traffic planner
▪ Urban planner
Some related occupations classified elsewhere:
▪ Building architect – 2161
▪ Landscape architect – 2162',
            ),
            87 => 
            array (
                'id' => '2165',
                'title' => 'Cartographers and Surveyors',
                'description' => 'Cartographers and surveyors determine the exact position of, or prepare and revise digital, graphic and pictorial maps, charts or other visual representation of, natural and constructed features and boundaries of land, seas, underground areas and celestial bodies, applying scientific and mathematical principles.
Tasks include –
(a) surveying, measuring and describing land surfaces, mines, underground surfaces, sea, river and lake beds;
(b) noting exact position of various features and recording survey data in digital form;
(c) making charts and maps to be used in determining navigable waters and channels and in planning construction of marine structures;
(d) planning and conducting aerial photographic surveys;
(e) designing, compiling and revising maps and charts using aerial and other photographs, satellite imagery, survey documents and data, existing maps and records, reports and statistics;
(f) undertaking research and development of surveying and photogrammetric measurement systems, cadastral systems and land information systems;
(g) studying and advising on technical, aesthetic and economic aspects of map production;
(h) maintaining technical liaison and consultancy with other relevant specialists.
Examples of the occupations classified here:
▪ Aerial surveyor
▪ Cadastral surveyor
▪ Cartographer
▪ Hydrographic surveyor
▪ Land surveyor
▪ Mine surveyor
▪ Photogrammetrist
Some related occupations classified elsewhere:
▪ Quantity surveyor – 2149
▪ Building surveyor – 3112
▪ Marine surveyor – 3115',
            ),
            88 => 
            array (
                'id' => '2166',
                'title' => 'Graphic and Multimedia Designers',
                'description' => 'Graphic and multimedia designers design visual and audiovisual content for the communication of information using print, film, electronic, digital and other forms of visual and audio media. They create graphics, special effects, animation or other visual images for use in computer games, movies, music videos, print media and advertisements.
Tasks include –
(a) determining the objectives and constraints of the design brief by consulting with clients and stakeholders;
(b) undertaking research and analysing functional communication requirements;
(c) formulating design concepts for the subject to be communicated;
(d) preparing sketches, diagrams, illustrations and layouts to communicate design concepts;
(e) designing complex graphics and animation to satisfy functional, aesthetic and creative requirements of the design brief;
(f) creating two-dimensional and three-dimensional images depicting objects in motion or illustrating a process, using computer animation or modelling programmes;
(g) negotiating design solutions with clients, management, sales and production staff;
(h) selecting, specifying or recommending functional and aesthetic materials and media for publication, delivery or display;
(i) detailing and documenting the selected design for production;
(j) supervising or carrying out production in the chosen media.
Examples of the occupations classified here:
▪ Animator
▪ Commercial artist
▪ Computer games designer
▪ Digital artist
▪ Graphic designer
▪ Illustrator
▪ Multimedia designer
▪ Publication designer
▪ Website designer
Some related occupations classified elsewhere:
▪ Interior architect – 2161
▪ Multimedia developers – 2513
▪ Web developers – 2513
▪ Visual artists – 2651
▪ Interior designers – 3432',
            ),
            89 => 
            array (
                'id' => '22',
                'title' => 'Health Professionals',
                'description' => 'Health professionals conduct research,; improve or develop concepts, theories and operational methods; and apply scientific knowledge relating to medicine, nursing, dentistry, veterinary medicine, pharmacy, and promotion of health.  Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed by workers in this sub-major group usually include: conducting research and obtaining scientific knowledge through the study of human and animal disorders and illnesses and ways of treating them; advising on or applying preventive and curative measures, or promoting health; preparing scientific papers and  reports. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
221 Medical Doctors
222 Nursing and Midwifery Professionals
223 Traditional and Complementary Medicine Professionals
224 Paramedical Practitioners
225 Veterinarians
226 Other Health Professionals
Note
In using ISCO in applications that seek to identify, describe or measure the health workforce, it should be noted that a number of professions considered to be a part of the health workforce are classified in groups other than Sub-major Group 22: Health Professionals. Such occupations include but are not restricted to: addictions counsellors, biomedical engineers, clinical psychologists and medical physicists.',
            ),
            90 => 
            array (
                'id' => '221',
                'title' => 'Medical Doctors',
            'description' => 'Medical doctors (physicians) study, diagnose, treat and prevent illness, disease, injury and other physical and mental impairments in humans through the application of the principles and procedures of modern medicine. They plan, supervise and evaluate the implementation of care and treatment plans by other health care providers, and conduct medical education and research activities.
Tasks performed usually include: conducting physical examinations of patients and interviewing them and their families to determine their health status; ordering diagnostic tests and analysing findings; prescribing and administering curative treatments and preventive measures; performing surgery and other clinical procedures; monitoring  patients\'  progress and response to treatment; advising on health, nutrition and lifestyle behaviours which aid prevention or treatment of disease and disorders; identifying and managing complications before, during and after childbirth; planning, managing and implementing referral plans for patients in need of specialized, long-term or other types of health care services; exchanging medical information with other health professionals to ensure continuing and comprehensive care; reporting births, deaths and notifiable diseases to government authorities; conducting research into human disorders and illnesses and preventive or curative methods.
Occupations in this minor group are classified into the following unit groups:
2211 Generalist Medical Practitioners
2212 Specialist Medical Practitioners',
            ),
            91 => 
            array (
                'id' => '2211',
                'title' => 'Generalist Medical Practitioners',
            'description' => 'Generalist medical practitioners (including family and primary care doctors) diagnose, treat and prevent illness, disease, injury and other physical and mental impairments and maintain general health in humans through application of the principles and procedures of modern medicine.  They do not limit their practice to certain disease categories or methods of treatment, and may assume responsibility for the provision of continuing and comprehensive medical care to individuals, families and communities.
Tasks include –
(a) conducting physical examinations of patients and interviewing them and their families to determine their health status;
(b) ordering laboratory tests,  X-rays and other diagnostic procedures and analysing findings to determine the  nature of disorders or illnesses;
(c) providing continuing medical care for patients including prescribing, administering, counselling on and monitoring curative treatments and preventive measures;
(d) performing surgery and other clinical procedures;
(e) advising individuals, families and communities on health, nutrition and lifestyle which aid prevention or treatment of disease and disorders;
(f) providing referrals to patients and families for specialized care in hospitals, rehabilitation centres or other types of health care centres;
(g) identifying, managing and providing referrals for complications before, during and after childbirth;
(h) recording patients\' medical information and history and exchanging information with specialist practitioners and other health workers as required for continuing medical care;
(i) reporting births, deaths and notifiable diseases to government authorities to meet legal and professional requirements;
(j) conducting research in human health and medical services and disseminating the findings such as through scientific reports;
(k) planning and participating in programmes designed to prevent the occurrence and spread of common diseases.
Examples of the occupations classified here:
▪ District medical doctor–therapist
▪ Family medical practitioner
▪ General practitioner
▪ Medical doctor (general)
▪ Medical officer (general)
▪ Physician (general)
▪ Primary health care physician
▪ Resident medical officer specializing in general practice
Some related occupations classified elsewhere:
▪ Psychiatrist – 2212
▪ Specialist physician –  212
▪ Surgeon – 2212
▪ Clinical officer (paramedical) – 2240
▪ Feldscher – 2240
Notes
Occupations included in this unit group require completion of a university-level degree in basic medical education plus postgraduate clinical training or equivalent for competent performance. Medical interns or residents who have completed their university education in basic medical education and are undertaking postgraduate clinical training in general medicine without any area of specialization are included here. Although in some countries ‘general practice\' and \'family medicine\' may be considered as medical specializations, these occupations should always be classified here.',
            ),
            92 => 
            array (
                'id' => '2212',
                'title' => 'Specialist Medical Practitioners',
            'description' => 'Specialist medical practitioners (medical doctors) diagnose, treat and prevent illness, disease, injury and other physical and mental impairments in humans, using specialized testing, diagnostic, medical, surgical, physical and psychiatric techniques through application of the principles and procedures of modern medicine. They specialize in certain disease categories, types of patient or methods of treatment and may conduct medical education and research in their chosen areas of specialization.
Tasks include –
(a) conducting physical examinations of patients and interviewing them and their families to determine their health status;
(b) considering medical information provided by a referring doctor or other health care provider,
(c) ordering specialized diagnostic tests to determine the nature of disorders or illnesses;
(d) prescribing, administering and monitoring patients\' responses to treatments, medications, anaesthetics, psychotherapies, physical rehabilitation programmes and other preventive and curative measures;
(e) performing surgery of a general or specialized nature;
(f) managing complications before, during and after childbirth;
(g) recording patients\' medical information and exchanging information with other health professionals to ensure the provision of comprehensive care;
(h) reporting births, deaths and notifiable diseases to government authorities to meet legal and professional requirements;
(i) providing information to patients and families and communities about preventive measures, treatment and care for specific ailments;
(j) performing autopsies to determine cause of death;
(k) conducting research into specific human disorders and illnesses and preventive or curative methods and disseminating the findings such as through scientific reports;
(l) planning and participating in programmes designed to prevent the occurrence and spread of specific diseases.
Examples of the occupations classified here:
▪ Anaesthetist
▪ Cardiologist
▪ Emergency medicine specialist
▪ Gynaecologist
▪ Obstetrician
▪ Ophthalmologist
▪ Paediatrician
▪ Pathologist
▪ Preventive medicine specialist
▪ Psychiatrist
▪ Radiation oncologist
▪ Radiologist
▪ Resident medical officer in specialist training
▪ Specialist medical practitioner (public health)
▪ Specialist physician (internal medicine)
▪ Specialist physician (nuclear medicine)
▪ Surgeon
Some related occupations classified elsewhere:
▪ Biomedical researcher – 2131
▪ General practitioner – 2211
▪ Resident medical officer specializing in general practice – 2211
▪ Dental practitioner – 2261
▪ Dental surgeon – 2261
▪ Oral and maxillofacial surgeon – 2261
▪ Clinical psychologist – 2634
Notes
Occupations included in this unit group require completion of a university-level degree in basic medical education plus postgraduate clinical training in a medical specialization (except general practice) or equivalent. Resident medical officers and interns training as specialist practitioners (except general practice) are included here. Although in some countries \'stomatology\' may be considered as a medical specialization, stomatologists should be included in Unit group -2261, Dentists.
Medical research professionals who participate in biomedical research using living organisms and do not undertake clinical practice are classified in Unit Group 2131: Biologists, Botanists, Zoologists and Related Professionals.',
            ),
            93 => 
            array (
                'id' => '222',
                'title' => 'Nursing and Midwifery Professionals',
                'description' => 'Nursing and midwifery professionals provide treatment and care services for people who are physically or mentally ill, disabled or infirm, and others in need of care due to potential risks to health including before, during and after childbirth. They assume responsibility for the planning, management and evaluation of the care of patients, including the supervision of other health care workers, working autonomously or in teams with medical doctors and others in the practical application of preventive and curative measures.
Tasks performed usually include: assessing, planning, providing and evaluating nursing and midwifery care for patients according to the practice and standards of modern nursing and midwifery; coordinating the care of patients in consultation with other health professionals and members of health teams; developing and implementing care plans, treatments and therapies, including administering medications; monitoring and alleviating pain and discomfort experienced by patients using a variety of therapies, including the use of painkilling drugs; monitoring patients\' health condition, including progress of pregnancy and responses to curative treatment; providing information to patients, families and communities about a range of health issues, including prevention of illness, treatment and care, pregnancy and childbirth and other topics; supervising and coordinating the work of other health care workers; conducting research on nursing and midwifery practice and preparing scientific papers and reports.
Occupations in this minor group are classified into the following unit groups:
2221 Nursing Professionals
2222 Midwifery Professionals
Note
The distinctions between nursing and midwifery professionals and associate professionals should be made on the basis of the nature of the work performed in relation to the tasks specified in this definition and in the relevant unit group definitions. The qualifications held by individuals or that predominate in the country are not the main factor in making this distinction, as training arrangements for nurses and midwives vary widely between countries and have varied over time within countries.',
            ),
            94 => 
            array (
                'id' => '2221',
                'title' => 'Nursing Professionals',
                'description' => 'Nursing professionals provide treatment, support and care services for people who are in need of nursing care due to the effects of ageing, injury, illness or other physical or mental impairment, or potential risks to health. They assume responsibility for the planning and management of the care of patients, including the supervision of other health care workers, working autonomously or in teams with medical doctors and others in the practical application of preventive and curative measures.
Tasks include –
(a) planning, providing and evaluating nursing care for patients according to the practice and standards of modern nursing;
(b) coordinating the care of patients in consultation with other health professionals and members of health teams;
(c) developing and implementing care plans for the biological, social and psychological treatment of patients in collaboration with other health professionals;
(d) planning and providing personal care, treatments and therapies including administering medications, and monitoring responses to treatment or care plan;
(e) cleaning wounds and applying surgical dressings and bandages;
(f) monitoring pain and discomfort experienced by patients and alleviating pain using a variety of therapies, including the use of painkilling drugs;
(g) planning and participating in health education programmes, health promotion and nurse education activities in clinical and community settings;
(h) answering questions from patients and families and providing information about prevention of ill-health, treatment and care;
(i) supervising and coordinating the work of other nursing, health and personal care workers;
(j) conducting research on nursing practices and procedures and disseminating findings such as through scientific papers and reports.
Examples of the occupations classified here:
▪ Clinical nurse consultant
▪ District nurse
▪ Nurse anaesthetist
▪ Nurse educator
▪ Nurse practitioner
▪ Operating theatre nurse
▪ Professional nurse
▪ Public health nurse
▪ Specialist nurse
Some related occupations classified elsewhere:
▪ Professional midwife – 2222
▪ Paramedical practitioners – 2240
▪ University lecturer – 2310
▪ Vocational education teacher – 2320
▪ Associate professional nurse – 3221
▪ Associate professional midwife – 3222
▪ Nursing aide (clinic or hospital) – 5321
Notes
The distinction between professional and associate professional nurses should be made on the basis of the nature of the work performed in relation to the tasks specified in this definition. The qualifications held by individuals or that predominate in the country are not the main factor in making this distinction, as training arrangements for nurses vary widely between countries and have varied over time within countries.
Nurses who combine nursing education or research with clinical nursing practice are classified in Unit Group 2221: Nursing Professionals. Nursing researchers who participate in biomedical research using living organisms and do not undertake clinical nursing practice are classified in Unit Group 2131: Biologists, Botanists, Zoologists and Related Professionals.',
            ),
            95 => 
            array (
                'id' => '2222',
                'title' => 'Midwifery Professionals',
                'description' => 'Midwifery professionals plan, manage, provide and evaluate midwifery care services before, during and after pregnancy and childbirth. They provide delivery care for reducing health risks to women and newborn children, working autonomously or in teams with other health care providers.
Tasks include –
(a) planning, providing and evaluating care and support services for women and babies before, during and after pregnancy and childbirth according to the practice and standards of modern midwifery care;
(b) providing advice to women and families and conducting community education on health, nutrition, hygiene, exercise, birth and emergency plans, breastfeeding, infant care, family planning and contraception, lifestyle and other topics related to pregnancy and childbirth;
(c) assessing progress during pregnancy and childbirth, managing complications and recognizing warning signs requiring referral to a medical doctor with specialized skills in obstetrics;
(d) monitoring the health status of newborns, managing complications and recognizing warning signs requiring referral to a medical doctor with specialized skills in neonatology;
(e) monitoring  pain and discomfort experienced by women during labour and delivery and alleviating pain using a variety of therapies, including the use of painkilling drugs;
(f) reporting births to government authorities to meet legal and professional requirements;
(g) conducting research on midwifery practices and procedures and disseminating findings such as through scientific papers and reports;
(h) planning and conducting midwifery education activities in clinical and community settings.
Example of the occupations classified here:
▪ Professional midwife
Some related occupations classified elsewhere:
▪ Professional nurse – 2221
▪ Associate professional nurse – 3221
▪ Associate professional midwife – 3222
▪ Nursing aide (clinic or hospital) – 5321
Note
The distinctions between nursing and midwifery professionals and associate professionals should be made on the basis of the nature of the work performed in relation to the tasks specified in this definition. The qualifications held by individuals or that predominate in the country are not the main factor in making this distinction, as training arrangements for nurses and midwives vary widely between countries and have varied over time within countries.
Midwives who combine midwifery education or research with clinical midwifery practice are classified in Unit Group 2222: Midwifery Professionals.',
            ),
            96 => 
            array (
                'id' => '223',
                'title' => 'Traditional and Complementary Medicine Professionals',
                'description' => 'Traditional and complementary medicine professionals examine patients; prevent and treat illness, disease, injury and other physical and mental impairments; and maintain general health in humans by applying knowledge, skills and practices acquired through extensive study of  the theories, beliefs and experiences originating in specific cultures.
Tasks performed usually include: conducting physical examinations of patients and interviewing them and their families to determine their health status; developing and implementing treatment plans for physical, mental and psychosocial ailments using applications such as acupuncture, ayurvedic, homoeopathic and herbal medicine; evaluating and documenting patients\' progress through treatment plans; providing health, nutrition and lifestyle advice to individuals, families and communities;  prescribing and preparing traditional medicines, such as herbal, plant, mineral and animal extracts, to stimulate the body\'s capacity for self-healing; exchanging  information about patients with other health care workers as needed to ensure continuing and comprehensive health care; conducting research into traditional and complementary medicines and treatments and disseminating findings such as through scientific papers and reports.
Occupations in this minor group are classified into the following unit group:
2230 Traditional and Complementary Medicine Professionals',
            ),
            97 => 
            array (
                'id' => '2230',
                'title' => 'Traditional and Complementary Medicine Professionals',
                'description' => 'Traditional and complementary medicine professionals examine patients, prevent and treat illness, disease, injury and other physical and mental impairments and maintain general health in humans by applying knowledge, skills and practices acquired through extensive study of  the theories, beliefs and experiences, originating in specific cultures.
Tasks include –
(a) conducting physical examinations of patients and interviewing them and their families to determine their health status;
(b) developing and implementing treatment plans for physical, mental and psychosocial ailments using applications such as acupuncture, ayurvedic, homeopathic and herbal medicine;
(c) evaluating and documenting patients\' progress through treatment plans;
(d) providing health, nutrition and lifestyle advice to individuals, families and communities;
(e) prescribing and preparing traditional medicines, such as herbal, plant, mineral and animal extracts, to stimulate the body\'s capacity for self-healing;
(f) exchanging  information about patients with other health care workers as needed to ensure continuing and comprehensive health care;
(g) conducting research into traditional and complementary medicines and treatments and disseminating findings such as through scientific papers and reports.
Examples of the occupations classified here:
▪ Acupuncturist
▪ Ayurvedic practitioner
▪ Chinese herbal medicine practitioner
▪ Homeopath
▪ Naturopath
▪ Unani practitioner
Some related occupations classified elsewhere:
▪ Chiropractor – 2269
▪ Osteopath – 2269
▪ Acupuncture technician – 3230
▪ Ayurvedic technician – 3230
▪ Herbalist – 3230
▪ Homeopathy technician – 3230
▪ Scraping and cupping therapist – 3230
▪ Village healer – 3230
▪ Witch doctor – 3230
▪ Acupressure therapist – 3255
▪ Hydrotherapist – 3255
▪ Shiatsu therapist – 3255
▪ Faith healer – 3413
Notes
Occupations in traditional and complementary medicine for which competent performance requires an extensive understanding of the benefits and applications of traditional and complementary therapies, developed as the result of extended formal study of these techniques as well as human anatomy and elements of modern medicine, are classified in Unit Group 2230: Traditional and Complementary Medicine Professionals.  Those occupations whose practice requires a less extensive understanding based on relatively short periods of formal or informal education and training, or informally through the traditions and practices of the communities where they originated, are included in Unit Group 3230: Traditional and Complementary Medicine Associate Professionals.  Practitioners working in the singular application of approaches to herbal medicines, spiritual therapies or manual therapeutic techniques are excluded from Unit Group 2230.',
            ),
            98 => 
            array (
                'id' => '224',
                'title' => 'Paramedical Practitioners',
                'description' => 'Paramedical practitioners provide advisory, diagnostic, curative and preventive medical services more limited in scope and complexity than those carried out by medical doctors. They work autonomously or with limited supervision of medical doctors, and apply advanced clinical procedures for treating and preventing diseases, injuries and other physical or mental impairments common to specific communities.
Tasks performed usually include: conducting physical examinations of patients and interviewing them and their families to determine their health status and recording patients\' medical information; performing basic or more routine medical and surgical procedures, including prescribing and administering treatments, medications and other preventive or curative measures, especially for common diseases and disorders; administering  or ordering diagnostic tests, such as X-ray, electrocardiogram and laboratory tests;  performing therapeutic procedures such as injections, immunizations, suturing and wound care, and infection management; assisting medical doctors with complex surgical procedures;  monitoring patients\'  progress and response to treatment, and identifying signs and symptoms requiring referral to medical doctors; advising patients and families on diet, exercise and other habits which aid prevention or treatment of disease and disorders;  identifying and referring complex or unusual cases to medical doctors,  hospitals or other places for specialized care; reporting births, deaths and notifiable diseases to government authorities to meet legal and professional reporting requirements.
Occupations in this minor group are classified into the following unit group:
2240 Paramedical Practitioners',
            ),
            99 => 
            array (
                'id' => '2240',
                'title' => 'Paramedical Practitioners',
                'description' => 'Paramedical practitioners provide advisory, diagnostic, curative and preventive medical services more limited in scope and complexity than those carried out by medical doctors. They work autonomously, or with limited supervision of medical doctors, and apply advanced clinical procedures for treating and preventing diseases, injuries and other physical or mental impairments common to specific communities.
Tasks include –
(a) conducting physical examinations of patients and interviewing them and their families to determine their health status, and recording patients\' medical information;
(b) performing basic or more routine medical and surgical procedures, including prescribing and administering treatments, medications and other preventive or curative measures, especially for common diseases and disorders;
(c) administering  or ordering diagnostic tests, such as X-ray, electrocardiogram and laboratory tests;
(d) performing therapeutic procedures such as injections, immunizations, suturing and wound care, and infection management;
(e) assisting medical doctors with complex surgical procedures;
(f) monitoring patients\'  progress and response to treatment, and identifying signs and symptoms requiring referral to medical doctors;
(g) advising patients and families on diet, exercise and other habits which aid prevention or treatment of disease and disorders;
(h) identifying and referring complex or unusual cases to medical doctors,  hospitals or other places for specialized care;
(i) reporting births, deaths and notifiable diseases to government authorities to meet legal and professional reporting requirements.
Examples of the occupations classified here:
▪ Advanced care paramedic
▪ Clinical officer (paramedical)
▪ Feldscher
▪ Primary care paramedic
▪ Surgical technician
Some related occupations classified elsewhere:
▪ General practitioner – 2211
▪ Surgeon – 2212
▪ Medical assistant – 3256
▪ Emergency paramedic – 3258
Note
Occupations included in this unit group normally require completion of tertiary-level training in theoretical and practical medical services. Workers providing services limited to emergency treatment and ambulance practice are classified in Unit Group 3258: Ambulance Workers.',
            ),
            100 => 
            array (
                'id' => '225',
                'title' => 'Veterinarians',
                'description' => 'Veterinarians diagnose, prevent and treat diseases, injuries and dysfunctions of animals. They may provide care to a wide range of animals; specialize in the treatment of a particular animal group or in a particular area of specialization; or provide professional services to commercial firms producing biological and pharmaceutical products.
Tasks performed usually include: determining the presence and nature of abnormal conditions by physical examination, laboratory testing and through diagnostic imaging techniques including radiography and ultrasound; treating animals medically and surgically, and administering and prescribing drugs, analgesics, and general and local anaesthetics; performing surgery, dressing wounds and setting broken bones; rendering obstetric services to animals; participating in programmes designed to prevent the occurrence and spread of animal diseases; inoculating animals against, and testing for, infectious diseases and notifying authorities of outbreaks of infectious animal diseases; performing autopsies to determine cause of death; advising clients on health, nutrition and feeding, hygiene, breeding and care of animals.
Occupations in this minor group are classified into the following unit groups:
2250 Veterinarians',
            ),
            101 => 
            array (
                'id' => '2250',
                'title' => 'Veterinarians',
                'description' => 'Veterinarians diagnose, prevent and treat diseases, injuries and dysfunctions of animals. They may provide care to a wide range of animals or specialize in the treatment of a particular animal group or in a particular speciality area, or provide professional services to commercial firms producing biological and pharmaceutical products.
Tasks include –
(a) determining the presence and nature of abnormal conditions by physical examination, laboratory testing and through diagnostic imaging techniques including radiography and ultrasound;
(b) treating animals medically and surgically, and administering and prescribing drugs, analgesics, and general and local anaesthetics;
(c) performing surgery, dressing wounds and setting broken bones;
(d) rendering obstetric and dental services to animals;
(e) participating in programmes designed to prevent the occurrence and spread of animal diseases;
(f) inoculating animals against, and testing for, infectious diseases and notifying authorities of outbreaks of infectious animal diseases;
(g) performing autopsies to determine cause of death;
(h) advising clients on health, nutrition and feeding, hygiene, breeding and care of animals;
(i) providing euthanasia services for animals.
Examples of the occupations classified here:
▪ Animal pathologist
▪ Veterinarian
▪ Veterinary epidemiologist
▪ Veterinary intern
▪ Veterinary surgeon',
            ),
            102 => 
            array (
                'id' => '226',
                'title' => 'Other Health Professionals',
                'description' => 'Other health professionals provide health services related to dentistry, pharmacy, environmental health and hygiene, occupational health and safety, physiotherapy, nutrition, hearing, speech, vision and rehabilitation therapies.  This minor group includes all human health professionals except doctors, traditional and complementary medicine practitioners, nurses, midwives and paramedical professionals.
Tasks performed may include: assessing patients or clients to determine the nature of the disorder, illness or problem; developing and implementing treatment plans and evaluating and documenting patients\' progress; diagnosing and treating diseases, injuries and malformations of the teeth, mouth, jaws and associated tissues; storing, preserving, compounding,testing and dispensing medicinal products and counselling on their proper use and adverse effects; assessing, planning and implementing programmes to recognize, monitor and control environmental factors that can potentially affect human health, to improve or restore human motor functions, maximize movement ability, relieve pain syndromes, or to enhance the impact of food and nutrition on human health; diagnosing, managing and treating physical disorders affecting human hearing, communication or swallowing, or disorders of the eyes and visual system;  advising clients about continued treatment and care and providing or arranging rehabilitation services; referring clients to or conferring with other health professionals or associate professionals if required.
Occupations in this minor group are classified into the following unit groups:
2261 Dentists
2262 Pharmacists
2263 Environmental and Occupational Health and Hygiene Professionals
2264 Physiotherapists
2265 Dieticians and Nutritionists
2266 Audiologists and Speech Therapists
2267 Optometrists and Ophthalmic Opticians
2269 Health Professionals Not Elsewhere Classified',
            ),
            103 => 
            array (
                'id' => '2261',
                'title' => 'Dentists',
                'description' => 'Dentists diagnose, treat and prevent diseases, injuries and abnormalities of the teeth, mouth, jaws and associated tissues by applying the principles and procedures of modern dentistry. They use a broad range of specialized diagnostic, surgical and other techniques to promote and restore oral health.
Tasks include –
(a) diagnosing diseases, injuries, irregularities and malformations of teeth and associated structures in the mouth and jaw using a range of methods such as radiographs, salivary tests and medical histories;
(b) providing preventative oral health care such as periodontal treatments, fluoride applications and oral health promotion;
(c) administering anaesthetics to limit the amount of pain experienced by patients during procedures;
(d) prescribing medication for relief of ongoing  pain after procedures
(e) providing restorative oral care such as implants, complex crown and bridge restorations and orthodontics, and repairing damaged and decayed teeth;
(f) providing surgical treatments such as extraction of teeth and biopsy of tissue, and performing orthodontic treatment;
(g) measuring and taking impressions of patients\' jaws and teeth in order to determine the shape and size of dental prostheses;
(h) designing, making, and fitting prosthodontic appliances such as space maintainers, bridges and dentures, or writing fabrication instructions or prescriptions for dental prosthetic technicians;
(i) restoring oral function with removable and fixed oral prostheses;
(j) assisting in diagnosing general diseases having oral manifestations such as diabetes;
(k) educating patients and families on dental hygiene, nutrition and other measures to take care of oral health;
(l) supervising dental hygienists, dental assistants and other staff.
Examples of the occupations classified here:
▪ Dental practitioner
▪ Dental surgeon
▪ Dentist
▪ Endodontist
▪ Oral and maxillofacial surgeon
▪ Oral pathologist
▪ Orthodontist
▪ Paedodontist
▪ Periodontist
▪ Prosthodontist
▪ Stomatologist
Note
Occupations included in this category normally require completion of university-level training in theoretical and practical dentistry or a related field. Although in some countries “stomatology” and “dental, oral and maxillofacial surgery” may be considered as medical specializations, occupations in these fields should always be classified here.',
            ),
            104 => 
            array (
                'id' => '2262',
                'title' => 'Pharmacists',
                'description' => 'Pharmacists store, preserve, compound and dispense medicinal products and counsel on the proper use and adverse effects of drugs and medicines following prescriptions issued by medical doctors and other health professionals. They contribute to researching, testing, preparing, prescribing and monitoring medicinal therapies for optimizing human health.
Tasks include –
(a) receiving prescriptions for medicinal products from medical doctors and other health professionals, checking patients\' medicine histories, and ensuring proper dosage and methods of administration and drug compatibility before dispensing;
(b) preparing or supervising the preparation and labelling of liquid medicines, ointments, powders, tablets and other medications to fill prescriptions;
(c) providing information and advice to prescribers and clients regarding drug interactions, incompatibility and contraindications, side effects, dosage and proper medication storage;
(d) collaborating with other health care professionals to plan, monitor, review, and evaluate the quality and effectiveness of the medicine therapy of individual patients, and the effectiveness of particular drugs or therapies;
(e) maintaining prescription files and recording the issue of narcotics, poisons and habit-forming drugs in accordance with legal and professional requirements;
(f) storing and preserving vaccines, serums and other drugs subject to deterioration;
(g) advising clients on and supplying non-prescription medicines and diagnostic and therapeutic aids for common conditions;
(h) supervising and coordinating the work of pharmacy technicians, pharmacy interns and pharmacy sales assistants;
(i) conducting research to develop and improve pharmaceuticals, cosmetics and related chemical products;
(j) conferring with chemists, engineering professionals and other professionals about manufacturing techniques and ingredients;
(k) testing and analysing drugs to determine their identity, purity and strength in relation to specified standards;
(l)  evaluating labels, packaging and advertising of drug products;
(m) developing information and risks of particular drugs.
Examples of the occupations classified here:
▪ Dispensing chemist
▪ Hospital pharmacist
▪ Industrial pharmacist
▪ Retail pharmacist
Some related occupations classified elsewhere:
▪ Pharmacologist – 2131
▪ Pharmaceutical technician – 3213',
            ),
            105 => 
            array (
                'id' => '2263',
                'title' => 'Environmental and Occupational Health and Hygiene Professionals',
                'description' => 'Environmental and occupational health and hygiene professionals assess, plan and implement programmes to recognize, monitor and control environmental factors that can potentially affect human health, to ensure safe and healthy working conditions and to prevent disease or injury caused by chemical, physical, radiological and biological agents or ergonomic factors.
Tasks include –
(a) developing, implementing and reviewing programmes and policies to minimize potential environmental and occupational risks to health and safety;
(b) preparing and implementing plans and strategies for the safe, economic and suitable disposal of commercial, industrial, medical and household wastes;
(c) implementing prevention programmes and strategies for communicable diseases, food safety, wastewater treatment and disposal systems, recreation and domestic water quality, contaminated and hazardous substances;
(d) identifying, reporting and documenting hazards, and assessing and controlling risks in the environment and workplace and advising on compliance with relevant law and regulations;
(e) developing, implementing and monitoring programmes to minimize workplace and environmental pollution involving chemical, physical and biological hazards;
(f) advising on methods to prevent, eliminate, control, or reduce the exposure of workers, students, the public and the environment to radiological and other hazards;
(g) promoting ergonomic principles within the workplace such as matching furniture, equipment and work activities to the needs of employees;
(h) providing education, information, training, and advice to persons at all levels on aspects of occupational hygiene and environmental health;
(i) recording and investigating injuries and equipment damage, and reporting safety performance;
(j) coordinating arrangements for the compensation, rehabilitation and return to work of injured workers.
Examples of the occupations classified here:
▪ Environmental health officer
▪ Occupational health and safety adviser
▪ Occupational hygienist
▪ Radiation protection expert
Some related occupations classified elsewhere:
▪ Environmental protection professionals – 2133
▪ Specialist medical practitioner (public health) – 2212
▪ Specialist nurse (public health) – 2221
▪ Occupational therapist – 2269
▪ Health inspector – 3257
▪ Occupational health and safety inspector – 3257
▪ Sanitarian – 3257
▪ Sanitary inspector – 3257
Note
Professionals who assess, plan and implement programmes to monitor or control the impact of human activities on the environment are classified in Unit Group 2133: Environmental Protection Professionals.',
            ),
            106 => 
            array (
                'id' => '2264',
                'title' => 'Physiotherapists',
                'description' => 'Physiotherapists assess, plan and implement rehabilitative programmes that improve or restore human motor functions, maximize movement ability, relieve pain syndromes, and treat or prevent physical challenges associated with injuries, diseases and other impairments. They apply a broad range of physical therapies and techniques such as movement, ultrasound, heating, laser and other techniques.
Tasks include –
(a) administering muscle, nerve, joint functional ability and other tests to identify and assess physical problems of patients;
(b) establishing treatment goals with patients and designing treatment programmes to reduce physical pain, strengthen muscles, improve cardiothoracic, cardiovascular and respiratory functions, restore joint mobility and improve balance and coordination;
(c) developing, implementing and monitoring programmes and treatments using the therapeutic properties of exercise, heat, cold, massage, manipulation, hydrotherapy, electrotherapy, ultraviolet and infra-red light and ultrasound in the treatment of patients;
(d) instructing patients and their families in procedures to be continued outside clinical settings;
(e) recording information on patients\' health status and responses to treatment in medical records-keeping systems, and sharing information with other health professionals as required to ensure continuing and comprehensive care;
(f) developing and implementing programmes for screening and prevention of common physical ailments and disorders;
(g) supervising the work of physiotherapy assistants and others.
Examples of the occupations classified here:
▪ Geriatric physical therapist
▪ Manipulative therapist
▪ Orthopaedic physical therapist
▪ Paediatric physical therapist
▪ Physical therapist
▪ Physiotherapist
Some related occupations classified elsewhere:
▪ Chiropractor – 2269
▪ Occupational therapist – 2269
▪ Osteopath – 2269
▪ Podiatrist – 2269
▪ Acupressure therapist – 3255
▪ Hydrotherapist – 3255
▪ Massage therapist – 3255
▪ Physiotherapy technician – 3255
▪ Shiatsu therapist – 3255',
            ),
            107 => 
            array (
                'id' => '2265',
                'title' => 'Dieticians and Nutritionists',
                'description' => 'Dieticians and nutritionists assess, plan and implement programmes to enhance the impact of food and nutrition on human health.
Tasks include –
(a) instructing individuals, families and communities on nutrition, the planning of diets and preparation of food to maximize health benefits and reduce potential risks to health;
(b) planning diets and menus, supervising the preparation and serving of meals, and monitoring food intake and quality to provide nutritional care in settings offering food services;
(c) compiling and assessing data relating to health and nutritional status of individuals, groups and communities based on nutritional values of food served or consumed;
(d) planning and conducting nutrition assessments, intervention programmes, and education and training to improve nutritional levels among individuals and communities;
(e) consulting with other health professionals and care providers to manage the dietary and nutritional needs of patients;
(f) developing and evaluating food and nutrition products to meet nutritional requirements;
(g) conducting research on nutrition and disseminating the findings at scientific conferences and in other settings.
Examples of the occupations classified here:
▪ Clinical dietician
▪ Food service dietician
▪ Nutritionist
▪ Public health nutritionist
▪ Sports nutritionist',
            ),
            108 => 
            array (
                'id' => '2266',
                'title' => 'Audiologists and Speech Therapists',
                'description' => 'Audiologists and speech therapists evaluate, manage and treat physical disorders affecting human hearing, speech, communication and swallowing. They prescribe corrective devices or rehabilitative therapies for hearing loss, speech disorders and related sensory and neural problems, and provide counselling on hearing safety and communication performance.
Tasks include –
(a) evaluating hearing, speech and language performance in patients to determine the nature of hearing and communication disorders;
(b) administering hearing or speech/language tests or other examinations  using specialized diagnostic instruments and equipment, and interpreting test results alongside other medical, social and behavioural diagnostic data to determine appropriate courses of treatment;
(c) planning, directing and participating in counselling, screening, speech rehabilitation and other programmes related to hearing and communication;
(d) prescribing hearing aids and other assistive devices according to patients\' needs and instructing them in their use;
(e) planning and conducting treatment programmes to manage physical disorders affecting speech and swallowing;
(f) counselling and guiding hearing and/or language-impaired individuals, their families, teachers and employers;
(g) referring patients and families to additional medical or educational services if needed.
Examples of the occupations classified here:
▪ Audiologist
▪ Language therapist
▪ Speech pathologist
▪ Speech therapist',
            ),
            109 => 
            array (
                'id' => '2267',
                'title' => 'Optometrists and Ophthalmic Opticians',
                'description' => 'Optometrists and ophthalmic opticians provide diagnosis, management and treatment services for disorders of the eyes and visual system. They counsel on eye care and prescribe optical aids or other therapies for visual disturbance.
Tasks include –
(a) examining patients\' eyes and conducting diagnostic tests to assess ocular health and determine the nature and extent of vision problems and abnormalities;
(b) testing visual function using specialized instruments and equipment for measuring visual acuity and refractive error, function of visual pathways, visual fields, eye movements, freedom of vision and intraocular pressure;
(c) detecting, diagnosing and managing eye disease, including prescribing medications for treatment;
(d) consulting with and referring patients to ophthalmologists or other health professionals if additional medical treatment is necessary;
(e) detecting and diagnosing eye movement disorders and defects of binocular function, and planning and managing treatment programmes, including counselling patients in eye exercises to coordinate movement and focusing of eyes;
(f) prescribing corrective eyeglasses, contact lenses and other vision aids, and checking optical devices for performance, safety, comfort and lifestyle;
(g) advising on visual health matters such as contact lens care, vision care for the elderly, optics, visual ergonomics, and occupational and industrial eye safety.
Examples of the occupations classified here:
▪ Ophthalmic optician
▪ Optometrist
▪ Orthoptist
Some related occupations classified elsewhere:
▪ Ophthalmologist – 2212
▪ Dispensing optician – 3254',
            ),
            110 => 
            array (
                'id' => '2269',
                'title' => 'Health Professionals Not Elsewhere Classified',
                'description' => 'This unit group covers health professionals not classified elsewhere in Sub-major Group 22: Health Professionals. For instance, the group includes occupations such as podiatrist, occupational therapist, recreational therapist, chiropractor, osteopath and other professionals providing diagnostic, preventive, curative and rehabilitative health services.
In such cases tasks would include –
(a) interviewing patients and conducting diagnostic tests to determine their health status, functional limitations, and the nature of physical or mental disorders, illnesses or other health problems;
(b) developing and implementing treatment plans for injuries, illnesses and other physical and mental impairments;
(c) evaluating and documenting patients\' progress through treatment plans, and referring patients and families to medical doctors or other health care providers for specialized, rehabilitative or other care services as needed;
(d) administering therapeutic care and treatment to patients, including through application of manual and physical chiropractic and osteopathic techniques;
(e) recommending environmental adaptations in the home, leisure, work and school environments on an individual or group basis to enable individuals with functional limitations to perform their daily activities and occupations;
(f) planning and implementing therapeutic programmes on an individual and group basis for improving and maintaining physical, cognitive, emotional and social functioning, including through the use of arts and crafts, dance and movement, music and other recreational activities;
(g) identifying and prescribing treatments for conditions affecting the foot, ankle and related structures of the leg due to illness, disease or other physical impairment, and prescribing corrective footwear and advising on foot care to manage foot ailments;
(h)  performing minor surgical procedures such as on the foot and ankles.
Examples of the occupations classified here:
▪ Arts therapist
▪ Chiropractor
▪ Dance and movement therapist
▪ Occupational therapist
▪ Osteopath
▪ Podiatrist
▪ Recreational therapist
Note
Although in some jurisdictions chiropractic and osteopathy are considered to have the attributes of medical specializations, practitioners in these disciplines should always be classified here.',
            ),
            111 => 
            array (
                'id' => '23',
                'title' => 'Teaching Professionals',
                'description' => 'Teaching professionals teach the theory and practice of one or more disciplines at different educational levels; conduct research; improve or develop concepts, theories and operational methods pertaining to their particular discipline; and prepare scholarly papers and books. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed by workers in this sub-major group usually include:  conducting classes, courses, or tutorials at a particular educational level for educational and vocational purposes, including private lessons; conducting adult literacy programmes; teaching and educating persons with learning difficulties or special needs; designing and modifying curricula; inspecting and advising on teaching methods and aids; participating in decisions concerning the organization of teaching  and related activities at schools and universities; conducting research in particular subjects to improve or develop concepts, theories or operational methods for application in industrial and other fields; preparing scholarly papers and books.  Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor group:
231 University and Higher Education Teachers
232 Vocational Education Teachers
233 Secondary Education Teachers
234 Primary School and Early Childhood Teachers
235 Other Teaching Professionals',
            ),
            112 => 
            array (
                'id' => '231',
                'title' => 'University and Higher Education Teachers',
                'description' => 'University and higher education teachers prepare and deliver lectures and conduct tutorials in one or more subjects within a prescribed course of study at a university or other higher educational institution.  They conduct research, and prepare scholarly papers and books
Tasks performed usually include: designing and modifying curricula and preparing courses of study in accordance with requirements; preparing and delivering lectures and conducting tutorials, seminars and laboratory experiments; stimulating discussion and independent thought among students; supervising, where appropriate, experimental and practical work undertaken by students; administering, evaluating and marking examination papers and tests; directing research of postgraduate students or other members of department; researching into and developing concepts, theories and operational methods for application in industrial and other fields; preparing scholarly books, papers or articles; participating in departmental and faculty meetings and in conferences and seminars;
Occupations in this minor group are classified into the following unit group:
2310 University and Higher Education Teachers',
            ),
            113 => 
            array (
                'id' => '2310',
                'title' => 'University and Higher Education Teachers',
                'description' => 'University and higher education teachers prepare and deliver lectures and conduct tutorials in one or more subjects within a prescribed course of study at a university or other higher educational institution. They conduct research, and prepare scholarly papers and books.
Tasks include –
(a) designing and modifying curricula and preparing courses of study in accordance with requirements;
(b) preparing and delivering lectures and conducting tutorials, seminars and laboratory experiments;
(c) stimulating discussion and independent thought among students;
(d) supervising, where appropriate, experimental and practical work undertaken by students;
(e) administering, evaluating and marking examination papers and tests;
(f) directing research of postgraduate students or other members of department;
(g) researching into and developing concepts, theories and operational methods for application in industrial and other fields;
(h) preparing scholarly books, papers or articles;
(i) participating in departmental and faculty meetings and in conferences and seminars.
Examples of the occupations classified here:
▪ Higher education lecturer
▪ Professor
▪ University lecturer
▪ University tutor
Some related occupations classified elsewhere:
▪ University chancellor – 1120
▪ Dean (university)–1345
▪ Higher education faculty head – 1345
▪ Vocational education teacher – 2320',
            ),
            114 => 
            array (
                'id' => '232',
                'title' => 'Vocational Education Teachers',
                'description' => 'Vocational education teachers teach or instruct vocational or occupational subjects in adult and further education institutions and to senior students in secondary schools and colleges. They prepare students for employment in specific occupations or occupational areas for which university or higher education is not normally required.
Tasks performed usually include: developing curricula and planning course content and methods of instruction; determining training needs of students or workers and liaising with individuals, industry and other education sectors to ensure provision of relevant education and training programmes; presenting lectures and conducting discussions to increase students\' knowledge and competence; instructing and monitoring students in the use of tools, equipment and materials and the prevention of injury and damage; observing and evaluating students\' work to determine progress, provide feedback and make suggestions for improvement; administering  oral, written or performance tests to measure progress, evaluate training effectiveness and assess competency; preparing  reports and maintaining records such as student grades, attendance rolls and training activity details; supervising independent or group projects, field placements, laboratory work or other training; providing individualized instruction and tutorial or remedial instruction; conducting on-the-job training sessions to teach and demonstrate principles, techniques, procedures or methods of designated subjects.
Occupations in this minor group are classified into the following unit group:
2320 Vocational Education Teachers',
            ),
            115 => 
            array (
                'id' => '2320',
                'title' => 'Vocational Education Teachers',
                'description' => 'Vocational education teachers teach or instruct vocational or occupational subjects in adult and further education institutions and to senior students in secondary schools and colleges. They prepare students for employment in specific occupations or occupational areas for which university or higher education is not normally required.
Tasks include –
(a) developing curricula and planning course content and methods of instruction;
(b) determining training needs of students or workers and liaising with individuals, industry and other education sectors to ensure provision of relevant education and training programmes;
(c) presenting lectures and conducting discussions to increase students\' knowledge and competence;
(d) instructing and monitoring students in the use of tools, equipment and materials and the prevention of injury and damage;
(e) observing and evaluating students\' work to determine progress, provide feedback and make suggestions for improvement;
(f) administering oral, written or performance tests to measure progress, evaluate training effectiveness and assess competency;
(g) preparing reports and maintaining records such as student grades, attendance rolls and training activity details;
(h) supervising independent or group projects, field placements, laboratory work or other training;
(i) providing individualized instruction and tutorial or remedial instruction;
(j) conducting on-the-job training sessions to teach and demonstrate principles, techniques, procedures or methods of designated subjects.
Examples of the occupations classified here:
▪ Automotive technology instructor
▪ Cosmetology instructor
▪ Vocational education teacher
Some related occupations classified elsewhere:
▪ School principal – 1345
▪ Secondary education teacher – 2330
Notes
Those who teach vocational subjects that are intended to prepare students for employment in a particular occupational group should be classified in Unit Group 2320: Vocational Education Teachers, whether they work in a general secondary school or in a vocational or technical school or college.  Those who teach, at secondary education level, subjects such as mathematics that do not aim to prepare students for employment in a specific occupational area, should be classified in Unit Group 2330: Secondary Education Teachers, even if they are employed in a vocational or technical college.',
            ),
            116 => 
            array (
                'id' => '233',
                'title' => 'Secondary Education Teachers',
                'description' => 'Secondary education teachers teach one or more subjects at secondary education level, excluding subjects intended to prepare students for employment in specific occupational areas.
Tasks performed usually include: designing and modifying curricula and preparing educational courses of study in accordance with curriculum guidelines; establishing and enforcing rules for behaviour and procedures for maintaining order among students; preparing and giving lessons, discussions, and demonstrations in one or more subjects; establishing clear objectives for all lessons, units and projects and communicating those objectives to students; preparing materials and classrooms for class activities; adapting teaching methods and instructional materials to meet students\' varying needs and interests; observing and evaluating students\' performance and behaviour; preparing, administering and marking tests,  assignments and examinations to evaluate pupils\' progress; preparing reports about pupils\' work and conferring with other teachers and parents; participating in meetings concerning the school\'s educational or organizational policies; planning, organizing and participating in school activities such as excursions, sporting events and concerts.
Occupations in this minor group are classified into the following unit group:
2330 Secondary Education Teachers',
            ),
            117 => 
            array (
                'id' => '2330',
                'title' => 'Secondary Education Teachers',
                'description' => 'Secondary education teachers teach one or more subjects at secondary education level, excluding subjects intended to prepare students for employment in specific occupational areas.
Tasks include –
(a) designing and modifying curricula and preparing educational courses of study in accordance with curriculum guidelines;
(b) establishing and enforcing rules for behaviour and procedures for maintaining order among students;
(c) preparing and giving lessons, discussions, and demonstrations in one or more subjects;
(d) establishing clear objectives for all lessons, units, and projects and communicating those objectives to students;
(e) preparing materials and classrooms for class activities;
(f) adapting teaching methods and instructional materials to meet students\' varying needs and interests;
(g) observing and evaluating students\' performance and behaviour;
(h) preparing, administering and marking tests,  assignments and examinations to evaluate pupils\' progress;
(i) preparing reports about pupils\' work and conferring with other teachers and parents;
(j) participating in meetings concerning the school\'s educational or organizational policies;
(k) planning, organizing and participating in school activities such as excursions, sporting events and concerts.
Examples of the occupations classified here:
▪ Secondary school teacher
▪ High school teacher
Some related occupations classified elsewhere:
▪ Head teacher – 1345
▪ School principal – 1345
▪ Vocational education teacher – 2320
▪ Schools inspector – 2351
▪ Literacy tutor (private tuition) – 2359
▪ Mathematics coach (private tuition) – 2359
▪ School counsellor – 2359
Notes
Those who teach vocational subjects that are intended to prepare students for employment in a particular occupational group should be classified in Unit Group 2320: Vocational Education Teachers, whether they work in a general secondary school or in a  vocational or technical school or college.  Those who teach, at secondary education level, subjects such as mathematics that do not aim to prepare students for employment in a specific occupational area, should be classified in Unit Group 2330: Secondary Education Teachers, even if they are employed in a vocational or technical college.',
            ),
            118 => 
            array (
                'id' => '234',
                'title' => 'Primary School and Early Childhood Teachers',
                'description' => 'Primary school and early childhood teachers teach a range of subjects at the primary level of education and organize educational activities for children below primary school age.
Tasks performed usually include: preparing programmes of learning and giving instruction in a range of subjects at the primary education level, planning and organizing activities designed to facilitate children\'s development of language, physical and social skills; preparing reports. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
2341 Primary School Teachers
2342 Early Childhood Educators',
            ),
            119 => 
            array (
                'id' => '2341',
                'title' => 'Primary School Teachers',
                'description' => 'Primary school teachers teach a range of subjects at the primary education level.
Tasks include –
(a) preparing daily and longer term lesson plans in accordance with curriculum guidelines;
(b) instructing children individually and in groups, using various teaching methods and materials (e.g. computers, books, games), adapting to children\'s varying needs;
(c) maintaining discipline and good working habits in the classroom;
(d) planning and conducting activities with the children such as sporting activities, concerts and excursions;
(e) assigning and grading class work and homework;
(f) preparing, administering and grading tests and assignments to evaluate children\'s progress;
(g) observing and evaluating children\'s performance and behaviour;
(h) supervising children during classes and at other times in the school day, including the playground during breaks;
(i) participating in staff meetings and other sessions, and conferring with other teachers concerning educational issues;
(j) preparing for and attending parent meetings to discuss children\'s progress and problems.
Example of the occupations classified here:
▪ Primary school teacher
Some related occupations classified elsewhere:
▪ Head teacher – 1345
▪ School principal – 1345
▪ Schools inspector – 2351',
            ),
            120 => 
            array (
                'id' => '2342',
                'title' => 'Early Childhood Educators',
                'description' => 'Early childhood educators promote the social, physical, and intellectual development of children below primary school age through the provision of educational and play activities.
Tasks include –
(a) planning and organizing individual and group activities designed to facilitate the development of children\'s motor, cooperative and social skills, confidence and understanding;
(b) promoting language development through storytelling, role play, songs, rhymes and informal conversations and discussions;
(c) leading children in activities that provide opportunities for creative expression through the media of art, dramatic play, music and physical fitness;
(d) observing children in order to evaluate progress and to detect signs of developmental, emotional or health-related problems;
(e) observing and assessing nutritional health, welfare and safety needs of students and identifying factors which may impede students\' progress;
(f) supervising children\'s activities to ensure safety and resolve conflicts;
(g) guiding and assisting children in the development of proper eating, dressing and toilet habits;
(h) discussing progress or problems of children with parents and other staff members and identifying appropriate actions and referrals to other services;
(i) establishing and maintaining collaborative relationships with other service providers working with young children.
Examples of the occupations classified here:
▪ Early childhood educator
▪ Pre-school teacher
Some related occupations classified elsewhere:
▪ Child care centre manager – 1341
▪ Child care worker – 5311',
            ),
            121 => 
            array (
                'id' => '235',
                'title' => 'Other Teaching Professionals',
                'description' => 'Other teaching professionals conduct research and advise on teaching methods; teach people with learning difficulties or special needs; teach non-native languages for migration and related purposes; give private tuition; teach arts, information technology and other subjects outside the mainstream primary, secondary and higher education systems; and provide other teaching services not classified elsewhere in Sub-major Group 23: Teaching Professionals.
Tasks performed usually include: conducting research and developing or advising on teaching methods, courses and aids; teaching physically handicapped children, young persons or adults or those with learning difficulties or other with special needs, teaching non-native languages for migration purposes; teaching students in practice, theory and performance of music, drama, dance, visual and other arts; developing, scheduling and conducting training programmes and courses for information technology users.
Occupations in this minor group are classified into the following unit groups:
2351 Education Methods Specialists
2352 Special Needs Teachers
2353 Other Language Teachers
2354 Other Music Teachers
2355 Other Arts Teachers
2356 Information Technology Trainers
2359 Teaching Professionals Not Elsewhere Classified',
            ),
            122 => 
            array (
                'id' => '2351',
                'title' => 'Education Methods Specialists',
                'description' => 'Education methods specialists conduct research and develop or advise on teaching methods, courses and aids. They review and examine teachers\' work, the functioning of educational institutions and the results achieved and recommend changes and improvements.
Tasks include –
(a) researching into current developments in curricula, teaching methods and other educational practices, and advising on necessary changes and possible improvements;
(b) evaluating and advising on contents of courses and methods of examination;
(c) researching into audiovisual and other teaching aids and advising on, planning and organizing their introduction in educational establishments;
(d) documenting subjects and courses developed, and evaluating new courses;
(e) providing ongoing professional development, training and consultative services to teachers;
(f) organizing and conducting workshops and conferences to train teachers in new programmes and methods;
(g) developing the structure, content and objectives of new educational courses and programmes;
(h) visiting schools periodically and conferring with administrative and teaching staff on questions relating to curricula, teaching methods, equipment and other matters;
(i) visiting classrooms to observe teaching techniques and to evaluate teachers\' performance and scholastic results obtained;
(j) preparing reports and making recommendations to educational authorities concerning possible changes and improvements in curricula, teaching methods, and other matters.
Examples of the occupations classified here:
▪ Curriculum coordinator
▪ Curriculum developer
▪ Education methods specialist
▪ Schools inspector
▪ Teaching aids specialist
Some related occupations classified elsewhere:
▪ School counsellor – 2359
▪ Student adviser – 2359
▪ Educational psychologist – 2634',
            ),
            123 => 
            array (
                'id' => '2352',
                'title' => 'Special Needs Teachers',
                'description' => 'Special needs teachers teach physically or mentally handicapped children, young persons or adults, or those with learning difficulties or other special needs. They promote the social, emotional, intellectual and physical development of their students.
Tasks include –
(a) assessing students\' abilities and limitations with regard to intellectual, physical, social and emotional impairments, exceptional intellectual gifts, or other special situations;
(b) designing or modifying curricula and preparing and delivering programmes, lessons and activities adapted to students\' abilities and needs;
(c) giving instruction on an individual or group basis using special techniques or aids appropriate to students\' needs;
(d) employing special educational strategies and techniques during instruction to improve the development of sensory- and perceptual-motor skills, language, cognition and memory;
(e) establishing and enforcing rules for behaviour and policies and procedures to maintain order among students;
(f) teaching academic subjects and practical and self-help skills to students with hearing, sight and other impairments;
(g) stimulating and developing students\' confidence, interests, abilities, manual skills and coordination;
(h) conferring with other staff members to plan and schedule lessons for special needs students;
(i) preparing and maintaining student data and other records and submitting reports;
(j) administering various forms of assessment and evaluating progress of each student;
(k) conferring with students, parents, head teachers and other relevant professionals involved in the students\' care to develop individual educational plans designed to promote students\' development.
Examples of the occupations classified here:
▪ Learning disabilities special education teacher
▪ Learning support teacher
▪ Remedial teacher
▪ Teacher of gifted children
▪ Teacher of the hearing impaired
▪ Teacher of the sight impaired
Some related occupations classified elsewhere:
▪ Vocational education teacher – 2320
▪ Secondary school teacher – 2330
▪ Primary school teacher – 2341',
            ),
            124 => 
            array (
                'id' => '2353',
                'title' => 'Other Language Teachers',
                'description' => 'Other language teachers teach non-native languages to adults and children who are learning a language for reasons of migration, to fulfil employment requirements or opportunities, to facilitate participation in educational programmes delivered in a foreign language, or for personal enrichment. They work outside the mainstream primary, secondary and higher education systems, or in support of students and teachers within those systems.
Tasks include –
(a) assessing the level of ability and the extent of language difficulties of students,  and establishing students\' needs and learning goals;
(b) planning, preparing and delivering lessons and workshops for groups and individuals, with content and rate of progression adapted to students\' abilities and needs;
(c) designing and producing teaching materials and adapting existing materials;
(d) assessing students\' progress;
(e) assisting students in classroom settings where subjects are taught in a language other than the students\' native language;
(f) providing assistance to other teachers by designing special teaching programmes for students still learning the main language of instruction;
(g) assigning and correcting work, and preparing and grading exams;
(h) assessing, recording and reporting on students\' progress.
Examples of the occupations classified here:
▪ Intensive language teacher
▪ Migrant education teacher
▪ Practical language teacher
▪ Second language teacher
Some related occupations classified elsewhere:
▪ University lecturer – 2310
▪ Vocational education teacher – 2320
▪ Secondary school teacher – 2330
▪ Primary school teacher – 2341',
            ),
            125 => 
            array (
                'id' => '2354',
                'title' => 'Other Music Teachers',
                'description' => 'Other music teachers teach students in the practice, theory and performance of music outside the mainstream primary, secondary and higher education systems, but may provide private or small group tuition as an extracurricular activity in association with mainstream educational institutions.
Tasks include –
(a) assessing the students\' level of ability and determining needs and learning goals;
(b) planning, preparing and delivering programmes of study, lessons and workshops for individual students and groups;
(c) preparing and presenting material on the theory and interpretation of music;
(d) instructing and demonstrating practical aspects of singing or of playing a particular instrument;
(e) teaching students to read and write musical notation;
(f) assigning exercises and teaching pieces of music relevant to students\' level of ability, interests and talents;
(g) assessing students and offering advice, criticism and encouragement;
(h) revising curricula, course content, course materials and methods of instruction;
(i) preparing students for examinations, performances and assessments;
(j) arranging visits and tours to musical performances;
(k) organizing and assisting in auditions or performances of students\' work.
Examples of the occupations classified here:
▪ Guitar teacher (private tuition)
▪ Piano teacher (private tuition)
▪ Singing teacher (private tuition)
▪ Violin teacher (private tuition)
Some related occupations classified elsewhere:
▪ University lecturer – 2310
▪ Vocational education teacher – 2320
▪ Secondary school teacher – 2330
▪ Primary school teacher – 2341
Notes
Regular secondary and primary school teachers who teach music are classified in Unit Groups 2330: Secondary Education Teachers, and 2341: Primary School Teachers respectively.',
            ),
            126 => 
            array (
                'id' => '2355',
                'title' => 'Other Arts Teachers',
            'description' => 'Other arts teachers teach students in the practice, theory and performance of dance, drama, visual and other arts (excluding music) outside the mainstream primary, secondary and higher education systems, but may provide private or small group tuition as an extracurricular activity in association with mainstream educational institutions
Tasks include –
(a) assessing the students\' level of ability and determining learning needs;
(b) planning, preparing and delivering programmes of study, lessons and workshops for individual students and groups;
(c) preparing and presenting material on the theory of the subject area being studied;
(d) instructing and demonstrating practical aspects of drama, dance, visual or other arts;
(e) assigning exercises and work relevant to students\' level of ability, interests and talents;
(f) assessing students and offering advice, criticism and encouragement;
(g) revising curricula, course content, course materials and methods of instruction;
(h) preparing students for examinations, performance and assessments;
(i) arranging visits and tours to exhibitions and  performances;
(j) organizing and assisting in performances or exhibitions of students\' work.
Examples of the occupations classified here:
▪ Dance teacher (private tuition)
▪ Drama teacher (private tuition)
▪ Painting teacher (private tuition)
▪ Sculpture teacher (private tuition)
Some related occupations classified elsewhere:
▪ University lecturer – 2310
▪ Vocational education teacher – 2320
▪ Secondary school teacher – 2330
▪ Primary school teacher – 2341
▪ Private music teacher – 2354
Note
Regular secondary and primary school teachers who teach arts subjects are classified in Unit Groups 2330: Secondary Education Teachers, and 2341: Primary School Teachers respectively.',
            ),
            127 => 
            array (
                'id' => '2356',
                'title' => 'Information Technology Trainers',
                'description' => 'Information technology trainers develop, schedule and conduct training programmes and courses for computer and other information technology users outside the mainstream primary, secondary and higher education systems.
Tasks include –
(a) identifying the information technology training needs and requirements of individual users and organizations;
(b) preparing and developing instructional training material and aids such as handbooks, visual aids, online tutorials, demonstration models and supporting training reference documentation;
(c) designing, coordinating, scheduling and conducting training and development programmes that can be delivered in the form of individual and group instruction, and facilitating workshop meetings, demonstrations and conferences;
(d) monitoring and performing ongoing evaluation and assessment of training quality and effectiveness, and reviewing and modifying training objectives, methods and course deliverables;
(e) gathering, investigating and researching background materials to gain a full understanding of the subject matter and systems;
(f) keeping up to date with new product version releases, advances in software and general information technology trends, writing end user products and materials such as user training, tutorial and instruction manuals, online help, and operating and maintenance instructions.
Examples of the occupations classified here:
▪ Computer trainer
▪ Software trainer
Some related occupations classified elsewhere:
▪ University lecturer – 2310
▪ Vocational education teacher – 2320
▪ Secondary school teacher – 2330
▪ Primary school teacher – 2341
▪ Staff development officer – 2424',
            ),
            128 => 
            array (
                'id' => '2359',
                'title' => 'Teaching Professionals Not Elsewhere Classified',
                'description' => 'This unit group covers teaching professionals not classified elsewhere in Sub-major Group 23: Teaching Professionals. For instance, the group includes those who provide private tuition in subjects other than foreign languages and the arts, and those who provide educational counselling to students.
In such cases tasks performed would include –
(a) assessing students\' level of ability and determining learning needs;
(b) planning, preparing and delivering programmes of study, lessons and workshops for individual students and groups;
(c) preparing and presenting material on the theory of the subject area being studied;
(d) instructing and demonstrating practical aspects of the subject area being studied;
(e) assigning exercises and work relevant to students\' level of ability, interests and aptitude;
(f) assessing students and offering advice, criticism and encouragement;
(g) revising curricula, course content, course materials and methods of instruction;
(h) preparing students for examinations and assessments;
(i) counselling students regarding educational issues such as course and programme selection, class scheduling, school adjustment, truancy, study habits and career planning;
(j) counselling students to help them understand and overcome personal, social or behavioural problems affecting their education;
(k) preparing students for later educational experiences by encouraging them to explore learning opportunities and to persevere with challenging tasks.
Examples of the occupations classified here:
▪ Literacy tutor (private tuition)
▪ Mathematics coach (private tuition)
▪ School counsellor
▪ Student adviser
Some related occupations classified elsewhere:
▪ University lecturer – 2310
▪ Vocational education teacher – 2320
▪ Secondary school teacher – 2330
▪ Primary school teacher – 2341
▪ Intensive language teacher – 2353
▪ Migrant education teacher – 2353
▪ Music teacher (private tuition) – 2354
▪ Dance teacher (private tuition) – 2355
▪ Drama teacher (private tuition) – 2355
▪ Painting teacher (private tuition) – 2355
▪ Sculpture teacher (private tuition) –2355
▪ Educational psychologist – 2634
▪ Family counsellor – 2635
▪ Social worker – 2635',
            ),
            129 => 
            array (
                'id' => '24',
                'title' => 'Business and Administration Professionals',
                'description' => 'Business and administration professionals perform analytical, conceptual and practical tasks to provide services in financial matters, human resource development, public relations, marketing and sales in the technical, medical, information and communications technology areas; and conduct reviews of organizational structures, methods and systems as well as quantitative analyses of information affecting investment programmes. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed by workers in this sub-major group usually include: collecting, analysing and interpreting information on the financial viability, cost structures and trading effectiveness of organizations; conducting audits, preparing financial statements and controlling treasury systems for organizations; developing and reviewing financial plans and strategies, executing buy and sell orders, and negotiating the purchase and sale of commodities; developing, implementing and evaluating staff recruitment, training and development programmes; researching, developing and implementing marketing and public relations campaigns; studying and developing methods and policies to improve and promote government and business operations and effectiveness; acquiring and updating knowledge of employers\' and competitors\' goods and services, and of market conditions; assessing customers\' needs and explaining and demonstrating goods and services to them.
Occupations in this sub-major group are classified into the following minor group:
241 Finance Professionals
242 Administration Professionals
243 Sales, Marketing and Public Relations Professionals',
            ),
            130 => 
            array (
                'id' => '241',
                'title' => 'Finance Professionals',
                'description' => 'Finance professionals plan, develop, organize, administer, invest, manage and conduct quantitative analyses of either financial accounting systems or funds for individuals, establishments and public or private institutions.
Tasks performed usually include: preparing and organizing financial statements for an organization; reviewing financial materials of an organization; providing financial advice to individuals and organizations; preparing analytic reports concerning segments of the economy and the economy as a whole.
Occupations in this minor group are classified into the following unit groups:
2411 Accountants
2412 Financial and Investment Advisers
2413 Financial Analysts',
            ),
            131 => 
            array (
                'id' => '2411',
                'title' => 'Accountants',
                'description' => 'Accountants plan, organize and administer accounting systems for individuals and establishments. Some occupations classified here examine and analyse the accounting and financial records of individuals and establishments to ensure accuracy and compliance with established accounting standards and procedures.
Tasks include –
(a) advising on, planning and installing budgetary, accounts controlling and other accounting policies and systems;
(b) preparing and certifying financial statements for presentation to management, shareholders and statutory or other bodies;
(c) preparing tax returns, advising on taxation problems and contesting disputed claims before tax officials;
(d) preparing or reporting on profit forecasts and budgets;
(e) conducting financial investigations in such matters as suspected fraud, insolvency and bankruptcy;
(f) auditing accounts and bookkeeping records;
(g) conducting investigations and advising management on financial aspects of productivity, stockholdings, sales, new products, etc.;
(h) devising and controlling systems to determine unit cost of products and services.
Examples of the occupations classified here:
▪ Accountant
▪ Auditor
▪ Certified accountant
▪ Chartered accountant
▪ Financial controller
▪ Insolvency trustee
▪ Management accountant
▪ Tax accountant
Some related occupations classified elsewhere:
▪ Finance manager – 1211
▪ Accounting assistant – 3313
▪ Bookkeeper – 3313',
            ),
            132 => 
            array (
                'id' => '2412',
                'title' => 'Financial and Investment Advisers',
                'description' => 'Financial and investment advisers develop financial plans for individuals and organizations, and invest and manage funds on their behalf.
Tasks include –
(a) building and maintaining a client base;
(b) interviewing clients to determine financial status and objectives, risk tolerance and other information needed to develop financial plans and investment strategies;
(c) setting financial objectives, and developing and implementing strategies for achieving them;
(d) arranging to buy and sell stocks and bonds for clients;
(e) monitoring investment performance, and reviewing and revising investment plans based on modified needs and changes in markets;
(f) recommending and arranging insurance cover for clients.
Examples of the occupations classified here:
▪ Estate planner
▪ Financial planner
▪ Investment adviser',
            ),
            133 => 
            array (
                'id' => '2413',
                'title' => 'Financial Analysts',
                'description' => 'Financial analysts conduct quantitative analyses of information affecting investment programmes of public or private institutions.
Tasks include –
(a) analysing financial information to produce forecasts of business, industry and economic conditions for use in making investment decisions;
(b) maintaining knowledge and staying abreast of developments in the fields of industrial technology, business, finance and economic theory;
(c) interpreting data affecting investment programmes such as price, yield, stability, future trends in investment risks and economic influences;
(d) monitoring economic, industrial and corporate developments through analysis of information obtained from financial publications and services, investment banking firms, government agencies, trade publications, company sources and personal interviews;
(e) recommending investments and investment timing to companies, investment firm staff or the investing public;
(f) determining the prices at which securities should be syndicated and offered to the public;
(g) preparing plans of action for investment based on financial analyses;
(h) evaluating and comparing the relative quality of various securities in a given industry;
(i) presenting oral and written reports on general economic trends, individual corporations and entire industries.
Examples of the occupations classified here:
▪ Bond analyst
▪ Investment analyst
▪ Securities consultant',
            ),
            134 => 
            array (
                'id' => '242',
                'title' => 'Administration Professionals',
                'description' => 'Administration professionals apply various concepts and theories related to improving the effectiveness of organizations and the individuals within the organization.
Tasks performed usually include:  evaluating the structure of organizations and suggesting areas of improvement; ensuring that the operational activities of an organization are consistent with the policy objectives of the organization; recruiting, training, developing and counselling personnel within an organization.
Occupations in this minor group are classified into the following unit groups:
2421 Management and Organization Analysts
2422 Policy Administration Professionals
2423 Personnel and Careers Professionals
2424 Training and Staff Development Professionals',
            ),
            135 => 
            array (
                'id' => '2421',
                'title' => 'Management and Organization Analysts',
                'description' => 'Management and organization analysts assist organizations to achieve greater efficiency and solve organizational problems. They study organizational structures, methods, systems and procedures.
Tasks include –
(a) assisting and encouraging the development of objectives, strategies and plans aimed at achieving customer satisfaction and the efficient use of organizations\' resources;
(b) analysing and evaluating current systems and structures;
(c) discussing current systems with staff and observing systems at all levels of organization;
(d) directing clients towards more efficient organization and developing solutions to organizational problems;
(e) undertaking and reviewing work studies by analysing existing and proposed methods and procedures such as administrative and clerical procedures;
(f) recording and analysing organizations\' workflow charts, records, reports, manuals and job descriptions;
(g) preparing and recommending proposals to revise methods and procedures, alter work flows, redefine job functions and resolve organizational problems;
(h) assisting in implementing approved recommendations, issuing revised instructions and procedure manuals and drafting other documentation;
(i) reviewing operating procedures and advising of departures from procedures and standards.
Examples of the occupations classified here:
▪ Business consultant
▪ Management consultant
▪ Organization and methods analyst
Some related occupations classified elsewhere:
▪ Business analyst (IT) – 2511',
            ),
            136 => 
            array (
                'id' => '2422',
                'title' => 'Policy Administration Professionals',
                'description' => 'Policy administration professionals develop and analyse policies guiding the design, implementation and modification of government and commercial operations and programmes.
Tasks include –
(a) liaising and consulting with programme administrators and other interested parties to identify policy needs;
(b) reviewing existing policies and legislation to identify anomalies and out-of-date provisions;
(c) researching social, economic and industrial trends, and client expectations of programmes and services provided;
(d) formulating and analysing policy options, preparing briefing papers and recommendations for policy changes and advising on preferred options;
(e) assessing impacts, financial implications, interactions with other programmes and political and administrative feasibility of policies;
(f) conducting threat and risk assessments and developing responses;
(g) reviewing operations and programmes to ensure consistency with policies of the organization.
Examples of the occupations classified here:
▪ Intelligence officer
▪ Policy analyst
▪ Political adviser',
            ),
            137 => 
            array (
                'id' => '2423',
                'title' => 'Personnel and Careers Professionals',
                'description' => 'Personnel and careers professionals provide professional business services related to personnel policies such as employee recruitment or development, occupational analysis and vocational guidance.
Tasks include –
(a) advising on and performing personnel functions relating to employee recruitment, placement, training, promotion, compensation and employee–management relations or other areas of personnel policy;
(b) studying and analysing jobs performed in an establishment by various means, including interviews with workers, supervisors and management, and writing detailed position, job or occupation descriptions from information obtained;
(c) preparing occupational information or working on occupational classification systems;
(d) advising and working on the foregoing and other aspects of job and occupational  analysis in such fields as personnel administration, workforce research and planning, training or occupational information and vocational guidance;
(e) studying and advising individuals on employment opportunities, career choices and further education or training that may be desirable.
Examples of the occupations classified here:
▪ Careers adviser
▪ Human resource expert
▪ Job analyst
▪ Outplacement expert
▪ Occupational analyst
▪ Personnel specialist
▪ Recruitment officer
▪ Vocational guidance counsellor',
            ),
            138 => 
            array (
                'id' => '2424',
                'title' => 'Training and Staff Development Professionals',
                'description' => 'Training and staff development professionals plan, develop, implement and evaluate training and development programmes to ensure management and staff acquire the skills and develop the competencies required by organizations to meet organizational objectives.
Tasks include –
(a) identifying training needs and requirements of individuals and organizations;
(b) setting human resource development objectives and evaluating learning outcomes;
(c) preparing and developing instructional training material and aids such as handbooks, visual aids, online tutorials, demonstration models and supporting training reference documentation;
(d) designing, coordinating, scheduling and conducting training and development programmes that can be delivered in the form of individual and group instruction, and facilitating workshops, meetings, demonstrations and conferences;
(e) liaising with external training providers to arrange delivery of specific training and development programmes;
(f) promoting internal and external training and development, and evaluating these promotional activities;
(g) monitoring and performing ongoing evaluation and assessment of internal and external training quality and effectiveness, and reviewing and modifying training objectives, methods and course deliverables;
(h) gathering, investigating and researching background materials to gain an understanding of various subject matters and systems.
Examples of the occupations classified here:
▪ Staff development officer
▪ Training officer
▪ Workforce development specialist',
            ),
            139 => 
            array (
                'id' => '243',
                'title' => 'Sales, Marketing and Public Relations Professionals',
                'description' => 'Sales, marketing and public relations professionals plan, develop, coordinate and implement programmes of information dissemination to promote organizations, goods and services; and represent companies in selling a range of technical, industrial, medical, pharmaceutical and ICT goods and services.
Tasks performed usually include: commissioning and undertaking market research, analysing the findings and planning advertising, marketing and public relations activities; supporting business growth and development through the preparation and execution of marketing objectives, policies and programmes; planning and organizing publicity campaigns; appraising and selecting material submitted by writers, photographers, illustrators and others to create favourable publicity; acquiring and updating knowledge of employers\' and competitors\' goods and services, and of market conditions; assessing customers\' needs and explaining and demonstrating goods and services to them; visiting regular and prospective client businesses to establish and act on marketing opportunities; quoting and negotiating prices and credit terms, and completing contracts.
Occupations in this minor group are classified into the following unit groups:
2431 Advertising and Marketing Professionals
2432 Public Relations Professionals
2433 Technical and Medical Sales Professionals (excluding ICT)
2434 Information and Communications Technology Sales Professionals',
            ),
            140 => 
            array (
                'id' => '2431',
                'title' => 'Advertising and Marketing Professionals',
                'description' => 'Advertising and marketing professionals develop and coordinate advertising strategies and campaigns, determine the market for new goods and services, and identify and develop market opportunities for new and existing goods and services.
Tasks include –
(a) planning, developing and organizing advertising policies and campaigns to support sales objectives;
(b) advising managers and clients on strategies and campaigns to reach target markets, creating consumer awareness and effectively promoting the attributes of goods and services;
(c) writing advertising copy and media scripts, and arranging television and film production and media placement;
(d) collecting and analysing data regarding consumer patterns and preferences;
(e) interpreting and predicting current and future consumer trends;
(f) researching potential demand and market characteristics for new goods and services;
(g) supporting business growth and development through the preparation and execution of marketing objectives, policies and programmes;
(h) commissioning and undertaking market research to identify market opportunities for new and existing goods and services;
(i) advising on all elements of marketing such as product mix, pricing, advertising and sales promotion, selling and distribution channels.
Examples of the occupations classified here:
▪ Advertising specialist
▪ Marketing specialist
▪ Market research analyst',
            ),
            141 => 
            array (
                'id' => '2432',
                'title' => 'Public Relations Professionals',
                'description' => 'Public relations professionals plan, develop, implement and evaluate information and communication strategies that create an understanding and a favourable view of businesses and other organizations, their goods and services, and their role in the community.
Tasks include –
(a) planning and organizing publicity campaigns and communication strategies;
(b) advising executives on the public relations implications of their policies, programmes and practices, and preparing and controlling the issue of news and press releases;
(c) undertaking and commissioning public opinion research, analysing the findings and planning public relations and promotional campaigns;
(d) organizing special events, seminars, entertainment, competitions and social functions to promote goodwill and favourable publicity;
(e) representing organizations and arranging interviews with publicity media;
(f) attending business, social and other functions to promote the organization;
(g) commissioning and obtaining photographs and other illustrative material;
(h) selecting, appraising and revising material submitted by publicity writers, photographers, illustrators and others to create favourable publicity.
Examples of the occupations classified here:
▪ Publicity agent
▪ Public relations copy writer
▪ Public relations officer
▪ Press liaison officer',
            ),
            142 => 
            array (
                'id' => '2433',
            'title' => 'Technical and Medical Sales Professionals (excluding ICT)',
            'description' => 'Technical and medical sales professionals (excluding ICT) represent companies in selling a range of industrial, medical and pharmaceutical goods and services to industrial, business, professional and other establishments.
Tasks include –
(a) compiling lists of prospective client businesses by using directories and other sources;
(b) acquiring and updating knowledge of employers\' and competitors\' goods and services, and of market conditions;
(c) visiting regular and prospective client businesses to establish and act on selling opportunities;
(d) assessing clients\' needs and resources and recommending appropriate goods or services;
(e) providing input to product design where goods or services must be tailored to suit clients\' needs;
(f) developing reports and proposals as part of sales presentations to demonstrate benefits from the use of goods or services;
(g) estimating costs of installing and maintaining equipment or service;
(h) monitoring customers\' changing needs and competitor activity, and reporting these developments to sales management;
(i) quoting and negotiating prices and credit terms, and preparing and administering sales contracts;
(j) arranging delivery of goods, installation of equipment and the provision of services;
(k) reporting to sales management on sales made and the marketability of goods and services;
(l) consulting with clients after sale to ensure a satisfactory resolution of any problems, and provide ongoing support.
Examples of the occupations classified here:
▪ Sales representative (industrial products)
▪ Sales representative (medical and pharmaceutical products)
▪ Technical sales representative
Some related occupations classified elsewhere:
▪ Commercial sales representatives – 3322
▪ Sales representative (computers)
▪ Sales representative (communications technology)',
            ),
            143 => 
            array (
                'id' => '2434',
                'title' => 'Information and Communications Technology Sales Professionals',
            'description' => 'Information and communications technology (ICT) sales professionals sell, at the wholesale level, a range of computer hardware, software and other information and communications technology goods and services including installations, and provide specialized information as required.
Tasks include –
(a) soliciting orders and selling goods to retail, industrial, wholesale and other establishments;
(b) selling technical equipment, supplies and related services to business establishments or individuals;
(c) discussing the needs of new and existing customers and providing specialized information about how particular equipment, supplies and services meet those needs;
(d) quoting and negotiating prices and credit terms, and completing contracts and recording orders;
(e) updating customer records and preparing sales reports;
(f) arranging delivery of goods, installation of equipment and the provision of services;
(g) reporting customers\' reactions and requirements to manufacturers.
Examples of the occupations classified here:
▪ Sales representative (computers)
▪ Sales representative (communications technology)
Some related occupations classified elsewhere:
▪ Shop sales assistants – 5223',
            ),
            144 => 
            array (
                'id' => '25',
                'title' => 'Information and Communications Technology Professionals',
                'description' => 'Information and communications technology professionals conduct research; plan, design, write, test, provide advice and improve information technology systems, hardware, software and related concepts for specific applications; develop associated documentation including principles, policies and procedures; and design, develop, control, maintain and support databases and other information systems to ensure optimal performance and data integrity and security.
Tasks performed by workers in this sub-major group usually include: researching information technology use in business functions; identifying areas for improvement and researching the theoretical aspects and operational methods for the use of computers; evaluating, planning and designing hardware or software configurations for specific applications including for Internet, Intranet and multimedia systems; designing, writing, testing and maintaining computer programs; designing and developing database architecture and database management systems; developing and implementing security plans and data administration policy, and administering computer networks and related computing environments; analysing, developing, interpreting and evaluating complex system design and architecture specifications, data models and diagrams in the development, configuration and integration of computer systems.
Occupations in this sub-major group are classified into the following minor groups:
251 Software and Applications Developers and Analysts
252 Database and Network Professionals',
            ),
            145 => 
            array (
                'id' => '251',
                'title' => 'Software and Applications Developers and Analysts',
                'description' => 'Software and applications developers and analysts conduct research; plan, design, write, test, provide advice on and improve information technology systems such as hardware, software and other applications to meet specific requirements. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed usually include: researching information technology use in business functions and identifying areas in which improvements could be made to maximize effectiveness and efficiency;  conducting research into the theoretical aspects of and operational methods for the use of computers; evaluating, planning and designing hardware or software configurations for specific applications; designing, writing, testing and maintaining computer programs for specific requirements; evaluating, planning and designing Internet, Intranet and multimedia systems.
Occupations in this minor group are classified into the following unit groups:
2511 Systems Analysts
2512 Software Developers
2513 Web and Multimedia Developers
2514 Applications Programmers
2519 Software and Applications Developers and Analysts Not Elsewhere Classified',
            ),
            146 => 
            array (
                'id' => '2511',
                'title' => 'Systems Analysts',
                'description' => 'Systems analysts conduct research, analyse and evaluate client information technology requirements, procedures or problems, and develop and implement proposals, recommendations, and plans to improve current or future information systems.
Tasks include –
(a) consulting with users to formulate document requirements and with management to ensure agreement on systems principles;
(b) identifying and analysing business processes, procedures and work practices;
(c) identifying and evaluating inefficiencies and recommending optimal business practices and system functionality and behaviour;
(d) taking responsibility for deploying functional solutions, such as creating, adopting and implementing system test plans;
(e) developing functional specifications for use by systems developers;
(f) expanding or modifying systems to improve workflow or serve new purposes;
(g) coordinating and linking the computer systems within an organization to increase compatibility.
Examples of the occupations classified here:
▪ Business analyst (IT)
▪ Computer scientist
▪ Information systems analyst
▪ Systems consultant
▪ Systems designer (IT)
Some related occupations classified elsewhere:
▪ Systems administrator (computers) – 2522
▪ Communications analyst (computers) – 2523
▪ Network analyst – 2523',
            ),
            147 => 
            array (
                'id' => '2512',
                'title' => 'Software Developers',
                'description' => 'Software developers research, analyse and evaluate requirements for existing or new software applications and operating systems, and design, develop, test and maintain software solutions to meet these requirements.
Tasks include –
(a) researching, analysing and evaluating requirements for software applications and operating systems;
(b) researching, designing and developing computer software systems;
(c) consulting with engineering staff to evaluate interfaces between hardware and software;
(d) developing and directing software testing and validation procedures;
(e) modifying existing software to correct errors, to adapt it to new hardware or to upgrade interfaces and improve performance;
(f) directing software programming and development of documentation;
(g) assessing, developing, upgrading and documenting maintenance procedures for operating systems, communications environments and applications software;
(h) consulting with customers concerning maintenance of software systems.
Examples of the occupations classified here:
▪ Programmer analyst
▪ Software designer
▪ Software developer
▪ Software engineer
Some related occupations classified elsewhere:
▪ Applications programmers – 2514',
            ),
            148 => 
            array (
                'id' => '2513',
                'title' => 'Web and Multimedia Developers',
                'description' => 'Web and multimedia development professionals combine design and technical knowledge to research, analyse, evaluate, design, program and modify websites and applications that draw together text, graphics, animations, imaging, audio and video displays and other interactive media.
Tasks include –
(a) analysing, designing and developing Internet sites by applying a mixture of artistry and creativity with software programming and scripting languages and interfacing with operating environments;
(b) designing and developing digital animations, imaging, presentations, games, audio and video clips and Internet applications using multimedia software, tools and utilities, interactive graphics and programming languages;
(c) communicating with network specialists regarding web-related issues such as security and hosting websites, to control and enforce Internet and web server security, space allocation, user access, business continuity, website backup and disaster recovery planning;
(d) designing, developing and integrating computer code with other specialized inputs such as image files, audio files and scripting languages, to produce, maintain and support websites;
(e) assisting in analysing, specifying and developing Internet strategies, web-based methodologies and development plans.
Examples of the occupations classified here:
▪ Animation programmer
▪ Computer games programmer
▪ Internet developer
▪ Multimedia programmer
▪ Website architect
▪ Website developer
Some related occupations classified elsewhere:
▪ Website designer – 2166
▪ Webmaster – 3514
▪ Website administrator – 3514
▪ Website technician – 3514',
            ),
            149 => 
            array (
                'id' => '2514',
                'title' => 'Applications Programmers',
                'description' => 'Applications programmers write and maintain programmable code outlined in technical instructions and specifications for software applications and operating systems.
Tasks include –
(a) writing and maintaining program code outlined in instructions and specifications in accordance with quality accredited standards;
(b) revising, repairing or expanding existing programs to increase operating efficiency or adapt to new requirements;
(c) conducting trial runs of programs and software applications to confirm that they will produce the desired information;
(d) compiling and writing documentation of program development;
(e) identifying and communicating technical problems, processes and solutions.
Examples of the occupations classified here:
▪ Applications programmer
Some related occupations classified elsewhere:
▪ Programmer analyst – 2512
▪ Software developer – 2512
▪ Multimedia programmer – 2513',
            ),
            150 => 
            array (
                'id' => '2519',
                'title' => 'Software and Applications Developers and Analysts Not Elsewhere Classified',
                'description' => 'This unit group covers software and applications developers and analysts not classified elsewhere in Minor Group 251: Software and Applications Developers and Analysts. For instance, the group includes those professionals specializing in quality assurance, including software testing.
In such cases tasks would include –
(a) developing and documenting software testing plans;
(b) installing software and hardware and configuring operating system software in preparation for testing;
(c) verifying that programs function according to user requirements and established guidelines;
(d) executing, analysing and documenting results of software application tests and information and telecommunication systems tests;
(e) developing and implementing software and information system testing policies, procedures and scripts.
Examples of the occupations classified here:
▪ Quality assurance analyst (computers)
▪ Software tester
▪ Systems tester',
            ),
            151 => 
            array (
                'id' => '252',
                'title' => 'Database and Network Professionals',
                'description' => 'Database and network professionals design, develop, control, maintain and support the optimal performance and security of information technology systems and infrastructure, including databases, hardware and software, networks and operating systems.
Tasks performed usually include: designing and developing database architecture, data structures,  dictionaries and naming conventions for information systems projects; designing, constructing, modifying, integrating, implementing and testing database management systems; developing and implementing security plans, data administration policy, documentation and standards; maintaining and administering computer networks and related computing environments; analysing, developing, interpreting and evaluating complex system design and architecture specifications, data models and diagrams in the development, configuration and integration of computer systems.
Occupations in this minor group are classified into the following unit groups:
2521 Database Designers and Administrators
2522 Systems Administrators
2523 Computer Network Professionals
2529 Database and Network Professionals Not Elsewhere Classified',
            ),
            152 => 
            array (
                'id' => '2521',
                'title' => 'Database Designers and Administrators',
                'description' => 'Database designers and administrators design, develop, control, maintain and support the optimal performance and security of databases.
Tasks include –
(a) designing and developing database architecture, data structures, tables, dictionaries and naming conventions for information systems projects;
(b) designing, constructing, modifying, integrating, implementing and testing database management systems;
(c) conducting research and providing advice on the selection, application and implementation of database management tools;
(d) developing and implementing data administration policy, documentation, standards and models;
(e) developing policies and procedures for database access and usage and for the backup and recovery of data;
(f) performing the operational establishment and preventive maintenance of backups, recovery procedures, and enforcing security and integrity controls.
Examples of the occupations classified here:
▪ Data administrator
▪ Database administrator
▪ Database analyst
▪ Database architect
Some related occupations classified elsewhere:
▪ Network administrator – 2522
▪ Systems administrator (computers) – 2522
▪ Webmaster – 3514
▪ Website administrator – 3514',
            ),
            153 => 
            array (
                'id' => '2522',
                'title' => 'Systems Administrators',
                'description' => 'Systems administrators develop, control, maintain and support the optimal performance and security of information technology systems.
Tasks include –
(a) maintaining and administering computer networks and related computing environments, including computer hardware, systems software, applications software and all configurations;
(b) recommending changes to improve systems and network configurations, and determining hardware or software requirements related to such changes;
(c) diagnosing hardware and software problems;
(d) performing data backups and disaster recovery operations;
(e) operating master consoles to monitor the performance of computer systems and networks, and to coordinate computer network access and use.
Examples of the occupations classified here:
▪ Network administrator
▪ Systems administrator (computers)
Some related occupations classified elsewhere:
▪ Database administrator – 2521
▪ Network analyst – 2523
▪ Webmaster – 3514
▪ Website administrator –  3514
▪ Website technician – 3514',
            ),
            154 => 
            array (
                'id' => '2523',
                'title' => 'Computer Network Professionals',
                'description' => 'Computer network professionals research, analyse, design, test and recommend strategies for network architecture and development.  They implement, manage, maintain and configure network hardware and software, and monitor, troubleshoot and optimize performance.
Tasks include –
(a) analysing, developing, interpreting and evaluating complex system design and architecture specifications, data models and diagrams in the development, configuration and integration of computer systems;
(b) researching, analysing, evaluating and monitoring network infrastructure to ensure that networks are configured to operate at optimal performance;
(c) assessing and recommending improvements to network operations and integrated hardware, software, communications and operating systems;
(d) providing specialist skills in supporting and troubleshooting network problems and emergencies;
(e) installing, configuring, testing, maintaining and administering new and upgraded networks, software database applications, servers and workstations;
(f) preparing and maintaining procedures and documentation for network inventory, and recording diagnosis and resolution of network faults, enhancements and modifications to networks and maintenance instructions;
(g) monitoring network traffic and activity, capacity and usage to ensure continued integrity and optimal network performance.
Examples of the occupations classified here:
▪ Communications analyst (computers)
▪ Network analyst
Some related occupations classified elsewhere:
▪ Systems analysts – 2511
▪ Network administrator – 2522',
            ),
            155 => 
            array (
                'id' => '2529',
                'title' => 'Database and Network Professionals Not Elsewhere Classified',
                'description' => 'This unit group includes database and network professionals not classified elsewhere in Minor Group 252: Database and Network Professionals.  For instance, the group includes information and communications technology security specialists.
In such cases tasks would include –
(a) developing plans to safeguard computer files against accidental or unauthorized modification, destruction or disclosure and to meet emergency data processing needs;
(b) training users and promoting security awareness to ensure system security and to improve server and network efficiency;
(c) conferring with users to discuss issues such as computer data access needs, security violations and programming changes;
(d) monitoring current reports of computer viruses to determine when to update virus protection systems;
(e) modifying computer security files to incorporate new software, correct errors or change individual access status;
(f) monitoring use of data files and regulate access to safeguard information in computer files;
(g) performing risk assessments and executing tests of data processing system to ensure functioning of data processing activities and security measures;
(h) encrypting data transmissions and erecting firewalls to conceal confidential information as it is being transmitted and to keep out tainted digital transfers.
Examples of the occupations classified here:
▪ Data miner
▪ Digital forensic specialist
▪ Security specialist (ICT)',
            ),
            156 => 
            array (
                'id' => '26',
                'title' => 'Legal, Social and Cultural Professionals',
                'description' => 'Legal, social and cultural professionals conduct research; improve or develop concepts,  theories and operational methods; or apply knowledge relating to the law,  storage and retrieval of information and artefacts, psychology, social welfare, politics, economics, history, religion, languages, sociology, other social sciences, and arts and entertainment. Competent performance in most occupations in this sub-major group requires skills at the fourth ISCO skill level.
Tasks performed by workers in this sub-major group usually include: conducting research on legal problems; drafting laws and regulations; advising clients on legal cases; pleading and conducting cases in a court of law; presiding over judicial proceedings in a court of law; developing and maintaining library and gallery collections of archives; conducting research, improving or developing concepts, theories and operational methods or applying knowledge relating to the field of social sciences; conceiving, creating and performing in literary and artistic works; interpreting and communicating news, ideas, impressions and facts.
Occupations in this sub-major group are classified into the following minor groups:
261 Legal Professionals
262 Librarians, Archivists and Curators
263 Social and Religious Professionals
264 Authors, Journalists and Linguists
265 Creative and Performing Artists',
            ),
            157 => 
            array (
                'id' => '261',
                'title' => 'Legal Professionals',
                'description' => 'Legal professionals conduct research on legal problems, advise clients on legal aspects of problems, plead cases or conduct prosecutions in courts of law, preside over judicial proceedings in courts of law and draft laws and regulations.
Tasks performed usually include: giving clients legal advice, undertaking legal business on clients\' behalf and conducting litigation when necessary, or presiding over judicial proceedings and pronouncing judgement in courts of law. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
2611 Lawyers
2612 Judges
2619 Legal Professionals Not Elsewhere Classified',
            ),
            158 => 
            array (
                'id' => '2611',
                'title' => 'Lawyers',
                'description' => 'Lawyers give clients legal advice on a wide variety of subjects, draw up legal documents, represent clients before administrative boards or tribunals and plead  cases or conduct prosecutions in courts of justice, or instruct barristers to plead in higher courts of justice.
Tasks include –
(a) giving clients legal advice on a wide variety of subjects and undertaking legal business on clients\' behalf;
(b) researching legal principles, statutes and previous court decisions related to specific cases;
(c) gathering evidence to formulate a defence or to initiate legal actions, by such means as interviewing clients and witnesses to ascertain the facts of a case;
(d) evaluating findings and developing strategies and arguments in preparation for presentation of cases;
(e) pleading clients\' cases before courts of law, tribunals and administrative boards or instructing barristers to plead in higher courts of justice;
(f) accepting briefs and pleading in the higher court;
(g) acting as prosecutor on behalf of the government;
(h) negotiating settlements in matters which involve legal disputes;
(i) drafting legislation and preparing government regulations based on existing laws;
(j) drawing up legal documents such as contracts, real estate transactions and wills and preparing statements of legal opinions.
Examples of the occupations classified here:
▪ Attorney
▪ Barrister
▪ Lawyer
▪ Prosecutor
▪ Solicitor
Some related occupations classified elsewhere:
▪ Notary – 2619
▪ Conveyancing clerk – 3411
▪ Law clerk – 3411',
            ),
            159 => 
            array (
                'id' => '2612',
                'title' => 'Judges',
                'description' => 'Judges preside over civil and criminal proceedings in courts of law.
Tasks include –
(a) presiding over trials and hearings;
(b) interpreting and enforcing rules of procedure and making rulings regarding the admissibility of evidence;
(c) determining the rights and obligations of the parties involved, and in cases tried by jury;
(d) instructing the jury on points of law that are applicable to the case;
(e) weighing and considering evidence in non-jury trials and deciding legal guilt or innocence or degree of liability of the accused or defendant;
(f) passing sentence on persons convicted in criminal cases, determining damages or other appropriate remedy in civil cases and issuing court orders;
(g) researching legal issues and writing opinions on the issues.
Examples of the occupations classified here:
▪ Chief justice
▪ Judge
▪ Magistrate
Some related occupations classified elsewhere:
▪ Court clerk – 3411
▪ Justice of the peace – 3411',
            ),
            160 => 
            array (
                'id' => '2619',
                'title' => 'Legal Professionals Not Elsewhere Classified',
                'description' => 'This unit group covers legal professionals not classified elsewhere in Minor Group 261: Legal Professionals. For instance, the group includes those who perform legal functions other than pleading or prosecuting cases or presiding over judicial proceedings.
In such cases tasks would include –
(a) giving advice on legal aspects of various personal, business and administrative problems;
(b) drawing up legal documents and contracts;
(c) arranging property transfers;
(d) determining, by inquest, the causes of any death not obviously due to natural causes.
Examples of the occupations classified here:
▪ Coroner
▪ Jurist (except lawyer or judge)
▪ Notary',
            ),
            161 => 
            array (
                'id' => '262',
                'title' => 'Librarians, Archivists and Curators',
                'description' => 'Librarians, archivists and curators develop and maintain the collections of archives, libraries, museums, art galleries and similar establishments.
Tasks performed usually include: appraising or developing and organizing the contents of archives and artefacts of historical, cultural and artistic interest, and ensuring their safekeeping and preservation; organizing the collections of and exhibitions at museums, art galleries and similar establishments; developing and maintaining the systematic collection of recorded and published material and making it available to users in libraries and related institutions; preparing scholarly papers and reports; conducting research.
Occupations in this minor group are classified into the following unit groups:
2621 Archivists and Curators
2622 Librarians and Related Information Professionals',
            ),
            162 => 
            array (
                'id' => '2621',
                'title' => 'Archivists and Curators',
                'description' => 'Archivists and curators collect, appraise and ensure the safekeeping and preservation of the contents of archives, artefacts and records of historical, cultural, administrative and artistic interest, and of art and other objects. They plan, devise and implement systems for the safekeeping of records and historically valuable documents.
Tasks include –
(a) evaluating and preserving records for administrative, historical, legal, evidential and other purposes;
(b) directing or carrying out the preparation of indexes, bibliographies, microfilm copies and other reference aids to the collected material and making them available to users;
(c) researching the origin, distribution and use of materials and objects of cultural and historical interest;
(d) organizing, developing and maintaining collections of artistic, cultural, scientific or historically significant items;
(e) directing or undertaking classification and cataloguing of museum and art gallery collections and organizing exhibitions;
(f) researching into, appraising, organizing and preserving historically significant and valuable documents such as government papers, private papers, photographs, maps, manuscripts and audiovisual materials;
(g) preparing scholarly papers and reports;
(h) planning and implementing the computerized management of archives and electronic records;
(i) organizing exhibitions at museums and art galleries, publicizing exhibits and arranging special displays for general, specialized or educational interest;
(j) appraising and acquiring archival materials to build and develop an archival collection for research purposes.
Examples of the occupations classified here:
▪ Archivist
▪ Art gallery curator
▪ Museum curator
▪ Records manager',
            ),
            163 => 
            array (
                'id' => '2622',
                'title' => 'Librarians and Related Information Professionals',
                'description' => 'Librarians and related information professionals collect, select, develop, organize and maintain library collections and other information repositories; organize and control other library services and provide information for users.
Tasks include –
(a) organizing, developing and maintaining a systematic collection of books, periodicals and other printed, audiovisually and digitally recorded material;
(b) selecting and recommending acquisitions of books and other printed or audiovisually and digitally recorded material;
(c) organizing, classifying and cataloguing library material;
(d) managing library borrowing and interlibrary loan facilities and information networks;
(e) retrieving material and providing information to business and other users based on the collection itself or on library and information-network systems;
(f) conducting research and analysing or modifying library and information services in accordance with changes in users\' needs;
(g) devising and implementing schemes and conceptual models for the storage, organization, classification and retrieval of information;
(h) preparing scholarly papers and reports;
(i) performing manual, online and interactive media reference searches, making interlibrary loans and performing other functions to assist users in accessing library materials.
Examples of the occupations classified here:
▪ Bibliographer
▪ Cataloguer
▪ Librarian',
            ),
            164 => 
            array (
                'id' => '263',
                'title' => 'Social and Religious Professionals',
                'description' => 'Social and religious professionals conduct research; improve or develop concepts, theories and operational methods; apply knowledge relating to philosophy, politics, economics, sociology, anthropology, history, psychology and other social sciences; or provide social services to meet the needs of individuals and families in a community.
Tasks performed usually include: formulating and applying solutions to present or projected economic, political or social problems; researching into and analysing past events and activities and tracing the origin and evolution of the human race; studying mental processes and behaviour of individuals and groups; providing social services; preparing scholarly papers and reports.  Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
2631 Economists
2632 Sociologists, Anthropologists and Related Professionals
2633 Philosophers, Historians and Political Scientists
2634 Psychologists
2635 Social Work and Counselling Professionals
2636 Religious Professionals',
            ),
            165 => 
            array (
                'id' => '2631',
                'title' => 'Economists',
                'description' => 'Economists conduct research, monitor data, analyse information and prepare reports and plans to resolve economic and business problems and develop models to analyse, explain and forecast economic behaviour and patterns. They provide advice to business, interest groups and governments to formulate solutions to present or projected economic and business problems.
Tasks include –
(a) forecasting changes in the economic environment for short-term budgeting, long-term planning and investment evaluation;
(b) formulating recommendations, policies and plans for the economy, corporate strategies and investment, and undertaking feasibility studies for projects;
(c) monitoring  economic data to assess the effectiveness, and advise on the appropriateness, of monetary and fiscal policies;
(d) forecasting production and consumption of specific products and services based on records of past production and consumption and general economic and industry-specific conditions;
(e) preparing forecasts of income and expenditure, interest rates and exchange rates;
(f) analysing factors that determine labour force participation, employment, wages, unemployment and other labour market outcomes;
(g) applying mathematical formulae and statistical techniques to test economic theories and devise solutions to economic problems;
(h) compiling, analysing and interpreting economic data using economic theory and a variety of statistical and other techniques;
(i) evaluating the outcome of political decisions concerning public economy and finances, and advising on economic policy and possible courses of action in the light of past, present and projected economic factors and trends;
(j) preparing scholarly papers and reports;
(k) examining problems related to the economic activities of individual companies;
(l) conducting research on market conditions in local, regional or national areas to set sales and pricing levels for goods and services, to assess market potential and future trends and to develop business strategies.
Examples of the occupations classified here:
▪ Econometrician
▪ Economic adviser
▪ Economic analyst
▪ Economist
▪ Labour economist
Some related occupations classified elsewhere:
▪ Statistician – 2120',
            ),
            166 => 
            array (
                'id' => '2632',
                'title' => 'Sociologists, Anthropologists and Related Professionals',
                'description' => 'Sociologists, anthropologists and related professionals investigate and describe the structure, origin and evolution of societies and the interdependence between environmental conditions and human activities. They provide advice on the practical application of their findings in the formulation of economic and social policies.
Tasks include –
(a) conducting research on the origin, development, structure, social patterns, organizations and interrelationships of human society;
(b) tracing the origin and evolution of humanity through the study of changing characteristics and cultural and social institutions;
(c) tracing the development of humanity through the material remains of its past, such as dwellings, temples, tools, pottery, coins, weapons or sculpture;
(d) studying physical and climatic aspects of areas and regions, and correlating these findings with economic, social and cultural activities;
(e) developing theories, models and methods to interpret and describe social phenomena;
(f) evaluating the outcome of political decisions concerning social policy;
(g) analysing and evaluating social data;
(h) advising on the practical application of findings in the formulation of economic and social policies for population groups and regions, and for the development of markets;
(i) preparing scholarly papers and reports.
Examples of the occupations classified here:
▪ Anthropologist
▪ Archaeologist
▪ Criminologist
▪ Ethnologist
▪ Geographer
▪ Sociologist',
            ),
            167 => 
            array (
                'id' => '2633',
                'title' => 'Philosophers, Historians and Political Scientists',
                'description' => 'Philosophers, historians and political scientists conduct research into the nature of human experience and existence, phases or aspects of human history, and political structures, movements and behaviour. They document and report on findings to inform and guide political and individual actions
Tasks include –
(a) researching, including by reasoning, into the general causes, principles and meanings of the world, human actions, experience and existence, and interpreting and developing philosophical concepts and theories;
(b) consulting and comparing primary sources such as original or contemporary records of past events, and secondary sources such as archaeological or anthropological findings;
(c) extracting relevant material, checking its authenticity, and researching into and describing the history of a particular period, country or region, or a particular facet – for example economic, social or political – of its history;
(d) conducting research in such fields as political philosophy, or past and present theory and practice of political systems, institutions or behaviour;
(e) observing contemporary political institutions and opinions, collecting data on them from various sources, including interviews with government and political party officials and other relevant persons;
(f) developing theories, models and methods to interpret and describe the nature of human experience and historical and political events and behaviour;
(g) presenting findings and conclusions for publication or use by government, political parties or other organizations and interested persons;
(h) preparing scholarly papers and reports.
Examples of the occupations classified here:
▪ Genealogist
▪ Historian
▪ Philosopher
▪ Political scientist
Some related occupations classified elsewhere:
▪ Political adviser – 2422',
            ),
            168 => 
            array (
                'id' => '2634',
                'title' => 'Psychologists',
                'description' => 'Psychologists research into and study the mental processes and behaviour of human beings as individuals or in groups, and apply this knowledge to promote personal, social, educational or occupational adjustment and development.
Tasks include –
(a) planning and carrying out tests to measure mental, physical and other characteristics such as intelligence, abilities, aptitudes, potentialities, etc., interpreting and evaluating results, and providing advice;
(b) analysing the effect of heredity, social, occupational and other factors on individual thought and behaviour;
(c) conducting counselling or therapeutic interviews with individuals and groups and providing follow-up services;
(d) maintaining required contacts, such as those with family members, educational authorities or employers, and recommending possible solutions to, and treatment of, problems;
(e) studying psychological factors in the diagnosis, treatment and prevention of mental illnesses and emotional or personality disorders, and conferring with related professionals;
(f) preparing scholarly papers and reports;
(g) formulating achievement, diagnostic and predictive tests for use by teachers in planning methods and content of instruction;
(h) conducting surveys and research studies on job design, work groups, morale, motivation, supervision and management;
(i) developing theories, models and methods to interpret and describe human behaviour.
Examples of the occupations classified here:
▪ Clinical psychologist
▪ Educational psychologist
▪ Organizational psychologist
▪ Psychotherapist
▪ Sports psychologist
Some related occupations classified elsewhere:
▪ Psychiatrist – 2212',
            ),
            169 => 
            array (
                'id' => '2635',
                'title' => 'Social Work and Counselling Professionals',
                'description' => 'Social work and counselling professionals provide advice and guidance to individuals, families, groups, communities and organizations in response to social and personal difficulties.  They assist clients to develop skills and access resources and support services needed to respond to issues arising from unemployment, poverty, disability, addiction, criminal and delinquent behaviour, marital and other problems.
Tasks include –
(a) interviewing clients individually, in families or in groups, to assess their situation and problems and determine the types of services required;
(b) analysing the client\'s situation and presenting alternative approaches to resolving problems;
(c) compiling case records or reports for courts and other legal proceedings;
(d) providing counselling, therapy and mediation services, and facilitating group sessions to assist clients to develop skills and insights needed to deal with and resolve their social and personal problems;
(e) planning and implementing programmes of assistance for clients, including crisis intervention and referral to agencies that provide financial assistance, legal aid, housing, medical treatment and other services;
(f) investigating cases of abuse or neglect and taking action to protect children and other persons at risk;
(g) working with offenders during and after sentence to help them to integrate into the community and to change attitudes and behaviour in order to reduce further offending;
(h) providing advice to prison governors and to probation and parole review boards that helps determine whether, and under what conditions, an offender should be incarcerated, released from prison or undergo alternative correctional measures;
(i) acting as advocates for client groups in the community and lobbying  for solutions to problems affecting them;
(j) developing prevention and intervention programmes to meet community needs;
(k) maintaining contact with other social service agencies, educational institutions and health care providers involved with clients to provide information and obtain feedback on clients\' overall situation and progress.
Examples of the occupations classified here:
▪ Addictions counsellor
▪ Bereavement counsellor
▪ Child and youth counsellor
▪ District social welfare officer
▪ Family counsellor
▪ Marriage counsellor
▪ Parole officer
▪ Probation officer
▪ Sexual assault counsellor
▪ Social worker
▪ Women\'s welfare organizer
Some related occupations classified elsewhere:
▪ Psychologists – 2634
▪ Welfare support worker – 3412',
            ),
            170 => 
            array (
                'id' => '2636',
                'title' => 'Religious Professionals',
                'description' => 'Religious professionals function as perpetuators of sacred traditions, practices and beliefs. They conduct religious services, celebrate or administer the rites of a religious faith or denomination, provide spiritual and moral guidance and perform other functions associated with the practice of a religion.
Tasks include –
(a) perpetuating sacred traditions, practices and beliefs;
(b) conducting religious services, rites and ceremonies;
(c) undertaking various administrative and social duties, including participating in committees and meetings of religious organizations;
(d) providing spiritual and moral guidance in accordance with the religion professed;
(e) propagating religious doctrines in own country or abroad;
(f) preparing and presenting religious sermons;
(g) developing and directing study courses and religious education programmes;
(h) counselling individuals regarding interpersonal, health, financial and religious problems;
(i) scheduling and participating in special events such as camps, conferences, seminars and retreats.
Examples of the occupations classified here:
▪ Bonze
▪ Imam
▪ Minister of religion
▪ Poojari
▪ Priest
▪ Rabbi
Some related occupations classified elsewhere:
▪ Lay preacher – 3413
▪ Monk – 3413
▪ Nun – 3413
Note
Members of religious orders whose work involves performing the tasks of other occupations, for example as teachers, nurses or welfare support workers, should be classified according to the main tasks and duties performed in the job.',
            ),
            171 => 
            array (
                'id' => '264',
                'title' => 'Authors, Journalists and Linguists',
                'description' => 'Authors, journalists and linguists conceive and create literary works; interpret and communicate news and public affairs through the media; and translate or interpret from one language into another.
Tasks performed usually include: writing literary works; appraising merits of literary and other works of art; collecting information about current affairs and writing about them; researching, investigating, interpreting and communicating news and public affairs through newspapers, television, radio and other media; translating written material from one language to another; simultaneously translating from one language to another.
Occupations in this minor group are classified into the following unit groups:
2641 Authors and Related Writers
2642 Journalists
2643 Translators, Interpreters and Other Linguists',
            ),
            172 => 
            array (
                'id' => '2641',
                'title' => 'Authors and Related Writers',
            'description' => 'Authors and related writers plan, research and write books, scripts, storyboards, plays, essays, speeches, manuals, specifications and other non-journalistic articles (excluding material for newspapers, magazines and other periodicals) for publication or presentation.
Tasks include –
(a) conceiving, writing and editing novels, plays, scripts, poetry and other material for publication or presentation;
(b) conducting research to establish factual content and to obtain other necessary information;
(c) writing scripts and continuities and preparing programmes for stage, film, radio and television productions;
(d) analysing material, such as specifications, notes and drawings, and creating manuals, instructions for use, user guides and other documents to explain clearly and concisely the installation, operation and maintenance of software, electronic, mechanical and other equipment;
(e) writing brochures, handbooks and similar technical publications;
(f) selecting material for publication, checking style, grammar and accuracy of content, arranging for any necessary revisions and checking proof copies before printing.
Examples of the occupations classified here:
▪ Author
▪ Book editor
▪ Essayist
▪ Indexer
▪ Interactive media writer
▪ Novelist
▪ Playwright
▪ Poet
▪ Script writer
▪ Speech writer
▪ Technical communicator
▪ Technical writer
▪ Writer
Some related occupations classified elsewhere:
▪ Advertising copy writer – 2431
▪ Public relations copy writer – 2432
▪ Journalist – 2642
▪ Newspaper editor – 2642',
            ),
            173 => 
            array (
                'id' => '2642',
                'title' => 'Journalists',
                'description' => 'Journalists research, investigate, interpret and communicate news and public affairs through newspapers, television, radio and other media.
Tasks include –
(a) collecting local, national and international news through interviews, investigation and observation, attending public events, seeking out records, reviewing written work, attending film and stage performances;
(b) collecting, reporting and commenting on news and current affairs for publication in newspapers and periodicals, or for broadcasting by radio, television or webcast media;
(c) receiving, analysing and verifying news and other copy for accuracy;
(d) interviewing politicians and other public figures at press conferences and on other occasions, including individual interviews recorded for radio, television or webcast media;
(e) researching and reporting on developments in specialized fields such as medicine, science and technology;
(f) writing editorials and commentaries on topics of current interest to stimulate public interest and express the views of a publication or broadcasting station;
(g) writing critical reviews of literary, musical and other artistic works based on knowledge, judgement and experience for newspapers, television, radio and other media;
(h) selecting material for publication, checking style, grammar, accuracy and legality of content and arranging for any necessary revisions;
(i) liaising with production staff in checking final proof copies immediately prior to printing;
(j) selecting, assembling and preparing publicity material about business or other organizations for issue through press, radio, television and other media.
Examples of the occupations classified here:
▪ Journalist
▪ Newspaper editor
▪ Newspaper reporter
▪ Sports writer
▪ Sub editor
▪ TV/radio news producer
▪ TV/radio news reporter,
Some related occupations classified elsewhere:
▪ Public relations officer – 2432
▪ Author – 2641
▪ Book editor – 2641
▪ Photo journalist –3431
▪ Camera operator – 3521',
            ),
            174 => 
            array (
                'id' => '2643',
                'title' => 'Translators, Interpreters and Other Linguists',
                'description' => 'Translators, interpreters and other linguists translate or interpret from one language into another and study the origin, development and structure of languages.
Tasks include –
(a) studying relationships between ancient parent languages and modern language groups, tracing the origin and evolution of words, grammar and language forms, and presenting findings;
(b) advising on or preparing language classification systems, grammars, dictionaries and similar materials;
(c) translating from one language into another and ensuring that the correct meaning of the original is retained, that legal, technical or scientific works are correctly rendered, and that the phraseology and terminology of the spirit and style of literary works are conveyed as far as possible;
(d) developing methods for the use of computers and other instruments to improve productivity and quality of translation;
(e) interpreting from a spoken or a signed language into another spoken or signed language, in particular at conferences, meetings and similar occasions, and ensuring that the correct meaning and, as far as possible, the spirit of the original are transmitted;
(f) revising and correcting translated material.
Examples of the occupations classified here:
▪ Interpreter
▪ Lexicographer
▪ Philologist
▪ Sign language interpreter
▪ Subtitler
▪ Translator
▪ Translator-reviser
Some related occupations classified elsewhere:
▪ Author – 2641
▪ Book editor – 2641
▪ Journalist – 2642',
            ),
            175 => 
            array (
                'id' => '265',
                'title' => 'Creative and Performing Artists',
                'description' => 'Creative and performing artists communicate ideas, impressions and facts in a wide range of media to achieve particular effects; interpret a composition such as a musical score or a script to perform or direct the performance; and host the presentation of such performance and other media events.
Tasks performed usually include: conceiving and creating visual art forms; conceiving and writing original music; devising, directing, rehearsing and performing in music, dance, theatrical and film productions; assuming creative, financial and organizational responsibilities in the production of television programmes, films, and stage presentations; studying script, play or book and preparing and rehearsing interpretation; selecting and introducing music, videos and other entertainment material for broadcast and making commercial and public service announcements.
Occupations in this minor group are classified into the following unit groups:
2651 Visual Artists
2652 Musicians, Singers and Composers
2653 Dancers and Choreographers
2654 Film, Stage and Related Directors and Producers
2655 Actors
2656 Announcers on Radio, Television and Other Media
2659 Creative and Performing Artists Not Elsewhere Classified',
            ),
            176 => 
            array (
                'id' => '2651',
                'title' => 'Visual Artists',
                'description' => 'Visual artists create and execute works of art by sculpting, painting, drawing, creating cartoons, engraving or using other techniques.
Tasks include –
(a) conceiving and developing ideas, designs and styles for paintings, drawings and sculptures;
(b) arranging objects, positioning models, and selecting landscapes and other visual forms according to chosen subject matter;
(c) selecting artistic media, method and materials;
(d) creating representational or abstract three-dimensional or relief forms by shaping, carving and working and combining materials such as wood, stone, clay, metal, ice or paper;
(e) creating representational or abstract drawings and paintings using pencils, ink, chalk, oil paints, water colours or through the application of other techniques;
(f) creating drawings and engraving or etching them on metal, wood or other materials;
(g) creating cartoons to depict persons and events, often in caricature;
(h) restoring damaged, soiled and faded paintings and other art objects.
Examples of the occupations classified here:
▪ Cartoonist
▪ Ceramic artist
▪ Illustrator
▪ Picture restorer
▪ Portrait painter
▪ Sculptor
Some related occupations classified elsewhere:
▪ Industrial designer – 2163
▪ Graphic designer – 2166
▪ Painting teacher (private tuition) – 2355
▪ Potter – 7314
▪ Decorative painter – 7316',
            ),
            177 => 
            array (
                'id' => '2652',
                'title' => 'Musicians, Singers and Composers',
                'description' => 'Musicians, singers and composers write, arrange, conduct and perform musical compositions.
Tasks include –
(a) creating melodic, harmonic and rhythmic structures to express ideas and emotions in musical form;
(b) translating ideas and concepts into standard musical signs and symbols for reproduction and performance;
(c) adapting or arranging music for particular instrumental or vocal groups, instruments or occasions;
(d) conducting instrumental or vocal groups;
(e) selecting music for performances and assigning instrumental parts to musicians;
(f) playing one or more musical instruments as a soloist or as a member of an orchestra or a musical group;
(g) singing as a soloist or as a member of a vocal group or other band;
(h) practising and rehearsing to maintain a high standard of performance.
Examples of the occupations classified here:
▪ Band leader
▪ Composer
▪ Instrumentalist
▪ Music conductor
▪ Night club musician
▪ Night club singer
▪ Orchestrator
▪ Singer
▪ Street musician
▪ Street singer',
            ),
            178 => 
            array (
                'id' => '2653',
                'title' => 'Dancers and Choreographers',
                'description' => 'Dancers and choreographers conceive and create or perform dances.
Tasks include –
(a) conceiving and creating dances, which often convey a story, theme, idea or mood, by a pattern of steps, movements and gestures;
(b) performing dances as a soloist, with a partner or as a member of a dancing group before live audiences or for film, television or other visual media;
(c) training, exercising and attending dance classes to maintain the required levels of ability and fitness;
(d) directing and participating in rehearsals to practice dance steps and techniques required for a performance;
(e) auditioning for dance roles or for membership in dance companies;
(f) coordinating the production music with the music directors.
Examples of the occupations classified here:
▪ Choreographer
▪ Ballet dancer
▪ Night-club dancer
▪ Street dancer
Some related occupations classified elsewhere:
▪ Dance teacher – 2355',
            ),
            179 => 
            array (
                'id' => '2654',
                'title' => 'Film, Stage and Related Directors and Producers',
                'description' => 'Film, stage and related directors and producers oversee and control the technical and artistic aspects of motion pictures, television or radio productions and stage shows.
Tasks include –
(a) choosing writers, studying scripts to determine artistic interpretation, and instructing actors on acting methods;
(b) directing all aspects of dramatic productions on stage, television, radio or in motion pictures, including choice of actors, and final decisions concerning costumes, set designs, sound or lighting effects;
(c) planning, organizing and controlling the various stages and scheduling involved in the production of presentations, motion pictures, television shows and radio programmes;
(d) engaging and supervising all technical personnel, and determining the treatment, scope and scheduling of production;
(e) maintaining production archives and negotiating royalties;
(f) creating, planning or writing scripts for recording, videotaping and editing programmes;
(g) supervising the positioning of scenery, props and lighting and sound equipment.
Examples of the occupations classified here:
▪ Documentary director
▪ Film editor
▪ Motion picture director
▪ Photography director
▪ Stage director
▪ Technical director
▪ Technical television or radio director
▪ Theatre producer
Some related occupations classified elsewhere:
▪ TV/radio news producer  – 2642
▪ Broadcasting technician – 3521
▪ Lighting technician – 3521
▪ Sound technician – 3521
▪ Video technician – 3521
▪ Stage manager – 3435',
            ),
            180 => 
            array (
                'id' => '2655',
                'title' => 'Actors',
                'description' => 'Actors portray roles in motion pictures, television or radio productions and stage shows.
Tasks include –
(a) learning lines and cues and playing parts in dramatic productions on stage, commercials, television, radio or in motion pictures;
(b) assuming characters created by a playwright or author and communicating this to an audience;
(c) telling stories or reading literary works aloud to educate or entertain listeners;
(d) attending auditions and casting calls in order to audition for roles;
(e) preparing for performances through rehearsals under the instruction and guidance of production directors;
(f) reading scripts and undertaking research to gain understanding of parts, themes and characteristics;
(g) acting parts and portraying roles as developed in rehearsals in film, television, radio and stage productions.
Examples of the occupations classified here:
▪ Actor
▪ Mime artist
▪ Storyteller
Some related occupations classified elsewhere:
▪ Stunt artist – 3435
▪ Walker-on – 3435',
            ),
            181 => 
            array (
                'id' => '2656',
                'title' => 'Announcers on Radio, Television and Other Media',
                'description' => 'Announcers on radio, television and other media read news bulletins, conduct interviews, and make other announcements or introductions on radio, television, and in theatres and other establishments or media.
Tasks include –
(a) reading news bulletins and making other announcements on radio or television;
(b) introducing performing artists or persons being interviewed, and making related announcements on radio, television, or in theatres, night clubs and other establishments;
(c) interviewing persons in public, especially on radio and television;
(d) studying background information in order to prepare for programmes or interviews;
(e) commenting on music and other matters, such as weather or traffic conditions.
Examples of the occupations classified here:
▪ Radio announcer
▪ Television announcer
▪ News anchor
▪ Sports announcer
▪ Talk show host/hostess
▪ Traffic reporter
▪ Weather reporter
Some related occupations classified elsewhere:
▪ Journalist – 2642',
            ),
            182 => 
            array (
                'id' => '2659',
                'title' => 'Creative and Performing Artists Not Elsewhere Classified',
                'description' => 'This unit group covers all creative and performing artists not classified elsewhere in Minor Group 265: Creative and Performing Artists. For instance, the group includes clowns, magicians, acrobats and other performing artists.
In such cases tasks would include –
(a) performing amusing antics and telling funny stories;
(b) performing tricks of illusion and sleight of hand, and feats of hypnotism;
(c) performing difficult and spectacular acrobatics, and gymnastic or juggling feats;
(d) training and performing with animals.
Examples of the occupations classified here:
▪ Acrobat
▪ Aerialist
▪ Clown
▪ Hypnotist
▪ Magician
▪ Puppeteer
▪ Stand-up comedian
▪ Ventriloquist',
            ),
            183 => 
            array (
                'id' => '3',
                'title' => 'Technicians and Associate Professionals',
                'description' => 'Technicians and associate professionals perform technical and related tasks connected with research and the application of scientific or artistic concepts and operational methods, and government or business regulations.  Competent performance in most occupations in this major group requires skills at the third ISCO skill level.
Tasks performed by technicians and associate professionals usually include: undertaking and carrying out technical work connected with research and the application of concepts and operational methods in the fields of physical sciences including engineering and technology, life sciences including the medical profession, and social sciences and humanities; initiating and carrying out various technical  services related to trade, finance and administration including administration of government laws and regulations, and to social work; providing technical support for the arts and entertainment; participating in sporting activities; executing some religious tasks. Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
31 Science and Engineering Associate Professionals
32 Health Associate Professionals
33 Business and Administration Associate Professionals
34 Legal, Social, Cultural and Related Associate Professionals
35 Information and Communications Technicians',
            ),
            184 => 
            array (
                'id' => '31',
                'title' => 'Science and Engineering Associate Professionals',
                'description' => 'Science and engineering associate professionals perform technical tasks connected with research and operational methods in science and engineering. They supervise and control technical and operational aspects of mining, manufacturing, construction and other engineering operations, and operate technical equipment including aircraft and ships. Competent performance in most occupations in this sub-major group requires skills at the third ISCO skill level.
Tasks performed by workers in this sub-major group usually include: setting up, monitoring and operating instruments and equipment, conducting and monitoring experiments and tests of systems; collecting and testing samples; recording observations and analysing data; preparing, revising and interpreting technical drawings and diagrams; coordinating, supervising, controlling and scheduling the activities of other workers; operating and monitoring switchboards, computerized control systems, and multi-function process control machinery; performing technical functions to ensure safe and efficient movement and operations in ships, aircraft and other equipment.
Occupations in this sub-major group are classified into the following minor groups:
311 Physical and Engineering Science Technicians
312 Mining, Manufacturing and Construction Supervisors
313 Process Control Technicians
314 Life Science Technicians and Related Associate Professionals
315 Ship and Aircraft Controllers and Technicians',
            ),
            185 => 
            array (
                'id' => '311',
                'title' => 'Physical and Engineering Science Technicians',
                'description' => 'Physical and engineering science technicians perform technical tasks to aid in research on and the practical application of concepts, principles and operational methods particular to physical sciences including such areas as engineering, technical drawing or economic efficiency of production processes.
Tasks performed usually include: undertaking and carrying out technical work related to chemistry, physics, geology, meteorology, astronomy, engineering or technical drawing; setting up, operating, and maintaining laboratory instruments and equipment; monitoring experiments, making observations, and calculating and recording results; preparing materials for experimentation; conducting tests of systems; collecting and testing samples; recording observations and analysing data; preparing, revising and interpreting technical drawings, wiring diagrams, circuit board assembly diagrams or layout drawings.
Occupations in this minor group are classified into the following unit groups:
3111 Chemical and Physical Science Technicians
3112 Civil Engineering Technicians
3113 Electrical Engineering Technicians
3114 Electronics Engineering Technicians
3115 Mechanical Engineering Technicians
3116 Chemical Engineering Technicians
3117 Mining and Metallurgical Technicians
3118 Draughtspersons
3119 Physical and Engineering Science Technicians Not Elsewhere Classified',
            ),
            186 => 
            array (
                'id' => '3111',
                'title' => 'Chemical and Physical Science Technicians',
                'description' => 'Chemical and physical science technicians perform technical tasks to aid in research in chemistry, physics, geology, geophysics, meteorology and astronomy, and in the development of industrial, medical, military and other practical applications of research results.
Tasks include –
(a) collecting samples and preparing materials and equipment for experiments, tests and analyses;
(b) carrying out routine laboratory tests and performing a variety of technical support functions to assist chemical and physical scientists in research, development, analysis and testing;
(c) controlling the quality and quantity of laboratory supplies by testing samples and monitoring usage and preparing detailed estimates of quantities and costs of materials and labour required for projects, according to the specifications given;
(d) setting up, operating, and maintaining laboratory instruments and equipment, monitoring experiments, making observations, and calculating and recording results;
(e) preparing materials for experimentation such as freezing and slicing specimens and mixing chemicals;
(f) collecting and testing earth and water samples, recording observations and analysing data in support of geologists or geophysicists.
Examples of the occupations classified here:
▪ Chemistry technician
▪ Geology technician
▪ Meteorology technician
▪ Physics technician
Some related occupations classified elsewhere:
▪ Chemical engineering technician – 3116
▪ Chemical process technician – 3133
▪ Life science technician – 3141',
            ),
            187 => 
            array (
                'id' => '3112',
                'title' => 'Civil Engineering Technicians',
                'description' => 'Civil engineering technicians perform technical tasks in civil engineering research and in the design, construction, operation, maintenance and repair of buildings and other structures such as water supply and wastewater treatment systems, bridges, roads, dams and airports.
Tasks include –
(a) performing or assisting with field and laboratory tests of soils and construction materials;
(b) providing technical assistance connected with the construction of buildings and other structures, and with surveys or the preparation of survey reports;
(c) ensuring compliance with design specifications, relevant legislation and regulations, and maintenance of desired standards of materials and work;
(d) applying technical knowledge of building and civil engineering principles and practices in order to identify and solve problems arising;
(e) assisting with the preparation of detailed estimates of quantities and costs of materials and labour required for projects, according to the specifications given;
(f) organizing maintenance and repairs;
(g) inspecting buildings and structures during and after construction to ensure that they comply with building, grading, zoning and safety laws and approved plans, specifications and standards, as well as with other rules concerning quality and safety of buildings;
(h) inspecting industrial plant, hotels, cinemas and other buildings and structures to detect fire hazards and advise on how they can be removed;
(i) advising on the installation of fire detectors and sprinkler systems and the use of materials in the construction of buildings, and means of transportation to reduce risk of fire and extent of damage and danger if fire occurs.
Examples of the occupations classified here:
▪ Building inspector
▪ Building surveyor
▪ Civil engineering technician
▪ Clerk of works
▪ Fire inspector
▪ Fire prevention specialist
▪ Geotechnical technician
▪ Surveying technician
Some related occupations classified elsewhere:
▪ Quantity surveyor – 2149
▪ Marine surveyor – 3115
▪ Fire investigator – 3119',
            ),
            188 => 
            array (
                'id' => '3113',
                'title' => 'Electrical Engineering Technicians',
                'description' => 'Electrical engineering technicians perform technical tasks to aid in electrical engineering research and in the design, manufacture, assembly, construction, operation, maintenance and repair of electrical equipment, facilities and distribution systems.
Tasks include –
(a) providing technical assistance in research on and development of electrical equipment and facilities, or testing prototypes;
(b) designing and preparing blueprints of electrical installations and circuitry according to the specifications given;
(c) preparing detailed estimates of quantities and costs of materials and labour required for manufacture and installation, according to the specifications given;
(d) monitoring technical aspects of the manufacture, installation, utilization, maintenance and repair of electrical systems and equipment to ensure satisfactory performance and compliance with specifications and regulations;
(e) planning installation methods, checking completed installations for safety and controls or undertaking the initial running of the new electrical equipment or systems;
(f) assembling, installing, testing, calibrating, modifying and repairing electrical equipment and installations to conform with regulations and safety requirements.
Examples of the occupations classified here:
▪ Electrical engineering technician
▪ Electric power transmission engineering technician
Some related occupations classified elsewhere:
▪ Electronics engineering technician – 3114
▪ Power production plant operator – 3131
▪ Electrical mechanic – 7412',
            ),
            189 => 
            array (
                'id' => '3114',
                'title' => 'Electronics Engineering Technicians',
                'description' => 'Electronics engineering technicians perform technical tasks to aid in electronic research and in the design, manufacture, assembly, construction, operation, maintenance and repair of electronic equipment.
Tasks include –
(a) providing technical assistance in research and development of electronic equipment, or testing prototypes;
(b) designing and preparing blueprints of electronic circuitry according to the specifications given;
(c) preparing detailed estimates of quantities and costs of materials and labour required for the manufacture and installation of electronic equipment, according to the specifications given;
(d) monitoring technical aspects of the manufacture, utilization, maintenance and repair of electronic equipment to ensure satisfactory performance and ensure compliance with specifications and regulations;
(e) assisting in the design, development, installation, operation and maintenance of electronic systems;
(f) planning installation methods, checking completed installations for safety and controls or undertaking the initial running of the new electronic equipment or system;
(g) conducting tests of electronic systems, collecting and analysing data, and assembling circuitry in support of electronics engineers.
Examples of the occupations classified here:
▪ Electronics engineering technician
Some related occupations classified elsewhere:
▪ Electrical engineering technician – 3113
▪ Telecommunications engineering technician – 3522
▪ Electronics mechanic – 7421
▪ Electronic equipment assembler – 8212',
            ),
            190 => 
            array (
                'id' => '3115',
                'title' => 'Mechanical Engineering Technicians',
                'description' => 'Mechanical engineering technicians perform technical tasks to aid in mechanical engineering research and in the design, manufacture, assembly, construction, operation, maintenance and repair of machines, components and mechanical equipment.
Tasks include –
(a) providing technical assistance in research on and development of machines and mechanical installations, facilities and components, or testing prototypes;
(b) designing and preparing layouts of machines and mechanical installations, facilities and components, according to the specifications given;
(c) preparing detailed estimates of quantities and costs of materials and labour required for manufacture and installation, according to the specifications given;
(d) monitoring technical aspects of manufacture, utilization, maintenance and repair of machines and mechanical installations, facilities and components to ensure satisfactory performance and compliance with specifications and regulations;
(e) developing and monitoring the implementation of safety standards and procedures for marine survey work in relation to ships\' hulls, equipment and cargoes;
(f) assembling and installing new and modified mechanical assemblies, components, machine tools and controls, and hydraulic power systems;
(g) conducting tests of mechanical systems, collecting and analysing data, and assembling and installing mechanical assemblies in support of mechanical engineers;
(h) ensuring that mechanical engineering designs and finished work are within specifications, regulations and contract provisions.
Examples of the occupations classified here:
▪ Aeronautics engineering technician
▪ Marine engineering technician
▪ Marine surveyor
▪ Mechanical engineering estimator
▪ Mechanical engineering technician
Some related occupations classified elsewhere:
▪ Industrial machinery mechanic – 7233
▪ Mechanical machinery assembler – 8211',
            ),
            191 => 
            array (
                'id' => '3116',
                'title' => 'Chemical Engineering Technicians',
                'description' => 'Chemical engineering technicians perform technical tasks to aid in chemical engineering research and in the design, manufacture, construction, operation, maintenance and repair of chemical plant.
Tasks include –
(a) assisting in research on and development of industrial chemical processes, plant and equipment, or testing prototypes;
(b) designing and preparing layouts of chemical plants according to the specifications given;
(c) preparing detailed estimates of quantities and costs of materials and labour required for manufacture and installation, according to the specifications given;
(d) monitoring technical aspects of the construction, installation, operation, maintenance and repair of chemical plants to ensure satisfactory performance and compliance with specifications and regulations;
(e) conducting chemical and physical laboratory tests to assist scientists and engineers in making qualitative and quantitative analyses of solids, liquids, and gaseous materials.
Examples of the occupations classified here:
▪ Chemical engineering estimator
▪ Chemical engineering technician
Some related occupations classified elsewhere:
▪ Chemical technician – 3111
▪ Chemical process technician – 3133',
            ),
            192 => 
            array (
                'id' => '3117',
                'title' => 'Mining and Metallurgical Technicians',
                'description' => 'Mining and metallurgical technicians perform technical tasks to assist in research and experiments related to metallurgy, in improving methods of extracting solid minerals, oil and gas, and in the design, construction, operation, maintenance and repair of mines and mine installations, of systems for transporting and storing oil and natural gas, and for extraction of metals from ores.
Tasks include –
(a) providing technical assistance to aid in research on and development of processes to determine the properties of metals and new alloys;
(b) providing technical assistance in geological and topographical surveys and in the design and layout of oil, natural gas and mineral ore extraction and transportation systems, and processing and refining plants for minerals and metals;
(c) preparing detailed estimates of quantities and costs of materials and labour required for mineral, oil and natural gas exploration, extraction, processing and transport projects;
(d) monitoring technical, regulatory and safety aspects of the construction, installation, operation, maintenance and repair of mineral ore, oil and natural gas exploration, extraction, transport and storage installations and mineral processing plants;
(e) helping plan and design mines, mine shafts, tunnels and underground first-aid facilities;
(f) collecting and preparing rock, mineral and metal samples, performing laboratory tests to determine properties, analysing and reporting test results and maintaining testing equipment;
(g) using microscopes, electromagnetic irradiation machines, spectrometers, spectrographs, densitometers and tension testing machines;
(h) assisting scientists in the use of electrical, sonic, or nuclear measuring instruments in both laboratory and production activities to obtain data indicating potential sources of metallic ore, gas, or petroleum.
Examples of the occupations classified here:
▪ Metallurgical technician
▪ Mines inspector
▪ Mining engineering technician
Some related occupations classified elsewhere:
▪ Geology technician – 3111
▪ Miner – 8111
▪ Mining plant operator – 8111
▪ Quarrier – 8111',
            ),
            193 => 
            array (
                'id' => '3118',
                'title' => 'Draughtspersons',
                'description' => 'Draughtspersons prepare technical drawings, maps and illustrations from sketches, measurements and other data, and copy final drawings and paintings onto printing plates.
Tasks include –
(a) preparing and revising working drawings from sketches and specifications prepared by engineers and designers for the manufacture, installation and erection of machinery and equipment or for the construction, modification, maintenance and repair of buildings, dams, bridges, roads and other architectural and civil engineering projects;
(b) operating computer-aided design and draughting equipment to create, modify and generate hard-copy and digital representations of working drawings;
(c) operating digitizing table or similar equipment to transfer hard-copy representation of working drawings, maps and other curves to digital form;
(d) preparing and revising illustrations for reference works, brochures and technical manuals dealing with the assembly, installation, operation, maintenance and repair of machinery and other equipment and goods;
(e) copying drawings and paintings onto stone or metal plates for printing;
(f) preparing wiring diagrams, circuit board assembly diagrams and layout drawings used for manufacture, installation and repair of electrical equipment in factories, power plants and buildings;
(g) creating detailed working diagrams of machinery and mechanical devices, including dimensions, fastening methods and other engineering information;
(h) arranging for completed drawings to be reproduced for use as working drawings.
Examples of the occupations classified here:
▪ Draughtsperson
▪ Technical illustrator
Some related occupations classified elsewhere:
▪ Cartographer – 2165
▪ Surveyor – 2165',
            ),
            194 => 
            array (
                'id' => '3119',
                'title' => 'Physical and Engineering Science Technicians Not Elsewhere Classified',
                'description' => 'This unit group covers physical and engineering science technicians not classified elsewhere in Minor Group 311: Physical and Engineering Science Technicians. For instance, the unit group includes those who assist scientists and engineers engaged in developing procedures or conducting research on safety, biomedical, environmental or industrial and production engineering.
In such cases tasks would include –
(a) collecting data and providing technical assistance regarding:  efficient, safe and economic utilization of personnel, material and equipment;  methods of work and sequence of operations and supervision of their implementation; and efficient layout of plant or establishment;
(b) aiding in the identification of potential hazards and introducing safety procedures and devices;
(c) modifying and testing equipment and devices used in the prevention, control and remediation of environmental pollution, in site remediation and land reclamation;
(d) assisting in the development of environmental pollution remediation devices under the direction of an engineer;
(e) assisting engineers in testing and designing robotics equipment.
Examples of the occupations classified here:
▪ Engineering technician (production)
▪ Fire investigator
▪ Forensic science technician
▪ Quantity surveying technician
▪ Robotics technician
▪ Time and motion study technician
Some related occupations classified elsewhere:
▪ Production engineer - 2141
▪ Time and motion study engineer - 2141
▪ Quantity surveyor - 2149
▪ Aeronautics engineering technician - 3115',
            ),
            195 => 
            array (
                'id' => '312',
                'title' => 'Mining, Manufacturing and Construction Supervisors',
                'description' => 'Mining, manufacturing and construction supervisors coordinate, supervise, control and schedule the activities of workers in manufacturing, mining and construction operations.
Tasks performed usually include: overseeing, supervising and coordinating the activities of tradespersons, process control technicians, machine operators, assemblers,  labourers and other workers;  organizing and planning daily work;  preparing cost estimates, records and reports; identifying shortages of staff or supplies; ensuring safety of workers; instructing and training new staff.
Occupations in this minor group are classified into the following unit groups:
3121 Mining Supervisors
3122 Manufacturing Supervisors
3123 Construction Supervisors
Notes
Jobs classified in Minor Group 312:  Mining, Manufacturing and Construction Supervisors mainly involve planning, organizing, coordinating, controlling and directing the work done by others.  Most of the time workers employed in these jobs do not perform the tasks performed by those they supervise, although they frequently have extensive experience in performance of these tasks.  Those who carry out the tasks and duties of the jobs they supervise, in addition to controlling the technical quality of the work done by others, should be classified with the workers they supervise. These supervisory jobs often are called “foremen/women” or “team leaders”.
In distinguishing between managers classified in Major Group 1: Managers, and supervisors, classified in other major groups, it should be noted that both managers and supervisors may plan, organize, coordinate, control and direct the work done by others.  In addition, managers usually have responsibility for and make decisions about: the overall strategic and operational direction of a business or organizational unit (for example about the kinds, quantity and quality of goods to be produced); budgets (how much money is to be spent and for what purposes); and the selection, appointment and dismissal of staff.  Supervisors may provide advice and assistance to managers on these matters, especially in relation to staff selection and dismissal, but do not have authority to make decisions.
It should be noted that it is not a necessary condition that managers have responsibility for all three of strategic and operational direction, budgets and staff selection and dismissal. The degree of autonomy they exercise may also vary. The critical difference is that supervisors are responsible only for the supervision of the activities of other workers, whereas managers have overall responsibility for the operations of an organizational unit.',
            ),
            196 => 
            array (
                'id' => '3121',
                'title' => 'Mining Supervisors',
                'description' => 'Mining supervisors oversee mining and quarrying operations and directly supervise and coordinate the activities of miners working in underground and surface mines and quarries.
Tasks include –
(a) supervising and coordinating the activities of workers who extract minerals and other natural deposits from the earth, and who operate underground conveyances or heavy equipment in surface mines and quarries;
(b) establishing methods to meet work schedules and recommending measures to mining managers to improve productivity;
(c) working with managerial and technical personnel, other departments and contractors to resolve operational problems and coordinate activities;
(d) providing reports and other information to mining managers about all aspects of mining or quarrying operations;
(e) determining staffing and material needs for the mine or quarry.
Examples of the occupations classified here:
▪ Mine deputy
▪ Mine supervisor
▪ Mine undermanager
▪ Quarry supervisor
Some related occupations classified elsewhere:
▪ Mine manager – 1322
▪ Mine inspector – 3117
▪ Miner – 8111
▪ Quarrier – 8111',
            ),
            197 => 
            array (
                'id' => '3122',
                'title' => 'Manufacturing Supervisors',
                'description' => 'Manufacturing supervisors coordinate and supervise the activities of process control technicians, machine operators, assemblers, and other manufacturing labourers.
Tasks include –
(a) coordinating and supervising the activities of process control technicians, machine operators, assemblers and other manufacturing labourers;
(b) organizing and planning the daily work with regard to plans, economy, staff and environment;
(c) preparing cost estimates, records and reports;
(d) identifying shortage of staff or components;
(e) ensuring safety of workers;
(f) instructing and training new staff.
Examples of the occupations classified here:
▪ Area coordinator (manufacturing)
▪ Assembly supervisor
▪ Finishing supervisor
▪ Production supervisor (manufacturing)
Some related occupations classified elsewhere:
▪ Manufacturing manager – 1321',
            ),
            198 => 
            array (
                'id' => '3123',
                'title' => 'Construction Supervisors',
                'description' => 'Construction supervisors coordinate, supervise and schedule the activities of workers engaged in the construction and repair of buildings and structures.
Tasks include –
(a) reading specifications to determine construction requirements and planning procedures;
(b) organizing and coordinating the material and human resources required to complete jobs;
(c) examining and inspecting work progress;
(d) examining equipment and construction sites to ensure that health and safety requirements are met;
(e) supervising construction sites and coordinating work with other construction projects;
(f) supervising the activities of building trades workers, labourers and other construction workers.
Examples of the occupations classified here:
▪ Building construction supervisor
▪ Site manager (construction)
Some related occupations classified elsewhere:
▪ Construction project manager – 1323
▪ Project builder – 1323
▪ Clerk of works – 3112',
            ),
            199 => 
            array (
                'id' => '313',
                'title' => 'Process Control Technicians',
                'description' => 'Process control technicians operate and monitor switchboards, computerized control systems and multi-function process control machinery; and maintain processing units in electrical power generation and distribution, wastewater, sewage treatment and waste disposal plants, chemical, petroleum and natural gas refineries, in metal processing and other multiple process operations.
Tasks performed usually include: operating electronic or computerized control panel from a central control room to monitor and optimize processes; controlling process start-up and shut-down; operating and monitoring switchboards and related equipment; monitoring and inspecting equipment and systems to detect malfunctions; taking readings from charts, meters and gauges at established intervals; troubleshooting and take corrective action as necessary;  maintaining records, logs and reports; communicating with other personnel to assess equipment operating status; cleaning and maintaining equipment; supervising plant and machine operators, assemblers and other workers.
Occupations in this minor group are classified into the following unit groups:
3131 Power Production Plant Operators
3132 Incinerator and Water Treatment Plant Operators
3133 Chemical Processing Plant Controllers
3134 Petroleum and Natural Gas Refining Plant Operators
3135 Metal Production Process Controllers
3139 Process Control Technicians Not Elsewhere Classified
Notes
In some jobs, the work of process control technicians may be combined with supervision of staff in other occupations, such as plant and machine operators and assemblers.  These jobs should be classified in Minor Group 313: Process Control Technicians, unless supervision of other workers is the clearly predominant element of the work and the process control activities are relatively simple.  For example, a chemical processing plant controller who operates and monitors chemical processing units and equipment from a central control room, and also supervises the activities of chemical products plant and machine operators, should be classified in Unit Group 3133: Chemical Processing Plant Controllers. A supervisor of assemblers, however, who is also responsible for start-up and shut-down of a partially automated assembly line is classified in Unit Group  3122:  Manufacturing Supervisors.
Operators of single process plant and machines, or of machinery that does not involve automated control of multiple processes, are not included in Minor Group 313: Process Control Technicians.  Such occupations are mainly classified in Major Group 8: Plant and machine operators, and assemblers.
All mining plant operators are classified in Unit Group 8111:  Miners and Quarriers',
            ),
            200 => 
            array (
                'id' => '3131',
                'title' => 'Power Production Plant Operators',
                'description' => 'Power production plant operators operate, monitor and maintain switchboards and related equipment in electrical control centres which control the production and distribution of electrical or other power in transmission networks. The equipment operated includes reactors, turbines, generators and other auxiliary equipment in electrical power-generating stations.
Tasks include –
(a) operating, monitoring and inspecting various types of energy-generating power plants;
(b) operating and controlling power-generating systems and equipment including boilers, turbines, generators, condensers and reactors in hydro, thermal, coal, oil, natural gas and nuclear power plants to generate and distribute electrical power;
(c) controlling start-up and shut-down of power plant equipment, controlling switching operations, regulating water levels and communicating with systems operators to regulate and coordinate transmission loads, frequency and line voltages;
(d) taking readings from charts, meters and gauges at established intervals, troubleshooting and performing corrective action as necessary;
(e) completing and maintaining station records, logs and reports, and communicating with other plant personnel to assess equipment operating status;
(f) cleaning and maintaining equipment such as generators, boilers, turbines, pumps and compressors in order to prevent equipment failure or deterioration.
Examples of the occupations classified here:
▪ Distribution control operator
▪ Electric power plant operator
▪ Generating station operator
▪ Hydroelectric power plant operator
▪ Nuclear power plant operator
▪ Power system operator
▪ Solar power plant operator
Some related occupations classified elsewhere:
▪ Steam engine and boiler operators – 8182',
            ),
            201 => 
            array (
                'id' => '3132',
                'title' => 'Incinerator and Water Treatment Plant Operators',
                'description' => 'Incinerator and water treatment plant operators monitor and operate computerized control systems and related equipment in solid and liquid waste treatment plants to regulate the treatment and disposal of sewage and wastes, and in water filtration and treatment plants to regulate the treatment and distribution of water.
Tasks include –
(a) operating and monitoring computerized control systems, machinery and related equipment in wastewater treatment, sewage treatment, and liquid waste plants to regulate flow, treatment and disposal of sewage and wastes, and in water filtration and treatment plants to regulate the treatment and distribution of water for human consumption and for later disposal into natural water systems;
(b) controlling the operation of multiple-hearth incinerator furnaces and related equipment to burn sludge and solid waste in waste treatment plants;
(c) inspecting equipment and monitoring operating conditions, meters, filters, chlorinators and gauges in central control rooms to determine load requirements, to verify that flows, pressures and temperatures are within specification, and to detect malfunctions;
(d) monitoring and adjusting controls of auxiliary equipment such as exhaust emissions, scrubbers and incinerator heat recovery units;
(e) collecting and testing water and sewage samples for chemical and bacterial content, using test equipment and colour analysis standards;
(f) analysing test results to make adjustments to plant equipment and systems to disinfect and deodorize water and other liquids;
(g) performing security and safety checks in plant and on grounds;
(h) completing and maintaining plant logs and reports.
Examples of the occupations classified here:
▪ Incinerator operator
▪ Liquid waste process operator
▪ Pumping-station operator
▪ Sewage plant operator
▪ Wastewater operator
▪ Water treatment plant operator',
            ),
            202 => 
            array (
                'id' => '3133',
                'title' => 'Chemical Processing Plant Controllers',
                'description' => 'Chemical processing plant controllers operate and monitor chemical plants and related multi-function process control machinery, and adjust and maintain processing units and equipment which distil, filter, separate, heat or refine chemicals.
Tasks include –
(a) operating electronic or computerized control panels from a central control room to monitor and optimize physical and chemical processes for several processing units;
(b) adjusting equipment, valves, pumps, controls and process equipment;
(c) controlling the preparation, measuring and feeding of raw materials and processing agents such as catalysts and filtering media into plant;
(d) controlling process start-up and shut-down, troubleshooting and monitoring outside process equipment;
(e) verifying equipment for malfunctions, carrying out routine operating tests and arranging for maintenance;
(f) analysing sample products, performing tests, recording data and writing production logs.
Examples of the occupations classified here:
▪ Chemical filtering and separating equipment operator
▪ Chemical heat treating plant operator
▪ Chemical process technician
▪ Chemical still and reactor operator
Some related occupations classified elsewhere:
▪ Petroleum and natural gas refining plant operator – 3134
▪ Chemical products plant and machine operator – 8131',
            ),
            203 => 
            array (
                'id' => '3134',
                'title' => 'Petroleum and Natural Gas Refining Plant Operators',
                'description' => 'Petroleum and natural gas refining plant operators operate and monitor plants and adjust and maintain processing units and equipment which refine, distil and treat petroleum, petroleum-based products and by-products, or natural gas.
Tasks include –
(a) operating electronic or computerized control panels from a central control room to monitor and optimize physical and chemical processes for several processing units;
(b) adjusting equipment, valves, pumps, controls and process equipment;
(c) controlling process start-up and shut-down, troubleshooting and monitoring outside process equipment;
(d) verifying equipment for malfunctions, testing well pipes for leaks and fractures and arranging for maintenance;
(e) analysing sample products, performing tests, recording data and writing production logs.
Examples of the occupations classified here:
▪ Blender operator (petroleum and natural gas refining )
▪ Gas plant operator
▪ Paraffin plant operator
▪ Petroleum process operator
▪ Refinery process technician
▪ Still operator (petroleum and natural gas refining)
Some related occupations classified elsewhere:
▪ Chemical processing plant controller – 3133
▪ Chemical products plant and machine operator – 8131',
            ),
            204 => 
            array (
                'id' => '3135',
                'title' => 'Metal Production Process Controllers',
                'description' => 'Metal production process controllers operate and monitor multi-function process control machinery and equipment to control the processing of metal converting and refining furnaces, metal-rolling mills, metal heat-treating or metal-extrusion plant.
Tasks include –
(a) coordinating and monitoring the operation of a particular aspect of metal processing production through control panels, computer terminals or other control systems, usually from a central control room;
(b) operating multi-function central process control machinery to grind, separate, filter, melt, roast, treat, refine or otherwise process metals;
(c) observing computer printouts, video monitors and gauges to verify specified processing conditions and to make necessary adjustments;
(d) coordinating and supervising production crew such as machine and process operators, assistants and helpers;
(e) starting up and shutting down the production system in cases of emergency or as required by schedule;
(f) providing and organizing training for members of production crews;
(g) maintaining shift logs of production and other data and preparing production and other reports.
Examples of the occupations classified here:
▪ Blast furnace operator
▪ Central control caster
▪ Rolling mill control operator
Some related occupations classified elsewhere:
▪ Ladle pourer – 8121
▪ Steel roller – 8121
▪ Metal finishing machine operator – 8122',
            ),
            205 => 
            array (
                'id' => '3139',
                'title' => 'Process Control Technicians Not Elsewhere Classified',
                'description' => 'This unit group covers process control technicians not classified elsewhere in Minor Group 313: Process Control Technicians.  For instance, the unit group includes those who operate multiple process control equipment in manufacturing assembly lines and paper and pulp production.
Examples of the occupations classified here:
▪ Automated assembly line operator
▪ Industrial robot controller
▪ Panel board operator (pulp and paper)
▪ Paper pulp refinery operator
▪ Pulping control operator
▪ Pulping technician
Note
All mining plant operators are classified in Unit Group 8111:  Miners and Quarriers.',
            ),
            206 => 
            array (
                'id' => '314',
                'title' => 'Life Science Technicians and Related Associate Professionals',
                'description' => 'Life science technicians and related associate professionals perform a variety of technical tasks to support life science professionals with their research, development, management, conservation and protection work, in areas such as biology, botany, zoology, biotechnology and biochemistry, and to agriculture, fisheries and forestry.
Tasks performed usually include: conducting tests, experiments, laboratory analyses, field research and surveys to collect information by using accepted scientific methods; keeping records; assisting in analysing data and preparing reports; operating and maintaining equipment.
Occupations in this minor group are classified into the following unit groups:
3141 Life Science Technicians (excluding Medical)
3142 Agricultural Technicians
3143 Forestry Technicians',
            ),
            207 => 
            array (
                'id' => '3141',
            'title' => 'Life Science Technicians (excluding Medical)',
            'description' => 'Life science technicians (excluding medical) provide technical support to life science professionals undertaking research, analysis and testing of living organisms, and development and application of products and processes resulting from research in areas such as natural resource management, environmental protection, plant and animal biology, microbiology, and cell and molecular biology.
Tasks include –
(a) assisting in designing, setting up and conducting experiments;
(b) setting up, calibrating, operating and maintaining laboratory instruments and equipment;
(c) collecting and preparing specimens and samples, chemical solutions and slides and growing cultures for use in experiments;
(d) performing routine field and laboratory tests;
(e) monitoring experiments to ensure adherence to correct laboratory quality control procedures and health and safety guidelines;
(f) making observations of tests and analysing, calculating, recording and reporting test results using appropriate scientific methods;
(g) preserving, classifying and cataloguing specimens and samples;
(h) keeping detailed logs of worked performed;
(i) using computers to develop models and analyse data;
(j) using complex and high-powered equipment to perform work;
(k) participating in the research, development and manufacture of products and processes;
(l) ordering and stocking laboratory supplies;
(m) maintaining relevant databases.
Examples of the occupations classified here:
▪ Bacteriology technician
▪ Biochemistry technician
▪ Herbarium technician
▪ Pharmacology technician
▪ Serology technician
▪ Tissue culture technician
▪ Zoology technician
Some related occupations classified elsewhere:
▪ Forensic science technician – 3119
▪ Medical laboratory technician – 3212
▪ Pathology laboratory technician – 3212
▪ Pharmaceutical technician – 3213',
            ),
            208 => 
            array (
                'id' => '3142',
                'title' => 'Agricultural Technicians',
                'description' => 'Agricultural technicians perform tests and experiments, and provide technical and scientific support to agricultural scientists, farmers and farm managers.
Tasks include –
(a) preparing materials and equipment for experiments, tests and analyses;
(b) collecting and preparing specimens such as soils, plant or animal cells, tissues or parts of animal organs for experiments, tests and analyses;
(c) assisting with and performing experiments, tests and analyses applying methods and techniques such as microscopy, histochemistry, chromatography, electrophoresis and spectroscopy;
(d) identifying pathogenic micro-organisms and insects, parasites, fungi and weeds harmful to crops and livestock, and assisting in devising methods of control;
(e) analysing produce to set and maintain standards of quality;
(f) conducting or supervising operational programmes such as fish hatchery, greenhouse and livestock production programmes;
(g) analysing samples of seeds for quality, purity and germination rating;
(h) collecting data and estimating quantities and costs of materials and labour required for projects;
(i) organizing maintenance and repairs of research equipment.
Examples of the occupations classified here:
▪ Dairy technician
▪ Field crop technician
▪ Herd tester
▪ Horticultural technician
▪ Poultry technician
Some related occupations classified elsewhere:
▪ Artificial inseminator – 3240
▪ Veterinary technician – 3240',
            ),
            209 => 
            array (
                'id' => '3143',
                'title' => 'Forestry Technicians',
                'description' => 'Forestry technicians perform technical and supervisory functions in support of forestry research and forest management, harvesting, resource conservation and environmental protection.
Tasks include –
(a) conducting forest inventories, surveys and field measurements following accepted scientific and operational procedures;
(b) assisting in and performing technical functions in the preparation of forest management and harvest plans using photogrammetric and mapping techniques and computerized information systems;
(c) assisting in planning and supervision of construction of access routes and forest roads;
(d) implementing, supervising and performing technical functions in silvicultural operations involving site preparation, planting, and tending of tree crops;
(e) coordinating activities such as timber scaling, forest fire suppression, disease or insect control or pre-commercial thinning of forest stands;
(f) supervising and performing technical functions in forest harvesting operations;
(g) ensuring adherence to regulations and policies concerning environmental protection, resource utilization, fire safety and accident prevention;
(h) supervising forest tree nursery operations;
(i) providing technical support to forestry research programmes in areas such as tree improvement, seed orchard operations, insect and disease surveys or experimental forestry and forest engineering research;
(j) preparing forest cultivation and cutting plans.
Examples of the occupations classified here:
▪ Forestry technician
▪ Silviculture technician',
            ),
            210 => 
            array (
                'id' => '315',
                'title' => 'Ship and Aircraft Controllers and Technicians',
                'description' => 'Ship and aircraft controllers and technicians command and navigate ships and aircraft; perform technical functions to ensure safe and efficient movement and operations; and develop electrical, electromechanical and computerized air control systems.
Tasks performed usually include: controlling the operation of mechanical, electrical and electronic equipment on board ship or on aircraft, commanding and navigating ships or aircraft, directing the movements of ships or aircraft and developing electrical, electromechanical and computerized air control systems.
Occupations in this minor group are classified into the following unit groups:
3151 Ships\' Engineers
3152 Ships\' Deck Officers and Pilots
3153 Aircraft Pilots and Related Associate Professionals
3154 Air Traffic Controllers
3155 Air Traffic Safety Electronics Technicians',
            ),
            211 => 
            array (
                'id' => '3151',
                'title' => 'Ships\' Engineers',
                'description' => 'Ships\' engineers control and participate in the operation, maintenance and repair of mechanical, electrical and electronic equipment and machinery on board ship, or perform related supporting functions on shore.
Tasks include –
(a) controlling and participating in the operation, maintenance and repair of mechanical, electrical and electronic equipment and machinery on board ship;
(b) ordering fuel and other engine-room department stores and maintaining records of operations;
(c) performing technical supervision of the installation, maintenance and repair of ships\' machinery and equipment to ensure compliance with specifications and regulations;
(d) inspecting and conducting maintenance and emergency repairs to engines, machinery and auxiliary equipment;
(e) standing engine room watch, monitoring and noting performance of engines, machinery and auxiliary equipment.
Examples of the occupations classified here:
▪ Ships\' engineer
Some related occupations classified elsewhere:
▪ Marine engineer – 2144',
            ),
            212 => 
            array (
                'id' => '3152',
                'title' => 'Ships\' Deck Officers and Pilots',
                'description' => 'Ships\' deck officers and pilots command and navigate ships and similar vessels, and perform related functions on shore.
Tasks include –
(a) commanding and navigating ship or similar vessel at sea or on inland waterways;
(b) controlling and participating in deck and bridge watch activities;
(c) navigating vessels into and out of ports and through channels, straits and other waters where special knowledge is required;
(d) ensuring safe loading and unloading of cargo and observance of safety regulations and procedures by crew and passengers;
(e) performing technical supervision of maintenance and repair of ships to ensure compliance with specifications and regulations;
(f) applying knowledge of principles and practices relating to ships\' operation and navigation in order to identify and solve problems arising in the course of their work;
(g) ordering ships\' stores, recruiting crew as required and maintaining records of operations;
(h) transmitting and receiving routine and emergency information with shore stations and other ships.
Examples of the occupations classified here:
▪ Pilot (ship)
▪ Ship\'s captain
▪ Skipper (yacht)
Some related occupations classified elsewhere:
▪ Coastal fishery skipper – 6222
▪ Trawler skipper – 6223
▪ Sailor – 8350',
            ),
            213 => 
            array (
                'id' => '3153',
                'title' => 'Aircraft Pilots and Related Associate Professionals',
                'description' => 'Aircraft pilots and related associate professionals control the operation of mechanical, electrical and electronic equipment, in order to navigate aircraft for transporting passengers, mail and freight and perform related pre-flight and in-flight tasks.
Tasks include –
(a) flying and navigating aircraft in accordance with established control and operating procedures;
(b) preparing and submitting flight plans or examining standard flight plans;
(c) controlling the operation of mechanical, electrical and electronic equipment and ensuring that all instruments and controls work properly;
(d) applying knowledge of principles and practices of flying in order to identify and solve problems arising in the course of their work;
(e) examining maintenance records and conducting inspections to ensure that aircraft are mechanically sound, maintenance has been performed and that all equipment is operational;
(f) signing necessary certificates and maintaining official records of flight;
(g) obtaining briefings and clearances before flights and maintaining contact with air traffic or flight control during flight.
Examples of the occupations classified here:
▪ Aerial crop sprayer
▪ Flight engineer
▪ Flying instructor
▪ Navigator (flight)
▪ Pilot (aircraft)',
            ),
            214 => 
            array (
                'id' => '3154',
                'title' => 'Air Traffic Controllers',
                'description' => 'Air traffic controllers direct aircraft movements in airspace and on the ground, using radio, radar and lighting systems, and provide information relevant to the operation of aircraft.
Tasks include –
(a) directing and controlling aircraft approaching and leaving airport and their movement on the ground;
(b) directing and controlling aircraft operating in designated airspace sectors;
(c) examining and approving flight plans;
(d) informing flight crew and operations staff about weather conditions, operational facilities, flight plans and air traffic;
(e) applying knowledge of principles and practices of air traffic control in order to identify and solve problems arising in the course of their work;
(f) initiating and organizing emergency, search and rescue services and procedures;
(g) directing activities of all aircraft and service vehicles on or near airport runways;
(h) maintaining radio and telephone contact with adjacent control towers, terminal control units and other control centres, and coordinating the movement of aircraft into adjoining areas.
Examples of the occupations classified here:
▪ Air traffic controller',
            ),
            215 => 
            array (
                'id' => '3155',
                'title' => 'Air Traffic Safety Electronics Technicians',
                'description' => 'Air traffic safety electronics technicians perform technical tasks concerning the design, installation, management, operation, maintenance and repair of air traffic control and air navigation systems.
Tasks include –
(a) carrying out technical duties related to the development of electronic and computerized air navigation systems and equipment, and testing prototypes;
(b) providing technical help in the design and layout of specific interface circuitry of air navigation and aircraft detection tracking systems;
(c) preparing and contributing to the preparation of cost estimates and technical and training specifications for air traffic control and safety equipment;
(d) providing or assisting with the technical supervision of construction, installation and operation of ground-based air navigation equipment and its maintenance and repair to ensure that standards and specifications are met;
(e) applying the knowledge and skills of air traffic safety engineering principles and practices in order to identify and solve problems arising in the course of their work;
(f) developing, modifying and debugging system software;
(g) modifying existing ground-based air navigation systems and equipment to adapt them to new air traffic control procedures,  in order to improve capability, reliability and integrity, or to facilitate air traffic control procedures and airspace designation;
(h) controlling, monitoring and certifying communication navigation and surveillance air traffic management equipment, and calibrating the ground-based air navigation system to ensure maximum accuracy and safety of flight, take-off and landing operations;
(i) providing technical training and supervising other workers.
Example of the occupations classified here:
▪ Air traffic safety engineer
▪ Air traffic safety technician
Some related occupations classified elsewhere:
▪ Aeronautical engineer – 2144
▪ Electronics engineer – 2152
▪ Aeromechanic – 7232
▪ Aircraft maintenance engineer (avionics) – 7421
▪ Avionics technician – 7421',
            ),
            216 => 
            array (
                'id' => '32',
                'title' => 'Health Associate Professionals',
                'description' => 'Health associate professionals perform technical and practical tasks to support diagnosis and treatment of illness, disease, injuries and impairments in humans and animals, and to support implementation of health care, treatment and referral plans usually established by medical, veterinary, nursing and other health professionals. Competent performance in most occupations in this sub-major group requires skills at the third ISCO skill level.
Tasks performed by workers in the sub-major group usually include: testing and operating medical imaging equipment and administering radiation therapy; performing clinical tests on specimens of bodily fluids and tissues; preparing medications and other pharmaceutical compounds under the guidance of pharmacists; designing, fitting, servicing and repairing medical and dental devices and appliances;  providing nursing and personal care and midwifery support services; using herbal and other therapies based on theories, beliefs and experiences originating in specific cultures.
Occupations in this sub-major group are classified into the following minor groups:
321 Medical and Pharmaceutical Technicians
322 Nursing and Midwifery Associate Professionals
323 Traditional and Complementary Medicine Associate Professionals
324 Veterinary Technicians and Assistants
325 Other Health Associate Professionals',
            ),
            217 => 
            array (
                'id' => '321',
                'title' => 'Medical and Pharmaceutical Technicians',
                'description' => 'Medical and pharmaceutical technicians perform technical tasks to assist in diagnosis and treatment of illness, disease, injuries and impairments.
Tasks performed usually include: testing and operating radiographic, ultrasound and other medical imaging equipment; administering radiopharmaceuticals or radiation to patients to detect or treat diseases; performing clinical tests on specimens of bodily fluids and tissues; preparing medications and other pharmaceutical compounds under the guidance of pharmacists; designing, fitting, servicing and repairing medical and dental devices and appliances.
Occupations in this minor group are classified into the following unit groups:
3211 Medical Imaging and Therapeutic Equipment Technicians
3212 Medical and Pathology Laboratory Technicians
3213 Pharmaceutical Technicians and Assistants
3214 Medical and Dental Prosthetic Technicians',
            ),
            218 => 
            array (
                'id' => '3211',
                'title' => 'Medical Imaging and Therapeutic Equipment Technicians',
                'description' => 'Medical imaging and therapeutic equipment technicians test and operate radiographic, ultrasound and other medical imaging equipment to produce images of body structures for the diagnosis and treatment of injury, disease and other impairments. They may administer radiation treatments to patients under the supervision of a radiologist or other health professional.
Tasks include –
(a) operating or overseeing operation of radiologic, ultrasound and magnetic imaging equipment to produce images of the body for diagnostic purposes;
(b) explaining procedures, observing and positioning patients, and using protection devices to ensure safety and comfort during examination, scan or treatment;
(c) positioning imaging or treatment equipment, monitoring video displays, and adjusting settings and controls according to technical specifications;
(d) reviewing and evaluating developed X-rays, videotape, or computer-generated information to determine if images are satisfactory for diagnostic purposes, and recording results of procedures;
(e) monitoring patients\' conditions and reactions, reporting abnormal signs to a medical practitioner;
(f) measuring and recording radiation dosage or radiopharmaceuticals received and used for patients, following prescriptions issued by a medical practitioner;
(g) administering, detecting and mapping radiopharmaceuticals or radiation in patients\' bodies, using radioisotope, camera or other equipment for diagnosing and treating diseases;
(h) recording and disposing of radioactive materials and storing radiopharmaceuticals, following radiation safety procedures.
Examples of the occupations classified here:
▪ Diagnostic medical radiographer
▪ Magnetic resonance imaging technologist
▪ Mammographer
▪ Medical radiation therapist
▪ Nuclear medicine technologist
▪ Radiographer
▪ Sonographer
Some related occupations classified elsewhere:
▪ Medical physicist – 2111
▪ Radiologist – 2212
▪ Radiation protection expert – 2263
▪ Medical imaging assistant – 5329',
            ),
            219 => 
            array (
                'id' => '3212',
                'title' => 'Medical and Pathology Laboratory Technicians',
                'description' => 'Medical and pathology laboratory technicians perform clinical tests on specimens of bodily fluids and tissues in order to obtain information about the health of a patient or cause of death.
Tasks include –
(a) conducting chemical analysis of body fluids, including blood, urine and spinal fluid, to determine presence of normal and abnormal components;
(b) operating, calibrating and maintaining equipment used in quantitative and qualitative analysis, such as spectrophotometers, calorimeters, flame photometers and computer-controlled analysers;
(c) entering data from analysis of laboratory tests and clinical results into record-keeping systems, and reporting results to medical practitioners and other health professionals;
(d) analysing samples of biological material for chemical content or reaction;
(e) setting up, cleaning and maintaining laboratory equipment;
(f) analysing laboratory findings to check the accuracy of the results;
(g) establishing and monitoring programmes to ensure the accuracy of laboratory results, and developing, standardizing, evaluating and modifying procedures, techniques and tests used in the analysis of specimens;
(h) obtaining specimens, cultivating, isolating and identifying microorganisms for analysis;
(i) examining cells stained with dye to locate abnormalities;
(j) inoculating fertilized eggs, broths, or other bacteriological media with organisms.
Examples of the occupations classified here:
▪ Blood-bank technician
▪ Cytology technician
▪ Medical laboratory technician
▪ Pathology technician
Some related occupations classified elsewhere:
▪ Pathologist – 2212
▪ Forensic science technician – 3119
▪ Veterinary technician – 3240
▪ Phlebotomist – 5329',
            ),
            220 => 
            array (
                'id' => '3213',
                'title' => 'Pharmaceutical Technicians and Assistants',
                'description' => 'Pharmaceutical technicians and assistants perform a variety of tasks associated with dispensing medicinal products under the guidance of a pharmacist or other health professional.
Tasks include –
(a) preparing medications and other pharmaceutical compounds under the guidance of a pharmacist or other health professional;
(b) dispensing medicines and drugs to clients and giving written and oral instructions on their use, as prescribed by medical doctors, veterinarians or other health professionals;
(c) receiving prescriptions or refill requests from health professionals and verifying that information is complete and accurate according to medical record-keeping standards;
(d) maintaining proper storage and security conditions for drugs;
(e) filling and labelling containers with prescribed medications;
(f) assisting clients by answering questions, locating items or referring them to a pharmacist for medication information;
(g) pricing and filing prescriptions that have been filled and establishing and maintaining patient records, including lists of medications taken by individual patients;
(h) ordering, labelling, and counting stocks of medications, chemicals and supplies, and entering inventory data into record-keeping systems;
(i) cleaning and preparing equipment and containers used to prepare and dispense medicines and pharmaceutical compounds.
Examples of the occupations classified here:
▪ Dispensing technician
▪ Pharmaceutical assistant
▪ Pharmaceutical technician
Some related occupations classified elsewhere:
▪ Pharmacist – 2262
▪ Pharmacology technician – 3141
▪ Pharmacy aide – 5329',
            ),
            221 => 
            array (
                'id' => '3214',
                'title' => 'Medical and Dental Prosthetic Technicians',
                'description' => 'Medical and dental prosthetic technicians design, fit, service and repair medical and dental devices and appliances following prescriptions or instructions established by a health professional. They may service a wide range of support instruments to correct physical medical or dental problems, such as neck braces, orthopaedic splints, artificial limbs, hearing aides, arch supports, dentures, and dental crowns and bridges.
Tasks include –
(a) examining, interviewing and measuring patients in order to determine their appliance needs, and to identify factors that could affect appliance fit;
(b) conferring with medical and dental practitioners in order to formulate specifications and prescriptions for devices and appliances;
(c) interpreting prescriptions or specifications to determine the type of product or device to be fabricated, and the materials and tools that will be required;
(d) making or receiving casts or impressions of patients\' torsos, limbs, mouths or teeth for use as fabrication patterns;
(e) designing and making orthotic and prosthetic devices using materials such as thermoplastic and thermosetting materials, metal alloys and leather, and hand and power tools;
(f) fitting appliances and devices to patients, testing and evaluating them, and making adjustments for proper fit, function and comfort;
(g) repairing, modifying and maintaining medical and dental prosthetic and supportive devices, according to specifications;
(h) bending, forming and shaping fabric or material so that it conforms to prescribed contours needed to fabricate structural components;
(i) fabricating full and partial dentures and constructing mouth guards, crowns, metal clasps, inlays, bridgework and other aids;
(j) instructing patients in the use and care of prosthetic or orthotic devices.
Examples of the occupations classified here:
▪ Dental mechanic
▪ Dental technician
▪ Denturist
▪ Orthopaedic appliance maker
▪ Orthotic technician
▪ Orthotist
▪ Prosthetic technician
▪ Prosthetist
Some related occupations classified elsewhere:
▪ Dental aide – 5329
▪ Surgical instrument maker – 7311
Note
Occupations included in this unit normally require some medical, dental and anatomical and engineering knowledge obtained through formal training. Technicians who construct and repair precision medical and surgical instruments are not included here.',
            ),
            222 => 
            array (
                'id' => '322',
                'title' => 'Nursing and Midwifery Associate Professionals',
                'description' => 'Nursing and midwifery associate professionals provide basic nursing and personal care for people who are physically or mentally ill, disabled or infirm, and for others in need of care due to potential risks to health including before, during and after childbirth. They generally work under the supervision of, and in support of, implementation of health care, treatment and referrals plans established by medical, nursing, midwifery and other health professionals.
Tasks performed usually include: providing nursing and personal care, treatment and advice to patients according to care plans established by health professionals; assisting professional nurses, midwives and medical doctors in administering medication and treatments; cleaning wounds and applying surgical dressings; providing advice to individuals, families and communities on topics related to health, contraception, pregnancy and childbirth; assessing progress during pregnancy and childbirth, providing or assisting in delivery care and recognizing signs and symptoms requiring referral to a health professional; providing care and support to women and newborns following childbirth.
Occupations in this minor group are classified into the following unit groups:
3221 Nursing Associate Professionals
3222 Midwifery Associate Professionals
Note
The distinctions between nursing and midwifery professionals and associate professionals should be made on the basis of the nature of the work performed in relation to the tasks specified in this definition and in the relevant unit group definitions. The qualifications held by individuals or that predominate in the country are not the main factor in making this distinction, as training arrangements for nurses and midwives vary widely between countries and have varied over time within countries.',
            ),
            223 => 
            array (
                'id' => '3221',
                'title' => 'Nursing Associate Professionals',
                'description' => 'Nursing associate professionals provide basic nursing and personal care for people in need of such care due to effects of ageing, illness, injury, or other physical or mental impairment. They generally work under the supervision of, and in support of, implementation of health care, treatment and referrals plans established by medical, nursing and other health professionals.
Tasks include –
(a) providing nursing and personal care and treatment and health advice to patients according to care plans established by health professionals;
(b) administering medications and other treatments to patients, monitoring patients\' condition and responses to treatment, and referring patients and their families to a health professional for specialized care as needed;
(c) cleaning wounds and applying surgical dressings;
(d) updating information on patients\' condition and treatments received in record-keeping systems;
(e) assisting in planning and managing the care of individual patients;
(f) assisting in giving first-aid treatment in emergencies.
Examples of the occupations classified here:
▪ Assistant nurse
▪ Associate professional nurse
▪ Enrolled nurse
▪ Practical nurse
Some related occupations classified elsewhere:
▪ Clinical nurse consultant – 2221
▪ Professional nurse – 2221
▪ Specialist nurse – 2221
▪ Professional midwife – 2222
▪ Associate professional midwife – 3222
▪ Nursing aide (clinic or hospital) – 5321
▪ Nursing aide (home) – 5322
Note
The distinction between professional and associate professional nurses should be made on the basis of the nature of the work performed in relation to the tasks specified in this definition. The qualifications held by individuals or that predominate in the country are not the main factor in making this distinction, as training arrangements for nurses vary widely between countries and have varied over time within countries.',
            ),
            224 => 
            array (
                'id' => '3222',
                'title' => 'Midwifery Associate Professionals',
                'description' => 'Midwifery associate professionals provide basic health care and advice before, during and after pregnancy and childbirth. They implement care, treatment and referral plans usually established by medical, midwifery and other health professionals.
Tasks include –
(a) providing advice to women, families and communities on health, nutrition, hygiene, exercise, birth and emergency plans, breastfeeding, infant care, family planning and contraception, lifestyle and other topics related to pregnancy and childbirth;
(b) assessing progress during pregnancy and childbirth, and recognizing signs and symptoms requiring referral to a health professional;
(c) providing delivery care, usually only in the absence of identified potential complications, or assisting medical doctors or midwifery professionals with delivery care;
(d) providing care and support to women and newborns following childbirth, monitoring their health status, and identifying signs and symptoms requiring referral to a health professional.
Examples of the occupations classified here:
▪ Assistant midwife
▪ Traditional midwife
Some related occupations classified elsewhere:
▪ Clinical nurse consultant – 2221
▪ Professional nurse – 2221
▪ Specialist nurse – 2221
▪ Professional midwife – 2222
▪ Birth assistant – 5321
Notes
This unit group includes occupations for which competent performance requires knowledge and skills in routine and emergency midwifery care acquired through formal or informal training. The criteria for inclusion of individuals in this unit group should be based on the nature of the work performed in relation to the tasks specified in this definition, and not the qualifications held by individuals or that predominate in the country. Traditional and lay midwives, who provide basic pregnancy and birthing care and advice based primarily on experience and knowledge acquired informally through the traditions and practices of the communities where they originated, are classified here.
Birth assistants, who provide emotional support and general care and advice to women and families during pregnancy and labour, are classified in Minor Group 532:  Personal care workers in health services.',
            ),
            225 => 
            array (
                'id' => '323',
                'title' => 'Traditional and Complementary Medicine Associate Professionals',
                'description' => 'Traditional and complementary medicine associate professionals prevent, care for and treat human physical and mental illnesses, disorders and injuries using herbal and other therapies based on theories, beliefs and experiences originating in specific cultures. They administer treatments using traditional techniques and medicaments, either acting independently or according to therapeutic care plans established by a traditional medicine or other health professional.
Tasks performed usually include: examining patients and interviewing them and their families to determine their health status and the nature of physical or mental disorders or illnesses or other ailments; recommending and providing care and treatment for illnesses and other ailments using traditional techniques and medicaments, such as physical manipulation and exercises, blood-letting using natural vessels, and preparations using herbs, plants, insects and animal extracts; administering  treatments such as acupuncture, ayurvedic, homeopathic and herbal medicine according to therapeutic care plans and procedures usually developed by a traditional medicine or other health professional; providing care and treatment for physical injuries such as setting and healing fractured and dislocated bones using traditional methods of physical manipulation and herbal therapies; advising individuals, families and the community on health, nutrition, hygiene, lifestyle and other issues to maintain or improve health and well-being; referring patients to, and exchanging information with, other health care providers to ensure comprehensive and continuing care.
Occupations in this minor group are classified into the following unit group:
3230 Traditional and Complementary Medicine Associate Professionals',
            ),
            226 => 
            array (
                'id' => '3230',
                'title' => 'Traditional and Complementary Medicine Associate Professionals',
                'description' => 'Traditional and complementary medicine associate professionals prevent, care for and treat human physical and mental illnesses, disorders and injuries using herbal and other therapies based on theories, beliefs and experiences originating in specific cultures. They administer treatments using traditional techniques and medicaments, either acting independently or according to therapeutic care plans established by a traditional medicine or other health professional.
Tasks include –
(a) examining patients and interviewing them and their families to determine their health status and the nature of physical or mental disorders or illnesses or other ailments;
(b) recommending and providing care and treatment for illnesses and other ailments using traditional techniques and medicaments, such as physical manipulation and exercises, blood-letting using natural vessels, and preparations using herbs, plants, insects and animal extracts;
(c) administering  treatments such as acupuncture, ayurvedic, homeopathic and herbal medicine according to therapeutic care plans and procedures usually developed by a traditional medicine or other health professional;
(d) providing care and treatment for physical injuries such as setting and healing fractured and dislocated bones using traditional methods of physical manipulation and herbal therapies;
(e) advising individuals, families and the community on health, nutrition, hygiene, lifestyle and other issues to maintain or improve health and well-being;
(f) referring patients to, and exchanging information with, other health care providers to ensure comprehensive and continuing care.
Examples of the occupations classified here:
▪ Acupuncture technician
▪ Ayurvedic technician
▪ Bonesetter
▪ Herbalist
▪ Homeopathy technician
▪ Scraping and cupping therapist
▪ Village healer
▪ Witch doctor
Some related occupations classified elsewhere:
▪ Acupuncturist – 2230
▪ Ayurvedic practitioner – 2230
▪ Chinese herbal medicine practitioner – 2230
▪ Homeopath – 2230
▪ Naturopath – 2230
▪ Chiropractor – 2269
▪ Osteopath – 2269
▪ Traditional midwife – 3222
▪ Acupressure therapist – 3255
▪ Hydrotherapist – 3255
▪ Faith healer – 3413
Notes
Occupations in traditional and complementary for which competent performance requires an extensive understanding of the benefits and applications of traditional and complementary therapies, developed as the result of extended formal study of these techniques as well as human anatomy and elements of modern medicine, are classified in Unit Group 2230: Traditional and Complementary Medicine Professionals.  Those occupations whose practice requires a less extensive understanding, based on relatively short periods of formal or informal education and training, or informally through the traditions and practices of the communities where they originated, are included in Unit Group 3230: Traditional and Complementary Medicine Associate Professionals.  Practitioners working in the singular application of approaches to herbal medicines, spiritual therapies or manual therapeutic techniques are excluded from Unit Group 2230.
Faith healers who treat human ailments through spiritual therapies, without using herbal therapies or other medicaments or physical treatments, are included in Unit Group 3413: Religious Associate Professionals.
Occupations that provide therapy using traditional forms of massage and the application of pressure, such as acupressure and shiatsu therapists, are classified in Unit Group 3255: Physiotherapy Technicians and Assistants.
Traditional and lay midwives, who provide basic pregnancy and birthing care and advice based primarily on experience and knowledge acquired informally through the traditions and practices of the communities where they originated, are classified in Unit Group 3222: Midwifery Associate Professionals.',
            ),
            227 => 
            array (
                'id' => '324',
                'title' => 'Veterinary Technicians and Assistants',
                'description' => 'Veterinary technicians and assistants carry out advisory, diagnostic, preventive and curative veterinary tasks more limited in scope and complexity than those carried out by veterinarians.  They care for animals under treatment and in temporary residence at veterinary facilities and assist veterinarians to perform procedures and operations.
Tasks performed usually include: advising communities and individuals on the treatment of animals and their diseases and injuries; conducting examinations of animals to make diagnoses or refer more difficult cases to veterinarians when needed; treating ill or injured animals, especially for common diseases and disorders; cleaning and sterilising examination tables and instruments and preparing materials used in the examination and treatment of animals; carrying out technical tasks connected with artificial insemination of animals; getting animals ready for examination or treatment and restraining or holding them during treatment;  assisting veterinarians to administer anaesthetics and oxygen during treatment; placing animals in cages for recovery from operations and monitoring their condition.
Occupations in this minor group are classified into the following unit group:
3240 Veterinary Technicians and Assistants',
            ),
            228 => 
            array (
                'id' => '3240',
                'title' => 'Veterinary Technicians and Assistants',
                'description' => 'Veterinary technicians and assistants carry out advisory, diagnostic, preventive and curative veterinary tasks, more limited in scope and complexity than those carried out by, and with the guidance of, veterinarians. They care for animals under treatment and in temporary residence at veterinary facilities, perform routine procedures and assist veterinarians to perform procedures and operations.
Tasks include –
(a) advising communities and individuals on the treatment of animals and their diseases and injuries;
(b) conducting examinations of animals to make diagnoses or refer more difficult cases to veterinarians when needed;
(c) treating ill or injured animals, especially for common diseases and disorders;
(d) cleaning and sterilising examination tables and instruments and preparing materials used in the examination and treatment of animals;
(e) carrying out technical tasks connected with artificial insemination of animals;
(f) getting animals ready for examination or treatment and restraining or holding them during treatment;
(g) assisting veterinarians to administer anaesthetics and oxygen during treatment;
(h) placing animals in cages for recovery from operations and monitoring their condition;
(i) producing radiographs, collecting samples, and performing other laboratory tests to assist in diagnosis of animal health problems;
(j) performing routine animal dental procedures and assisting veterinarians with animal dentistry.
Examples of the occupations classified here:
▪ Artificial inseminator
▪ Veterinary assistant
▪ Veterinary nurse
▪ Veterinary vaccinator
Some related occupations classified elsewhere:
▪ Veterinarian – 2250
▪ Animal attendant – 5164
▪ Veterinary aide – 5164',
            ),
            229 => 
            array (
                'id' => '325',
                'title' => 'Other Health Associate Professionals',
                'description' => 'Other health associate professionals perform technical tasks and provide support services in dentistry, medical records administration, community health, the correction of reduced visual acuity, physiotherapy, environmental health, emergency medical treatment and other activities to support and promote human health.
Tasks performed usually include: providing basic care services for the prevention and treatment of diseases and disorders of the teeth and mouth; advising communities and individuals on hygiene, diet and other preventive measures to reduce potential risks to health; compiling and maintaining patients\' medical records to document condition and treatment and to provide data for research, billing, cost control and care improvement;  assisting families to develop the necessary skills and resources to improve their health status;  providing advice and education on sanitation and hygiene to limit the spread of infectious diseases; fitting and dispensing optical lenses;  investigating the implementation of rules and regulations relating to environmental and occupational factors that may potentially affect human health; massaging the soft tissues of the body; showing patients to examination rooms and preparing them for examination; attending and responding to accidents and emergencies and to requests for medical assistance.
Occupations in this minor group are classified into the following unit groups:
3251 Dental Assistants and Therapists
3252 Medical Records and Health Information Technicians
3253 Community Health Workers
3254 Dispensing Opticians
3255 Physiotherapy Technicians and Assistants
3256 Medical Assistants
3257 Environmental and Occupational Health Inspectors and Associates
3258 Ambulance Workers
3259 Health Associate Professionals Not Elsewhere Classified',
            ),
            230 => 
            array (
                'id' => '3251',
                'title' => 'Dental Assistants and Therapists',
                'description' => 'Dental assistants and therapists provide basic dental care services for the prevention and treatment of diseases and disorders of the teeth and mouth, according to care plans and procedures established by a dentist or other oral health professional.
Tasks include –
(a) advising communities and individuals on dental hygiene, diet and other preventive measures to reduce potential risks to oral health;
(b) conducting visual and physical examinations of patients\' mouths, teeth and related structures to assess oral health status;
(c) identifying cases of patients with poor oral health or oral disease requiring referral to a dentist or other health professional;
(d) assisting dentists during complex dental procedures;
(e) providing fluoride treatments, cleaning and removing deposits from teeth, preparing cavities and placing fillings, administering local anaesthesia, and performing other types of basic or routine clinical dental procedures;
(f) preparing, cleaning and sterilizing dental instruments, equipment and materials used in the examination and treatment of patients;
(g) getting patients ready for examination or treatment, including explaining procedures and correct positioning;
(h) taking impressions of the mouth and dental radiographs to support diagnosis and fitting of dental prosthetics.
Examples of the occupations classified here:
▪ Dental assistant
▪ Dental hygienist
▪ Dental therapist
Some related occupations classified elsewhere:
▪ Dentist – 2261
▪ Dental mechanic – 3214
▪ Dental prosthetist – 3214
▪ Dental technician – 3214
▪ Dental aide – 5329',
            ),
            231 => 
            array (
                'id' => '3252',
                'title' => 'Medical Records and Health Information Technicians',
                'description' => 'Medical records and health information technicians develop, maintain and implement health records processing, storage and retrieval systems in medical facilities and other health care settings to meet the legal, professional, ethical and administrative record-keeping requirements of health services delivery.
Tasks include –
(a) planning, developing, maintaining  and operating a variety of health record indexes and storage and retrieval systems to collect, classify, store and analyse information;
(b) transcribing, compiling and processing patient medical records, admission and discharge documents, and other medical reports into record-keeping systems to provide data for patient monitoring and referral, epidemiological monitoring, research, billing, cost control and care improvement;
(c) reviewing records for completeness, accuracy and compliance with regulations;
(d) translating narrative descriptions and numeric information from medical records and other documents on health services delivery into codes associated with standard classification systems;
(e) protecting the security of medical records to ensure that confidentiality is maintained, and releasing information to authorized persons and agencies in accordance with regulations;
(f) supervising clerical and administrative workers involved in the maintenance of medical records.
Examples of the occupations classified here:
▪ Clinical coder
▪ Disease registry technician
▪ Health information clerk
▪ Medical records analyst
▪ Medical records clerk
▪ Medical records technician
▪ Medical records unit supervisor
Some related occupations classified elsewhere:
▪ Medical secretary – 3344
▪ Data entry clerk – 4132
▪ Filing clerk – 4415
Notes
Occupations included in this unit group normally require knowledge of medical terminology, legal aspects of health information, health data standards and computer- or paper-based data management as obtained through formal education and/or on-the-job training.',
            ),
            232 => 
            array (
                'id' => '3253',
                'title' => 'Community Health Workers',
                'description' => 'Community health workers provide health education, referral and follow-up, case management, basic preventive health care and home visiting services to specific communities. They provide support and assistance to individuals and families in navigating the health and social services system.
Tasks include –
(a) providing  information to families and communities on a range of health issues including nutrition, hygiene, infant and child care, immunizations, family planning,  risk factors and prevention of common infectious diseases, poisoning prevention, first aid for treatment of simple and common ailments, substance abuse, domestic violence and other topics;
(b) visiting families in their homes to provide information on the health, social and other services available and support them in gaining access to these services;
(c) visiting families who do not usually access medical establishments to monitor on a regular basis certain conditions such as progress with pregnancy, child growth and development, and environmental sanitation;
(d) distributing to households medical supplies for the prevention and treatment of endemic diseases such as malaria, pneumonia and diarrhoeal diseases, and instructing family and community members in the use of these products;
(e) conducting outreach efforts to groups who do not usually access medical establishments with information and basic medical supplies for prevention and management of certain health conditions for which they are most at risk, such as HIV/AIDS and other communicable diseases;
(f) collecting data from households and communities who do not usually access medical establishments for purposes of patient monitoring and referral and reporting to meet health regulations.
Examples of the occupations classified here:
▪ Community health aide
▪ Community health promoter
▪ Community health worker
▪ Village health worker
Some related occupations classified elsewhere:
▪ Traditional midwife – 3222
▪ Village healer – 3230
▪ Home care aide – 5322
Notes
Occupations included in this unit group normally require formal or informal training and supervision recognized by the health and social services authorities. Providers of routine personal care and traditional medicine practitioners are not included here.',
            ),
            233 => 
            array (
                'id' => '3254',
                'title' => 'Dispensing Opticians',
                'description' => 'Dispensing opticians design, fit and dispense optical lenses based on a prescription from an ophthalmologist or optometrist for the correction of reduced visual acuity. They service corrective eyeglasses, contact lenses, low-vision aids and other optical devices.
Tasks include –
(a) examining and taking facial and eye measurements of clients for fitting of eyeglasses and other optical devices;
(b) providing advice to clients on selection and maintenance of eyeglasses and frames, types of contact lenses and other optical devices for performance, safety, comfort and lifestyle;
(c) interpreting optical prescriptions and preparing work orders for optical laboratories for grinding and mounting of lenses in frames, preparation of contact lenses and other required work;
(d) verifying exactness of finished optical appliances and devices to the original prescription and fit of clients.
Examples of the occupations classified here:
▪ Contact lens optician
▪ Dispensing optician
Some related occupations classified elsewhere:
▪ Ophthalmologist – 2212
▪ Ophthalmic optician – 2267
▪ Optometrist – 2267
▪ Orthoptist – 2267',
            ),
            234 => 
            array (
                'id' => '3255',
                'title' => 'Physiotherapy Technicians and Assistants',
                'description' => 'Physiotherapy technicians and assistants provide physical therapeutic treatments to patients in circumstances where functional movement is threatened by injury, disease or impairment. Therapies are usually provided according to rehabilitative plans established by a physiotherapist or other health professional.
Tasks include –
(a) administering manual treatments such as massage therapy or pressure point therapy;
(b) administering electrical modality treatments, ultrasound and other physical therapies using specialized techniques and equipment;
(c) instructing, motivating, safeguarding and assisting patients as they practise physical exercises, relaxation techniques and functional activities;
(d) conferring with physiotherapists or other health care providers to evaluate patient information for planning, modifying and coordinating treatment;
(e) monitoring and recording patients\' progress during treatment, including measuring their range-of-joint motion and vital signs;
(f) fitting patients for orthopaedic braces, prostheses and other physical support devices such as crutches, and instructing patients in the use of such devices.
Examples of the occupations classified here:
▪ Acupressure therapist
▪ Electrotherapist
▪ Hydrotherapist
▪ Massage therapist
▪ Physical rehabilitation technician
▪ Physiotherapy technician
▪ Shiatsu therapist
Some related occupations classified elsewhere:
▪ Physiotherapist  – 2264
▪ Chiropractor – 2269
▪ Occupational therapist – 2269
▪ Podiatrist – 2269',
            ),
            235 => 
            array (
                'id' => '3256',
                'title' => 'Medical Assistants',
                'description' => 'Medical assistants perform basic clinical and administrative tasks to support patient care under the direct supervision of a medical practitioner or other health professional.
Tasks include –
(a) interviewing patients and their families to obtain information on their health status and medical history;
(b) assisting medical doctors and other health professionals to examine and treat patients, including measuring and recording vital signs, administering medications and performing routine clinical procedures such as giving injections and removing sutures;
(c) getting patients ready for examination and treatment, including explaining procedures and showing them to examination rooms;
(d) preparing and handling medical instruments and supplies, including sterilizing instruments and disposing of contaminated supplies in accordance with safety procedures;
(e) collecting blood, tissue or other specimens, and preparing them for laboratory testing;
(f) providing information to patients and families on health care topics including medications prescribed by a medical doctor or other health professional;
(g) providing prescription and drug refill information to pharmacies;
(h) maintaining cleanliness of patient waiting and examination rooms;
(i) recording information on patients\' medical history, diagnostic testing and treatment procedures and results, and other information in medical record-keeping systems;
(j) scheduling appointments with patients, and preparing documentation required for billing, reporting and insurance purposes.
Examples of the occupations classified here:
▪ Clinical assistant
▪ Medical assistant
▪ Ophthalmic assistant
Some related occupations classified elsewhere:
▪ Clinical officer (paramedical) – 2240
▪ Medical prosthetic technician – 3214
▪ Dental assistant – 3251
▪ Physiotherapy assistant – 3255
▪ Medical secretary – 3344
▪ Medical imaging assistant – 5329
Note
Occupations included in this unit group normally require formal training in health services provision. Clinical care providers with advanced training and skills to provide independent medical diagnostic and treatment services are classified in Unit Group 2240: Paramedical Practitioners.',
            ),
            236 => 
            array (
                'id' => '3257',
                'title' => 'Environmental and Occupational Health Inspectors and Associates',
                'description' => 'Environmental and occupational health inspectors and associates investigate the implementation of rules and regulations relating to environmental factors that may affect human health, safety in the workplace, and safety of processes for the production of goods and services. They may implement and evaluate programmes to restore or improve safety and sanitary conditions under the supervision of a health professional.
Tasks include –
(a) advising employers\' and workers\' representatives on the implementation of governmental and other rules and regulations concerning occupational safety and the working environment;
(b) inspecting places of work to ensure that the working environment, machinery and equipment conform to governmental and other rules, regulations and standards related to sanitation and/or occupational and environmental health and safety;
(c) giving advice on environmental sanitary problems and techniques;
(d) inspecting places of work and, by interviews, observations and other means, obtaining information about work practices and accidents to determine compliance with safety rules and regulations;
(e) inspecting areas of production, processing, transport, handling, storage and sale of products to ensure conformity with governmental and other rules, regulations and standards;
(f) advising enterprises and the general public on the implementation of governmental and other rules and regulations concerning hygiene, sanitation, purity and grading of primary products, food, drugs, cosmetics and similar goods;
(g) inspecting establishments to ensure that they conform to governmental and other rules and regulations concerning emission of pollutants and disposal of dangerous wastes;
(h) initiating action to maintain or improve hygiene and prevent pollution of water, air, food or soil;
(i) promoting preventive and corrective measures such as control of disease-carrying organisms and of harmful substances in the air, hygienic food handling, proper disposal of waste and cleaning of public places;
(j) estimating quantities and costs of materials and labour required for health, safety and sanitation remediation projects;
Examples of the occupations classified here:
▪ Food sanitation and safety inspector
▪ Health inspector
▪ Occupational health and safety inspector
▪ Pollution inspector
▪ Product safety inspector
▪ Sanitarian
▪ Sanitary inspector
Some related occupations classified elsewhere:
▪ Environmental health officer – 2263
▪ Occupational health and safety adviser – 2263
▪ Occupational hygienist – 2263
▪ Radiation protection expert – 2263',
            ),
            237 => 
            array (
                'id' => '3258',
                'title' => 'Ambulance Workers',
                'description' => 'Ambulance workers provide emergency health care to patients who are injured, sick, infirm or otherwise physically or mentally impaired prior to and during transport to medical facilities.
Tasks include –
(a) assessing the health status of persons involved in accidents, natural disasters and other emergency situations, and determining needs for immediate and specialized medical assistance;
(b) performing medical procedures and administering drugs and other therapies according to protocol for emergency medical treatment, including resuscitating and defibrillating patients and operating life-support equipment;
(c) monitoring changes in the health status of patients during transport to and from medical, rehabilitation and other health care facilities;
(d) providing information and training to community groups and essential service workers in first aid for initial care of an illness or injury;
(e) attending and/or patrolling large-scale public gatherings and other events where health emergencies are more likely to occur;
(f) recording information on patients\' conditions and treatments provided in medical record-keeping systems.
Examples of the occupations classified here:
▪ Ambulance officer
▪ Ambulance paramedic
▪ Emergency medical technician
▪ Emergency paramedic
Some related occupations classified elsewhere:
▪ Paramedical practitioner – 2240
▪ Ambulance driver – 8322
Note
Occupations included in this unit group normally require formal training in emergency medical treatment, patient transport, ambulance principles and practice, or a related field. Ambulance drivers who do not provide health care are classified in Unit Group 8322: Car, Taxi and Van Drivers.',
            ),
            238 => 
            array (
                'id' => '3259',
                'title' => 'Health Associate Professionals Not Elsewhere Classified',
                'description' => 'This unit group covers health associate professionals not classified elsewhere in Sub-major Group 32: Health Associate Professionals. For instance, the group includes occupations such as HIV counsellor, family planning counsellor and other health associate professionals.
In such cases tasks would include –
(a) interviewing and examining patients to obtain information on their health status and the nature and extent of injury, illness or other physical or mental health condition;
(b) providing information and counselling to patients and families about certain health conditions, prevention and treatment options, treatment adherence, and personal behaviours that can affect health outcomes;
(c) administering therapeutic care and treatment to patients;
(d) performing certain basic clinical procedures such as administration of HIV antibody tests or insertion of intrauterine devices;
(e) dispensing and advising on dietary supplements, antiretroviral and prophylaxis medications, and other health care products;
(f) monitoring patients\' progress through treatment plans, and identifying signs and symptoms requiring referral to a medical doctor or other health professional;
(g) recording information on patients\' health status and responses to treatment in medical record-keeping systems;
(h) sharing information with other health care providers when required to ensure continuing and comprehensive care.
Examples of the occupations classified here:
▪ Anaesthesia technician
▪ Family planning counsellor
▪ HIV counsellor
▪ Respiratory therapy technician
Note
Occupations included in this unit group normally require formal training in health service provision.',
            ),
            239 => 
            array (
                'id' => '33',
                'title' => 'Business and Administration Associate Professionals',
                'description' => 'Business and administration associate professionals perform mostly technical tasks connected with the practical application of knowledge relating to financial accounting and transaction matters, mathematical calculations, human resource development, selling and buying financial instruments, specialized secretarial tasks, and enforcing or applying government rules.  Also included are workers who provide business services such as customs clearance, conference planning, job placements, buying and selling real estate or bulk commodities, and serving as agents for performers such as athletes and artists.  Competent performance in most occupations in this sub-major group requires skills at the third ISCO skill level.
Tasks performed by workers in this sub-major group usually include recording and transmitting buy and sell orders for securities, stocks, bonds or other financial instruments and for foreign exchange for future or immediate delivery; submitting credit and loan applications to management with recommendations for approval or rejection; approving or rejecting applications within authorized limits ensuring that credit standards of the institution are respected; maintaining complete records of all financial transactions of an undertaking according to general bookkeeping principles, with guidance from accountants; assisting in planning and performing mathematical, statistical, actuarial, accounting and related calculations; selling and buying financial instruments.
Occupations in this sub-major group are classified into the following minor groups:
331 Financial and Mathematical Associate Professionals
332 Sales and Purchasing Agents and Brokers
333 Business Services Agents
334 Administrative and Specialized Secretaries
335 Government Regulatory Associate Professionals',
            ),
            240 => 
            array (
                'id' => '331',
                'title' => 'Financial and Mathematical Associate Professionals',
                'description' => 'Financial and mathematical associate professionals place a value on various items and property; maintain records of financial transactions; analyse loan application information and render a decision; buy and sell financial instruments; and perform mathematical and related calculations.
Tasks performed usually include: recording and transmitting buy and sell orders for securities, stocks, bonds or other financial instruments and for foreign exchange for future or immediate delivery; submitting credit and loan applications to management with recommendations for approval or rejection; approving or rejecting applications within authorized limits ensuring that credit standards of the institution are respected; maintaining complete records of all financial transactions of an undertaking according to general bookkeeping principles, with guidance from accountants; assisting in planning and performing mathematical, statistical, actuarial, accounting and related calculations.
Occupations in this minor group are classified into the following unit groups:
3311 Securities and Finance Dealers and Brokers
3312 Credit and Loans Officers
3313 Accounting Associate Professionals
3314 Statistical, Mathematical and Related Associate Professionals
3315 Valuers and Loss Assessors',
            ),
            241 => 
            array (
                'id' => '3311',
                'title' => 'Securities and Finance Dealers and Brokers',
                'description' => 'Securities and finance dealers and brokers buy and sell securities, stocks, bonds and other financial instruments, and deal on the foreign exchange, on spot, or on futures markets, on behalf of their own company or for customers on a commission basis. They recommend transactions to clients or senior management.
Tasks include –
(a) obtaining information about the financial circumstances of customers and companies in which investments may be made;
(b) analysing market trends for securities, bonds, stocks and other financial instruments, including foreign exchange;
(c) informing prospective customers about market conditions and prospects;
(d) advising on and participating in the negotiation of terms for, and organization of, loans and placement of stocks and bonds in the financial market to raise capital for customers;
(e) recording and transmitting buy and sell orders for securities, stocks, bonds or other financial instruments and for foreign exchange for future or immediate delivery.
Examples of the occupations classified here:
▪ Foreign exchange broker
▪ Foreign exchange dealer
▪ Securities broker
▪ Stocks and shares broker
Some related occupations classified elsewhere:
▪ Bond analyst – 2413
▪ Commodities broker – 3324
▪ Commodity futures dealer – 3324
▪ Securities clerk – 4312',
            ),
            242 => 
            array (
                'id' => '3312',
                'title' => 'Credit and Loans Officers',
                'description' => 'Credit and loans officers analyse and evaluate financial information on applications for credit and loans and determine approval or disapproval of the client for the credit or loan, or recommend to management approval or disapproval.
Tasks include –
(a) interviewing applicants for personal, mortgage, student and business loans;
(b) researching and evaluating loan applicants\' financial status, references, credit and ability to repay the loan;
(c) submitting credit and loan applications to management with recommendations for approval or rejection;
(d) approving or rejecting loan applications within authorized limits ensuring that credit standards of the institution are respected;
(e) keeping records of payments, preparing routine letters requesting payment for overdue accounts and forwarding these for legal action;
(f) completing credit and loan documentation.
Examples of the occupations classified here:
▪ Loans officer
▪ Mortgage officer
Some related occupations classified elsewhere:
▪ Financial institution branch manager – 1346',
            ),
            243 => 
            array (
                'id' => '3313',
                'title' => 'Accounting Associate Professionals',
                'description' => 'Accounting associate professionals maintain complete records of financial transactions of an undertaking and verify accuracy of documents and records relating to such transactions.
Tasks include –
(a) maintaining complete records of all financial transactions of an undertaking according to general bookkeeping principles, with guidance from accountants;
(b) verifying accuracy of documents and records relating to payments, receipts and other financial transactions;
(c) preparing financial statements and reports for specified periods;
(d) applying knowledge of bookkeeping principles and practices in order to identify and solve problems arising in the course of their work;
(e) using standard computer software packages to perform accounting and related calculations;
(f) supervising the work of accounts and bookkeeping clerks.
Example of the occupations classified here:
▪ Accounting assistant
▪ Bookkeeper
Some related occupations classified elsewhere:
▪ Accountant – 2411
▪ Actuarial assistant – 3314
▪ Bookkeeping clerk – 4311',
            ),
            244 => 
            array (
                'id' => '3314',
                'title' => 'Statistical, Mathematical and Related Associate Professionals',
                'description' => 'Statistical, mathematical and related associate professionals assist in planning the collection, processing and presentation of statistical, mathematical or actuarial data and in carrying out these operations, usually working under the guidance of statisticians, mathematicians and actuaries.
Tasks include –
(a) assisting in planning and performing statistical, mathematical, actuarial, and related calculations;
(b) preparing detailed estimates of quantities and costs of materials and labour required for statistical census and survey operations;
(c) performing technical tasks connected with establishing, maintaining and using registers and sampling frames for census and survey operations;
(d) performing technical tasks connected with data collection and quality control operations in censuses and surveys;
(e) using standard computer software packages to perform mathematical, actuarial, statistical, accounting and related calculations;
(f) preparing statistical, mathematical, actuarial, accounting and other results for presentation in graphical or tabular form;
(g) applying knowledge of statistical, mathematical, actuarial, accounting and related principles and practices in order to identify and solve problems arising in the course of their work;
(h) supervising the work of statistical clerks.
Examples of the occupations classified here:
- Actuarial assistant
- Mathematical assistant
- Statistical assistant
Some related occupations classified elsewhere:
▪ Actuary – 2120
▪ Mathematician – 2120
▪ Statistician – 2120
▪ Accounting assistant – 3313
▪ Statistical clerk – 4312',
            ),
            245 => 
            array (
                'id' => '3315',
                'title' => 'Valuers and Loss Assessors',
                'description' => 'Valuers and loss assessors value property and various goods and assess losses covered by insurance policies.
Tasks include –
(a) determining the quality or value of raw materials, real estate, industrial equipment, personal and household effects, works of art, gems and other objects;
(b) assessing the extent of damage or loss and liabilities of insurance companies and underwriters for losses covered by insurance policies;
(c) obtaining records of sales and value of similar items or property;
(d) inspecting items or property to evaluate condition, size and construction;
(e) preparing reports of value, outlining the estimation factors and methods used.
Examples of the occupations classified here:
▪ Appraiser
▪ Claims assessor
▪ Claims inspector
▪ Insurance assessor
▪ Real estate appraiser
▪ Valuer
Some related occupations classified elsewhere:
▪ Auctioneer – 3339',
            ),
            246 => 
            array (
                'id' => '332',
                'title' => 'Sales and Purchasing Agents and Brokers',
                'description' => 'Sales and purchasing agents and brokers represent companies, governments and other organizations to buy and sell commodities, goods, insurance, shipping and other services to industrial, professional, commercial or other establishments, or act as independent agents to bring together buyers and sellers of commodities and services.
Tasks performed usually include obtaining information about employers\' and competitors\' goods and services;  monitoring and analysing market trends and conditions; obtaining information about clients\' needs and identifying suitable products and services; explaining and demonstrating products and services to clients; negotiating prices, contracts, terms, conditions and shipping arrangements for purchase or sale of goods, services or commodities.
Occupations in this minor group are classified into the following unit groups:
3321 Insurance Representatives
3322 Commercial Sales Representatives
3323 Buyers
3324 Trade Brokers
Note
Sales managers are classified in Minor Group 122: Sales, Marketing and Development Managers. Technical, medical and ICT sales professionals are classified in Minor Group 243: Sales, Marketing and Public Relations Professionals.  Securities and finance dealers are classified in Minor Group 331: Financial and Mathematical Associate Professionals.',
            ),
            247 => 
            array (
                'id' => '3321',
                'title' => 'Insurance Representatives',
                'description' => 'Insurance representatives advise on and sell life, accident, automobile, liability, endowment, fire, marine and other types of insurance to new and established clients.
Tasks include –
(a) obtaining information about customers\' circumstances necessary to determine appropriate type of insurance and conditions;
(b) negotiating with customers to determine type and degree of risk for which insurance is required;
(c) explaining details of insurance and conditions, risk coverage premiums and benefits to customers;
(d) assisting clients to determine the type and level of coverage required, calculating premiums and establishing method of payment;
(e) negotiating and placing reinsurance contracts;
(f) advising on, negotiating terms for and placing insurance contracts for large or special types of projects, installations or risks.
Examples of the occupations classified here:
▪ Insurance agent
▪ Insurance broker
▪ Insurance underwriter
Some related occupations classified elsewhere:
▪ Insurance agency manager – 1346
▪ Securities broker – 3311
▪ Insurance assessor – 3315
▪ Insurance clerk  – 4312',
            ),
            248 => 
            array (
                'id' => '3322',
                'title' => 'Commercial Sales Representatives',
                'description' => 'Commercial sales representatives represent companies to sell various goods and services to businesses and other organizations and provide product specific information as required.
Tasks include –
(a) soliciting orders and selling goods to retail, industrial, wholesale and other establishments;
(b) selling equipment, supplies and related services to business establishments or individuals;
(c) obtaining and updating knowledge of market conditions and of employer\'s and competitors\' goods and services;
(d) providing prospective customers with information about the characteristics and functions of the products and equipment for sale, and demonstrating its use or qualities;
(e) quoting prices and credit terms, recording orders and arranging deliveries;
(f) reporting customers\' reactions and requirements to suppliers and manufacturers;
(g) following up clients to ensure satisfaction with products purchased.
Examples of the occupations classified here:
▪ After-sales service adviser
▪ Canvasser
▪ Commercial traveller
Some related occupations classified elsewhere:
▪ Sales manager – 1221
▪ Medical sales representative – 2433
▪ Technical sales representative – 2433
▪ Information and communications technology sales professional – 2434
▪ Shop sales assistant – 5223
▪ Door-to-door sales representative – 5243',
            ),
            249 => 
            array (
                'id' => '3323',
                'title' => 'Buyers',
                'description' => 'Buyers buy goods and services for use or resale on behalf of industrial, commercial, government or other establishments and organizations.
Tasks include –
(a) determining or negotiating contract terms and conditions, awarding supplier contracts or recommending contract awards for the purchase of equipment, raw materials, products, services and merchandise for resale;
(b) obtaining information about requirements and stock and developing specifications for quantity and quality to be purchased, costs, delivery dates and other contract conditions;
(c) purchasing general and specialized equipment, materials or business services for use or for further processing by their establishment;
(d) inviting tenders, consulting with suppliers and reviewing quotations;
(e) purchasing merchandise for resale by retail or wholesale establishments;
(f) studying market reports, trade periodicals and sales promotion materials and visiting trade shows, showrooms, factories and product design events;
(g) selecting the merchandise or products that best fit the establishment\'s requirements;
(h) interviewing suppliers and negotiating prices, discounts, credit terms and transportation arrangements;
(i) overseeing distribution of merchandise to outlets and maintaining adequate stock levels;
(j) establishing delivery schedules, monitoring progress and contacting clients and suppliers to resolve problems.
Examples of the occupations classified here:
▪ Buyer
▪ Procurement officer
▪ Purchasing agent
▪ Purchasing merchandiser
▪ Supply officer
Some related occupations classified elsewhere:
▪ Commodities broker – 3324',
            ),
            250 => 
            array (
                'id' => '3324',
                'title' => 'Trade Brokers',
                'description' => 'Trade brokers buy and sell commodities and shipping services, usually in bulk, on behalf of their own company or for customers on a commission basis.
Tasks include –
(a) establishing contact between buyers and sellers of commodities;
(b) discussing buying or selling requirements of clients and giving advice accordingly;
(c) buying and selling cargo space on ships;
(d) negotiating purchase or sale of commodities and commodity futures;
(e) finding cargo and/or storage space for commodities and negotiating freight, shipping and storage charges;
(f) monitoring and analysing market trends and other factors affecting the supply and demand for commodities and shipping services.
Examples of the occupations classified here:
▪ Commodities broker
▪ Commodity futures dealer
▪ Shipping broker
Some related occupations classified elsewhere:
▪ Finance broker – 3311
▪ Finance dealer – 3311
▪ Securities broker – 3311
▪ Securities dealer – 3311
▪ Insurance dealer – 3321',
            ),
            251 => 
            array (
                'id' => '333',
                'title' => 'Business Services Agents',
                'description' => 'Business services agents establish contacts to sell various business services such as advertising space in the media; carry out customs clearance activities ensuring that necessary documents are in order; match jobseekers with vacancies; find workers for employers; arrange contracts for the performance of athletes, entertainers and artists, as well as for the publication of books, the production of plays, or the recording, performance and sale of music; and plan and organize conferences and similar events.
Tasks performed usually include: carrying out customs clearance procedures for exports or imports; arranging and coordinating conference and event services, such as conference facilities, catering, signage, displays, audiovisual and computer equipment, accommodation, transport and social events for participants; matching jobseekers with vacancies; finding workers for vacant posts for employers; showing real estate properties to be sold or leased to prospective buyers or tenants and explaining terms of sale or conditions of rent or lease; selling by auction various kinds of property, cars, commodities, livestock, art, jewellery and other objects; arranging contracts for performers and performances.
Occupations in this minor group are classified into the following unit groups:
3331 Clearing and Forwarding Agents
3332 Conference and Event Planners
3333 Employment Agents and Contractors
3334 Real Estate Agents and Property Managers
3339 Business Services Agents Not Elsewhere Classified',
            ),
            252 => 
            array (
                'id' => '3331',
                'title' => 'Clearing and Forwarding Agents',
                'description' => 'Clearing and forwarding agents carry out customs clearance procedures and ensure that insurance, export/import licences and other formalities are in order.
Tasks include –
(a) carrying out customs clearance procedures for exports or imports;
(b) ensuring that insurance is in order;
(c) ensuring that export/import licences and other formalities are in order;
(d) signing and issuing bills of lading;
(e) checking import/export documentation to determine cargo contents, and classifying goods into different fee or tariff groups, using a tariff coding system.
Examples of the occupations classified here:
▪ Clearing agent
▪ Forwarding agent
▪ Shipping agent',
            ),
            253 => 
            array (
                'id' => '3332',
                'title' => 'Conference and Event Planners',
                'description' => 'Conference and event planners organize and coordinate services for conferences, events, functions, banquets and seminars.
Tasks include –
(a) promoting conferences, conventions and trade shows to potential customers;
(b) responding to inquiries concerning services provided and costs for room and equipment hire, catering and related services;
(c) meeting with clients to discuss their needs and outlining package options to meet these needs;
(d) arranging and coordinating services such as conference facilities, catering, signage, displays, audiovisual and computer equipment, accommodation, transport and social events for participants, and logistical arrangements for presenters;
(e) organizing registration of participants;
(f) negotiating the type and costs of services to be provided within budget;
(g) overseeing work by contractors and reporting on variations to work orders.
Examples of the occupations classified here:
▪ Conference and event organizer
▪ Conference planner
▪ Wedding planner',
            ),
            254 => 
            array (
                'id' => '3333',
                'title' => 'Employment Agents and Contractors',
                'description' => 'Employment agents and contractors match jobseekers with vacancies, find workers for employers and contract labour for particular projects at the request of enterprises and other organizations including government and other institutions, or find places for jobseekers for a commission.
Tasks include –
(a) matching jobseekers with vacancies;
(b) finding workers for vacant posts against a commission from the employer or worker;
(c) discussing with employers the skills and other characteristics required of the workers to be employed or contracted;
(d) finding workers with appropriate skills, and undertaking the necessary formalities according to national or international regulations and requirements;
(e) ensuring that the employment contracts meet legal requirements and signing them;
(f) advising on training schemes.
Examples of the occupations classified here:
▪ Employment agent
▪ Job placement officer
▪ Labour contractor
Some related occupations classified elsewhere:
▪ Careers adviser – 2423
▪ Occupational analyst – 2423
▪ Literary agent – 3339
▪ Musical performance agent – 3339
▪ Sports agent – 3339
▪ Theatrical agent – 3339',
            ),
            255 => 
            array (
                'id' => '3334',
                'title' => 'Real Estate Agents and Property Managers',
                'description' => 'Real estate agents and property managers arrange the sale, purchase, rental and lease of real estate and property, usually on behalf of clients and on a commission basis.
Tasks include –
(a) obtaining information about properties to be sold or leased, the circumstances of their owner and the needs of prospective buyers or tenants;
(b) showing properties to be sold or leased to prospective buyers or tenants and explaining terms of sale or conditions of rent or lease;
(c) facilitating negotiations with tenants and owners on rents and fees;
(d) drawing up leasing and sale agreements and estimating costs;
(e) arranging signing of lease agreements and transfer of property rights;
(f) collecting rent and bond monies on behalf of owners and inspecting properties before, during and after tenancies;
(g) ensuring the availability of workers to perform maintenance of the properties.
Examples of the occupations classified here:
▪ Estate agent
▪ Property manager
▪ Realtor
▪ Salesperson (real estate)
Some related occupations classified elsewhere:
▪ Mortgage clerk – 4312',
            ),
            256 => 
            array (
                'id' => '3339',
                'title' => 'Business Services Agents Not Elsewhere Classified',
                'description' => 'This unit group covers business services agents not classified elsewhere in Minor Group 333: Business Services Agents. For instance, the group includes those who establish business contacts, sell business services such as advertising space in the media, arrange contracts for performances of athletes, entertainers and artists, for the publication of books, the production of plays, or the recording, performance and sale of music, sell property and goods by auction and who design and organize package and group tours.
In such cases tasks would include –
(a) obtaining information about services to be sold and needs of prospective buyers;
(b) negotiating contracts on behalf of seller or buyer and explaining terms of sale and payment to client;
(c) signing agreements on behalf of seller or buyer and ensuring that the contract is honoured;
(d) making sure that the business service purchased is made available to the buyer in the agreed format at the agreed time;
(e) selling by auction various kinds of property, cars, commodities, livestock, art, jewellery and other objects.
(f) organizing group tours for business or vacation travel and making bulk travel and accommodation bookings.
Examples of the occupations classified here:
▪ Advertising salesperson
▪ Auctioneer
▪ Literary agent
▪ Musical performance agent
▪ Sports agent
▪ Theatrical agent
▪ Tour operator',
            ),
            257 => 
            array (
                'id' => '334',
                'title' => 'Administrative and Specialized Secretaries',
                'description' => 'Administrative and specialized secretaries provide organizational, communication and documentation support services, utilizing specialized knowledge of the business activity of the organization in which they are employed. They take supervisory responsibility for office clerks in the organization.
Tasks performed usually include: coordinating, assigning and reviewing the work of clerical support workers; desktop publishing; preparing and processing legal documents and papers such as deeds, wills, affidavits and briefs; implementing and supporting the communication, documentation and internal managerial coordination activities of an organizational unit, on some occasions utilizing specialized knowledge of the business activity of the organization; scheduling and confirming meetings and appointments and communicating messages for clients; compiling, recording and reviewing legal and medical records, reports, documents and correspondence.
Occupations in this minor group are classified into the following unit groups:
3341 Office Supervisors
3342 Legal Secretaries
3343 Administrative and Executive Secretaries
3344 Medical Secretaries',
            ),
            258 => 
            array (
                'id' => '3341',
                'title' => 'Office Supervisors',
                'description' => 'Office supervisors supervise and coordinate the activities of workers in Major Group 4: Clerical Support Workers.
Tasks include –
(a) coordinating, assigning and reviewing the work of clerks engaged in the following duties: word processing, record keeping and filing, operating telephones and switchboards; data entry, desktop publishing and other activities involving general office and administrative skills;
(b) establishing work schedules and procedures and coordinating activities with other work units or departments;
(c) resolving work-related problems and preparing and submitting progress and other reports;
(d) training and instructing employees in job duties, safety procedures and company policies, or arranging for training to be provided;
(e) evaluating employees\' job performance and conformity with  regulations, and recommending appropriate personnel action;
(f) assisting in recruitment, interviewing and selection of employees.
Examples of the occupations classified here:
▪ Clerical supervisor
▪ Data entry supervisor
▪ Filing clerks supervisor
▪ Personnel clerks supervisor
Some related occupations classified elsewhere:
▪ Medical records unit supervisor – 3252
Notes
Workers who supervise the activities of clerical support workers in law offices and legal departments are classified in Unit Group 3342: Legal Secretaries. Those who supervise the activities of clerical support workers in health facilities where the work requires specialist knowledge related to health and medicine, such as processing medical records and hospital admission details, are classified in Unit Group 3344: Medical Secretaries.  Those who provide direct secretarial and administrative support to a manager or professional, (except legal and health professionals) and also supervise the activities of clerical support workers are classified in Unit Group 3343: Administrative and Executive Secretaries.',
            ),
            259 => 
            array (
                'id' => '3342',
                'title' => 'Legal Secretaries',
                'description' => 'Legal secretaries apply specialized knowledge of legal terminology and procedures in providing support to legal professionals with communication, documentation and internal managerial coordination activities, in law offices, legal departments of large firms and governments.
Tasks include –
(a) preparing and processing legal documents and papers, such as deeds, wills, affidavits and briefs;
(b) reviewing and proofreading documents and correspondence to ensure compliance with legal procedures;
(c) mailing, faxing or arranging for delivery of legal correspondence to clients, witnesses and court officials;
(d) organizing and maintaining documents, case files and law libraries;
(e) screening requests for meetings, scheduling and organizing meetings;
(f) assisting in the preparation of budgets, monitoring of expenditures, drafting of contracts and purchasing or acquisition orders;
(g) supervising the work of office support workers.
Examples of the occupations classified here:
▪ Legal practice manager
▪ Legal secretary
Some related occupations classified elsewhere:
▪ Legal assistant – 3411',
            ),
            260 => 
            array (
                'id' => '3343',
                'title' => 'Administrative and Executive Secretaries',
                'description' => 'Administrative and executive secretaries perform liaison, coordination and organizational tasks in support of managers and professionals and/or prepare correspondence, reports and records of proceedings and other specialized documentation.
Tasks include –
(a) drafting administrative correspondence and minutes;
(b) obtaining, proposing and monitoring deadlines and follow-up dates;
(c) screening requests for meetings, scheduling and organizing meetings and travel arrangements;
(d) assisting in the preparation of budgets, monitoring of expenditures, drafting of contracts and purchasing or acquisition orders;
(e) liaising with other staff about a range of matters relating to the organization\'s operations;
(f) writing and answering business or technical letters and other similar correspondence;
(g) preparing verbatim reports of proceedings in legislative assemblies, courts of law or other places, using shorthand or  specialized office equipment.
(h) supervising the work of clerical support workers.
Examples of the occupations classified here:
▪ Administrative secretary
▪ Correspondence assistant
▪ Court reporter
▪ Executive assistant
▪ Personal assistant
Some related occupations classified elsewhere:
▪ Medical transcriptionist – 3344
▪ Secretary (general) – 4120',
            ),
            261 => 
            array (
                'id' => '3344',
                'title' => 'Medical Secretaries',
                'description' => 'Medical secretaries, using specialized knowledge of medical terminology and health care delivery procedures, assist health professionals and other workers by performing a variety of communication, documentation, administrative and internal coordination functions, to support health workers in medical facilities and other health-care related organizations.
Tasks include –
(a) scheduling and confirming medical appointments and communicating messages for medical staff and patients;
(b) compiling, recording and reviewing medical charts, reports, documents and correspondence;
(c) interviewing patients to complete forms, documents and case histories;
(d) completing insurance and other claims forms;
(e) maintaining medical files and records and technical library;
(f) preparing financial statements and billing procedures;
(g) assisting in the preparation of budgets, drafting of contracts and purchasing or acquisition orders;
(h) supervising the work of office support workers and other office staff.
Examples of the occupations classified here:
▪ Dental secretary
▪ Hospital ward secretary
▪ Medical insurance billing secretary
▪ Medical office administrative assistant
▪ Medical practice manager
▪ Medical secretary
▪ Medical stenographer
▪ Medical transcriptionist
▪ Pathology secretary
▪ Patient care secretary
▪ Medical laboratory secretary
Some related occupations classified elsewhere:
▪ Medical records technician – 3252
▪ Medical assistant – 3256
▪ Secretary (general) – 4120
▪ Medical office receptionist – 4226',
            ),
            262 => 
            array (
                'id' => '335',
                'title' => 'Government Regulatory Associate Professionals',
                'description' => 'Government regulatory associate professionals administer, enforce or apply relevant government rules and regulations relating to national borders, taxes and social benefits; investigate facts and circumstances relating to crimes; and issue or examine applications for licences or authorizations in connection with travel, exports and imports of goods, establishment of businesses, erection of buildings and other activities subject to government regulations.
Tasks performed usually include:  patrolling national borders and checking persons and vehicles, travel and transport documents and goods transported across the border to ensure enforcement of government rules and  regulations; examining tax returns to determine taxes payable by persons and businesses; examining and deciding on applications for social benefits; examining and deciding on applications for government authorizations and licences necessary to travel, export or import goods, erect buildings, establish businesses or undertake other activities subject to government regulations; monitoring the application of price, wage or weights and measures regulations; obtaining and verifying evidence; interviewing witnesses and suspects; and analysing documents and computer files. They may receive guidance from senior government officials or managers. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
3351 Customs and Border Inspectors
3352 Government Tax and Excise Officials
3353 Government Social Benefits Officials
3354 Government Licensing Officials
3355 Police Inspectors and Detectives
3359 Government Regulatory Associate Professionals Not Elsewhere Classified',
            ),
            263 => 
            array (
                'id' => '3351',
                'title' => 'Customs and Border Inspectors',
                'description' => 'Customs and border inspectors check persons and vehicles crossing national borders to administer and enforce relevant government rules and regulations.
Tasks include –
(a) patrolling national borders and coastal waters to stop persons from illegally entering or leaving the country and from illegally importing or exporting currency or goods;
(b) checking travel documents of persons crossing national borders to ensure that they have the necessary authorizations and certificates;
(c) inspecting the luggage of persons crossing national borders to ensure that it conforms to government rules and regulations concerning import or export of goods and currencies;
(d) examining transport documents and freight of vehicles crossing national borders to ensure conformity with government rules and regulations concerning goods in transit and the import and export of goods, and to verify that necessary payments have been made;
(e) detaining persons and seizing prohibited and undeclared goods found to be in violation of immigration and customs laws;
(f) coordinating and cooperating with other agencies involved in law enforcement, deportation and prosecution;
(g) performing related administrative tasks to record findings, transactions, violations and determinations;
(h) when necessary, testifying in a court of law about the  circumstances and results of investigations carried out.
Examples of the occupations classified here:
▪ Border inspector
▪ Customs inspector
▪ Customs officer
▪ Immigration officer
▪ Passport checking officer',
            ),
            264 => 
            array (
                'id' => '3352',
                'title' => 'Government Tax and Excise Officials',
                'description' => 'Government tax and excise officials examine tax returns, bills of sale and other documents to determine the type and amount of taxes, duties and other types of fees to be paid by individuals or businesses, referring exceptional or important cases to accountants, senior government officials or managers.
Tasks include –
(a) advising organizations, enterprises and the public on government laws, rules and regulations concerning the determination and payment of taxes, duties and other government fees, and on the public\'s rights and obligations;
(b) examining tax returns, bills of sale and other relevant documents to determine types and amounts of taxes, duties and other types of fees to be paid;
(c) investigating filed tax returns and accounting records, systems and internal controls of organizations to ensure compliance with taxation laws and regulations;
(d) performing related administrative tasks to document findings, maintain records and report on actions taken for cases.
Examples of the occupations classified here:
▪ Excise officer
▪ Taxation inspector
▪ Tax officer
Some related occupations classified elsewhere:
▪ Accountant – 2411
▪ Auditor – 2411',
            ),
            265 => 
            array (
                'id' => '3353',
                'title' => 'Government Social Benefits Officials',
                'description' => 'Government social benefits officials examine applications for government, financial or service programmes to determine eligibility and amount of benefit or appropriate services, referring exceptional or important cases to senior government officials or managers.
Tasks include –
(a) advising individuals and organizations on government laws, rules and regulations concerning government benefit programmes and the determination and disbursement of payments or referral to services, as well as on the public\'s rights and obligations;
(b) examining applications and other relevant documents to determine types and amounts of benefit which individuals are eligible to receive;
(c) assessing documentation and interviewing benefit recipients to ensure eligibility for continuing benefits or services;
(d) performing related administrative tasks to maintain client records and prepare reports on determinations regarding eligibility, referral decisions, termination of benefits and abuse or fraud.
Examples of the occupations classified here:
▪ Pensions officer
▪ Social benefits officer
▪ Social security claims officer
Some related occupations classified elsewhere:
▪ Counselling professional – 2635
▪ Social worker – 2635',
            ),
            266 => 
            array (
                'id' => '3354',
                'title' => 'Government Licensing Officials',
                'description' => 'Government licensing officials examine applications for licences to export or import goods, set up businesses, build houses or other structures or to obtain passports, determine eligibility of applications for issuing licences or passports, and identify specific conditions or restrictions to be attached to licences issued, referring exceptional or important cases to senior government officials or managers.
Tasks include –
(a) advising individuals on government laws and regulations concerning the type of licence required and the conditions attached to such licences, and on the public\'s rights and obligations;
(b) examining applications and relevant documents and determining whether a licence can be granted and the conditions which should be attached;
(c) examining applications and approving the issue of passports;
(d) performing related administrative tasks to process applications, document activities, evaluations and determinations, and to prepare correspondence to inform applicants of licensing decisions;
(e) administering and scoring tests required to license applicants.
Examples of the occupations classified here:
▪ Building permit (licensing) officer
▪ Business permit (licensing) officer
▪ Licensing officer
▪ Passport officer (issuing)
Some related occupations classified elsewhere:
▪ Building inspector – 3112
▪ Fire inspector – 3112',
            ),
            267 => 
            array (
                'id' => '3355',
                'title' => 'Police Inspectors and Detectives',
                'description' => 'Police inspectors and detectives investigate facts and circumstances relating to crimes committed in order to identify suspected offenders and obtain information not readily available or apparent concerning establishments or the circumstances and behaviour of persons, mostly in order to prevent crimes.
Tasks include –
(a) establishing contacts and sources of information about crimes planned or committed, in order to prevent crimes or identify suspected offenders;
(b) obtaining and verifying evidence by examining crime and accident scenes for clues and physical evidence, interviewing witnesses and suspects and analysing documents and computer files;
(c) analysing evidence in order to solve crimes, identify criminal activity and gather information for court cases;
(d) establishing contacts and sources of information not readily available or apparent concerning establishments or the circumstances and behaviour of persons, usually with the aim of preventing a crime;
(e) making arrests;
(f) testifying in courts of law or reporting to superiors about circumstances and results of investigations.
Examples of the occupations classified here:
▪ Police detective
▪ Police inquiry agent
▪ Police inspector
Some related occupations classified elsewhere:
▪ Police commissioner – 1112
▪ Police inspector-general – 1112
▪ Police superintendent – 1349
▪ Private detective – 3411
▪ Police officer – 5412',
            ),
            268 => 
            array (
                'id' => '3359',
                'title' => 'Government Regulatory Associate Professionals Not Elsewhere Classified',
                'description' => 'This unit group covers government regulatory associate professionals not classified elsewhere. For instance, the group includes agricultural, fisheries, forestry, prices, wages and weights and measures inspectors.
In such cases tasks would include –
(a) examining places of business to ensure the use of correct weights and measures in trade;
(b) monitoring price regulations to assess appropriateness of costs for goods and services to protect consumer interests;
(c) monitoring wage regulations to ensure appropriate levels of pay for work performed and to assess compliance with employment standards legislation;
(d) performing related investigative and administrative tasks to record findings, document compliance problems or inappropriate business practices and to prepare reports and correspondence.
Examples of the occupations classified here:
▪ Agricultural inspector
▪ Fisheries inspector
▪ Forestry inspector
▪ Prices inspector
▪ Wage inspector
▪ Weights and measures inspector
Some related occupations classified elsewhere:
▪ Fire inspector – 3112
▪ Health inspector – 3257
▪ Occupational health and safety inspector – 3257
▪ Pollution inspector – 3257
▪ Sanitary inspector – 3257',
            ),
            269 => 
            array (
                'id' => '34',
                'title' => 'Legal, Social, Cultural and Related Associate Professionals',
                'description' => 'Legal, social, cultural and related associate professionals perform technical tasks connected with the practical application of knowledge relating to legal services, social work, culture, food preparation, sport and religion. Competent performance in most occupations in this sub-major group requires skills at the third ISCO skill level.
Tasks performed by workers in this sub-major group usually include: providing technical and practical services and support functions in legal processes and investigations, social and community assistance programmes, and religious and cultural activities; participating and adjudicating in sporting events; developing and delivering sports coaching, fitness and recreational programmes;  combining creative and technical skills in a variety of artistic, cultural and culinary activities; creating dishes and menus and overseeing the preparation of meals.
Occupations in this sub-major group are classified into the following minor groups:
341 Legal, Social and Religious Associate Professionals
342 Sports and Fitness Workers
343 Artistic, Cultural and Culinary Associate Professionals',
            ),
            270 => 
            array (
                'id' => '341',
                'title' => 'Legal, Social and Religious Associate Professionals',
                'description' => 'Legal, social and religious associate professionals provide technical and practical services and support functions in legal processes and investigations, social and community assistance programmes and religious activities.
Tasks performed usually include: assisting and supporting legal, social work and religious professionals; obtaining and analysing evidence, preparing legal documents and serving court orders; administering and implementing social assistance programmes and community services; assisting clients to deal with personal and social problems; providing practical assistance, guidance and moral support to individuals and  communities.
Occupations in this minor group are classified into the following unit groups:
3411 Legal and Related Associate Professionals
3412 Social Work Associate Professionals
3413 Religious Associate Professionals',
            ),
            271 => 
            array (
                'id' => '3411',
                'title' => 'Legal and Related Associate Professionals',
                'description' => 'Legal and related associate professionals perform support functions in courts of law or in law offices, provide services related to such legal matters as insurance contracts, the transferring of property and the granting of loans and other financial  transactions, or conduct investigations for clients.
Tasks include –
(a) documenting court proceedings and judgements;
(b) serving statements of claims, summonses, warrants, subpoenas and other court orders;
(c) maintaining order in court and hearing rooms;
(d) preparing legal documents including trial briefs, pleadings, appeals, wills and contracts, and preparing papers summarizing legal positions or setting out conditions of loans or insurance;
(e) investigating facts, assembling evidence and researching relevant statutes, decisions and other legal documents to prepare cases;
(f) advising clients on legal matters;
(g) examining documentation such as mortgages, liens, judgements, easements, contracts and maps in order to verify properties\' legal descriptions and ownership;
(h) preparing documents relating to transfer of real estate, stocks or other matters requiring formal registration;
(i) investigating possible cases of theft of goods, money or information from business establishments and of other possible cases of unlawful behaviour by customers or employees;
(j) investigating establishments or the circumstances and behaviour of persons on behalf of clients.
Examples of the occupations classified here:
▪ Bailiff
▪ Judge\'s clerk
▪ Conveyancing clerk
▪ Court clerk
▪ Justice of the peace
▪ Law clerk
▪ Legal assistant
▪ Paralegal
▪ Private detective
▪ Title searcher
Some related occupations classified elsewhere:
▪ Lawyer – 2611
▪ Judge – 2612
▪ Notary – 2619
▪ Legal secretary – 3342',
            ),
            272 => 
            array (
                'id' => '3412',
                'title' => 'Social Work Associate Professionals',
                'description' => 'Social work associate professionals administer and implement social assistance programmes and community services and assist clients to deal with personal and social problems.
Tasks include –
(a) collecting information relevant to clients\' needs and assessing their relevant skills, strengths and deficits;
(b) helping persons with disabilities or the elderly to obtain services and to improve their ability to function in society;
(c) assisting clients to identify options and develop plans of action, while providing necessary support and assistance;
(d) assisting clients to identify and access community resources including legal, medical and financial assistance, housing, employment, transportation, assistance with moves, day care and other referral services;
(e) counselling clients living in group homes and half-way houses, supervising their activities and assisting in pre-release and release planning;
(f) participating in the selection and admission of clients to appropriate programmes;
(g) providing crisis intervention and emergency shelter services;
(h) implementing life skills workshops, substance abuse treatment programmes, behaviour management programmes, youth services programmes and other community and social service programmes under the supervision of social work or health care professionals;
(i) assisting in evaluating the effectiveness of interventions and programmes by monitoring and reporting on clients\' progress;
(j) maintaining contact with other social service agencies, schools and health care providers involved with clients to provide information and obtain feedback on clients\' overall situation and progress.
Examples of the occupations classified here:
▪ Community development worker
▪ Community services worker
▪ Crisis intervention worker
▪ Disability services worker
▪ Family services worker
▪ Life skills instructor
▪ Mental health support worker
▪ Welfare support worker
▪ Women\'s shelter supervisor
▪ Youth services worker
Some related occupations classified elsewhere:
▪ Marriage counsellor – 2635
▪ Parole officer – 2635
▪ Probation officer – 2635
▪ Social worker – 2635',
            ),
            273 => 
            array (
                'id' => '3413',
                'title' => 'Religious Associate Professionals',
                'description' => 'Religious associate professionals provide support to ministers of religion or to a religious community, undertake religious works, preach and propagate the teachings of a particular religion and endeavour to improve well-being through the power of faith and spiritual advice.
Tasks include –
(a) undertaking religious works;
(b) preaching and propagating the teachings of a particular religious faith;
(c) assisting at services of public worship and religious rites;
(d) providing religious education, spiritual guidance and moral support to individuals and  communities;
(e) administering and participating in programmes to provide food, clothing and shelter to those in need;
(f) advising communities and individuals on proper behaviour and faith to preserve or improve well-being.
Examples of the occupations classified here:
▪ Faith healer
▪ Lay preacher
▪ Monk
▪ Nun
Some related occupations classified elsewhere:
▪ Bonze – 2636
▪ Imam – 2636
▪ Minister of religion – 2636
▪ Poojari – 2636
▪ Priest – 2636
▪ Rabbi – 2636
▪ Herbalist – 3230
▪ Village healer – 3230
▪ Witch doctor – 3230',
            ),
            274 => 
            array (
                'id' => '342',
                'title' => 'Sports and Fitness Workers',
                'description' => 'Sports and fitness workers prepare for and compete in sporting events for financial gain; train amateur and professional sportsmen and women to enhance performance; promote participation and standards in sport; organize and officiate sporting events; and provide instruction, training and supervision for various forms of exercise and other recreational activities.
Tasks performed usually include: participating in competitive sporting events; conducting sports training to develop ability in and knowledge of the sport; compiling rules concerning the conduct of sporting competitions, and controlling the progress of these events; planning, organizing and conducting practice sessions; developing and designing fitness programmes; delivering group exercise classes and personal tuition in a variety of fitness activities; promoting sports and sports skills development; and overseeing the participation of young people in sport.
Occupations in this minor group are classified into the following unit groups:
3421 Athletes and Sports Players
3422 Sports Coaches, Instructors and Officials
3423 Fitness and Recreation Instructors and Programme Leaders',
            ),
            275 => 
            array (
                'id' => '3421',
                'title' => 'Athletes and Sports Players',
                'description' => 'Athletes and sport players participate in competitive sporting events. They train and compete, either individually or as part of a team, in their chosen sport.
Tasks include –
(a) participating in competitive sporting events;
(b) participating in regular practice and training sessions and undertaking private training to maintain the required standard of fitness and skill;
(c) undertaking sports promotional activities and media interviews;
(d) maintaining a high degree of expertise in a particular sport;
(e) deciding on strategies in consultation with coaches;
(f) assessing other competitors and conditions at venues;
(g) competing in sporting events;
(h) adhering to the rules and regulations associated with a specific sport.
Examples of the occupations classified here:
▪ Athlete
▪ Bicycle racer
▪ Boxer
▪ Chess player
▪ Footballer
▪ Golfer
▪ Hockey player
▪ Jockey
▪ Poker player
▪ Racing driver
▪ Skier
▪ Tennis player
▪ Wrestler',
            ),
            276 => 
            array (
                'id' => '3422',
                'title' => 'Sports Coaches, Instructors and Officials',
                'description' => 'Sports coaches, instructors and officials work with amateur and professional sportspersons to enhance performance and encourage greater participation in sport, and organize and officiate in sporting events according to established rules.
Tasks include –
(a) identifying strengths and weaknesses of athletes or teams;
(b) planning, developing and implementing training and practice sessions;
(c) developing, planning and coordinating competitive schedules and programmes;
(d) motivating and preparing athletes or teams for competitive events or games;
(e) formulating competitive strategy, developing game plans and directing athletes and players during games or athletic events;
(f) analysing and evaluating athletes\' or teams\' performances and modifying training programmes;
(g) monitoring and analysing technique and performance, and determining how future improvements can be made;
(h) officiating at sporting events or athletic competitions to maintain standards of play and to ensure that game rules and safety regulations are observed;
(i) recording lapsed time and keeping score during events or competitions;
(j) judging the performance of competitors, awarding points, imposing penalties for infractions and determining results;
(k) compiling scores and other athletic records.
Examples of the occupations classified here:
▪ Referee
▪ Ski instructor
▪ Sports coach
▪ Sports official
▪ Swimming instructor
Some related occupations classified elsewhere:
▪ Fitness instructor – 3423
▪ Horse riding instructor – 3423',
            ),
            277 => 
            array (
                'id' => '3423',
                'title' => 'Fitness and Recreation Instructors and Programme Leaders',
                'description' => 'Fitness and recreation instructors and programme leaders lead, guide and instruct groups and individuals in recreational, fitness or outdoor adventure activities.
Tasks include –
(a) planning and carrying out recreational and fitness activities;
(b) monitoring recreational, sports or fitness activities to ensure safety and provide emergency or first aid assistance when required;
(c) evaluating and monitoring clients\' abilities and fitness and recommending activities;
(d) demonstrating and teaching body movements, concepts and skills used in fitness routines and recreational activities;
(e) instructing in the use of equipment;
(f) explaining and enforcing safety procedures, rules and regulations.
Examples of the occupations classified here:
▪ Aerobics instructor
▪ Fitness instructor
▪ Horse riding instructor
▪ Outdoor adventure guide
▪ Personal trainer
▪ Sailing instructor
▪ Underwater diving instructor
Some related occupations classified elsewhere:
▪ Ski instructor – 3422
▪ Swimming instructor – 3422',
            ),
            278 => 
            array (
                'id' => '343',
                'title' => 'Artistic, Cultural and Culinary Associate Professionals',
                'description' => 'Artistic, cultural and culinary associate professionals combine creative skills and technical and cultural knowledge in taking and processing still photographs; design and decoration of theatre sets, shop displays and the interiors of homes; preparation of objects for display; maintenance of library and gallery collections, records and cataloguing systems; creation of menus and preparation and presentation of food; provision of support for stage, film and television production; and in other areas of artistic and cultural endeavour.
Tasks performed usually include: operating still cameras to photograph people, events, scenes, materials, products and other subjects; applying artistic techniques to product design, interior decoration and sales promotion; mounting and preparing objects for display; designing and arranging exhibit furnishings, display cases and display areas; designing menus and overseeing the preparation of food; assisting directors and performers with the staging of theatrical, motion picture, television or commercial productions.
Occupations in this minor group are classified into the following unit groups:
3431 Photographers
3432 Interior Designers and Decorators
3433 Gallery, Museum and Library Technicians
3434 Chefs
3435 Other Artistic and Cultural Associate Professionals',
            ),
            279 => 
            array (
                'id' => '3431',
                'title' => 'Photographers',
                'description' => 'Photographers operate still cameras to photograph people, events, scenes, materials, products and other subjects.
Tasks include –
(a) taking photographs for advertising or other commercial, industrial or scientific purposes and to illustrate stories and articles in newspapers, magazines and other publications;
(b) taking portrait photographs of persons and groups of persons;
(c) studying requirements of a particular assignment and decide on type of camera, film, lighting and background accessories to be used;
(d) determining picture composition, making technical adjustments to equipment and photograph subject;
(e) operating scanners to transfer photographic images to computers;
(f) operating computers to manipulate photographic images;
(g) adapting existing photographic images to create new digitized images to be included in multimedia products;
(h) using airbrush, computer or other techniques to create the desired visual effect.
Examples of the occupations classified here:
▪ Aerial photographer
▪ Commercial photographer
▪ Industrial photographer
▪ Photojournalist
▪ Photographer
▪ Portrait photographer
▪ Scientific photographer
Some related occupations classified elsewhere:
▪ Film camera operator – 3521
▪ Video camera operator – 3521
▪ Photographic equipment repairer – 7311
▪ Photogravure photographer – 7321
▪ Photolithographer – 7321
▪ Electronics mechanic – 7421',
            ),
            280 => 
            array (
                'id' => '3432',
                'title' => 'Interior Designers and Decorators',
                'description' => 'Interior designers and decorators plan and design commercial, industrial, public, retail and residential building interiors to produce an environment tailored to a purpose, taking into consideration factors that enhance living and working environments and sales promotion. They coordinate and participate in their construction and decoration.
Tasks include –
(a) determining the objectives and constraints of the design brief by consulting with clients and stakeholders;
(b) researching and analysing spatial, functional, efficiency, safety and aesthetic requirements;
(c) formulating design concepts for the interiors of buildings;
(d) preparing sketches, diagrams, illustrations and plans to communicate design concepts;
(e) negotiating design solutions with clients, management, suppliers and construction staff;
(f) selecting, specifying and recommending functional and aesthetic materials, furniture and products for interiors;
(g) detailing and documenting selected design for construction;
(h) coordinating the construction and the decoration of interiors;
(i) designing and painting stage scenery;
(j) designing and decorating show windows and other display areas to promote products and services.
Examples of the occupations classified here:
▪ Display decorator
▪ Interior decorator
▪ Set designer
▪ Visual merchandiser
▪ Window dresser
Some related occupations classified elsewhere:
▪ Interior architect – 2161',
            ),
            281 => 
            array (
                'id' => '3433',
                'title' => 'Gallery, Museum and Library Technicians',
                'description' => 'Gallery, museum and library technicians prepare artworks, specimens and artefacts for collections, arrange and construct gallery exhibits, and assist librarians to organize and operate systems for handling recorded material and files.
Tasks include –
(a) mounting and preparing objects for display;
(b) designing and arranging exhibit furnishings, display cases and display areas;
(c) assisting in setting up lighting and display equipment;
(d) receiving, shipping, packing and unpacking exhibits;
(e) ordering new library materials and maintaining library records and circulation systems;
(f) cataloguing printed and recorded material;
(g) entering data into databases and editing computer records;
(h) operating audiovisual and reprographic equipment;
(i) searching and verifying bibliographic data.
Examples of the occupations classified here:
▪ Gallery technician
▪ Library technician
▪ Museum technician
▪ Taxidermist',
            ),
            282 => 
            array (
                'id' => '3434',
                'title' => 'Chefs',
                'description' => 'Chefs design menus, create dishes and oversee the planning, organization, preparation and cooking of meals in hotels, restaurants and other eating places, on board ships, on passenger trains and in private households.
Tasks include –
(a) planning and developing recipes and menus, estimating food and labour costs, and ordering food supplies;
(b) monitoring quality of dishes at all stages of preparation and presentation;
(c) discussing food preparation issues with managers, dieticians, kitchen and waiting staff;
(d) supervising and coordinating the activities of cooks and other workers engaged in food preparation;
(e) inspecting supplies, equipment and work areas to ensure conformity with established standards;
(f) determining how food should be presented, and creating decorative food displays;
(g) instructing cooks and other workers in the preparation, cooking, garnishing and presentation of food;
(h) participating in the recruitment of kitchen staff and monitoring their performance;
(i) preparing, seasoning and cooking speciality foods and complex dishes;
(j) explaining and enforcing hygiene and food safety regulations.
Examples of the occupations classified here:
▪ Chef
▪ Executive chef
▪ Head chef
▪ Pastry chef
▪ Saucier
▪ Sous-chef
Some related occupations classified elsewhere:
▪ Cook – 5120
▪ Fast food preparer – 9411',
            ),
            283 => 
            array (
                'id' => '3435',
                'title' => 'Other Artistic and Cultural Associate Professionals',
                'description' => 'This unit group covers artistic and cultural associate professionals not classified elsewhere in Minor Group 343: Artistic, Cultural and Culinary Associate Professionals. For instance, those who assist directors or actors with staging of theatrical, motion picture, television or commercial productions are classified here.
Examples of the occupations classified here:
▪ Body artist
▪ Floor manager (broadcasting)
▪ Lighting technician
▪ Programme coordinator  (broadcasting)
▪ Prompter
▪ Property master (broadcasting)
▪ Script-girl/boy
▪ Special effects technician
▪ Stage manager
▪ Stage technician
▪ Stunt artist
▪ Stunt coordinator
▪ Tattooist
▪ Theatre technician
▪ Theatrical dresser
▪ Walker-on',
            ),
            284 => 
            array (
                'id' => '35',
                'title' => 'Information and Communications Technicians',
                'description' => 'Information and communications technicians provide support for the day-to-day running of computer systems, communications systems and networks, and perform technical tasks related to telecommunications, broadcast image and sound as well as other types of telecommunications signals on land, sea or in aircraft. Competent performance in most occupations in this sub-major group requires skills at the third ISCO skill level.
Tasks performed by workers in this sub-major group usually include: providing assistance to information and communications systems users; installing new programs and equipment; establishing, operating and maintaining network and other data communications systems; installing, monitoring and supporting Internet and Intranet websites or web server hardware or software; modifying web pages; and performing web server backup and recovery operations; controlling equipment to record sound, edit and mix image and sound recordings; controlling and maintaining transmitting and broadcast systems and satellite systems for radio and television programmes; controlling and maintaining radio communications systems, satellite services and multiplex systems on land, sea or in aircraft; providing technical assistance connected with research and development of computer systems and telecommunications equipment, or testing prototypes; designing and preparing blueprints of circuitry according to the specifications given; providing technical supervision of the manufacture, utilization, maintenance and repair of telecommunications systems.
Occupations in this sub-major group are classified into the following minor groups:
351 Information and Communications Technology Operations and User Support Technicians
352 Telecommunications and Broadcasting Technicians',
            ),
            285 => 
            array (
                'id' => '351',
                'title' => 'Information and Communications Technology Operations and User Support Technicians',
                'description' => 'Information technology operations and user support technicians provide support for the day-to-day running of communications systems, computer systems and networks, and provide technical assistance to users
Tasks performed usually include: operating and controlling peripheral and related computer equipment; monitoring systems for equipment failure or errors in performance; loading peripheral equipment, such as printers, with selected materials for operating runs, or overseeing loading of peripheral equipment by peripheral equipment operators; answering user inquiries regarding software or hardware operation to resolve problems; installing and performing minor repairs to hardware, software, or peripheral equipment, following design or installation specifications; overseeing the daily performance of systems; setting up equipment for employee use, performing or ensuring proper installation of cables, operating systems, or appropriate software; establishing, operating and maintaining network and other data communications systems; installing, monitoring and supporting the reliability and usability of Internet and Intranet websites or web server hardware or software; modifying web pages; and performing web server backup and recovery operations.
Occupations in this minor group are classified into the following unit groups:
3511 Information and Communications Technology Operations Technicians
3512 Information and Communications Technology User Support Technicians
3513 Computer Network and Systems Technicians
3514 Web Technicians',
            ),
            286 => 
            array (
                'id' => '3511',
                'title' => 'Information and Communications Technology Operations Technicians',
                'description' => 'Information and communications technology operations technicians support the day-to-day processing, operation and monitoring of information and communications technology systems, peripherals, hardware, software and related computer equipment to ensure optimal performance and identify any problems.
Tasks include –
(a) operating and controlling peripheral and related computer equipment;
(b) entering commands, using computer terminals, and activating controls on computer and peripheral equipment to integrate and operate equipment;
(c) monitoring systems for equipment failure or errors in performance;
(d) notifying supervisors or maintenance technicians of equipment malfunctions;
(e) responding to program error messages by finding and correcting problems, escalating the problem to other staff or terminating the program;
(f) reading job set-up instructions to determine equipment to be used, order of use, material such as disks and paper to be loaded, and to control settings;
(g) retrieving, separating and sorting program output as needed, and sending data to specified users;
(h) loading peripheral equipment, such as printers, with selected materials for operating runs, or overseeing loading of peripheral equipment by peripheral equipment operators.
Examples of the occupations classified here:
▪ Computer operator
▪ Computer peripheral equipment operator
▪ High-speed computer printer operator
Some related occupations classified elsewhere:
▪ Computer network technician – 3513',
            ),
            287 => 
            array (
                'id' => '3512',
                'title' => 'Information and Communications Technology User Support Technicians',
                'description' => 'Information and communications technology user support technicians provide technical assistance to  users, either directly or by telephone, email or other electronic means, including diagnosing and resolving issues and problems with software, hardware, computer peripheral equipment, networks, databases and the Internet, and providing guidance and support in the deployment, installation and maintenance of systems.
Tasks include –
(a) answering user inquiries regarding software or hardware operation to resolve problems;
(b) entering commands and observing system functioning to verify correct operations and detect errors;
(c) installing and performing minor repairs to hardware, software or peripheral equipment, following design or installation specifications;
(d) overseeing the daily performance of communications and computer systems;
(e) setting up equipment for employee use and performing or ensuring proper installation of cables, operating systems or appropriate software;
(f) maintaining records of daily data communication transactions, problems and remedial actions taken, or installation activities;
(g) emulating or reproducing technical problems encountered by users;
(h) consulting user guides, technical manuals and other documents to research and implement solutions;
(i) assisting applications programmers, systems developers and other ICT professionals to develop and test ICT products and services.
Examples of the occupations classified here:
▪ Communications assistant (ICT)
▪ Computer database assistant
▪ Computer help desk operator
▪ Computer programming assistant
▪ Computer systems analysis assistant',
            ),
            288 => 
            array (
                'id' => '3513',
                'title' => 'Computer Network and Systems Technicians',
                'description' => 'Computer network and systems technicians establish, operate and maintain network and other data communications systems.
Tasks include –
(a) operating, maintaining and troubleshooting network systems;
(b) operating and maintaining data communications systems other than networks;
(c) assisting users with network and data communications problems;
(d) identifying areas needing upgraded equipment and software;
(e) installing computer hardware, network software, operating system software and applications software;
(f) performing start up and close down as well as backup and disaster recovery operations for computer networks.
Examples of the occupations classified here:
▪ Computer network technician
▪ Network support technician
Some related occupations classified elsewhere:
▪ Network administrator – 2522
▪ Network analyst – 2523
▪ Computer operator – 3511
▪ Web technician – 3514',
            ),
            289 => 
            array (
                'id' => '3514',
                'title' => 'Web Technicians',
                'description' => 'Web technicians maintain, monitor and support the optimal functioning of Internet and Intranet websites and web server hardware and software.
Tasks include –
(a) installing, monitoring and supporting the reliability and usability of Internet and Intranet websites or web server hardware or software;
(b) developing and maintaining documentation, policies and instructions, recording operational procedures and system logs;
(c) developing, coordinating, implementing and monitoring security measures;
(d) analysing and making recommendations to enhance performance, including upgrading and acquiring new systems;
(e) liaising with, and providing guidance to, clients and users;
(f) creating and modifying web pages;
(g) performing web server backup and recovery operations.
Examples of the occupations classified here:
▪ Webmaster
▪ Website administrator
▪ Website technician
Some related occupations classified elsewhere:
▪ Computer games designer – 2166
▪ Website designer – 2166
▪ Systems analyst (computers) – 2511
▪ Computer software designer – 2512
▪ Website developer – 2513
▪ Computer systems administrator – 2522
▪ Network administrator – 2522',
            ),
            290 => 
            array (
                'id' => '352',
                'title' => 'Telecommunications and Broadcasting Technicians',
                'description' => 'Telecommunications and broadcasting technicians control technical functioning of equipment to record and edit images and sound and for transmitting radio and television broadcasts of images and sounds, as well as other types of telecommunication signals on land, sea or in aircraft; perform technical tasks connected with telecommunications engineering research and with the design, manufacture, assembly, construction, operation, maintenance and repair of telecommunications systems.
Tasks performed usually include: controlling equipment to record sound, edit and mix image and sound recordings; controlling and maintaining transmitting and broadcast systems and satellite systems for radio and television programmes; controlling and maintaining radio communications systems, satellite services and multiplex systems on land, sea or in aircraft; providing technical assistance connected with research and the development of telecommunications equipment, or testing prototypes; designing and preparing blueprints of circuitry according to the specifications given; providing technical supervision of the manufacture, utilization, maintenance and repair of telecommunications systems.
Occupations in this minor group are classified into the following unit groups:
3521 Broadcasting and Audiovisual Technicians
3522 Telecommunications Engineering Technicians',
            ),
            291 => 
            array (
                'id' => '3521',
                'title' => 'Broadcasting and Audiovisual Technicians',
                'description' => 'Broadcasting and audiovisual technicians control technical functioning of equipment to record and edit images and sound and for transmitting radio and television broadcasts of images and sounds, as well as other types of telecommunication signals on land, sea or in aircraft.
Tasks include –
(a) controlling equipment to record sound;
(b) controlling equipment to edit and mix image and sound recordings to ensure satisfactory quality and to create special image and sound effects;
(c) applying knowledge of principles and practices of image and sound recording and editing in order to identify and solve problems;
(d) controlling transmitting and broadcast systems and satellite systems for radio and television programmes;
(e) controlling radio communications systems, satellite services and multiplex systems on land, sea or in aircraft;
(f) applying knowledge of principles and practices of broadcasting, telecommunications terminals and transmissions systems in order to identify and solve problems;
(g) making emergency repairs to equipment.
Examples of the occupations classified here:
▪ Audiovisual operator
▪ Broadcasting equipment operator
▪ Broadcasting technician
▪ Camera operator (motion picture)
▪ Camera operator (video)
▪ Production assistant (media)
Some related occupations classified elsewhere:
▪ Photographer – 3431',
            ),
            292 => 
            array (
                'id' => '3522',
                'title' => 'Telecommunications Engineering Technicians',
                'description' => 'Telecommunications engineering technicians perform technical tasks connected with telecommunications engineering research, as well as with the design, manufacture, assembly, construction, operation, maintenance and repair of telecommunications systems.
Tasks include –
(a) providing technical assistance connected with research and the development of telecommunications equipment, or testing prototypes;
(b) studying technical material such as blueprints and sketches to determine the method of work to be adopted;
(c) preparing detailed estimates of quantities and costs of materials and labour required for the manufacture and installation of telecommunications equipment, according to the specifications given;
(d) providing technical supervision of the manufacture, utilization, maintenance and repair of telecommunications systems to ensure satisfactory performance and compliance with specifications and regulations;
(e) applying technical knowledge of telecommunications engineering principles and practices in order to identify and solve problems arising in the course of their work.
Examples of the occupations classified here:
▪ Engineering technician (telecommunications)
Some related occupations classified elsewhere:
▪ Engineering technician (electronics) – 3114
▪ Computer hardware installer – 7422
▪ Telecommunications equipment repairer – 7422
▪ Telephone installer – 7422',
            ),
            293 => 
            array (
                'id' => '4',
                'title' => 'Clerical Support Workers',
                'description' => 'Clerical support workers record, organize, store, compute and retrieve information, and perform a number of clerical duties in connection with money-handling operations, travel arrangements, requests for information, and appointments.  Competent performance in most occupations in this major group requires skills at the second ISCO skill level.
Tasks performed by clerical support workers usually include: stenography, typing, and operating word processors and other office machines; entering data into computers; carrying out secretarial duties; recording and computing numerical data; keeping records relating to stocks, production and transport; keeping records relating to passenger and freight transport; carrying out clerical duties in libraries; filing documents; carrying out duties in connection with  mail services; preparing and checking material for printing; assisting persons who cannot read or write with correspondence; performing money-handling operations; dealing with travel arrangements; supplying information requested by clients and making appointments; operating a telephone switchboard.  Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
41 General and Keyboard Clerks
42 Customer Services Clerks
43 Numerical and Material Recording Clerks
44 Other Clerical Support Workers',
            ),
            294 => 
            array (
                'id' => '41',
                'title' => 'General and Keyboard Clerks',
                'description' => 'General and keyboard clerks record, organize, store and retrieve information and perform a wide range of clerical and administrative tasks according to established procedures. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: recording, preparing, sorting, classifying and filing information; sorting, opening and sending mail; preparing reports and correspondence of a routine nature; photocopying and faxing documents; operating personal computers, word processors or typewriters to record, input and process text and data; proofreading and correcting copy; preparing invoices and checking figures.
Occupations in this sub-major group are classified into the following minor groups:
411 General Office Clerks
412 Secretaries (general)
413 Keyboard Operators',
            ),
            295 => 
            array (
                'id' => '411',
                'title' => 'General Office Clerks',
                'description' => 'General office clerks perform a range of clerical and administrative tasks according to established procedures.
Tasks performed usually include: recording, preparing, sorting, classifying and filing information; sorting, opening and sending mail; photocopying and faxing documents; preparing reports and  correspondence of a routine nature; recording issue of equipment to staff; responding to telephone or electronic inquiries or forwarding to appropriate persons; checking figures, preparing invoices and recording details of financial transactions made; transcribing information onto computers, and proofreading and correcting copy.
Occupations in this minor group are classified into the following unit group:
4110 General Office Clerks',
            ),
            296 => 
            array (
                'id' => '4110',
                'title' => 'General Office Clerks',
                'description' => 'General office clerks perform a range of clerical and administrative tasks according to established procedures.
Tasks include –
(a) recording, preparing, sorting, classifying and filing information;
(b) sorting, opening and sending mail;
(c) photocopying and faxing documents;
(d) preparing reports and correspondence of a routine nature;
(e) recording issue of equipment to staff;
(f) responding to telephone or electronic inquiries or forwarding to appropriate person;
(g) checking figures, preparing invoices and recording details of financial transactions made;
(h) transcribing information onto computers, and proofreading and correcting copy.
Examples of the occupations classified here:
▪ General office clerk
▪ Office clerk
Note
In distinguishing the work of general office clerks from that of workers classified in Unit Group 4120: Secretaries (general), it should be noted that the work of secretaries is primarily concerned with the transcription, formatting and processing of correspondence and other documentation.  Whilst general office clerks may perform some work of this nature, the transcription and processing of documentation is not the main focus of the work.',
            ),
            297 => 
            array (
                'id' => '412',
            'title' => 'Secretaries (general)',
            'description' => 'Secretaries (general) use typewriters, personal computers or other word processing equipment to transcribe correspondence and other documents, check and format documents prepared by other staff, deal with incoming and outgoing mail, screen requests for meetings or appointments, and perform a variety of administrative support tasks.
Tasks performed usually include: checking, formatting and transcribing correspondence, minutes and reports from dictation, electronic documents or written drafts to conform to office standards, using typewriters, personal computers or other word processing equipment; using various computer software packages, including spreadsheets, to provide administrative support; dealing with incoming or outgoing mail; scanning, recording and distributing mail, correspondence and other documents; screening requests for meetings or appointments and helping to organize meetings; screening and recording staff members\' leave and other entitlements; organizing and supervising filing systems; dealing with routine correspondence on their own initiative.
Occupations in this minor group are classified into the following unit group:
4120 Secretaries (general)',
            ),
            298 => 
            array (
                'id' => '4120',
            'title' => 'Secretaries (general)',
            'description' => 'Secretaries (general) use typewriters, personal computers or other word processing equipment to transcribe correspondence and other documents, check and format documents prepared by other staff, deal with incoming and outgoing mail, screen requests for meetings or appointments, and perform a variety of administrative support tasks.
Tasks include –
(a) checking, formatting and transcribing correspondence, minutes and reports from dictation, electronic documents or written drafts to conform to office standards, using typewriter, personal computer or other word processing equipment;
(b) using various computer software packages including spreadsheets to provide administrative support;
(c) dealing with incoming or outgoing mail;
(d) scanning, recording and distributing mail, correspondence and other documents;
(e) screening requests for meetings or appointments and helping to organize meetings;
(f) screening and recording staff members\' leave and other entitlements;
(g) organizing and supervising filing systems;
(h) dealing with routine correspondence on their own initiative.
Examples of the occupations classified here:
▪ Secretary
▪ Typing secretary
▪ Word processing secretary
Some related occupations classified elsewhere:
▪ Administrative secretary – 3343
▪ Executive assistant – 3343
▪ Legal secretary – 3342
▪ Medical secretary – 3344',
            ),
            299 => 
            array (
                'id' => '413',
                'title' => 'Keyboard Operators',
                'description' => 'Keyboard operators input and process text and data, and prepare, edit and generate documents for storage, processing, publication and transmission.
Tasks performed usually include: entering data and codes required to process information; retrieving, confirming and updating data in storage and keeping records of data input; taking records of proceedings in rapid shorthand using computerized equipment and shorthand-writing machines; transcribing information recorded in shorthand and on sound recording equipment, and proofreading and correcting copy; reproducing the spoken word, environmental sounds and song lyrics as captions for cinema and television programming.
Occupations in this minor group are classified into the following unit groups:
4131 Typists and Word Processing Operators
4132 Data Entry Clerks',
            ),
            300 => 
            array (
                'id' => '4131',
                'title' => 'Typists and Word Processing Operators',
                'description' => 'Typists and word processing operators type, edit and print text using typewriters, personal computers or other word processors, and record oral or written matter in shorthand.
Tasks include –
(a) typing written material from rough drafts, corrected copies, voice recordings or shorthand using a computer, word processor or typewriter;
(b) checking completed work for proper spelling, grammar, punctuation and formatting;
(c) gathering and arranging the material to be typed, following instructions;
(d) filing and storing completed documents on computer hard drive or disk, or maintaining a computer filing system to store, retrieve or update documents;
(e) taking dictation and recording other matter in shorthand;
(f) reproducing the spoken word, environmental sounds and song lyrics as captions for cinema and television programming;
(g) transcribing information recorded in shorthand and on sound recording equipment.
Examples of the occupations classified here:
▪ Shorthand typist
▪ Stenographer
▪ Typist
▪ Word processor
Some related occupations classified elsewhere:
▪ Court reporter – 3343
▪ Medical transcriptionist – 3344',
            ),
            301 => 
            array (
                'id' => '4132',
                'title' => 'Data Entry Clerks',
                'description' => 'Data entry clerks enter coded, statistical, financial and other numerical data into electronic equipment, computerized databases, spreadsheets or other data repositories using a keyboard, mouse, or optical scanner, speech recognition software or other data entry tools. They enter data into mechanical and electronic devices to perform mathematical calculations.
Tasks include –
(a) receiving and registering invoices, forms, records and other documents for data capture;
(b) entering numerical data, codes and text from source material into computer-compatible storage and processing devices;
(c) verifying accuracy and completeness of data and correcting entered data, if needed;
(d) operating bookkeeping and calculating machines;
(e) importing and exporting data between different database systems and software.
Examples of the occupations classified here:
▪ Data entry operator
▪ Data input clerk
▪ Payment entry clerk',
            ),
            302 => 
            array (
                'id' => '42',
                'title' => 'Customer Services Clerks',
                'description' => 'Customer services clerks deal with clients in connection with money-handling operations, travel arrangements, requests for information, making appointments, operating telephone switchboards, and interviewing for surveys or to complete applications for eligibility for services. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: performing money-handling operations in banks, post offices, betting and gambling establishments, or dealing with travel arrangements; supplying information requested by clients and making appointments; operating telephone switchboards; greeting and receiving visitors; interviewing survey respondents; interviewing applicants for services.
Occupations in this sub-major group are classified into the following minor groups:
421 Tellers, Money Collectors and Related Clerks
422 Client Information Workers',
            ),
            303 => 
            array (
                'id' => '421',
                'title' => 'Tellers, Money Collectors and Related Clerks',
                'description' => 'Tellers, money collectors and related clerks perform money-handling operations in establishments relating to banking, postal services, betting or gambling, pawning and debt collecting.
Tasks performed usually include: dealing with clients of banks or post offices in connection with money operations or postal services; receiving and paying off bets on results of sporting events; conducting gambling games; lending money against articles deposited or other securities; collecting debts and other payments.
Occupations in this minor group are classified into the following unit groups:
4211 Bank Tellers and Related Clerks
4212 Bookmakers, Croupiers and Related Gaming Workers
4213 Pawnbrokers and Money-lenders
4214 Debt Collectors and Related Workers',
            ),
            304 => 
            array (
                'id' => '4211',
                'title' => 'Bank Tellers and Related Clerks',
                'description' => 'Bank tellers and related clerks deal directly with clients of banks or post offices in connection with receiving, changing and paying out money, or providing mail services.
Tasks include –
(a) processing customer cash deposits and withdrawals, cheques, transfers, bills, credit card payments, money orders, certified cheques and other related banking transactions;
(b) crediting and debiting clients\' accounts;
(c) paying bills and making money transfers on clients\' behalf;
(d) receiving mail, selling postage stamps and conducting other post office counter business such as bill payments, money transfers and related business;
(e) changing money from one currency to another, as requested by clients;
(f) making records of all transactions and reconciling them with cash balance.
Examples of the occupations classified here:
▪ Bank teller
▪ Money changer
▪ Post office counter clerk
Some related occupations classified elsewhere:
▪ Cashier – 5230',
            ),
            305 => 
            array (
                'id' => '4212',
                'title' => 'Bookmakers, Croupiers and Related Gaming Workers',
                'description' => 'Bookmakers and croupiers and related gaming workers determine odds and receive and pay off bets on results of sporting or other events, or conduct games of chance in gambling establishments.
Tasks include –
(a) determining risks to decide odds and to hedge or refuse bets;
(b) preparing and issuing lists of approximate odds;
(c) distributing cards, rolling dice or spinning a roulette wheel:
(d) explaining and interpreting operating rules of a gambling establishment;
(e) announcing winning numbers, paying winners and collecting payments from losers;
Examples of the occupations classified here:
▪ Bookmaker
▪ Croupier',
            ),
            306 => 
            array (
                'id' => '4213',
                'title' => 'Pawnbrokers and Money-lenders',
                'description' => 'Pawnbrokers and money-lenders lend money against articles deposited as pledges, or against property or other security.
Tasks include –
(a) evaluating articles offered as pledges, calculating interest, and lending money;
(b) returning articles when the loan is paid or, in the event of non-payment, selling pledged articles;
(c) lending money as personal loans against success of future harvest and other similar undertakings;
(d) collecting loans when the pledge involved the success of future harvest and other similar undertakings;
(e) keeping a record of items received and money distributed and received.;
Examples of the occupations classified here:
▪ Money-lender
▪ Pawnbroker',
            ),
            307 => 
            array (
                'id' => '4214',
                'title' => 'Debt Collectors and Related Workers',
                'description' => 'Debt collectors and related workers collect payments on overdue accounts and bad cheques and collect charity payments.
Tasks include –
(a) tracing and locating debtors;
(b) telephoning, visiting or writing to customers to collect money or arrange for later payments;
(c) preparing reports including amounts collected, and maintaining records and files related to collection work;
(d) recommending legal action or discontinuation of service when payment cannot be otherwise obtained;
(e) asking for and collecting charity payments.
Examples of the occupations classified here:
▪ Bill and account collector
▪ Charity collector
▪ Debt collector',
            ),
            308 => 
            array (
                'id' => '422',
                'title' => 'Client Information Workers',
                'description' => 'Client information workers provide or obtain information in person, by telephone or electronic means such as email in connection with making travel arrangements, describing the products or services of an organization, registering and greeting guests and visitors, making appointments, connecting telephone calls and collecting information from survey respondents or applicants for services.
Tasks performed usually include: preparing itineraries and making travel and hotel reservations for clients; greeting and receiving clients and visitors; registering accommodation guests; providing information concerning the goods, services or policies of an organization; making appointments; operating a telephone switchboard; interviewing survey respondents and applicants for eligibility.
Occupations in this minor group are classified into the following unit groups:
4221 Travel Consultants and Clerks
4222 Contact Centre Information Clerks
4223 Telephone Switchboard Operators
4224 Hotel Receptionists
4225 Inquiry Clerks
4226 Receptionists (general)
4227 Survey and Market Research Interviewers
4229 Client Information Workers Not Elsewhere Classified',
            ),
            309 => 
            array (
                'id' => '4221',
                'title' => 'Travel Consultants and Clerks',
                'description' => 'Travel consultants and clerks provide information about travel destinations, arrange travel itineraries, obtain travel and accommodation reservations and register passengers at check-in and departure.
Tasks include –
(a) obtaining information about the availability, cost and convenience of different types of transport and accommodation, ascertaining customers\' requirements and advising them on travel arrangements;
(b) providing information about local and regional attractions, sightseeing tours, restaurants, arts and entertainment, and providing maps and brochures;
(c) preparing itineraries;
(d) making and confirming reservations for travel, tours and accommodation;
(e) issuing tickets, boarding passes and vouchers;
(f) helping customers in obtaining necessary travel documents such as visas;
(g) verifying travel documentation and registering passengers and luggage at check-in and departure;
(h) preparing bills and receiving payments;
Examples of the occupations classified here:
▪ Airline ticket agent
▪ Check-in attendant
▪ Ticket issuing clerk (travel)
▪ Travel agency clerk
▪ Travel consultant
▪ Travel desk clerk
▪ Tourism information clerk
Some related occupations classified elsewhere:
▪ Travel agency manager – 1439
▪ Conference and event planner – 3332
▪ Tour operator – 3339
▪ Tour escort – 5113
▪ Tourist guide – 5113
▪ Ticket issuing clerk (entertainment and sporting events) – 5230',
            ),
            310 => 
            array (
                'id' => '4222',
                'title' => 'Contact Centre Information Clerks',
                'description' => 'Contact centre information clerks provide advice and information to clients, respond to queries regarding a company\'s or an organization\'s goods, services or policies, and process financial transactions using the telephone or electronic communications media such as email. They are located in premises that may be remote from clients or other operations of the organizations or companies about whom information is provided.
Tasks include –
(a) dealing with incoming calls and messages from clients, whether to answer queries, handle calls for service or sort out complaints;
(b) identifying requirements and entering events into a computer system;
(c) dispatching tasks to other units, when relevant;
(d) invoicing or handling payments, where necessary;
(e) sending letters, information sheets and other documents to clients;
(f) advising clients of additional products or services.
Example of the occupations classified here:
▪ Customer contact centre information clerk
Some related occupations classified elsewhere:
▪ Telephone operator – 4223
▪ Market research interviewer – 4227
▪ Call centre salesperson – 5244
▪ Customer contact centre salesperson – 5244
▪ Telemarketing salesperson – 5244
Note
Only workers who respond to requests for information and/or handle straightforward transactions are classified in Unit Group 4222: Contact Centre Information Clerks. Those who provide specialized services, such as travel consultants, are classified in the relevant specialized group whether or not they are located in customer contact centres.',
            ),
            311 => 
            array (
                'id' => '4223',
                'title' => 'Telephone Switchboard Operators',
                'description' => 'Telephone switchboard operators operate telephone communications switchboards and consoles to establish telephone connections, receive caller inquiries, service problem reports, and record and relay messages to staff or clients.
Tasks include –
(a) operating switchboards and consoles to connect, hold, transfer and disconnect telephone calls;
(b) making connections for outgoing calls;
(c) dealing with telephone inquiries and recording messages;
(d) forwarding messages to staff or clients;
(e) investigating operating system problems and informing repair services.
Examples of the occupations classified here:
▪ Answering service operator
▪ Telephone switchboard operator',
            ),
            312 => 
            array (
                'id' => '4224',
                'title' => 'Hotel Receptionists',
                'description' => 'Hotel receptionists welcome and register guests in hotels and other establishments that provide accommodation services. They assign rooms, issue keys, provide information concerning the services provided, make room reservations, keep a record of rooms available for occupancy, present statements of charges to departing guests and receive payment.
Tasks include –
(a) maintaining an inventory of rooms available for occupancy, reservations and room assignments;
(b) registering arriving guests, assigning rooms, verifying customers\' credit and issuing room keys;
(c) providing information regarding hotel services and services available in the community;
(d) providing information about availability of accommodation and making room reservations;
(e) responding to guests\' requests for housekeeping and maintenance services as well as to complaints;
(f) contacting housekeeping or maintenance services when guests report problems;
(g) compiling and checking guest accounts for charges using computerized or manual systems;
(h) receiving and forwarding messages in person or using telephones or telephone switchboards;
(i) reviewing statements of charges to departing guests and receiving payment.
Examples of the occupations classified here:
▪ Hotel front desk clerk
▪ Hotel receptionist',
            ),
            313 => 
            array (
                'id' => '4225',
                'title' => 'Inquiry Clerks',
                'description' => 'Inquiry clerks respond to personal, written and electronic mail as well as telephone inquiries and complaints about the organization\'s goods, services and policies, provide information and refer people to other sources. They are employed in locations which put them in direct contact with clients or with the production of the goods and services provided.
Tasks include –
(a) answering inquiries about goods, services and policy and providing information about their availability, location, price and related issues;
(b) responding to inquiries about problems and providing advice, information and assistance;
(c) recording information about inquiries and complaints;
(d) referring complex inquiries to team leaders or expert advisers;
(e) issuing relevant forms, information kits and brochures to interested parties.
Examples of the occupations classified here:
▪ Counter inquiries clerk
▪ Information clerk',
            ),
            314 => 
            array (
                'id' => '4226',
            'title' => 'Receptionists (general)',
            'description' => 'Receptionists (general) receive and welcome visitors, clients, or guests and respond to inquiries and requests including arranging for appointments.
Tasks include –
(a) receiving and welcoming visitors, guests or clients;
(b) making appointments for clients;
(c) dealing with telephone requests for information or appointments;
(d) directing clients to appropriate location or person;
(e) supplying information pamphlets, brochures or forms.
Examples of the occupations classified here:
▪ Medical office receptionist
▪ Receptionist
Some related occupations classified elsewhere:
▪ Medical secretary – 3344
▪ Hotel receptionist – 4224',
            ),
            315 => 
            array (
                'id' => '4227',
                'title' => 'Survey and Market Research Interviewers',
                'description' => 'Survey and market research interviewers interview people and record their responses to survey and market research questions on a range of topics.
Tasks include –
(a) contacting individuals by telephone or in person and explaining the purpose of the interview;
(b) asking questions following the outlines of questionnaires and surveys;
(c) recording responses on paper or entering responses directly into a computer database through computer-assisted interviewing systems;
(d) identifying and resolving inconsistencies in responses;
(e) providing feedback to survey sponsors concerning problems in obtaining valid data.
Examples of the occupations classified here:
▪ Market research interviewer
▪ Public opinion interviewer
▪ Survey interviewer',
            ),
            316 => 
            array (
                'id' => '4229',
                'title' => 'Client Information Workers Not Elsewhere Classified',
                'description' => 'This unit group includes client information workers not included elsewhere in Minor Group 422: Client Information Workers. For instance, it includes workers who obtain and process information from clients needed to determine eligibility for services.
In such cases tasks would include –
(a) interviewing patients to obtain and process information required to provide hospital services;
(b) interviewing applicants for public assistance to gather information pertinent to their application;
(c) verifying the accuracy of information provided;
(d) initiating procedures to grant, modify, deny or terminate assistance;
(e) providing information and answering questions concerning benefits and claims procedures;
(f) referring patients or applicants to other organizations if they are ineligible for services.
Examples of the occupations classified here:
▪ Eligibility interviewer
▪ Eligibility specialist
▪ Hospital admissions clerk',
            ),
            317 => 
            array (
                'id' => '43',
                'title' => 'Numerical and Material Recording Clerks',
                'description' => 'Numerical and material recording clerks obtain, compile and compute accounting, bookkeeping, statistical, financial and other numerical data, and take charge of cash transactions incidental to business matters. Some occupations classified here keep records of goods produced, purchased, stocked and dispatched, and of materials needed at specified production dates, or keep records of operational aspects and coordinate the timing of passenger and freight transport. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: helping with accounting and bookkeeping  records and computations; calculating unit production costs; calculating wages and in some cases preparing wage packets and paying wages; taking charge of cash transactions incidental to the business; obtaining, compiling and computing statistical or actuarial data; performing clerical tasks relating to the financial transactions of an insurance establishment, bank or similar establishment;  recording produced, stocked, ordered and  dispatched goods; recording production materials received, put into stock or issued; computing quantities of the production materials required at specified dates and helping with preparation and checking of production operation schedules; keeping records of operational aspects and coordinating the timing of passenger and freight transport.
Occupations in this sub-major group are classified into the following minor groups:
431 Numerical Clerks
432 Material Recording and Transport Clerks',
            ),
            318 => 
            array (
                'id' => '431',
                'title' => 'Numerical Clerks',
                'description' => 'Numerical clerks obtain, compile and compute accounting, bookkeeping, statistical, financial and other numerical data, and take charge of cash transactions incidental to business matters.
Tasks performed usually include: helping with accounting and bookkeeping records and computations; calculating unit production costs; calculating wages and in some cases preparing wage packets and paying wages; taking charge of cash transactions incidental to the business; obtaining, compiling and computing statistical or actuarial data; performing clerical tasks relating to the financial transactions of an insurance establishment, bank or similar establishment.
Occupations in this minor group are classified into the following unit groups:
4311 Accounting and Bookkeeping Clerks
4312 Statistical, Finance and Insurance Clerks
4313 Payroll Clerks',
            ),
            319 => 
            array (
                'id' => '4311',
                'title' => 'Accounting and Bookkeeping Clerks',
                'description' => 'Accounting and bookkeeping clerks compute, classify, and record numerical data to keep financial records complete. They perform any combination of routine calculating, posting and verifying duties to obtain primary financial data for use in maintaining accounting records.
Tasks include –
(a) checking figures, postings and documents for correct entry, mathematical accuracy and proper codes;
(b) operating computers programmed with accounting software to record, store and analyse information;
(c) classifying, recording and summarizing numerical and financial data to compile and keep financial records, using journals and ledgers or computers;
(d) calculating, preparing and issuing bills, invoices, account statements and other financial statements according to established procedures.
(e) compiling statistical, financial, accounting or auditing reports and tables pertaining to such matters as cash receipts, expenditures, accounts payable and receivable, and profits and losses.
Examples of the occupations included here:
▪ Accounts clerk
▪ Bookkeeping clerk
▪ Cost computing clerk
Some related occupations classified elsewhere:
▪ Accounting assistant – 3313
▪ Bookkeeper – 3313',
            ),
            320 => 
            array (
                'id' => '4312',
                'title' => 'Statistical, Finance and Insurance Clerks',
                'description' => 'Statistical, finance and insurance clerks obtain, compile and compute statistical or actuarial data or perform clerical tasks relating to the transactions of insurance establishments, banks and other financial establishments.
Tasks include –
(a) processing insurance enrolments, cancellations, claims transactions, policy changes and payments;
(b) obtaining and compiling statistical or actuarial data based on routine or special sources of information;
(c) calculating totals, averages, percentages and other details and presenting them in the required tabular form;
(d) preparing financial documents, and calculating interest or brokerage charges and stamp duties payable;
(e) maintaining records of bonds, shares and other securities bought or sold on behalf of clients or employers.
Examples of the occupations classified here:
▪ Actuarial clerk
▪ Brokerage clerk
▪ Finance clerk
▪ Insurance clerk
▪ Mortgage clerk
▪ Securities clerk
▪ Statistical clerk
Some related occupations classified elsewhere:
▪ Stocks and shares broker – 3311
▪ Accounting assistant – 3313
▪ Statistical assistant – 3314
▪ Trade broker – 3324
▪ Accounts clerk – 4311
▪ Bookkeeping clerk – 4311',
            ),
            321 => 
            array (
                'id' => '4313',
                'title' => 'Payroll Clerks',
                'description' => 'Payroll clerks collect, verify and process payroll information and compute pay and benefit entitlements for employees within a department, company or other establishment.
Tasks include –
(a) maintaining records of employee attendance, leave and overtime to calculate pay and benefit entitlements, using manual or computerized systems;
(b) preparing and verifying statements of earnings for employees, indicating gross and net salaries and deductions such as taxes, union dues, garnishments and insurance and pension plans;
(c) preparing employee payments and benefit payments by cheque or electronic transfer;
(d) reviewing time sheets, work charts, wage computation and other information to detect and reconcile payroll discrepancies;
(e) verifying attendance, hours worked and pay adjustments, and posting information into designated records.
Example of the occupations included here:
▪ Wages clerk
Some related occupations classified elsewhere:
▪ Accounting assistant – 3313
▪ Bookkeeper – 3313
▪ Accounts clerk – 4311
▪ Bookkeeping clerk – 4311',
            ),
            322 => 
            array (
                'id' => '432',
                'title' => 'Material Recording and Transport Clerks',
                'description' => 'Material recording and transport clerks keep records of goods produced, purchased, stocked and dispatched, and of materials needed at specified production dates, or keep records of operational aspects and coordinate the timing of passenger and freight transport.
Tasks performed usually include: recording goods produced, stocked, ordered and dispatched; recording production materials received, put into stock or issued; computing quantities of the production materials required at specified dates and helping with preparation and checking of production operation schedules; keeping records of operational aspects and coordinating the timing of passenger and freight transport.
Occupations in this minor group are classified into the following unit groups:
4321 Stock Clerks
4322 Production Clerks
4323 Transport Clerks',
            ),
            323 => 
            array (
                'id' => '4321',
                'title' => 'Stock Clerks',
                'description' => 'Stock clerks maintain records of goods produced and production materials received, weighed, issued, dispatched or put into stock.
Tasks include –
(a) arranging and controlling receipt and dispatch of goods and keeping relevant records;
(b) maintaining stock records, verifying issue of goods, estimating needs and making requisitions of new stocks;
(c) receiving, storing and issuing tools, spare parts or various equipment, and maintaining relevant records;
(d) weighing goods received or produced, or for issue or dispatch, and maintaining relevant records;
(e) compiling inventories of furniture and other items received for storage.
Examples of the occupations classified here:
▪ Dispatch clerk (stock)
▪ Freight clerk
▪ Stock clerk
▪ Storeroom clerk
▪ Weighing clerk',
            ),
            324 => 
            array (
                'id' => '4322',
                'title' => 'Production Clerks',
                'description' => 'Production clerks compute quantities of materials required at specified dates for manufacturing, construction and similar production programmes, and prepare and check production operation schedules.
Tasks include –
(a) computing quantities, qualities and types of materials required by production programmes;
(b) preparing production requirements schedules, ensuring that materials are available when needed, and keeping relevant records;
(c) preparing or assisting in the preparation of production operation schedules on the basis of customers\' orders and production capacity and performance;
(d) verifying stocks, arranging deliveries and investigating delays;
(e) recording and coordinating the flow of work and materials between departments.
Examples of the occupations classified here:
▪ Production clerk
▪ Schedule clerk (materials)',
            ),
            325 => 
            array (
                'id' => '4323',
                'title' => 'Transport Clerks',
                'description' => 'Transport clerks keep records of operational aspects and coordinate the timing of train, road and air passenger and freight transport, and prepare reports for management.
Tasks include –
(a) keeping records of operational aspects and coordinating the timing of passenger and freight transport;
(b) directing train routings within a division or zone of a railway system and keeping related records;
(c) directing, controlling and keeping records of freight handling at a railway yard;
(d) coordinating and keeping records of operational activities concerning road transport, such as allocation and scheduling of vehicles and drivers, loading and unloading of vehicles, and storage of goods in transit;
(e) coordinating and keeping records of operational activities concerning air transport of passengers and freight, such as passenger lists and freight manifests;
(f) preparing reports for management.
Examples of the occupations classified here:
▪ Clerical controller (transport service)
▪ Clerical dispatcher (transport service)',
            ),
            326 => 
            array (
                'id' => '44',
                'title' => 'Other Clerical Support Workers',
                'description' => 'Other clerical support workers sort and deliver mail, file documents, prepare information for processing, maintain personnel records, check material for consistency with original source material, assist persons who cannot read or write, and perform various other specialized clerical duties. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include:  recording information regarding acquisition, issue and return of library books; classifying and filing various documents and other records; maintaining personnel records; sorting, recording and delivering mail from post offices, as well as from or within an enterprise; coding; correcting proofs; performing a range of miscellaneous clerical duties; writing on behalf of persons who are unable to read or write.
Occupations in this sub-major group are classified into the following minor group:
441 Other Clerical Support Workers',
            ),
            327 => 
            array (
                'id' => '441',
                'title' => 'Other Clerical Support Workers',
                'description' => 'Other clerical support workers sort and deliver mail, file documents, prepare information for processing, maintain personnel records, check material for consistency with original source material, assist persons who cannot read or write, and perform various other specialized clerical duties.
Tasks performed usually include: recording information regarding acquisition, issue and return of library books; classifying and filing various documents and other records; maintaining personnel records; sorting, recording and delivering mail from post offices, as well as from or within an enterprise; coding; correcting proofs; performing a range of miscellaneous clerical duties; writing on behalf of persons who are unable to read or write.
Occupations in this minor group are classified into the following unit groups:
4411 Library Clerks
4412 Mail Carriers and Sorting Clerks
4413 Coding, Proofreading and Related Clerks
4414 Scribes and Related Workers
4415 Filing and Copying Clerks
4416 Personnel Clerks
4419 Clerical Support Workers Not Elsewhere Classified',
            ),
            328 => 
            array (
                'id' => '4411',
                'title' => 'Library Clerks',
                'description' => 'Library clerks issue and receive library materials, sort and shelve books, sound and vision recordings, periodicals, journals, magazines and newspapers and provide general library information to library users.
Tasks include –
(a) issuing and receiving library books and other materials;
(b) placing books and other library materials on shelves;
(c) performing clerical activities such as manual and electronic filing, word processing and occasional typing;
(d) maintaining journal subscriptions;
(e) assisting library users in accessing basic library materials and making interlibrary loans;
(f) maintaining library records relating to the acquisition, issue and return of books and other materials.
Examples of the occupations classified here:
▪ Library clerk
▪ Library filer',
            ),
            329 => 
            array (
                'id' => '4412',
                'title' => 'Mail Carriers and Sorting Clerks',
                'description' => 'Mail carriers and sorting clerks perform sorting, recording, delivery and other duties in connection with mail services from post offices or related organizations, as well as from or within an establishment.
Tasks include –
(a) performing mail-handling duties in public post offices or privately owned delivery establishments;
(b) sorting and delivering mail to private houses and businesses;
(c) providing delivery confirmation records when requested by the client;
(d) sorting and keeping simple records of incoming and outgoing correspondence and dispatching outgoing mail in various establishments;
Examples of the occupations classified here:
▪ Mail clerk
▪ Post carrier
▪ Postman/woman',
            ),
            330 => 
            array (
                'id' => '4413',
                'title' => 'Coding, Proofreading and Related Clerks',
                'description' => 'Coding, proofreading and related clerks convert information into codes, verify and correct proofs, and perform a number of miscellaneous clerical duties.
Tasks include –
(a) converting information into codes and classifying information by codes for data-processing purposes;
(b) comparing proofs of texts and related material prepared for printing with original material, correcting errors and marking texts for printer according to the established rules;
(c) sorting forms and marking them with identification numbers;
(d) sorting documents for filing or to collate sets of pages;
(e) addressing circulars and envelopes by hand.
Examples of the occupations classified here:
▪ Coding clerk
▪ Proofreading clerk',
            ),
            331 => 
            array (
                'id' => '4414',
                'title' => 'Scribes and Related Workers',
                'description' => 'Scribes and related workers write letters and complete forms on behalf of persons who are unable to read or write.
Tasks include –
(a) reading letters and other written matter to persons who are unable to read or write and  providing necessary interpretation and information;
(b) writing letters and completing forms on behalf of others;
(c) offering advice to individuals and interpreting and helping with the completion of government and other official forms.
Examples of the occupations classified here:
▪ Scribe',
            ),
            332 => 
            array (
                'id' => '4415',
                'title' => 'Filing and Copying Clerks',
                'description' => 'Filing and copying clerks file correspondence, cards, invoices, receipts and other records in alphabetical or numerical order or according to the filing system used. They locate and remove material from file when requested and photocopy, scan or fax documents.
Tasks include –
(a) sorting or classifying materials according to guidelines such as content, purpose, user criteria, or chronological, alphabetical or numerical order;
(b) filing material in drawers, cabinets and storage boxes;
(c) locating and remove materials from files when requested;
(d) keeping records of materials filed and removed;
(e) photocopying, scanning or faxing documents.
Examples of the occupations classified here:
▪ Copying clerk
▪ Filing clerk',
            ),
            333 => 
            array (
                'id' => '4416',
                'title' => 'Personnel Clerks',
                'description' => 'Personnel clerks maintain and update personnel records such as information on transfers and promotions, performance evaluations, employee leave taken and accumulated, salaries, qualifications and training.
Tasks include –
(a) updating information on employment history, salaries, performance evaluations, qualifications and training, and leave taken and accumulated;
(b) initiating records for newly appointed workers and checking records for completeness;
(c) processing applications for employment and promotions and advising applicants of results;
(d) receiving and answering inquiries about employment entitlements and conditions;
(e) sending out job applications and announcements of job openings and job examinations;
(f) maintaining and updating manual and computerized filing and registration systems, and compiling and preparing reports and documents relating to personnel activities;
(g) storing and retrieving personnel records and files on request.
Examples of the occupations classified here:
▪ Human resource assistant
▪ Human resource clerk',
            ),
            334 => 
            array (
                'id' => '4419',
                'title' => 'Clerical Support Workers Not Elsewhere Classified',
                'description' => 'This unit group covers clerical support workers not classified elsewhere in Major Group 4: Clerical Support Workers. For instance, the group includes correspondence clerks, press clippers and publication clerks.
In such cases tasks would include –
(a) receiving customers\' orders for classified advertising, writing and editing copy, calculating advertising rates and billing customers;
(b) writing business and government correspondence such as replies to requests for information and assistance, damage claims, credit and billing inquiries and service complaints;
(c) assisting in the preparation of periodicals, advertisements, catalogues, directories and other material for publication;
(d) reading newspapers, magazines, press releases and other publications to locate and file articles of interest to staff and clients.
Examples of the occupations classified here:
▪ Advertising clerk
▪ Correspondence clerk
▪ Directory compiler
▪ Press clipper
▪ Publication clerk',
            ),
            335 => 
            array (
                'id' => '5',
                'title' => 'Services and Sales Workers',
                'description' => 'Services and sales workers provide personal and protective services related to travel, housekeeping, catering, personal care, protection against fire and unlawful acts; or demonstrate and sell goods in wholesale or retail shops and similar establishments, as well as at stalls and on markets.   Competent performance in most occupations in this major group requires skills at the second ISCO skill level.
Tasks performed by services and sales workers usually include: organizing and providing services during travel;  housekeeping; preparing and serving of food and beverages; caring for children;  providing personal and basic health care at homes or in institutions, as well as hairdressing, beauty treatment and companionship; telling fortunes; embalming and arranging funerals; providing security services and protecting individuals and property against fire and unlawful acts; enforcing of law and order;  posing as models for advertising, artistic creation and display of goods;  selling goods in wholesale or retail establishments, as well as at stalls and on markets; and demonstrating goods to potential customers.  Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
51 Personal Services Workers
52 Sales Workers
53 Personal Care Workers
54 Protective Services Workers',
            ),
            336 => 
            array (
                'id' => '51',
                'title' => 'Personal Services Workers',
                'description' => 'Personal services workers provide personal services related to travel, housekeeping, catering and hospitality, hairdressing and beauty treatment, animal care grooming and training, companionship and other services of a personal nature.  Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include:  organizing and providing services in connection with travel and sightseeing; housekeeping;  preparing and serving food and beverages; hairdressing and beauty treatment; telling fortunes; embalming and arranging funerals; grooming, caring for and training animals; teaching people to drive motor vehicles; providing companionship and other personal services. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
511 Travel Attendants, Conductors and Guides
512 Cooks
513 Waiters and Bartenders
514 Hairdressers, Beauticians and Related Workers
515 Building and Housekeeping Supervisors
516 Other Personal Services Workers',
            ),
            337 => 
            array (
                'id' => '511',
                'title' => 'Travel Attendants, Conductors and Guides',
                'description' => 'Travel attendants, conductors and guides provide various personal services in connection with travelling by aircraft, train, ship, bus or other vehicle, and escorting individuals and groups on travel tours, sightseeing visits and excursions.
Tasks performed usually include: ensuring the comfort and safety of passengers; serving food and refreshments; providing information and answering questions in connection with travel; collecting or issuing tickets on board public transport; accompanying individuals or groups on sightseeing tours or excursions and describing points of interest.
Occupations in this minor group are classified into the following unit groups:
5111 Travel Attendants and Travel Stewards
5112 Transport Conductors
5113 Travel Guides',
            ),
            338 => 
            array (
                'id' => '5111',
                'title' => 'Travel Attendants and Travel Stewards',
                'description' => 'Travel attendants and travel stewards ensure the comfort and safety of passengers, serve meals and beverages and render personal services, usually on aircraft and on board ships. They may plan and coordinate housekeeping and social activities on ships.
Tasks include –
(a) greeting passengers entering aircraft or ships, checking tickets or boarding passes, and directing passengers to their seats or berths;
(b) announcing, explaining and demonstrating safety and emergency procedures such as the use of oxygen masks, seat belts and life jackets;
(c) assembling and serving pre-prepared meals and  beverages;
(d) selling duty-free and other goods;
(e) taking care of general needs and comfort of passengers, answering inquiries, and keeping cabins clean and tidy;
(f) directing and assisting passengers and following prescribed procedures in the event of an emergency, such as evacuating an aircraft following an emergency landing;
(g) verifying that first aid kits and other emergency equipment are in working order;
(h) administering first aid to passengers in distress;
(i) attending pre-flight briefings concerning weather, altitudes, routes, emergency procedures, crew coordination, lengths of flights, food and beverage services offered, and numbers of passengers;
(j) preparing passengers and aircraft for take-off and landing;
(k) determining special assistance needs of passengers such as small children, the elderly or disabled persons.
Examples of the occupations classified here:
▪ Cabin attendant
▪ Flight attendant
▪ Ship\'s steward',
            ),
            339 => 
            array (
                'id' => '5112',
                'title' => 'Transport Conductors',
                'description' => 'Transport conductors check and issue tickets and ensure the safety and comfort of passengers on trains, trams, buses and other public transport vehicles.
Tasks include –
(a) collecting and issuing tickets, passes or fares, and checking the validity of tickets issued previously;
(b) attending to sleeping-cars and their occupants on passenger trains;
(c) providing assistance with boarding, seating and luggage as required, especially to elderly, sick or injured people;
(d) opening and closing doors for passengers;
(e) performing equipment safety checks prior to departure;
(f) signalling to drivers to stop or proceed;
(g) greeting passengers boarding transportation equipment, and announcing routes and stops.
(h) ensuring that safety regulations are respected;
(i) responding to passengers\' requests and complaints and providing information about stops and connections;
(j) taking appropriate action in case of emergencies or accidents.
Examples of the occupations classified here:
▪ Bus conductor
▪ Cable car conductor
▪ Ticket inspector (public transport)
▪ Train conductor
▪ Tram conductor',
            ),
            340 => 
            array (
                'id' => '5113',
                'title' => 'Travel Guides',
                'description' => 'Travel guides accompany individuals or groups on trips, sightseeing tours and excursions and on tours of places of interest such as historical sites, industrial establishments and theme parks. They describe points of interest and provide background information on interesting features.
Tasks include –
(a) escorting and guiding tourists on cruises and sightseeing tours;
(b) escorting visitors through places of interest such as museums, exhibitions, theme parks, factories and other industrial establishments;
(c) describing and providing information on points of interest and exhibits and responding to questions;
(d) conducting educational activities for schoolchildren;
(e) monitoring visitors\' activities to ensure compliance with establishment or tour regulations and safety practices;
(f) greeting and registering visitors and tour participants, and issuing any required identification badges or safety devices;
(g) distributing brochures, showing audiovisual presentations, and explaining procedures and operations at tour sites;
(h) providing for physical safety of groups, and performing activities such as providing first aid and directing emergency evacuations;
(i) resolving any problems with tour itineraries, service or accommodation.
Examples of the occupations classified here:
▪ Art gallery guide
▪ Tour escort
▪ Tourist guide',
            ),
            341 => 
            array (
                'id' => '512',
                'title' => 'Cooks',
                'description' => 'Cooks plan, organize, prepare and cook meals, according to recipes or under the supervision of chefs, in hotels, restaurants and other eating places, on board ships, on passenger trains and in private households.
Tasks performed usually include: planning meals; preparing and cooking foodstuffs; planning, supervising and coordinating the work of kitchen helpers; checking the quality of food; weighing, measuring and mixing ingredients according to recipes and personal judgement; regulating the temperature of ovens, grills, roasters and other cooking equipment; inspecting and cleaning the kitchen, kitchen equipment, serving areas, etc. to ensure safe and sanitary food handling practices; and operating large-volume cooking equipment such as grills, deep-fat fryers, or griddles.
Occupations in this minor group are classified into the following unit group:
5120 Cooks',
            ),
            342 => 
            array (
                'id' => '5120',
                'title' => 'Cooks',
                'description' => 'Cooks plan, organize, prepare and cook meals, according to recipes or under the supervision of chefs, in hotels, restaurants and other eating places, on board ships, on passenger trains and in private households.
Tasks include –
(a) planning meals, preparing and cooking foodstuffs;
(b) planning, supervising and coordinating the work of kitchen helpers;
(c) checking the quality of food;
(d) weighing, measuring and mixing ingredients according to recipes and personal judgement;
(e) regulating the temperature of ovens, grills, roasters and other cooking equipment; inspecting and cleaning the kitchen, kitchen equipment and serving areas to ensure safe and sanitary food handling practices;
(f) operating large-volume cooking equipment such as grills, deep-fat fryers, or griddles.
Examples of the occupations classified here:
▪ Cook
Some related occupations classified elsewhere:
▪ Café manager – 1412
▪ Restaurant manager – 1412
▪ Chef – 3434
▪ Fast food preparer – 9411
Notes
Operators of small cafés, restaurants and bars for whom the management and supervision of staff is not a significant component of the work are classified in Unit Groups 5120: Cooks, 5131: Waiters or 5132: Bartenders, depending on the main tasks performed.',
            ),
            343 => 
            array (
                'id' => '513',
                'title' => 'Waiters and Bartenders',
                'description' => 'Waiters and bartenders serve food and beverages in commercial dining and drinking places, clubs, institutions and canteens, on board ships and on passenger trains.
Tasks performed usually include: assisting in keeping the bar properly stocked; washing used glassware and cleaning the bar area; serving alcoholic and non-alcoholic drinks at a bar; setting tables with clean linen, cutlery, crockery and glassware; serving food and beverages; advising on the choice of wines and serving them; taking orders for food and/or drinks and passing the orders to the kitchen; presenting bills and accepting payment.
Occupations in this minor group are classified into the following unit groups:
5131 Waiters
5132 Bartenders',
            ),
            344 => 
            array (
                'id' => '5131',
                'title' => 'Waiters',
                'description' => 'Waiters serve food and beverages at tables in dining and drinking places, clubs, institutions and canteens, on board ships and on passenger trains.
Tasks include –
(a) setting tables with clean linen, cutlery, crockery and glassware;
(b) greeting customers and presenting them with menus and beverage lists;
(c) advising on food and beverage choices;
(d) taking orders for food and drinks and passing orders to kitchen or bar staff;
(e) serving food and beverages to clients at tables;
(f) clearing tables and returning dishes and cutlery to the kitchen;
(g) presenting bills, accepting payment and operating point-of-sales machines and cash registers.
Examples of the occupations classified here:
▪ Sommelier
▪ Waiter
Some related occupations classified elsewhere:
▪ Café manager – 1412
▪ Restaurant manager – 1412
▪ Bartender – 5132
Notes
Operators of small cafés, restaurants and bars for whom the management and supervision of staff is not a significant component of the work are classified in Unit Groups 5120: Cooks, 5131: Waiters or 5132: Bartenders, depending on the main tasks performed.',
            ),
            345 => 
            array (
                'id' => '5132',
                'title' => 'Bartenders',
                'description' => 'Bartenders prepare, mix and serve alcoholic and non-alcoholic drinks directly to customers over a bar or counter, or through waiters.
Tasks include –
(a) taking beverage orders from serving staff or directly from patrons;
(b) preparing and serving alcoholic and non-alcoholic drinks at a bar;
(c) washing used glassware, cleaning and maintaining bar service areas, tea- and coffee-making areas and equipment such as espresso machines;
(d) collecting payment for sales, operating cash registers and balancing cash receipts;
(e) tapping kegs and attaching supply lines;
(f) assisting in keeping the bar properly stocked and arranging bottles and glasses;
(g) checking identification of customers to verify age requirements for purchase of alcohol;
(h) taking steps to limit problems related to excessive drinking, such as persuading customers to stop drinking, declining further service or ordering transportation;
(i) mixing ingredients to prepare cocktails and other drinks;
(j) serving snacks or other food items to customers at the bar.
Examples of the occupations classified here:
▪ Bartender
Some related occupations classified elsewhere:
▪ Café manager – 1412
▪ Restaurant manager – 1412
▪ Waiter – 5131
Notes
Operators of small cafés, restaurants and bars for whom the management and supervision of staff is not a significant component of the work are classified in Unit Groups 5120: Cooks, 5131: Waiters or 5132: Bartenders, depending on the main tasks performed.',
            ),
            346 => 
            array (
                'id' => '514',
                'title' => 'Hairdressers, Beauticians and Related Workers',
                'description' => 'Hairdressers, beauticians and related workers cut and dress hair, shave and trim beards, give beauty treatments, apply cosmetics and make-up and give other kinds of treatment to individuals in order to improve their appearance.
Tasks performed usually include: discussing customers\' requirements; cutting and dressing hair; shaving and trimming beards; giving beauty treatments; applying cosmetics and make-up; shaping and polishing finger- and toenails and treating minor ailments of the human foot; attending clients taking baths and administering elementary massage.
Occupations in this minor group are classified into the following unit groups:
5141 Hairdressers
5142 Beauticians and Related Workers',
            ),
            347 => 
            array (
                'id' => '5141',
                'title' => 'Hairdressers',
                'description' => 'Hairdressers cut, style, colour, straighten and permanently wave hair, shave or trim facial hair and treat scalp conditions.
Tasks include –
(a) cutting, washing, tinting and waving hair;
(b) shaving or trimming beards and moustaches;
(c) giving scalp treatments;
(d) fitting wigs according to customers\' requirements;
(e) providing advice on hair care, beauty products and hairstyles;
(f) styling hair into dreadlocks and braids and adding hair extensions;
(g) arranging appointments and collecting payments;
(h) cleaning work areas and sanitizing instruments.
Examples of the occupations classified here:
▪ Barber
▪ Hair care specialist
▪ Hairdresser
▪ Hairstylist',
            ),
            348 => 
            array (
                'id' => '5142',
                'title' => 'Beauticians and Related Workers',
                'description' => 'Beauticians and related workers give facial and body beauty treatments, apply cosmetics and make-up and give other kinds of treatment to individuals in order to improve their appearance.
Tasks include –
(a) cleaning and applying creams, lotions and related products to face and other parts of the body;
(b) giving facial and body massage;
(c) applying make-up to clients of a beauty parlour or to actors and other performers;
(d) cleaning, shaping and polishing finger- and toenails and treating ailments of the human foot such as corns, calluses or deformed toenails;
(e) attending to clients taking baths and administering elementary massage;
(f) using waxing, sugaring and depilation techniques to remove unwanted bodily hair;
(g) advising clients on diet and exercise to assist in weight loss and slimming;
(h) arranging appointments and collecting payments.
Examples of the occupations classified here:
▪ Bath attendant
▪ Beautician
▪ Make-up artist
▪ Manicurist
▪ Pedicurist
▪ Slimming consultant',
            ),
            349 => 
            array (
                'id' => '515',
                'title' => 'Building and Housekeeping Supervisors',
                'description' => 'Building and housekeeping supervisors coordinate, schedule and supervise the work of cleaners and other housekeeping staff in commercial, industrial and residential premises. They take responsibility for housekeeping and caretaking functions in hotels, offices, apartments, houses and private dwellings.
Tasks performed usually include: assigning tasks and inspecting building areas to see that cleaning, housekeeping and maintenance work has been done properly; issuing of supplies and equipment and inventory stocks to ensure that the supplies on hand are adequate; screening and hiring job applicants; training both new and experienced employees; recommending promotions, transfers or dismissals; performing some cleaning, housekeeping and maintenance tasks.
Occupations in this minor group are classified into the following unit groups:
5151 Cleaning and Housekeeping Supervisors in Offices, Hotels and Other Establishments
5152 Domestic Housekeepers
5153 Building Caretakers',
            ),
            350 => 
            array (
                'id' => '5151',
                'title' => 'Cleaning and Housekeeping Supervisors in Offices, Hotels and Other Establishments',
                'description' => 'Cleaning and housekeeping supervisors in offices, hotels and other establishments organize, supervise and carry out housekeeping functions in order to keep clean and tidy the interiors, fixtures and facilities in these establishments.
Tasks include –
(a) engaging, training, discharging, organizing and supervising helpers, cleaners and other housekeeping staff;
(b) purchasing or controlling the purchase of supplies;
(c) controlling storage and issue of supplies;
(d) supervising general welfare and conduct of individuals in institutions;
(e) sweeping or vacuum-cleaning, washing and polishing floors, furniture and other fixtures;
(f) making beds, cleaning bathrooms, supplying towels, soap and related items;
(g) cleaning kitchens and generally helping with kitchen work, including dishwashing;
(h) restocking mini-bars and replenishing items such as drinking glasses and writing equipment.
Examples of the occupations classified here:
▪ Housekeeper (hotel)
▪ Matron (housekeeping)
Some related occupations classified elsewhere:
▪ Hotel manager – 1411
▪ Bed and breakfast operator – 5152
▪ Domestic housekeeper – 5152
▪ Building caretaker – 5153
▪ Domestic cleaner – 9111',
            ),
            351 => 
            array (
                'id' => '5152',
                'title' => 'Domestic Housekeepers',
                'description' => 'Domestic housekeepers organize, supervise and carry out housekeeping functions in private households and small accommodation establishments with or without the support of subordinate staff.
Tasks include –
(a) supervising workers employed in households as domestic staff;
(b) purchasing or controlling the purchase of supplies;
(c) controlling storage and issue of supplies;
(d) assisting in cases of minor injury or illness by performing tasks such as taking temperature, giving medicine, putting on bandages;
(e) sweeping or vacuum-cleaning, washing and polishing floors, furniture and other fixtures.
(f) making beds, cleaning bathrooms, supplying towels, soap and related items;
(g) taking care of household pets and plants, receiving visitors, answering telephones, delivering messages and shopping for groceries;
(h) preparing and cooking meals, setting and clearing tables and serving food and beverages;
(i) cleaning kitchens and generally helping with kitchen work, including dishwashing.
Examples of the occupations classified here:
▪ Bed and breakfast operator
▪ Domestic housekeeper
▪ Butler
Some related occupations classified elsewhere:
▪ Hotel manager – 1411
▪ Domestic helper – 9111
Note
Operators of small accommodation establishments, such as some bed and breakfast establishments and small guest houses that provide accommodation and limited meal services to clients effectively as paying guests in private households, and for whom the management and supervision of staff is not a significant component of the work, are classified in Unit Group 5152: Domestic Housekeepers.',
            ),
            352 => 
            array (
                'id' => '5153',
                'title' => 'Building Caretakers',
                'description' => 'Building caretakers take care of apartment houses, hotels, offices, churches and other buildings and maintain them and associated grounds in a clean and orderly condition. They may supervise other workers and contractors depending on the size and nature of the building concerned.
Tasks include –
(a) supervising the work of cleaning, housekeeping and building maintenance staff and contractors;
(b) participating in cleaning, simple repairs and maintenance of building interiors;
(c) tending furnaces and boilers to ensure provision of heat and hot water;
(d) regulating conduct of tenants and visitors in such matters as noise abatement or misuse of property;
(e) providing small services to absent tenants such as accepting deliveries on their behalf or providing requested information to callers;
(f) notifying management and owners of buildings of the need for major repairs;
(g) patrolling buildings to ensure security is maintained;
(h) filling out registration forms and providing tenants with copies of rules.
Examples of the occupations classified here:
▪ Caretaker
▪ Concierge (building)
▪ Janitor
▪ Sexton',
            ),
            353 => 
            array (
                'id' => '516',
                'title' => 'Other Personal Services Workers',
                'description' => 'Other personal services workers recount past and predict future events in persons\' lives, provide companionship and other personal services, groom, train and care for animals, provide embalming and funeral services and train people to drive vehicles.
Tasks performed usually include: casting horoscopes; providing companionship or valet services and other personal services to clients; providing embalming and funeral services; feeding, handling, training and grooming animals; instructing students under actual driving conditions.
Occupations in this minor group are classified into the following unit groups:
5161 Astrologers, Fortune-tellers and Related Workers
5162 Companions and Valets
5163 Undertakers and Embalmers
5164 Pet Groomers and Animal Care Workers
5165 Driving Instructors
5169 Personal Services Workers Not Elsewhere Classified',
            ),
            354 => 
            array (
                'id' => '5161',
                'title' => 'Astrologers, Fortune-tellers and Related Workers',
                'description' => 'Astrologers, fortune-tellers and related workers recount past and predict future events in persons\' lives by practicing astrology, on the basis of characteristics of the clients\' palms, samples of playing cards drawn or other techniques.
Tasks include –
(a) casting horoscopes of individuals at birth or later to recount past and forecast future events and conditions of their lives;
(b) interpreting characteristics of clients\' palms, samples of playing cards, position of tea leaves or coffee remnants in a cup, shapes and patterns of bones of dead animals, etc.;
(c) forecasting future events on the basis of these interpretations;
(d) determining auspicious times for various human activities such as inaugurations, marriages, journeys and religious and other ceremonies;
(e) giving warnings and advice on possible courses of action;
(f) advising individuals on precautions to be taken to avoid evil influences.
Examples of the occupations classified here:
▪ Astrologer
▪ Fortune-teller
▪ Numerologist
▪ Palmist
Some related occupations classified elsewhere:
▪ Witch doctor – 3230
▪ Faith healer – 3413',
            ),
            355 => 
            array (
                'id' => '5162',
                'title' => 'Companions and Valets',
                'description' => 'Companions and valets provide companionship and attend to various needs of the client or employer.
Tasks include –
(a) providing companionship to the employer by accompanying him/her to various places, reading, conversing and participating in activities such as sports;
(b) assisting in entertaining visitors in the employer\'s home;
(c) keeping wardrobe and personal effects of the employer in good order.
Examples of the occupations classified here:
▪ Companion
▪ Personal maid
▪ Valet
Some related occupations classified elsewhere:
▪ Butler – 5152
▪ Dancing partner – 5169
▪ Social escort – 5169',
            ),
            356 => 
            array (
                'id' => '5163',
                'title' => 'Undertakers and Embalmers',
                'description' => 'Undertakers and embalmers arrange funerals and perform various tasks in the disposal of human remains.
Tasks include –
(a) making arrangements for and conducting funerals, cremations and burials;
(b) embalming human remains to retard or arrest the process of decay;
(c) conforming to health and sanitation and ensuring that legal requirements concerning embalming are met;
(d) incising and closing incisions on various parts of the body and reshaping or reconstructing disfigured or maimed human remains when necessary;
(e) dressing human bodies and placing them in caskets;
(f) conducting interviews to arrange for preparation of obituary notices, to assist with the selection of caskets or urns, and to determine the location and time of burials or cremations.
Examples of the occupations classified here:
▪ Embalmer
▪ Undertaker',
            ),
            357 => 
            array (
                'id' => '5164',
                'title' => 'Pet Groomers and Animal Care Workers',
                'description' => 'Pet groomers and animal care workers feed, handle, train and groom animals and assist veterinarians, animal health technologists and technicians in veterinary facilities, animal shelters, breeding and boarding kennels, zoos, laboratories, retail pet shops, riding schools, dog training schools, pet grooming and similar establishments.
Tasks include –
(a) bathing and feeding animals;
(b) leading or carrying animals to treatment rooms and holding them during treatment;
(c) cleaning and sterilizing veterinary surgical instruments;
(d) labelling drugs, chemicals and other pharmaceutical preparations and replenishing stock;
(e) sterilizing bottles, beakers and other equipment;
(f) cleaning, organizing and disinfecting animal quarters such as pens, stables, cages and yards, and animal equipment such as saddles and bridles;
(g) collecting and recording animal information such as weight, size, physical condition, treatments received, medications given and food intake;
(h) training animals to develop and maintain desired behaviours for competition, entertainment, obedience, security, riding and other activities;
(i) grooming animals by performing tasks such as washing, brushing, clipping and trimming coats, cutting nails and cleaning ears.
Examples of the occupations classified here:
▪ Animal attendant
▪ Dog trainer
▪ Horse breaker
▪ Veterinary aide
▪ Zoo keeper',
            ),
            358 => 
            array (
                'id' => '5165',
                'title' => 'Driving Instructors',
                'description' => 'Driving instructors teach people how to drive motor vehicles.
Tasks include –
(a) instructing students under actual driving conditions, and explaining and demonstrating the operation of brakes, clutch, gear selection, automatic transmission, signals and lights;
(b) teaching road traffic regulations;
(c) teaching road craft and road safety;
(d) advising students when they are ready to undergo driving examination;
(e) advising on and teaching advanced driving techniques required for emergency situations;
(f) illustrating and explaining handling and mechanical operation of motor vehicles and driving techniques, using blackboard diagrams and audiovisual aids.
Examples of the occupations classified here:
▪ Driving instructor
Some related occupations classified elsewhere:
▪ Flying instructor – 3153',
            ),
            359 => 
            array (
                'id' => '5169',
                'title' => 'Personal Services Workers Not Elsewhere Classified',
                'description' => 'This unit group covers personal service workers not classified elsewhere in Sub-major Group 51: Personal Services Workers. For instance, those who provide services and companionship as dancing partners, social escorts and night-club hostesses or hosts are classified here.
In such cases tasks would include –
(a) accompanying clients to restaurants and other outings;
(b) acting as a dancing partner;
(c) welcoming clients to a night-club and ensuring that they are entertained well.
Examples of the occupations classified here:
▪ Club host
▪ Club hostess
▪ Dancing partner
▪ Social escort
Some related occupations classified elsewhere:
▪ Companion – 5162
Note
Countries that have a requirement to compile statistics on those who provide sexual services to clients on a commercial basis should include them in Unit Group 5169: Personal Services Workers Not Elsewhere Classified. If there is a need, in national adaptations of ISCO-08, to identify this group separately from other occupations included in Unit Group 5169, use of Unit Group code 5168 is recommended for this purpose.',
            ),
            360 => 
            array (
                'id' => '52',
                'title' => 'Sales Workers',
                'description' => 'Sales workers sell and demonstrate goods in wholesale or retail shops, at stalls and markets, door-to-door, via telephone or customer contact centres. They may record and accept payment for goods and services purchased, and may operate small retail outlets. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: selling goods in wholesale or retail establishments, at street or market stalls, door-to-door, via telephone or customer contact centres; demonstrating and displaying goods to potential customers; selling and serving food for immediate consumption at counters and in the street; buying or contracting a regular supply of products to be sold; stacking and displaying goods for sale and wrapping or packing goods sold; determining product mix, stock and price levels for goods to be sold; operating cash registers, optical price scanners, computers or other equipment to record and accept payment for the purchase of goods and services.  Supervision of other workers may be required in some occupations classified here.
Occupations in this sub-major group are classified into the following minor groups:
521 Street and Market Salespersons
522 Shop Salespersons
523 Cashiers and Ticket Clerks
524 Other Sales Workers
Note
Shop managers and sales managers are classified in Major Group 1:  Managers. Technical, medical and information and communications technology sales professionals are classified in Major Group 2: Professionals. Commercial sales and insurance representatives, finance and trade brokers, are classified in Major Group 3: Technicians and Associate Professionals. Street vendors (excluding food) are classified in Major Group 9: Elementary Occupations.',
            ),
            361 => 
            array (
                'id' => '521',
                'title' => 'Street and Market Salespersons',
                'description' => 'Street and market salespersons sell goods from stalls on markets or in streets and prepare and sell hot or cold foods and beverages ready for immediate consumption in streets and public places.
Tasks performed usually include: obtaining permission to set up a stand at a particular place in streets, markets or other open spaces or to sell food and drinks on the street; buying or contracting a regular supply of products to be sold; erecting and dismantling stalls and stands; transporting, storing, loading and unloading products for sale; stacking, displaying and selling goods, food and drinks and accepting payment; wrapping and packing goods sold;  preparing food and drinks for sale; pushing, pedalling or carrying handcarts, trucks, trays or baskets to bring food and drinks to the desired place in the street, or to public places such as stations or cinemas;  keeping accounts and maintaining a record of stock levels.
Occupations in this minor group are classified into the following unit groups:
5211 Stall and Market Salespersons
5212 Street Food Salespersons
Nots
Vendors in streets and public places of non-food items (or of pre-packaged non-perishable food items such as confectionery) from pushcarts, trucks, trays or baskets are classified in Minor Group 952: Street Vendors (excluding Food).',
            ),
            362 => 
            array (
                'id' => '5211',
                'title' => 'Stall and Market Salespersons',
                'description' => 'Stall and market salespersons sell various goods from stalls on open-air or covered markets or from stalls in streets or other open spaces.
Tasks include –
(a) obtaining permission to set up a stand at a particular place in streets, markets or other open spaces;
(b) determining product mix, stock and price levels for goods to be sold;
(c) buying or contracting a regular supply of goods to be sold from wholesale suppliers or directly from producers;
(d) erecting and dismantling stalls and stands, and transporting, storing, loading and unloading goods for sale;
(e) demonstrating and selling goods and accepting payment;
(f) stacking and displaying goods for sale, and wrapping and packing goods sold;
(g) keeping accounts and maintaining a record of stock levels.
Examples of the occupations classified here:
▪ Kiosk salesperson
▪ Market stallholder
▪ Market vendor
▪ Street stall sales assistant
Some related occupations classified elsewhere:
▪ Street food vendor – 5212
▪ Shopkeeper – 5221
▪ Shop sales assistant – 5223
▪ Food service counter attendant – 5246
▪ Street vendor (excluding food) – 9520
Notes
Vendors from street and market stalls of fresh food products not intended for immediate consumption (such as fruit, vegetables, meat and dairy products) are classified in Unit Group 5211: Stall and Market Salespersons. Vendors from street and market stalls of a variety of prepared meals and food items for immediate consumption are classified in Unit Group 5246: Food Service Counter Attendants.  Vendors in streets and public places of food and beverages for immediate consumption from pushcarts, trucks, trays or baskets are classified in Unit Group 5212: Street Food Salespersons.  Vendors in streets and public places of non-food items (or of pre-packaged non-perishable food items such as confectionery) from pushcarts, trucks, trays or baskets are classified in Unit Group 9520: Street Vendors (excluding Food).  Workers who prepare simple food items for immediate consumption, such as hamburger cooks, but have limited direct contact with clients, are classified in Unit Group 9411: Fast Food Preparers.
If adapting these categories to national circumstances please note that the aim of separately identifying vendors of food items for immediate consumption is to ensure that jobs that require skills in service, basic preparation and hygienic handling of food are visible. Food service counter attendants generally serve a wider range of more elaborate products and meals than street food salespersons and do not generally transport food using, or sell food from, equipment such as handcarts, bicycles or baskets.',
            ),
            363 => 
            array (
                'id' => '5212',
                'title' => 'Street Food Salespersons',
                'description' => 'Street food salespersons prepare and sell, or sell previously prepared hot or cold foods and beverages ready for immediate consumption in streets and public places such as stations, cinemas or theatres.
Tasks include –
(a) obtaining permission or a licence, where required, to sell food and drinks on the street or in a public place;
(b) obtaining food and drinks for sale;
(c) preparing, either beforehand or on the spot, food and drinks for sale;
(d) loading and unloading, pushing, pedalling or carrying handcarts, trucks, trays or baskets to bring food and drinks to the desired place in the street, or to public places such as stations or cinemas;
(e) displaying and selling food and drinks and accepting payment.
Examples of the occupations classified here:
▪ Hawker (food)
▪ Street food vendor
Some related occupations classified elsewhere:
▪ Cook – 5120
▪ Food service counter attendant – 5246
▪ Fast food preparer – 9411
▪ Street vendor (excluding food) – 9520
Notes
Vendors from street and market stalls of fresh food products not intended for immediate consumption (such as fruit, vegetables, meat and dairy products) are classified in Unit Group 5211: Stall and Market Salespersons.  Vendors from street and market stalls of a variety of prepared meals and food items for immediate consumption are classified in Unit Group 5246: Food Service Counter Attendants.  Vendors in streets and public places of food and beverages for immediate consumption from pushcarts, trucks, trays or baskets are classified in Unit Group 5212: Street Food Salespersons.  Vendors in streets and public places of non-food items (or of pre-packaged non-perishable food items such as confectionery) from pushcarts, trucks, trays or baskets are classified in Unit Group 9520: Street Vendors (excluding Food).  Workers who prepare simple food items for immediate consumption, such as hamburger cooks, but have limited direct contact with clients, are classified in Unit Group 9411: Fast Food Preparers.
If adapting these categories to national circumstances please note that the aim of separately identifying vendors of food items for immediate consumption is to ensure that jobs that require skills in service, basic preparation and hygienic handling of food are identified.   Food service counter attendants generally serve a wider range of more elaborate products and meals than street food salespersons and do not generally transport food using, or sell food from, equipment such as handcarts, bicycles or baskets.',
            ),
            364 => 
            array (
                'id' => '522',
                'title' => 'Shop Salespersons',
                'description' => 'Shop salespersons sell a range of goods and services directly to the public or on behalf of retail and wholesale establishments. They explain the functions and qualities of these goods and services, and may operate small shops or supervise the activities of shop sales assistants and cashiers.
Tasks performed usually include: determining customer requirements and advising on product range, price, delivery, warranties and product use and care; demonstrating, explaining and selling goods and services to customers; accepting payment for good and services by a variety of payment methods, and preparing sales invoices; undertaking or assisting with the ongoing management of stock such as product inventories, and participating in stock takes; stacking and displaying goods for sale, and wrapping and packing goods sold; determining product mix, stock  and price levels for goods to be sold; supervising and coordinating the activities of shop sales assistants, checkout operators and other workers in supermarkets and department stores.
Occupations in this minor group are classified into the following unit groups:
5221 Shopkeepers
5222 Shop Supervisors
5223 Shop Sales Assistants',
            ),
            365 => 
            array (
                'id' => '5221',
                'title' => 'Shopkeepers',
                'description' => 'Shopkeepers operate small retail shops either independently or with support from a small number of others.
Tasks include –
(a) determining product mix, stock and price levels for goods to be sold;
(b) purchasing and ordering goods for sale from markets, wholesalers and other suppliers;
(c) budgeting and maintaining records of stock levels and financial transactions;
(d) determining prices and displaying goods for sale;
(e) selling goods to customers and advising them on product use;
(f) examining returned goods and deciding on appropriate action;
(g) taking inventory of goods in stock.
Examples of the occupations classified here:
▪ Grocer
▪ Newsagent
▪ Shopkeeper
Some related occupations classified elsewhere:
▪ Shop manager – 1420
▪ Market stallholder – 5211
Note
Only operators of small shops for whom the management and supervision of staff are not a significant component of the work are classified in Unit Group 5221: Shopkeepers. Operators of shops where management tasks and supervision of staff are significant and frequent elements of the work are classified in Unit Group 1420: Retail and Wholesale Trade Managers. Staff who control and direct the activities of shop sales assistants, checkout operators and other workers, but who do not take responsibility for determining product mix, overall setting of prices, budgets, staffing levels, selection and recruitment are classified in Unit Group 5222: Shop Supervisors.',
            ),
            366 => 
            array (
                'id' => '5222',
                'title' => 'Shop Supervisors',
                'description' => 'Shop supervisors supervise and coordinate the activities of shop sales assistants, checkout operators and other workers in retail and wholesale shops such as supermarkets and department stores.
Tasks include –
(a) planning and preparing work schedules and assigning staff to specific duties;
(b) instructing staff on sales procedures, including how to handle difficult or complex cases;
(c) ensuring that customers receive prompt service;
(d) participating in and providing advice to managers on interviewing, hiring, training, evaluating, promoting and dismissing staff, and resolving staff grievances;
(e) examining returned goods and deciding on appropriate action;
(f) taking inventory of goods for sale and ordering new stock;
(g) ensuring that goods and services are correctly priced and displayed;
(h) ensuring that safety procedures are enforced.
Examples of the occupations classified here:
▪ Checkout supervisor
▪ Supermarket supervisor
Some related occupations classified elsewhere:
▪ Shop manager – 1420
▪ Street stall salesperson – 5211
▪ Shopkeeper – 5221
Note
Operators of small shops for whom the management and supervision of staff are not a significant component of the work are classified in Unit Group 5221: Shopkeepers.  Shop managers who, in addition to supervision of staff, perform management tasks such as determining product mix, overall setting of prices, budgeting and making decisions on staff levels, selection and recruitment are classified in Unit Group 1420: Retail and Wholesale Trade Managers.',
            ),
            367 => 
            array (
                'id' => '5223',
                'title' => 'Shop Sales Assistants',
                'description' => 'Shop sales assistants sell a range of goods and services directly to the public or on behalf of retail and wholesale establishments, and explain the functions and qualities of these goods and services.
Tasks include –
(a) determining customer requirements and advising on product range, price, delivery, warranties and product use and care;
(b) demonstrating and explaining to customers the establishment\'s goods and services;
(c) selling goods and services, accepting payment by a variety of payment methods, preparing sales invoices and recording sales using cash registers;
(d) assisting with the ongoing management of stock such as product inventories, and participating in stock takes;
(e) stacking and displaying goods for sale, and wrapping and packing goods sold.
Examples of the occupations classified here:
▪ Salesperson (retail establishment)
▪ Salesperson (wholesale establishment)
▪ Shop assistant
Some related occupations classified elsewhere:
▪ Shop manager – 1420
▪ Kiosk salesperson – 5211
▪ Market salesperson – 5211
▪ Street stall salesperson – 5211
▪ Street food vendor – 5212
▪ Shopkeeper – 5221
▪ Checkout operator – 5230
▪ Food service counter attendant – 5246',
            ),
            368 => 
            array (
                'id' => '523',
                'title' => 'Cashiers and Ticket Clerks',
                'description' => 'Cashiers and ticket clerks operate cash registers, optical price scanners, computers or other equipment to record and accept payment for the purchase of goods, services and admissions in settings such as stores, restaurants and ticket offices.
Tasks performed usually include: receiving and verifying payment by cash, cheque, credit card or automatic debit in stores, ticket offices or similar establishments; giving change and issuing receipts; issuing tickets at ticket offices and taking corresponding payments; counting and recording money received or paid out and balancing against cash register sales records; receiving incoming cash, checking it against sales slips and other documents, and preparing it for deposit at bank; operating cash registers to calculate totals to be paid from or to clients; scanning, weighing and recording prices of goods; wrapping and placing merchandise in bags.
Occupations in this minor group are classified into the following unit group:
5230 Cashiers and Ticket Clerks',
            ),
            369 => 
            array (
                'id' => '5230',
                'title' => 'Cashiers and Ticket Clerks',
                'description' => 'Cashiers and ticket clerks operate cash registers, optical price scanners, computers or other equipment to record and accept payment for the purchase of goods, services and admissions in settings such as stores, restaurants and ticket offices.
Tasks include –
(a) receiving and verifying payment by cash, cheque, credit card or automatic debit in stores, ticket offices or similar establishments;
(b) giving change and issuing receipts;
(c) issuing tickets for attendance at sporting and cultural events;
(d) counting and recording money received or paid out and balancing against cash register sales records;
(e) receiving incoming cash, checking it against sales slips and other documents, and preparing it for deposit at a financial institution
(f) operating cash registers to calculate totals to be paid from or to clients;
(g) scanning, weighing and recording prices of goods;
(h) wrapping and placing merchandise in bags.
Examples of the occupations classified here:
▪ Checkout operator
▪ Service station cashier
▪ Service station console operator
▪ Store cashier
▪ Ticket issuing clerk (entertainment and sporting events)
Some related occupations classified elsewhere:
▪ Ticket issuing clerk (travel) – 4221
▪ Checkout supervisor – 5222
▪ Shop sales assistant – 5223
▪ Service station attendant – 5245',
            ),
            370 => 
            array (
                'id' => '524',
                'title' => 'Other Sales Workers',
                'description' => 'Other sales workers display, demonstrate, display and sell goods, food and services, usually to the general public, in contexts other than sales in markets, streets and shops.  This group includes sales workers not classified in Minor Groups 521: Street and Market Salespersons, 522: Shop Salespersons and 523: Cashiers and Ticket Clerks.
Tasks performed may include: displaying and demonstrating items for sale; posing for photographs, film and video, advertising, still photography or for artistic creation; answering questions and offering advice on the use of goods and services; taking orders and making arrangements for payment, delivery and collection of goods or for provision of services; selling goods and services and soliciting business by approaching potential customers by going from door to door or using the telephone or other electronic communications media; selling fuel, lubricants and other automotive products at service stations; providing services such as fuelling, cleaning, lubricating and performing minor repairs to motor vehicles.
Occupations in this minor group are classified into the following unit groups:
5241 Fashion and Other Models
5242 Sales Demonstrators
5243 Door-to-door Salespersons
5244 Contact Centre Salespersons
5245 Service Station Attendants
5246 Food Service Counter Attendants
5249 Sales Workers Not Elsewhere Classified
Note
Sales managers are classified in Minor Group 122: Sales, Marketing and Development Managers. Technical, medical and ICT sales professionals are classified in Minor Group 243, Sales, Marketing and Public Relations Professionals. Commercial sales and insurance representatives are classified in Minor Group 332: Sales and Purchasing Agents and Brokers.',
            ),
            371 => 
            array (
                'id' => '5241',
                'title' => 'Fashion and Other Models',
                'description' => 'Fashion and other models wear and display clothing and accessories and pose for photographs, film and video, advertising, still photography or for artistic creation.
Tasks include –
(a) dressing in sample apparel of new or current styles or of type wanted by customer;
(b) walking, turning and posing to demonstrate, to best advantage, style and characteristics of garments, fashion accessories and other merchandise;
(c) posing as subject for sculpture, painting and other types of visual art;
(d) posing for still photography for magazines and other advertising media;
(e) posing for television, video and cinema commercials and other productions.
Examples of the occupations classified here:
▪ Advertising model
▪ Artist\'s model
▪ Fashion model
Some related occupations classified elsewhere:
▪ Actor – 2655',
            ),
            372 => 
            array (
                'id' => '5242',
                'title' => 'Sales Demonstrators',
                'description' => 'Sales demonstrators demonstrate goods at commercial premises, exhibitions and private homes.
Tasks include –
(a)  setting up displays and demonstrating articles for sale to inform customers about their characteristics and mode of use, as well as to stimulate buying interest;
(b)  answering questions and offering advice on the use of goods;
(c)  selling goods or directing customers to sales staff;
(d)  taking orders and making arrangements for payment, delivery and collection of goods;
(e)  offering sample goods and distributing catalogues and advertising material.
Examples of the occupations classified here:
▪ Demonstrator
▪ Sales merchandiser
Some related occupations classified elsewhere:
▪ Market salesperson – 5211
▪ Street stall salesperson – 5211
▪ Door-to-door salesperson – 5243',
            ),
            373 => 
            array (
                'id' => '5243',
                'title' => 'Door-to-door Salespersons',
                'description' => 'Door-to-door salespersons describe, demonstrate and sell goods and services and solicit business for establishments by approaching or visiting potential customers, usually residents in private homes, by going from door to door.
Tasks include –
(a) giving details of various goods or services and of terms of sale by visiting clients and potential clients in private homes;
(b) demonstrating or describing goods or services on offer;
(c) recording orders and transactions and placing orders received with suppliers;
(d) preparing invoices and sales contracts and accepting payment;
(e) distributing letters, information sheets and other documents to clients;
(f) compiling lists of prospective clients and calling on them to obtain new business;
(g) travelling between sales areas and clients and transporting samples or goods for sale.
Examples of the occupations classified here:
▪ Door-to-door salesperson
▪ Door-to-door sales representative
▪ Party plan salesperson
Some related occupations classified elsewhere:
▪ Commercial sales representative – 3322
▪ Street vendor – 9520',
            ),
            374 => 
            array (
                'id' => '5244',
                'title' => 'Contact Centre Salespersons',
                'description' => 'Contact centre salespersons contact existing and prospective customers, using the telephone or other electronic communications media, to promote goods and services, obtain sales and arrange sales visits. They may work from a customer contact centre or from non-centralized premises.
Tasks include –
(a) promoting goods and services by telephone or electronic mail, following scripts and working from lists of contacts;
(b) creating interest in goods and services, and seeking a sale or an agreement to see sales representatives;
(c) arranging processing and dispatch of goods and services, information kits and brochures to customers;
(d) arranging appointments for sales representatives;
(e) recording notes for follow-up action and updating marketing databases to reflect changes to the status of each customer;
(f) reporting competitor activities and issues raised by contacts for attention by managers;
(g) maintaining statistics of calls made and successes achieved;
(h) submitting periodic reports on telemarketing activities and results.
Examples of the occupations classified here:
▪ Call centre salesperson
▪ Customer contact centre salesperson
▪ Internet salesperson
▪ Telemarketer
▪ Telemarketing salesperson
Some related occupations classified elsewhere:
▪ Contact centre information clerk – 4222',
            ),
            375 => 
            array (
                'id' => '5245',
                'title' => 'Service Station Attendants',
                'description' => 'Service station attendants sell fuel, lubricants and other automotive products and provide services such as fuelling, cleaning, lubricating and performing minor repairs to motor vehicles.
Tasks include –
(a) filling fuel tanks and containers to level specified by customer;
(b) checking and replenishing air pressure in vehicle tyres, oil and other vehicle fluid levels;
(c) washing vehicle windscreens and windows;
(d) performing minor repair work to vehicles such as replacing tyres, light bulbs and windscreen wiper blades;
(e) maintaining and operating automatic car wash facilities;
(f) collecting payments from customers for purchases;
(g) cleaning petrol pumps and surrounding driveways, shops and facilities;
(h) undertaking stock control and preparing reports on fuel, oil, accessories and other items sold.
Examples of the occupations classified here:
▪ Marina attendant
▪ Service station attendant
Some related occupations classified elsewhere:
▪ Shop sales assistant – 5223
▪ Service station cashier – 5230
▪ Food service counter attendant – 5246
Note
Workers who accept payment or sell goods in shops at service stations but do not provide forecourt services such as assistance with fuel, lubricants, cleaning and maintenance are excluded from Unit Group 5245: Service Station Attendants.',
            ),
            376 => 
            array (
                'id' => '5246',
                'title' => 'Food Service Counter Attendants',
                'description' => 'Food service counter attendants serve customers at food counters and finish preparation of simple food items in restaurants, cafés, hotels, fast food outlets, cafeterias, hospitals and other settings.
Tasks include –
(a) serving food to customers at counters;
(b) ascertaining the products desired by customers, assisting them in making choices and taking orders;
(c) cleaning, peeling, slicing and trimming foodstuffs, using manual and electric appliances;
(d) preparing simple food items and reheating prepared meals;
(e) portioning and wrapping food or placing it directly on plates for service to patrons;
(f) packaging takeaway food;
(g) stocking refrigerators, salad and buffet bars and keeping records of the quantities of food used;
(h) receiving payment for food items purchased.
Examples of the occupations classified here:
▪ Cafeteria counter attendant
▪ Salad bar attendant
Some related occupations classified elsewhere:
▪ Cook – 5120
▪ Waiter – 5131
▪ Bartender – 5132
▪ Kiosk salesperson – 5211
▪ Market salesperson – 5211
▪ Street stall salesperson – 5211
▪ Fast food preparer – 9411
Notes
Vendors from street and market stalls of fresh food products not intended for immediate consumption (such as fruit, vegetables, meat and dairy products) are classified in Unit Group 5211:  Stall and Market Salespersons.  Vendors from street and market stalls of a variety of prepared meals and food items for immediate consumption are classified in Unit Group 5246: Food Service Counter Attendants.  Vendors in streets and public places of food and beverages for immediate consumption from pushcarts, trucks, trays or baskets are classified in Unit Group 5212: Street Food Salespersons.  Vendors in streets and public places of non-food items (or of pre-packaged non-perishable food items such as confectionery) from pushcarts, trucks, trays or baskets are classified in Unit Group 9520: Street Vendors (excluding Food).  Workers who prepare simple food items for immediate consumption, such as hamburger cooks, but have limited direct contact with clients, are classified in Unit Group 9411: Fast Food Preparers.
If adapting these categories to national circumstances please note that the aim of separately identifying vendors of food items for immediate consumption is to ensure that jobs that require skills in service, basic preparation and hygienic handling of food are identified.   Food service counter attendants generally serve a wider range of more elaborate products and meals than street food salespersons and do not generally transport food using, or sell food from, equipment such as handcarts, bicycles or baskets.',
            ),
            377 => 
            array (
                'id' => '5249',
                'title' => 'Sales Workers Not Elsewhere Classified',
                'description' => 'This unit group includes sales workers not classified elsewhere in Sub-major Group 52: Sales workers.
Examples of the occupations classified here:
▪ Rental salesperson',
            ),
            378 => 
            array (
                'id' => '53',
                'title' => 'Personal Care Workers',
                'description' => 'Personal care workers provide care, supervision and assistance for children, patients and elderly, convalescent or disabled persons in institutional and residential settings. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: assisting with mobility, washing and other personal needs; assisting children individually to learn social skills; supervising and participating in activities that enhance children\'s physical, social, emotional and intellectual development; observing and reporting concerns to appropriate health or social service workers.
Occupations in this sub-major group are classified into the following minor groups:
531 Child Care Workers and Teachers\' Aides
532 Personal Care Workers in Health Services',
            ),
            379 => 
            array (
                'id' => '531',
                'title' => 'Child Care Workers and Teachers\' Aides',
                'description' => 'Child care workers and teachers\' aides provide care and supervision for children in schools, residential homes and child care facilities.
Tasks performed usually include: assisting children individually to learn social skills; demonstrating, supervising and participating in activities that enhance the physical, social, emotional and intellectual development of children in schools and preschools; assisting in preparation of materials and equipment for children\'s education and recreational activities  before school, after school, during vacation and in day care centres.
Occupations in this minor group are classified into the following unit groups:
5311 Child Care Workers
5312 Teachers\' Aides',
            ),
            380 => 
            array (
                'id' => '5311',
                'title' => 'Child Care Workers',
                'description' => 'Child care workers provide care and supervision for children in residential homes and in before-school, after-school, vacation and day care centres.
Tasks include –
(a) assisting children to wash, dress and feed themselves;
(b) taking children to and from school or outdoors for recreation;
(c) playing games with children, or entertaining them by reading or storytelling;
(d) assisting in the preparation of materials and equipment for children\'s education and recreational activities;
(e) managing children\'s behaviour and guiding their social development;
(f) disciplining children and recommending or initiating other measures to control behaviour, such as caring for own clothing and picking up toys and books;
(g) observing and monitoring children\'s play activities;
(h) keeping records on individual children, including daily observations and information about activities, meals served and medications administered.
Examples of the occupations classified here:
▪ Babysitter
▪ Child care worker
▪ Creche ayah
▪ Family day care worker
▪ Nanny
▪ Out of school hours care worker
Some related occupations classified elsewhere:
▪ Early childhood educator – 2342',
            ),
            381 => 
            array (
                'id' => '5312',
                'title' => 'Teachers\' Aides',
                'description' => 'Teachers\' aides perform non-teaching duties to assist teaching staff, and provide care and supervision for children in schools and pre-schools.
Tasks include –
(a) demonstrating, supervising and participating in activities that enhance the physical, social, emotional and intellectual development of children in schools and pre-schools;
(b) preparing indoor and outdoor areas for learning and recreational activities;
(c) assisting children with intellectual, physical, behavioural and other learning difficulties with their studies;
(d) assisting children individually to learn social skills;
(e) assisting with preparing teaching materials, and copying and collating written and printed material;
(f) operating audiovisual equipment, computers and other teaching aides;
(g) distributing and collecting lesson material.
Examples of the occupations classified here:
▪ Pre-school assistant
▪ Teacher\'s assistant',
            ),
            382 => 
            array (
                'id' => '532',
                'title' => 'Personal Care Workers in Health Services',
                'description' => 'Personal care workers in health services provide personal care and assistance with mobility and activities of daily living to patients and elderly, convalescent and disabled people in health care and residential settings.
Tasks performed usually include: assisting patients with mobility, personal care and communication needs; sterilizing surgical and other instruments and equipment; observing and reporting concerns to the appropriate medical or social service workers; preparing patients for examination and treatment and participating in planning the care of individuals.
Occupations in this minor group are classified into the following unit groups:
5321 Health Care Assistants
5322 Home-based Personal Care Workers
5329 Personal Care Workers in Health Services Not Elsewhere Classified',
            ),
            383 => 
            array (
                'id' => '5321',
                'title' => 'Health Care Assistants',
                'description' => 'Health care assistants provide direct personal care and assistance with activities of daily living to patients and residents in a variety of health care settings such as hospitals, clinics and residential nursing care facilities. They generally work in implementation of established care plans and practices, and under the direct supervision of medical, nursing or other health professionals or associate professionals.
Tasks include –
(a) providing care, support and treatment to patients and residents of medical, rehabilitative and residential care facilities according to treatment plans established by medical, nursing and other health professionals;
(b) assisting patients with personal and therapeutic care needs such as personal hygiene, feeding, dressing, physical mobility and exercise, communication, taking oral medications and changing dressings;
(c) positioning, lifting and turning patients and transporting them in wheelchairs or on movable beds;
(d) maintaining patients\' environmental hygiene standards, such as cleaning patient rooms and changing bed linen;
(e) providing massage and other non-pharmacological pain relief measures, such as during pregnancy and labour;
(f) observing patients\' condition, responses and behaviour and reporting changes to a health professional.
Examples of the occupations classified here:
▪ Birth assistant (clinic or hospital)
▪ Nursing aide (clinic or hospital)
▪ Patient care assistant
▪ Psychiatric aid
Some related occupations classified elsewhere:
▪ Nurse (professional) – 2221
▪ Nurse (associate professional) – 3221
▪ Ambulance worker – 3258
▪ Nursing aide (home) – 5322
Notes
Workers who provide personal care to residents of institutions and facilities that have permanent medical or nursing supervision (such as hospitals, rehabilitation centres, residential nursing care facilities and nursing homes), and therefore work under the direct supervision of nurses, medical doctors, or other health professionals or associate professionals, are classified in Unit Group 5321: Health Care Assistants.  Workers who provide personal care to residents of independent living units, generally without permanent medical or nursing supervision, should be classified in Unit Group 5322: Home-based Personal Care Workers.  In general, workers classified in Minor Group 532: Personal Care Workers in Health Services do not perform tasks requiring extensive medical knowledge or training, such as administering medications and cleaning and dressing wounds: where tasks of this type are performed they are of a simple and routine nature.',
            ),
            384 => 
            array (
                'id' => '5322',
                'title' => 'Home-based Personal Care Workers',
                'description' => 'Home-based personal care workers provide routine personal care and assistance with activities of daily living to persons who are in need of such care due to effects of ageing, illness, injury, or other physical or mental conditions, in private homes and other independent residential settings.
Tasks include –
(a) assisting clients with personal and therapeutic care needs such as personal hygiene, feeding, dressing, physical mobility and exercise, communication, taking oral medications and changing dressings, usually according to care plans established by a health professional;
(b) maintaining records of client care, changes in condition and responses to care and treatment, and reporting concerns or providing referrals to a health or social services professional;
(c) positioning and lifting clients with physical mobility challenges, and helping transport them in wheelchairs and motor vehicles;
(d) providing clients and families with emotional support, information and advice on topics such as nutrition, hygiene, exercise, caring for infants or adapting to disability or illness;
(e) maintaining clients\' environmental hygiene standards, such as changing bed linen, washing clothes and dishes, and cleaning living quarters;
(f) providing psychological support to clients such as through conversation or reading aloud;
(g) planning, purchasing, preparing or serving meals to meet nutritional requirements and prescribed diets;
(h) providing support to parents and care for newborns during the postpartum period;
(i) scheduling and accompanying clients for appointments with medical doctors and other health professionals, or performing other errands.
Examples of the occupations classified here:
▪ Home birth assistant
▪ Home care aide
▪ Nursing aide (home)
▪ Personal care provider
Some related occupations classified elsewhere:
▪ Nurse (professional) – 2221
▪ Social worker (professional) – 2635
▪ Nurse (associate professional) – 3221
▪ Social worker (associate professional) – 3412
▪ Nursing aide (clinic or hospital) – 5321
Notes
Workers who provide personal care to residents of medical and health care facilities that have permanent medical or nursing supervision (such as in hospitals and nursing care homes), and therefore work under the direct supervision of health professionals or associate professionals, are classified in Unit Group 5321: Health Care Assistants.  Workers who provide personal care in independent residential settings (including retirement communities with minimal or no on-site medical or nursing supervision) are classified in Unit Group 5322: Home-based Personal Care Workers.  Home birth assistants, who provide emotional support and general care and advice to women and families during pregnancy and labour, but not delivery care to reduce health risks, are included here. Care workers who provide care and supervision for children in residential homes and care centres are classified in Unit Group 5311: Child Care Workers.',
            ),
            385 => 
            array (
                'id' => '5329',
                'title' => 'Personal Care Workers in Health Services Not Elsewhere Classified',
                'description' => 'This unit group covers providers of routine health and personal care support services not classified elsewhere in Minor Group 532: Personal Care Workers in Health Services.  For instance, the group includes occupations such as dental aid, sterilization aid, hospital orderly, medical imaging assistant, and pharmacy aid.
In such cases tasks would include –
(a) cleaning and sterilizing surgical, dental and pharmaceutical instruments, bottles, beakers and other equipment;
(b) labelling drugs, chemicals and other pharmaceutical preparations and replenishing stock on shelves;
(c) lifting, turning and moving patients and transporting them in wheelchairs or on moveable beds;
(d) preparing patients for examination or treatment;
(e) setting up instrument trays, preparing materials, and assisting dentists or radiographers during  procedures;
(f) exposing diagnostic X-rays.
Examples of the occupations classified here:
▪ Dental aide
▪ First aid attendant
▪ Hospital orderly
▪ Medical imaging assistant
▪ Pharmacy aide
▪ Phlebotomist
▪ Sterilization aide
Some related occupations classified elsewhere:
▪ Pharmaceutical assistant – 3213
▪ Dental technician – 3214
▪ Dental assistant – 3251',
            ),
            386 => 
            array (
                'id' => '54',
                'title' => 'Protective Services Workers',
                'description' => 'Protective services workers protect individuals and property against fire and other hazards, maintain law and order and enforce laws and regulations. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: preventing, fighting and extinguishing fires; rescuing people from burning buildings and accident sites and those trapped in dangerous situations; maintaining law and order, enforcing laws and regulations, patrolling public areas and arresting suspected offenders; directing traffic and assuming authority in the event of accidents; watching over and maintaining order among inmates of prisons, reformatories or penitentiaries; patrolling or monitoring premises to guard property against theft and vandalism, controlling access to establishments and maintaining order and enforcing regulations at public events and within establishments. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor group:
541 Protective Services Workers',
            ),
            387 => 
            array (
                'id' => '541',
                'title' => 'Protective Services Workers',
                'description' => 'Protective services workers protect individuals and property against fire and other hazards, maintain law and order and enforce laws and regulations.
Tasks performed usually include: preventing, fighting and extinguishing fires; rescuing people from burning buildings and accident sites and those trapped in dangerous situations; maintaining law and order, enforcing laws and regulations, patrolling public areas and arresting suspected offenders; directing traffic and assuming authority in the event of accidents; watching over and maintaining order among inmates of prisons, reformatories or penitentiaries; patrolling or monitoring premises to guard property against theft and vandalism, controlling access to establishments and maintaining order and enforcing regulations at public events and within establishments. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
5411 Firefighters
5412 Police Officers
5413 Prison Guards
5414 Security Guards
5419 Protective Services Workers Not Elsewhere Classified',
            ),
            388 => 
            array (
                'id' => '5411',
                'title' => 'Firefighters',
                'description' => 'Firefighters prevent, fight and extinguish fires and assist in other emergencies, protect life and property and conduct rescue efforts.
Tasks include –
(a) responding to fire alarms and other calls for assistance, such as automobile and industrial accidents, bomb threats and other emergencies;
(b) controlling and extinguishing fires using manual and power equipment and firefighting chemicals;
(c) fighting special types of fires and using special equipment in industrial establishments;
(d) rescuing people from burning buildings and accident sites and those trapped in dangerous situations;
(e) preventing or limiting the spread of dangerous substances in case of fires or accidents;
(f) informing the public about fire prevention.
Examples of the occupations classified here:
▪ Firefighter
▪ Forest firefighter
Some related occupations classified elsewhere:
▪ Fire inspector – 3112
▪ Fire prevention specialist – 3112
▪ Fire investigator – 3119',
            ),
            389 => 
            array (
                'id' => '5412',
                'title' => 'Police Officers',
                'description' => 'Police officers maintain law and order, patrolling public areas, enforcing laws and regulations and arresting suspected offenders.
Tasks include –
(a) patrolling a specific area to maintain public order, responding to emergencies, protecting people and property and enforcing laws and regulations;
(b) identifying, pursuing and arresting suspects and perpetrators of criminal acts;
(c) directing traffic and assuming authority in the event of accidents;
(d) providing emergency assistance to victims of accidents, crimes and natural disasters.
Examples of the occupations classified here:
▪ Constable
▪ Police officer
▪ Police patrol officer
Some related occupations classified elsewhere:
▪ Police chief constable – 1112
▪ Police commissioner – 1112
▪ Police inspector-general – 1112
▪ Police detective – 3355
▪ Police inspector – 3355',
            ),
            390 => 
            array (
                'id' => '5413',
                'title' => 'Prison Guards',
                'description' => 'Prison guards watch over and maintain order among inmates of prisons, reformatories or penitentiaries.
Tasks include –
(a) searching arriving prisoners, putting their valuables in safekeeping, escorting prisoners to cells and locking them in;
(b) making periodic inspection tours of cells and inspecting and maintaining the security of locks, windows, doors and gates;
(c) supervising prisoners at work and meals, and during recreation periods;
(d) observing the conduct and behaviour of prisoners to prevent disturbances and escapes;
(e) patrolling prison areas to prevent escapes;
(f) assisting with the implementation of rehabilitation programmes;
(g) escorting prisoners in transit and during temporary leave.
Examples of the occupations classified here:
▪ Prison guard',
            ),
            391 => 
            array (
                'id' => '5414',
                'title' => 'Security Guards',
                'description' => 'Security guards patrol or monitor premises to guard property against theft and vandalism. They control access to establishments and maintain order and enforce regulations at public events and within establishments.
Tasks include –
(a) patrolling premises and checking doors, windows and gates to prevent and detect signs of unauthorized entry;
(b) controlling access to establishments, monitoring and authorizing the entrance or departure of employees and visitors, checking identification and issuing security passes;
(c) circulating among visitors, patrons or employees to preserve order, protect property from theft or vandalism and enforce the regulations of the establishment;
(d) responding to alarms, investigating disturbances and contacting superiors, police or firefighters as appropriate;
(e) performing security checks of passengers and luggage at airports;
(f) picking up and ensuring the safe delivery of cash and valuables to banks, automated teller machines and retail establishments.
Examples of the occupations classified here:
▪ Bodyguard
▪ Doorkeeper
▪ Museum guard
▪ Security guard
▪ Security patrolman/woman
▪ Watchman/woman
Some related occupations classified elsewhere:
▪ Beach patrolman/woman – 5419
▪ Lifeguard – 5419',
            ),
            392 => 
            array (
                'id' => '5419',
                'title' => 'Protective Services Workers Not Elsewhere Classified',
                'description' => 'This unit group covers protective services workers not classified elsewhere in Minor Group 541: Protective Services Workers. For instance, the unit group includes lifeguards, crossing guards and animal control officers.
Tasks include –
(a) patrolling beaches and swimming pools to prevent accidents and to rescue bathers from drowning;
(b) monitoring traffic flow to locate safe gaps through which pedestrians can cross streets;
(c) responding to citizen complaints concerning stray domestic animals, livestock and wildlife, issuing warnings and citations to owners and impounding lost, homeless and dangerous animals;
(d) patrolling an assigned area to enforce parking regulations;
(e) directing traffic.
Examples of the occupations classified here:
▪ Animal control officer
▪ Beach patrolman/woman
▪ Crossing guard
▪ Game warden
▪ Lifeguard
▪ Traffic warden
Some related occupations classified elsewhere:
▪ Doorkeeper – 5414
▪ Museum guard – 5414
▪ Watchman/woman – 5414',
            ),
            393 => 
            array (
                'id' => '6',
                'title' => 'Skilled Agricultural, Forestry and Fishery Workers',
                'description' => 'Skilled agricultural, forestry and fishery workers grow and harvest field or tree and shrub crops; gather wild fruits and plants; breed, tend or hunt animals; produce a variety of animal husbandry products; cultivate, conserve and exploit forests; breed or catch fish; and cultivate or gather other forms of aquatic life in order to provide food, shelter and income for themselves and their households.  Competent performance in most occupations in this major group requires skills at the second ISCO skill level.
Tasks performed by skilled agricultural, forestry and fishery workers usually include: preparing the soil; sowing, planting, spraying, fertilizing and harvesting field crops; growing fruit and other tree and shrub crops; growing garden vegetables and horticultural products; gathering wild fruits and plants; breeding, raising, tending or hunting animals mainly to obtain meat, milk, hair, fur, skin, or sericultural, apiarian or other products; cultivating, conserving and exploiting forests; breeding or catching fish; cultivating or gathering other forms of aquatic life; storing and carrying out some basic  processing of their produce; selling their products to purchasers, marketing organizations or at markets. Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
61 Market-oriented Skilled Agricultural Workers
62 Market-oriented Skilled Forestry, Fishery and Hunting Workers
63 Subsistence Farmers, Fishers, Hunters and Gatherers',
            ),
            394 => 
            array (
                'id' => '61',
                'title' => 'Market-oriented Skilled Agricultural Workers',
                'description' => 'Market-oriented skilled agricultural workers plan, organize and perform farming operations to grow and harvest field or tree and shrub crops; and to produce a variety of animals and animal products for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include:  preparing the soil; sowing, planting, spraying, fertilizing and harvesting field crops; growing fruit and other tree and shrub crops; growing garden vegetables and horticultural products; raising, breeding and tending animals  mainly to obtain meat, milk, hair, fur, skin, or sericultural, apiarian or other products; storing and carrying out some processing of produce; selling their products to purchasers, marketing organizations or at markets.  Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
611 Market Gardeners and Crop growers
612 Animal Producers
613 Mixed Crop and Animal Producers
Notes
Jobs should be classified in Sub-major Group 63: Subsistence Farmers, Fishers, Hunters and Gatherers when goods (mostly food) are produced mainly for own consumption or for consumption by other members of the worker\'s household.  If a large surplus is produced, and more goods are sold than consumed, but the main aim of production was own consumption, the jobs should nevertheless be classified in Sub-major Group 63. Jobs should only be classified in Sub-major Group 61: Market-oriented Skilled Agricultural Workers, or 62: Market-oriented Skilled Forestry, Fishery and Hunting Workers, if the main aim of the activity is to produce goods for the market.',
            ),
            395 => 
            array (
                'id' => '611',
                'title' => 'Market Gardeners and Crop Growers',
                'description' => 'Market gardeners and crop growers plan, organize and perform operations to grow and harvest field crops; to grow fruit and other tree and shrub crops; to grow garden vegetables and medicinal and other plants; and to produce horticultural and horticultural nurseries products for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks performed usually include: monitoring market activity and conditions, determining types and quantities of crops to be grown, and planning and coordinating production accordingly; purchasing seeds, bulbs and fertilizer; investing in land and land improvements; preparing land, sowing, planting, cultivating and harvesting various crops; tending working animals and maintaining farm buildings, machinery and equipment; producing saplings, bulbs and seeds; storing and carrying out some processing of produce;  delivering or marketing farm products. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
6111 Field Crop and Vegetable Growers
6112 Tree and Shrub Crop Growers
6113 Gardeners, Horticultural and Nursery Growers
6114 Mixed Crop Growers',
            ),
            396 => 
            array (
                'id' => '6111',
                'title' => 'Field Crop and Vegetable Growers',
                'description' => 'Field crop and vegetable growers plan, organize and perform farming operations to grow and harvest various types of field crop such as wheat and other cereals, rice, beetroot, sugar-cane, groundnuts, tobacco, reed or other field crops, and potatoes, cabbages or other field vegetables, for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions, determining types and quantities of crops to be grown, and planning and coordinating production accordingly;
(b) preparing soil by hand or machine, and spreading fertilizers and manure;
(c) selecting and sowing seeds, and planting seedlings;
(d) maintaining crops by cultivating soil, by transplanting, pruning or thinning plants, and by setting up and operating irrigation equipment;
(e) controlling weeds, pests and diseases by applying herbicides and pesticides;
(f) harvesting crops and destroying diseased or superfluous crops;
(g) inspecting, cleaning, grading, packaging, storing and loading crops for sale or delivery to market;
(h) tending working animals and maintaining farm buildings, structures, equipment and water supply systems;
(i) storing and carrying out some processing of produce;
(j) promoting and marketing products, arranging the sale, purchase and transportation of produce and supplies and maintaining and evaluating records of farm activities and transactions;
(k) training and supervising workers in crop production, maintenance duties, and health and safety precautions, and hiring and discharging workers and contractors.
Examples of the occupations classified here:
▪ Cereal farmer
▪ Cotton farmer
▪ Potato farmer
▪ Rice farmer
▪ Skilled farm worker (field crops)
▪ Sugar-cane grower
Some related occupations classified elsewhere:
▪ Agricultural production manager – 1311
▪ Crop farm labourer – 9211
Note
Growers of vegetables using intensive cultivation techniques are classified in Unit Group 6113:  Gardeners, Horticultural and Nursery Growers.',
            ),
            397 => 
            array (
                'id' => '6112',
                'title' => 'Tree and Shrub Crop Growers',
                'description' => 'Tree and shrub crop growers plan, organize and perform farming operations to grow and harvest trees and shrubs such as fruit and nut trees, tea and coffee bushes, grape vines, berry-bearing bushes, cocoa trees and rubber trees, and to collect sap, for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions, determining types and quantities of crops to be grown, and planning and coordinating production accordingly;
(b) preparing soil by hand or machine, and spreading fertilizers and manure;
(c) selecting and sowing seeds, and planting seedlings;
(d) maintaining crops by cultivating soil, by transplanting, pruning or thinning trees and shrubs, and by setting up and operating irrigation equipment;
(e) controlling weeds, pests and diseases by applying herbicides and pesticides;
(f) tending trees or bushes, collecting sap and harvesting crops;
(g) inspecting, cleaning, grading, packaging, storing and loading crops for sale or delivery to market;
(h) tending working animals and maintaining farm buildings, structures, equipment and water supply systems;
(i) storing and carrying out some processing of produce;
(j) promoting and marketing products, arranging the sale, purchase and transportation of produce and supplies, and maintaining and evaluating records of farm activities and transactions;
(k) training and supervising workers in crop production, maintenance duties, and health and safety precautions, and hiring and discharging workers and contractors.
Exaples of the occupations classified here:
▪ Fruit farmer
▪ Rubber farmer
▪ Rubber tapper
▪ Tea grower
▪ Viticulturist
Some related occupations classified elsewhere:
▪ Plantation manager – 1311
▪ Fruit picker – 9211',
            ),
            398 => 
            array (
                'id' => '6113',
                'title' => 'Gardeners, Horticultural and Nursery Growers',
                'description' => 'Gardeners, horticultural and nursery growers plan, organize and perform operations to cultivate and maintain trees, shrubs, flowers and other plants in parks and private gardens, and to produce saplings, bulbs and seeds or grow vegetables and flowers, by intensive cultivation techniques for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions determining kinds and amounts of vegetables, horticultural and nursery products to be grown, and planning and coordinating production accordingly;
(b) preparing land by conditioning soil, levelling ground and installing and operating irrigation and drainage systems;
(c) planting trees, hedges, garden plants and grass;
(d) pruning and trimming trees, shrubs and hedges, installing plant supports and protection, and rolling, mowing, aerating and edging lawns;
(e) constructing features and facilities within gardens, such as paths or paved areas, walls, rockeries, garden beds, ponds and water features, sheds and fences;
(f) checking the health of plants and trees, identifying and treating weeds, pests and diseases, and applying mulch and fertilizers;
(g) producing saplings, bulbs and seeds and raising plants from seeds or cuttings;
(h) harvesting crops, inspecting, cleaning, grading, packaging, storing and loading products for sale or delivery to market;
(i) maintaining buildings, greenhouses and other structures, equipment and water supply systems;
(j) storing and carrying out some processing of produce;
(k) promoting and marketing products, arranging the sale, purchase and transportation of produce and supplies, and maintaining and evaluating records of activities and transactions;
(l) training and supervising workers in production, maintenance duties, and health and safety precautions, and hiring and discharging workers and contractors.
Examples of the occupations classified here:
▪ Horticulturist
▪ Landscape gardener
▪ Market gardener
▪ Mushroom cultivator
Some related occupations classified elsewhere:
▪ Horticultural scientist – 2132
▪ Garden labourer – 9214
▪ Horticultural labourer – 9214
Note
Growers of berry-bearing bushes and fruit trees in orchards are classified in Unit Group 6112: Tree and Shrub Crop Growers unless this is done in combination with general market gardening or horticultural cultivation.  Growers of vegetables in fields not using intensive cultivation techniques are classified in Unit Group 6111: Field Crop and Vegetable Growers.',
            ),
            399 => 
            array (
                'id' => '6114',
                'title' => 'Mixed Crop Growers',
                'description' => 'Mixed crop growers plan, organize and perform farming operations to grow and harvest specific combinations of field crops, field vegetables, tree and shrub crops, and garden, horticultural and nursery products, for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions, determining types and quantities of crops to be grown, and planning and coordinating production accordingly;
(b) preparing soil by hand or machine, and spreading fertilizers and manure;
(c) selecting and sowing seeds, and planting seedlings;
(d) maintaining crops by cultivating soil, by transplanting, pruning or thinning crops, trees and shrubs, and by setting up and operating irrigation equipment;
(e) growing flowers and vegetables by intensive cultivation;
(f) producing saplings, bulbs and seeds;
(g) harvesting crops and inspecting, cleaning, grading, packaging, storing and loading products for sale or delivery to market;
(h) tending working animals and maintaining farm buildings, structures, equipment and water supply systems;
(i) storing and carrying out some processing of produce;
(j) promoting and marketing products, arranging the sale, purchase and transportation of produce and supplies, and maintaining and evaluating records of activities and transactions;
(k) training and supervising workers in production, maintenance duties, and health and safety precautions, and hiring and discharging workers and contractors.
Examples of the occupations classified here:
▪ Mixed crop farmer
▪ Skilled farm worker (mixed crops)
Some related occupations classified elsewhere:
▪ Agricultural production manager – 1311
▪ Plantation manager – 1311
▪ Crop farm labourer – 9211
▪ Fruit picker – 9211',
            ),
            400 => 
            array (
                'id' => '612',
                'title' => 'Animal Producers',
                'description' => 'Animal producers plan, organize and perform farming operations to breed and raise domesticated animals, poultry, insects and non-domesticated animals for the production of meat, dairy products, honey, skins, textiles and other products, or for use as working, sporting or recreational animals, for sale or delivery to wholesale buyers, marketing organizations or at markets.
Task performed usually include:  monitoring market activity and conditions, determining kinds and amounts of products to produce and planning and coordinating production accordingly;  raising, feeding and tending animals; preparing animals or animal products for market; monitoring and examining animals to detect illness, injury or disease, and to check physical condition such as rate of weight gain; performing duties related to animal reproduction such as breeding, artificial insemination and helping with animal births; renting or investing in, and maintaining and cleaning, buildings, machinery, equipment and structures; storing and carrying out some processing of produce;  promoting and marketing products, arranging the sale, purchase and transportation of stock, produce and supplies, and maintaining and evaluating records of activities and transactions;  training and supervising workers in animal care procedures, maintenance duties and health and safety precautions, and hiring and discharging workers and contractors.
Occupations in this minor group are classified into the following unit groups:
6121 Livestock and Dairy Producers
6122 Poultry Producers
6123 Apiarists and Sericulturists
6129 Animal Producers Not Elsewhere Classified',
            ),
            401 => 
            array (
                'id' => '6121',
                'title' => 'Livestock and Dairy Producers',
            'description' => 'Livestock and dairy producers plan, organize and perform farming operations to breed and raise domesticated animals (excluding poultry), such as cattle, sheep, pigs, goats, horses and camels, for the production of meat, milk and other dairy products, skins and wool or for use as working, sporting or recreational animals, for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions, determining kinds and amounts of stock to produce, and planning and coordinating production accordingly;
(b) cultivating pastures and providing and monitoring fodder and water supplies to maintain appropriate nutritional levels and condition of livestock;
(c) monitoring and examining animals to detect illness, injury or disease, and to check physical condition such as rate of weight gain;
(d) grooming, marking, clipping, trimming, drenching and/or castrating animals, and shearing coats to collect hair or wool;
(e) herding livestock to pastures for grazing or to scales, sheds, vehicles or other enclosures;
(f) milking animals by hand or using milking machines;
(g) mixing feed, additives and medicines in prescribed portions and distributing or hand-feeding to animals for consumption;
(h) performing duties related to livestock reproduction, such as breeding, artificial insemination and helping with animal births;
(i) maintaining and cleaning farm buildings, machinery, equipment and structures;
(j) slaughtering and skinning animals and preparing them for market;
(k) storing and carrying out some processing of animal and dairy produce;
(l) promoting and marketing products, arranging the sale, purchase and transportation of livestock, produce and supplies, and maintaining and evaluating records of farm activities and transactions;
(m) training and supervising workers in animal care procedures, maintenance duties and health and safety precautions, and hiring and discharging workers and contractors.
Examples of the occupations classified here:
▪ Cattle farmer
▪ Dairy farmer
▪ Dog breeder
▪ Drover
▪ Goat farmer
▪ Horse breeder
▪ Shearer
▪ Sheep farmer
▪ Shepherd
▪ Stockman/woman
Some related occupations classified elsewhere:
▪ Agricultural production manager – 1311
▪ Ranch manager – 1311
Note
Workers who produce a combination of domestic livestock and other animals such as poultry, insects and non-domesticated animals should be classified according to their predominant activity. Those who produce and store hay and other fodder for later consumption, primarily by livestock for which they are responsible, are classified in Unit Group 6121: Livestock and Dairy Producers.',
            ),
            402 => 
            array (
                'id' => '6122',
                'title' => 'Poultry Producers',
                'description' => 'Poultry producers plan, organize and perform farming operations to breed and raise chickens, turkeys, geese, ducks and other poultry to produce meat, eggs and breeding stock for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity, planning and coordinating production accordingly, and maintaining and evaluating records of farming activities;
(b) growing and purchasing feed and other supplies needed to maintain appropriate nutritional levels and condition of poultry;
(c) monitoring and examining poultry to detect illness, injury or disease and to check physical condition such as rate of weight gain, and removing weak, ill and dead poultry from flock;
(d) mixing feed and feed additives and filling feed and water containers;
(e) vaccinating poultry via drinking water, injection or dusting of air;
(f) collecting and storing eggs and packaging them for sale or delivery to market;
(g) determining sex of chicks and facilitating breeding, artificial insemination and hatching of eggs;
(h) renting or investing in, and maintaining and cleaning, farm buildings, machinery, equipment and structures;
(i) slaughtering and dressing poultry for sale or delivery to market;
(j) storing and carrying out some processing of produce;
(k) arranging the sale, purchase and transportation of stock, produce and supplies;
(l) training and supervising workers in poultry production procedures, maintenance duties and health and safety precautions, and hiring and discharging workers and contractors.
Examples of the occupations classified here:
▪ Poultry breeder
▪ Poultry farmer
▪ Poultry tender
Note
Workers who produce a combination of domestic livestock and other animals such as poultry, insects and non-domesticated animals should be classified according to their predominant activity.',
            ),
            403 => 
            array (
                'id' => '6123',
                'title' => 'Apiarists and Sericulturists',
                'description' => 'Apiarists and sericulturists plan, organize and perform operations to breed, raise and tend insects such as honey bees, silkworms and other species to produce honey, beeswax, silk and other products for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions, determining kinds and amounts of insect products to produce, and planning and coordinating production accordingly;
(b) purchasing insects and growing or purchasing feed and other supplies;
(c) breeding, raising and tending insects and collecting their products;
(d) renting or investing in, and maintaining and cleaning, buildings, machinery, equipment and structures;
(e) storing and carrying out some processing of produce;
(f) arranging the sale, purchase and transportation of stock, produce and supplies, and maintaining and evaluating records of farming activities;
(g) training and supervising workers in production procedures, maintenance duties and health and safety precautions, and hiring and discharging workers and contractors.
Examples of occupations classified here:
▪ Apiarist
▪ Sericulturist',
            ),
            404 => 
            array (
                'id' => '6129',
                'title' => 'Animal Producers Not Elsewhere Classified',
            'description' => 'This unit group covers market-oriented animal producers not classified elsewhere in Minor Group 612: Animal Producers. For instance, the group includes those engaged in breeding, raising and tending non-domesticated mammals, game and other birds (except poultry), snails, snakes and other reptiles, as well as various insects and animals used for laboratory tests, for sale or delivery on a regular basis to wholesale buyers, marketing organizations, zoos and circuses, or at markets.
In such cases tasks would include –
(a) monitoring market activity and conditions, determining kinds and amounts of products to produce, and planning and coordinating production accordingly;
(b) raising, feeding and tending animals;
(c) monitoring and examining animals to detect illness, injury or disease, and to check physical condition such as rate of weight gain;
(d) performing duties related to animal reproduction, such as breeding, artificial insemination and helping with animal births;
(e) renting or investing in, and maintaining and cleaning, buildings, machinery, equipment and structures;
(f) slaughtering and skinning animals and preparing animal products for market;
(g) storing and carrying out some processing of produce;
(h) promoting and marketing products, arranging the sale, purchase and transportation of stock, produce and supplies, and maintaining and evaluating records of activities and transactions;
(i) training and supervising workers in animal care procedures, maintenance duties and health and safety precautions.
Examples of the occupations classified here:
▪ Crocodile farmer
▪ Fur farmer (non-domesticated animals)
▪ Game bird breeder
▪ Ostrich farmer
▪ Snail breeder
Some related occupations classified elsewhere:
▪ Pet groomer – 5164
▪ Zoo keeper – 5164
▪ Game warden – 5419
▪ Poultry breeder – 6122',
            ),
            405 => 
            array (
                'id' => '613',
                'title' => 'Mixed Crop and Animal Producers',
                'description' => 'Mixed crop and animal producers plan, organize and perform farming operations to grow and harvest field, tree and various other crops, as well as to breed, raise and tend animals and to produce a variety of animal husbandry products, for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks performed usually include: monitoring market activity and conditions, determining kinds and amounts of crops to be grown and animals to be raised, and planning and coordinating production accordingly; purchasing seeds, fertilizer, and other supplies; performing operations such as land preparation, sowing, planting, cultivating and harvesting crops; producing or buying fodder and other food supplies; breeding, raising and tending animals; killing and skinning animals, and preparing animals or animal products for market; renting or investing in, and maintaining and cleaning, farm buildings, machinery, equipment and structures; storing and carrying out some processing of produce; promoting and marketing products, arranging the sale, purchase and transportation of livestock, produce and supplies, and maintaining and evaluating records of farm activities and transactions; training and supervising workers in animal care procedures, maintenance duties and health and safety precautions, and hiring and discharging workers and contractors.
Occupations in this minor group are classified into the following unit group:
6130 Mixed Crop and Animal Producers',
            ),
            406 => 
            array (
                'id' => '6130',
                'title' => 'Mixed Crop and Animal Producers',
                'description' => 'Mixed crop and animal producers plan, organize and perform farming operations to grow and harvest field, tree and various other crops, as well as to breed, raise and tend animals and to produce a variety of animal husbandry products, for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) monitoring market activity and conditions, determining kinds and amounts of crops to be grown and animals to be raised, and planning and coordinating production accordingly;
(b) purchasing seeds, fertilizer, and other supplies;
(c) performing operations such as land preparation, sowing, planting, cultivating and harvesting crops;
(d) producing or buying fodder and other food supplies;
(e) breeding, raising and tending animals;
(f) killing and skinning animals, and preparing animals or animal products for market;
(g) renting or investing in and maintaining and cleaning farm buildings, machinery, equipment, and structures;
(h) storing and carrying out some processing of produce;
(i) promoting and marketing products, arranging the sale, purchase and transportation of livestock, produce and supplies and maintaining and evaluating records of farm activities and transactions;
(j) training and supervising workers in animal care procedures, maintenance duties, and health and safety precautions and hiring and discharging workers and contractors.
Examples of the occupations classified here:
▪ Farmer (mixed farming)
▪ Skilled farm worker (mixed farming)
Some related occupations classified elsewhere:
▪ Agricultural production manager – 1311
▪ Plantation manager – 1311
▪ Mixed farm labourer – 9213
Notes
Farmers and other skilled agricultural workers whose tasks predominantly involve either raising animals or growing crops, but also involve some incidental activity in crop growing or tending animals respectively, should not be included in Unit Group 6130:  Mixed Crop and Animal Producers.  For example, a farmer who raises cattle for the market but also spends a small amount of time growing garden vegetables should be classified in Unit Group 6121: Livestock and Dairy Producers.  Similarly, a wheat farmer who keeps a small number of chickens and other farmyard animals should be classified in Unit Group 6111: Field Crop and Vegetable Growers.
Workers on mixed farms who specialize in either crop or animal production for the market should be classified in the relevant unit group in Minor Groups 611: Market Gardeners and Crop Growers, or 612: Animal Producers, as appropriate.',
            ),
            407 => 
            array (
                'id' => '62',
                'title' => 'Market-oriented Skilled Forestry, Fishery and Hunting Workers',
                'description' => 'Market-oriented skilled forestry, fishery and hunting workers plan, organize and perform operations to cultivate, conserve and exploit natural and plantation forests; breed and raise fish; harvest and catch fish; and hunt and trap animals, for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: renting or investing in equipment and machinery and purchasing  supplies;  planning and undertaking forestry, aquaculture, fishery and hunting operations; maintaining buildings, tanks, machinery and other equipment; delivering or marketing products; supervising and training other workers.
Occupations in this sub-major group are classified into the following minor groups:
621 Forestry and Related Workers
622 Fishery Workers, Hunters and Trappers
Notes
Jobs should be classified in Sub-major Group 63: Subsistence Farmers, Fishers, Hunters and Gatherers when goods (mostly food) are produced mainly for own consumption or for consumption by other members of the worker\'s household.  If a large surplus is produced, and more goods are sold than consumed, but the main aim of production was own consumption, the jobs should nevertheless be classified in Sub-major Group 63. Jobs should only be classified in Sub-major Group 61: Market-oriented Skilled Agricultural Workers, or 62: Market-oriented Skilled Forestry, Fishery and Hunting Workers, if the main aim of the activity is to produce goods for the market.',
            ),
            408 => 
            array (
                'id' => '621',
                'title' => 'Forestry and Related Workers',
                'description' => 'Forestry and related workers plan, organize and perform operations to cultivate, conserve and exploit natural and plantation forests.
Tasks performed usually include;  assessing sites for reforestation, selecting seedlings and planting trees using manual planting tools, and establishing and caring for forest stands; locating trees to be felled and estimating volume of timber; operating chainsaw and other power saws to thin young forest stands, trim, top and fell trees and saw them into logs; shaping rough wooden products from logs at a felling site; stacking logs and loading them in chutes or floating them down rivers; keeping watch to detect forest fires, participating in firefighting operations, completing firefighting reports and maintaining firefighting equipment; controlling weeds and undergrowth in regenerating forest stands, using manual tools and chemicals; operating and maintaining a skidder, bulldozer or other prime mover to pull a variety of scarification or site preparation equipment over areas to be regenerated;  collecting seed cones, pruning trees, assisting in planting surveys and marking trees for subsequent operations; training and supervising other workers in forestry procedures, including forestry labourers and plant operators.
Occupations in this minor group are classified into the following unit group:
6210 Forestry and Related Workers',
            ),
            409 => 
            array (
                'id' => '6210',
                'title' => 'Forestry and Related Workers',
                'description' => 'Forestry and related workers plan, organize and perform operations to cultivate, conserve and exploit natural and plantation forests.
Tasks include –
(a) assessing sites for reforestation, selecting seedlings and planting trees using manual planting tools and establishing and caring for forest stands;
(b) locating trees to be felled and estimating volume of timber;
(c) operating chainsaw and other power saws to thin young forest stands, trim, top and fell trees and saw them into logs;
(d) shaping rough wooden products from logs at felling site;
(e) stacking logs and loading them in chutes or floating them down rivers;
(f) keeping watch to detect forest fires, participating in fire fighting operations, completing fire fighting reports and maintaining fire fighting equipment;
(g) controlling weeds and undergrowth in regenerating forest stands using manual tools and chemicals;
(h) operating and maintaining a skidder, bulldozer or other prime mover to pull a variety of scarification or site preparation equipment over areas to be regenerated;
(i) collecting seed cones, pruning trees, assisting in planting surveys and marking trees for subsequent operations;
(j) training and supervising other workers in forestry procedures, including forestry labourers and plant operators.
Examples of the occupations classified here:
▪ Charcoal burner
▪ Logger
▪ Logging climber
▪ Skilled forestry worker
▪ Timber cruiser
▪ Tree feller
Some related occupations classified elsewhere:
▪ Silviculturist – 2132
▪ Forestry technician – 3143
▪ Tree faller operator – 8341
▪ Forestry labourer – 9215',
            ),
            410 => 
            array (
                'id' => '622',
                'title' => 'Fishery Workers, Hunters and Trappers',
                'description' => 'Fishery workers, hunters and trappers breed and raise fish, harvest and catch fish, and hunt and trap animals, for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks performed usually include:  breeding, raising and cultivating fish, mussels, oysters and other forms of aquatic life as cash crops or for release into freshwater or saltwater; monitoring environments to ensure maintenance of optimum conditions for aquatic life; cleaning, freezing, icing or salting catch on- or offshore, and preparing fish and other products for shipment;  renting or investing in and maintaining buildings, tanks, machinery, fishing vessels and other equipment;  preparing and repairing nets and other fishing gear and equipment; operating fishing vessels to, from and at fishing grounds;  baiting, setting, operating and hauling in fishing gear; setting traps to catch mammals, birds or reptiles; delivering or marketing products; supervising and training other workers.
Occupations in this minor group are classified into the following unit groups:
6221 Aquaculture Workers
6222 Inland and Coastal Waters Fishery Workers
6223 Deep-sea Fishery Workers
6224 Hunters and Trappers',
            ),
            411 => 
            array (
                'id' => '6221',
                'title' => 'Aquaculture Workers',
                'description' => 'Aquaculture workers breed and raise fish and cultivate mussels, oysters and other forms of aquatic life, for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) breeding, raising and cultivating fish, mussels, oysters and other forms of aquatic life as cash crops or for release into freshwater or saltwater;
(b) collecting and recording growth, production and environmental data;
(c) conducting and supervising stock examinations in order to identify diseases or parasites;
(d) monitoring environments to ensure maintenance of optimum conditions for aquatic life;
(e) directing and monitoring trapping and spawning of fish, egg incubation and fry rearing, applying knowledge of management and fish culturing techniques;
(f) cleaning, freezing, icing or salting catch on- or offshore, and preparing fish and other products for shipment;
(g) maintaining buildings, tanks, machinery, boats and other equipment;
(h) delivering or marketing products;
(i) renting or investing in buildings, equipment and machinery, and purchasing food and other supplies;
(j) supervising and training aquaculture and fish hatchery support workers.
Examples of the occupations classified here:
▪ Algae cultivator
▪ Fish farmer
▪ Oyster farmer
▪ Pearl cultivator
▪ Seafood farmer
▪ Skilled fish farm worker
▪ Skilled seafood farm worker
Some related occupations classified elsewhere:
▪ Aquaculture production manager – 1312
▪ Aquaculture labourer – 9216',
            ),
            412 => 
            array (
                'id' => '6222',
                'title' => 'Inland and Coastal Waters Fishery Workers',
                'description' => 'Inland and coastal waters fishery workers, alone or as members of fishing-vessel crews, catch fish or gather other forms of aquatic life in inland or coastal waters for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) preparing and repairing nets and other fishing gear and equipment;
(b) selecting areas for fishing, plotting courses and computing navigational positions using compass, charts and other aids;
(c) operating fishing vessels to, from and at fishing grounds;
(d) baiting, setting, operating and hauling in fishing gear by hand or using hoisting equipment;
(e) gathering various forms of aquatic life from shores and shallow waters;
(f) maintaining engine fishing gear and other on-board equipment;
(g) keeping records of transactions, fishing activities, weather and sea conditions, and estimating costs and budgets;
(h) sorting and storing catch in holds with salt and ice;
(i) removing catches from fishing equipment, measuring them to ensure compliance with legal size and returning undesirable or illegal catches to the water;
(j) directing fishing operations, and supervising fishing crew members.
Examples of the occupations classified here:
▪ Coastal fishery skipper
▪ Fisher (coastal waters)
▪ Fisher (inland waters)
Some related occupations classified elsewhere:
▪ Fishing operations manager – 1312
▪ Deep-sea fisher – 6223
▪ Oyster diver – 7541
▪ Fishing labourer – 9216',
            ),
            413 => 
            array (
                'id' => '6223',
                'title' => 'Deep-sea Fishery Workers',
                'description' => 'Deep-sea fishery workers, as skippers or members of fishing vessel crews, catch deep-sea fish for sale or delivery to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) preparing and repairing nets and other fishing gear and equipment;
(b) commanding and operating fishing vessels to, from and at deep-sea fishing grounds;
(c) determining areas for fishing, plotting courses and computing navigational positions using compass, charts, tables and other aids;
(d) steering vessels and operating navigational instruments and electronic fishing aids;
(e) directing fishing operations and supervising crew activities;
(f) recording fishing progress and activities, as well as weather and sea conditions, on the ship\'s log;
(g) baiting, setting and hauling in fishing gear;
(h) cleaning, freezing, icing or salting catch on- or offshore;
(i) selecting and training vessel crews.
Examples of the occupations classified here:
▪ Deep-sea fisher
▪ Trawler skipper
Some related occupations classified elsewhere:
▪ Fishing operations manager – 1312
▪ Coastal fishery skipper – 6222
▪ Fisher(coastal waters) – 6222
▪ Fisher (inland waters) – 6222
▪ Fishery labourer – 9216',
            ),
            414 => 
            array (
                'id' => '6224',
                'title' => 'Hunters and Trappers',
                'description' => 'Hunters and trappers catch and kill mammals, birds or reptiles mainly for meat, skin, feathers and other products for sale or delivery on a regular basis to wholesale buyers, marketing organizations or at markets.
Tasks include –
(a) setting traps to catch mammals, birds or reptiles;
(b) killing trapped or free mammals, birds or reptiles with firearms or other weapons;
(c) skinning and otherwise treating killed mammals, birds or reptiles to obtain desired products for sale or delivery;
(d) delivering or selling trapped live mammals, birds or reptiles;
(e) repairing and maintaining equipment.
Examples of the occupations classified here:
▪ Fur trapper
▪ Seal hunter',
            ),
            415 => 
            array (
                'id' => '63',
                'title' => 'Subsistence Farmers, Fishers, Hunters and Gatherers',
                'description' => 'Subsistence farmers, fishers, hunters and gatherers grow and harvest field or tree and shrub crops, vegetables and fruit; gather wild fruits, medicinal and other plants; tend or hunt animals; catch fish and gather various forms of aquatic life in order to provide food, shelter and, in some cases,  a minimum of cash income for themselves and their households. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: preparing the soil; sowing, planting, tending and harvesting field crops; growing vegetables, fruit and other tree and shrub crops; gathering wild fruits, medicinal and other plants; breeding, tending and feeding animals and poultry mainly to obtain meat, eggs, milk, hair, skin or other products;  hunting or trapping animals; catching fish and gathering other forms of aquatic life; fetching water and gathering firewood; storing produce for later use and carrying out some processing of produce; building and maintaining houses and other shelters; making tools, clothes and utensils for use by the household; selling or bartering some products at local markets.
Occupations in this sub-major group are classified into the following minor groups:
631 Subsistence Crop Farmers
632 Subsistence Livestock Farmers
633 Subsistence Mixed Crop and Livestock Farmers
634 Subsistence Fishers, Hunters, Trappers and Gatherers
Notes
Jobs should be classified in Sub-major Group 63: Subsistence Farmers, Fishers, Hunters and Gatherers when goods (mostly food) are produced mainly for own consumption or for consumption by other members of the worker\'s household.  If a large surplus is produced, and more goods are sold than consumed, but the main aim of production was for own consumption, the jobs should nevertheless be classified in Sub-major Group 63. Jobs should only be classified in Sub-major Group 61: Market-oriented Skilled Agricultural Workers, or 62: Market-oriented Skilled Forestry, Fishery and Hunting Workers, if the main aim of the activity is to produce goods for the market.
Jobs are also classified in Sub-major Group 63 when goods are produced only for own consumption or for consumption by members of the worker\'s household, and no cash income or bartering is involved.',
            ),
            416 => 
            array (
                'id' => '631',
                'title' => 'Subsistence Crop Farmers',
                'description' => 'Subsistence crop farmers grow and harvest field or tree and shrub crops, vegetables and fruit, in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks performed usually include: preparing the soil, sowing, planting, tending and harvesting field crops; growing vegetables, fruit and other tree and shrub crops; fetching water and gathering firewood;  storing for later use and carrying out some processing of produce; building and maintaining houses and other shelters; making tools, clothes and utensils for use by the household; selling or bartering some products at local markets.
Occupations in this minor group are classified into the following unit group:
6310 Subsistence Crop Farmers',
            ),
            417 => 
            array (
                'id' => '6310',
                'title' => 'Subsistence Crop Farmers',
                'description' => 'Subsistence crop farmers grow and harvest field or tree and shrub crops, vegetables and fruit, in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks include –
(a) preparing the soil, sowing, planting, tending and harvesting field crops;
(b) growing vegetables, fruit and other tree and shrub crops;
(c) fetching water and gathering firewood;
(d) storing for later use and carrying out some processing of produce;
(e) building and maintaining houses and other shelters;
(f) making tools, clothes and utensils for use by the household;
(g) selling or bartering some products at local markets.
Examples of the occupations classified here:
▪ Subsistence crop farmer
▪ Subsistence gardener
▪ Subsistence vegetable grower
Some related occupations classified elsewhere:
▪ Crop farm labourer – 9211
▪ Firewood collector – 9624
▪ Water collector – 9624
Notes
Workers in a subsistence setting whose main tasks are fetching water and gathering firewood are classified in Unit Group 9624: Water and Firewood Collectors. Workers in subsistence agriculture who perform a limited range of simple and routine tasks, usually under the direction of others, are classified in the relevant unit group in Sub-major Group 92: Agricultural, Forestry and Fishery Labourers',
            ),
            418 => 
            array (
                'id' => '632',
                'title' => 'Subsistence Livestock Farmers',
                'description' => 'Subsistence livestock farmers breed, raise and tend livestock in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks performed usually include: cultivating pastures or managing grazing lands, and monitoring feed and water supplies needed to maintain condition of livestock; monitoring and examining animals to detect illness, injury or disease, and to check physical condition; grooming and marking animals and shearing coats to collect hair or wool; herding or leading livestock to pastures, grazing land and water supplies; raising, tending, feeding and milking animals or draining blood from them; breeding animals and helping with animal births; slaughtering and skinning animals and preparing them and their products for consumption or sale; carrying out some processing of animal products; building and maintaining houses and other shelters; making tools, clothes and utensils for use by the household; fetching water and gathering firewood; buying, bartering and selling animals and some products.
Occupations in this minor group are classified into the following unit groups:
6320 Subsistence Livestock Farmers',
            ),
            419 => 
            array (
                'id' => '6320',
                'title' => 'Subsistence Livestock Farmers',
                'description' => 'Subsistence livestock farmers breed, raise and tend livestock in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks include –
(a) cultivating pastures, or managing grazing lands, and monitoring feed and water supplies needed to maintain condition of livestock;
(b) monitoring and examining animals to detect illness, injury or disease, and to check physical condition;
(c) grooming and marking animals and shearing coats to collect hair or wool;
(d) herding or leading livestock to pastures, grazing land and water supplies;
(e) raising, tending, feeding and milking animals or draining blood from them;
(f) breeding animals and helping with animal births;
(g) slaughtering and skinning animals and preparing them and their products for consumption or sale;
(h) carrying out some processing of animal products;
(i) building and maintaining houses and other shelters;
(j) making tools, clothes and utensils for use by the household;
(k) fetching water and gathering firewood;
(l) buying, bartering and selling animals and some products.
Examples of the occupations classified here:
▪ Subsistence cattle farmer
Some related occupations classified elsewhere:
▪ Livestock farm labourer – 9212
▪ Mixed crop and livestock farm labourer – 9213
▪ Water and firewood collector – 9624
Notes
Workers in a subsistence setting whose main tasks are fetching water and gathering firewood are classified in Unit Group 9624: Water and Firewood Collectors. Workers in subsistence agriculture who perform a limited range of simple and routine tasks, usually under the direction of others, are classified in the relevant unit group in Sub-major Group 92: Agricultural, Forestry and Fishery Labourers.',
            ),
            420 => 
            array (
                'id' => '633',
                'title' => 'Subsistence Mixed Crop and Livestock Farmers',
                'description' => 'Subsistence mixed crop and livestock farmers grow and harvest field or tree and shrub crops, vegetables and fruit; gather wild fruits, medicinal and other plants; tend or hunt animals; and/or catch fish and gather various forms of aquatic life in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks performed usually include: preparing the soil, sowing, planting, tending and harvesting field crops;  growing vegetables, fruit and other tree and shrub crops; gathering wild fruits, medicinal and other plants;  breeding, tending and feeding animals and poultry mainly to obtain meat, eggs, milk, hair, skin or other products;  fetching water and gathering firewood;  storing produce for later use and carrying out some processing of produce;  building and maintaining houses and other shelters; making tools, clothes and utensils for use by the household;  selling or bartering some products at local markets.
Occupations in this minor group are classified into the following unit group:
6330 Subsistence Mixed Crop and Livestock Farmers',
            ),
            421 => 
            array (
                'id' => '6330',
                'title' => 'Subsistence Mixed Crop and Livestock Farmers',
                'description' => 'Subsistence mixed crop and livestock farmers grow and harvest field or tree and shrub crops, vegetables and fruit; gather wild fruits, medicinal and other plants; tend or hunt animals; and/or catch fish and gather various forms of aquatic life in order to provide food, shelter and, in some cases,  a minimum of cash income for themselves and their households.
Tasks include –
(a) preparing the soil, sowing, planting, tending and harvesting field crops;
(b) growing vegetables, fruit and other tree and shrub crops;
(c) gathering wild fruits, medicinal and other plants;
(d) breeding, tending and feeding animals and poultry mainly to obtain meat, eggs, milk, hair, skin or other products;
(e) fetching water and gathering firewood;
(f) storing produce for later use and carrying out some processing of produce;
(g) building and maintaining houses and other shelters;
(h) making tools, clothes and utensils for use by the household;
(i) selling or bartering some products at local markets.
Examples of the occupations classified here:
▪ Mixed subsistence farmer
Notes
Workers in a subsistence setting whose main tasks are fetching water and gathering firewood are classified in Unit Group 9624: Water and Firewood Collectors. Workers in subsistence agriculture who perform a limited range of simple and routine tasks, usually under the direction of others, are classified in the relevant unit group in Sub-major Group 92: Agricultural, Forestry and Fishery Labourers.',
            ),
            422 => 
            array (
                'id' => '634',
                'title' => 'Subsistence Fishers, Hunters, Trappers and Gatherers',
                'description' => 'Subsistence fishers, hunters, trappers and gatherers gather wild fruits, medicinal and other plants; hunt and trap animals; and catch fish and gather various forms of aquatic life in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks performed usually include: gathering wild fruits, roots, medicinal and other plants; hunting or trapping animals mainly to obtain meat, milk, hair, skin or other products; fetching water and gathering firewood; catching fish and gathering other forms of aquatic life; storing or carrying out some processing of their produce; building and maintaining houses and other shelters; making tools, clothes and utensils for use by the household; selling or bartering some products at local markets.
Occupations in this minor group are classified into the following unit group:
6340 Subsistence Fishers, Hunters, Trappers and Gatherers',
            ),
            423 => 
            array (
                'id' => '6340',
                'title' => 'Subsistence Fishers, Hunters, Trappers and Gatherers',
                'description' => 'Subsistence fishers, hunters, trappers and gatherers gather wild fruits, medicinal and other plants; hunt and trap animals; and catch fish and gather various forms of aquatic life in order to provide food, shelter and, in some cases, a minimum of cash income for themselves and their households.
Tasks include –
(a) gathering wild fruits, roots, medicinal and other plants;
(b) hunting or trapping animals mainly to obtain meat, milk, hair, skin or other products;
(c) fetching water and gathering firewood;
(d) catching fish and gathering other forms of aquatic life;
(e) storing or carrying out some processing of their produce;
(f) building and maintaining houses and other shelters;
(g) making tools, clothes and utensils for use by the household;
(h) selling or bartering some products at local markets.
Examples of the occupations classified here:
▪ Hunter-gatherer
▪ Subsistence collector
▪ Subsistence diver
▪ Subsistence fisher
▪ Subsistence trapper
Some related occupations classified elsewhere:
▪ Subsistence crop farmer – 6310
▪ Subsistence livestock farmer – 6320
▪ Livestock farm labourer – 9212
▪ Water and firewood collector – 9624
Notes
Workers in a subsistence setting whose main tasks are fetching water and gathering firewood are classified in Unit Group 9624: Water and Firewood Collectors. Workers in subsistence agriculture who perform a limited range of simple and routine tasks, usually under the direction of others, are classified in the relevant unit group in Sub-major Group 92: Agricultural, Forestry and Fishery Labourers.',
            ),
            424 => 
            array (
                'id' => '7',
                'title' => 'Craft and Related Trades Workers',
                'description' => 'Craft and related trades workers apply specific technical and practical knowledge and skills to construct and maintain buildings; form metal; erect metal structures; set machine tools or make, fit, maintain and repair machinery, equipment or tools; carry out printing work; and produce or process foodstuffs, textiles, wooden, metal and other articles, including handicraft goods. Competent performance in most occupations in this major group requires skills at the second ISCO skill level.
The work is carried out by hand and by hand-powered and other tools which are used to reduce the amount of physical effort and time required for specific tasks, as well as to improve the quality of the products. The tasks call for an understanding of all stages of the production process, the materials and tools used, and the nature and purpose of the final product.
Tasks performed by craft and related trades workers usually include: constructing, maintaining and repairing buildings and other structures; casting, welding and shaping metal; installing and erecting heavy metal structures, tackle and related equipment; making machinery, tools, equipment and other metal articles; setting for operators, or setting and operating various machine tools; fitting, maintaining and repairing industrial machinery, engines, vehicles, electrical and electronic instruments and other equipment; making precision instruments, jewellery, household and other precious metal articles, pottery, glass and related products; producing handicrafts; executing printing work; producing and processing foodstuffs and various articles made of wood, textiles, leather and related materials. Supervision of other workers may be included.  Self-employed craft and related trades workers, who operate their own businesses either independently or with assistance from a small number of others, may also perform a range of tasks associated with management of the business, account and record keeping and client service, although such tasks would not normally comprise the major component of the work.
Occupations in this major group are classified into the following sub-major groups:
71 Building and Related Trades Workers (excluding electricians)
72 Metal, Machinery and Related Trades Workers
73 Handicraft and Printing Workers
74 Electrical and Electronics Trades Workers
75 Food Processing, Woodworking, Garment and Other Craft and Related Trades Workers',
            ),
            425 => 
            array (
                'id' => '71',
            'title' => 'Building and Related Trades Workers (excluding Electricians)',
                'description' => 'Building and related trades workers construct, maintain and repair buildings; erect and repair foundations, walls and structures of brick, stone and similar materials; shape and finish stone for building and other purposes. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
The work is carried out by hand and by hand-powered and other tools which are used to reduce the amount of physical effort and time required for specific tasks, as well as to improve the quality of the products. The tasks call for an understanding of the work organization, the materials and tools used, and the nature and purpose of the final product.
Tasks performed by workers in this sub-major group usually include: constructing, maintaining and repairing buildings and other structures, using traditional and/or modern building techniques; constructing and repairing foundations, walls and structures of brick, stone and similar materials; breaking quarried stone into slabs or blocks; cutting, shaping and finishing stone for building, ornamental, monumental and other purposes; erecting reinforced concrete frameworks and structures as well as finishing and repairing cement surfaces; cutting, shaping, assembling and maintaining wooden structures and fittings; performing miscellaneous construction and building maintenance tasks. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
711 Building Frame and Related Trades Workers
712 Building Finishers and Related Trades Workers
713 Painters, Building Structure Cleaners and Related Trades Workers',
            ),
            426 => 
            array (
                'id' => '711',
                'title' => 'Building Frame and Related Trades Workers',
                'description' => 'Building frame and related trades workers construct, maintain and repair buildings; erect and repair foundations, walls and structures of brick, stone and similar materials; shape and finish stone for building and other purposes; and perform miscellaneous construction and building maintenance tasks.
Tasks performed usually include: constructing, maintaining and repairing buildings and other structures by using traditional and/or modern building techniques; constructing and repairing foundations, walls and structures of brick, stone and similar materials; breaking quarried stone into slabs or blocks; cutting, shaping and finishing stone for building, ornamental, monumental and other purposes; erecting reinforced concrete frameworks and structures as well as finishing and repairing cement surfaces; cutting, shaping, assembling and maintaining wooden structures and fittings; performing miscellaneous construction and building maintenance tasks. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
7111 House Builders
7112 Bricklayers and Related Workers
7113 Stonemasons, Stone Cutters, Splitters and Carvers
7114 Concrete Placers, Concrete Finishers and Related Workers
7115 Carpenters and Joiners
7119 Building Frame and Related Trades Workers Not Elsewhere Classified',
            ),
            427 => 
            array (
                'id' => '7111',
                'title' => 'House Builders',
                'description' => 'House builders erect, maintain and repair houses and similar small buildings using either traditional or modern techniques and materials.
Tasks include –
(a) preparing ground for erecting building or other structures;
(b) erecting structures to support roofs, and building and covering walls with appropriate materials;
(c) fixing rafters to roofs and covering with roofing material;
(d) levelling floors to make them smooth and serviceable;
(e) maintaining and repairing existing structures;
(f) arranging for specialized work such as bricklaying, painting, plumbing and electrical wiring to be done by subcontractors;
(g) coordinating and supervising the activities of subcontractors, labourers and other workers.
Examples of the occupations classified here:
▪ House builder
Some related occupations classified elsewhere:
▪ Construction project manager – 1323
▪ Project builder – 1323
▪ Construction supervisor – 3123',
            ),
            428 => 
            array (
                'id' => '7112',
                'title' => 'Bricklayers and Related Workers',
                'description' => 'Bricklayers and related workers lay bricks, pre-cut stones and other types of building blocks in mortar to construct and repair walls, partitions, arches and other structures.
Tasks include –
(a) laying stone, brick and similar building blocks to construct or repair walls, partitions, fireplaces and other structures such as smokestacks, furnaces, converters, kilns and ovens, piers and abutments;
(b) laying footpaths, kerbs and pavements;
(c) laying bricks or other masonry to build patios, garden walls and other decorative installations.
Examples of the occupations classified here:
▪ Block layer
▪ Bricklayer
▪ Chimney builder
▪ Refractory bricklayer
Some related occupations classified elsewhere:
▪ Stonemason – 7113',
            ),
            429 => 
            array (
                'id' => '7113',
                'title' => 'Stonemasons, Stone Cutters, Splitters and Carvers',
                'description' => 'Stonemasons, stone cutters, splitters and carvers cut and shape hard and soft stone blocks and slabs for the construction and maintenance of stone structures and monumental masonry, and carve designs and figures in stone.
Tasks include –
(a) driving wedges into quarried stone to break it into slabs or blocks;
(b) selecting and grading slabs and blocks of granite, marble and other stone;
(c) cutting, shaping and finishing building and monumental stone such as granite or marble using hand tools or hand-held power tools;
(d) making patterns and marking shapes on stone for subsequent sawing, planing, drilling and other dressing and cutting operations;
(e) cutting and carving characters, figures or designs on stone blocks used for monuments or memorials;
(f) setting stone in the erection of monuments and memorials;
(g) repairing and replacing stonework on old buildings, churches and monuments.
Examples of the occupations classified here:
▪ Granite cutter
▪ Stone carver
▪ Stone cutter
▪ Stone polisher (hand or hand-powered tools)
Some related occupations classified elsewhere:
▪ Wall and floor tile setters – 7122
▪ Machine operator (stone cutting or processing) – 8112',
            ),
            430 => 
            array (
                'id' => '7114',
                'title' => 'Concrete Placers, Concrete Finishers and Related Workers',
                'description' => 'Concrete placers, concrete finishers and related workers erect reinforced concrete frameworks and structures, make forms for moulding concrete, reinforce concrete surfaces, cement openings in walls or casings for wells, finish and repair cement surfaces and carry out terrazzo work.
Tasks include –
(a) constructing and repairing reinforced concrete floors, walls, tanks, silos and other concrete structures;
(b) making shuttering or assembling prefabricated forms for moulding concrete;
(c) cementing openings in walls or casings for wells;
(d) finishing and smoothing surfaces of concrete structures;
(e) applying a durable smooth surfacing composed of cement, sand pigment and marble particles to floors, known as a terrazzo finish.
Examples of the occupations classified here:
▪ Cement finisher
▪ Concrete placer
▪ Terrazzo worker
Some related occupations classified elsewhere:
▪ Concrete finishing machine operator – 8114
▪ Road surface laying machinery operator – 8342',
            ),
            431 => 
            array (
                'id' => '7115',
                'title' => 'Carpenters and Joiners',
                'description' => 'Carpenters and joiners cut, shape, assemble, erect, maintain and repair various types of structures and fittings made from wood and other materials.
Tasks include –
(a) making, altering and repairing structural and other woodwork at a workbench or on a construction site;
(b) constructing, erecting and installing heavy-framed wooden structures on building sites;
(c) fitting, assembling and altering internal and external fixtures of buildings, such as walls, doors, door and window frames, facings and panelling;
(d) making, repairing and fitting scenic equipment for theatrical performances and motion picture or television productions;
(e) constructing, assembling, altering and repairing wooden fixtures and fittings in train coaches, aircraft, ships, boats, floats and other vehicles.
Examples of the occupations classified here:
▪ Carpenter
▪ Door installer
▪ Finish carpenter
▪ Framer
▪ Joiner
▪ Shipwright (wood)
Some related occupations classified elsewhere:
▪ Cabinet-maker – 7522
▪ Wheelwright – 7522',
            ),
            432 => 
            array (
                'id' => '7119',
                'title' => 'Building Frame and Related Trades Workers Not Elsewhere Classified',
                'description' => 'This unit group covers building frame and related trades workers not classified elsewhere in Minor Group 711: Building Frame and Related Trades Workers. For instance, the unit group includes steeplejacks, scaffolders and demolition workers.
In such cases tasks would include –
(a) climbing and performing miscellaneous construction and building maintenance work on tall structures such as towers, chimneys and spires;
(b) erecting temporary metal or wooden scaffolding on building sites;
(c) demolishing buildings and other structures.
Examples of the occupations classified here:
▪ Building wrecker
▪ Prefabricated building assembler
▪ Scaffolder
▪ Skilled demolition worker
▪ Steeplejack
Some related occupations classified elsewhere:
▪ Construction labourer (building work) – 9313
▪ Demolition labourer – 9313',
            ),
            433 => 
            array (
                'id' => '712',
                'title' => 'Building Finishers and Related Trades Workers',
                'description' => 'Building finishers and related trades workers cover, apply or install, maintain and repair roofs, floors, walls, insulation systems, glass in windows or other frames, as well as plumbing, piping and electrical systems in buildings and other structures.
Tasks performed usually include: covering roof frameworks with one or more kinds of material; installing parquet and other kinds of flooring, or covering floors and walls with tiles or mosaic panels; applying plaster to walls and ceilings; applying insulating material to walls, floors and ceilings; cutting, fitting and setting glass in windows and similar openings; installing plumbing and pipeline systems; installing electrical wiring and related equipment. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
7121 Roofers
7122 Floor Layers and Tile Setters
7123 Plasterers
7124 Insulation Workers
7125 Glaziers
7126 Plumbers and Pipe Fitters
7127 Air Conditioning and Refrigeration Mechanics',
            ),
            434 => 
            array (
                'id' => '7121',
                'title' => 'Roofers',
                'description' => 'Roofers build and repair roofs on all types of buildings, using one or more kinds of material.
Tasks include –
(a) studying drawings, specifications and construction sites to determine materials required;
(b) covering roof frameworks with slate and prefabricated tiles to cover pitched roofs;
(c) laying a waterproof shield and fixing metallic or synthetic materials to a building\'s frame;
(d) sizing and cutting roofing materials to fit around edges, corners and protuberances such as chimneys;
(e) using natural materials such as thatching to provide roof coverings;
(f) creating temporary structures such as scaffolding and ladders.
Examples of the occupations classified here:
▪ Asphalt roofer
▪ Metal roofer
▪ Roof fixer
▪ Roof tiler
▪ Slate roofer
▪ Thatcher
Note
Installers of metal roofing are classified in Unit Group 7121: Roofers.  Workers who make sheet metal products for adaptation and installation by roofers are classified in Unit Group 7213: Sheet Metal Workers.',
            ),
            435 => 
            array (
                'id' => '7122',
                'title' => 'Floor Layers and Tile Setters',
                'description' => 'Floor layers and tile setters install, maintain and repair flooring, and cover floors, walls and other surfaces with carpets, tiles or mosaic panels for decorative or other purposes.
Tasks include –
(a) preparing floor areas for covering with a variety of materials;
(b) assembling carpet, tiles or other materials and laying them on floors according to design and other specifications;
(c) preparing wall areas for covering with tiles or other materials for decorative or other purposes such as acoustic insulation;
(d) setting tiles and constructing and laying mosaic panels to walls, floors and other surfaces.
Examples of the occupations classified here:
▪ Carpet layer
▪ Marble setter
▪ Parquetry worker
▪ Tile setter',
            ),
            436 => 
            array (
                'id' => '7123',
                'title' => 'Plasterers',
                'description' => 'Plasterers install, maintain and repair plasterboard in buildings, and apply decorative and protective coverings of plaster, cement and similar material to the interiors and exteriors of structures.
Tasks include –
(a) applying one or more coats of plaster to interior walls and ceilings of buildings to produce a finished surface;
(b) measuring, marking and installing ornamental plaster panels, and casting and trimming ornamental plaster cornices;
(c) measuring, marking and cutting plasterboard, lifting and positioning panels and securing them to walls, ceilings and battens;
(d) covering joins and nail holes with wet plaster and sealing compounds, and smoothing them using wet brushes and sandpaper;
(e) applying protective and decorative coverings of cement, plaster and similar materials to exterior building surfaces;
(f) making and installing decorative plaster fixtures of fibrous plaster;
(g) applying and finishing acoustic, insulating and fireproofing materials bonded with plaster, plastic cement and similar materials.
Examples of the occupations classified here:
▪ Dry wall  plasterer
▪ Fibrous plasterer
▪ Ornamental plasterer
▪ Plasterer
▪ Solid plasterer
▪ Stucco plasterer',
            ),
            437 => 
            array (
                'id' => '7124',
                'title' => 'Insulation Workers',
                'description' => 'Insulation workers apply and repair insulating materials to buildings, boilers, pipes or refrigeration and air conditioning equipment.
Tasks include –
(a) cutting insulation material by size and shape;
(b) applying slabs and sheets of insulating or sound-absorbing materials to walls, floors and ceilings of buildings;
(c) blowing and packing insulating or sound-absorbing materials into cavities between walls, floors and ceilings of buildings with power-driven machines;
(d) examining plans, specifications and work sites to determine the type, quality and quantity of insulation material required;
(e) applying insulating materials to exposed surfaces of equipment such as boilers, pipes and tanks;
(f) insulating refrigeration and air conditioning equipment.
Examples of the occupations classified here:
▪ Acoustic insulation worker
▪ Boiler and pipe insulation worker
▪ Insulation installer
▪ Insulation worker
▪ Refrigeration and air conditioning equipment insulation worker',
            ),
            438 => 
            array (
                'id' => '7125',
                'title' => 'Glaziers',
                'description' => 'Glaziers measure, cut, finish, fit and install flat glass and mirrors.
Tasks include –
(a) selecting the type of glass to be used, cutting to right size and shape and installing in windows, doors, showers and partitions of buildings;
(b) installing glass and mirrors in skylights, display cases, interior walls and ceilings;
(c) installing or replacing windscreens in vehicles or boats;
(d) creating decorative glass features such as glass walls, staircases, balustrades and stained-glass windows.
Examples of the occupations classified here:
▪ Autoglazier
▪ Glazier
▪ Roofing glazier
▪ Vehicle glazier
Some related occupations classified elsewhere:
▪ Glass cutter – 7315
▪ Glass finisher – 7315',
            ),
            439 => 
            array (
                'id' => '7126',
                'title' => 'Plumbers and Pipe Fitters',
                'description' => 'Plumbers and pipe fitters assemble, install, repair and maintain pipe systems, drains, gutters, ducts and related fittings and fixtures for water, gas, drainage, sewerage, heating, cooling and ventilation systems, and for hydraulic and pneumatic equipment.
Tasks include –
(a) examining blueprints, drawings and specifications to determine the layout of plumbing and ventilation systems and materials required;
(b) measuring, cutting, threading, bending, jointing, assembling, installing, maintaining and repairing pipes, fittings and fixtures of drainage, heating, ventilation, water supply and sewerage systems;
(c) installing gas appliances, dishwashers and water heaters, sinks and toilets using hand and power tools;
(d) laying clay, concrete or cast-iron pipes in ditches to form sewers, drains or water mains, or for other purposes;
(e) inspecting, examining and testing installed systems and pipes, using pressure gauge, hydrostatic testing, observation or other methods.
Examples of the occupations classified here:
▪ Drain technician
▪ Gas fitter
▪ Pipe fitter
▪ Pipe layer
▪ Plumber
▪ Ventilation pipe fitter
Some related occupations classified elsewhere:
▪ Air conditioning and refrigeration mechanics – 7127
Notes
Installers of metal drains, gutters and ducts are classified in Unit Group 7126:  Plumbers and Pipe Fitters.  Workers who make sheet metal products for adaptation and installation plumbers are classified in Unit Group 7213:  Sheet Metal Workers.',
            ),
            440 => 
            array (
                'id' => '7127',
                'title' => 'Air Conditioning and Refrigeration Mechanics',
                'description' => 'Air conditioning and refrigeration mechanics assemble, install, maintain and repair air conditioning and refrigeration systems and equipment.
Tasks include –
(a) interpreting blueprints, drawings and other specifications;
(b) assembling, installing and repairing components such as compressors, motors, condensers, evaporators, switches and gauges for air conditioning and refrigeration systems;
(c) connecting piping and equipment by bolting, riveting, welding or brazing;
(d) testing systems, diagnosing faults and performing routine maintenance or servicing.
Examples of the occupations classified here:
▪ Air conditioning equipment mechanic
▪ Refrigeration mechanic
Some related occupations classified elsewhere:
▪ Plumber and pipe fitter – 7126
▪ Ventilation pipe fitter – 7126',
            ),
            441 => 
            array (
                'id' => '713',
                'title' => 'Painters, Building Structure Cleaners and Related Trades Workers',
                'description' => 'Painters, building structure cleaners and related trades workers prepare surfaces and apply paint and similar materials to buildings and other structures, vehicles or various manufactured articles. They cover interior walls and ceilings with wallpaper, and clean chimneys and exterior surfaces of buildings and other structures.
Tasks performed usually include: preparing surfaces and applying paint and similar materials to buildings and other structures; applying paint or varnish to vehicles or various manufactured articles, usually with a hand-spraying device; covering interior walls and ceilings with wallpaper, silk or other fabrics; cleaning chimneys; cleaning exterior surfaces of buildings and other structures. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
7131 Painters and Related Workers
7132 Spray Painters and Varnishers
7133 Building Structure Cleaners',
            ),
            442 => 
            array (
                'id' => '7131',
                'title' => 'Painters and Related Workers',
                'description' => 'Painters and related workers prepare surfaces of buildings and other structures for painting, apply protective and decorative coats of paint or similar materials, or cover interior walls and ceilings of buildings with wallpaper or other finishes.
Tasks include –
(a) cleaning and preparing walls and other surfaces of buildings for painting or wallpapering;
(b) selecting and preparing paints to required colours by mixing pigments and additives;
(c) applying or spraying paint, varnish and similar materials to surfaces, fixtures and fittings of buildings;
(d) measuring and hanging wallpaper or other fabrics on interior walls and ceilings;
(e) applying paints, varnishes and stains to surfaces using brushes, rollers and sprays.
Examples of the occupations classified here:
▪ Building painter
▪ Paperhanger',
            ),
            443 => 
            array (
                'id' => '7132',
                'title' => 'Spray Painters and Varnishers',
                'description' => 'Spray painters and varnishers operate spray painting and varnishing equipment to apply protective coatings to manufactured items or structures.
Tasks include –
(a) preparing surfaces to be coated using a variety of methods to remove grease, dirt and rust;
(b) painting cars, buses, trucks and other vehicles, and applying varnish and other protective coatings;
(c) applying paint as well as protective coatings of enamel or varnish on metal, wooden and other manufactured products, usually with a hand-spraying device.
Examples of the occupations classified here:
▪ Manufactured articles painter
▪ Varnisher
▪ Vehicle painter
Some related occupations classified elsewhere:
▪ Building painter – 7131
▪ Decorative painter – 7316
▪ Signwriter – 7316
▪ Wood treater – 7521
▪ Metal coating machine operator – 8122',
            ),
            444 => 
            array (
                'id' => '7133',
                'title' => 'Building Structure Cleaners',
                'description' => 'Building structure cleaners clean exterior surfaces of buildings and other structures, and remove soot from chimneys.
Tasks include –
(a) cleaning exterior surfaces of stone, brick, metal or similar materials by means of chemicals, or a jet of steam or sand applied under high pressure;
(b) removing soot from flues, chimneys and connecting pipes;
(c) removing asbestos, mould and fire-damaged surfaces from buildings.
Examples of the occupations classified here:
▪ Building exteriors cleaner
▪ Chimney sweep
▪ Sandblaster (building exteriors)
Some related occupations classified elsewhere:
▪ Graffiti cleaner – 9129
▪ Water blaster – 9129',
            ),
            445 => 
            array (
                'id' => '72',
                'title' => 'Metal, Machinery and Related Trades Workers',
                'description' => 'Metal, machinery and related trades workers cast, weld, forge and, by other methods, form metal; erect, maintain and repair heavy metal structures; engage in machine-tool setting as well as in fitting, maintaining and repairing machinery including engines and vehicles; or they produce tools and various non-precious metal articles. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
The work is carried out by hand and by hand-powered and other tools which are used to reduce the amount of physical effort and time required for specific tasks, as well as to improve the quality of the products. The tasks call for an understanding of the work organization, materials and tools used, and the nature and purpose of the final product
Tasks performed by workers in this sub-major group usually include: making  moulds and cores for casting metal; casting, welding and shaping metal;  installing, erecting, maintaining and repairing heavy metal structures, tackle  and related equipment; forging and forming steel and other non-precious metals to make and repair machinery, tools, equipment and other articles; setting for  operators or setting and operating various machine tools; fitting, maintaining and repairing industrial machinery, including engines and vehicles. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
721 Sheet and Structural Metal Workers, Moulders and Welders, and Related Workers
722 Blacksmiths, Toolmakers and Related Trades Workers
723 Machinery Mechanics and Repairers',
            ),
            446 => 
            array (
                'id' => '721',
                'title' => 'Sheet and Structural Metal Workers, Moulders and Welders, and Related Workers',
                'description' => 'Sheet and structural metal workers, moulders and welders, and related workers, make moulds and cores for casting metal, weld and cut metal parts, make and repair articles of sheet metal, and install, erect, maintain and repair heavy metal structures, tackle, cable cars and related equipment.
Tasks performed usually include: making moulds and cores for casting metal; casting, welding and shaping metal parts; making and repairing articles of sheet metal such as sheet steel, copper, tin or brass; installing, erecting, maintaining and repairing heavy metal structures as well as tackle, cable cars and related equipment.
Occupations in this minor group are classified into the following unit groups:
7211 Metal Moulders and Coremakers
7212 Welders and Flame Cutters
7213 Sheet Metal Workers
7214 Structural Metal Preparers and Erectors
7215 Riggers and Cable Splicers',
            ),
            447 => 
            array (
                'id' => '7211',
                'title' => 'Metal Moulders and Coremakers',
                'description' => 'Metal moulders and coremakers make moulds and cores for casting metal.
Tasks include –
(a) making moulds by hand or using auxiliary machines on a bench for small metal castings, on the foundry floor, or in a pit for large castings;
(b) making cores for use in metal moulds;
(c) cleaning and smoothing moulds, core boxes, and repairing surface imperfections;
(d) moving and positioning work pieces such as mould sections, patterns and bottom boards, using cranes, or signalling others to move work pieces;
(e) positioning patterns inside mould sections and clamping sections together;
(f) cutting spouts, runner holes and sprue holes into moulds;
(g) lifting upper mould sections from lower sections and remove moulded patterns.
Examples of the occupations classified here:
▪ Coremaker
▪ Metal casting moulder',
            ),
            448 => 
            array (
                'id' => '7212',
                'title' => 'Welders and Flame Cutters',
                'description' => 'Welders and flame cutters weld and cut metal parts using gas flame, electric arc and other sources of heat to melt and cut, or to melt and fuse metal.
Tasks include –
(a) welding metal parts using gas flame, or an electric arc, thermite compound or other methods;
(b) operating resistance-welding machines;
(c) using blowtorches to make and repair lead linings, pipes, floors and other lead fixtures;
(d) brazing metal parts together;
(e) cutting metal pieces using gas flame or an electric arc;
(f) joining metal parts by hand soldering;
(g) monitoring the fitting, burning and welding processes to avoid overheating of parts or warping, shrinking, distortion or expansion of material;
(h) examining work pieces for defects and measuring work pieces with straight edges or templates to ensure conformity with specifications.
Examples of the occupations classified here:
▪ Brazier
▪ Flame cutter
▪ Welder',
            ),
            449 => 
            array (
                'id' => '7213',
                'title' => 'Sheet Metal Workers',
                'description' => 'Sheet metal workers make, install and repair articles and parts of articles made out of sheet metal such as sheet steel, copper, tin, brass, aluminium, zinc or galvanized iron.
Tasks include –
(a) marking sheet metal for cutting and shaping;
(b) making and repairing household utensils and other articles in tin, copper and light alloys, or ornamental articles and fittings;
(c) making and repairing boilers, tanks, vats and similar containers;
(d) installing and repairing sheet metal parts of vehicles and aircraft;
(e) converting blueprints into shop drawings to be followed in the construction and assembly of sheet metal products;
(f) determining project requirements, including scope, assembly sequences and required methods and materials, according to blueprints, drawings and written or verbal instructions;
(g) inspecting product quality and installation to ensure conformity with specifications.
Examples of the occupations classified here:
▪ Boilersmith
▪ Coppersmith
▪ Panel beater
▪ Tinsmith
Notes
Installers of metal roofing are classified in Unit Group 7121: Roofers.  Installers of metal drains, gutters and ducts are classified in Unit Group 7126: Plumbers and Pipe Fitters.  Workers who make sheet metal products for adaptation and installation by roofers and plumbers are classified in Unit Group 7213: Sheet Metal Workers.',
            ),
            450 => 
            array (
                'id' => '7214',
                'title' => 'Structural Metal Preparers and Erectors',
                'description' => 'Structural metal preparers and erectors assemble, erect and dismantle structural metal frames of buildings and other structures.
Tasks include –
(a) marking metal framework as a guide when drilling cutting, and shaping metal stock for use in buildings, ships and other structures;
(b) drilling, cutting and shaping structural steel in a workshop;
(c) erecting steel framework for buildings, bridges and other constructions;
(d) assembling and erecting the framework and other metal parts of ships\' structures;
(e) shaping and fitting structural steel plates of ships under construction or repair;
(f) riveting structural metal members by hand, machine or pneumatic riveter.
Examples of the occupations classified here:
▪ Erector, structural metal
▪ Preparer, structural metal
▪ Riveter
Some related occupations classified elsewhere:
▪ Rivet production machine operator – 7223',
            ),
            451 => 
            array (
                'id' => '7215',
                'title' => 'Riggers and Cable Splicers',
                'description' => 'Riggers and cable splicers assemble rigging gear to move and position equipment and structural components, or install and maintain cables, ropes and wires on construction sites, buildings or other structures.
Tasks include –
(a) estimating the size, shape and weight of objects to be moved and deciding on the type of equipment to move them;
(b) installing and repairing cables, ropes, wires, pulleys and other tackle;
(c) joining, repairing and fitting attachments to wires, ropes and cables;
(d) working as member of a crew erecting and repairing derricks for drilling water, gas and oil wells;
(e) lifting and mounting scenery, lighting and other equipment in theatres and on film sets;
(f) installing and maintaining communication towers, aerial cableways, funicular railways, ski lifts and similar infrastructure.
Examples of the occupations classified here:
▪ Cable and rope splicer
▪ Rigger
▪ Ship rigger
▪ Theatrical rigger
▪ Tower rigger
Some related occupations classified elsewhere:
▪ Cable splicing machine operator – 8189
▪ Crane, hoist and related plant operators – 8343',
            ),
            452 => 
            array (
                'id' => '722',
                'title' => 'Blacksmiths, Toolmakers and Related Trades Workers',
                'description' => 'Blacksmiths, toolmakers and related trades workers hammer and forge bars, rods or ingots of iron, steel and other metals to make and repair various kinds of tools, equipment and other articles; set machine tools for operators, or set and operate various machine tools; and polish and sharpen surfaces.
Tasks performed usually include: hammering and forging iron, steel and other metals to make and repair various kinds of tools, equipment and other articles; setting machine tools for operators, or setting and operating various machine tools working to fine tolerances; polishing and sharpening metal surfaces and tools.
Occupations in this minor group are classified into the following unit groups:
7221 Blacksmiths, Hammersmiths and Forging Press Workers
7222 Toolmakers and Related Workers
7223 Metal Working Machine Tool Setters and Operators
7224 Metal Polishers, Wheel Grinders and Tool Sharpeners',
            ),
            453 => 
            array (
                'id' => '7221',
                'title' => 'Blacksmiths, Hammersmiths and Forging Press Workers',
                'description' => 'Blacksmiths, hammersmiths and forging press workers hammer and forge bars, rods, ingots and plates of iron, steel or other metals, and draw wire to make and repair various kinds of tools, metal articles, pieces of equipment, and agricultural and related implements.
Tasks include –
(a) heating metal in forge furnaces and manufacturing and repairing articles by drawing, bending,  cutting, hammering metal on an anvil, punching, shearing, joining and hardening or tempering;
(b) shaping heated metal into forgings on power hammers equipped with open dies;
(c) operating closed-die drop hammers to forge metal articles;
(d) operating a power-press machine equipped with closed dies to forge metal articles;
(e) drawing wire;
(f) reading work orders or blueprints to determine specified tolerances and sequences of operations for machine setup;
(g) measuring and inspecting machine parts to ensure conformity with product specifications.
Examples of the occupations classified here:
▪ Blacksmith
▪ Drop hammer worker
▪ Forging press worker
▪ Hammersmith
Some related occupations classified elsewhere:
▪ Casting machine operator – 7223
▪ Machine tool operator – 7223',
            ),
            454 => 
            array (
                'id' => '7222',
                'title' => 'Toolmakers and Related Workers',
                'description' => 'Toolmakers and related workers make and repair custom-made and specialized tools, sports guns, locks, dies, patterns, machinery components and other metal articles using hand and machine tools to work metal to fine tolerances.
Tasks include –
(a) reading and interpreting engineering drawings and specifications of tools, dies, prototypes or models;
(b) preparing templates and sketches, and determining work processes;
(c) visualizing and computing dimensions, sizes, shapes and tolerances of assemblies, based on specifications;
(d) positioning, securing and measuring metal stock or castings to lay out for machining;
(e) setting up, operating and maintaining conventional and computer numerically controlled machine tools to cut, turn, mill, plane, drill, bore, grind or otherwise shape work pieces to prescribed dimensions and finish;
(f) fitting and assembling parts to make and repair jigs, fixtures and gauges;
(g) repairing and modifying sports guns and other small arms;
(h) making, fitting, assembling, repairing and installing lock parts and locks;
(i) making and repairing metal patterns for preparation of foundry moulds;
(j) laying out lines and reference points on metal stock to guide other workers who cut, turn, mill, grind or otherwise shape metal;
(k) verifying dimensions, alignments and clearances of finished parts for conformity with specifications, using precision measuring instruments and testing completed items for proper operation.
Examples of the occupations classified here:
▪ Die maker
▪ Gunsmith
▪ Jig maker
▪ Locksmith
▪ Patternmaker
▪ Toolmaker
Some related occupations classified elsewhere:
▪ Tool production machine operator – 7223',
            ),
            455 => 
            array (
                'id' => '7223',
                'title' => 'Metal Working Machine Tool Setters and Operators',
                'description' => 'Metal working machine tool setters and operators set and/or operate various machine tools, working to fine tolerances.
Tasks include –
(a) setting one or more types of machine tool for production of metal articles in standardized series;
(b) operating and monitoring metal working machines such as lathes, milling, planing, boring, drilling, grinding or honing machines, including multipurpose numerically controlled metal working machines;
(c) performing similar tasks when machining plastics and other metal substitutes;
(d) observing machine operations to detect work piece defects or machine malfunctions, and adjusting machines as necessary;
(e) inspecting work pieces for defects, and measuring work pieces to determine accuracy of machine operation, using rules, templates or other measuring instruments;
(f) changing worn machine accessories such as cutting tools and brushes, using hand tools.
Examples of the occupations classified here:
▪ Boring machine operator
▪ Casting machine operator
▪ Machine tool operator
▪ Machine tool setter
▪ Machine tool setter–operator
▪ Metal turner
▪ Rivet production machine operator
▪ Tool production machine operator',
            ),
            456 => 
            array (
                'id' => '7224',
                'title' => 'Metal Polishers, Wheel Grinders and Tool Sharpeners',
                'description' => 'Metal polishers, wheel grinders and tool sharpeners polish and grind metal surfaces and sharpen tools.
Tasks include –
(a) operating fixed or portable buffing and polishing machines;
(b) sharpening cutting tools and instruments using grinding wheels or mechanically operated grinding machines;
(c) repairing, adjusting and sharpening saw blades and metal teeth of cylinders in textile carding machines;
(d) dressing grinding wheels according to specifications;
(e) monitoring machine operations to determine whether adjustments are necessary, and stopping machines when problems occur;
(f) inspecting, feeling and measuring work pieces to ensure that surfaces and dimensions meet specifications;
(g) selecting and mounting grinding wheels on machines according to specifications, using hand tools and applying knowledge of abrasives and grinding procedures.
Examples of the occupations classified here:
▪ Knife sharpener
▪ Metal finisher
▪ Metal polisher
▪ Tool grinder
Some related occupations classified elsewhere:
▪ Metal finishing machine operator – 8122
▪ Metal polishing machine operator – 8122',
            ),
            457 => 
            array (
                'id' => '723',
                'title' => 'Machinery Mechanics and Repairers',
                'description' => 'Machinery mechanics and repairers fit, install, maintain and repair engines, vehicles, agricultural or industrial machinery and similar mechanical equipment.
Tasks performed usually include: fitting, installing, maintaining and repairing engines, vehicles, agricultural or industrial machinery and similar mechanical equipment.
Occupations in this minor group are classified into the following unit groups:
7231 Motor Vehicle Mechanics and Repairers
7232 Aircraft Engine Mechanics and Repairers
7233 Agricultural and Industrial Machinery Mechanics and Repairers
7234 Bicycle and Related Repairers
Notes
Occupations are classified in Major Group 8: Plant and Machine Operators and Assemblers if the tasks call mainly for experience with and an understanding of the machinery operated and monitored. Occupations are classified in Major Group 9: Elementary Occupations if the tasks are of a simple and routine nature, mainly entail the use of hand-held tools, some physical effort, little or no previous experience and understanding of the work and limited initiative or judgement.',
            ),
            458 => 
            array (
                'id' => '7231',
                'title' => 'Motor Vehicle Mechanics and Repairers',
                'description' => 'Motor vehicle mechanics and repairers fit, install, maintain, service and repair engines and the mechanical and related equipment of passenger cars, delivery trucks, motorcycles and other motor vehicles.
Tasks include –
(a) detecting and diagnosing faults in engines and parts;
(b) fitting, examining, testing and servicing motor vehicle and motorcycle engines;
(c) replacing engine components or complete engines;
(d) fitting, examining, adjusting, dismantling, rebuilding and replacing defective parts of motor vehicles;
(e) installing or adjusting motors and brakes, and adjusting steering or other parts of motor vehicles;
(f) installing, adjusting, servicing and replacing mechatronics components of motor vehicles;
(g) performing scheduled maintenance services, such as oil changes, lubrications and engine tune-ups, to achieve smoother running of vehicles and ensure compliance with pollution regulations;
(h)  reassembling engines and parts after being repaired.
Examples of the occupations classified here:
▪ Automotive brakes systems service technician
▪ Diesel fitter (road transport)
▪ Engine fitter (motor vehicle)
▪ Garage mechanic
▪ Moped repairer
▪ Motorcycle mechanic
▪ Motorized rickshaw mechanic
▪ Motor vehicle engine and fuel systems service technician
▪ Motor vehicle mechanic
▪ Motor vehicle mechatronics service technician
▪ Motor vehicle repairer
▪ Motor vehicle service technician
▪ Small engine mechanic
Some related occupations classified elsewhere:
▪ Bicycle repairer – 7234
▪ Automotive electrician – 7412
▪ Electrical mechanic – 7412
▪ Motor vehicle engine assembler – 8211',
            ),
            459 => 
            array (
                'id' => '7232',
                'title' => 'Aircraft Engine Mechanics and Repairers',
                'description' => 'Aircraft engine mechanics and repairers fit, service, repair and overhaul aircraft engines and assemblies, such as airframes and hydraulic and pneumatic systems.
Tasks include –
(a) fitting, examining, testing and servicing aircraft engines;
(b) replacing engine components or complete engines;
(c) examining and inspecting airframes and aircraft components, including landing gear, hydraulic systems and de-icers to detect wear, cracks, breaks, leaks or other problems;
(d) maintaining, repairing, overhauling, modifying and testing aircraft structural, mechanical and hydraulic systems;
(e) reading and interpreting manuals, service bulletins and other specifications to determine the feasibility and method of repairing or replacing malfunctioning or damaged components;
(f) maintaining, repairing and rebuilding aircraft structures, functional components and parts such as wings and fuselage, rigging, hydraulic units, oxygen systems, fuel systems, electrical systems, gaskets and seals;
(g) inspecting completed work to certify that maintenance meets standards and the aircraft is ready for operation;
(h) maintaining repair logs, documenting all preventive and corrective aircraft maintenance;
(i) installing and testing electrical and electronic components, assemblies and systems in aircraft;
(j) connecting components to assemblies such as radio systems, instruments, magnetos, inverters and in-flight refuelling systems.
Examples of the occupations classified here:
▪ Aeromechanic
▪ Aircraft engine fitter
▪ Aircraft maintenance engineer (airframes)
▪ Aircraft maintenance engineer (engines)
▪ Aircraft maintenance supervisor
▪ Aircraft mechanic
▪ Aircraft restorer
▪ Aircraft service technician
▪ Airframe and power plant mechanic
▪ Airframe mechanic
▪ Aviation maintenance technician,
▪ Helicopter mechanic
▪ Jet engine mechanic
▪ Pneudraulic systems mechanic (aircraft)
▪ Powerplant mechanic (aircraft)
▪ Rocket engine component mechanic
Some related occupations classified elsewhere:
▪ Aeronautical engineer – 2144
▪ Aircraft maintenance engineer (avionics) – 7421
▪ Avionics technician – 7421
▪ Aircraft engine assembler – 8211',
            ),
            460 => 
            array (
                'id' => '7233',
                'title' => 'Agricultural and Industrial Machinery Mechanics and Repairers',
                'description' => 'Agricultural and industrial machinery mechanics and repairers fit, install, examine, service and repair engines, agricultural and industrial machinery and mechanical equipment, except motor vehicle, aircraft and electric motors.
Tasks include –
(a) fitting, installing, examining, servicing and repairing engines, machinery and mechanical equipment;
(b) oiling and greasing stationary engines and machinery;
(c) inspecting and testing new machinery and mechanical equipment for conformity with standards and specifications;
(d) disassembling machinery and equipment to remove parts and make repairs;
(e) examining parts for defects such as breakage and excessive wear;
(f) operating newly repaired machinery and equipment to verify the adequacy of repairs;
(g) recording repairs and maintenance performed.
Examples of the occupations classified here:
▪ Construction machinery mechanic
▪ Construction machinery repairer
▪ Farm machinery repairer
▪ Mining machinery fitter
▪ Mining machinery repairer
▪ Stationary engine fitter
▪ Stationary engine repairer
▪ Train engine fitter
▪ Train engine repairer
Some related occupations classified elsewhere:
▪ Air conditioning equipment mechanic – 7127
▪ Electrical mechanic – 7412
▪ Mechanical machinery assembler – 8211',
            ),
            461 => 
            array (
                'id' => '7234',
                'title' => 'Bicycle and Related Repairers',
                'description' => 'Bicycle and related repairers fit, maintain, service and repair the mechanical and related equipment of bicycles, rickshaws, baby carriages, wheelchairs and similar non-motorized transport equipment.
Tasks include –
(a) examining, servicing and repairing bicycles and other non-motorized transport equipment;
(b) cleaning and lubricating bearings and other moving parts;
(c) replacing and repairing components and accessories such as brakes, gears, driving chain mechanisms, wheels and handlebars;
(d) changing tyres and controlling air pressure;
(e) spray-painting frames;
(f) assembling new bicycles, wheelchairs and similar non-motorized equipment.
Examples of the occupations classified here:
▪ Bicycle mechanic
▪ Bicycle repairer
▪ Perambulator repairer
▪ Wheelchair repairer
Some related occupations classified elsewhere:
▪ Moped repairer – 7231
▪ Motorized rickshaw mechanic – 7231',
            ),
            462 => 
            array (
                'id' => '73',
                'title' => 'Handicraft and Printing workers',
                'description' => 'Handicraft and printing workers combine artistic and manual skills to design, produce, maintain and decorate precision instruments, musical instruments, jewellery and other precious metals, pottery,  porcelain and glassware,  items made of wood or textile, leather or related materials, and printed products such as books, newspapers and magazines.  They apply traditional and/or recently developed techniques to carve, mould, assemble, weave and decorate various articles;  to compose and set type prior to printing; to set up and operate printing presses; to bind and finish printed products; and to prepare stencils and operate screen printing equipment.  Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
The work may be carried out by hand or involve the use of hand tools and hand-held power tools, and in some cases the set-up and operation of machinery and machine tools. The tasks call for an understanding of the work organization, materials and tools used, and the nature and purpose of the final product.
Tasks performed by workers in this sub-major group usually include:  making and repairing nautical, meteorological, optical and other precision instruments and equipment; making and repairing musical instruments; making jewellery and precious metalware; making pottery, porcelain ware, ceramics and glassware; painting and decorating various articles; producing handicraft  articles in wood or textile, leather and related materials; performing printing or book-binding tasks. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
731 Handicraft Workers
732 Printing Trades Workers',
            ),
            463 => 
            array (
                'id' => '731',
                'title' => 'Handicraft Workers',
                'description' => 'Handicraft workers combine artistic and manual skills to design, make, repair, adjust, maintain and decorate precision instruments, musical instruments, jewellery and other precious metals, pottery and porcelain ware. They apply traditional and/or recently developed techniques to carve, mould, assemble, weave and decorate various glass, ceramics, textile, straw, stone, wood and leather articles.
Tasks performed usually include: making, calibrating, repairing, maintaining and installing musical and precision instruments; fabricating, adjusting, repairing or appraising jewellery, ceremonial or religious items, gold, silver, other precious metals or gems; cutting, filing, polishing and setting precious and semi-precious stones including gems and diamonds, and engraving designs on jewellery and precious metal articles; preparing pottery, porcelain ware, sanitary ware, bricks, tiles and abrasive wheels by hand or by machine; blowing, moulding, pressing, cutting, trimming, grinding and polishing glass, or shaping molten glass according to patterns; decorating articles made of wood, metal, textiles, glass, ceramics and other materials, and planning, laying out and painting letters, figures, monograms and designs to make signs; applying traditional techniques such as seasoning or impregnation to prepare wood, straw, rattan, reed, stone, clay, shells and other materials, and carving, moulding, assembling, weaving, or painting and decorating various articles for personal or household use or for decorative purposes; preparing materials to make wicker furniture, brushes and brooms, and weaving various kinds of baskets; applying traditional techniques and patterns to produce woven fabrics, knitted, embroidered and other garments and household articles.
Occupations in this minor group are classified into the following unit groups:
7311 Precision-instrument Makers and Repairers
7312 Musical Instrument Makers and Tuners
7313 Jewellery and Precious Metal Workers
7314 Potters and Related Workers
7315 Glass Makers, Cutters, Grinders and Finishers
7316 Signwriters, Decorative Painters, Engravers and Etchers
7317 Handicraft Workers in Wood, Basketry and Related Materials
7318 Handicraft Workers in Textile, Leather and Related Materials
7319 Handicraft Workers Not Elsewhere Classified',
            ),
            464 => 
            array (
                'id' => '7311',
                'title' => 'Precision-instrument Makers and Repairers',
                'description' => 'Precision-instrument makers and repairers make, calibrate, repair, maintain, adjust and install mechanical watches and clocks, and nautical, meteorological, optical and other precision instruments and equipment, and set them for correct performance.
Tasks include –
(a) repairing, cleaning and adjusting mechanisms of timing instruments such as watches and clocks;
(b) adjusting timing regulators, using  calipers, watch-rate recorders and tweezers;
(c) cleaning, rinsing and drying timepiece parts, using solutions and ultrasonic or mechanical watch-cleaning machines;
(d) testing timepiece accuracy and performance, using meters and other electronic instruments;
(e) testing accuracy of meters, gauges, indicators, or other recording or controlling instruments to locate defective components and for conformity with standards;
(f) calibrating instruments or scales, using hand tools, computer or electronic devices;
(g) inspecting components, connections and drive mechanisms to detect defects;
(h) assembling instruments and devices such as barometers, control valves, gyroscopes, hygrometers, speedometers, tachometers and thermostats;
(i) testing, calibrating and adjusting electronic, mercurial, aneroid and other types of meteorological instruments for compliance with printed specifications and schematic diagrams, using voltmeters, oscilloscopes, tube testers and other test instruments;
(j) adjusting and repairing masts, supporting structures, clearance lights, control panels, control cabling and wiring, and other electrical and mechanical devices;
(k) repairing and setting optical instruments such as microscopes, telescopes, theodolites and sextants;
(l) checking whether assembled units conform to specifications and ensuring stipulated performance and sensitivity by standard tests.
Examples of the occupations classified here:
▪ Instrument/meteorological maker
▪ Photographic equipment repairer
▪ Surgical instrument maker
▪ Watchmaker
Some related occupations classified elsewhere:
▪ Orthopaedic appliance maker – 3214
▪ Locksmith – 7222
▪ Machine tool operator – 7223
▪ Watch assembler – 8212',
            ),
            465 => 
            array (
                'id' => '7312',
                'title' => 'Musical Instrument Makers and Tuners',
                'description' => 'Musical instrument makers and tuners make, assemble, repair, adjust and restore musical instruments and tune them to the required pitch with hand or power tools. They usually specialize in one type of instrument, such as stringed instruments, brass instruments, reed instruments, pianos or percussion instruments.
Tasks include –
(a) fabricating and assembling musical instruments and instrument parts of wood, ebonite, metal, leather and other materials;
(b) repairing or replacing musical instrument parts and components such as strings, bridges, felts and keys, using hand and power tools;
(c) playing and inspecting instruments to evaluate their sound quality and to locate any defects;
(d) adjusting string tensions to achieve proper tone or pitch of stringed instruments;
(e) adjusting lips, reeds, or toe holes of organ pipes, using hand tools, to regulate airflow and loudness of sound;
(f) tuning and servicing pipe organs by adjusting pitch of organ A pipes to conform with pitch of the tuning fork and adjusting pitch of other pipes with reference to pitch of tuned pipes;
(g) installing new drumheads in percussion instruments;
(h) tuning accordions by aurally comparing pitch of reeds with master reeds and filing reeds to obtain standard pitch;
(i) aligning pads and keys on reed or wind instruments;
(j) tuning percussion instruments to required pitch by tightening or loosening cords holding leather pieces fixed atop or at both ends of the instrument;
(k) assembling and installing new pipe organs and pianos in buildings.
Examples of the occupations classified here:
▪ Brass instrument repairer
▪ Piano tuner
▪ Stringed instrument maker
▪ Woodwind instrument maker',
            ),
            466 => 
            array (
                'id' => '7313',
                'title' => 'Jewellery and Precious Metal Workers',
                'description' => 'Jewellery and precious metal workers design, fabricate, adjust, repair or appraise jewellery, ceremonial or religious items, gold, silver, other precious metals or gems. They cut, file, polish and set precious and semi-precious stones including gems and diamonds, and engrave designs on jewellery and precious metal articles. They cut and polish diamonds for industrial purposes.
Tasks include –
(a) casting jewellery and other non-ferrous metal articles by hand;
(b) creating new jewellery designs and modifying existing designs, using computers as necessary;
(c) cutting designs in moulds or other materials to be used as models in the fabrication of metal and jewellery products;
(d) altering existing jewellery mountings in order to reposition jewels or to adjust mountings;
(e) repairing, reshaping and restyling old jewellery or precious metal ware following designs or instructions;
(f) making complete jewellery articles such as rings, necklaces, bangles, brooches and bracelets from materials such as gold, silver, platinum and precious or semi-precious stones;
(g) examining gem surfaces and internal structures, using polariscopes, refractometers, microscopes and other optical instruments to differentiate between stones, to identify rare specimens, or to detect flaws, defects or peculiarities affecting gem values;
(h) cutting and polishing gems and setting them in jewellery articles;
(i) engraving or embossing letters, designs or decorative lines on jewellery and precious metal ware;
(j) grinding, drilling and finishing jewel bearings for use in precision instruments such as compasses and chronometers;
(k) examining assembled or finished products to ensure conformity with specifications, using magnifying glasses or precision measuring instruments.
Examples of the occupations classified here:
▪ Enameller (jewellery)
▪ Gem setter
▪ Goldsmith
▪ Jeweller
▪ Silversmith',
            ),
            467 => 
            array (
                'id' => '7314',
                'title' => 'Potters and Related Workers',
                'description' => 'Potters and related workers prepare pottery, porcelain ware, sanitary ware, bricks, tiles and abrasive wheels by hand or by machine.
Tasks include –
(a) making articles of pottery and porcelain;
(b) making clay or plaster-of-paris moulds;
(c) reading technical drawings to know customer\'s requirements;
(d) forming articles on the potter\'s wheel by pressing thumbs into centres of revolving clay to form hollows, and pressing on the inside and outside of emerging clay cylinders with hands and fingers, gradually raising and shaping clay to desired forms and sizes;
(e) adjusting wheel speeds according to the feel of the clay as pieces enlarge and walls become thinner;
(f) operating jigger machines to form ceramic ware such as bowls, cups, plates and saucers;
(g) adjusting and setting controls of pug mills that mix, extrude, cut, and deposit clay charges in or over moulds as specified;
(h) smoothening surfaces of finished pieces, using rubber scrapers and wet sponges;
(i) forming abrasive wheels by moulding and pressing an abrasive mixture by hand or by machine;
(j) examining finished ware for defects and verifying accuracy of shapes and sizes of objects, using callipers and templates;
(k) preparing work for sale or exhibition, and maintaining relationships with retail, pottery, art and resource networks that can facilitate sale or exhibition of work.
Examples of the occupations classified here:
▪ Abrasive wheel moulder
▪ Brick and tile moulder
▪ Potter
▪ Pottery and porcelain caster
▪ Pottery and porcelain modeller
Some related occupations classified elsewhere:
▪ Ceramic artist – 2651
▪ Kiln operator (brick and tile) – 8181
▪ Kiln operator (pottery and porcelain) – 8181',
            ),
            468 => 
            array (
                'id' => '7315',
                'title' => 'Glass Makers, Cutters, Grinders and Finishers',
                'description' => 'Glass makers, cutters, grinders and finishers blow, mould, press, cut, trim, grind and polish glass, and shape molten glass according to patterns.
Tasks include –
(a) heating glass to pliable stage using gas flames or ovens, and rotating glass to heat it uniformly;
(b) blowing and bending glass tubing into specified shapes to form scientific apparatus such as flasks, retorts and pipettes;
(c) grinding and polishing glass objects or parts to correct defects or to prepare surfaces for further finishing and smoothening and polishing rough edges, using belt sanders or polishing wheels;
(d) examining glass stock and finished products and marking or discarding items with defects such as spots, stains, scars, snags, chips, scratches or unacceptable shapes or finishes;
(e) reading work orders to determine dimensions, cutting locations and quantities to cut;
(f) observing gauges, computer printouts and video monitors to verify specified processing conditions and make adjustments as necessary;
(g) positioning patterns or drawings on glass, measuring dimensions, and marking cutting lines, using glass cutting tools and cutting glass along marked outlines or around pattern;
(h) setting up, operating and adjusting computerized or robotic glass cutting equipment;
(i) inspecting, weighing and measuring products to verify conformity with specifications, using instruments such as micrometers, callipers, magnifiers and rulers;
(j) regulating oven temperatures according to glass types to be processed;
(k) transferring patterns for individual stained glass parts from full size drawings to pattern paper, using stylus to trace drawings;
(l) spraying silver solution on glass to provide mirrored surface, using spray guns;
(m) laying out cutting and grinding optical and other glass to specified dimensions and weight for moulding into lens blanks and for use as watch crystals.
Examples of the occupations classified here:
▪ Glass blower
▪ Glass cutter
▪ Glass finisher
▪ Glass grinder
Some related occupations classified elsewhere:
▪ Glass production furnace operator – 8181',
            ),
            469 => 
            array (
                'id' => '7316',
                'title' => 'Signwriters, Decorative Painters, Engravers and Etchers',
                'description' => 'Signwriters, decorative painters, engravers and etchers decorate articles made of wood, metal, textiles, glass, ceramics and other materials. They plan, lay out and paint letters, figures, monograms and designs to make signs and engrave and etch ornamental and floral designs on glass and other articles.
Tasks include –
(a) painting decorative freehand designs on objects such as pottery, glass, cigarette cases or lampshades;
(b) transferring decorative or ornamental designs onto articles from paper transfers;
(c) integrating and developing visual elements, such as line, space, mass, colour and perspective, in order to produce desired effects such as the illustration of ideas, emotions or moods;
(d) laying out and painting in one or more languages letters, figures, monograms and designs to make signs;
(e) sketching or tracing designs or lettering onto work pieces or pattern materials to prepare patterns or stencils;
(f) designing patterns or lettering to paint work pieces such as signs, glassware, pottery or zinc plates;
(g) using software and routing equipment to produce three-dimensional carved images for application onto larger signage as well as engraved and inlaid signs;
(h) designing and producing normal flat cut lettering, or lettering that is shadowed with applied vinyl, or lettering that is ready cut for application;
(i) writing, painting or printing signs or show cards used for display or other purposes;
(j) cutting out letters and signs for display purposes from wallboard or cardboard, by hand or machines such as electrically powered jigsaws or bandsaws;
(k) examining sketches, diagrams, samples, blueprints or photographs to decide how designs are to be etched, cut or engraved onto work pieces;
(l) measuring and computing dimensions of lettering, designs or patterns to be engraved;
(m) engraving and printing patterns, ornamental designs, etchings, trademarks, figures or lettering onto flat or curved surfaces of a wide variety of metal, glass, plastic, or ceramic items;
(n) etching decorative designs, calibration markings and other figures on glass articles.
Examples of the occupations classified here:
▪ Decorative painter
▪ Glass enameller
▪ Glass engraver
▪ Glass etcher
▪ Signwriter
Some related occupations classified elsewhere:
▪ Building painter – 7 131
▪ Manufactured articles painter – 7132
▪ Vehicle painter – 7132
▪ Ceramics painting machine operator – 8181
▪ Glass painting machine operator – 8181',
            ),
            470 => 
            array (
                'id' => '7317',
                'title' => 'Handicraft Workers in Wood, Basketry and Related Materials',
                'description' => 'Handicraft workers in wood, basketry and related materials apply traditional techniques such as seasoning or impregnation to prepare wood, straw, rattan, reeds, clay, shells and other materials, and carve, mould, assemble, weave or paint and decorate various articles for personal or household use or for decorative purposes.  Basketry weavers, brush makers and related workers select and prepare materials such as bristles, nylon, fibre, bass, whisker and wire to make wicker furniture, brushes and brooms, and to weave various kinds of baskets.
Tasks include –
(a) preparing wood, straw, rattan, reeds, shells or similar materials;
(b) carving floral and artistic designs on wooden surfaces for decorative purposes;
(c) painting freehand decorative designs on glass and pottery or porcelain ware;
(d) carving, assembling, weaving, painting and decorating various articles for personal or household use such as salad bowls, serving spoons, cutting-boards, trays, vases, jugs, baskets, straw hats, straw mats and similar objects;
(e) carving, assembling, weaving and painting various decorative articles such as statues and other sculptures, chess pieces, jewellery and similar objects;
(f) making wicker furniture from peeled and softened rattan, reeds, rushes, willow branches and similar materials;
(g) making various kinds of baskets by interlacing osier, rattan, reeds, rushes and similar materials;
(h) forming bottoms of baskets by interlacing strips of rattan, wood veneer or other materials with frameworks of rods of material such as willow;
(i) inserting rods around bottom edges between woven sections of bottom and bending them upright to serve as framework for sides;
(j) selecting and preparing brush materials such as bristles, nylon, fibres and wire, and setting them in brush base;
(k) selecting and preparing materials such as broom corn, bass, whisker and fibre, and fastening them to broom handles.
Examples of the occupations classified here:
▪ Basket maker
▪ Brush maker
▪ Reed weaving handicraft worker
▪ Wicker furniture maker
▪ Wooden articles handicraft worker
Some related occupations classified elsewhere:
▪ Machine operator (wood products) – 7523',
            ),
            471 => 
            array (
                'id' => '7318',
                'title' => 'Handicraft Workers in Textile, Leather and Related Materials',
                'description' => 'Handicraft workers in textile, leather and related materials apply traditional techniques and patterns to produce woven fabrics, knitted, embroidered, woven and other garments and articles for household use, as well as traditional footwear, handbags, belts and other accessories.
Tasks include –
(a) spinning and dyeing with natural dyestuffs, wool, cotton and other fibres;
(b) lace-making, and weaving, knitting or embroidering various garments and articles for household use;
(c) preparing and dyeing hides with natural dyestuffs and making traditional footwear or handbags, belts and other accessories;
(d) spinning and winding yarn by hand;
(e) drawing warp threads into looms by hand;
(f) weaving plain or figured cloth, tapestry, lace, carpets or other fabrics on hand looms;
(g) making carpets by using a knotting technique;
(h) knitting garments and other articles on hand-operated machines or by hand;
(i) crocheting or making braid by hand;
(j) making nets by hand;
(k) grading and classifying natural textile fibres;
(l) washing wool fibres;
(m) cleaning and fluffing textile fibres;
(n) forming fibres into sliver, combing them, combining sliver into sliver laps or forming sliver into rove.
Examples of the occupations classified here:
▪ Carpets handicraft worker
▪ Carpet weaver
▪ Cloth weaver
▪ Knitter
▪ Leather handicraft worker
▪ Loom threader
▪ Textile fibre comber
▪ Textile fibre drawer
▪ Textile fibre rover
▪ Textiles handicraft worker
▪ Thread and yarn spinner
Some related occupations classified elsewhere:
▪ Textile fibre combing machine operator – 8151
▪ Knitting machine operator – 8152
▪ Weaving machine operator – 8152',
            ),
            472 => 
            array (
                'id' => '7319',
                'title' => 'Handicraft Workers Not Elsewhere Classified',
                'description' => 'This unit group covers handicraft workers who perform traditional handicrafts not classified elsewhere. For instance, the group includes traditional handicraft workers in non-precious metals and stone.
Examples of the occupations classified here:
▪ Candle-maker (handicraft)
▪ Metal toymaker
▪ Stone articles handicraft worker',
            ),
            473 => 
            array (
                'id' => '732',
                'title' => 'Printing Trades Workers',
                'description' => 'Printing trades\' workers compose and set type prior to printing, set up and operate printing presses, bind and finish printed products, and prepare stencils and operate screen printing equipment.
Tasks performed usually include: operating graphic cameras and other photographic equipment to reproduce camera-ready copy onto films, plates and digital output devices; operating computer screen-based equipment for scanning, colour separation and correction, retouching and other processes used to transfer copy to film and produce film for plate, cylinder and digital output productions; setting up, operating and monitoring machines used in typesetting, photographing copy, printing and cutting, folding, collating and binding printed material;  performing routine finishing operations and machine maintenance; preparing stencils and operating screen printing equipment.
Occupations in this minor group are classified into the following unit groups:
7321 Pre-press Technicians
7322 Printers
7323 Print Finishing and Binding Workers',
            ),
            474 => 
            array (
                'id' => '7321',
                'title' => 'Pre-press Technicians',
                'description' => 'Pre-press technicians proof, format, set and compose text and graphics into a form suitable for use in various printing processes and representation in other visual media.
Tasks include –
(a) operating graphic cameras and other photographic equipment to reproduce camera-ready copy onto films, plates and digital output devices;
(b) using computer applications to generate images, text, layouts and impositions for print and other visual media displays;
(c) operating plate-making equipment to reproduce images from film to printing plates, digital output devices and presses;
(d) operating computer screen-based equipment for scanning, colour separation, colour correction, masking, creative design, combining, imposing, retouching, and other processes used to transfer copy to film and produce film for plate, digital output and cylinder productions;
(e) carrying out digital and chemical proofing from digital systems, and negative and positive films;
(f) evaluating printed proofs, checking and correcting them for quality;
(g) preparing and exposing carbon tissue for laying on cylinders by transfer method, and developing images.
Examples of the occupations classified here:
▪ Compositor
▪ Desktop publishing operator
▪ Electronic pre-press technician
▪ Photogravurist
▪ Photolithographer
▪ Plate mounter (screen printing)
▪ Plate maker (printing)
▪ Screen maker
▪ Typesetter',
            ),
            475 => 
            array (
                'id' => '7322',
                'title' => 'Printers',
                'description' => 'Printers set up and operate digital, letterpress, lithographic, flexographic, gravure, newspaper and other printing presses.
Tasks include –
(a) setting, adjusting and monitoring substrate-feed mechanisms, delivery mechanisms, inking systems and other printing machine functions;
(b) mixing ink and solvents to standard, and regulating paper and ink supply during print runs;
(c) monitoring, evaluating and determining press to check print quality standards against proofs and detect malfunctions;
(d) producing a variety of printed products using digital, relief, lithographic, flexographic and gravure printing presses, and in-line finishing systems;
(e) preparing plates, blankets and impression cylinders on small offset lithographic printing presses;
(f) loading paper into feeding mechanisms;
(g) monitoring machine operations and quality of printing;
(h) maintaining, adjusting, repairing and cleaning machines;
(i) producing digital print images, and transferring and outputting images.
Examples of the occupations classified here:
▪ Block printer
▪ Digital press operator
▪ Feeder operator (printing)
▪ Flexographic press operator
▪ Gravure press operator
▪ Large sheet-fed press operator
▪ Screen printer
▪ Screen printing press operator
▪ Small press operator
▪ Textile printer
▪ Web press operator',
            ),
            476 => 
            array (
                'id' => '7323',
                'title' => 'Print Finishing and Binding Workers',
                'description' => 'Print finishing and binding workers bind books and other publications, and finish printed products by hand or machine.
Tasks include –
(a) setting up and supervising the operation of automatic binding and finishing equipment;
(b) binding full, half and limp-bound books, and repairing bindings;
(c) folding, collating and sewing signatures by machine and hand;
(d) operating paper guillotines for pre-press and post-press paper cutting and trimming, and programming electronically operated units;
(e) operating systems to insert printed material into newspapers, magazines and envelopes;
(f) embellishing printed products automatically and manually;
(g) operating photographic and electronic reproduction devices.
Examples of the occupations classified here:
▪ Book binder
▪ Collator operator
▪ Cutter operator
▪ Foil stamp operator
▪ Folder operator
▪ Gatherer operator
▪ Multibinder operator
▪ Perfect binder operator
▪ Saddle stitch operator
▪ Small machine bindery worker',
            ),
            477 => 
            array (
                'id' => '74',
                'title' => 'Electrical and Electronics Trades Workers',
                'description' => 'Electrical and electronics trades workers install, fit and maintain electrical wiring systems and machinery and other electrical apparatus, electrical transmission and supply lines and cables, and electronic and telecommunications equipment and systems. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
The work is carried out by hand and by hand-powered and other tools which are used to reduce the amount of physical effort and time required for specific tasks, as well as to improve the quality of the products.  The tasks call for an understanding of the work organization, materials and tools used, and the nature and purpose of the final product.
Tasks performed by workers in this sub-major group usually include: installing, maintaining, fitting and adjusting electrical and electronic wiring systems, machinery and equipment; examining blueprints, wiring diagrams and specifications to determine sequences and methods of operation; inspecting and testing electrical and electronic systems, equipment, cables and machinery to identify hazards, defects and the need for adjustment or repair; installing, maintaining and repairing electrical and telecommunications transmission lines; joining electrical, telecommunications and data cables; maintaining, troubleshooting, fitting, adjusting, testing and repairing electronic equipment such as commercial and office machines, electronic instruments and control systems, computers, and telecommunications and data transmission equipment.
Occupations in this sub-major group are classified into the following minor groups:
741 Electrical Equipment Installers and Repairers
742 Electronics and Telecommunications Installers and Repairers',
            ),
            478 => 
            array (
                'id' => '741',
                'title' => 'Electrical Equipment Installers and Repairers',
                'description' => 'Electrical equipment installers and repairers install, fit and maintain electrical wiring systems and related equipment, electrical machinery and other electrical apparatus and electrical transmission and supply lines and cables.
Tasks performed usually include: installing, maintaining, fitting and adjusting electrical wiring systems, machinery and equipment; examining blueprints, wiring diagrams and specifications to determine sequences and methods of operation; inspecting and testing electrical systems, equipment, cables and machinery to identify hazards, defects and the need for adjustment or repair; installing, maintaining and repairing electrical transmission lines; joining electrical cables.
Occupations in this minor group are classified into the following unit groups:
7411 Building and Related Electricians
7412 Electrical Mechanics and Fitters
7413 Electrical Line Installers and Repairers',
            ),
            479 => 
            array (
                'id' => '7411',
                'title' => 'Building and Related Electricians',
                'description' => 'Building and related electricians install, maintain and repair electrical wiring systems and related equipment and fixtures.
Tasks include –
(a) installing, maintaining and repairing electrical wiring systems and related equipment in various buildings such as schools, hospitals, commercial establishments, residential buildings and other structures;
(b) examining blueprints, wiring diagrams and specifications to determine sequences and methods of operation;
(c) planning layout and installation of electrical wiring, equipment and fixtures, based on job specifications and relevant standards;
(d) inspecting electrical systems, equipment, and components to identify hazards, defects, and the need for adjustment or repair;
(e) selecting, cutting and connecting wire and cable to terminals and connectors;
(f) measuring and laying out installation reference points;
(g) positioning and installing electrical switchboards;
(h) testing continuity of circuits.
Examples of the occupations classified here:
▪ Building repairs electrician
▪ Electrician
Some related occupations classified elsewhere:
▪ Electrical fitter – 7412
▪ Electrical mechanic – 7412
▪ Electrical line installer – 7413',
            ),
            480 => 
            array (
                'id' => '7412',
                'title' => 'Electrical Mechanics and Fitters',
                'description' => 'Electrical mechanics and fitters fit, adjust, install and repair electrical machinery and other electrical apparatus and equipment in buildings, factories, motor vehicles, workshops or other places.
Tasks include –
(a) fitting, adjusting and repairing various kinds of electrical machinery and motors, generators, switchgear and control apparatus, instruments, or electrical parts of elevators and related equipment;
(b) fitting, adjusting and repairing electrical parts in domestic appliances, industrial machines and other appliances;
(c) inspecting and testing manufactured electrical products;
(d) installing, testing, connecting, commissioning, maintaining and modifying electrical equipment, wiring and control systems;
(e) designing, installing, maintaining, servicing and repairing electricand hydraulic passenger and freight lifts, escalators, moving walkways and other lift equipment;
(f) connecting electrical systems to the power supply;
(g) replacing and repairing defective parts.
Examples of the occupations classified here:
▪ Armature builder
▪ Automotive electrician
▪ Electrical generator fitter
▪ Electrical mechanic
▪ Lift mechanic
Some related occupations classified elsewhere:
▪ Electronics mechanic – 7421
▪ Electrical equipment assembler – 8212',
            ),
            481 => 
            array (
                'id' => '7413',
                'title' => 'Electrical Line Installers and Repairers',
                'description' => 'Electrical line installers and repairers install, repair and join electrical transmission and supply cables and related equipment.
Tasks include –
(a) installing and repairing overhead and underground electrical power and electrical traction lines;
(b) making joints in overhead and underground cables;
(c) adhering to safety practices and procedures, such as checking equipment regularly and erecting barriers around work areas;
(d) opening switches or attaching grounding devices to remove electrical hazards from disturbed or fallen lines or to facilitate repairs;
(e) climbing poles or using truck-mounted buckets to access equipment;
(f) identifying defective sectionalizing devices, circuit breakers, fuses, voltage regulators, transformers, switches, relays or wiring, using wiring diagrams and electrical-testing instruments.
Examples of the occupations classified here:
▪ Electric cable jointer
▪ Electric power line worker
Some related occupations classified elsewhere:
▪ Data and telecommunications cabler – 7422
▪ Telecommunications line worker – 7422',
            ),
            482 => 
            array (
                'id' => '742',
                'title' => 'Electronics and Telecommunications Installers and Repairers',
                'description' => 'Electronics and telecommunications installers and repairers fit, maintain, adjust and repair electronic equipment such as commercial and office machines, electronic instruments and control systems; install, repair and maintain telecommunications equipment, data transmission equipment, cables and antennae; and repair, fit and maintain computers.
Tasks performed usually include:  examining and testing machines, equipment, instruments and control systems to diagnose faults; adjusting, repairing and replacing worn and defective parts and wiring, and maintaining machines, equipment and instruments; installing electronic instruments and control systems; fitting and adjusting electronic equipment; maintaining, troubleshooting, fitting, adjusting, testing and repairing computers, data transmission equipment and computer peripherals; installing, maintaining, repairing and diagnosing malfunctions of microwave, telemetry, multiplexing, satellite and other radio and electromagnetic wave communications systems; providing technical advice and information, and monitoring the performance of complex telecommunications networks and equipment; installing, joining and repairing cabling for computer, radio, telephone and television transmission; installing, maintaining and repairing antennae used in communications.
Occupations in this minor group are classified into the following unit groups:
7421 Electronics Mechanics and Servicers
7422 Information and Communications Technology Installers and Servicers',
            ),
            483 => 
            array (
                'id' => '7421',
                'title' => 'Electronics Mechanics and Servicers',
                'description' => 'Electronics mechanics and servicers fit, maintain, adjust and repair electronic equipment such as commercial and office machines and electronic instruments and control systems.
Tasks include –
(a) examining and testing machines, instruments, components, control systems and other electronic equipment to identify faults;
(b) adjusting, repairing and replacing worn and defective parts and wiring, and maintaining machines, equipment and instruments;
(c) reassembling, test operating and adjusting equipment;
(d) installing electronic instruments and control systems;
(e) coordinating work with that of engineers, technicians and other maintenance personnel;
(f) interpreting test data to diagnose malfunctions and systemic performance problems;
(g) installing, adjusting, repairing or replacing electrical and electronic components, assemblies and systems, using hand tools, power tools or soldering irons;
(h) connecting components to assemblies such as radio systems, instruments, magnetos, inverters and in-flight refuelling systems;
(i) keeping records of maintenance and repair work.
Examples of the occupations classified here:
▪ Aircraft maintenance engineer (avionics)
▪ Automated teller machines mechanic
▪ Avionics technician
▪ Electronic equipment servicer
▪ Electronics mechanic
▪ Photocopy machine technician
Some related occupations classified elsewhere:
▪ Air traffic safety technician – 3155',
            ),
            484 => 
            array (
                'id' => '7422',
                'title' => 'Information and Communications Technology Installers and Servicers',
            'description' => 'Information and communications technology (ICT) installers and servicers install, repair and maintain telecommunications equipment, data transmission equipment, cables, antennae and conduits, and repair, fit and maintain computers.
Tasks include –
(a) maintaining, troubleshooting, testing and repairing computers, data transmission equipment and computer peripherals;
(b) fitting and adjusting computer hardware;
(c) installing, maintaining, repairing and diagnosing malfunctions of microwave, telemetry, multiplexing, satellite and other radio and electromagnetic wave communications systems;
(d) providing technical advice and information, and monitoring the performance of complex telecommunications networks and equipment;
(e) installing and repairing cabling for computer, radio, telephone and television transmission;
(f) joining telecommunications and data cables, and sealing sheathes;
(g) installing, maintaining and repairing antennae used in communications.
Examples of the occupations classified here:
▪ Communications technology servicer
▪ Computer equipment fitter
▪ Computer hardware installer
▪ Data and telecommunications cabler
▪ Telecommunications equipment repairer
▪ Telecommunications line worker
▪ Telephone installer
Some related occupations classified elsewhere:
▪ Engineering technician (telecommunications) – 3522',
            ),
            485 => 
            array (
                'id' => '75',
                'title' => 'Food Processing, Woodworking, Garment and Other Craft and Related Trades Workers',
                'description' => 'Food processing, woodworking, garment and other craft and related trades workers treat and process agricultural and fisheries raw materials into food and other products, and produce and repair goods made of wood, textiles, fur, leather or other materials. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
The work is carried out by hand and by hand-powered and other tools which are used to reduce the amount of physical effort and time required for specific tasks, as well as to improve the quality of the products. The tasks call for an understanding of the work organization, materials and tools used, and the nature and purpose of the final product.
Tasks performed by workers in this sub-major group usually include: treating and  processing meat, fish, grain, fruit, vegetables and related materials into food stuffs, and tobacco into tobacco products; tasting and grading food products and beverages; treating and processing natural fibres, skins and  hides; making and repairing furniture and other goods made of wood; preparing hides, skins and pelts for further use; making and repairing textiles, garments, hats, shoes and related products. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
751 Food Processing and Related Trades Workers
752 Wood Treaters, Cabinet-makers and Related Trades Workers
753 Garment and Related Trades Workers
754 Other Craft and Related Workers',
            ),
            486 => 
            array (
                'id' => '751',
                'title' => 'Food Processing and Related Trades Workers',
                'description' => 'Food processing and related trades workers slaughter animals; treat and prepare them and related food items for human and animal consumption; make various kinds of bread, cakes and other flour products; process and preserve fruit, vegetables and related foods; taste and grade various food products and beverages; or prepare tobacco and make tobacco products.
Tasks performed usually include: slaughtering animals; treating meat and fish and preparing them and related food items; making various kinds of bread, cakes and other flour products; processing and preserving fruit, vegetables and related foods; tasting and grading various food products and beverages; preparing tobacco and making tobacco products. Supervision of workers may be included.
Occupations in this minor group are classified into the following unit groups:
7511 Butchers, Fishmongers and Related Food Preparers
7512 Bakers, Pastry-cooks and Confectionery Makers
7513 Dairy Products Makers
7514 Fruit, Vegetable and Related Preservers
7515 Food and Beverage Tasters and Graders
7516 Tobacco Preparers and Tobacco Products Makers',
            ),
            487 => 
            array (
                'id' => '7511',
                'title' => 'Butchers, Fishmongers and Related Food Preparers',
                'description' => 'Butchers, fishmongers and related food preparers slaughter animals, clean, cut and dress meat and fish, remove bones and prepare related food items, or preserve meat, fish and other foods and food products by drying, salting or smoking.
Tasks include –
(a) slaughtering animals;
(b) flaying and trimming carcasses;
(c) boning, cutting and dressing meat and fish for sale or further processing;
(d) preparing ingredients and making sausages and similar products using chopping, mixing and shaping machines;
(e) curing meat, fish and other foods;
(f) operating smokehouses or ovens to smoke meat, fish and other foodstuffs;
(g) cooking or in other ways preparing meat, fish and related food items for sale;
(h) selling meat or fish to customers, including wrapping, weighing and labelling products, and receiving payment.
Examples of the occupations classified here:
▪ Butcher
▪ Fish filleter
▪ Fishmonger
▪ Slaughterer
Some related occupations classified elsewhere:
▪ Shopkeeper – 5221
▪ Fish processing machine operator – 8160
▪ Meat processing machine operator – 8160',
            ),
            488 => 
            array (
                'id' => '7512',
                'title' => 'Bakers, Pastry-cooks and Confectionery Makers',
                'description' => 'Bakers, pastry-cooks and confectionery makers make various kinds of bread, cakes, and other flour products, as well as handmade chocolate and sugar confectionery.
Tasks include –
(a) making bread, cakes, biscuits, pastries, pies and other flour products;
(b) making handmade confectionery from mixtures of sugar, chocolate and other ingredients, using hand tools and some machines;
(c) combining measured ingredients in bowls of mixing, blending or cooking machinery;
(d) checking the quality of raw materials to ensure that standards and specifications are met;
(e) applying glazes, icings or other toppings to baked goods, using spatulas or brushes;
(f) checking the cleanliness of equipment and operation of premises before production runs to ensure compliance with occupational health and safety regulations;
(g) monitoring oven temperatures and product appearance to determine baking times;
(h) coordinating the forming, loading, baking, unloading, de-panning and cooling of batches of  bread, rolls, pastry and confectionery products.
Examples of the occupations classified here:
▪ Baker
▪ Chocolate maker
▪ Confectioner
▪ Pastry-cook
Some related occupations classified elsewhere:
▪ Cook – 5120
▪ Bakery products machine operator – 8160
▪ Bread production machine operator – 8160
▪ Chocolate production machine operator – 8160',
            ),
            489 => 
            array (
                'id' => '7513',
                'title' => 'Dairy Products Makers',
                'description' => 'Dairy products makers process butter and various types of cheese, cream or other dairy products.
Tasks include –
(a) boiling or pasteurizing milk to achieve specified butter fat content;
(b) separating cream from milk and churning cream into butter;
(c) dumping measured amounts of starter and other ingredients into milk;
(d) curdling milk, heating curd until it reaches desired firmness, draining curd and placing cheese into moulds to press it into shape;
(e) salting cheese and piercing or smearing cheese with cultured wash to develop mould growth;
(f) placing and turning cheese blocks on shelves to cure cheese;
(g) monitoring product quality before packaging by inspecting, taking samples and adjusting treatment conditions when necessary;
(h) recording amounts of ingredients used, test results and time cycles.
Examples of the occupations classified here:
▪ Butter maker
▪ Cheese maker
Some related occupations classified elsewhere:
▪ Dairy products machine operator – 8160
▪ Milk processing machine operator – 8160',
            ),
            490 => 
            array (
                'id' => '7514',
                'title' => 'Fruit, Vegetable and Related Preservers',
                'description' => 'Fruit, vegetable and related preservers process or preserve fruit, nuts and related foods in various ways including cooking, drying and salting, or juice or oil extraction.
Tasks include –
(a) extracting juices from various fruits;
(b) extracting oils from oil-bearing seeds, nuts or fruits;
(c) cooking, salting or drying fruit, vegetables and related foods;
(d) mixing and adding ingredients such as pectin, sugar, spices and vinegar to assist preservation and enhance texture, appearance and flavour;
(e) transferring preserved foods to sterile jars, bottles or other containers.
Examples of the occupations classified here:
▪ Chutney maker
▪ Fruit preserver
▪ Jam maker
▪ Oil expeller
▪ Vegetable and fruit pickler
▪ Vegetable preserver
Some related occupations classified elsewhere:
▪ Canning machine operator – 8183',
            ),
            491 => 
            array (
                'id' => '7515',
                'title' => 'Food and Beverage Tasters and Graders',
                'description' => 'Food and beverage tasters and graders inspect, taste and grade various types of agricultural products, food and beverages.
Tasks include –
(a) inspecting, testing, tasting and smelling agricultural products, food and beverages at various stages of processing;
(b) determining quality, acceptability to consumer tastes and approximate value of products, and grading them into appropriate classes;
(c) discarding inferior products;
(d) recording the grade and/or identification numbers on tags, receiving or sales sheets;
(e) weighing and measuring products.
Examples of the occupations classified here:
▪ Food grader
▪ Food taster
▪ Liquor taster
▪ Tea taster
▪ Wine taster',
            ),
            492 => 
            array (
                'id' => '7516',
                'title' => 'Tobacco Preparers and Tobacco Products Makers',
                'description' => 'Tobacco preparers and tobacco products makers prepare tobacco leaves and make various tobacco products.
Tasks include –
(a) grading cured tobacco leaves by type, quality and locality where grown;
(b) mixing tobacco leaves according to formula to obtain a blend of distinct flavour;
(c) tending vacuum containers which moisten tobacco for further processing;
(d) removing midribs and stalks from tobacco leaves and shredding tobacco;
(e) making cigars, cigarettes, snuff and other tobacco products by hand or with simple machines.
Examples of the occupations classified here:
▪ Cigarette maker
▪ Cigar maker
▪ Tobacco grader
Some related occupations classified elsewhere:
▪ Cigarette production machine operator – 8160
▪ Cigar production machine operator – 8160',
            ),
            493 => 
            array (
                'id' => '752',
                'title' => 'Wood Treaters, Cabinet-makers and Related Trades Workers',
                'description' => 'Wood treaters, cabinet-makers and related trades workers preserve and treat wood; make, decorate and repair wooden furniture, vehicles and other wooden products and components; and set up, operate and tend wood seasoning and preserving equipment and woodworking equipment, machines and machine tools.
Tasks performed usually include: operating and tending treating and other equipment to dry lumber and other wood products, and to treat chemically and impregnate wood products with preservatives; setting and operating woodworking machines to cut, shape and form parts and components; studying plans, verifying dimensions of articles to be made, fitting parts together to form complete units and checking the quality and fit of pieces to ensure adherence to specifications; setting and adjusting various kinds of machines for operation by others; setting up, programming, operating and monitoring several types of woodworking machines to fabricate, repair or refinish wooden parts for furniture, fixtures and other wood products; and reading and interpreting specifications or following verbal instructions.
Occupations in this minor group are classified into the following unit groups:
7521 Wood Treaters
7522 Cabinet-makers and Related Workers
7523 Woodworking Machine Tool Setters and Operators',
            ),
            494 => 
            array (
                'id' => '7521',
                'title' => 'Wood Treaters',
                'description' => 'Wood treaters season, preserve and treat wood and lumber manually or using wood treatment equipment such as kilns and tanks.
Tasks include –
(a) operating and tending kilns, treating tanks and other equipment to dry lumber, prepare and season wood and other wood products, and to impregnate wood products with preservatives;
(b) monitoring equipment operation, gauges and panel lights in order to detect deviations from standards and to ensure that processes are operating according to specifications;
(c) operating valves to admit treating solution into treatment vessels, maintain specified heat, vacuum and hydraulic pressure and levels of solution during each phase of the treatment cycle;
(d) activating  vacuum and hydraulic pressure pumps that remove air and steam from retorts and force treating solution into pores of wood to accelerate the treatment process;
(e) assisting in maintaining processing equipment and machines as required;
(f) cleaning, lubricating and adjusting equipment;
(g) transporting materials and products to and from work areas manually or using carts, handtrucks or hoists;
(h) completing and maintaining production reports.
Examples of the occupations classified here:
▪ Dry kiln operator
▪ Lumber kiln operator
▪ Timber treating tank operator
▪ Veneer dryer tender
▪ Wood seasoner
▪ Wood treater
Some related occupations classified elsewhere:
▪ Wood processing plant operator – 8172',
            ),
            495 => 
            array (
                'id' => '7522',
                'title' => 'Cabinet-makers and Related Workers',
                'description' => 'Cabinet-makers and related workers make, decorate and repair wooden furniture, carts and other vehicles, wheels, parts, fittings, patterns, models and other wooden products using woodworking machines, machine tools and specialized hand tools.
Tasks include –
(a) operating woodworking machines such as power saws, jointers, mortisers and shapers, and using hand tools to cut, shape and form parts and components;
(b) studying plans, verifying dimensions of articles to be made, or preparing specifications and checking the quality and fit of pieces in order to ensure adherence to specifications;
(c) trimming joints and fitting parts and subassemblies together to form complete units using glue and clamps, and reinforcing joints using nails, screws or other fasteners;
(d) making, restyling and repairing various wooden articles such as cabinets, furniture, vehicles, scale models, sports equipment and other parts or products;
(e) decorating furniture and fixtures by inlaying wood or applying veneer and carving designs;
(f) finishing surfaces of wooden articles or furniture.
Examples of the occupations classified here:
▪ Cabinet-maker
▪ Cartwright
▪ Furniture cabinet-maker
▪ Wheelwright
▪ Wood patternmaker
Some related occupations classified elsewhere:
▪ Carpenters and joiners – 7115
▪ Wood and related products assemblers – 8219',
            ),
            496 => 
            array (
                'id' => '7523',
                'title' => 'Woodworking Machine Tool Setters and Operators',
                'description' => 'Woodworking machine tool setters and operators set-up, operate and monitor automatic or semi-automatic woodworking machines such as precision sawing, shaping, planing, boring, turning and woodcarving machines to fabricate or repair wooden parts for furniture, fixtures and other wooden products.
Tasks include –
(a) setting up, programming, operating and monitoring several types of woodworking machines for sawing, shaping, boring, drilling, planing, pressing, turning, sanding or carving to fabricate or repair wooden parts for furniture, fixtures and other wooden products;
(b) operating preset special-purpose woodworking machines to fabricate wooden products such as coat hangers, mop handles, clothespins and other products;
(c) selecting knives, saws, blades, cutter heads, cams, bits or belts according to work piece, machine functions and product specifications;
(d) installing and adjusting blades, cutter heads, boring-bits and sanding-belts, and using hand tools and rules;
(e) setting and adjusting various kinds of woodworking machines for operation by others;
(f) reading and interpreting specifications or following verbal instructions.
Examples of the occupations classified here:
▪ Carving machine operator (wood)
▪ Furniture production machine operator
▪ Precision woodworking sawyer
▪ Wood products machine operator
▪ Wood turner
▪ Woodworking lathe operator
▪ Woodworking machine setter
▪ Woodworking machine setter-operator
▪ Woodworking machine set-up operator
Some related occupations classified elsewhere:
▪ Wood and related products assemblers – 8219',
            ),
            497 => 
            array (
                'id' => '753',
                'title' => 'Garment and Related Trades Workers',
                'description' => 'Garment and related trades workers fit, alter and repair tailored clothing; design and make textile and fur garments and leather or fur products; repair, renovate and decorate garments, gloves and other textile products; create patterns for garments; install, repair and replace upholstery of furniture, fixtures, orthopaedic appliances and furnishings of automobiles; trim, scrape, tan, buff and dye animal hides, pelts or skins; modify and repair footwear and leather articles.
Tasks performed usually include: fitting, altering and repairing tailored clothing; designing and making made-to-measure clothing from textile fabrics, light leather and other materials, or making hats or wigs; making garment style changes; creating precision master patterns for production of garments and other textile, leather or fur products; sewing together, joining, darning, repairing, renovating and decorating garments, gloves and other products of textile, fur, light leather and other materials; fabricating and assembling sails, awnings and tarpaulins; installing, repairing and replacing upholstery of furniture, fixtures, orthopaedic appliances, seats, panels and other furnishings of automobiles, railway coaches, aircraft, ships and similar items; trimming, scraping, cleaning, tanning, buffing and dyeing animal hides, pelts or skins to produce leather stock and finished furs for making garments and other products; making, modifying and repairing standard, custom-made or orthopaedic footwear and natural or synthetic leather articles.
Occupations in this minor group are classified into the following unit groups:
7531 Tailors, Dressmakers, Furriers and Hatters
7532 Garment and Related Patternmakers and Cutters
7533 Sewing, Embroidery and Related Workers
7534 Upholsterers and Related Workers
7535 Pelt Dressers, Tanners and Fellmongers
7536 Shoemakers and Related Workers',
            ),
            498 => 
            array (
                'id' => '7531',
                'title' => 'Tailors, Dressmakers, Furriers and Hatters',
                'description' => 'Tailors, dressmakers, furriers and hatters fabricate, fit, alter and repair tailored or handmade clothing. They produce made-to-measure clothing such as suits, overcoats and dresses from textile fabrics, light leather, fur and other material, or make hats or wigs according to customers\' and clothing manufacturers\' specifications.
Tasks include –
(a) making overcoats, suits, skirts, shirts, blouses, lingerie, corsetry, hats, wigs and similar garments, often to clients\' individual requirements;
(b) selecting textile fabrics, leather or fur pelts matching the desired size, colour, texture and quality of the garment; cutting to shape them to garment pattern and arranging them on the pattern according to the design of  the garment;
(c) making garment style changes, such as tapering trouser legs or narrowing lapels, and adding or removing padding;
(d) selecting and modifying commercial patterns to customers\' and clothing manufacturers\' specifications and fit;
(e) fitting, altering and repairing tailored clothing, dresses, coats and other made-to-measure garments according to customers\' requests;
(f) making and caring for costumes used in theatrical, television and motion picture productions;
(g) folding, twisting and draping material such as satin or silk, or sewing ribbon or cloth in the form of artificial flowers or bows around crown and brim to shape and decorate hats;
(h) sewing and fastening together materials and hair strands to make wigs;
(i) blending shades of hair to give a natural appearance to wigs, arranging woven hair in specified positions and sewing hair together to form hairpieces;
(j) making, altering, restyling and repairing fur garments and other fur articles;
(k) reclaiming furs or skins from old coats, gluing fabric to the interior of fur coats and trimming fur garments.
Examples of the occupations classified here:
▪ Dressmaker
▪ Furrier
▪ Fur grader
▪ Hatter
▪ Milliner
▪ Tailor
Some related occupations classified elsewhere:
▪ Textiles handicraft worker – 7318
▪ Sewing machine operator – 8153',
            ),
            499 => 
            array (
                'id' => '7532',
                'title' => 'Garment and Related Patternmakers and Cutters',
                'description' => 'Garment and related patternmakers and cutters create precision master patterns for the production of garments and other textile, leather or fur products. They mark, cut, shape and trim textiles, light leather and other materials according to blueprints or specifications in the manufacture of garments, hats and caps, gloves and miscellaneous products.
Tasks include –
(a) creating a master pattern for each size within a range of garment sizes, using charts, drafting instruments, computers and/or grading devices;
(b) creating the blueprint or pattern pieces for a particular apparel design with the aid of a computer;
(c) calculating dimensions of patterns according to sizes, considering stretching of material;
(d) drawing details on outlined parts to indicate where parts are to be joined, as well as the positions of pleats, pockets, buttonholes on garments, decorative stitching on shoe parts or eyelets on canvas products, using computers or drafting instruments;
(e) positioning templates or measuring materials to locate specified points of cuts or to obtain maximum yields, and marking fabric accordingly;
(f) laying out the master pattern on fabric and cutting sample patterns;
(g) testing patterns by making and fitting sample garments;
(h) placing patterns on top of layers of fabric and cutting fabric following patterns, using electric or manual knives, cutters or computer numerically controlled cutting devices;
(i) cutting fabric or fur pelts to make parts for garments and other fur articles;
(j) trimming excess material or cutting threads off finished products, such as cutting loose ends of a finished product;
(k) positioning leather on the cutting bed of machines, maximizing usage according to skin grain, skin flaws and skin stretch;
(l) performing patternmaking, marking and cutting tasks in the manufacture of other products such as soft furnishings and canvas goods.
Examples of the occupations classified here:
▪ Fur patternmaker
▪ Garment cutter
▪ Garment patternmaker
▪ Glove cutter
Some related occupations classified elsewhere:
▪ Textile patternmaking machine operator – 8159',
            ),
        ));
        \DB::table('isco08')->insert(array (
            0 => 
            array (
                'id' => '7533',
                'title' => 'Sewing, Embroidery and Related Workers',
                'description' => 'Sewing, embroidery and related workers sew together, repair, renovate and decorate garments, gloves and other products of textile, fur, light leather and other materials and fabricate tents, sails, awnings and tarpaulins. They work mainly by hand, using a needle and thread, but may perform some tasks using a sewing machine.
Tasks include –
(a) repairing defective or damaged portions of cloths or garments by hand, using matching thread and needle;
(b) removing stitches from garments to be altered, using rippers or razor blades;
(c) selecting thread according to specifications or colour of parts, or dyeing thread to match colour and shade of cloth to be darned;
(d) patching holes, sewing tears and ripped seams, or darning defects in items, using needle and thread;
(e) pulling knots to the wrong sides of garments, using hooks;
(f) trimming ends with scissors to make mended portions look uniform with the pattern of cloth;
(g) sewing ornamental designs by hand over stamped, printed or stencilled patterns on fabric, using needle and coloured thread;
(h) embroidering ornamental designs on cloth by hand or machine, using needle and coloured thread;
(i) softening leather or shoe material with water to prepare it for sewing;
(j) sewing or gluing decorative trimmings to articles such as hats, caps or other millinery;
(k) hand-sewing umbrella covers to frames, tacking cover to ribs along seams, sewing corners to tips of ribs and sewing ties to outside of cover to hold umbrella when folded;
(l) fabricating and assembling thick cloth, canvas and similar materials into sails, awning, tarpaulins and tents.
Examples of the occupations classified here:
▪ Embroiderer
▪ Sewer
▪ Umbrella maker
Some related occupations classified elsewhere:
▪ Textiles handicraft worker – 7318
▪ Dressmaker – 7531
▪ Sewing machine operator – 8153',
            ),
            1 => 
            array (
                'id' => '7534',
                'title' => 'Upholsterers and Related Workers',
                'description' => 'Upholsterers and related workers install, repair and replace upholstery of furniture, fixtures, orthopaedic appliances, seats, panels, convertible and vinyl tops and other furnishings of automobiles, railway coaches, aircraft, ships and similar items with fabric, leather, rexine or other upholstery material. They also make and repair cushions, quilts and mattresses.
Tasks include –
(a) discussing upholstery fabric, colour and style with customers and providing cost estimates for upholstering furniture or other items;
(b) making upholstery patterns from sketches, customer descriptions or blueprints;
(c) laying out, measuring and cutting upholstery materials following patterns, templates, sketches or design specifications;
(d) installing, arranging and securing springs, padding and covering material to furniture frames;
(e) sewing upholstery materials by hand to seam cushions and joining sections of covering materials;
(f) sewing rips or tears in material, or creating tufting, using needle and thread;
(g) tacking, gluing or sewing ornamental trims, buckles, braids, buttons and other accessories to covers or frames on upholstered items;
(h) laying out, cutting, fabricating and installing upholstery in aircrafts, motor vehicles, railway cars, boats and ships;
(i) repairing raw hide coverings of artificial limbs;
(j) renovating antique furniture using a variety of tools including ripping chisels, magnetic hammers and long needles;
(k) collaborating with interior designers to decorate rooms and coordinate furnishing fabrics;
(l) making quilts, cushions and mattresses.
Examples of the occupations classified here:
▪ Furniture upholsterer
▪ Mattress maker
▪ Orthopaedic upholsterer
▪ Vehicle upholsterer
Some related occupations classified elsewhere:
▪ Sewing machine operator – 8153',
            ),
            2 => 
            array (
                'id' => '7535',
                'title' => 'Pelt Dressers, Tanners and Fellmongers',
                'description' => 'Pelt dressers, tanners and fellmongers trim, scrape, clean, tan, buff and dye animal hides, pelts or skins to produce leather stock and finished furs for making garments and other products.
Tasks include –
(a) sorting and grading pelts, hides and skins according to colour, shading, size and density;
(b) scraping particles of flesh, fat or protective tissue from skins or pelts to clean and soften them;
(c) removing hair from skin or hides soaked in lime water;
(d) preparing hides by curing them with salt;
(e) removing long, coarse hair from pelts and trimming underlying hair to even length;
(f) tanning and dressing pelts to improve lustre and beauty or to restore the natural appearance of pelts;
(g) preparing bark and myrobalan liquor for treating hides or skins;
(h) treating hides and skins in tanning solution to convert them into leather;
(i) tinting or dyeing furs to enhance natural shades of fur;
(j) removing wrinkles and setting grains on wet hides or skins;
(k) dressing and applying dyes and stains to leather;
(l) stretching and smoothing dressed pelts;
(m) seasoning leather by applying chemical solution or oil evenly onto the surface by hand brush and allowing it to dry in open air.
Examples of the occupations classified here:
▪ Fellmonger
▪ Pelt grader
▪ Tanner
Some related occupations classified elsewhere:
▪ Tanning machine operator – 8155',
            ),
            3 => 
            array (
                'id' => '7536',
                'title' => 'Shoemakers and Related Workers',
            'description' => 'Shoemakers and related workers make, modify and repair standard, custom or orthopaedic footwear and natural or synthetic leather articles such as luggage, handbags and belts (except for leather garments, hats and gloves), or participate in the manufacture of shoes and related goods. They decorate, reinforce or finish shoes, luggage, handbags and belts.
Tasks include –
(a) making, modifying and repairing standard footwear to meet individual requirements;
(b) making, modifying and repairing orthopaedic or therapeutic footwear according to doctors\' prescriptions, or modifying existing footwear for people with foot problems and special needs;
(c) repairing belts, luggage, purses and similar products;
(d) taking plaster casts of deformed legs or feet  to prepare drawings;
(e) preparing inserts, heel pads and lifts from casts of customers\' feet;
(f) studying drawings and other specifications to make footwear according to customers\' needs;
(g) studying work orders and/or shoe part tags to obtain information about workloads, specifications and the types of materials to be used;
(h) checking the texture, colour and strength of leather to ensure that it is adequate for a particular purpose;
(i) cutting out, shaping and padding parts for making leather articles;
(j) sewing rips or patching holes to repair articles such as purses, belts, shoes and luggage;
(k) removing and examining shoes, shoe parts and designs to verify conformity with specifications, such as proper embedding of stitches in channels;
(l) attaching accessories or ornamentation to decorate or protect products;
(m) making and repairing articles such as saddles and harnesses for animals, luggage, handbags, briefcases, leather bags, belts and other accessories.
Examples of the occupations classified here:
▪ Cobbler
▪ Orthopaedic shoemaker
▪ Saddler
▪ Shoemaker
Some related occupations classified elsewhere:
▪ Furrier – 7531
▪ Hatter – 7531
▪ Shoe production machine operator – 8156',
            ),
            4 => 
            array (
                'id' => '754',
                'title' => 'Other Craft and Related Workers',
                'description' => 'Other craft and related workers work under the surface of water, using underwater breathing apparatus; position, assemble and detonate explosives; inspect and  test  raw materials, manufactured components and products; and remove unwanted organisms to prevent damage to crops and buildings and other structures. This group includes other trade and craft occupations not classified elsewhere in Major Group 7: Craft and Related Trades Workers
Tasks performed usually include: ensuring safety precautions; performing various underwater tasks; loading explosives into blast holes; mixing chemicals according to instructions; operating and monitoring equipment for spraying pests and weeds.
Occupations in this minor group are classified into the following unit groups:
7541 Underwater Divers
7542 Shotfirers and Blasters
7543 Product Graders and Testers (excluding Foods and Beverages)
7544 Fumigators and Other Pest and Weed Controllers
7549 Craft and Related Workers Not Elsewhere Classified',
            ),
            5 => 
            array (
                'id' => '7541',
                'title' => 'Underwater Divers',
                'description' => 'Underwater divers work under the surface of water, with or without the aid of underwater breathing apparatus, to inspect, install, repair and remove equipment and structures, conduct tests or experiments, rig explosives, photograph structures or marine life, collect various forms of aquatic life for commercial or research purposes, and find and recover missing items and persons.
Tasks include –
(a) taking safety precautions, such as monitoring dive lengths and depths, and registering with authorities before diving expeditions begin;
(b) checking and maintaining diving equipment such as helmets, masks, air tanks, diving suits, harnesses and gauges;
(c) descending into water with the aid of diver helpers, using scuba gear or diving suits;
(d) working under water to lay and repair bridges, piers and harbour-wall foundations;
(e) inspecting for suspected damage and making minor repairs to ships\' hulls and underwater installations;
(f) reporting on the condition of wrecked ships;
(g) removing underwater obstructions;
(h) drilling holes for underwater blasting;
(i) performing various underwater tasks connected with salvage work or recovering dead bodies;
(j) gathering shellfish, sponges and other aquatic life forms;
(j) communicating with workers on the surface while under water, using signal lines or telephones;
(k) obtaining information about diving tasks and environmental conditions.
Examples of the occupations classified here:
▪ Oyster diver
▪ Salvage frogman
▪ Sponge diver
▪ Underwater worker
Some related occupations classified elsewhere:
▪ Subsistence diver – 6340',
            ),
            6 => 
            array (
                'id' => '7542',
                'title' => 'Shotfirers and Blasters',
                'description' => 'Shotfirers and blasters position, assemble and detonate explosives at mining, quarrying and demolition sites.
Tasks include –
(a) ensuring that workplace safety and explosives handling, storage and transport procedures and regulations are followed;
(b) planning and giving instructions for the layout, depth and diameter of blast holes;
(c) checking depth and cleanliness of blast holes;
(d) determining quantity and type of explosives to be used;
(e) loading explosives into blast holes;
(f) assembling, or directing other workers to assemble, primer charges using detonators and explosive cartridges, and attaching electrical wires, fuses and detonating cords to primers;
(g) connecting wires, fuses and detonator cords into series, testing electrical circuits and repairing malfunctions, and connecting series to blasting machines;
(h) covering charges, filling blast holes with rock dust, sand and other materials, and tamping material to compact charges;
(i) ensuring that all explosives are detonated, and reporting and attending to misfires;
(j) declaring blast areas safe before and after detonation of explosives;
(k) compiling and maintaining records about usage of explosives in compliance with laws and regulations.
Examples of the occupations classified here:
▪ Blaster
▪ Powderman
▪ Powder monkey
▪ Shotfirer
Some related occupations classified elsewhere:
▪ Mining supervisor – 3121
▪ Driller (mining) – 8111
▪ Driller (oil or gas well) – 8113
▪ Mining labourer – 9311
▪ Quarry labourer – 9311',
            ),
            7 => 
            array (
                'id' => '7543',
            'title' => 'Product Graders and Testers (excluding Foods and Beverages)',
            'description' => 'Product graders and testers (excluding foods and beverages) inspect, test, sort, sample and weigh raw materials, manufactured components and non-comestible goods produced or sold, to ensure compliance with quality standards, to identify defects, wear and deviations from specifications, and to grade and classify them according to their quality.
Tasks include –
(a) inspecting and testing products, parts and materials for conformity with specifications and standards;
(b) grading and classifying natural textile fibres for spinning and winding;
(c) discarding or rejecting products, materials and equipment not meeting specifications;
(d) analysing and interpreting blueprints, data, manuals and other materials to determine specifications, inspection and testing procedures;
(e) notifying supervisors and other personnel of production problems, and assisting in identifying and correcting these problems;
(f) recording inspection or test data such as weights, temperatures, grades or moisture content, and quantities inspected or graded;
(g) marking items with details such as grade and acceptance or rejection status;
(h) measuring dimensions of products using instruments such as rulers, calipers, gauges or micrometers;
(i) analysing test data and making computations as necessary to determine test results.
Examples of the occupations classified here:
▪ Product grader
▪ Quality inspector
▪ Wool classer
Some related occupations classified elsewhere:
▪ Product safety inspector – 3257
▪ Food grader – 7515
▪ Fur grader – 7531
▪ Pelt grader – 7535',
            ),
            8 => 
            array (
                'id' => '7544',
                'title' => 'Fumigators and Other Pest and Weed Controllers',
                'description' => 'Fumigators and other pest and weed controllers use chemicals to remove harmful insects, small animals, wild plants and other unwanted organisms, to prevent damage to crops and to buildings and other structures and their surroundings, and to prevent health risks.
Tasks include –
(a) operating and monitoring equipment for spraying pests and weeds;
(b) mixing chemicals according to instructions;
(c) covering areas to specified depths with pesticides, applying knowledge of weather conditions, droplet sizes, elevation-to-distance ratios, and obstructions;
(d) spraying or releasing chemical solutions or toxic gases, and setting traps to kill pests and vermin, such as mice, termites and roaches;
(e) lifting, pushing and swinging nozzles, hoses and tubes in order to direct spray over designated areas;
(f) filling sprayer tanks with water and chemicals;
(g) cleaning and servicing machinery to ensure operating efficiency.
Examples of the occupations classified here:
▪ Fumigator
▪ Pest controller
▪ Weed controller
Some related occupations classified elsewhere:
▪ Aerial crop sprayer – 3153',
            ),
            9 => 
            array (
                'id' => '7549',
                'title' => 'Craft and Related Workers Not Elsewhere Classified',
                'description' => 'This group covers craft and trade occupations not classified elsewhere in Major Group 7: Craft and Related Trades Workers.  For instance, the group includes those who mould, slice, grind and polish optical lenses and those who arrange flowers for display.
In such cases tasks would include –
(a) heating, moulding and pressing optical glass to make lens blanks;
(b) grinding and polishing lens blanks.
Examples of the occupations classified here:
▪  Flower arranger
▪  Optical lens finisher
▪  Optical lens moulder',
            ),
            10 => 
            array (
                'id' => '8',
                'title' => 'Plant and Machine Operators and Assemblers',
                'description' => 'Plant and machine operators and assemblers operate and monitor industrial and agricultural machinery and equipment on the spot or by remote control; drive and operate trains, motor vehicles and mobile machinery and equipment; or assemble products from component parts according to strict specifications and procedures. Competent performance in most occupations in this major group requires skills at the second ISCO skill level.
The work mainly calls for experience with and an understanding of industrial and agricultural machinery and equipment, as well as an ability to cope with machine-paced operations and to adapt to technological innovations.
Tasks performed by plant and machine operators and assemblers usually  include: operating and monitoring mining or other industrial machinery and equipment for processing metal, minerals, glass, ceramics, wood, paper or  chemicals; operating and monitoring machinery and equipment used to produce articles made of metal,  minerals, chemicals, rubber, plastics, wood, paper, textiles, fur or leather, and which process foodstuffs and related products; driving and operating trains and motor vehicles;  driving, operating and monitoring mobile industrial and agricultural machinery  and equipment; and assembling products from component parts according to strict  specifications and procedures. Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
81 Stationary Plant and Machine Operators
82 Assemblers
83 Drivers and Mobile Plant Operators
Note
Operators of machinery that involves automated control of multiple processes or functions are included in Minor Group 313:  Process control technicians.',
            ),
            11 => 
            array (
                'id' => '81',
                'title' => 'Stationary Plant and Machine Operators',
                'description' => 'Stationary plant and machine operators monitor and operate stationary industrial plant, machinery and equipment, or for which mobility is not an integral part of operation. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
The work mainly calls for experience with and an understanding of the industrial plant, machinery or equipment being operated and monitored. Ability to cope with machine-paced operations and to adapt to innovations in machinery and equipment are often required.
Tasks performed by workers in this sub-major group usually include: setting up, operating and monitoring a variety of stationary plant and machinery; detecting malfunctions and taking corrective action; examining outputs for defects and conformity with specifications and adjusting machine settings accordingly; performing maintenance, repairs and cleaning; recording data and maintaining production records. Supervision of other workers may be included.
Occupations in this sub-major group are classified into the following minor groups:
811 Mining and Mineral Processing Plant Operators
812 Metal Processing and Finishing Plant Operators
813 Chemical and Photographic Products Plant and Machine Operators
814 Rubber, Plastic and Paper Products Machine Operators
815 Textile, Fur and Leather Products Machine Operators
816 Food and Related Products Machine Operators
817 Wood Processing and Papermaking Plant Operators
818 Other Stationary Plant and Machine Operators
Note
Operators of machinery that involves automated control of multiple processes or functions are included in Minor Group 313: Process Control Technicians.',
            ),
            12 => 
            array (
                'id' => '811',
                'title' => 'Mining and Mineral Processing Plant Operators',
                'description' => 'Mining and mineral processing plant operators monitor and operate plant and machinery and operate hand tools to extract rocks and minerals from the earth, process minerals and stone, drill wells and bores, and manufacture and finish cement and stone products.
Tasks performed usually include: setting up, operating and monitoring a variety of mining and mineral processing plant and machinery such as drilling rigs and auxiliary machines and equipment, continuous mining machinery, and cutting, crushing, grinding, pumping and mixing plant and machinery; operating washing, separating, extracting and combining equipment to remove waste and recover minerals; operating plant and machinery to make cement, concrete, artificial stone, and precast concrete and stone products; monitoring the performance of a variety of plant and machinery, detecting malfunctions and taking corrective action; performing plant and machinery maintenance, repairs and cleaning; and maintaining production records.
Occupations in this minor group are classified into the following unit groups:
8111 Miners and Quarriers
8112 Mineral and Stone Processing Plant Operators
8113 Well Drillers and Borers and Related Workers
8114 Cement, Stone and Other Mineral Products Machine Operators
Note
Mining supervisors are classified in Unit Group 3121:  Mining Supervisors.',
            ),
            13 => 
            array (
                'id' => '8111',
                'title' => 'Miners and Quarriers',
                'description' => 'Miners and quarriers operate plant, machinery and hand tools to extract rocks, mineral ores and other deposits from underground and surface mines and quarries.
Tasks include –
(a) positioning, operating and monitoring the performance of a variety of underground and surface mining equipment including continuous mining, cutting and channelling plant;
(b) setting up and operating drilling equipment in underground and surface mines and quarries;
(c) operating machinery and using hand or power tools to remove loosened rock, ore, coal and other deposits;
(d) preparing, fitting and installing supports in underground workings including rock bolts;
(e) operating machinery to open new shafts, drives, air vents and rises;
(f) operating auxiliary plant such as pumps to expel air, water and mud;
(g) performing minor maintenance and repairs and lubricating and cleaning plant, machines and tools;
(h) completing records detailing operations completed during shifts;
(i) collecting mineral samples for laboratory analysis.
Examples of the occupations classified here:
▪ Bogger operator
▪ Continuous miner operator
▪ Dragline operator (mining)
▪ Driller (mining)
▪ Jumbo operator
▪ Miner
▪ Mining plant operator
▪ Quarrier
▪ Roof bolter (mining)
Some related occupations classified elsewhere:
▪ Mining supervisor – 3121
▪ Blaster – 7542
▪ Shotfirer – 7542
▪ Driller (oil or gas well) – 8113
▪ Mining labourer – 9311
▪ Quarry labourer – 9311',
            ),
            14 => 
            array (
                'id' => '8112',
                'title' => 'Mineral and Stone Processing Plant Operators',
                'description' => 'Mineral and stone processing plant operators monitor and operate machinery and equipment for processing rocks, minerals and stone to recover refined products for immediate use or further processing.
Tasks include –
(a) setting up and operating stationary plant and machinery which grind, crush, cut, saw and slice rocks, minerals and stones according to the specifications for the job;
(b) positioning blocks and slabs of stone onto machines for sawing, cutting and further working;
(c) monitoring and maintaining the flow of unprocessed rocks, minerals and stones from conveyors into machines;
(d) operating washing, separating, leaching, precipitating, filtering, extracting and combining equipment to remove waste material and recover minerals;
(e) combining mineral ores with solvents to facilitate further processing;
(f) separating metal and mineral concentrates from ore and alluvial deposits by thickening, flotation, gravity separation, filtration, or magnetic and electrostatic separation;
(g) observing meters, gauges and control panels, adjusting valves and controls to ensure the safe and efficient operation of equipment, detecting malfunctions and assisting with plant and machinery maintenance and repair;
(h) examining processed materials visually or with hands to ensure compliance with established standards and job specifications, and collecting samples for testing in laboratories;
(i) recording information about processing completed during shifts, such as quantities, types and dimensions of materials produced;
(j) sorting, stacking and moving processed minerals and stone for packaging, further processing or shipping.
Examples of the occupations classified here:
▪ Coal washer
▪ Crusher operator (mineral or stone processing)
▪ Flotation worker (mineral processing)
▪ Gold precipitator
▪ Machine operator (stone cutting or processing)
▪ Milling machine operator (minerals)
Some related occupations classified elsewhere:
▪ Stone cutter (hand or hand-powered tools) – 7113
▪ Stonemason – 7113
▪ Stone polisher (hand or hand-powered tools) – 7113
▪ Stone splitter (hand or hand-powered tools) – 7113
▪ Machine operator (cast stone production) – 8114
▪ Stone polishing machine operator – 8114',
            ),
            15 => 
            array (
                'id' => '8113',
                'title' => 'Well Drillers and Borers and Related Workers',
                'description' => 'Well drillers and borers and related workers position, assemble and operate drilling machinery and related equipment to sink wells, extract rock samples, liquids and gases, or for a variety of other purposes.
Tasks include –
(a) dismantling, moving and assembling drilling rigs and auxiliary equipment;
(b) assembling and dismantling pipes, casings and drill heads, and replacing dysfunctional equipment;
(c) operating controls to lower and raise drill pipes and casings in and out of wells, regulate pressure in the well and control the speed of tools;
(d) preparing drilling fluid and checking the operation of pumps to ensure adequate circulation of fluid in drill pipes and wells;
(e) monitoring gauges and other indicators, listening to equipment to detect malfunctions and unusual well conditions, and determining the need to change drilling or equipment;
(f) maintaining, adjusting, repairing and cleaning drilling rigs, hoisting and other machinery;
(g) maintaining records of drilling and servicing operations;
(h) operating machines and tools to extract dust, cuttings and lost and broken drilling equipment from holes and wells;
(i) closing and sealing wells no longer in use;
(j) supervising and train crew members.
Examples of the occupations classified here:
▪ Bore sinker
▪ Boring equipment operator
▪ Derrickman
▪ Derrick operator
▪ Developmental driller
▪ Directional driller
▪ Driller (oil or gas well)
▪ Drilling plant operator
▪ Drilling rig operator
▪ Power-tong operator
▪ Toolpusher
▪ Tourpusher
Some related occupations classified elsewhere:
▪ Blaster – 7542
▪ Miner – 8111
▪ Quarrier – 8111',
            ),
            16 => 
            array (
                'id' => '8114',
                'title' => 'Cement, Stone and Other Mineral Products Machine Operators',
                'description' => 'Cement, stone and other mineral products machine operators monitor and operate machines for manufacturing and finishing precast concrete, bitumen and stone products, and making cast stone for building purposes.
Tasks include –
(a) operating extrusion, moulding, mixing, pumping, compacting, grinding and cutting machinery to manufacture and finish precast concrete and stone products;
(b) operating plant to produce cement, lime and clinker, including loading and unloading ingredients and operating continuous feed equipment such as pumps and conveyors;
(c) operating plant and machines which weigh and mix sand, gravel, cement, water and other ingredients to make concrete;
(d) operating plant and machinery which assemble and fill moulds with concrete and artificial stone mixtures, remove castings from moulds and finish surfaces of precast products;
(e) cutting, grinding, drilling, sandblasting and polishing concrete products and stone blocks, slabs and products to the specifications for the job;
(f) checking production plans and specifications to determine and select materials, ingredients, procedures, components, settings and adjustments for extrusion, moulding, mixing and compacting machines;
(g) monitoring plant and machines during operation by observing instruments such as temperature and pressure gauges, adjusting controls and reporting malfunctions as necessary;
(h) collecting and examining samples of mixtures and finished products for conformity with specifications and adjusting machine settings accordingly;
(i) checking and maintaining production records, including information about quantities, dimensions and types of materials and goods produced;
(j) arranging and assisting with plant and machinery maintenance and repair.
Examples of the occupations classified here:
▪ Cast-concrete products machine operator
▪ Cast-stone products machine operator
▪ Concrete finishing machine opeerator
▪ Concrete production machine operator
▪ Industrial diamond polishing machine operator
▪ Stone polishing machine operator
Some related occupations classified elsewhere:
▪ Stone polisher (hand or hand-powered tools) – 7113
▪ Stone processing machine operator – 8112
▪ Kiln operator (brick, pottery or tiles)– 8181
▪ Extruding clay press operator – 8181
Note
Examples of products produced by operators of plant and machines in this unit group include: mixed concrete for use in civil engineering and construction projects, flagstones, concrete bricks and tiles, fencing posts, moulded pipe sections and trench liners, concrete railway sleepers, walling and partition slabs, building components, cable conduits, fume and dust extraction conduits, abrasive wheels and outdoor furniture.',
            ),
            17 => 
            array (
                'id' => '812',
                'title' => 'Metal Processing and Finishing Plant Operators',
                'description' => 'Metal processing and finishing plant operators monitor and operate single-function process control machinery and equipment to control the conversion, processing and finishing of mineral ores and metals.
Tasks performed usually include: setting up, preparing and adjusting metal and ore processing and finishing machinery; coordinating and monitoring the operation of a particular aspect of metal processing production and finishing; verifying equipment for malfunctions, monitoring gauges, carrying out routine operating tests and arranging for maintenance; checking, testing and analysing sample products; recording data and writing production logs.
Occupations in this minor group are classified into the following unit groups:
8121 Metal Processing Plant Operators
8122 Metal Finishing, Plating and Coating Machine Operators',
            ),
            18 => 
            array (
                'id' => '8121',
                'title' => 'Metal Processing Plant Operators',
                'description' => 'Metal processing plant operators monitor, operate, adjust and maintain single-function process machinery and equipment to process and convert mineral ores and refine, harden, roll and extrude metals.
Tasks include –
(a) setting up, preparing and adjusting mineral ore and metal processing machinery to carry out one step in the overall mineral ore or metal processing operation;
(b) operating single-function machinery to grind, separate, filter, mix, treat, cast, roll, refine or otherwise process metals and mineral ores;
(c) observing gauges, meters, computer printouts, video monitors and products to ensure the correct operation of machines and verify specified processing conditions;
(d) adjusting equipment, valves, pumps, controls and process equipment;
(e) controlling the preparation, measuring and feeding of raw materials and processing agents into the plant;
(f) controlling process start-up and shut-down, troubleshooting and monitoring outside process equipment;
(g) verifying equipment for malfunctions, carrying out routine operating tests and arranging for maintenance;
(h) analysing sample products, performing tests, recording data and writing production logs.
Examples of the occupations classified here:
▪ Ladle pourer
▪ Metal extrusion plant operator
▪ Metal heat treating operator
▪ Steel roller
Some related occupations classified elsewhere:
▪ Blast furnace operator – 3135
▪ Central control caster – 3135
▪ Rolling mill control operator – 3135
▪ Metal coating machine operator – 8122',
            ),
            19 => 
            array (
                'id' => '8122',
                'title' => 'Metal Finishing, Plating and Coating Machine Operators',
                'description' => 'Metal finishing, plating and coating machine operators monitor and operate equipment which finishes, plates and coats metal articles or parts in order to give them improved resistance to corrosion and abrasion, for decorative purposes, or to impart electrical or magnetic properties.
Tasks include –
(a) operating and monitoring equipment which cleans metal articles in preparation for electroplating, galvanizing, enamelling or similar processes;
(b) operating and monitoring electroplating equipment;
(c) operating and monitoring hot-dip equipment used to coat iron and steel products;
(d) operating and monitoring machines which automatically coat wire with non-ferrous metal;
(e) operating and monitoring equipment used to spray molten metal or other substances onto metal products to provide a protective or decorative coating or to build up worn or damaged surfaces;
(f) operating and monitoring equipment used to impart a rust-resistant finish to metal articles by treating them with chemicals and heating them;
(g) checking proper thickness of plating using micrometers, callipers or other devices, recording data and writing production logs;
(h) preparing and mixing metallizing solutions according to formulas or specifications.
Examples of the occupations classified here:
▪ Metal coating machine operator
▪ Metal finishing machine operator
▪ Metal plating machine operator
▪ Metal polishing machine operator
Some related occupations classified elsewhere:
▪ Metal production process controller – 3135
▪ Vehicle painter – 7132',
            ),
            20 => 
            array (
                'id' => '813',
                'title' => 'Chemical and Photographic Products Plant and Machine Operators',
                'description' => 'Chemical and photographic products plant and machine operators monitor and operate machines which process a variety of chemicals and other ingredients to produce pharmaceuticals, toiletries, explosives, photographic or other chemical products.
Tasks performed usually include: operating and monitoring machines and equipment which blend, mix, package and otherwise process chemicals and chemical products to give them the desired properties for further industrial production, or to make finished products. Supervision of other workers may be included.
Occupations in this minor group are classified into the following unit groups:
8131 Chemical Products Plant and Machine Operators
8132 Photographic Products Machine Operators',
            ),
            21 => 
            array (
                'id' => '8131',
                'title' => 'Chemical Products Plant and Machine Operators',
                'description' => 'Chemical products plant and machine operators monitor and operate units and machinery to blend, mix, process and package a wide range of chemical products.
Tasks include –
(a) setting up, starting, controlling, adjusting and stopping machines and plant;
(b) monitoring reaction processes and transfers of products in conformity with safety procedures;
(c) monitoring meters, gauges and electronic instrumentation on one or more chemical or formulation units, such as mixers, kettles, blenders, dryers, or tabletting, encapsulation, granulation and coating machines;
(d) measuring, weighing and loading chemical ingredients following formulation cards;
(e) making samples and performing routine chemical and physical tests of products and recording production data;
(f) cleaning and performing minor repairs to machines and plant.
Examples of the occupations classified here:
▪ Candle production machine operator
▪ Explosive products machine operator
▪ Pharmaceutical and toiletry products machine operator
Some related occupations classified elsewhere:
▪ Chemical processing plant controller – 3133
▪ Petroleum and natural gas refining plant operator – 3134',
            ),
            22 => 
            array (
                'id' => '8132',
                'title' => 'Photographic Products Machine Operators',
                'description' => 'Photographic products machine operators operate and monitor equipment which makes photographic film and paper, and which processes exposed photographic film and makes prints.
Tasks include –
(a) operating and monitoring equipment which makes photographic film and paper;
(b) operating, monitoring and testing photographic processing and printing equipment, and maintaining operational standards;
(c) preparing exposed film for different processing batches in dark rooms and dark chambers;
(d) inspecting images, films and prints, and adjusting settings on printmaking equipment to produce the required colour, brightness, contrast, number, size and type of prints;
(e) adjusting settings and running automatic developing equipment;
(f) operating equipment to transfer film to videotape or other electronic media;
(g) performing photographic processing-related tasks;
(h) operating automatic equipment (in retail establishments) to develop colour negatives, prints and slides.
Examples of occupations classified here:
▪ Colour developer (film)
▪ Darkroom technician
▪ Developing machine operator (photography)
▪ Enlarging machine operator
▪ Photograph enlarger
▪ Photographic film machine operator
▪ Photographic film printer
▪ Photographic processor
▪ Photograph printer
Some related occupations classified elsewhere:
▪ Photographer – 3431
▪ Photolithographer – 7321',
            ),
            23 => 
            array (
                'id' => '814',
                'title' => 'Rubber, Plastic and Paper Products Machine Operators',
                'description' => 'Rubber, plastic and paper products machine operators monitor and operate machines which knead and blend rubber and rubber compounds and produce various components and products from natural and synthetic rubber and plastics, or produce different paper products from paper, paperboard, cardboard and similar materials.
Tasks performed usually include: operating and monitoring machines which knead and blend rubber and rubber compounds and produce various components and products from natural and synthetic rubber and plastics; operating and monitoring machines which produce various paper products; examining outputs for defects and conformity to specifications and adjusting machine settings accordingly.
Occupations in this minor group are classified into the following unit groups:
8141 Rubber Products Machine Operators
8142 Plastic Products Machine Operators
8143 Paper Products Machine Operators',
            ),
            24 => 
            array (
                'id' => '8141',
                'title' => 'Rubber Products Machine Operators',
                'description' => 'Rubber products machine operators monitor and operate machines which knead and blend rubber and rubber compounds and produce various components and products from natural and synthetic rubber, such as moulded footwear, domestic articles, insulating materials, industrial accessories or tyres.
Tasks include –
(a) operating and monitoring machines which knead, mix and blend rubber and rubber compounds for further processing;
(b) operating and monitoring machines which produce sheets of rubber or rubberized fabric by a rolling process;
(c) operating and monitoring machines which extrude compounded rubber or shape vulcanized rubber by moulding;
(d) operating and monitoring machines which build up tyres on a form, vulcanize tyres and mould or rebuild used tyres;
(e) examining outputs for defects and conformity to specifications;
(f) locating defects and repairing worn and faulty tyres by vulcanizing or other processes.
Examples of the occupations classified here:
▪ Latex worker
▪ Rubber extruding machine operator
▪ Rubber milling machine operator
▪ Rubber moulder
▪ Rubber products machine operator
▪ Tyre maker
▪ Tyre repairer
▪ Vulcanizer',
            ),
            25 => 
            array (
                'id' => '8142',
                'title' => 'Plastic Products Machine Operators',
                'description' => 'Plastic products machine operators monitor and operate machines which knead and blend compounds to obtain plastic materials and which make various plastic components and articles.
Tasks include –
(a) operating and monitoring machines which knead and blend compounds to obtain plastic materials;
(b) operating and monitoring machines which shape plastic materials by moulding, extrusion, blowing, cutting and other means;
(c) operating and monitoring machines which laminate plastics and plastic-impregnated materials or produce fibreglass;
(d) encasing uncoated wire, cord, cable and optic fibre in plastic;
(e) examining outputs for defects and conformity to specifications;
(f) recycling waste plastic materials;
(g) making artificial eyes and contact lens discs, making and repairing spectacle frames and plastic parts of orthopaedic appliances.
Examples of the occupations classified here:
▪ Laminated press operator (plastics)
▪ Optic fibre drawer
▪ Plastic cable making machine operator
▪ Plastic extrusion machine operator
▪ Plastic moulder
▪ Plastics boat builder
▪ Plastics bottle blowing machine operator
▪ Plastics products machine operator',
            ),
            26 => 
            array (
                'id' => '8143',
                'title' => 'Paper Products Machine Operators',
                'description' => 'Paper products machine operators monitor and operate machines which produce boxes, envelopes, bags and other goods from paper, paperboard, cardboard and similar materials.
Tasks include –
(a) operating and monitoring machines which glue paper to cardboard, cut it to the required length or cut and crease cardboard or paperboard to form box blanks;
(b) operating and monitoring pressing machines which form drinking cups or other containers from paper, paperboard or cardboard;
(c) operating and monitoring machines which cut, fold and glue paper to make envelopes and paper bags, or which form bags from other similar material.
Examples of the occupations classified here:
▪ Machine operator (cardboard products)
▪ Machine operator (envelope and paper bag production)
▪ Machine operator (paper box production)
▪ Paper products machine operator
▪ Papier maché moulder',
            ),
            27 => 
            array (
                'id' => '815',
                'title' => 'Textile, Fur and Leather Products Machine Operators',
                'description' => 'Textile, fur and leather products machine operators monitor and operate various types of machines which prepare, process and treat fibres, yarn, thread, leather or fur; produce, modify and repair footwear and garments; and manufacture or dry clean textiles, fur or light leather articles.
Tasks performed usually include: operating and monitoring weaving and knitting machines which process yarn or thread into woven, non-woven and knitted products; operating and monitoring machines which prepare fibres, and spin, double, twist and wind yarn and thread from natural textile fibres; operating and monitoring sewing machines to make, repair, darn and renovate textile, fur, synthetic or leather garments or embroider ornamental designs on garments or other materials; operating and monitoring  machines which bleach, shrink, dye and otherwise treat fibres, yarn and cloth, or which dry clean garments, fur, rugs and carpets; operating and monitoring various  machines which prepare leather or treat fur- or wool-bearing pelts; operating and monitoring machines which produce, modify and repair standard, custom or orthopaedic footwear and  leather articles such as luggage, briefcases and handbags.
Occupations in this minor group are classified into the following unit groups:
8151 Fibre Preparing, Spinning and Winding Machine Operators
8152 Weaving and Knitting Machine Operators
8153 Sewing Machine Operators
8154 Bleaching, Dyeing and Fabric Cleaning Machine Operators
8155 Fur and Leather Preparing Machine Operators
8156 Shoemaking and Related Machine Operators
8157 Laundry Machine Operators
8159 Textile, Fur and Leather Products Machine Operators Not Elsewhere Classified',
            ),
            28 => 
            array (
                'id' => '8151',
                'title' => 'Fibre Preparing, Spinning and Winding Machine Operators',
                'description' => 'Fibre preparing, spinning and winding machine operators monitor and operate machines which prepare fibres, and spin, double, twist and wind yarn and thread from natural textile fibres. They twist two or more strands of yarn to prepare single stronger, smoother, uniform and heavier strands, and treat textiles to make them stiff and water resistant.
Tasks include –
(a) operating and monitoring  machines for tearing woollen rags into fibre;
(b) operating and monitoring machines for cleaning and turning woollen yarn waste into fluffed wool;
(c) operating and monitoring machines which combine textile fibres into uniform blends;
(d) operating and monitoring machines which clean and fluff textile fibres,  transform them into sliver, comb them into sliver for first drawing, combine slivers into sliver lap or sliver laps into ribbon lap;
(e) operating draw frames (machines) having numbers of drawing sets, each set combining several slivers into one of nearly the same weight and thickness as any of the original slivers;
(f) operating and monitoring machines which spin thread and yarn from roving, wind two or more threads onto a bobbin, twist two or more strands of yarn or thread into single strands of yarn to increase strength, smoothness and/or uniformity of yarn, or wind yarn or thread from one package to another;
(g) operating and monitoring spinning frames that draw out and twist roving or sliver into yarn;
(h) operating and monitoring  machines for drawing slivers received from drawing machines into loosely twisted strands;
(i) preparing sizing for use in stiffening and finishing cloth and yarn by mixing ingredients such as starch, tallow, resins and soaps with water and boiling mixture for specified times in steam;
(j) treating textiles with chemicals to make them water resistant;
(k) cleaning rollers and cylinders of carding machines to remove wool waste;
(l) operating and resurfacing metal drawing rolls of various spinning, combing and lapping machines with new rubber or leather covers.
Examples of the occupations classified here:
▪ Fibre combing machine operator
▪ Fibre preparing machine operator
▪ Thread and yarn spinning machine operator
▪ Thread and yarn twisting machine operator
▪ Thread and yarn winding machine operator',
            ),
            29 => 
            array (
                'id' => '8152',
                'title' => 'Weaving and Knitting Machine Operators',
                'description' => 'Weaving and knitting machine operators set up, operate and monitor weaving and knitting machines which process yarn or thread into woven, non-woven and knitted products such as cloth, lace, carpets, industrial fabric, hosiery and knitted garments, or to quilt and embroider fabric.
Tasks include –
(a) setting up and operating batteries of automatic, link-type knitting machines to knit garments of specified pattern and design;
(b) threading yarn, thread and fabric through guides, needles and rollers of machines for weaving, knitting or other processing;
(c) tending automatic looms that simultaneously weave pile yarn, filling yarn and warp yarn material to produce carpets and rugs with various coloured designs;
(d) operating and monitoring looms on which yarn or twist is intersected and knotted at regular intervals to form mesh;
(e) operating and monitoring large automatic multi-needle machines to embroider material or to sew lengths of several layers of material to make yard goods, quilts or mattress coverings;
(f) tending circular knitting machines with automatic pattern controls that knit seamless hose;
(g) operating and monitoring knitting machines to knit hosiery to shape of foot and leg;
(h) operating and monitoring machines for knitting heels and toes of socks into ribs or tops cut from circular fabric;
(i) operating and monitoring machines which seam openings in toes of socks;
(j) operating and monitoring crochet machines to knit lace, trimming, etc. of desired patterns or design;
(k) examining looms to determine causes of loom stoppage, such as warp filling, harness breaks or mechanical defects;
(l) repairing or replacing worn or defective needles and other components;
(m) cleaning, oiling and lubricating machines, using air hoses, cleaning solutions, rags, oil cans and/or grease guns.
Examples of the occupations classified here:
▪ Carpet weaving machine operator
▪ Knitting machine operator
▪ Net production machine operator
▪ Weaving machine operator
Some related occupations classified elsewhere:
▪ Carpet weaver – 7318
▪ Cloth weaver – 7318
▪ Knitter – 7318',
            ),
            30 => 
            array (
                'id' => '8153',
                'title' => 'Sewing Machine Operators',
                'description' => 'Sewing machine operators monitor and operate sewing machines to make, repair, darn and renovate textile, fur, synthetic or leather garments, or embroider ornamental designs on garments or other materials. They operate buttonhole making and eyelet holing machines to cut holes, stitch around holes, stitch buttons and fix eyelets to garments.
Tasks include –
(a) operating or tending sewing machines to perform garment sewing operations such as joining, reinforcing, seaming or decorating garments or garment parts;
(b) attaching buttons, hooks, zippers, fasteners or other accessories to fabric, using feeding hoppers or clamp holders;
(c) tending semiautomatic sewing machines with multiple-sewing heads controlled by pattern chains that embroider various designs on garments;
(d) operating machines such as single or double needle sergers and flat-bed felling machines to automatically join, reinforce or decorate material or articles;
(e) operating fur sewing machines to join fur pelt strips to required size and shape and join pelts into garment sections or shells;
(f) operating stitching machines to sew leather parts together for leather garments, handbags, gloves or similar items;
(g) monitoring machine operations to detect problems such as defective stitching, breaks in thread or machine malfunctions;
(h) performing equipment maintenance tasks such as replacing needles.
Examples of the occupations classified here:
▪ Embroidery machine operator
▪ Sewing machine operator
Some related occupations classified elsewhere:
▪ Textiles handicraft worker – 7318
▪ Furrier – 7531
▪ Tailor – 7531
▪ Embroiderer – 7533
▪ Sewer – 7533',
            ),
            31 => 
            array (
                'id' => '8154',
                'title' => 'Bleaching, Dyeing and Fabric Cleaning Machine Operators',
                'description' => 'Bleaching, dyeing and fabric cleaning machine operators operate and monitor machines that bleach, shrink, dye and otherwise treat fibres, yarn or cloth.
Tasks include –
(a) starting and controlling machines and equipment to bleach, dye or otherwise process and finish fabric, yarn, thread and/or other textile goods;
(b) tending machines that shrink woven or knitted cloth to predetermined size or strengthen the weave by interlocking the fibres;
(c) tending a variety of automatic machines that comb and polish furs;
(d) operating and monitoring machines that treat silk to give it body and weight;
(e) operating and monitoring machines that impregnate textiles with chemicals to render them waterproof;
(f) dyeing articles to change or restore their colours;
(g) operating and monitoring machines that stretch or impart lustre or other type of finish to textiles;
(h) tending and regulating equipment that fumigates and removes foreign matter from furs;
(i) operating machines that comb, dry and polish furs, and clean, sterilize and fluff feathers and blankets;
(j) keying in processing instructions to programme electronic equipment;
(k) observing display screens, control panels, equipment and cloth entering or exiting processes to determine if equipment is operating correctly;
(l) cleaning machine filters and lubricating equipment.
Examples of the occupations classified here:
▪ Fabric bleaching machine operator
▪ Textile dyeing machine operator
Some related occupations classified elsewhere:
▪ Textile printer – 7322
▪ Laundry machine operator – 8157
▪ Hand launderer – 9121
▪ Hand presser – 9121',
            ),
            32 => 
            array (
                'id' => '8155',
                'title' => 'Fur and Leather Preparing Machine Operators',
                'description' => 'Fur and leather preparing machine operators monitor and operate various machines that prepare leather or treat fur- or wool-bearing pelts. They trim, scrape, clean, tan, buff and dye animal hides, pelts or skins to produce leather stock and finished furs.
Tasks include –
(a) operating and monitoring machines which remove flesh and fat from hides or pelts to clean and soften them prior to processing;
(b) operating and monitoring machines which remove long coarse hair from fur pelts, trim hair to even length and dye, stretch and smooth dressed pelts;
(c) operating and monitoring machines to remove epidermis hair roots, pigment cells and lime salts from the grain side of skin;
(d) operating and monitoring machines to reduce thickness of hide or skin to uniform size;
(e) operating and monitoring machines to polish or roughen hides or skins to specified finishes;
(f) operating and monitoring machines which separate residual wool from skins, or flesh and hair from hides;
(g) operating and monitoring machines in which hides are split edgeways to form two or more pieces or to give uniform thickness;
(h) operating and monitoring machines which treat hides and skins in solutions to convert them into leather;
(i) treating surfaces of leather with oil and operating glazing machines to give glossy finishes to leather;
(j) operating and monitoring machines which apply dyes and stains to leather;
(k) maintaining and repairing vats and other machinery.
Examples of the occupations classified here:
▪ Hide dehairing machine operator
▪ Leather staining machine operator
▪ Tanning machine operator
Some related occupations classified elsewhere:
▪ Pelt dresser – 7535
▪ Tanner – 7535',
            ),
            33 => 
            array (
                'id' => '8156',
                'title' => 'Shoemaking and Related Machine Operators',
                'description' => 'Shoemaking and related machine operators monitor and operate machines which produce and repair standard or special footwear, handbags and other accessories, mainly made of leather.
Tasks include –
(a) operating and monitoring machines which mark patterns and cut shoe parts;
(b) operating and monitoring machines which sew shoe parts together, or edge, polish, or apply ornaments and perform finishing tasks;
(c) operating and monitoring machines which produce luggage, handbags, belts and other accessories, as well as other items such as saddles, collars or harnesses.
Examples of the occupations classified here:
▪ Machine operator (footwear production)
Some related occupations classified elsewhere:
▪ Handicraft worker (leather) – 7318
▪ Cobbler – 7536',
            ),
            34 => 
            array (
                'id' => '8157',
                'title' => 'Laundry Machine Operators',
                'description' => 'Laundry machine operators operate laundry, dry-cleaning, pressing and fabric treatment machines in laundries and dry-cleaning establishments.
Tasks include –
(a) sorting articles for cleaning according to the type, colour, fabric and cleaning treatment required;
(b) placing sorted articles into receptacles and onto conveyor belts for moving to repair and cleaning areas;
(c) checking and removing stains from garments, replacing buttons and making minor repairs;
(d) loading and unloading washing machines, driers and extractors;
(e) adding cleaning agents and starches to articles;
(f) smoothing articles and guiding them through cleaning and pressing machines;
(g) stopping and starting machines to untangle, straighten and remove articles;
(h) placing articles on shelves and hanging articles for delivery and collection;
(i) packaging articles and preparing orders for despatch.
Examples of the occupations classified here:
▪ Dry-cleaning machine operator
▪ Laundry machine operator
▪ Pressing machine operator (laundry)
Some related occupations classified elsewhere:
▪ Hand launderer – 9121
▪ Hand presser – 9121',
            ),
            35 => 
            array (
                'id' => '8159',
                'title' => 'Textile, Fur and Leather Products Machine Operators Not Elsewhere Classified',
                'description' => 'This unit group covers textile, fur and leather products machine operators not classified elsewhere in Minor Group 815: Textile, Fur and Leather Products Machine Operators. For instance, the group includes those engaged in operating and monitoring machines which make hats, tents, mattresses or miscellaneous articles such as braids or other trimmings.
In such cases tasks would include –
(a) operating and monitoring machines which form and make hats out of textiles, fur or leather;
(b) operating and monitoring machines which make miscellaneous articles such as braids or other trimmings;
(c) operating and monitoring machines which fold cloth into measured length;
(d) operating and monitoring machines which wind thread, twine or yarn into balls preparatory to shipping or further processing;
(e) operating and monitoring machines to measure size of pieces of leather.
Examples of the occupations classified here:
▪ Braid making machine operator
▪ Hat making machine operator
▪ Tent making machine operator
▪ Textile patternmaking machine operator',
            ),
            36 => 
            array (
                'id' => '816',
                'title' => 'Food and Related Products Machine Operators',
                'description' => 'Food and related products machine operators set, operate and attend machinery used to slaughter animals and trim meat from carcasses, and to bake, freeze, heat, crush, mix, blend and otherwise process foodstuffs, beverages and tobacco leaves.
Task performed usually include: operating and monitoring machinery used to restrain, stun and slaughter animals, and to trim carcasses into standard meat and fish cuts; setting, operating and attending machinery and ovens to mix, bake and otherwise prepare bread and flour confectionery products; operating machinery to crush, mix, malt, cook and ferment grains and fruits to produce beer, wines, malt liquors, vinegar, yeast and related products; attending equipment to make jam, toffee, cheese, processed cheese, margarine, syrup, ice, pasta, icecream, sausages, chocolate, maize starch, edible fats and dextrin; operating equipment to cool, heat, dry, roast, blanch, pasteurize, smoke, sterilize, freeze, evaporate and concentrate foodstuffs and liquids used in food processing; mixing, pulping, grinding, blending and separating foodstuffs and liquids with churning, pressing, sieving, grinding and filtering equipment; processing tobacco leaves by machine to make cigarettes, cigars, pipe and other tobacco products.
Occupations in this minor group are classified into the following unit group:
8160 Food and Related Products Machine Operators',
            ),
            37 => 
            array (
                'id' => '8160',
                'title' => 'Food and Related Products Machine Operators',
                'description' => 'Food and related products machine operators set, operate and attend machinery used to slaughter animals and trim meat from carcasses; bake, freeze, heat, crush, mix, blend and otherwise process foodstuffs, beverages and tobacco leaves.
Tasks include –
(a) operating and monitoring machinery used to restrain, stun and slaughter animals and to trim carcasses into standard meat and fish cuts;
(b) setting, operating and attending machinery and ovens to mix, bake and otherwise prepare bread and flour confectionery products;
(c) operating machinery to crush, mix, malt, cook and ferment grains and fruits to produce beer, wines, malt liquors, vinegar, yeast and related products;
(d) attending equipment to make jam, toffee, cheese, processed cheese, margarine, syrup, ice, pasta, ice-cream, sausages, chocolate, maize starch, edible fats and dextrin;
(e) operating equipment to cool, heat, dry, roast, blanch, pasteurize, smoke, sterilize, freeze, evaporate and concentrate foodstuffs and liquids used in food processing;
(f) mixing, pulping, grinding, blending and separating foodstuffs and liquids with churning, pressing, sieving, grinding and filtering equipment;
(g) processing tobacco leaves by machine to make cigarettes, cigars, pipe and other tobacco products.
Examples of the occupations classified here:
▪ Bakery products machine operator
▪ Bread production machine operator
▪ Chocolate production machine operator
▪ Cigarette production machine operator
▪ Cigar production machine operator
▪ Dairy products machine operator
▪ Fish processing machine operator
▪ Meat processing machine operator
▪ Milk processing machine operator
Some related occupations classified elsewhere:
▪ Bottling machine operator – 8183',
            ),
            38 => 
            array (
                'id' => '817',
                'title' => 'Wood Processing and Papermaking Plant Operators',
                'description' => 'Wood processing and papermaking plant operators monitor, operate and control machinery to saw wood, cut veneer, make plywood, produce pulp and paper and to otherwise prepare wood, pulp and paper for further use.
Tasks performed usually include: examining logs and rough lumber to determine size, condition, quality and other characteristics to decide best lumber cuts to carry out, or operating automated equipment to convey logs through laser scanners which determine the most productive and profitable cutting patterns;  sorting, stacking and placing logs and wood billets onto conveyors and lathes from trucks for processing into chips, veneers and pulp;  operating and monitoring screening equipment, bleaching equipment, digesters, mixing tanks, washers and other pulp processing machinery and equipment to carry out one or more cellulose processing steps; operating and monitoring papermaking and finishing process machinery and equipment to dry, calender, laminate, coat, slit, trim, wind or carry out other papermaking and finishing process steps;  observing equipment and machinery panel indicators, gauges, level indicators and other equipment instruments to detect machinery and equipment malfunctions and ensure process steps are carried out according to specifications;  operating and monitoring plywood core-laying machines and hot-plate plywood presses and machines which cut veneer;  transporting processed wood products to work areas.
Occupations in this minor group are classified into the following unit groups:
8171 Pulp and Papermaking Plant Operators
8172 Wood Processing Plant Operators',
            ),
            39 => 
            array (
                'id' => '8171',
                'title' => 'Pulp and Papermaking Plant Operators',
                'description' => 'Pulp and papermaking plant operators monitor and operate equipment to process wood, pulp and other cellulose materials in the production of pulp and to produce coat and finish paper.
Tasks include –
(a) operating and monitoring screening and bleaching equipment, digesters, mixing tanks, washers and other pulp processing machinery and equipment to carry out one or more cellulose processing steps;
(b) operating and monitoring papermaking and finishing process machinery and equipment to dry, calender, laminate, coat, slit, trim, wind or carry out other papermaking and finishing process steps;
(c) controlling start-up and shut-down of machinery and equipment, and observing equipment and machinery panel indicators, gauges and other equipment to detect machinery and equipment malfunctions and ensure that process steps are carried out according to specifications;
(d) communicating with process control operators to make process adjustments and to start up or shut down machinery and equipment as required;
(e) analysing instrument readings and production test samples and making adjustments to the production process and equipment as required;
(f) mounting, positioning and threading paper rolls using a hoist;
(g) inspecting paper visually for wrinkles, holes, discoloration, streaks or other defects, and taking corrective action;
(h) completing and maintaining production reports.
Examples of the occupations classified here:
▪ Calender operator (pulp and paper)
▪ Pulp and paper grinder operator
▪ Repulper operator
▪ Sheeter operator (pulp and paper)
Some related occupations classified elsewhere:
▪ Paper pulp refinery operator – 3139
▪ Pulping control operator – 3139
▪ Pulping technician – 3139',
            ),
            40 => 
            array (
                'id' => '8172',
                'title' => 'Wood Processing Plant Operators',
                'description' => 'Wood processing plant operators monitor, operate and control lumber mill equipment for sawing timber logs into rough lumber, cutting veneer, making plywood and particle board, and otherwise preparing wood for further use.
Tasks include –
(a) examining logs and rough lumber to determine size, condition, quality and other characteristics to decide best lumber cuts to carry out, or operating automated equipment to convey logs through laser scanners which determine the most productive and profitable cutting patterns;
(b) operating and monitoring log in-feed and conveyor systems;
(c) operating and monitoring head saws, resaws and multiblade saws to saw logs, cants, flitches, slabs or wings and remove rough edges from sawn timber into dressed lumber of various sizes, and to saw or split shingles and shakes;
(d) operating and monitoring plywood core-laying machines and hot-plate plywood presses and machines which cut veneer;
(e) cleaning and lubricating sawmill equipment.
Examples of the occupations classified here:
▪ Circular saw operator
▪ Log cut-off operator
▪ Plywood press-operator
▪ Sawmill operator
▪ Sawmill planer operator
▪ Sawmill trimmer operator
▪ Wood processing plant sawyer
▪ Veneer lathe operator
Some related occupations classified elsewhere:
▪ Timber treating tank operator – 7521
▪ Veneer dryer tender – 7521
▪ Wood working machine operator – 7523',
            ),
            41 => 
            array (
                'id' => '818',
                'title' => 'Other Stationary Plant and Machine Operators',
                'description' => 'This unit group includes stationary plant and machine operators not classified elsewhere in Sub-major Group 81: Stationary Plant and Machine Operators. The group includes, for instance, operators of machines which make silicon chips and splice cables and ropes.
Tasks performed usually include: monitoring kilns, furnaces and other machinery and equipment used in the manufacture of glass, ceramics, porcelain, tiles or bricks; operating machines to anneal, harden or decorate glass and ceramics; maintaining and operating stationary steam engines, boilers, turbines and auxiliary equipment;  operating and monitoring  machines which weigh, pack and label products, or fill containers with products.
Occupations in this minor group are classified into the following unit groups:
8181 Glass and Ceramics Plant Operators
8182 Steam Engine and Boiler Operators
8183 Packing, Bottling and Labelling Machine Operators
8189 Stationary Plant and Machine Operators Not Elsewhere Classified',
            ),
            42 => 
            array (
                'id' => '8181',
                'title' => 'Glass and Ceramics Plant Operators',
                'description' => 'Glass and ceramics plant operators monitor and operate kilns, furnaces and other machinery and equipment used in the manufacture of glass, ceramics, porcelain, tiles or bricks. They operate machines to anneal, harden or decorate glass and ceramics.
Tasks include –
(a) operating and monitoring glass-making furnaces to make glass by melting and fusing pre-mixed ingredients;
(b) tending hot- or cold-end spray equipment used to coat glassware with surface hardener;
(c) operating and maintaining machines that press or blow molten glass into moulds to form or shape containers such as bottles, jars and drinking glasses;
(d) operating hand presses to mould glass into required shape;
(e) operating drawing kilns to process molten glass into continuous sheets of flat glass;
(f) operating and monitoring floating-glass production plants;
(g) operating and maintaining finishing machines to grind, drill, sand, bevel, decorate, wash or polish glass or glass products;
(h) setting and operating press machines to mould ceramic articles from moist clay;
(i) operating machines to mix clay with water to knead it into a suitable plastic condition or semi-liquid form for making ceramic products;
(j) operating and monitoring kilns which bake pottery, porcelain ware, bricks and tiles;
(k) operating and monitoring machines for making glaze or abrasives;
(l) operating and monitoring machines which extrude molten glass to form fibreglass filaments;
(m) observing finished products to identify splits, cracks, breaks, colour and other imperfections.
Examples of the occupations classified here:
▪ Brick kiln operator
▪ Ceramics painting machine operator
▪ Clay mixing machine operato3
▪ Extruding clay press operator
▪ Furnace operator (glass production)
▪ Glass blowing machine operator
▪ Glass mixing machine operator
▪ Glass production furnace operator
▪ Pottery kiln operator
▪ Tile kiln operator
Some related occupations classified elsewhere:
▪ Brick and tile moulder – 7314
▪ Glass blower – 7315
▪ Glass cutter – 7315',
            ),
            43 => 
            array (
                'id' => '8182',
                'title' => 'Steam Engine and Boiler Operators',
                'description' => 'Steam engine and boiler operators maintain and operate various types of steam engines, boilers, turbines and auxiliary equipment to provide power and other utility services for commercial, industrial and institutional buildings, at work sites and aboard ships or self-propelled vessels.
Tasks include –
(a) operating, cleaning, lubricating and monitoring steam engines, boilers and auxiliary equipment such as pumps, compressors and air-conditioning equipment to supply and maintain steam and power for buildings, marine vessels or pneumatic tools;
(b) analysing and recording instrument readings, troubleshooting and performing minor repairs to prevent equipment or system failure;
(c) monitoring and inspecting performance of equipment for efficient operation and ensuring that boiler water, chemicals and fuel are maintained at required levels;
(d) firing coal furnaces by hand or with stokers and gas- or oil-fed boilers, using automatic gas feeds or oil pumps;
(e) testing boiler water quality or arranging for testing, adjusting and taking necessary corrective action, such as adding chemicals to prevent corrosion and harmful deposits;
(f) monitoring ship\'s engine, machinery and equipment indicators, recording variables and reporting abnormalities to the ship\'s engineer officer on watch;
(g) operating and maintaining off-loading liquid pumps and valves.
Examples of the occupations classified here:
▪ Boiler tender
▪ Ship\'s boiler operator
▪ Stationary engineer
▪ Steam engine operator
▪ Stoker
Some related occupations classified elsewhere:
▪ Ship\'s engineer – 3151
▪ Stationary engine fitter – 7233',
            ),
            44 => 
            array (
                'id' => '8183',
                'title' => 'Packing, Bottling and Labelling Machine Operators',
                'description' => 'Packing, bottling and labelling machine operators monitor and operate machines which weigh, pack and label various products or fill different containers with products.
Tasks include –
(a) operating and monitoring machines that weigh, wrap, seal and pack various products;
(b) operating and monitoring machines that fill and seal tubes, bottles, cans, boxes, bags and other containers with products such as food, beverages, paints, oils and lotions;
(c) operating and monitoring machines that, by gluing or other methods, label products, packages and various containers.
Examples of the occupations classified here:
▪ Bottle filler
▪ Canning machine operator
▪ Labelling machine operator
▪ Packing machine operator
▪ Wrapping machine operator
Some related occupations classified elsewhere:
▪ Hand packer – 9321',
            ),
            45 => 
            array (
                'id' => '8189',
                'title' => 'Stationary Plant and Machine Operators Not Elsewhere Classified',
                'description' => 'This unit group includes stationary plant and machine operators not classified elsewhere in Sub-major Group 81: Stationary Plant and Machine Operators. The group includes, for instance, operators of machines which make silicon chips and splice cables and ropes.
Examples of the occupations classified here:
▪ Cable and rope splicing machine operator
▪ Silicon chip production machine operator',
            ),
            46 => 
            array (
                'id' => '82',
                'title' => 'Assemblers',
                'description' => 'Assemblers assemble prefabricated parts or components to form subassemblies, products and equipment, according to procedures strictly laid down. The products worked on may be moved from one worker to the next along assembly lines.  Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include: assembling components into various types of product and equipment, according to strictly laid down procedures; reviewing work orders, specifications, diagrams and drawings to determine materials needed and assembly instructions; recording production and operational data on specified forms; inspecting and testing completed components and assemblies, wiring installations and circuits; rejecting faulty assemblies and components.
Occupations in this sub-major group are classified into the following minor group:
821 Assemblers',
            ),
            47 => 
            array (
                'id' => '821',
                'title' => 'Assemblers',
                'description' => 'Assemblers assemble prefabricated parts or components to form subassemblies, products and equipment, according to procedures strictly laid down. The products worked on may be moved from one worker to the next along assembly lines.
Tasks performed usually include: assembling components into various types of product and equipment, according to procedures strictly laid down; reviewing work orders, specifications, diagrams and drawings to determine materials needed and assembly instructions; recording production and operational data on specified forms; inspecting and testing completed components and assemblies, wiring installations and circuits; rejecting faulty assemblies and components.
Occupations in this minor group are classified into the following unit groups:
8211 Mechanical Machinery Assemblers
8212 Electrical and Electronic Equipment Assemblers
8219 Assemblers Not Elsewhere Classified',
            ),
            48 => 
            array (
                'id' => '8211',
                'title' => 'Mechanical Machinery Assemblers',
                'description' => 'Mechanical machinery assemblers assemble, according to procedures strictly laid down, component parts of mechanical machinery such as engines, motor vehicles, turbines and aircraft.
Tasks include –
(a) assembling and installing prefabricated parts or components to form subassemblies, mechanical machinery, engines and finished motor vehicles;
(b) reviewing work orders, specifications, diagrams and drawings to determine materials needed and assembly instructions;
(c) recording production and operational data on specified forms;
(d) inspecting and testing completed components and assemblies;
(e) rejecting faulty assemblies and components.
Examples of the occupations classified here:
▪ Aircraft assembler
▪ Bench fitter (trucks)
▪ Engine assembler
▪ Engine installer
▪ Gearbox assembler
▪ Turbine assembler
▪ Vehicle assembler
Some related occupations classified elsewhere:
▪ Motor vehicle mechanic – 7231
▪ Electromechanical equipment assembler – 8212
▪ Bicycle assembler – 8219',
            ),
            49 => 
            array (
                'id' => '8212',
                'title' => 'Electrical and Electronic Equipment Assemblers',
                'description' => 'Electrical and electronic equipment assemblers assemble or modify, according to procedures strictly laid down, components of electrical, electromechanical and electronic equipment.
Tasks include –
(a) assembling component parts and electrical and electronic systems and positioning, aligning and fastening units to assemblies, subassemblies or frames using hand or power tools, soldering and micro-welding equipment.;
(b) reviewing work orders, specifications, diagrams and drawings to determine materials needed and assembly instructions;
(c) recording production and operational data on specified forms;
(d) operating wire-coiling machines to wind wire coils used in electrical equipment and components such as registers, transformers, armature wires, electric motors and generators;
(e) inspecting and testing completed components and assemblies, wiring installations and circuits, and rejecting faulty assembly components.
Examples of the occupations classified here:
▪ Armature assembler
▪ Electrical equipment assembler
▪ Electromechanical equipment assembler
▪ Electronic equipment assembler
▪ Etcher (printed circuit board)
▪ Telephone assembler
▪ Television assembler
▪ Watch assembler
Some related occupations classified elsewhere:
▪ Precision-instrument maker – 7311
▪ Electronics mechanics and servicer – 7421',
            ),
            50 => 
            array (
                'id' => '8219',
                'title' => 'Assemblers Not Elsewhere Classified',
                'description' => 'Assemblers not elsewhere classified assemble, according to procedures strictly laid down, various products that do not include electronic, electrical, or mechanical components.
Tasks include –
(a) assembling component parts and positioning, aligning and fastening units to assemblies, subassemblies or frames using hand or power tools, soldering and micro-welding equipment;
(b) reviewing work orders, specifications, diagrams and drawings to determine materials needed and assembly instructions;
(c) recording production and operational data on specified forms;
(d) inspecting and testing components and completed assemblies;
(e) rejecting faulty products.
Examples of the occupations classified here:
▪ Ammunition assembler
▪ Bicycle assembler
▪ Box builder
▪ Door assembler
▪ Eyeglass frame assembler
▪ Furniture finisher (wood)
▪ Jewellery assembler
▪ Knife assembler
▪ Leather products assembler
▪ Luggage finisher
▪ Metal products assembler (except mechanical)
▪ Paperboard products assembler
▪ Pen and pencil assembler
▪ Plastic products assembler
▪ Plastic toy assembler
▪ Rubber products assembler
▪ Sun-blinds assembler
▪ Textile products assembler
▪ Thermos bottle assembler
▪ Wood products assembler',
            ),
            51 => 
            array (
                'id' => '83',
                'title' => 'Drivers and Mobile Plant Operators',
                'description' => 'Drivers and mobile plant operators drive and tend trains and motor vehicles, or drive, operate and monitor industrial and agricultural machinery and equipment, or execute deck duties on board ship and other water-borne craft. Competent performance in most occupations in this sub-major group requires skills at the second ISCO skill level.
Tasks performed by workers in this sub-major group usually include:  driving and tending trains and motor vehicles; driving, operating and monitoring mobile industrial and agricultural machinery and equipment; carrying out deck duties on board ship and other water-borne craft.
Occupations in this sub-major group are classified into the following minor groups:
831 Locomotive Engine Drivers and Related Workers
832 Car, Van and Motorcycle Drivers
833 Heavy Truck and Bus Drivers
834 Mobile Plant Operators
835 Ships\' Deck Crews and Related Workers',
            ),
            52 => 
            array (
                'id' => '831',
                'title' => 'Locomotive Engine Drivers and Related Workers',
                'description' => 'Locomotive engine drivers and related workers drive, or assist in driving, locomotive engines to transport passengers and freight; take charge of and safeguard railway freight trains during runs; control the movement of railway traffic by operating signals; switch rolling stock and make up trains in railway yards; make up trains for hauling in mines; and control their movement.
Tasks performed usually include: driving or assisting in driving railway engines, operating railway signals, switching rolling stock and making up trains in railway yards, making up trains in mines and controlling their movement.
Occupations in this minor group are classified into the following unit groups:
8311 Locomotive Engine Drivers
8312 Railway Brake, Signal and Switch Operators',
            ),
            53 => 
            array (
                'id' => '8311',
                'title' => 'Locomotive Engine Drivers',
                'description' => 'Locomotive engine drivers drive, or assist in driving, locomotive engines to transport passengers and freight.
Tasks include –
(a) driving or assisting in driving a steam, electric or diesel-electric locomotive engine;
(b) driving an underground or elevated passenger train;
(c) driving a locomotive to haul carriages underground or on the surface of a mine or quarry;
(d) watching for track hazards and observing signals and indicator gauges;
(e) operating communications systems to communicate with train crews and traffic controllers to ensure safe operation and scheduling of trains.
Examples of the occupations classified here:
▪ Locomotive driver
▪ Metropolitan railway driver
▪ Train driver
Some related occupations classified elsewhere:
▪ Tram driver – 8331
Notes
Drivers of vehicles that operate on fixed rail systems that are separated from public roadways are classified in Unit Group 8311: Locomotive Engine Drivers. Drivers of vehicles for passenger transportation on fixed rails that are incorporated in the public roadway are classified in Unit Group 8331: Bus and Tram Drivers.',
            ),
            54 => 
            array (
                'id' => '8312',
                'title' => 'Railway Brake, Signal and Switch Operators',
                'description' => 'Railway brakers, signallers and shunters take charge of and safeguard railway freight trains during runs, control the movement of railway traffic by operating signals, switch rolling stock and make up trains in railway yards, make up trains for hauling in mines and control their movement.
Tasks include –
(a) taking charge of and safeguarding freight train during runs;
(b) controlling the flow of railway traffic over sections of line by operating signals and switches from control panels or signal boxes;
(c) switching and coupling rolling stock in railway yards and sidings in accordance with orders about loading, unloading and make-up of trains;
(d) making up trains for hauling by locomotive or cable and directing their movement along haulage ways in a mine or quarry;
(e) checking train systems and equipment such as air-conditioning and heating systems, brakes and brake hoses prior to train run.
Examples of the occupations classified here:
▪ Braker (railway)
▪ Shunter (railway)
▪ Signaller (railway)',
            ),
            55 => 
            array (
                'id' => '832',
                'title' => 'Car, Van and Motorcycle Drivers',
                'description' => 'Car, van and motorcycle drivers drive and tend motorcycles, motorized tricycles, cars or vans to transport passengers, materials or goods.
Tasks performed usually include:  driving and tending motorcycles, motorized tricycles, cars or vans in order to transport materials, goods or passengers.
Occupations in this minor group are classified into the following unit groups:
8321 Motorcycle Drivers
8322 Car, Taxi and Van Drivers',
            ),
            56 => 
            array (
                'id' => '8321',
                'title' => 'Motorcycle Drivers',
                'description' => 'Motorcycle drivers drive and tend motorcycles or motorized tricycles equipped to transport materials, goods or passengers.
Tasks include –
(a) driving and tending motorcycles or motorized tricycles to transport materials, goods and passengers;
(b) observing traffic rules and signals;
(c) cleaning and washing vehicles as well as performing maintenance and minor repairs;
(d) keeping a record of journeys;
(e) delivering messages.
Examples of the occupations classified here:
▪ Dispatch rider
▪ Driver (motorized rickshaw)
▪ Driver (motorized tricycle)
▪ Motorcyclist
Some related occupations classified elsewhere:
▪ Driver (pedal vehicle) – 9331',
            ),
            57 => 
            array (
                'id' => '8322',
                'title' => 'Car, Taxi and Van Drivers',
                'description' => 'Car, taxi and van drivers drive and tend motorcars and vans to transport passengers, mail or goods.
Tasks include –
(a) driving and tending passenger vans, cars or taxis;
(b) driving and tending cars, vans or small trucks to deliver mail or goods;
(c) assisting passengers with handling of luggage;
(d) collecting fares, payments for deliveries, or documents certifying deliveries;
(e) operating telecommunications equipment to report location and availability, and following directions of control centre;
(f) determining most appropriate route;
(g) assisting physically challenged passengers;
(h) operating equipment to facilitate the loading and unloading of physically challenged passengers.
Examples of the occupations classified here:
▪ Ambulance driver
▪ Car driver
▪ Parking valet
▪ Taxi driver
▪ Van driver
Some related occupations classified elsewhere:
▪ Driver (motorized rickshaw) – 8321
▪ Bus driver – 8331
▪ Heavy truck driver – 8332
▪ Pedal vehicle driver – 9331
▪ Rickshaw puller – 9331
▪ Animal-drawn vehicle driver – 9332',
            ),
            58 => 
            array (
                'id' => '833',
                'title' => 'Heavy Truck and Bus Drivers',
                'description' => 'Heavy truck and bus drivers drive and tend heavy trucks, lorries, buses or street tramcars to transport goods, liquids, heavy materials, mail or passengers.
Tasks performed usually include: driving and tending heavy trucks, lorries, buses or street tramcars in order to transport goods, liquids, heavy materials, mail or passengers.
Occupations in this minor group are classified into the following unit groups:
8331 Bus and Tram Drivers
8332 Heavy Truck and Lorry Drivers',
            ),
            59 => 
            array (
                'id' => '8331',
                'title' => 'Bus and Tram Drivers',
                'description' => 'Bus and tram drivers drive and tend buses or street tramcars to transport passengers, mail or goods.
Tasks include –
(a) driving and tending motor buses, trolley buses or motor coaches to transport local or long-distance passengers, mail or goods;
(b) driving and tending street tramcars transporting passengers;
(c) opening and closing doors before or after passengers board or alight;
(d) assisting passengers with luggage;
(e) controlling lighting, heating and ventilation on buses and trams;
(f) observing traffic to ensure safe progress;
(g) collecting fares or verifying that passengers have the necessary ticket.
Examples of the occupations classified here:
▪ Bus driver
▪ Motor coach driver
▪ Tram driver',
            ),
            60 => 
            array (
                'id' => '8332',
                'title' => 'Heavy Truck and Lorry Drivers',
                'description' => 'Heavy truck and lorry drivers drive and tend heavy motor vehicles to transport goods, liquids and heavy materials over short or long distances.
Tasks include –
(a) driving and tending a heavy motor vehicle, such as a lorry with or without trailer or a dump-truck, to transport goods, liquids or heavy materials over short or long distances;
(b) determining the most appropriate routes;
(c) ensuring that goods are stowed and securely covered to prevent loss and damage;
(d) assisting with or carrying out loading or unloading operations, using various lifting or tipping devices;
(e) carrying out minor maintenance to vehicles, and arranging major maintenance and repairs;
(f) estimating weights to comply with load limitations, and ensuring the safe distribution of weights.
Examples of the occupations classified here:
▪ Concrete mixer driver
▪ Garbage truck driver
▪ Heavy truck driver
▪ Road train driver
Some related occupations classified elsewhere:
▪ Van driver – 8322',
            ),
            61 => 
            array (
                'id' => '834',
                'title' => 'Mobile Plant Operators',
                'description' => 'Mobile plant operators drive, tend, operate and monitor special-purpose motorized machinery or equipment used for clearing or preparing land; digging, moving, and spreading earth, rock and similar materials; and lifting or moving heavy objects.
Tasks performed usually include: preparing and positioning plant for operation; adjusting speed, height and depth of implements; driving and operating mobile plant; operating attachments to lift, swing and release trees, logs, earth and other heavy objects or materials; operating and monitoring lifting trucks and stationary or mobile cranes in construction, transportation and storage operations; servicing machinery and performing minor repairs.
Occupations in this minor group are classified into the following unit groups:
8341 Mobile Farm and Forestry Plant Operators
8342 Earthmoving and Related Plant Operators
8343 Crane, Hoist and Related Plant Operators
8344 Lifting Truck Operators',
            ),
            62 => 
            array (
                'id' => '8341',
                'title' => 'Mobile Farm and Forestry Plant Operators',
                'description' => 'Mobile farm and forestry plant operators drive, tend, operate and monitor one or more types of special-purpose motorized mobile machinery or equipment used in agricultural, horticultural and forestry operations.
Tasks include –
(a) driving and tending tractor-drawn or self-propelled special-purpose farm machinery to plough land and sow, fertilize, cultivate and harvest crops;
(b) driving and tending tractor-drawn or self-propelled special-purpose forestry machinery to clear land, plant, harvest and carry trees and timber or perform other forestry operations;
(c) preparing and positioning plant for operation;
(d) adjusting speed, height and depth of implements;
(e) operating plant to hold, lift and cut trees;
(f) operating attachments to lift, swing, release and sort trees and logs, and operating auxiliary plant such as chipping machines and log splitting machines;
(g) feeding felled trees into processors to strip limbs and cut into logs and loading logs onto stockpiles and into trucks;
(h) servicing machinery and performing minor repairs.
Examples of the occupations classified here:
▪ Harvester operator
▪ Logging plant operator
▪ Timber carrier driver
▪ Tractor driver
▪ Tree faller operator
Some related occupations classified elsewhere:
▪ Bulldozer operator – 8342',
            ),
            63 => 
            array (
                'id' => '8342',
                'title' => 'Earthmoving and Related Plant Operators',
                'description' => 'Earthmoving and related plant operators operate machines to excavate, grade, level, smooth and compact earth or similar materials.
Tasks include –
(a) operating and monitoring excavating machinery equipped with moveable shovels, grab-buckets or dragline buckets, to excavate and move earth, rock, sand, gravel or similar materials;
(b) operating and monitoring machinery for digging trenches for sewers, drainage, water, oil, gas or similar pipelines;
(c) operating and monitoring machinery equipped with concave steel blades to move, distribute and level earth, sand, snow and other materials;
(d) operating and monitoring equipment to remove sand, gravel and mud from bottom of body of water;
(e) operating and monitoring machines for hammering wooden, concrete or steel piles into ground;
(f) operating and monitoring power rollers to compact and smooth layers of materials in making roads and pavements, and similar work;
(g) operating and monitoring machines which spread and smooth concrete or bituminous or tar preparations to construct roadways, roads or similar surfaces.
Examples of the occupations classified here:
▪ Bulldozer operator
▪ Excavator operator
▪ Front-end loader operator
▪ Pile-driver operator
▪ Road-roller operator
▪ Road surface laying machine operator
▪ Snow-groomer operator',
            ),
            64 => 
            array (
                'id' => '8343',
                'title' => 'Crane, Hoist and Related Plant Operators',
                'description' => 'Crane, hoist and related plant operators monitor and operate stationary and mobile cranes and other hoisting equipment.
Tasks include –
(a) operating and monitoring stationary or mobile cranes by raising and lowering jibs and booms to lift, move, position or place equipment and materials;
(b) operating and monitoring equipment for hoisting, lowering or raising workers and materials on construction sites or in mines;
(c) operating and monitoring ski-lifts and similar equipment;
(d) operating and monitoring machinery used to haul ferries or barges with goods, passengers and vehicles across short stretches of water;
(e) operating and monitoring machinery to open and close bridges for the passage of road and water traffic;
(f) operating and monitoring cranes equipped with dredging attachments to dredge waterways and other areas;
(g) operating cranes mounted on boats or barges to lift, move and place equipment and materials.
Examples of the occupations classified here:
▪ Cable car operator
▪ Chair-lift operator
▪ Crane operator
▪ Funicular driver
▪ Hoist operator
▪ Mine cage operator
▪ Ski-lift operator',
            ),
            65 => 
            array (
                'id' => '8344',
                'title' => 'Lifting Truck Operators',
                'description' => 'Lifting truck operators drive, operate and monitor lifting trucks or similar vehicles to transport, lift and stack pallets with goods.
Tasks include –
(a) operating and monitoring lifting truck and similar equipment to load and unload, transport, lift and stack goods and pallets in terminals, harbours, warehouses, factories and other establishments;
(b) positioning lifting devices under, over, or around loaded pallets, skids and boxes, and securing material or products for transport to designated areas;
(c) inspecting equipment to identify wear and damage;
(d) performing routine maintenance on vehicles and equipment;
(e) keeping records of work undertaken and breakdowns of vehicles.
Examples of the occupations classified here:
▪ Forklift truck driver',
            ),
            66 => 
            array (
                'id' => '835',
                'title' => 'Ships\' Deck Crews and Related Workers',
                'description' => 'Ship\'s deck crews and related workers carry out deck duties on board ships and similar duties on board other water-borne craft.
Tasks performed usually include: standing look-out watches at sea and when entering or leaving harbour or other narrow waters; steering ships according to instructions; handling ropes and wires, and operating mooring equipment; maintaining and, in some cases, operating ships\' equipment, cargo gear, rigging and lifesaving and firefighting appliances; performing deck and hull cleaning, scraping, painting and other maintenance duties as required; breaking out, rigging and stowing cargo-handling gear, stationary rigging and running gear.
Occupations in this minor group are classified into the following unit group:
8350 Ships\' Deck Crews and Related Workers',
            ),
            67 => 
            array (
                'id' => '8350',
                'title' => 'Ships\' Deck Crews and Related Workers',
                'description' => 'Ship\'s deck crews and related workers carry out deck duties on board ships and similar duties on board other water-borne craft.
Tasks include –
(a) standing look-out watches at sea and when entering or leaving harbour or other narrow waters;
(b) steering ships according to instructions;
(c) handling ropes and wires, and operating mooring equipment;
(d) maintaining and, in some cases, operating ships\' equipment, cargo gear, rigging, lifesaving and firefighting appliances;
(e) performing deck and hull cleaning, scraping, painting and other maintenance duties as required;
(f) breaking out, rigging and stowing cargo-handling gear, stationary rigging and running gear.
Examples of the occupations classified here:
▪ Boatswain
▪ Ferry hand
▪ Sailor
▪ Tug hand',
            ),
            68 => 
            array (
                'id' => '9',
                'title' => 'Elementary Occupations',
                'description' => 'Elementary occupations involve the performance of simple and routine tasks which may require the use of hand-held tools and considerable physical effort. Most occupations in this major group require skills at the first ISCO skill level.
Tasks performed by workers in elementary occupations usually include:  cleaning, restocking supplies and performing basic maintenance in apartments, houses, kitchens, hotels, offices and other buildings; washing cars and windows; helping in kitchens and performing simple tasks in food preparation; delivering messages or goods; carrying luggage and handling baggage and freight;  stocking vending-machines or reading and emptying meters; collecting and sorting refuse; sweeping streets and similar places;  performing various simple farming, fishing, hunting or trapping tasks;  performing simple tasks connected with mining, construction and manufacturing including product-sorting; packing and unpacking produce by hand, and filling shelves; providing various street services; pedalling or hand-guiding vehicles to transport passengers and goods; driving animal-drawn vehicles or machinery.  Supervision of other workers may be included.
Occupations in this major group are classified into the following sub-major groups:
91 Cleaners and Helpers
92 Agricultural, Forestry and Fishery Labourers
93 Labourers in Mining, Construction, Manufacturing and Transport
94 Food Preparation Assistants
95 Street and Related Sales and Services Workers
96 Refuse Workers and Other Elementary Workers',
            ),
            69 => 
            array (
                'id' => '91',
                'title' => 'Cleaners and Helpers',
                'description' => 'Cleaners and helpers perform various tasks in private households, hotels, offices, hospitals and other establishments, as well as in aircraft, trains, coaches, trams and similar vehicles, in order to keep the interiors and fixtures clean, and launder and press garments and textiles by hand. Most occupations in this sub-major group require skills at the first ISCO skill level.
Tasks performed by workers in this sub-major group usually include: sweeping or vacuum cleaning; washing and polishing floors, furniture and other objects; taking care of linen and bedmaking; helping with preparation of meals and cleaning in kitchens;  washing and cleaning cars and windows;  pressing or laundering garments and textiles by hand.
Occupations in this sub-major group are classified into the following minor groups:
911 Domestic, Hotel and Office Cleaners and Helpers
912 Vehicle, Window, Laundry and Other Hand Cleaning Workers',
            ),
            70 => 
            array (
                'id' => '911',
                'title' => 'Domestic, Hotel and Office Cleaners and Helpers',
                'description' => 'Domestic, hotel and office cleaners and helpers sweep, vacuum clean, wash, polish, take care of household linen and purchase household supplies; perform various tasks in order to keep clean and tidy the interiors and fixtures of hotels, offices and other establishments, as well as of aircraft, trains, buses and similar vehicles.
Tasks performed usually include:  sweeping or vacuum cleaning; washing and polishing floors, furniture and other objects in hotels, offices and other establishments;  making beds, supplying towels, soap and related items;  helping with preparation of meals and washing dishes;  cleaning, disinfecting and deodorizing kitchens, bathrooms and toilets.
Occupations in this minor group are classified into the following unit groups:
9111 Domestic Cleaners and Helpers
9112 Cleaners and Helpers in Offices, Hotels and Other Establishments',
            ),
            71 => 
            array (
                'id' => '9111',
                'title' => 'Domestic Cleaners and Helpers',
                'description' => 'Domestic cleaners and helpers sweep, vacuum clean, wash and polish, take care of household linen, purchase household supplies, prepare food, serve meals and perform various other domestic duties.
Tasks include –
(a) sweeping, vacuum cleaning, polishing and washing floors and furniture, or washing windows and other fixtures;
(b) washing, ironing and mending linen and other textiles;
(c) washing dishes;
(d) helping with preparation, cooking and serving of meals and refreshments;
(e) purchasing food and various other household supplies;
(f) cleaning, disinfecting and deodorizing kitchens, bathrooms and toilets;
(g) cleaning windows and other glass surfaces.
Examples of the occupations classified here:
▪ Charworker (domestic)
▪ Domestic cleaner
▪ Domestic helper
Some related occupations classified elsewhere:
▪ Domestic housekeeper – 5152
▪ Hotel cleaner – 9112
▪ Hand launderer – 9121
▪ Street sweeper – 9613',
            ),
            72 => 
            array (
                'id' => '9112',
                'title' => 'Cleaners and Helpers in Offices, Hotels and Other Establishments',
                'description' => 'Cleaners and helpers in offices, hotels and other establishments perform various cleaning tasks in order to keep clean and tidy the interiors and fixtures of hotels, offices and other establishments, as well as of aircraft, trains, buses and similar vehicles.
Tasks include –
(a) sweeping or vacuum cleaning, washing and polishing floors, furniture and other fixtures in buildings, coaches, buses, trams, trains and aircraft;
(b) making beds, cleaning bathrooms, supplying towels, soap and related items;
(c) cleaning kitchens and generally helping with kitchen work, including dishwashing;
(d) picking up rubbish, emptying garbage containers and taking contents to waste areas to removal.
Examples of the occupations classified here:
▪ Aircraft cleaner
▪ Hotel cleaner
▪ Lavatory attendant
▪ Office cleaner
Some related occupations classified elsewhere:
▪ Domestic housekeeper – 5152
▪ Building caretaker – 5153
▪ Domestic cleaner – 9111
▪ Dishwasher – 9412
▪ Kitchen helper – 9412
▪ Street sweeper – 9613
Note
Workers who perform cleaning and helping tasks only in kitchens and other food preparation areas are classified in Unit Group 9412:  Kitchen Helpers.',
            ),
            73 => 
            array (
                'id' => '912',
                'title' => 'Vehicle, Window, Laundry and Other Hand Cleaning Workers',
                'description' => 'Vehicle, window, laundry and other hand cleaning workers clean windows, showcases or other surfaces of buildings or vehicles; and press, launder or dry-clean linen and other textiles by hand.
Tasks performed usually include: cleaning, washing and polishing cars; washing windows or other glass surfaces with water or various solutions, and drying and polishing them; laundering and pressing linen, clothing, fabrics and similar articles by hand in a laundry or in other establishments; cleaning by hand and with chemical solutions clothing, fabrics, leather goods and similar articles in dry-cleaning or other establishments.
Occupations in this minor group are classified into the following unit groups:
9121 Hand Launderers and Pressers
9122 Vehicle Cleaners
9123 Window Cleaners
9129 Other Cleaning Workers',
            ),
            74 => 
            array (
                'id' => '9121',
                'title' => 'Hand Launderers and Pressers',
                'description' => 'Hand launderers and pressers launder, press or dry-clean garments, linen and other textiles by hand.
Tasks include –
(a) laundering and pressing linen, clothing, fabrics and similar articles by hand in a laundry or other establishment;
(b) cleaning, by hand and with chemical solutions, clothing, fabrics, leather goods and similar articles, in a dry-cleaning or other establishment;
(c) replacing buttons and making minor repairs;
(d) placing articles on shelves and hanging articles for delivery and collection.
Examples of the occupations classified here:
▪ Dry-cleaner (hand)
▪ Hand launderer
▪ Hand presser
▪ Ironer
Some related occupations classified elsewhere:
▪ Dry-cleaning machine operator – 8157
▪ Laundry machine operator – 8157
▪ Pressing machine operator (laundry) – 8157',
            ),
            75 => 
            array (
                'id' => '9122',
                'title' => 'Vehicle Cleaners',
                'description' => 'Vehicle cleaners wash, clean and polish the exterior and interior of vehicles.
Tasks include –
(a) cleaning, washing and polishing cars and other vehicles, by hand or using hand-held power tools;
(b) vacuuming vehicle interiors and dry-cleaning carpets and upholstery;
(c) applying cleaning agents to remove stains from vehicle exteriors and interiors;
(d) washing tyres and wheel arches and blackening tyres;
(e) washing and polishing vehicle windows;
(f) emptying and cleaning compartments in vehicles.
Examples of the occupations classified here:
▪ Car detailer
▪ Vehicle washer (hand)',
            ),
            76 => 
            array (
                'id' => '9123',
                'title' => 'Window Cleaners',
                'description' => 'Window cleaners wash and polish windows and other glass fittings.
Tasks include –
(a) washing windows or other glass surfaces  with  water or various solutions, and drying and polishing them;
(b) using ladders, swinging scaffolds, bosun\'s chairs, hydraulic bucket trucks and other equipment to reach and clean windows in multistorey buildings;
(c) selecting appropriate cleaning or polishing implements.
Examples of the occupations classified here:
▪ Window cleaner',
            ),
            77 => 
            array (
                'id' => '9129',
                'title' => 'Other Cleaning Workers',
                'description' => 'This unit group includes cleaning workers not classified elsewhere. The group includes, for instance, those who clean surfaces, materials and objects such as carpets, walls, swimming pools and cooling towers, using specialized cleaning equipment and chemicals.
In such instances tasks would include –
(a) cleaning carpets and upholstered furniture using cleaning machines and their attachments;
(b) selecting and applying cleaning agents to remove stains from carpets;
(c) treating carpets with soil-repellent chemicals and deodorants, and treating for pests;
(d) cleaning stone walls, metal surfaces and fascias using high-pressure water cleaners and solvents;
(e) applying chemicals and high-pressure cleaning methods to remove micro-organisms from water and filtration systems;
(f) using wet vacuums and other suction equipment to remove scale, accumulated dirt and other deposits from swimming pools, cooling tower components and drains.
Examples of the occupations classified here:
▪ Carpet cleaner
▪ Cooling tower cleaner
▪ Graffiti cleaner
▪ Swimming pool cleaner
▪ Water blaster',
            ),
            78 => 
            array (
                'id' => '92',
                'title' => 'Agricultural, Forestry and Fishery Labourers',
                'description' => 'Agricultural, forestry and fishery labourers perform simple and routine tasks in the production of crops and livestock, cultivation and maintenance of gardens and parks, exploitation and conservation of forests, and conduct of aquaculture and fisheries operations. Most occupations in this sub-major group require skills at the first ISCO skill level.
Tasks performed by workers in this sub-major group usually include: digging, raking and shovelling using hand tools;  loading, unloading and stacking supplies, produce and other materials; watering, thinning, weeding and tending crops by hand or using hand tools; planting, harvesting, picking and collecting produce by hand; feeding, watering and cleaning animals and keeping their quarters clean; monitoring livestock and reporting on their condition; preparing and operating nets, lines and other fishing tackle and deck equipment; grading, sorting, bunching and packing produce into containers; performing minor repairs on fixtures, buildings, equipment, vessels and fences.
Occupations in this sub-major group are classified into the following minor group:
921 Agricultural, Forestry and Fishery Labourers',
            ),
            79 => 
            array (
                'id' => '921',
                'title' => 'Agricultural, Forestry and Fishery Labourers',
                'description' => 'Agricultural, forestry and fishery labourers perform simple and routine tasks in the production of crops and livestock, cultivation and maintenance of gardens and parks, exploitation and conservation of forests, and conduct of aquaculture and fisheries operations.
Tasks performed usually include: digging, raking and shovelling, using hand tools;  loading unloading and stacking supplies, produce and other materials; watering, thinning, weeding and tending crops by hand or using hand tools; planting, harvesting, picking and collecting produce by hand; feeding, watering and cleaning animals and keeping their quarters clean; monitoring livestock, reporting on their condition; preparing and operating nets, lines and other fishing tackle and deck equipment; grading, sorting, bunching and packing produce into containers; performing minor repairs on fixtures, buildings, equipment, vessels and fences.
Occupations in this minor group are classified into the following unit groups:
9211 Crop Farm Labourers
9212 Livestock Farm Labourers
9213 Mixed Crop and Livestock Farm Labourers
9214 Garden and Horticultural Labourers
9215 Forestry Labourers
9216 Fishery and Aquaculture Labourers
Notes
Workers in subsistence agriculture who perform a limited range of simple and routine tasks, usually under the direction of others, are classified in the relevant unit group in Minor Group 921: Agricultural, Forestry and Fishery Labourers. Workers in an agricultural setting whose main tasks are fetching water and gathering  firewood are classified in Unit Group 9624: Water and Firewood Collectors.',
            ),
            80 => 
            array (
                'id' => '9211',
                'title' => 'Crop Farm Labourers',
                'description' => 'Crop farm labourers perform simple and routine tasks on farms in the production of crops such as fruit, nuts, grains and vegetables.
Tasks include –
(a) digging and shovelling to clear ditches or for other purposes;
(b) loading and unloading supplies, produce and other materials;
(c) raking, pitching and stacking straw, hay and similar materials;
(d) watering, thinning and weeding crops by hand or using hand tools;
(e) picking fruit, nuts, vegetables and other crops;
(f) planting and harvesting field crops such as rice, by hand;
(g) grading, sorting, bunching and packing produce into containers;
(h) performing minor repairs on fixtures, buildings, equipment and fences.
Examples of the occupations classified here:
▪ Cane planter
▪ Fruit picker
▪ Rice farm labourer
▪ Vegetable picker
Some related occupations classified elsewhere:
▪ Skilled farm worker (field crops) – 6111
▪ Construction labourer (building work) – 9313
▪ Firewood collector – 9624
▪ Water collector – 9624',
            ),
            81 => 
            array (
                'id' => '9212',
                'title' => 'Livestock Farm Labourers',
                'description' => 'Livestock farm labourers perform simple and routine tasks in the farm production of animals, including poultry and insects.
Tasks include –
(a) digging and shovelling to clear ditches or for other purposes;
(b) loading and unloading supplies, produce and other materials;
(c) feeding, watering and cleaning animals and keeping their quarters clean;
(d) monitoring livestock and reporting on their condition;
(e) assisting with maintaining the health and welfare of livestock;
(f) assisting with herding, droving and separating livestock for milking, shearing, transportation or slaughter, and between pastures;
(g) collecting eggs and placing in incubators;
(h) raking, pitching, stacking and storing hay, straw and other types of animal feed and bedding;
(i) grading, sorting and packing produce into containers;
(j) performing minor repairs on fixtures, buildings, equipment and fences.
Examples of the occupations classified here:
▪ Livestock farm labourer
Some related occupations classified elsewhere:
▪ Drover – 6121
▪ Shepherd – 6121
▪ Skilled farm worker (livestock) – 6121
▪ Firewood collector – 9624
▪ Water collector – 9624',
            ),
            82 => 
            array (
                'id' => '9213',
                'title' => 'Mixed Crop and Livestock Farm Labourers',
                'description' => 'Mixed crop and livestock farm labourers perform simple and routine tasks in farm production of both crops and animals.
Tasks include –
(a) digging and shovelling to clear ditches or for other purposes;
(b) loading and unloading supplies, produce and other materials;
(c) raking, pitching and stacking straw, hay and similar materials;
(d) watering, thinning and weeding crops by hand or using hand tools;
(e) picking fruit, nuts, vegetables and other crops and collecting eggs;
(f) planting and harvesting field crops such as rice, by hand;
(g) feeding, watering and cleaning animals and keeping their quarters clean;
(h) monitoring livestock and reporting on their condition;
(i) assisting with herding, droving and separating livestock for milking, shearing, transportation or slaughter, and between pastures;
(j) grading, sorting, bunching and packing produce into containers;
(k) performing minor repairs on fixtures, buildings, equipment and fences.
Examples of the occupations classified here:
▪ Farm labourer
Some related occupations classified elsewhere:
▪ Skilled farm worker (mixed farming) – 6130
▪ Firewood collector – 9624
▪ Water collector – 9624',
            ),
            83 => 
            array (
                'id' => '9214',
                'title' => 'Garden and Horticultural Labourers',
                'description' => 'Garden and horticultural labourers perform simple and routine tasks in operations to cultivate and maintain trees, shrubs, flowers and other plants in parks and private gardens, to produce saplings, bulbs and seeds, or to grow vegetables and flowers by intensive cultivation techniques.
Tasks include –
(a) loading, unloading and moving supplies, produce and equipment;
(b) preparing garden sites and plots using hand tools and simple machines;
(c) assisting with planting and transplanting flowers, shrubs, trees and lawns;
(d) maintaining gardens by watering, weeding and mowing lawns;
(e) cleaning gardens and removing rubbish;
(f) assisting with propagating, planting and potting seeds, bulbs and cuttings;
(g) tending plants by hand watering and weeding;
(h) harvesting and packaging plants for sale and transport;
(i) performing minor repairs on fixtures, buildings, equipment and fences.
Examples of the occupations classified here:
▪ Garden labourer
▪ Horticultural labourer
▪ Lawn mower
▪ Nursery labourer
Some related occupations classified elsewhere:
▪ Horticulturist – 6113
▪ Landscape gardener – 6113
▪ Market gardener – 6113
▪ Crop farm labourer – 9211',
            ),
            84 => 
            array (
                'id' => '9215',
                'title' => 'Forestry Labourers',
                'description' => 'Forestry labourers perform simple and routine tasks to cultivate and maintain natural and plantation forests, and log, fell and saw trees.
Tasks include –
(a) digging holes for tree planting;
(b) stacking and loading logs and timber;
(c) clearing undergrowth in forest stands and thinning young plantations;
(d) maintaining look-out for fires in forests;
(e) removing major branches and tree tops, trimming branches and sawing trunks into logs;
(f) operating and maintaining manual and hand-held machine saws to fell trees and cut felled trees and branches into logs;
(g) collecting seeds and planting seedlings;
(h) performing minor repairs and maintenance of forest roads, buildings, facilities and equipment.
Examples of the occupations classified here:
▪ Axeman/woman
▪ Forestry labourer
▪ Tree planter
Some related occupations classified elsewhere:
▪ Forestry worker (skilled) – 6210',
            ),
            85 => 
            array (
                'id' => '9216',
                'title' => 'Fishery and Aquaculture Labourers',
                'description' => 'Fishery and aquaculture labourers perform simple and routine tasks to cultivate, catch and harvest fish and seafood in aquaculture and in inland, coastal and deep sea fishing operations.
Tasks include –
(a) cleaning the sea-bed and feeding fish and molluscs that are being cultivated;
(b) gathering seaweed, sea mosses, clams and other molluscs;
(c) preparing nets, lines and other fishing tackle and other deck equipment;
(d) operating fishing gear to catch fish and other marine life;
(e) cleaning, sorting and packing fish and seafood in ice and salt, and stowing catch in hold;
(f) cleaning deck surfaces and fish hold;
(g) handling mooring lines during docking.
Examples of the occupations classified here:
▪ Aquaculture labourer
▪ Fishery labourer
Some related occupations classified elsewhere:
▪ Fish farmer – 6221
▪ Coastal fishery skipper – 6222
▪ Fisher (coastal waters) – 6222
▪ Fisher (inland waters) – 6222
▪ Deep sea fisher – 6223',
            ),
            86 => 
            array (
                'id' => '93',
                'title' => 'Labourers in Mining, Construction, Manufacturing and Transport',
                'description' => 'Labourers in mining, construction, manufacturing and transport perform simple and routine manual tasks in mining, quarrying, civil engineering, building, manufacturing, transport and storage operations, and operate human-powered and animal-drawn vehicles and machinery. Most occupations in this sub-major group require skills at the first ISCO skill level.
Task performed by workers in this sub-major group usually include:  digging holes and spreading excavated materials, sand, soil and gravel using hand-held tools; sorting, loading, unloading, moving, stacking and storing materials, equipment, products, supplies, baggage and cargo by hand;  cleaning machinery, equipment, tools and work sites; packing and unpacking material and products and filling containers and shelves with products by hand; operating human-powered and animal-drawn vehicles and machinery.
Occupations in this sub-major group are classified into the following minor groups:
931 Mining and Construction Labourers
932 Manufacturing Labourers
933 Transport and Storage Labourers',
            ),
            87 => 
            array (
                'id' => '931',
                'title' => 'Mining and Construction Labourers',
                'description' => 'Mining and construction labourers perform simple and routine manual tasks in mining, quarrying, civil engineering and building operations.
Tasks performed usually include:  digging and filling holes and trenches using hand-held tools; shovelling and spreading excavated materials, sand, soil and gravel; sorting, loading, unloading, stacking and storing tools, materials and equipment and transporting them around work sites;  cleaning machinery, equipment, tools and work sites and removing obstructions.
Occupations in this minor group are classified into the following unit groups:
9311 Mining and Quarrying Labourers
9312 Civil Engineering Labourers
9313 Building Construction Labourers',
            ),
            88 => 
            array (
                'id' => '9311',
                'title' => 'Mining and Quarrying Labourers',
                'description' => 'Mining and quarrying labourers perform routine tasks in mining and quarrying operations.
Tasks include –
(a) assisting miners and quarriers in maintaining machinery, equipment, and mine and quarry installations;
(b) assembling and dismantling mining equipment;
(c) removing tunnel supports from disused workings in mines and quarries;
(d) removing dangerous projections from mine and quarry workings;
(e) removing waste and serviceable materials and equipment from work areas after extraction activities have been completed, and clearing rock and mineral spills;
(f) cleaning machinery, equipment, tools, roadways and haulage tracks;
(g) sorting, loading, unloading, stacking and storing tools, materials and supplies used by other mine workers.
Examples of the occupations classified here:
▪ Mining labourer
▪ Quarry labourer
Some related occupations classified elsewhere:
▪ Driller (mining) – 8111
▪ Miner – 8111
▪ Mining plant operator – 8111
▪ Quarrier – 8111
▪ Driller (oil or gas well) – 8113
▪ Drilling plant operator – 8113',
            ),
            89 => 
            array (
                'id' => '9312',
                'title' => 'Civil Engineering Labourers',
                'description' => 'Civil engineering labourers perform routine tasks in connection with the building and maintenance of roads, railways, dams and other civil engineering projects.
Tasks include –
(a) digging and filling holes and trenches using hand-held tools;
(b) shovelling and spreading gravel and related materials;
(c) trimming and cutting rocks and concrete and bitumen surfaces using jack-hammers;
(d) loading and unloading construction materials, excavated material and equipment and transporting them around construction sites using wheelbarrows and hand trucks;
(e) cleaning work sites and removing obstructions.
Examples of the occupations classified here:
▪ Construction labourer (civil engineering)
▪ Earthmoving labourer
▪ Maintenance labourer (dams)',
            ),
            90 => 
            array (
                'id' => '9313',
                'title' => 'Building Construction Labourers',
                'description' => 'Building construction labourers perform routine tasks in connection with building construction and demolition work.
Tasks include –
(a) cleaning used building bricks and doing other simple work on demolition sites;
(b) mixing, pouring and spreading materials such as concrete, plaster and mortar;
(c) digging and filling holes and trenches using hand-held tools;
(d) spreading sand, soil, gravel and similar materials;
(e) loading and unloading construction materials, excavated material and equipment and transporting them around construction sites using wheelbarrows, hods and hand trucks;
(f) cleaning work sites and removing obstructions.
Examples of the occupations classified here:
▪ Bricklayer\'s assistant
▪ Construction labourer (building work)
▪ Demolition labourer
▪ Hod carrier
Some related occupations classified elsewhere:
▪ House builder – 7111
▪ Bricklayer – 7112
▪ Building wrecker – 7119',
            ),
            91 => 
            array (
                'id' => '932',
                'title' => 'Manufacturing Labourers',
                'description' => 'Manufacturing labourers perform a variety of simple and routine manual tasks in manufacturing to assist the work of machine operators and assemblers.
Tasks performed usually include: packing materials and various products by hand; filling bottles, boxes, bags and other containers with products by hand; labelling products and containers by hand; loading and unloading vehicles; conveying goods, material and equipment to work areas; cleaning machinery, equipment and tools; sorting products or components by hand.
Occupations in this minor group are classified into the following unit groups:
9321 Hand Packers
9329 Manufacturing Labourers Not Elsewhere Classified',
            ),
            92 => 
            array (
                'id' => '9321',
                'title' => 'Hand Packers',
                'description' => 'Hand packers weigh, pack and label materials and products by hand.
Tasks include –
(a) weighing, wrapping, sealing and packing materials and various products by hand;
(b) filling bottles, cans, boxes, bags and other containers with products by hand;
(c) labelling products, packages and various containers by hand.
Examples of the occupations classified here:
▪ Labeller (hand)
▪ Packer (hand)
▪ Wrapper (hand)
Some related occupations classified elsewhere:
▪ Labelling machine operator – 8183
▪ Packing machine operator – 8183
▪ Wrapping machine operator – 8183',
            ),
            93 => 
            array (
                'id' => '9329',
                'title' => 'Manufacturing Labourers Not Elsewhere Classified',
                'description' => 'Manufacturing labourers not elsewhere classified assist the work of machine operators and assemblers and perform a variety of simple and routine manual tasks in manufacturing, excluding packing and labelling finished products.
Tasks include –
(a) conveying goods, material, equipment and other items to work areas, and removing finished pieces;
(b) loading and unloading vehicles, trucks and trolleys;
(c) clearing machine blockages, and cleaning machinery, equipment and tools;
(d) carrying out manual sorting of products or components.
Examples of the occupations classified here:
▪ Bottle sorter
▪ Factory hand
▪ Material handler
▪ Stacker
Some related occupations classified elsewhere:
▪  Electrical equipment assembler – 8212
▪  Electronic equipment assembler – 8212
▪  Leather products assembler – 8219
▪  Rubber products assembler – 8219
▪  Hand packer – 9321',
            ),
            94 => 
            array (
                'id' => '933',
                'title' => 'Transport and Storage Labourers',
                'description' => 'Transport and storage labourers propel cycles and similar vehicles and drive animal-drawn vehicles to transport passengers or goods, drive animal-drawn machinery, handle freight and baggage, and stock shelves.
Tasks performed usually include:  propelling cycles and similar vehicles to transport passengers or goods, driving animal-drawn vehicles to transport passengers or goods, driving animal-drawn machinery, carrying out freight handling by hand, and stocking shelves and display areas in stores.
Occupations in this minor group are classified into the following unit groups:
9331 Hand and Pedal Vehicle Drivers
9332 Drivers of Animal-drawn Vehicles and Machinery
9333 Freight Handlers
9334 Shelf Fillers',
            ),
            95 => 
            array (
                'id' => '9331',
                'title' => 'Hand and Pedal Vehicle Drivers',
                'description' => 'Hand and pedal vehicle drivers propel cycles, hand carts and similar vehicles to deliver messages and transport passengers or goods.
Tasks include –
(a) loading and unloading goods, or assisting passengers in getting on or off a vehicle;
(b) moving vehicle in the desired direction with due regard to other traffic and traffic regulations;
(c) inspecting vehicle components to identify wear and damage;
(d) maintaining vehicle, making minor repairs and installing replacement parts;
(e) collecting fares or charges.
Examples of the occupations classified here:
▪ Bicycle courier
▪ Cycle rickshaw driver
▪ Pedal vehicle driver
▪ Rickshaw puller
Some related occupations classified elsewhere:
▪ Bicycle racer – 3421
▪ Motorcyclist – 8321',
            ),
            96 => 
            array (
                'id' => '9332',
                'title' => 'Drivers of Animal-drawn Vehicles and Machinery',
                'description' => 'Drivers of animal-drawn vehicles and machinery drive animal-drawn vehicles to transport passengers or goods, as well as animal-drawn machinery usually in connection with farming.
Tasks include –
(a) harnessing animals and hitching them to vehicles or machinery;
(b) loading or unloading goods, or assisting passengers in getting on or off a vehicle;
(c) driving animals in the desired direction with due regard to other traffic and traffic regulations;
(d) collecting fares or charges;
(e) driving animals to haul wagons in mines or quarries;
(f) driving animals hitched to farm or other machinery;
(g) driving working elephants;
(h) maintaining vehicle or machinery, making minor repairs and installing replacement parts;
(i) grooming and feeding animals.
Examples of the occupations classified here:
▪ Animal-drawn vehicle driver
▪ Animal train driver
▪ Mahout
Some related occupations classified elsewhere:
▪ Jockey – 3421',
            ),
            97 => 
            array (
                'id' => '9333',
                'title' => 'Freight Handlers',
                'description' => 'Freight handlers carry out tasks such as packing, carrying, loading and unloading furniture and other household items, or loading and unloading ship and aircraft cargo and other freight, or carrying and stacking goods in various warehouses.
Tasks include –
(a) packing office or household furniture, machines, appliances and related goods to be transported from one place to another;
(b) carrying goods to be loaded on or unloaded from vans, trucks, wagons, ships or aircraft;
(c) loading and unloading grain, coal, sand, baggage and other items by placing them on conveyor belts, pipes and other conveyances;
(d) connecting hoses between mainshore installation pipes and tanks of barges, tankers and other ships to load and unload petroleum, liquefied gases and other liquids;
(e) carrying and stacking goods in warehouses and similar establishments;
(f) sorting cargo prior to loading and unloading.
Examples of the occupations classified here:
▪ Baggage handler
▪ Freight handler
▪ Warehouse porter
Some related occupations classified elsewhere:
▪ Crane operator – 8343
▪ Forklift operator – 8344
▪ Hotel porter – 9621
▪ Luggage porter – 9621',
            ),
            98 => 
            array (
                'id' => '9334',
                'title' => 'Shelf Fillers',
                'description' => 'Shelf fillers stock shelves and display areas and keep stock clean and in order in supermarkets and other retail and wholesale shops.
Tasks include –
(a) placing goods neatly in bins and on racks, and stacking bulky goods on floors;
(b) filling shelves with goods and ensuring that goods with the earliest use-by dates are at the front of shelves;
(c) removing goods with past due use-by dates;
(d) maintaining shelf order by removing stock belonging in a different location;
(e) noting what has been sold and collecting goods needed from the stockroom;
(f) obtaining articles for customers from shelf or stockroom;
(g) directing customers to location of articles sought;
(h) receiving, opening, unpacking and inspecting for damage merchandise from manufacturer or distributor.
Examples of the occupations classified here:
▪ Night filler
▪ Stock filler
▪ Stock handler',
            ),
            99 => 
            array (
                'id' => '94',
                'title' => 'Food Preparation Assistants',
                'description' => 'Food preparation assistants prepare and cook to order a small variety of pre-cooked food or beverages, clear tables, clean kitchen areas and wash dishes. Most occupations in this sub-major group require skills at the first ISCO skill level.
Tasks performed by workers in this sub-major group usually include: preparing simple or pre-prepared foods and beverages such as sandwiches, pizzas, fish and chips, salads and coffee; washing, cutting, measuring and mixing foods for cooking; operating cooking equipment such as grills, microwaves and deep-fat fryers; cleaning kitchens, food preparation areas and service areas; cleaning cooking and general utensils used in kitchens and restaurants.
Occupations in this sub-major group are classified into the following minor group:
941 Food Preparation Assistants',
            ),
            100 => 
            array (
                'id' => '941',
                'title' => 'Food Preparation Assistants',
                'description' => 'Food preparation assistants prepare and cook to order a small variety of pre-cooked food or beverages, clear tables, clean kitchen areas and wash dishes.
Tasks performed usually include: preparing simple or pre-prepared foods and beverages such as sandwiches, pizzas, fish and chips, salads and coffee; washing, cutting, measuring and mixing foods for cooking; operating cooking equipment such as grills, microwaves and deep-fat fryers; cleaning kitchens, food preparation areas and service areas; cleaning cooking and general utensils used in kitchens and restaurants.
Occupations in this minor group are classified into the following unit groups:
9411 Fast Food Preparers
9412 Kitchen Helpers',
            ),
            101 => 
            array (
                'id' => '9411',
                'title' => 'Fast Food Preparers',
                'description' => 'Fast food preparers prepare and cook to order a limited range of foods or beverages that involve simple preparation processes and a small number of ingredients. They may take orders from customers and serve at counters or tables.
Tasks include –
(a) preparing simple or pre-prepared foods and beverages such as sandwiches, hamburgers, pizzas, fish and chips, salads and coffee;
(b) washing, cutting, measuring and mixing foods for cooking;
(c) operating large-volume single-process cooking equipment such as grills, deep-fat fryers or griddles;
(d) re-heating pre-prepared food;
(e) cleaning food preparation areas, cooking surfaces and utensils;
(f) taking and serving food and beverage orders in eating places that specialize in fast service and carry-out food;
(g) ordering and taking delivery of fast food ingredients;
(h) maintaining sanitation, health and safety standards in work areas;
(i) verifying that prepared food meets requirements for quality and quantity.
Examples of the occupations classified here:
▪ Fast food cook
▪ Hamburger maker
▪ Pizza maker
▪ Short order cook
Some related occupations classified elsewhere:
▪ Chef – 3434
▪ Cook – 5120
▪ Food service counter attendant – 5246
Note
Jobs that combine preparation of simple food items with taking orders,  serving clients and calculating or receiving payment should be classified in Unit Group 5246: Food Service Counter Attendants, unless client service is an incidental component of the work.',
            ),
            102 => 
            array (
                'id' => '9412',
                'title' => 'Kitchen Helpers',
                'description' => 'Kitchen helpers clear tables, clean kitchen areas, wash dishes, prepare ingredients and perform other duties to assist workers who prepare or serve food and beverages.
Tasks include –
(a) cleaning kitchens, food preparation areas and service areas;
(b) assisting cooks and chefs in preparation of food by washing, peeling, chopping, cutting, measuring and mixing ingredients;
(c) assembling dishes for service;
(d) unpacking checking, transferring, weighing and storing supplies in refrigerators, cupboards and other storage areas;
(e) washing dishes and cooking utensils and putting them away;
(f) preparing, cooking, toasting and heating simple food items.
Examples of the occupations classified here:
▪ Hand dish washer
▪ Kitchen assistant
▪ Kitchen hand
▪ Kitchen porter
▪ Kitchen steward
▪ Pantry attendant
Some related occupations classified elsewhere:
▪ Cook – 5120
▪ Fast food preparer – 9411',
            ),
            103 => 
            array (
                'id' => '95',
                'title' => 'Street and Related Sales and Services Workers',
            'description' => 'Street and related sales and services workers sell goods (excluding food) for immediate consumption, and provide a variety of services on streets and in other public places such as stations. Most occupations in this sub-major group require skills at the first ISCO skill level.
Tasks performed by workers in this sub-major group usually include: buying or making various items for sale; loading and unloading items for sale and transporting them; obtaining the materials necessary to perform services; approaching people on the street to offer goods or services; cleaning and polishing shoes; cleaning and polishing car windows; running errands; assisting car drivers to find a parking place and ensuring that the car is not damaged during the driver\'s absence; handing out leaflets and free newspapers; receiving immediate payment.
Occupations in this sub-major group are classified into the following minor groups:
951 Street and Related Services Workers
952 Street Vendors (excluding Food)',
            ),
            104 => 
            array (
                'id' => '951',
                'title' => 'Street and Related Services Workers',
                'description' => 'Street and related services workers provide a variety of services on streets and in other public places, including cleaning shoes, washing car windows, running errands, looking after property, and providing other on-the-spot street services.
Tasks performed usually include: obtaining the materials necessary to perform services; approaching people on the street to offer services; cleaning and polishing shoes; cleaning and polishing car windows; running errands; assisting drivers to find a parking place and ensuring car is not damaged during driver\'s absence; handing out leaflets and free newspapers; receiving immediate payment.
Occupations in this minor group are classified into the following unit group:
9510 Street and Related Services Workers',
            ),
            105 => 
            array (
                'id' => '9510',
                'title' => 'Street and Related Services Workers',
                'description' => 'Street and related services workers provide a variety of services on streets and in other public places, including cleaning shoes, washing car windows, running errands, handing out leaflets, looking after property, and providing other on-the-spot street services.
Tasks include –
(a) obtaining the materials necessary to perform services;
(b) approaching people on the street to offer services;
(c) cleaning and polishing shoes;
(d) cleaning and polishing car windows;
(e) running errands;
(f) assisting car drivers to find a parking place and ensuring that the car is not damaged during the driver\'s absence;
(g) handing out leaflets and free newspapers;
(h) receiving immediate payment.
Examples of the occupations classified here:
▪ Car window washer
▪ Car guard
▪ Errand boy
▪ Free newspaper distributor
▪ Leaflet distributor
▪ Shoe-polisher
Some related occupations classified elsewhere:
▪ Service station attendant – 5245
▪ Leaflet and newspaper deliverer – 9621',
            ),
            106 => 
            array (
                'id' => '952',
            'title' => 'Street Vendors (excluding food)',
            'description' => 'Street vendors (excluding food) sell a usually limited range of goods (excluding food for immediate consumption) in streets and public places such as stations, cinemas or theatres.
Tasks performed usually include: buying or receiving items for sale, or making simple items; loading and unloading baskets, trays, suitcases, pushcarts, bicycles, hand-trucks or other vehicles, to transport goods to the streets or public places such as stations or cinemas; displaying goods or calling out to attract customers\' attention; approaching potential customers on streets, or by going from house to house, to offer goods for sale; receiving immediate payment.
Occupations in this minor group are classified into the following unit group:
9520 Street Vendors (excluding Food)',
            ),
            107 => 
            array (
                'id' => '9520',
            'title' => 'Street Vendors (excluding Food)',
            'description' => 'Street vendors (excluding food) sell a usually limited range of goods (excluding food for immediate consumption) in streets and public places such as stations, cinemas or theatres.
Tasks include –
(a) buying or receiving items for sale, or making simple items;
(b) loading and unloading baskets, trays, pushcarts, bicycles, hand-trucks or other vehicles, to transport goods to the streets or public places such as stations or cinemas;
(c) displaying goods or calling out to attract customers\' attention;
(d) approaching potential customers on streets, or by going from house to house, to offer goods for sale;
(e) receiving immediate payment.
Examples of the occupations classified here:
▪ Hawker
▪ Newspaper vendor
▪ Pedlar
Some related occupations classified elsewhere:
▪ Market salesperson – 5211
▪ Street stall salesperson – 5211
▪ Street food vendor – 5212
▪ Door-to-door sales representative – 5243
▪ Free newspaper distributor – 9510
Notes
Vendors from street and market stalls of fresh food products not intended for immediate consumption (such as fruit, vegetables, meat and dairy products) are classified in Unit Group 5211: Stall and Market Salespersons. Vendors from street and market stalls of a variety of prepared meals and food items for immediate consumption are classified in Unit Group 5246: Food Service Counter Attendants. Vendors in streets and public places of food and beverages for immediate consumption from pushcarts, trucks, trays or baskets are classified in Unit Group 5212: Street Food Salespersons. Vendors in streets and public places of non-food items (or of pre-packaged non-perishable food items such as confectionery) from pushcarts, trucks, trays or baskets are classified in Unit Group 9520: Street Vendors (excluding food).',
            ),
            108 => 
            array (
                'id' => '96',
                'title' => 'Refuse Workers and Other Elementary Workers',
                'description' => 'Refuse workers and other elementary workers collect, process and recycle garbage from buildings, yards, streets and other public places. They keep streets and other public places clean and tidy, deliver and carry messages and packages and perform odd jobs for private households or establishments. Most occupations in this sub-major group require skills at the first ISCO skill level.
Tasks performed by workers in this sub-major group usually include: collecting, loading and unloading garbage; sweeping streets, parks and other public places; chopping firewood; collecting and carrying firewood, water, packages, luggage and messages;  beating dust out of carpets and performing other odd-job tasks.
Occupations in this sub-major group are classified into the following minor groups:
961 Refuse Workers
962 Other Elementary Workers',
            ),
            109 => 
            array (
                'id' => '961',
                'title' => 'Refuse Workers',
                'description' => 'Refuse workers collect, process and recycle garbage from buildings, yards, streets and other public places, or keep streets and other public places clean.
Tasks performed usually include:  collecting, loading and unloading garbage; sweeping streets, parks and other public places; sorting and recycling garbage such as paper, glass, plastic or aluminium.
Occupations in this minor group are classified into the following unit groups:
9611 Garbage and Recycling Collectors
9612 Refuse Sorters
9613 Sweepers and Related Labourers',
            ),
            110 => 
            array (
                'id' => '9611',
                'title' => 'Garbage and Recycling Collectors',
                'description' => 'Garbage collectors collect and remove rubbish and items for recycling from buildings, yards, streets and other places.
Tasks include –
(a) collecting rubbish and recyclable materials and locating them into bins and garbage and recycling trucks;
(b) riding on or in garbage and recycling trucks;
(c) lifting garbage bins and emptying contents into trucks and larger containers;
(d) unloading garbage and recycling trucks.
Examples of the occupations classified here:
▪ Dustman/woman
▪ Recycling collector
▪ Refuse collector
Some related occupations classified elsewhere:
▪ Garbage truck driver – 8332
▪ Waste picker – 9612',
            ),
            111 => 
            array (
                'id' => '9612',
                'title' => 'Refuse Sorters',
                'description' => 'Refuse sorters identify, collect and sort discarded items suitable for recycling at dump sites and recycling enterprises or in buildings, streets and other public places.
Tasks include –
(a) searching through refuse and collecting items for recycling from dump sites, domestic, commercial and industrial premises or from public places such as streets;
(b) sorting cardboard, paper, glass, plastic, aluminium or other recyclable materials by type;
(c) placing recyclable items and materials in designated compartments and containers for storage or transportation;
(d) identifying and setting aside items of furniture, equipment, machinery, or components that are suitable for repair or re-use;
(e) transporting recyclable items by hand or using non-motorized vehicles;
(f) selling recyclable or reusable materials.
Examples of the occupations classified here:
▪ Recycling worker
▪ Scrap merchant
▪ Waste picker
Some related occupations classified elsewhere:
▪ Refuse collector – 9611
▪ Street sweeper – 9613',
            ),
            112 => 
            array (
                'id' => '9613',
                'title' => 'Sweepers and Related Labourers',
                'description' => 'Sweepers and related labourers sweep and clean streets, parks, airports, stations and other public places.
Tasks include –
(a) sweeping streets, parks, airports, stations and similar public places;
(b) shovelling snow;
(c) beating dust out of carpets by using a carpet-beater;
(d) cleaning rubbish, leaves and snow from driveways and grounds.
Examples of the occupations classified here:
▪ Park sweeper
▪ Street sweeper',
            ),
            113 => 
            array (
                'id' => '962',
                'title' => 'Other Elementary Workers',
                'description' => 'Other elementary workers deliver and carry messages and packages; perform a variety of simple maintenance and repair tasks; collect money and stock vending machines; read meters; collect water and firewood; and collect and issue tickets for parking or events.
Tasks performed usually include: chopping wood, collecting water and firewood; cleaning and maintaining buildings, grounds and facilities; delivering messages, packages and other items within or between establishments, or elsewhere; performing duties as a post-runner; issuing and collecting tickets and passes; calculating parking charges; filling storage areas of vending machines and collecting money from containers; reading electricity, gas or water meters and recording consumption.
Occupations in this minor group are classified into the following unit groups:
9621 Messengers, Package Deliverers and Luggage Porters
9622 Odd-job Persons
9623 Meter Readers and Vending-machine Collectors
9624 Water and Firewood Collectors
9629 Elementary Workers Not Elsewhere Classified',
            ),
            114 => 
            array (
                'id' => '9621',
                'title' => 'Messengers, Package Deliverers and Luggage Porters',
                'description' => 'Messengers, package deliverers and luggage porters carry and deliver messages, packages and other items on foot, within an establishment or between establishments, to households and elsewhere, or carry luggage, especially at hotels, stations and airports.
Tasks include –
(a) delivering messages, packages and other items within an establishment or between establishments or elsewhere;
(b) delivering various goods to and from enterprises, shops, households and other places;
(c) carrying and delivering luggage at hotels, stations, airports, and elsewhere;
(d) receiving and marking baggage by completing and attaching claim checks;
(e) planning and following the most efficient route;
(f) sorting items to be delivered according to the delivery route.
Examples of the occupations classified here:
▪ Hotel porter
▪ Luggage porter
▪ Messenger
▪ Leaflet deliverer
▪ Newspaper deliverer
Some related occupations classified elsewhere:
▪ Mail carrier - 4412
▪ Postman/woman - 4412',
            ),
            115 => 
            array (
                'id' => '9622',
                'title' => 'Odd-job Persons',
                'description' => 'Odd-job persons clean, paint and maintain buildings, grounds and facilities, and undertake simple repairs.
Tasks include –
(a) repairing broken windows, screens, doors, fences, barbecues, picnic tables, shelves, cupboards and other items;
(b) replacing defective items such as light bulbs;
(c) repairing and painting interior and exterior surfaces such as walls, ceilings and fences;
(d) adjusting doors and windows;
(e) replacing tap washers;
(f) putting up handrails and grab rails;
(g) unloading coal or wood and putting it into cellars of private households or establishments.
Examples of the occupations classified here:
▪ Handyperson
▪ Hotel useful
▪ Odd-job person',
            ),
            116 => 
            array (
                'id' => '9623',
                'title' => 'Meter Readers and Vending-machine Collectors',
                'description' => 'Meter readers and vending-machine collectors stock vending machines and collect money from them or from parking meters and other coinboxes, or read electricity, gas or water meters.
Tasks include –
(a) filling storage areas of vending machines and collecting money from their containers;
(b) collecting money from parking meters and similar coinboxes;
(c) reading electricity, gas or water meters and recording consumption;
(d) keeping records of merchandise distributed and money collected;
(e) proceeding along established routes to take readings of meter dials;
(f) verifying readings in cases where consumption appears to be abnormal, and recording possible reasons for fluctuations;
(g) inspecting meters for unauthorized connections, defects and damage such as broken seals.
Examples of the occupations classified here:
▪ Meter reader
▪ Vending-machine collector',
            ),
            117 => 
            array (
                'id' => '9624',
                'title' => 'Water and Firewood Collectors',
                'description' => 'Water and firewood collectors collect water and firewood and transport them on foot or using hand or animal carts.
Tasks include –
(a) cutting and collecting wood from forests for sale in market or as fuel or for own consumption;
(b) visiting forests or fields to pick pieces of dried wood from the ground and arranging them in heaps;
(c) cutting decayed branches and trunks of trees using axes and hand-saws;
(d) tying collected wood into small faggots and carrying them or transporting them on a cart to the market for sale or to villages or households for use;
(e) drawing water from wells, rivers or ponds, etc. for domestic use;
(f) collecting water in leather bags, buckets or other containers from taps, rivers, ponds or wells, and delivering the water to work sites, the houses of clients or to own household for drinking, cleaning of drains or storage in tanks.
Examples of the occupations classified here:
▪ Firewood collector
▪ Water collector',
            ),
            118 => 
            array (
                'id' => '9629',
                'title' => 'Elementary Workers Not Elsewhere Classified',
                'description' => 'This unit group covers elementary workers not classified elsewhere in Major Group 9: Elementary Workers.  For instance, the group includes those who issue and collect parking or admission tickets, provide personal items to patrons or customers in cloakrooms, and assist patrons at entertainment events.
In such cases tasks would include –
(a) selling admission tickets and passes to patrons at entertainment events or collecting tickets, passes and tags from patrons;
(b) examining tickets or passes to verify authenticity, using criteria such as colour and date issued;
(c) guiding patrons to exits or providing other instructions or assistance in case of emergency;
(d) directing patrons to restrooms, concession stands and telephones;
(e) directing vehicle drivers to parking spaces;
(f) patrolling parking areas in order to prevent vehicle damage and vehicle property theft;
(g) calculating parking charges and collecting fees from customers;
(h) assigning dressing room facilities, locker space, or clothing containers to patrons of athletic or bathing establishments.
Examples of the occupations classified here:
▪ Cloakroom attendant
▪ Fairground attendant
▪ Parking attendant
▪ Ticket collector
▪ Usher
Some related occupations classified elsewhere:
▪ Parking valet – 8322',
            ),
        ));
        
        
    }
}
