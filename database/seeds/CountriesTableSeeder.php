<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_code' => 'AF',
                'country_name' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'AL',
                'country_name' => 'Albania',
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'DZ',
                'country_name' => 'Algeria',
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'AS',
                'country_name' => 'American Samoa',
            ),
            4 => 
            array (
                'id' => 5,
                'country_code' => 'AD',
                'country_name' => 'Andorra',
            ),
            5 => 
            array (
                'id' => 6,
                'country_code' => 'AO',
                'country_name' => 'Angola',
            ),
            6 => 
            array (
                'id' => 7,
                'country_code' => 'AI',
                'country_name' => 'Anguilla',
            ),
            7 => 
            array (
                'id' => 8,
                'country_code' => 'AQ',
                'country_name' => 'Antarctica',
            ),
            8 => 
            array (
                'id' => 9,
                'country_code' => 'AG',
                'country_name' => 'Antigua And Barbuda',
            ),
            9 => 
            array (
                'id' => 10,
                'country_code' => 'AR',
                'country_name' => 'Argentina',
            ),
            10 => 
            array (
                'id' => 11,
                'country_code' => 'AM',
                'country_name' => 'Armenia',
            ),
            11 => 
            array (
                'id' => 12,
                'country_code' => 'AW',
                'country_name' => 'Aruba',
            ),
            12 => 
            array (
                'id' => 13,
                'country_code' => 'AU',
                'country_name' => 'Australia',
            ),
            13 => 
            array (
                'id' => 14,
                'country_code' => 'AT',
                'country_name' => 'Austria',
            ),
            14 => 
            array (
                'id' => 15,
                'country_code' => 'AZ',
                'country_name' => 'Azerbaijan',
            ),
            15 => 
            array (
                'id' => 16,
                'country_code' => 'BS',
                'country_name' => 'Bahamas The',
            ),
            16 => 
            array (
                'id' => 17,
                'country_code' => 'BH',
                'country_name' => 'Bahrain',
            ),
            17 => 
            array (
                'id' => 18,
                'country_code' => 'BD',
                'country_name' => 'Bangladesh',
            ),
            18 => 
            array (
                'id' => 19,
                'country_code' => 'BB',
                'country_name' => 'Barbados',
            ),
            19 => 
            array (
                'id' => 20,
                'country_code' => 'BY',
                'country_name' => 'Belarus',
            ),
            20 => 
            array (
                'id' => 21,
                'country_code' => 'BE',
                'country_name' => 'Belgium',
            ),
            21 => 
            array (
                'id' => 22,
                'country_code' => 'BZ',
                'country_name' => 'Belize',
            ),
            22 => 
            array (
                'id' => 23,
                'country_code' => 'BJ',
                'country_name' => 'Benin',
            ),
            23 => 
            array (
                'id' => 24,
                'country_code' => 'BM',
                'country_name' => 'Bermuda',
            ),
            24 => 
            array (
                'id' => 25,
                'country_code' => 'BT',
                'country_name' => 'Bhutan',
            ),
            25 => 
            array (
                'id' => 26,
                'country_code' => 'BO',
                'country_name' => 'Bolivia',
            ),
            26 => 
            array (
                'id' => 27,
                'country_code' => 'BA',
                'country_name' => 'Bosnia and Herzegovina',
            ),
            27 => 
            array (
                'id' => 28,
                'country_code' => 'BW',
                'country_name' => 'Botswana',
            ),
            28 => 
            array (
                'id' => 29,
                'country_code' => 'BV',
                'country_name' => 'Bouvet Island',
            ),
            29 => 
            array (
                'id' => 30,
                'country_code' => 'BR',
                'country_name' => 'Brazil',
            ),
            30 => 
            array (
                'id' => 31,
                'country_code' => 'IO',
                'country_name' => 'British Indian Ocean Territory',
            ),
            31 => 
            array (
                'id' => 32,
                'country_code' => 'BN',
                'country_name' => 'Brunei',
            ),
            32 => 
            array (
                'id' => 33,
                'country_code' => 'BG',
                'country_name' => 'Bulgaria',
            ),
            33 => 
            array (
                'id' => 34,
                'country_code' => 'BF',
                'country_name' => 'Burkina Faso',
            ),
            34 => 
            array (
                'id' => 35,
                'country_code' => 'BI',
                'country_name' => 'Burundi',
            ),
            35 => 
            array (
                'id' => 36,
                'country_code' => 'KH',
                'country_name' => 'Cambodia',
            ),
            36 => 
            array (
                'id' => 37,
                'country_code' => 'CM',
                'country_name' => 'Cameroon',
            ),
            37 => 
            array (
                'id' => 38,
                'country_code' => 'CA',
                'country_name' => 'Canada',
            ),
            38 => 
            array (
                'id' => 39,
                'country_code' => 'CV',
                'country_name' => 'Cape Verde',
            ),
            39 => 
            array (
                'id' => 40,
                'country_code' => 'KY',
                'country_name' => 'Cayman Islands',
            ),
            40 => 
            array (
                'id' => 41,
                'country_code' => 'CF',
                'country_name' => 'Central African Republic',
            ),
            41 => 
            array (
                'id' => 42,
                'country_code' => 'TD',
                'country_name' => 'Chad',
            ),
            42 => 
            array (
                'id' => 43,
                'country_code' => 'CL',
                'country_name' => 'Chile',
            ),
            43 => 
            array (
                'id' => 44,
                'country_code' => 'CN',
                'country_name' => 'China',
            ),
            44 => 
            array (
                'id' => 45,
                'country_code' => 'CX',
                'country_name' => 'Christmas Island',
            ),
            45 => 
            array (
                'id' => 46,
                'country_code' => 'CC',
            'country_name' => 'Cocos (Keeling) Islands',
            ),
            46 => 
            array (
                'id' => 47,
                'country_code' => 'CO',
                'country_name' => 'Colombia',
            ),
            47 => 
            array (
                'id' => 48,
                'country_code' => 'KM',
                'country_name' => 'Comoros',
            ),
            48 => 
            array (
                'id' => 49,
                'country_code' => 'CG',
                'country_name' => 'Congo',
            ),
            49 => 
            array (
                'id' => 50,
                'country_code' => 'CD',
                'country_name' => 'Congo The Democratic Republic Of The',
            ),
            50 => 
            array (
                'id' => 51,
                'country_code' => 'CK',
                'country_name' => 'Cook Islands',
            ),
            51 => 
            array (
                'id' => 52,
                'country_code' => 'CR',
                'country_name' => 'Costa Rica',
            ),
            52 => 
            array (
                'id' => 53,
                'country_code' => 'CI',
            'country_name' => 'Cote D\'Ivoire (Ivory Coast)',
            ),
            53 => 
            array (
                'id' => 54,
                'country_code' => 'HR',
            'country_name' => 'Croatia (Hrvatska)',
            ),
            54 => 
            array (
                'id' => 55,
                'country_code' => 'CU',
                'country_name' => 'Cuba',
            ),
            55 => 
            array (
                'id' => 56,
                'country_code' => 'CY',
                'country_name' => 'Cyprus',
            ),
            56 => 
            array (
                'id' => 57,
                'country_code' => 'CZ',
                'country_name' => 'Czech Republic',
            ),
            57 => 
            array (
                'id' => 58,
                'country_code' => 'DK',
                'country_name' => 'Denmark',
            ),
            58 => 
            array (
                'id' => 59,
                'country_code' => 'DJ',
                'country_name' => 'Djibouti',
            ),
            59 => 
            array (
                'id' => 60,
                'country_code' => 'DM',
                'country_name' => 'Dominica',
            ),
            60 => 
            array (
                'id' => 61,
                'country_code' => 'DO',
                'country_name' => 'Dominican Republic',
            ),
            61 => 
            array (
                'id' => 62,
                'country_code' => 'TP',
                'country_name' => 'East Timor',
            ),
            62 => 
            array (
                'id' => 63,
                'country_code' => 'EC',
                'country_name' => 'Ecuador',
            ),
            63 => 
            array (
                'id' => 64,
                'country_code' => 'EG',
                'country_name' => 'Egypt',
            ),
            64 => 
            array (
                'id' => 65,
                'country_code' => 'SV',
                'country_name' => 'El Salvador',
            ),
            65 => 
            array (
                'id' => 66,
                'country_code' => 'GQ',
                'country_name' => 'Equatorial Guinea',
            ),
            66 => 
            array (
                'id' => 67,
                'country_code' => 'ER',
                'country_name' => 'Eritrea',
            ),
            67 => 
            array (
                'id' => 68,
                'country_code' => 'EE',
                'country_name' => 'Estonia',
            ),
            68 => 
            array (
                'id' => 69,
                'country_code' => 'ET',
                'country_name' => 'Ethiopia',
            ),
            69 => 
            array (
                'id' => 70,
                'country_code' => 'XA',
                'country_name' => 'External Territories of Australia',
            ),
            70 => 
            array (
                'id' => 71,
                'country_code' => 'FK',
                'country_name' => 'Falkland Islands',
            ),
            71 => 
            array (
                'id' => 72,
                'country_code' => 'FO',
                'country_name' => 'Faroe Islands',
            ),
            72 => 
            array (
                'id' => 73,
                'country_code' => 'FJ',
                'country_name' => 'Fiji Islands',
            ),
            73 => 
            array (
                'id' => 74,
                'country_code' => 'FI',
                'country_name' => 'Finland',
            ),
            74 => 
            array (
                'id' => 75,
                'country_code' => 'FR',
                'country_name' => 'France',
            ),
            75 => 
            array (
                'id' => 76,
                'country_code' => 'GF',
                'country_name' => 'French Guiana',
            ),
            76 => 
            array (
                'id' => 77,
                'country_code' => 'PF',
                'country_name' => 'French Polynesia',
            ),
            77 => 
            array (
                'id' => 78,
                'country_code' => 'TF',
                'country_name' => 'French Southern Territories',
            ),
            78 => 
            array (
                'id' => 79,
                'country_code' => 'GA',
                'country_name' => 'Gabon',
            ),
            79 => 
            array (
                'id' => 80,
                'country_code' => 'GM',
                'country_name' => 'Gambia The',
            ),
            80 => 
            array (
                'id' => 81,
                'country_code' => 'GE',
                'country_name' => 'Georgia',
            ),
            81 => 
            array (
                'id' => 82,
                'country_code' => 'DE',
                'country_name' => 'Germany',
            ),
            82 => 
            array (
                'id' => 83,
                'country_code' => 'GH',
                'country_name' => 'Ghana',
            ),
            83 => 
            array (
                'id' => 84,
                'country_code' => 'GI',
                'country_name' => 'Gibraltar',
            ),
            84 => 
            array (
                'id' => 85,
                'country_code' => 'GR',
                'country_name' => 'Greece',
            ),
            85 => 
            array (
                'id' => 86,
                'country_code' => 'GL',
                'country_name' => 'Greenland',
            ),
            86 => 
            array (
                'id' => 87,
                'country_code' => 'GD',
                'country_name' => 'Grenada',
            ),
            87 => 
            array (
                'id' => 88,
                'country_code' => 'GP',
                'country_name' => 'Guadeloupe',
            ),
            88 => 
            array (
                'id' => 89,
                'country_code' => 'GU',
                'country_name' => 'Guam',
            ),
            89 => 
            array (
                'id' => 90,
                'country_code' => 'GT',
                'country_name' => 'Guatemala',
            ),
            90 => 
            array (
                'id' => 91,
                'country_code' => 'XU',
                'country_name' => 'Guernsey and Alderney',
            ),
            91 => 
            array (
                'id' => 92,
                'country_code' => 'GN',
                'country_name' => 'Guinea',
            ),
            92 => 
            array (
                'id' => 93,
                'country_code' => 'GW',
                'country_name' => 'Guinea-Bissau',
            ),
            93 => 
            array (
                'id' => 94,
                'country_code' => 'GY',
                'country_name' => 'Guyana',
            ),
            94 => 
            array (
                'id' => 95,
                'country_code' => 'HT',
                'country_name' => 'Haiti',
            ),
            95 => 
            array (
                'id' => 96,
                'country_code' => 'HM',
                'country_name' => 'Heard and McDonald Islands',
            ),
            96 => 
            array (
                'id' => 97,
                'country_code' => 'HN',
                'country_name' => 'Honduras',
            ),
            97 => 
            array (
                'id' => 98,
                'country_code' => 'HK',
                'country_name' => 'Hong Kong S.A.R.',
            ),
            98 => 
            array (
                'id' => 99,
                'country_code' => 'HU',
                'country_name' => 'Hungary',
            ),
            99 => 
            array (
                'id' => 100,
                'country_code' => 'IS',
                'country_name' => 'Iceland',
            ),
            100 => 
            array (
                'id' => 101,
                'country_code' => 'IN',
                'country_name' => 'India',
            ),
            101 => 
            array (
                'id' => 102,
                'country_code' => 'ID',
                'country_name' => 'Indonesia',
            ),
            102 => 
            array (
                'id' => 103,
                'country_code' => 'IR',
                'country_name' => 'Iran',
            ),
            103 => 
            array (
                'id' => 104,
                'country_code' => 'IQ',
                'country_name' => 'Iraq',
            ),
            104 => 
            array (
                'id' => 105,
                'country_code' => 'IE',
                'country_name' => 'Ireland',
            ),
            105 => 
            array (
                'id' => 106,
                'country_code' => 'IL',
                'country_name' => 'Israel',
            ),
            106 => 
            array (
                'id' => 107,
                'country_code' => 'IT',
                'country_name' => 'Italy',
            ),
            107 => 
            array (
                'id' => 108,
                'country_code' => 'JM',
                'country_name' => 'Jamaica',
            ),
            108 => 
            array (
                'id' => 109,
                'country_code' => 'JP',
                'country_name' => 'Japan',
            ),
            109 => 
            array (
                'id' => 110,
                'country_code' => 'XJ',
                'country_name' => 'Jersey',
            ),
            110 => 
            array (
                'id' => 111,
                'country_code' => 'JO',
                'country_name' => 'Jordan',
            ),
            111 => 
            array (
                'id' => 112,
                'country_code' => 'KZ',
                'country_name' => 'Kazakhstan',
            ),
            112 => 
            array (
                'id' => 113,
                'country_code' => 'KE',
                'country_name' => 'Kenya',
            ),
            113 => 
            array (
                'id' => 114,
                'country_code' => 'KI',
                'country_name' => 'Kiribati',
            ),
            114 => 
            array (
                'id' => 115,
                'country_code' => 'KP',
                'country_name' => 'Korea North',
            ),
            115 => 
            array (
                'id' => 116,
                'country_code' => 'KR',
                'country_name' => 'Korea South',
            ),
            116 => 
            array (
                'id' => 117,
                'country_code' => 'KW',
                'country_name' => 'Kuwait',
            ),
            117 => 
            array (
                'id' => 118,
                'country_code' => 'KG',
                'country_name' => 'Kyrgyzstan',
            ),
            118 => 
            array (
                'id' => 119,
                'country_code' => 'LA',
                'country_name' => 'Laos',
            ),
            119 => 
            array (
                'id' => 120,
                'country_code' => 'LV',
                'country_name' => 'Latvia',
            ),
            120 => 
            array (
                'id' => 121,
                'country_code' => 'LB',
                'country_name' => 'Lebanon',
            ),
            121 => 
            array (
                'id' => 122,
                'country_code' => 'LS',
                'country_name' => 'Lesotho',
            ),
            122 => 
            array (
                'id' => 123,
                'country_code' => 'LR',
                'country_name' => 'Liberia',
            ),
            123 => 
            array (
                'id' => 124,
                'country_code' => 'LY',
                'country_name' => 'Libya',
            ),
            124 => 
            array (
                'id' => 125,
                'country_code' => 'LI',
                'country_name' => 'Liechtenstein',
            ),
            125 => 
            array (
                'id' => 126,
                'country_code' => 'LT',
                'country_name' => 'Lithuania',
            ),
            126 => 
            array (
                'id' => 127,
                'country_code' => 'LU',
                'country_name' => 'Luxembourg',
            ),
            127 => 
            array (
                'id' => 128,
                'country_code' => 'MO',
                'country_name' => 'Macau S.A.R.',
            ),
            128 => 
            array (
                'id' => 129,
                'country_code' => 'MK',
                'country_name' => 'Macedonia',
            ),
            129 => 
            array (
                'id' => 130,
                'country_code' => 'MG',
                'country_name' => 'Madagascar',
            ),
            130 => 
            array (
                'id' => 131,
                'country_code' => 'MW',
                'country_name' => 'Malawi',
            ),
            131 => 
            array (
                'id' => 132,
                'country_code' => 'MY',
                'country_name' => 'Malaysia',
            ),
            132 => 
            array (
                'id' => 133,
                'country_code' => 'MV',
                'country_name' => 'Maldives',
            ),
            133 => 
            array (
                'id' => 134,
                'country_code' => 'ML',
                'country_name' => 'Mali',
            ),
            134 => 
            array (
                'id' => 135,
                'country_code' => 'MT',
                'country_name' => 'Malta',
            ),
            135 => 
            array (
                'id' => 136,
                'country_code' => 'XM',
            'country_name' => 'Man (Isle of)',
            ),
            136 => 
            array (
                'id' => 137,
                'country_code' => 'MH',
                'country_name' => 'Marshall Islands',
            ),
            137 => 
            array (
                'id' => 138,
                'country_code' => 'MQ',
                'country_name' => 'Martinique',
            ),
            138 => 
            array (
                'id' => 139,
                'country_code' => 'MR',
                'country_name' => 'Mauritania',
            ),
            139 => 
            array (
                'id' => 140,
                'country_code' => 'MU',
                'country_name' => 'Mauritius',
            ),
            140 => 
            array (
                'id' => 141,
                'country_code' => 'YT',
                'country_name' => 'Mayotte',
            ),
            141 => 
            array (
                'id' => 142,
                'country_code' => 'MX',
                'country_name' => 'Mexico',
            ),
            142 => 
            array (
                'id' => 143,
                'country_code' => 'FM',
                'country_name' => 'Micronesia',
            ),
            143 => 
            array (
                'id' => 144,
                'country_code' => 'MD',
                'country_name' => 'Moldova',
            ),
            144 => 
            array (
                'id' => 145,
                'country_code' => 'MC',
                'country_name' => 'Monaco',
            ),
            145 => 
            array (
                'id' => 146,
                'country_code' => 'MN',
                'country_name' => 'Mongolia',
            ),
            146 => 
            array (
                'id' => 147,
                'country_code' => 'MS',
                'country_name' => 'Montserrat',
            ),
            147 => 
            array (
                'id' => 148,
                'country_code' => 'MA',
                'country_name' => 'Morocco',
            ),
            148 => 
            array (
                'id' => 149,
                'country_code' => 'MZ',
                'country_name' => 'Mozambique',
            ),
            149 => 
            array (
                'id' => 150,
                'country_code' => 'MM',
                'country_name' => 'Myanmar',
            ),
            150 => 
            array (
                'id' => 151,
                'country_code' => 'NA',
                'country_name' => 'Namibia',
            ),
            151 => 
            array (
                'id' => 152,
                'country_code' => 'NR',
                'country_name' => 'Nauru',
            ),
            152 => 
            array (
                'id' => 153,
                'country_code' => 'NP',
                'country_name' => 'Nepal',
            ),
            153 => 
            array (
                'id' => 154,
                'country_code' => 'AN',
                'country_name' => 'Netherlands Antilles',
            ),
            154 => 
            array (
                'id' => 155,
                'country_code' => 'NL',
                'country_name' => 'Netherlands The',
            ),
            155 => 
            array (
                'id' => 156,
                'country_code' => 'NC',
                'country_name' => 'New Caledonia',
            ),
            156 => 
            array (
                'id' => 157,
                'country_code' => 'NZ',
                'country_name' => 'New Zealand',
            ),
            157 => 
            array (
                'id' => 158,
                'country_code' => 'NI',
                'country_name' => 'Nicaragua',
            ),
            158 => 
            array (
                'id' => 159,
                'country_code' => 'NE',
                'country_name' => 'Niger',
            ),
            159 => 
            array (
                'id' => 160,
                'country_code' => 'NG',
                'country_name' => 'Nigeria',
            ),
            160 => 
            array (
                'id' => 161,
                'country_code' => 'NU',
                'country_name' => 'Niue',
            ),
            161 => 
            array (
                'id' => 162,
                'country_code' => 'NF',
                'country_name' => 'Norfolk Island',
            ),
            162 => 
            array (
                'id' => 163,
                'country_code' => 'MP',
                'country_name' => 'Northern Mariana Islands',
            ),
            163 => 
            array (
                'id' => 164,
                'country_code' => 'NO',
                'country_name' => 'Norway',
            ),
            164 => 
            array (
                'id' => 165,
                'country_code' => 'OM',
                'country_name' => 'Oman',
            ),
            165 => 
            array (
                'id' => 166,
                'country_code' => 'PK',
                'country_name' => 'Pakistan',
            ),
            166 => 
            array (
                'id' => 167,
                'country_code' => 'PW',
                'country_name' => 'Palau',
            ),
            167 => 
            array (
                'id' => 168,
                'country_code' => 'PS',
                'country_name' => 'Palestinian Territory Occupied',
            ),
            168 => 
            array (
                'id' => 169,
                'country_code' => 'PA',
                'country_name' => 'Panama',
            ),
            169 => 
            array (
                'id' => 170,
                'country_code' => 'PG',
                'country_name' => 'Papua new Guinea',
            ),
            170 => 
            array (
                'id' => 171,
                'country_code' => 'PY',
                'country_name' => 'Paraguay',
            ),
            171 => 
            array (
                'id' => 172,
                'country_code' => 'PE',
                'country_name' => 'Peru',
            ),
            172 => 
            array (
                'id' => 173,
                'country_code' => 'PH',
                'country_name' => 'Philippines',
            ),
            173 => 
            array (
                'id' => 174,
                'country_code' => 'PN',
                'country_name' => 'Pitcairn Island',
            ),
            174 => 
            array (
                'id' => 175,
                'country_code' => 'PL',
                'country_name' => 'Poland',
            ),
            175 => 
            array (
                'id' => 176,
                'country_code' => 'PT',
                'country_name' => 'Portugal',
            ),
            176 => 
            array (
                'id' => 177,
                'country_code' => 'PR',
                'country_name' => 'Puerto Rico',
            ),
            177 => 
            array (
                'id' => 178,
                'country_code' => 'QA',
                'country_name' => 'Qatar',
            ),
            178 => 
            array (
                'id' => 179,
                'country_code' => 'RE',
                'country_name' => 'Reunion',
            ),
            179 => 
            array (
                'id' => 180,
                'country_code' => 'RO',
                'country_name' => 'Romania',
            ),
            180 => 
            array (
                'id' => 181,
                'country_code' => 'RU',
                'country_name' => 'Russia',
            ),
            181 => 
            array (
                'id' => 182,
                'country_code' => 'RW',
                'country_name' => 'Rwanda',
            ),
            182 => 
            array (
                'id' => 183,
                'country_code' => 'SH',
                'country_name' => 'Saint Helena',
            ),
            183 => 
            array (
                'id' => 184,
                'country_code' => 'KN',
                'country_name' => 'Saint Kitts And Nevis',
            ),
            184 => 
            array (
                'id' => 185,
                'country_code' => 'LC',
                'country_name' => 'Saint Lucia',
            ),
            185 => 
            array (
                'id' => 186,
                'country_code' => 'PM',
                'country_name' => 'Saint Pierre and Miquelon',
            ),
            186 => 
            array (
                'id' => 187,
                'country_code' => 'VC',
                'country_name' => 'Saint Vincent And The Grenadines',
            ),
            187 => 
            array (
                'id' => 188,
                'country_code' => 'WS',
                'country_name' => 'Samoa',
            ),
            188 => 
            array (
                'id' => 189,
                'country_code' => 'SM',
                'country_name' => 'San Marino',
            ),
            189 => 
            array (
                'id' => 190,
                'country_code' => 'ST',
                'country_name' => 'Sao Tome and Principe',
            ),
            190 => 
            array (
                'id' => 191,
                'country_code' => 'SA',
                'country_name' => 'Saudi Arabia',
            ),
            191 => 
            array (
                'id' => 192,
                'country_code' => 'SN',
                'country_name' => 'Senegal',
            ),
            192 => 
            array (
                'id' => 193,
                'country_code' => 'RS',
                'country_name' => 'Serbia',
            ),
            193 => 
            array (
                'id' => 194,
                'country_code' => 'SC',
                'country_name' => 'Seychelles',
            ),
            194 => 
            array (
                'id' => 195,
                'country_code' => 'SL',
                'country_name' => 'Sierra Leone',
            ),
            195 => 
            array (
                'id' => 196,
                'country_code' => 'SG',
                'country_name' => 'Singapore',
            ),
            196 => 
            array (
                'id' => 197,
                'country_code' => 'SK',
                'country_name' => 'Slovakia',
            ),
            197 => 
            array (
                'id' => 198,
                'country_code' => 'SI',
                'country_name' => 'Slovenia',
            ),
            198 => 
            array (
                'id' => 199,
                'country_code' => 'XG',
                'country_name' => 'Smaller Territories of the UK',
            ),
            199 => 
            array (
                'id' => 200,
                'country_code' => 'SB',
                'country_name' => 'Solomon Islands',
            ),
            200 => 
            array (
                'id' => 201,
                'country_code' => 'SO',
                'country_name' => 'Somalia',
            ),
            201 => 
            array (
                'id' => 202,
                'country_code' => 'ZA',
                'country_name' => 'South Africa',
            ),
            202 => 
            array (
                'id' => 203,
                'country_code' => 'GS',
                'country_name' => 'South Georgia',
            ),
            203 => 
            array (
                'id' => 204,
                'country_code' => 'SS',
                'country_name' => 'South Sudan',
            ),
            204 => 
            array (
                'id' => 205,
                'country_code' => 'ES',
                'country_name' => 'Spain',
            ),
            205 => 
            array (
                'id' => 206,
                'country_code' => 'LK',
                'country_name' => 'Sri Lanka',
            ),
            206 => 
            array (
                'id' => 207,
                'country_code' => 'SD',
                'country_name' => 'Sudan',
            ),
            207 => 
            array (
                'id' => 208,
                'country_code' => 'SR',
                'country_name' => 'Suriname',
            ),
            208 => 
            array (
                'id' => 209,
                'country_code' => 'SJ',
                'country_name' => 'Svalbard And Jan Mayen Islands',
            ),
            209 => 
            array (
                'id' => 210,
                'country_code' => 'SZ',
                'country_name' => 'Swaziland',
            ),
            210 => 
            array (
                'id' => 211,
                'country_code' => 'SE',
                'country_name' => 'Sweden',
            ),
            211 => 
            array (
                'id' => 212,
                'country_code' => 'CH',
                'country_name' => 'Switzerland',
            ),
            212 => 
            array (
                'id' => 213,
                'country_code' => 'SY',
                'country_name' => 'Syria',
            ),
            213 => 
            array (
                'id' => 214,
                'country_code' => 'TW',
                'country_name' => 'Taiwan',
            ),
            214 => 
            array (
                'id' => 215,
                'country_code' => 'TJ',
                'country_name' => 'Tajikistan',
            ),
            215 => 
            array (
                'id' => 216,
                'country_code' => 'TZ',
                'country_name' => 'Tanzania',
            ),
            216 => 
            array (
                'id' => 217,
                'country_code' => 'TH',
                'country_name' => 'Thailand',
            ),
            217 => 
            array (
                'id' => 218,
                'country_code' => 'TG',
                'country_name' => 'Togo',
            ),
            218 => 
            array (
                'id' => 219,
                'country_code' => 'TK',
                'country_name' => 'Tokelau',
            ),
            219 => 
            array (
                'id' => 220,
                'country_code' => 'TO',
                'country_name' => 'Tonga',
            ),
            220 => 
            array (
                'id' => 221,
                'country_code' => 'TT',
                'country_name' => 'Trinidad And Tobago',
            ),
            221 => 
            array (
                'id' => 222,
                'country_code' => 'TN',
                'country_name' => 'Tunisia',
            ),
            222 => 
            array (
                'id' => 223,
                'country_code' => 'TR',
                'country_name' => 'Turkey',
            ),
            223 => 
            array (
                'id' => 224,
                'country_code' => 'TM',
                'country_name' => 'Turkmenistan',
            ),
            224 => 
            array (
                'id' => 225,
                'country_code' => 'TC',
                'country_name' => 'Turks And Caicos Islands',
            ),
            225 => 
            array (
                'id' => 226,
                'country_code' => 'TV',
                'country_name' => 'Tuvalu',
            ),
            226 => 
            array (
                'id' => 227,
                'country_code' => 'UG',
                'country_name' => 'Uganda',
            ),
            227 => 
            array (
                'id' => 228,
                'country_code' => 'UA',
                'country_name' => 'Ukraine',
            ),
            228 => 
            array (
                'id' => 229,
                'country_code' => 'AE',
                'country_name' => 'United Arab Emirates',
            ),
            229 => 
            array (
                'id' => 230,
                'country_code' => 'GB',
                'country_name' => 'United Kingdom',
            ),
            230 => 
            array (
                'id' => 231,
                'country_code' => 'US',
                'country_name' => 'United States',
            ),
            231 => 
            array (
                'id' => 232,
                'country_code' => 'UM',
                'country_name' => 'United States Minor Outlying Islands',
            ),
            232 => 
            array (
                'id' => 233,
                'country_code' => 'UY',
                'country_name' => 'Uruguay',
            ),
            233 => 
            array (
                'id' => 234,
                'country_code' => 'UZ',
                'country_name' => 'Uzbekistan',
            ),
            234 => 
            array (
                'id' => 235,
                'country_code' => 'VU',
                'country_name' => 'Vanuatu',
            ),
            235 => 
            array (
                'id' => 236,
                'country_code' => 'VA',
            'country_name' => 'Vatican City State (Holy See)',
            ),
            236 => 
            array (
                'id' => 237,
                'country_code' => 'VE',
                'country_name' => 'Venezuela',
            ),
            237 => 
            array (
                'id' => 238,
                'country_code' => 'VN',
                'country_name' => 'Vietnam',
            ),
            238 => 
            array (
                'id' => 239,
                'country_code' => 'VG',
            'country_name' => 'Virgin Islands (British)',
            ),
            239 => 
            array (
                'id' => 240,
                'country_code' => 'VI',
            'country_name' => 'Virgin Islands (US)',
            ),
            240 => 
            array (
                'id' => 241,
                'country_code' => 'WF',
                'country_name' => 'Wallis And Futuna Islands',
            ),
            241 => 
            array (
                'id' => 242,
                'country_code' => 'EH',
                'country_name' => 'Western Sahara',
            ),
            242 => 
            array (
                'id' => 243,
                'country_code' => 'YE',
                'country_name' => 'Yemen',
            ),
            243 => 
            array (
                'id' => 244,
                'country_code' => 'YU',
                'country_name' => 'Yugoslavia',
            ),
            244 => 
            array (
                'id' => 245,
                'country_code' => 'ZM',
                'country_name' => 'Zambia',
            ),
            245 => 
            array (
                'id' => 246,
                'country_code' => 'ZW',
                'country_name' => 'Zimbabwe',
            ),
        ));
        
        
    }
}