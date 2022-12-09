<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $religions = [
            ["id" => Str::uuid()->toString(), "name" => "Islam"],
            ["id" => Str::uuid()->toString(), "name" => "Protestan"],
            ["id" => Str::uuid()->toString(), "name" => "Katolik"],
            ["id" => Str::uuid()->toString(), "name" => "Hindu"],
            ["id" => Str::uuid()->toString(), "name" => "Buddha"],
            ["id" => Str::uuid()->toString(), "name" => "Khonghucu"],
        ];
        DB::table('religions')->insert($religions);

        $banks = [
            ["id" => Str::uuid()->toString(), "name" => "Bank Mandiri"],
            ["id" => Str::uuid()->toString(), "name" => "BRI"],
            ["id" => Str::uuid()->toString(), "name" => "BNI"],
            ["id" => Str::uuid()->toString(), "name" => "Panin Bank"],
            ["id" => Str::uuid()->toString(), "name" => "BCA"],
            ["id" => Str::uuid()->toString(), "name" => "CIMB Niaga"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Permata"],
            ["id" => Str::uuid()->toString(), "name" => "OCBC NISP"],
            ["id" => Str::uuid()->toString(), "name" => "BTPN"],
            ["id" => Str::uuid()->toString(), "name" => "DBS"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Ganesha"],
            ["id" => Str::uuid()->toString(), "name" => "Bank NOBU"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Victoria"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Sampoerna"],
            ["id" => Str::uuid()->toString(), "name" => "IBK Bank"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Capital"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Bukopin"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mega"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mayora"],
            ["id" => Str::uuid()->toString(), "name" => "Bank UOB"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Fama"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mayapada International"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mandiri Taspen"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Resona Perdania"],
            ["id" => Str::uuid()->toString(), "name" => "Bank BKE"],
            ["id" => Str::uuid()->toString(), "name" => "BRI Agro"],
            ["id" => Str::uuid()->toString(), "name" => "Bank SBI Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Artha Graha"],
            ["id" => Str::uuid()->toString(), "name" => "Commonwealth Bank"],
            ["id" => Str::uuid()->toString(), "name" => "HSBC Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "ICBC Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "JP Morgan Chase"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Oke Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "MNC Bank"],
            ["id" => Str::uuid()->toString(), "name" => "KEB Hana Bank"],
            ["id" => Str::uuid()->toString(), "name" => "Shinhan Bank"],
            ["id" => Str::uuid()->toString(), "name" => "Standard Chartered Bank Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank of China"],
            ["id" => Str::uuid()->toString(), "name" => "BNPParibas"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Jasa Jakarta"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Index"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Artos"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Ina"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mestika"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mas"],
            ["id" => Str::uuid()->toString(), "name" => "CTBC Bank"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Sinarmas"],
            ["id" => Str::uuid()->toString(), "name" => "Maybank Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank of India Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank QNB Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank JTrust Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Woori Saudara"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Amar Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Prima Master Bank"],
            ["id" => Str::uuid()->toString(), "name" => "Citibank Indonesia"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Syariah Mandiri"],
            ["id" => Str::uuid()->toString(), "name" => "Bank BNI syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Bukopin Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Bank NTB Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Permata Bank Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Muamalat"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Mega Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Bank BJB Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "BRI Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "BTPN Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Bank Net Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "BCA Syariah"],
            ["id" => Str::uuid()->toString(), "name" => "Panin Dubai Syariah Bank"],
        ];
        DB::table('banks')->insert($banks);



        $orgid = Str::uuid()->toString();
        $orgs = [
            [
                "id" => $orgid,
                'name' => 'PT Perintis Semesta Digital',
                'description' => '',
                'url' => 'https://startapp.id',
                'industry_id' => $indITid,
                'organization_size' => '0-1',
                'organization_type' => 'Self Owned',
                'year_founded' => '2015',
            ]
        ];
        DB::table('organizations')->insert($orgs);

        $bodid = Str::uuid()->toString();
        $structures = [
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Owner"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Commissioner"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Director"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Manager"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Supervisor"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Specialist"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Consultant"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Lead"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Staff"
            ],

            // DEPARTMENTS
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Board of Commissioners"
            ],
            [
                "id" => $bodid,
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Board of Directors"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Human Resource"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Marketing"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Customer Service Support"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Sales"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Accounting and Finance"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Research and Development"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "IT Digital"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Production"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Operation"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "IT Support"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Purchasing"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Legal"
            ],

            // DIVISIONS
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "CEO (Chief Executive Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "COO (Chief Operation Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "CFO (Chief Finance Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "CMO (Chief Marketing Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "Human Resource Development"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "Talent Acquisition"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "IT Software Engineer"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "Staff"
            ],
        ];

        DB::table('organization_structures')->insert($structures);
    }
}
