<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

		DB::table('users')->insert([
		[
			'name' => 'Billy Joel',
			'email' => 'admin1'.'@gmail.com',
			'is_admin' => '1',
			'password' => bcrypt('123456'),
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s'),
		],
		[
			'name' => 'Toto Africa',
			'email' => 'student1'.'@gmail.com',
			'is_admin' => '0',
			'password' => bcrypt('123456'),
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s'),
		]
		]);

		DB::table('students')->insert([
			'usn' => '15001622500',
			'yr_crs' => '3 BSIT',
			'first_name' => 'Walter',
			'middle_name' => 'Scar',
			'last_name' => 'White',
			'nickname' => 'Heisenberg',
			'birthday' => date("M-d-Y", mt_rand(1, time())),
			'gender' => 'Male',
			'civil_status' => 'Single',
			'nationality' => 'Filipino',
			'religion' => 'Roman Catholic',
			'present_address' => '57A Stoltenberg Crossing Apt. 828, Poblacion, Parañaque 2708 Oriental Mindoro',
			'permanent_address' => '57A Stoltenberg Crossing Apt. 828, Poblacion, Parañaque 2708 Oriental Mindoro',
			'living_in' => 'own house',
			'living_with' => 'parents',
			'contact_number' => '09352753971',
			'email_address' => 'student1@gmail.com',
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s'),
			'user_id' => '2', // Toto Africa
			'legal_status' => 'Legitimate',
			'legal_status' => 'Legitimate',
			'languages_spoken' => 'Filipino, English',
			'emergency_contact_person' => 'Leia Organa',
			'emergency_contact_number' => '87000',
		]);

		DB::table('fathers')->insert([
			'father_fname' => 'Luke',
			'father_mname' => 'Death',
			'father_lname' => 'Skywalker',
			'father_suffix' => 'Jr.',
			'father_address' => '57A Stoltenberg Crossing Apt. 828, Poblacion, Parañaque 2708 Oriental Mindoro',
			'father_birthday' => date("M-d-Y", mt_rand(1, time())),
			'father_age' => '57',
			'father_civil_status' => 'Married',
			'father_nationality' => 'Filipino',
			'father_religion' => 'Roman Catholic',
			'father_occupation' => 'Plumber',
			'father_company_contact' => 'N/A',
			'father_working_status' => 'Self-Employed',
			'father_education' => 'College',
			'father_degree' => 'B.S. Mechanical Engineering',
			'father_contact_number' => '09352753971',
			'father_email_address' => 'nanaymo@gmail.com',
			'user_id' => '2',
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('mothers')->insert([
			'Mother_fname' => 'Luke',
			'Mother_mname' => 'Death',
			'Mother_lname' => 'Skywalker',
			'Mother_suffix' => 'Jr.',
			'Mother_address' => '57A Stoltenberg Crossing Apt. 828, Poblacion, Parañaque 2708 Oriental Mindoro',
			'Mother_birthday' => date("M-d-Y", mt_rand(1, time())),
			'Mother_age' => '57',
			'Mother_civil_status' => 'Married',
			'Mother_nationality' => 'Filipino',
			'Mother_religion' => 'Roman Catholic',
			'Mother_occupation' => 'Plumber',
			'Mother_company_contact' => 'N/A',
			'Mother_working_status' => 'Self-Employed',
			'Mother_education' => 'College',
			'Mother_degree' => 'B.S. Mechanical Engineering',
			'Mother_contact_number' => '09352753971',
			'Mother_email_address' => 'nanaymo@gmail.com',
			'user_id' => '2',
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('guardians')->insert([
			'guardian_fname' => 'Leia',
			'guardian_mname' => 'Force',
			'guardian_lname' => 'Organa',
			'guardian_suffix' => 'Mjr.',
			'guardian_address' => '57A Stoltenberg Crossing Apt. 828, Poblacion, Parañaque 2708 Oriental Mindoro',
			'guardian_birthday' => date("M-d-Y", mt_rand(1, time())),
			'guardian_age' => '57',
			'guardian_civil_status' => 'Married',
			'guardian_nationality' => 'Filipino',
			'guardian_religion' => 'Roman Catholic',
			'guardian_occupation' => 'General',
			'guardian_company_contact' => 'N/A',
			'guardian_working_status' => 'Self-Employed',
			'guardian_education' => 'College',
			'guardian_degree' => 'B.S. Mechanical Engineering',
			'guardian_contact_number' => '09352753971',
			'guardian_email_address' => 'tataymo@gmail.com',
			'user_id' => '2',
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('siblings')->insert([
			'name' => 'Harry Potter',
			'school_place_work' => 'Hogwarts School of Witchcraft and Wizardry',
			'birthday' => date("M-d-Y", mt_rand(1, time())),
			'user_id' => '2',
			'user_id' => '2',
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('school_records')->insert([
			'school_elem' => 'Hogwarts School of Witchcraft and Wizardry',
			'school_elem_years' => '2010-2017',
			'school_junior' => 'Hogwarts School of Witchcraft and Wizardry',
			'school_junior_years' => '2010-2017',
			'school_senior' => 'Hogwarts School of Witchcraft and Wizardry',
			'school_senior_years' => '2010-2017',
			'school_college' => 'Hogwarts School of Witchcraft and Wizardry',
			'school_college_years' => 'Hogwarts School of Witchcraft and Wizardry',
			'school_college_course' => 'B.M. in Potion Engineering',
			'easy_subjects' => 'Dark arts, Potions, and Charms',
			'difficult_subjects' => 'Flying, and Herbology',
			'user_id' => '2',
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('orgs')->insert([
			'org_name' => "Dumbledore's Army",
			'org_years' => "1017-2015",
			'org_based' => "Community-Based",
			'org_position' => "Leader",
			'user_id' => "2",
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('abouts')->insert([
			'interest_hobbies' => "Sneaking",
			'skills_talents' => "Quidditch",
			'attributes_attitudes' => "Good at Quidditch",
			'goals_ambitions' => "Quidditch Champion",
			'assets_strengths' => "Courage",
			'liabilities_weaknesses' => "Stupid",
			'present_concerns' => "Nothing",
			'user_id' => "2",
			'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table('violations')->insert([
			[
				'user_name' => "15001622500",
				'grade_section' => "3 BSIT",
				'nature_offense' => "3",
				'freq_offense' => "1",
				'sanction_given' => "Suspended for 5 days",
				'user_id' => "2",
				'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
		    ],
		    [
				'user_name' => "15001622500",
				'grade_section' => "3 BSIT",
				'nature_offense' => "3",
				'freq_offense' => "2",
				'sanction_given' => "Subject failed",
				'user_id' => "2",
				'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
		    ]
		]);
		DB::table('appointments')->insert([
			[
				'agenda' => "Career Consultation",
				'date' => date('Y-m-d'),
				'time' => "12:00",
				'status' => "Pending",
				'user_id' => "2",
				'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
		    ],
		    [
				'agenda' => "Career Consultation",
				'date' => date('Y-m-d'),
				'time' => "12:00",
				'status' => "Accepted",
				'user_id' => "2",
				'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
		    ],
		    [
				'agenda' => "Career Consultation",
				'date' => date('Y-m-d'),
				'time' => "12:00",
				'status' => "Rescheduled",
				'user_id' => "2",
				'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
		    ],
		]);

    }
}
