<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state_name' => 'Andaman and Nicobar Islands',
                'country_id' => 101,
            ),
            1 => 
            array (
                'id' => 2,
                'state_name' => 'Andhra Pradesh',
                'country_id' => 101,
            ),
            2 => 
            array (
                'id' => 3,
                'state_name' => 'Arunachal Pradesh',
                'country_id' => 101,
            ),
            3 => 
            array (
                'id' => 4,
                'state_name' => 'Assam',
                'country_id' => 101,
            ),
            4 => 
            array (
                'id' => 5,
                'state_name' => 'Bihar',
                'country_id' => 101,
            ),
            5 => 
            array (
                'id' => 6,
                'state_name' => 'Chandigarh',
                'country_id' => 101,
            ),
            6 => 
            array (
                'id' => 7,
                'state_name' => 'Chhattisgarh',
                'country_id' => 101,
            ),
            7 => 
            array (
                'id' => 8,
                'state_name' => 'Dadra and Nagar Haveli',
                'country_id' => 101,
            ),
            8 => 
            array (
                'id' => 9,
                'state_name' => 'Daman and Diu',
                'country_id' => 101,
            ),
            9 => 
            array (
                'id' => 10,
                'state_name' => 'Delhi',
                'country_id' => 101,
            ),
            10 => 
            array (
                'id' => 11,
                'state_name' => 'Goa',
                'country_id' => 101,
            ),
            11 => 
            array (
                'id' => 12,
                'state_name' => 'Gujarat',
                'country_id' => 101,
            ),
            12 => 
            array (
                'id' => 13,
                'state_name' => 'Haryana',
                'country_id' => 101,
            ),
            13 => 
            array (
                'id' => 14,
                'state_name' => 'Himachal Pradesh',
                'country_id' => 101,
            ),
            14 => 
            array (
                'id' => 15,
                'state_name' => 'Jammu and Kashmir',
                'country_id' => 101,
            ),
            15 => 
            array (
                'id' => 16,
                'state_name' => 'Jharkhand',
                'country_id' => 101,
            ),
            16 => 
            array (
                'id' => 17,
                'state_name' => 'Karnataka',
                'country_id' => 101,
            ),
            17 => 
            array (
                'id' => 18,
                'state_name' => 'Kenmore',
                'country_id' => 101,
            ),
            18 => 
            array (
                'id' => 19,
                'state_name' => 'Kerala',
                'country_id' => 101,
            ),
            19 => 
            array (
                'id' => 20,
                'state_name' => 'Lakshadweep',
                'country_id' => 101,
            ),
            20 => 
            array (
                'id' => 21,
                'state_name' => 'Madhya Pradesh',
                'country_id' => 101,
            ),
            21 => 
            array (
                'id' => 22,
                'state_name' => 'Maharashtra',
                'country_id' => 101,
            ),
            22 => 
            array (
                'id' => 23,
                'state_name' => 'Manipur',
                'country_id' => 101,
            ),
            23 => 
            array (
                'id' => 24,
                'state_name' => 'Meghalaya',
                'country_id' => 101,
            ),
            24 => 
            array (
                'id' => 25,
                'state_name' => 'Mizoram',
                'country_id' => 101,
            ),
            25 => 
            array (
                'id' => 26,
                'state_name' => 'Nagaland',
                'country_id' => 101,
            ),
            26 => 
            array (
                'id' => 27,
                'state_name' => 'Narora',
                'country_id' => 101,
            ),
            27 => 
            array (
                'id' => 28,
                'state_name' => 'Natwar',
                'country_id' => 101,
            ),
            28 => 
            array (
                'id' => 29,
                'state_name' => 'Odisha',
                'country_id' => 101,
            ),
            29 => 
            array (
                'id' => 30,
                'state_name' => 'Paschim Medinipur',
                'country_id' => 101,
            ),
            30 => 
            array (
                'id' => 31,
                'state_name' => 'Pondicherry',
                'country_id' => 101,
            ),
            31 => 
            array (
                'id' => 32,
                'state_name' => 'Punjab',
                'country_id' => 101,
            ),
            32 => 
            array (
                'id' => 33,
                'state_name' => 'Rajasthan',
                'country_id' => 101,
            ),
            33 => 
            array (
                'id' => 34,
                'state_name' => 'Sikkim',
                'country_id' => 101,
            ),
            34 => 
            array (
                'id' => 35,
                'state_name' => 'Tamil Nadu',
                'country_id' => 101,
            ),
            35 => 
            array (
                'id' => 36,
                'state_name' => 'Telangana',
                'country_id' => 101,
            ),
            36 => 
            array (
                'id' => 37,
                'state_name' => 'Tripura',
                'country_id' => 101,
            ),
            37 => 
            array (
                'id' => 38,
                'state_name' => 'Uttar Pradesh',
                'country_id' => 101,
            ),
            38 => 
            array (
                'id' => 39,
                'state_name' => 'Uttarakhand',
                'country_id' => 101,
            ),
            39 => 
            array (
                'id' => 40,
                'state_name' => 'Vaishali',
                'country_id' => 101,
            ),
            40 => 
            array (
                'id' => 41,
                'state_name' => 'West Bengal',
                'country_id' => 101,
            ),
            41 => 
            array (
                'id' => 42,
                'state_name' => 'Badakhshan',
                'country_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'state_name' => 'Badgis',
                'country_id' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'state_name' => 'Baglan',
                'country_id' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'state_name' => 'Balkh',
                'country_id' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'state_name' => 'Bamiyan',
                'country_id' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'state_name' => 'Farah',
                'country_id' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'state_name' => 'Faryab',
                'country_id' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'state_name' => 'Gawr',
                'country_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'state_name' => 'Gazni',
                'country_id' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'state_name' => 'Herat',
                'country_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'state_name' => 'Hilmand',
                'country_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'state_name' => 'Jawzjan',
                'country_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'state_name' => 'Kabul',
                'country_id' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'state_name' => 'Kapisa',
                'country_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'state_name' => 'Khawst',
                'country_id' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'state_name' => 'Kunar',
                'country_id' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'state_name' => 'Lagman',
                'country_id' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'state_name' => 'Lawghar',
                'country_id' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'state_name' => 'Nangarhar',
                'country_id' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'state_name' => 'Nimruz',
                'country_id' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'state_name' => 'Nuristan',
                'country_id' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'state_name' => 'Paktika',
                'country_id' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'state_name' => 'Paktiya',
                'country_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'state_name' => 'Parwan',
                'country_id' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'state_name' => 'Qandahar',
                'country_id' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'state_name' => 'Qunduz',
                'country_id' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'state_name' => 'Samangan',
                'country_id' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'state_name' => 'Sar-e Pul',
                'country_id' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'state_name' => 'Takhar',
                'country_id' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'state_name' => 'Uruzgan',
                'country_id' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'state_name' => 'Wardag',
                'country_id' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'state_name' => 'Zabul',
                'country_id' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'state_name' => 'Berat',
                'country_id' => 2,
            ),
            74 => 
            array (
                'id' => 75,
                'state_name' => 'Bulqize',
                'country_id' => 2,
            ),
            75 => 
            array (
                'id' => 76,
                'state_name' => 'Delvine',
                'country_id' => 2,
            ),
            76 => 
            array (
                'id' => 77,
                'state_name' => 'Devoll',
                'country_id' => 2,
            ),
            77 => 
            array (
                'id' => 78,
                'state_name' => 'Dibre',
                'country_id' => 2,
            ),
            78 => 
            array (
                'id' => 79,
                'state_name' => 'Durres',
                'country_id' => 2,
            ),
            79 => 
            array (
                'id' => 80,
                'state_name' => 'Elbasan',
                'country_id' => 2,
            ),
            80 => 
            array (
                'id' => 81,
                'state_name' => 'Fier',
                'country_id' => 2,
            ),
            81 => 
            array (
                'id' => 82,
                'state_name' => 'Gjirokaster',
                'country_id' => 2,
            ),
            82 => 
            array (
                'id' => 83,
                'state_name' => 'Gramsh',
                'country_id' => 2,
            ),
            83 => 
            array (
                'id' => 84,
                'state_name' => 'Has',
                'country_id' => 2,
            ),
            84 => 
            array (
                'id' => 85,
                'state_name' => 'Kavaje',
                'country_id' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'state_name' => 'Kolonje',
                'country_id' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'state_name' => 'Korce',
                'country_id' => 2,
            ),
            87 => 
            array (
                'id' => 88,
                'state_name' => 'Kruje',
                'country_id' => 2,
            ),
            88 => 
            array (
                'id' => 89,
                'state_name' => 'Kucove',
                'country_id' => 2,
            ),
            89 => 
            array (
                'id' => 90,
                'state_name' => 'Kukes',
                'country_id' => 2,
            ),
            90 => 
            array (
                'id' => 91,
                'state_name' => 'Kurbin',
                'country_id' => 2,
            ),
            91 => 
            array (
                'id' => 92,
                'state_name' => 'Lezhe',
                'country_id' => 2,
            ),
            92 => 
            array (
                'id' => 93,
                'state_name' => 'Librazhd',
                'country_id' => 2,
            ),
            93 => 
            array (
                'id' => 94,
                'state_name' => 'Lushnje',
                'country_id' => 2,
            ),
            94 => 
            array (
                'id' => 95,
                'state_name' => 'Mallakaster',
                'country_id' => 2,
            ),
            95 => 
            array (
                'id' => 96,
                'state_name' => 'Malsi e Madhe',
                'country_id' => 2,
            ),
            96 => 
            array (
                'id' => 97,
                'state_name' => 'Mat',
                'country_id' => 2,
            ),
            97 => 
            array (
                'id' => 98,
                'state_name' => 'Mirdite',
                'country_id' => 2,
            ),
            98 => 
            array (
                'id' => 99,
                'state_name' => 'Peqin',
                'country_id' => 2,
            ),
            99 => 
            array (
                'id' => 100,
                'state_name' => 'Permet',
                'country_id' => 2,
            ),
            100 => 
            array (
                'id' => 101,
                'state_name' => 'Pogradec',
                'country_id' => 2,
            ),
            101 => 
            array (
                'id' => 102,
                'state_name' => 'Puke',
                'country_id' => 2,
            ),
            102 => 
            array (
                'id' => 103,
                'state_name' => 'Sarande',
                'country_id' => 2,
            ),
            103 => 
            array (
                'id' => 104,
                'state_name' => 'Shkoder',
                'country_id' => 2,
            ),
            104 => 
            array (
                'id' => 105,
                'state_name' => 'Skrapar',
                'country_id' => 2,
            ),
            105 => 
            array (
                'id' => 106,
                'state_name' => 'Tepelene',
                'country_id' => 2,
            ),
            106 => 
            array (
                'id' => 107,
                'state_name' => 'Tirane',
                'country_id' => 2,
            ),
            107 => 
            array (
                'id' => 108,
                'state_name' => 'Tropoje',
                'country_id' => 2,
            ),
            108 => 
            array (
                'id' => 109,
                'state_name' => 'Vlore',
                'country_id' => 2,
            ),
            109 => 
            array (
                'id' => 110,
                'state_name' => '\'Ayn Daflah',
                'country_id' => 3,
            ),
            110 => 
            array (
                'id' => 111,
                'state_name' => '\'Ayn Tamushanat',
                'country_id' => 3,
            ),
            111 => 
            array (
                'id' => 112,
                'state_name' => 'Adrar',
                'country_id' => 3,
            ),
            112 => 
            array (
                'id' => 113,
                'state_name' => 'Algiers',
                'country_id' => 3,
            ),
            113 => 
            array (
                'id' => 114,
                'state_name' => 'Annabah',
                'country_id' => 3,
            ),
            114 => 
            array (
                'id' => 115,
                'state_name' => 'Bashshar',
                'country_id' => 3,
            ),
            115 => 
            array (
                'id' => 116,
                'state_name' => 'Batnah',
                'country_id' => 3,
            ),
            116 => 
            array (
                'id' => 117,
                'state_name' => 'Bijayah',
                'country_id' => 3,
            ),
            117 => 
            array (
                'id' => 118,
                'state_name' => 'Biskrah',
                'country_id' => 3,
            ),
            118 => 
            array (
                'id' => 119,
                'state_name' => 'Blidah',
                'country_id' => 3,
            ),
            119 => 
            array (
                'id' => 120,
                'state_name' => 'Buirah',
                'country_id' => 3,
            ),
            120 => 
            array (
                'id' => 121,
                'state_name' => 'Bumardas',
                'country_id' => 3,
            ),
            121 => 
            array (
                'id' => 122,
                'state_name' => 'Burj Bu Arririj',
                'country_id' => 3,
            ),
            122 => 
            array (
                'id' => 123,
                'state_name' => 'Ghalizan',
                'country_id' => 3,
            ),
            123 => 
            array (
                'id' => 124,
                'state_name' => 'Ghardayah',
                'country_id' => 3,
            ),
            124 => 
            array (
                'id' => 125,
                'state_name' => 'Ilizi',
                'country_id' => 3,
            ),
            125 => 
            array (
                'id' => 126,
                'state_name' => 'Jijili',
                'country_id' => 3,
            ),
            126 => 
            array (
                'id' => 127,
                'state_name' => 'Jilfah',
                'country_id' => 3,
            ),
            127 => 
            array (
                'id' => 128,
                'state_name' => 'Khanshalah',
                'country_id' => 3,
            ),
            128 => 
            array (
                'id' => 129,
                'state_name' => 'Masilah',
                'country_id' => 3,
            ),
            129 => 
            array (
                'id' => 130,
                'state_name' => 'Midyah',
                'country_id' => 3,
            ),
            130 => 
            array (
                'id' => 131,
                'state_name' => 'Milah',
                'country_id' => 3,
            ),
            131 => 
            array (
                'id' => 132,
                'state_name' => 'Muaskar',
                'country_id' => 3,
            ),
            132 => 
            array (
                'id' => 133,
                'state_name' => 'Mustaghanam',
                'country_id' => 3,
            ),
            133 => 
            array (
                'id' => 134,
                'state_name' => 'Naama',
                'country_id' => 3,
            ),
            134 => 
            array (
                'id' => 135,
                'state_name' => 'Oran',
                'country_id' => 3,
            ),
            135 => 
            array (
                'id' => 136,
                'state_name' => 'Ouargla',
                'country_id' => 3,
            ),
            136 => 
            array (
                'id' => 137,
                'state_name' => 'Qalmah',
                'country_id' => 3,
            ),
            137 => 
            array (
                'id' => 138,
                'state_name' => 'Qustantinah',
                'country_id' => 3,
            ),
            138 => 
            array (
                'id' => 139,
                'state_name' => 'Sakikdah',
                'country_id' => 3,
            ),
            139 => 
            array (
                'id' => 140,
                'state_name' => 'Satif',
                'country_id' => 3,
            ),
            140 => 
            array (
                'id' => 141,
                'state_name' => 'Sayda\'',
                'country_id' => 3,
            ),
            141 => 
            array (
                'id' => 142,
                'state_name' => 'Sidi ban-al-\'Abbas',
                'country_id' => 3,
            ),
            142 => 
            array (
                'id' => 143,
                'state_name' => 'Suq Ahras',
                'country_id' => 3,
            ),
            143 => 
            array (
                'id' => 144,
                'state_name' => 'Tamanghasat',
                'country_id' => 3,
            ),
            144 => 
            array (
                'id' => 145,
                'state_name' => 'Tibazah',
                'country_id' => 3,
            ),
            145 => 
            array (
                'id' => 146,
                'state_name' => 'Tibissah',
                'country_id' => 3,
            ),
            146 => 
            array (
                'id' => 147,
                'state_name' => 'Tilimsan',
                'country_id' => 3,
            ),
            147 => 
            array (
                'id' => 148,
                'state_name' => 'Tinduf',
                'country_id' => 3,
            ),
            148 => 
            array (
                'id' => 149,
                'state_name' => 'Tisamsilt',
                'country_id' => 3,
            ),
            149 => 
            array (
                'id' => 150,
                'state_name' => 'Tiyarat',
                'country_id' => 3,
            ),
            150 => 
            array (
                'id' => 151,
                'state_name' => 'Tizi Wazu',
                'country_id' => 3,
            ),
            151 => 
            array (
                'id' => 152,
                'state_name' => 'Umm-al-Bawaghi',
                'country_id' => 3,
            ),
            152 => 
            array (
                'id' => 153,
                'state_name' => 'Wahran',
                'country_id' => 3,
            ),
            153 => 
            array (
                'id' => 154,
                'state_name' => 'Warqla',
                'country_id' => 3,
            ),
            154 => 
            array (
                'id' => 155,
                'state_name' => 'Wilaya d Alger',
                'country_id' => 3,
            ),
            155 => 
            array (
                'id' => 156,
                'state_name' => 'Wilaya de Bejaia',
                'country_id' => 3,
            ),
            156 => 
            array (
                'id' => 157,
                'state_name' => 'Wilaya de Constantine',
                'country_id' => 3,
            ),
            157 => 
            array (
                'id' => 158,
                'state_name' => 'al-Aghwat',
                'country_id' => 3,
            ),
            158 => 
            array (
                'id' => 159,
                'state_name' => 'al-Bayadh',
                'country_id' => 3,
            ),
            159 => 
            array (
                'id' => 160,
                'state_name' => 'al-Jaza\'ir',
                'country_id' => 3,
            ),
            160 => 
            array (
                'id' => 161,
                'state_name' => 'al-Wad',
                'country_id' => 3,
            ),
            161 => 
            array (
                'id' => 162,
                'state_name' => 'ash-Shalif',
                'country_id' => 3,
            ),
            162 => 
            array (
                'id' => 163,
                'state_name' => 'at-Tarif',
                'country_id' => 3,
            ),
            163 => 
            array (
                'id' => 164,
                'state_name' => 'Eastern',
                'country_id' => 4,
            ),
            164 => 
            array (
                'id' => 165,
                'state_name' => 'Manu\'a',
                'country_id' => 4,
            ),
            165 => 
            array (
                'id' => 166,
                'state_name' => 'Swains Island',
                'country_id' => 4,
            ),
            166 => 
            array (
                'id' => 167,
                'state_name' => 'Western',
                'country_id' => 4,
            ),
            167 => 
            array (
                'id' => 168,
                'state_name' => 'Andorra la Vella',
                'country_id' => 5,
            ),
            168 => 
            array (
                'id' => 169,
                'state_name' => 'Canillo',
                'country_id' => 5,
            ),
            169 => 
            array (
                'id' => 170,
                'state_name' => 'Encamp',
                'country_id' => 5,
            ),
            170 => 
            array (
                'id' => 171,
                'state_name' => 'La Massana',
                'country_id' => 5,
            ),
            171 => 
            array (
                'id' => 172,
                'state_name' => 'Les Escaldes',
                'country_id' => 5,
            ),
            172 => 
            array (
                'id' => 173,
                'state_name' => 'Ordino',
                'country_id' => 5,
            ),
            173 => 
            array (
                'id' => 174,
                'state_name' => 'Sant Julia de Loria',
                'country_id' => 5,
            ),
            174 => 
            array (
                'id' => 175,
                'state_name' => 'Bengo',
                'country_id' => 6,
            ),
            175 => 
            array (
                'id' => 176,
                'state_name' => 'Benguela',
                'country_id' => 6,
            ),
            176 => 
            array (
                'id' => 177,
                'state_name' => 'Bie',
                'country_id' => 6,
            ),
            177 => 
            array (
                'id' => 178,
                'state_name' => 'Cabinda',
                'country_id' => 6,
            ),
            178 => 
            array (
                'id' => 179,
                'state_name' => 'Cunene',
                'country_id' => 6,
            ),
            179 => 
            array (
                'id' => 180,
                'state_name' => 'Huambo',
                'country_id' => 6,
            ),
            180 => 
            array (
                'id' => 181,
                'state_name' => 'Huila',
                'country_id' => 6,
            ),
            181 => 
            array (
                'id' => 182,
                'state_name' => 'Kuando-Kubango',
                'country_id' => 6,
            ),
            182 => 
            array (
                'id' => 183,
                'state_name' => 'Kwanza Norte',
                'country_id' => 6,
            ),
            183 => 
            array (
                'id' => 184,
                'state_name' => 'Kwanza Sul',
                'country_id' => 6,
            ),
            184 => 
            array (
                'id' => 185,
                'state_name' => 'Luanda',
                'country_id' => 6,
            ),
            185 => 
            array (
                'id' => 186,
                'state_name' => 'Lunda Norte',
                'country_id' => 6,
            ),
            186 => 
            array (
                'id' => 187,
                'state_name' => 'Lunda Sul',
                'country_id' => 6,
            ),
            187 => 
            array (
                'id' => 188,
                'state_name' => 'Malanje',
                'country_id' => 6,
            ),
            188 => 
            array (
                'id' => 189,
                'state_name' => 'Moxico',
                'country_id' => 6,
            ),
            189 => 
            array (
                'id' => 190,
                'state_name' => 'Namibe',
                'country_id' => 6,
            ),
            190 => 
            array (
                'id' => 191,
                'state_name' => 'Uige',
                'country_id' => 6,
            ),
            191 => 
            array (
                'id' => 192,
                'state_name' => 'Zaire',
                'country_id' => 6,
            ),
            192 => 
            array (
                'id' => 193,
                'state_name' => 'Other Provinces',
                'country_id' => 7,
            ),
            193 => 
            array (
                'id' => 194,
                'state_name' => 'Sector claimed by Argentina/Ch',
                'country_id' => 8,
            ),
            194 => 
            array (
                'id' => 195,
                'state_name' => 'Sector claimed by Argentina/UK',
                'country_id' => 8,
            ),
            195 => 
            array (
                'id' => 196,
                'state_name' => 'Sector claimed by Australia',
                'country_id' => 8,
            ),
            196 => 
            array (
                'id' => 197,
                'state_name' => 'Sector claimed by France',
                'country_id' => 8,
            ),
            197 => 
            array (
                'id' => 198,
                'state_name' => 'Sector claimed by New Zealand',
                'country_id' => 8,
            ),
            198 => 
            array (
                'id' => 199,
                'state_name' => 'Sector claimed by Norway',
                'country_id' => 8,
            ),
            199 => 
            array (
                'id' => 200,
                'state_name' => 'Unclaimed Sector',
                'country_id' => 8,
            ),
            200 => 
            array (
                'id' => 201,
                'state_name' => 'Barbuda',
                'country_id' => 9,
            ),
            201 => 
            array (
                'id' => 202,
                'state_name' => 'Saint George',
                'country_id' => 9,
            ),
            202 => 
            array (
                'id' => 203,
                'state_name' => 'Saint John',
                'country_id' => 9,
            ),
            203 => 
            array (
                'id' => 204,
                'state_name' => 'Saint Mary',
                'country_id' => 9,
            ),
            204 => 
            array (
                'id' => 205,
                'state_name' => 'Saint Paul',
                'country_id' => 9,
            ),
            205 => 
            array (
                'id' => 206,
                'state_name' => 'Saint Peter',
                'country_id' => 9,
            ),
            206 => 
            array (
                'id' => 207,
                'state_name' => 'Saint Philip',
                'country_id' => 9,
            ),
            207 => 
            array (
                'id' => 208,
                'state_name' => 'Buenos Aires',
                'country_id' => 10,
            ),
            208 => 
            array (
                'id' => 209,
                'state_name' => 'Catamarca',
                'country_id' => 10,
            ),
            209 => 
            array (
                'id' => 210,
                'state_name' => 'Chaco',
                'country_id' => 10,
            ),
            210 => 
            array (
                'id' => 211,
                'state_name' => 'Chubut',
                'country_id' => 10,
            ),
            211 => 
            array (
                'id' => 212,
                'state_name' => 'Cordoba',
                'country_id' => 10,
            ),
            212 => 
            array (
                'id' => 213,
                'state_name' => 'Corrientes',
                'country_id' => 10,
            ),
            213 => 
            array (
                'id' => 214,
                'state_name' => 'Distrito Federal',
                'country_id' => 10,
            ),
            214 => 
            array (
                'id' => 215,
                'state_name' => 'Entre Rios',
                'country_id' => 10,
            ),
            215 => 
            array (
                'id' => 216,
                'state_name' => 'Formosa',
                'country_id' => 10,
            ),
            216 => 
            array (
                'id' => 217,
                'state_name' => 'Jujuy',
                'country_id' => 10,
            ),
            217 => 
            array (
                'id' => 218,
                'state_name' => 'La Pampa',
                'country_id' => 10,
            ),
            218 => 
            array (
                'id' => 219,
                'state_name' => 'La Rioja',
                'country_id' => 10,
            ),
            219 => 
            array (
                'id' => 220,
                'state_name' => 'Mendoza',
                'country_id' => 10,
            ),
            220 => 
            array (
                'id' => 221,
                'state_name' => 'Misiones',
                'country_id' => 10,
            ),
            221 => 
            array (
                'id' => 222,
                'state_name' => 'Neuquen',
                'country_id' => 10,
            ),
            222 => 
            array (
                'id' => 223,
                'state_name' => 'Rio Negro',
                'country_id' => 10,
            ),
            223 => 
            array (
                'id' => 224,
                'state_name' => 'Salta',
                'country_id' => 10,
            ),
            224 => 
            array (
                'id' => 225,
                'state_name' => 'San Juan',
                'country_id' => 10,
            ),
            225 => 
            array (
                'id' => 226,
                'state_name' => 'San Luis',
                'country_id' => 10,
            ),
            226 => 
            array (
                'id' => 227,
                'state_name' => 'Santa Cruz',
                'country_id' => 10,
            ),
            227 => 
            array (
                'id' => 228,
                'state_name' => 'Santa Fe',
                'country_id' => 10,
            ),
            228 => 
            array (
                'id' => 229,
                'state_name' => 'Santiago del Estero',
                'country_id' => 10,
            ),
            229 => 
            array (
                'id' => 230,
                'state_name' => 'Tierra del Fuego',
                'country_id' => 10,
            ),
            230 => 
            array (
                'id' => 231,
                'state_name' => 'Tucuman',
                'country_id' => 10,
            ),
            231 => 
            array (
                'id' => 232,
                'state_name' => 'Aragatsotn',
                'country_id' => 11,
            ),
            232 => 
            array (
                'id' => 233,
                'state_name' => 'Ararat',
                'country_id' => 11,
            ),
            233 => 
            array (
                'id' => 234,
                'state_name' => 'Armavir',
                'country_id' => 11,
            ),
            234 => 
            array (
                'id' => 235,
                'state_name' => 'Gegharkunik',
                'country_id' => 11,
            ),
            235 => 
            array (
                'id' => 236,
                'state_name' => 'Kotaik',
                'country_id' => 11,
            ),
            236 => 
            array (
                'id' => 237,
                'state_name' => 'Lori',
                'country_id' => 11,
            ),
            237 => 
            array (
                'id' => 238,
                'state_name' => 'Shirak',
                'country_id' => 11,
            ),
            238 => 
            array (
                'id' => 239,
                'state_name' => 'Stepanakert',
                'country_id' => 11,
            ),
            239 => 
            array (
                'id' => 240,
                'state_name' => 'Syunik',
                'country_id' => 11,
            ),
            240 => 
            array (
                'id' => 241,
                'state_name' => 'Tavush',
                'country_id' => 11,
            ),
            241 => 
            array (
                'id' => 242,
                'state_name' => 'Vayots Dzor',
                'country_id' => 11,
            ),
            242 => 
            array (
                'id' => 243,
                'state_name' => 'Yerevan',
                'country_id' => 11,
            ),
            243 => 
            array (
                'id' => 244,
                'state_name' => 'Aruba',
                'country_id' => 12,
            ),
            244 => 
            array (
                'id' => 245,
                'state_name' => 'Auckland',
                'country_id' => 13,
            ),
            245 => 
            array (
                'id' => 246,
                'state_name' => 'Australian Capital Territory',
                'country_id' => 13,
            ),
            246 => 
            array (
                'id' => 247,
                'state_name' => 'Balgowlah',
                'country_id' => 13,
            ),
            247 => 
            array (
                'id' => 248,
                'state_name' => 'Balmain',
                'country_id' => 13,
            ),
            248 => 
            array (
                'id' => 249,
                'state_name' => 'Bankstown',
                'country_id' => 13,
            ),
            249 => 
            array (
                'id' => 250,
                'state_name' => 'Baulkham Hills',
                'country_id' => 13,
            ),
            250 => 
            array (
                'id' => 251,
                'state_name' => 'Bonnet Bay',
                'country_id' => 13,
            ),
            251 => 
            array (
                'id' => 252,
                'state_name' => 'Camberwell',
                'country_id' => 13,
            ),
            252 => 
            array (
                'id' => 253,
                'state_name' => 'Carole Park',
                'country_id' => 13,
            ),
            253 => 
            array (
                'id' => 254,
                'state_name' => 'Castle Hill',
                'country_id' => 13,
            ),
            254 => 
            array (
                'id' => 255,
                'state_name' => 'Caulfield',
                'country_id' => 13,
            ),
            255 => 
            array (
                'id' => 256,
                'state_name' => 'Chatswood',
                'country_id' => 13,
            ),
            256 => 
            array (
                'id' => 257,
                'state_name' => 'Cheltenham',
                'country_id' => 13,
            ),
            257 => 
            array (
                'id' => 258,
                'state_name' => 'Cherrybrook',
                'country_id' => 13,
            ),
            258 => 
            array (
                'id' => 259,
                'state_name' => 'Clayton',
                'country_id' => 13,
            ),
            259 => 
            array (
                'id' => 260,
                'state_name' => 'Collingwood',
                'country_id' => 13,
            ),
            260 => 
            array (
                'id' => 261,
                'state_name' => 'Frenchs Forest',
                'country_id' => 13,
            ),
            261 => 
            array (
                'id' => 262,
                'state_name' => 'Hawthorn',
                'country_id' => 13,
            ),
            262 => 
            array (
                'id' => 263,
                'state_name' => 'Jannnali',
                'country_id' => 13,
            ),
            263 => 
            array (
                'id' => 264,
                'state_name' => 'Knoxfield',
                'country_id' => 13,
            ),
            264 => 
            array (
                'id' => 265,
                'state_name' => 'Melbourne',
                'country_id' => 13,
            ),
            265 => 
            array (
                'id' => 266,
                'state_name' => 'New South Wales',
                'country_id' => 13,
            ),
            266 => 
            array (
                'id' => 267,
                'state_name' => 'Northern Territory',
                'country_id' => 13,
            ),
            267 => 
            array (
                'id' => 268,
                'state_name' => 'Perth',
                'country_id' => 13,
            ),
            268 => 
            array (
                'id' => 269,
                'state_name' => 'Queensland',
                'country_id' => 13,
            ),
            269 => 
            array (
                'id' => 270,
                'state_name' => 'South Australia',
                'country_id' => 13,
            ),
            270 => 
            array (
                'id' => 271,
                'state_name' => 'Tasmania',
                'country_id' => 13,
            ),
            271 => 
            array (
                'id' => 272,
                'state_name' => 'Templestowe',
                'country_id' => 13,
            ),
            272 => 
            array (
                'id' => 273,
                'state_name' => 'Victoria',
                'country_id' => 13,
            ),
            273 => 
            array (
                'id' => 274,
                'state_name' => 'Werribee south',
                'country_id' => 13,
            ),
            274 => 
            array (
                'id' => 275,
                'state_name' => 'Western Australia',
                'country_id' => 13,
            ),
            275 => 
            array (
                'id' => 276,
                'state_name' => 'Wheeler',
                'country_id' => 13,
            ),
            276 => 
            array (
                'id' => 277,
                'state_name' => 'Bundesland Salzburg',
                'country_id' => 14,
            ),
            277 => 
            array (
                'id' => 278,
                'state_name' => 'Bundesland Steiermark',
                'country_id' => 14,
            ),
            278 => 
            array (
                'id' => 279,
                'state_name' => 'Bundesland Tirol',
                'country_id' => 14,
            ),
            279 => 
            array (
                'id' => 280,
                'state_name' => 'Burgenland',
                'country_id' => 14,
            ),
            280 => 
            array (
                'id' => 281,
                'state_name' => 'Carinthia',
                'country_id' => 14,
            ),
            281 => 
            array (
                'id' => 282,
                'state_name' => 'Karnten',
                'country_id' => 14,
            ),
            282 => 
            array (
                'id' => 283,
                'state_name' => 'Liezen',
                'country_id' => 14,
            ),
            283 => 
            array (
                'id' => 284,
                'state_name' => 'Lower Austria',
                'country_id' => 14,
            ),
            284 => 
            array (
                'id' => 285,
                'state_name' => 'Niederosterreich',
                'country_id' => 14,
            ),
            285 => 
            array (
                'id' => 286,
                'state_name' => 'Oberosterreich',
                'country_id' => 14,
            ),
            286 => 
            array (
                'id' => 287,
                'state_name' => 'Salzburg',
                'country_id' => 14,
            ),
            287 => 
            array (
                'id' => 288,
                'state_name' => 'Schleswig-Holstein',
                'country_id' => 14,
            ),
            288 => 
            array (
                'id' => 289,
                'state_name' => 'Steiermark',
                'country_id' => 14,
            ),
            289 => 
            array (
                'id' => 290,
                'state_name' => 'Styria',
                'country_id' => 14,
            ),
            290 => 
            array (
                'id' => 291,
                'state_name' => 'Tirol',
                'country_id' => 14,
            ),
            291 => 
            array (
                'id' => 292,
                'state_name' => 'Upper Austria',
                'country_id' => 14,
            ),
            292 => 
            array (
                'id' => 293,
                'state_name' => 'Vorarlberg',
                'country_id' => 14,
            ),
            293 => 
            array (
                'id' => 294,
                'state_name' => 'Wien',
                'country_id' => 14,
            ),
            294 => 
            array (
                'id' => 295,
                'state_name' => 'Abseron',
                'country_id' => 15,
            ),
            295 => 
            array (
                'id' => 296,
                'state_name' => 'Baki Sahari',
                'country_id' => 15,
            ),
            296 => 
            array (
                'id' => 297,
                'state_name' => 'Ganca',
                'country_id' => 15,
            ),
            297 => 
            array (
                'id' => 298,
                'state_name' => 'Ganja',
                'country_id' => 15,
            ),
            298 => 
            array (
                'id' => 299,
                'state_name' => 'Kalbacar',
                'country_id' => 15,
            ),
            299 => 
            array (
                'id' => 300,
                'state_name' => 'Lankaran',
                'country_id' => 15,
            ),
            300 => 
            array (
                'id' => 301,
                'state_name' => 'Mil-Qarabax',
                'country_id' => 15,
            ),
            301 => 
            array (
                'id' => 302,
                'state_name' => 'Mugan-Salyan',
                'country_id' => 15,
            ),
            302 => 
            array (
                'id' => 303,
                'state_name' => 'Nagorni-Qarabax',
                'country_id' => 15,
            ),
            303 => 
            array (
                'id' => 304,
                'state_name' => 'Naxcivan',
                'country_id' => 15,
            ),
            304 => 
            array (
                'id' => 305,
                'state_name' => 'Priaraks',
                'country_id' => 15,
            ),
            305 => 
            array (
                'id' => 306,
                'state_name' => 'Qazax',
                'country_id' => 15,
            ),
            306 => 
            array (
                'id' => 307,
                'state_name' => 'Saki',
                'country_id' => 15,
            ),
            307 => 
            array (
                'id' => 308,
                'state_name' => 'Sirvan',
                'country_id' => 15,
            ),
            308 => 
            array (
                'id' => 309,
                'state_name' => 'Xacmaz',
                'country_id' => 15,
            ),
            309 => 
            array (
                'id' => 310,
                'state_name' => 'Abaco',
                'country_id' => 16,
            ),
            310 => 
            array (
                'id' => 311,
                'state_name' => 'Acklins Island',
                'country_id' => 16,
            ),
            311 => 
            array (
                'id' => 312,
                'state_name' => 'Andros',
                'country_id' => 16,
            ),
            312 => 
            array (
                'id' => 313,
                'state_name' => 'Berry Islands',
                'country_id' => 16,
            ),
            313 => 
            array (
                'id' => 314,
                'state_name' => 'Biminis',
                'country_id' => 16,
            ),
            314 => 
            array (
                'id' => 315,
                'state_name' => 'Cat Island',
                'country_id' => 16,
            ),
            315 => 
            array (
                'id' => 316,
                'state_name' => 'Crooked Island',
                'country_id' => 16,
            ),
            316 => 
            array (
                'id' => 317,
                'state_name' => 'Eleuthera',
                'country_id' => 16,
            ),
            317 => 
            array (
                'id' => 318,
                'state_name' => 'Exuma and Cays',
                'country_id' => 16,
            ),
            318 => 
            array (
                'id' => 319,
                'state_name' => 'Grand Bahama',
                'country_id' => 16,
            ),
            319 => 
            array (
                'id' => 320,
                'state_name' => 'Inagua Islands',
                'country_id' => 16,
            ),
            320 => 
            array (
                'id' => 321,
                'state_name' => 'Long Island',
                'country_id' => 16,
            ),
            321 => 
            array (
                'id' => 322,
                'state_name' => 'Mayaguana',
                'country_id' => 16,
            ),
            322 => 
            array (
                'id' => 323,
                'state_name' => 'New Providence',
                'country_id' => 16,
            ),
            323 => 
            array (
                'id' => 324,
                'state_name' => 'Ragged Island',
                'country_id' => 16,
            ),
            324 => 
            array (
                'id' => 325,
                'state_name' => 'Rum Cay',
                'country_id' => 16,
            ),
            325 => 
            array (
                'id' => 326,
                'state_name' => 'San Salvador',
                'country_id' => 16,
            ),
            326 => 
            array (
                'id' => 327,
                'state_name' => '\'Isa',
                'country_id' => 17,
            ),
            327 => 
            array (
                'id' => 328,
                'state_name' => 'Badiyah',
                'country_id' => 17,
            ),
            328 => 
            array (
                'id' => 329,
                'state_name' => 'Hidd',
                'country_id' => 17,
            ),
            329 => 
            array (
                'id' => 330,
                'state_name' => 'Jidd Hafs',
                'country_id' => 17,
            ),
            330 => 
            array (
                'id' => 331,
                'state_name' => 'Mahama',
                'country_id' => 17,
            ),
            331 => 
            array (
                'id' => 332,
                'state_name' => 'Manama',
                'country_id' => 17,
            ),
            332 => 
            array (
                'id' => 333,
                'state_name' => 'Sitrah',
                'country_id' => 17,
            ),
            333 => 
            array (
                'id' => 334,
                'state_name' => 'al-Manamah',
                'country_id' => 17,
            ),
            334 => 
            array (
                'id' => 335,
                'state_name' => 'al-Muharraq',
                'country_id' => 17,
            ),
            335 => 
            array (
                'id' => 336,
                'state_name' => 'ar-Rifa\'a',
                'country_id' => 17,
            ),
            336 => 
            array (
                'id' => 337,
                'state_name' => 'Bagar Hat',
                'country_id' => 18,
            ),
            337 => 
            array (
                'id' => 338,
                'state_name' => 'Bandarban',
                'country_id' => 18,
            ),
            338 => 
            array (
                'id' => 339,
                'state_name' => 'Barguna',
                'country_id' => 18,
            ),
            339 => 
            array (
                'id' => 340,
                'state_name' => 'Barisal',
                'country_id' => 18,
            ),
            340 => 
            array (
                'id' => 341,
                'state_name' => 'Bhola',
                'country_id' => 18,
            ),
            341 => 
            array (
                'id' => 342,
                'state_name' => 'Bogora',
                'country_id' => 18,
            ),
            342 => 
            array (
                'id' => 343,
                'state_name' => 'Brahman Bariya',
                'country_id' => 18,
            ),
            343 => 
            array (
                'id' => 344,
                'state_name' => 'Chandpur',
                'country_id' => 18,
            ),
            344 => 
            array (
                'id' => 345,
                'state_name' => 'Chattagam',
                'country_id' => 18,
            ),
            345 => 
            array (
                'id' => 346,
                'state_name' => 'Chittagong Division',
                'country_id' => 18,
            ),
            346 => 
            array (
                'id' => 347,
                'state_name' => 'Chuadanga',
                'country_id' => 18,
            ),
            347 => 
            array (
                'id' => 348,
                'state_name' => 'Dhaka',
                'country_id' => 18,
            ),
            348 => 
            array (
                'id' => 349,
                'state_name' => 'Dinajpur',
                'country_id' => 18,
            ),
            349 => 
            array (
                'id' => 350,
                'state_name' => 'Faridpur',
                'country_id' => 18,
            ),
            350 => 
            array (
                'id' => 351,
                'state_name' => 'Feni',
                'country_id' => 18,
            ),
            351 => 
            array (
                'id' => 352,
                'state_name' => 'Gaybanda',
                'country_id' => 18,
            ),
            352 => 
            array (
                'id' => 353,
                'state_name' => 'Gazipur',
                'country_id' => 18,
            ),
            353 => 
            array (
                'id' => 354,
                'state_name' => 'Gopalganj',
                'country_id' => 18,
            ),
            354 => 
            array (
                'id' => 355,
                'state_name' => 'Habiganj',
                'country_id' => 18,
            ),
            355 => 
            array (
                'id' => 356,
                'state_name' => 'Jaipur Hat',
                'country_id' => 18,
            ),
            356 => 
            array (
                'id' => 357,
                'state_name' => 'Jamalpur',
                'country_id' => 18,
            ),
            357 => 
            array (
                'id' => 358,
                'state_name' => 'Jessor',
                'country_id' => 18,
            ),
            358 => 
            array (
                'id' => 359,
                'state_name' => 'Jhalakati',
                'country_id' => 18,
            ),
            359 => 
            array (
                'id' => 360,
                'state_name' => 'Jhanaydah',
                'country_id' => 18,
            ),
            360 => 
            array (
                'id' => 361,
                'state_name' => 'Khagrachhari',
                'country_id' => 18,
            ),
            361 => 
            array (
                'id' => 362,
                'state_name' => 'Khulna',
                'country_id' => 18,
            ),
            362 => 
            array (
                'id' => 363,
                'state_name' => 'Kishorganj',
                'country_id' => 18,
            ),
            363 => 
            array (
                'id' => 364,
                'state_name' => 'Koks Bazar',
                'country_id' => 18,
            ),
            364 => 
            array (
                'id' => 365,
                'state_name' => 'Komilla',
                'country_id' => 18,
            ),
            365 => 
            array (
                'id' => 366,
                'state_name' => 'Kurigram',
                'country_id' => 18,
            ),
            366 => 
            array (
                'id' => 367,
                'state_name' => 'Kushtiya',
                'country_id' => 18,
            ),
            367 => 
            array (
                'id' => 368,
                'state_name' => 'Lakshmipur',
                'country_id' => 18,
            ),
            368 => 
            array (
                'id' => 369,
                'state_name' => 'Lalmanir Hat',
                'country_id' => 18,
            ),
            369 => 
            array (
                'id' => 370,
                'state_name' => 'Madaripur',
                'country_id' => 18,
            ),
            370 => 
            array (
                'id' => 371,
                'state_name' => 'Magura',
                'country_id' => 18,
            ),
            371 => 
            array (
                'id' => 372,
                'state_name' => 'Maimansingh',
                'country_id' => 18,
            ),
            372 => 
            array (
                'id' => 373,
                'state_name' => 'Manikganj',
                'country_id' => 18,
            ),
            373 => 
            array (
                'id' => 374,
                'state_name' => 'Maulvi Bazar',
                'country_id' => 18,
            ),
            374 => 
            array (
                'id' => 375,
                'state_name' => 'Meherpur',
                'country_id' => 18,
            ),
            375 => 
            array (
                'id' => 376,
                'state_name' => 'Munshiganj',
                'country_id' => 18,
            ),
            376 => 
            array (
                'id' => 377,
                'state_name' => 'Naral',
                'country_id' => 18,
            ),
            377 => 
            array (
                'id' => 378,
                'state_name' => 'Narayanganj',
                'country_id' => 18,
            ),
            378 => 
            array (
                'id' => 379,
                'state_name' => 'Narsingdi',
                'country_id' => 18,
            ),
            379 => 
            array (
                'id' => 380,
                'state_name' => 'Nator',
                'country_id' => 18,
            ),
            380 => 
            array (
                'id' => 381,
                'state_name' => 'Naugaon',
                'country_id' => 18,
            ),
            381 => 
            array (
                'id' => 382,
                'state_name' => 'Nawabganj',
                'country_id' => 18,
            ),
            382 => 
            array (
                'id' => 383,
                'state_name' => 'Netrakona',
                'country_id' => 18,
            ),
            383 => 
            array (
                'id' => 384,
                'state_name' => 'Nilphamari',
                'country_id' => 18,
            ),
            384 => 
            array (
                'id' => 385,
                'state_name' => 'Noakhali',
                'country_id' => 18,
            ),
            385 => 
            array (
                'id' => 386,
                'state_name' => 'Pabna',
                'country_id' => 18,
            ),
            386 => 
            array (
                'id' => 387,
                'state_name' => 'Panchagarh',
                'country_id' => 18,
            ),
            387 => 
            array (
                'id' => 388,
                'state_name' => 'Patuakhali',
                'country_id' => 18,
            ),
            388 => 
            array (
                'id' => 389,
                'state_name' => 'Pirojpur',
                'country_id' => 18,
            ),
            389 => 
            array (
                'id' => 390,
                'state_name' => 'Rajbari',
                'country_id' => 18,
            ),
            390 => 
            array (
                'id' => 391,
                'state_name' => 'Rajshahi',
                'country_id' => 18,
            ),
            391 => 
            array (
                'id' => 392,
                'state_name' => 'Rangamati',
                'country_id' => 18,
            ),
            392 => 
            array (
                'id' => 393,
                'state_name' => 'Rangpur',
                'country_id' => 18,
            ),
            393 => 
            array (
                'id' => 394,
                'state_name' => 'Satkhira',
                'country_id' => 18,
            ),
            394 => 
            array (
                'id' => 395,
                'state_name' => 'Shariatpur',
                'country_id' => 18,
            ),
            395 => 
            array (
                'id' => 396,
                'state_name' => 'Sherpur',
                'country_id' => 18,
            ),
            396 => 
            array (
                'id' => 397,
                'state_name' => 'Silhat',
                'country_id' => 18,
            ),
            397 => 
            array (
                'id' => 398,
                'state_name' => 'Sirajganj',
                'country_id' => 18,
            ),
            398 => 
            array (
                'id' => 399,
                'state_name' => 'Sunamganj',
                'country_id' => 18,
            ),
            399 => 
            array (
                'id' => 400,
                'state_name' => 'Tangayal',
                'country_id' => 18,
            ),
            400 => 
            array (
                'id' => 401,
                'state_name' => 'Thakurgaon',
                'country_id' => 18,
            ),
            401 => 
            array (
                'id' => 402,
                'state_name' => 'Christ Church',
                'country_id' => 19,
            ),
            402 => 
            array (
                'id' => 403,
                'state_name' => 'Saint Andrew',
                'country_id' => 19,
            ),
            403 => 
            array (
                'id' => 404,
                'state_name' => 'Saint George',
                'country_id' => 19,
            ),
            404 => 
            array (
                'id' => 405,
                'state_name' => 'Saint James',
                'country_id' => 19,
            ),
            405 => 
            array (
                'id' => 406,
                'state_name' => 'Saint John',
                'country_id' => 19,
            ),
            406 => 
            array (
                'id' => 407,
                'state_name' => 'Saint Joseph',
                'country_id' => 19,
            ),
            407 => 
            array (
                'id' => 408,
                'state_name' => 'Saint Lucy',
                'country_id' => 19,
            ),
            408 => 
            array (
                'id' => 409,
                'state_name' => 'Saint Michael',
                'country_id' => 19,
            ),
            409 => 
            array (
                'id' => 410,
                'state_name' => 'Saint Peter',
                'country_id' => 19,
            ),
            410 => 
            array (
                'id' => 411,
                'state_name' => 'Saint Philip',
                'country_id' => 19,
            ),
            411 => 
            array (
                'id' => 412,
                'state_name' => 'Saint Thomas',
                'country_id' => 19,
            ),
            412 => 
            array (
                'id' => 413,
                'state_name' => 'Brest',
                'country_id' => 20,
            ),
            413 => 
            array (
                'id' => 414,
                'state_name' => 'Homjel\'',
                'country_id' => 20,
            ),
            414 => 
            array (
                'id' => 415,
                'state_name' => 'Hrodna',
                'country_id' => 20,
            ),
            415 => 
            array (
                'id' => 416,
                'state_name' => 'Mahiljow',
                'country_id' => 20,
            ),
            416 => 
            array (
                'id' => 417,
                'state_name' => 'Mahilyowskaya Voblasts',
                'country_id' => 20,
            ),
            417 => 
            array (
                'id' => 418,
                'state_name' => 'Minsk',
                'country_id' => 20,
            ),
            418 => 
            array (
                'id' => 419,
                'state_name' => 'Minskaja Voblasts\'',
                'country_id' => 20,
            ),
            419 => 
            array (
                'id' => 420,
                'state_name' => 'Petrik',
                'country_id' => 20,
            ),
            420 => 
            array (
                'id' => 421,
                'state_name' => 'Vicebsk',
                'country_id' => 20,
            ),
            421 => 
            array (
                'id' => 422,
                'state_name' => 'Antwerpen',
                'country_id' => 21,
            ),
            422 => 
            array (
                'id' => 423,
                'state_name' => 'Berchem',
                'country_id' => 21,
            ),
            423 => 
            array (
                'id' => 424,
                'state_name' => 'Brabant',
                'country_id' => 21,
            ),
            424 => 
            array (
                'id' => 425,
                'state_name' => 'Brabant Wallon',
                'country_id' => 21,
            ),
            425 => 
            array (
                'id' => 426,
                'state_name' => 'Brussel',
                'country_id' => 21,
            ),
            426 => 
            array (
                'id' => 427,
                'state_name' => 'East Flanders',
                'country_id' => 21,
            ),
            427 => 
            array (
                'id' => 428,
                'state_name' => 'Hainaut',
                'country_id' => 21,
            ),
            428 => 
            array (
                'id' => 429,
                'state_name' => 'Liege',
                'country_id' => 21,
            ),
            429 => 
            array (
                'id' => 430,
                'state_name' => 'Limburg',
                'country_id' => 21,
            ),
            430 => 
            array (
                'id' => 431,
                'state_name' => 'Luxembourg',
                'country_id' => 21,
            ),
            431 => 
            array (
                'id' => 432,
                'state_name' => 'Namur',
                'country_id' => 21,
            ),
            432 => 
            array (
                'id' => 433,
                'state_name' => 'Ontario',
                'country_id' => 21,
            ),
            433 => 
            array (
                'id' => 434,
                'state_name' => 'Oost-Vlaanderen',
                'country_id' => 21,
            ),
            434 => 
            array (
                'id' => 435,
                'state_name' => 'Provincie Brabant',
                'country_id' => 21,
            ),
            435 => 
            array (
                'id' => 436,
                'state_name' => 'Vlaams-Brabant',
                'country_id' => 21,
            ),
            436 => 
            array (
                'id' => 437,
                'state_name' => 'Wallonne',
                'country_id' => 21,
            ),
            437 => 
            array (
                'id' => 438,
                'state_name' => 'West-Vlaanderen',
                'country_id' => 21,
            ),
            438 => 
            array (
                'id' => 439,
                'state_name' => 'Belize',
                'country_id' => 22,
            ),
            439 => 
            array (
                'id' => 440,
                'state_name' => 'Cayo',
                'country_id' => 22,
            ),
            440 => 
            array (
                'id' => 441,
                'state_name' => 'Corozal',
                'country_id' => 22,
            ),
            441 => 
            array (
                'id' => 442,
                'state_name' => 'Orange Walk',
                'country_id' => 22,
            ),
            442 => 
            array (
                'id' => 443,
                'state_name' => 'Stann Creek',
                'country_id' => 22,
            ),
            443 => 
            array (
                'id' => 444,
                'state_name' => 'Toledo',
                'country_id' => 22,
            ),
            444 => 
            array (
                'id' => 445,
                'state_name' => 'Alibori',
                'country_id' => 23,
            ),
            445 => 
            array (
                'id' => 446,
                'state_name' => 'Atacora',
                'country_id' => 23,
            ),
            446 => 
            array (
                'id' => 447,
                'state_name' => 'Atlantique',
                'country_id' => 23,
            ),
            447 => 
            array (
                'id' => 448,
                'state_name' => 'Borgou',
                'country_id' => 23,
            ),
            448 => 
            array (
                'id' => 449,
                'state_name' => 'Collines',
                'country_id' => 23,
            ),
            449 => 
            array (
                'id' => 450,
                'state_name' => 'Couffo',
                'country_id' => 23,
            ),
            450 => 
            array (
                'id' => 451,
                'state_name' => 'Donga',
                'country_id' => 23,
            ),
            451 => 
            array (
                'id' => 452,
                'state_name' => 'Littoral',
                'country_id' => 23,
            ),
            452 => 
            array (
                'id' => 453,
                'state_name' => 'Mono',
                'country_id' => 23,
            ),
            453 => 
            array (
                'id' => 454,
                'state_name' => 'Oueme',
                'country_id' => 23,
            ),
            454 => 
            array (
                'id' => 455,
                'state_name' => 'Plateau',
                'country_id' => 23,
            ),
            455 => 
            array (
                'id' => 456,
                'state_name' => 'Zou',
                'country_id' => 23,
            ),
            456 => 
            array (
                'id' => 457,
                'state_name' => 'Hamilton',
                'country_id' => 24,
            ),
            457 => 
            array (
                'id' => 458,
                'state_name' => 'Saint George',
                'country_id' => 24,
            ),
            458 => 
            array (
                'id' => 459,
                'state_name' => 'Bumthang',
                'country_id' => 25,
            ),
            459 => 
            array (
                'id' => 460,
                'state_name' => 'Chhukha',
                'country_id' => 25,
            ),
            460 => 
            array (
                'id' => 461,
                'state_name' => 'Chirang',
                'country_id' => 25,
            ),
            461 => 
            array (
                'id' => 462,
                'state_name' => 'Daga',
                'country_id' => 25,
            ),
            462 => 
            array (
                'id' => 463,
                'state_name' => 'Geylegphug',
                'country_id' => 25,
            ),
            463 => 
            array (
                'id' => 464,
                'state_name' => 'Ha',
                'country_id' => 25,
            ),
            464 => 
            array (
                'id' => 465,
                'state_name' => 'Lhuntshi',
                'country_id' => 25,
            ),
            465 => 
            array (
                'id' => 466,
                'state_name' => 'Mongar',
                'country_id' => 25,
            ),
            466 => 
            array (
                'id' => 467,
                'state_name' => 'Pemagatsel',
                'country_id' => 25,
            ),
            467 => 
            array (
                'id' => 468,
                'state_name' => 'Punakha',
                'country_id' => 25,
            ),
            468 => 
            array (
                'id' => 469,
                'state_name' => 'Rinpung',
                'country_id' => 25,
            ),
            469 => 
            array (
                'id' => 470,
                'state_name' => 'Samchi',
                'country_id' => 25,
            ),
            470 => 
            array (
                'id' => 471,
                'state_name' => 'Samdrup Jongkhar',
                'country_id' => 25,
            ),
            471 => 
            array (
                'id' => 472,
                'state_name' => 'Shemgang',
                'country_id' => 25,
            ),
            472 => 
            array (
                'id' => 473,
                'state_name' => 'Tashigang',
                'country_id' => 25,
            ),
            473 => 
            array (
                'id' => 474,
                'state_name' => 'Timphu',
                'country_id' => 25,
            ),
            474 => 
            array (
                'id' => 475,
                'state_name' => 'Tongsa',
                'country_id' => 25,
            ),
            475 => 
            array (
                'id' => 476,
                'state_name' => 'Wangdiphodrang',
                'country_id' => 25,
            ),
            476 => 
            array (
                'id' => 477,
                'state_name' => 'Beni',
                'country_id' => 26,
            ),
            477 => 
            array (
                'id' => 478,
                'state_name' => 'Chuquisaca',
                'country_id' => 26,
            ),
            478 => 
            array (
                'id' => 479,
                'state_name' => 'Cochabamba',
                'country_id' => 26,
            ),
            479 => 
            array (
                'id' => 480,
                'state_name' => 'La Paz',
                'country_id' => 26,
            ),
            480 => 
            array (
                'id' => 481,
                'state_name' => 'Oruro',
                'country_id' => 26,
            ),
            481 => 
            array (
                'id' => 482,
                'state_name' => 'Pando',
                'country_id' => 26,
            ),
            482 => 
            array (
                'id' => 483,
                'state_name' => 'Potosi',
                'country_id' => 26,
            ),
            483 => 
            array (
                'id' => 484,
                'state_name' => 'Santa Cruz',
                'country_id' => 26,
            ),
            484 => 
            array (
                'id' => 485,
                'state_name' => 'Tarija',
                'country_id' => 26,
            ),
            485 => 
            array (
                'id' => 486,
                'state_name' => 'Federacija Bosna i Hercegovina',
                'country_id' => 27,
            ),
            486 => 
            array (
                'id' => 487,
                'state_name' => 'Republika Srpska',
                'country_id' => 27,
            ),
            487 => 
            array (
                'id' => 488,
                'state_name' => 'Central Bobonong',
                'country_id' => 28,
            ),
            488 => 
            array (
                'id' => 489,
                'state_name' => 'Central Boteti',
                'country_id' => 28,
            ),
            489 => 
            array (
                'id' => 490,
                'state_name' => 'Central Mahalapye',
                'country_id' => 28,
            ),
            490 => 
            array (
                'id' => 491,
                'state_name' => 'Central Serowe-Palapye',
                'country_id' => 28,
            ),
            491 => 
            array (
                'id' => 492,
                'state_name' => 'Central Tutume',
                'country_id' => 28,
            ),
            492 => 
            array (
                'id' => 493,
                'state_name' => 'Chobe',
                'country_id' => 28,
            ),
            493 => 
            array (
                'id' => 494,
                'state_name' => 'Francistown',
                'country_id' => 28,
            ),
            494 => 
            array (
                'id' => 495,
                'state_name' => 'Gaborone',
                'country_id' => 28,
            ),
            495 => 
            array (
                'id' => 496,
                'state_name' => 'Ghanzi',
                'country_id' => 28,
            ),
            496 => 
            array (
                'id' => 497,
                'state_name' => 'Jwaneng',
                'country_id' => 28,
            ),
            497 => 
            array (
                'id' => 498,
                'state_name' => 'Kgalagadi North',
                'country_id' => 28,
            ),
            498 => 
            array (
                'id' => 499,
                'state_name' => 'Kgalagadi South',
                'country_id' => 28,
            ),
            499 => 
            array (
                'id' => 500,
                'state_name' => 'Kgatleng',
                'country_id' => 28,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 501,
                'state_name' => 'Kweneng',
                'country_id' => 28,
            ),
            1 => 
            array (
                'id' => 502,
                'state_name' => 'Lobatse',
                'country_id' => 28,
            ),
            2 => 
            array (
                'id' => 503,
                'state_name' => 'Ngamiland',
                'country_id' => 28,
            ),
            3 => 
            array (
                'id' => 504,
                'state_name' => 'Ngwaketse',
                'country_id' => 28,
            ),
            4 => 
            array (
                'id' => 505,
                'state_name' => 'North East',
                'country_id' => 28,
            ),
            5 => 
            array (
                'id' => 506,
                'state_name' => 'Okavango',
                'country_id' => 28,
            ),
            6 => 
            array (
                'id' => 507,
                'state_name' => 'Orapa',
                'country_id' => 28,
            ),
            7 => 
            array (
                'id' => 508,
                'state_name' => 'Selibe Phikwe',
                'country_id' => 28,
            ),
            8 => 
            array (
                'id' => 509,
                'state_name' => 'South East',
                'country_id' => 28,
            ),
            9 => 
            array (
                'id' => 510,
                'state_name' => 'Sowa',
                'country_id' => 28,
            ),
            10 => 
            array (
                'id' => 511,
                'state_name' => 'Bouvet Island',
                'country_id' => 29,
            ),
            11 => 
            array (
                'id' => 512,
                'state_name' => 'Acre',
                'country_id' => 30,
            ),
            12 => 
            array (
                'id' => 513,
                'state_name' => 'Alagoas',
                'country_id' => 30,
            ),
            13 => 
            array (
                'id' => 514,
                'state_name' => 'Amapa',
                'country_id' => 30,
            ),
            14 => 
            array (
                'id' => 515,
                'state_name' => 'Amazonas',
                'country_id' => 30,
            ),
            15 => 
            array (
                'id' => 516,
                'state_name' => 'Bahia',
                'country_id' => 30,
            ),
            16 => 
            array (
                'id' => 517,
                'state_name' => 'Ceara',
                'country_id' => 30,
            ),
            17 => 
            array (
                'id' => 518,
                'state_name' => 'Distrito Federal',
                'country_id' => 30,
            ),
            18 => 
            array (
                'id' => 519,
                'state_name' => 'Espirito Santo',
                'country_id' => 30,
            ),
            19 => 
            array (
                'id' => 520,
                'state_name' => 'Estado de Sao Paulo',
                'country_id' => 30,
            ),
            20 => 
            array (
                'id' => 521,
                'state_name' => 'Goias',
                'country_id' => 30,
            ),
            21 => 
            array (
                'id' => 522,
                'state_name' => 'Maranhao',
                'country_id' => 30,
            ),
            22 => 
            array (
                'id' => 523,
                'state_name' => 'Mato Grosso',
                'country_id' => 30,
            ),
            23 => 
            array (
                'id' => 524,
                'state_name' => 'Mato Grosso do Sul',
                'country_id' => 30,
            ),
            24 => 
            array (
                'id' => 525,
                'state_name' => 'Minas Gerais',
                'country_id' => 30,
            ),
            25 => 
            array (
                'id' => 526,
                'state_name' => 'Para',
                'country_id' => 30,
            ),
            26 => 
            array (
                'id' => 527,
                'state_name' => 'Paraiba',
                'country_id' => 30,
            ),
            27 => 
            array (
                'id' => 528,
                'state_name' => 'Parana',
                'country_id' => 30,
            ),
            28 => 
            array (
                'id' => 529,
                'state_name' => 'Pernambuco',
                'country_id' => 30,
            ),
            29 => 
            array (
                'id' => 530,
                'state_name' => 'Piaui',
                'country_id' => 30,
            ),
            30 => 
            array (
                'id' => 531,
                'state_name' => 'Rio Grande do Norte',
                'country_id' => 30,
            ),
            31 => 
            array (
                'id' => 532,
                'state_name' => 'Rio Grande do Sul',
                'country_id' => 30,
            ),
            32 => 
            array (
                'id' => 533,
                'state_name' => 'Rio de Janeiro',
                'country_id' => 30,
            ),
            33 => 
            array (
                'id' => 534,
                'state_name' => 'Rondonia',
                'country_id' => 30,
            ),
            34 => 
            array (
                'id' => 535,
                'state_name' => 'Roraima',
                'country_id' => 30,
            ),
            35 => 
            array (
                'id' => 536,
                'state_name' => 'Santa Catarina',
                'country_id' => 30,
            ),
            36 => 
            array (
                'id' => 537,
                'state_name' => 'Sao Paulo',
                'country_id' => 30,
            ),
            37 => 
            array (
                'id' => 538,
                'state_name' => 'Sergipe',
                'country_id' => 30,
            ),
            38 => 
            array (
                'id' => 539,
                'state_name' => 'Tocantins',
                'country_id' => 30,
            ),
            39 => 
            array (
                'id' => 540,
                'state_name' => 'British Indian Ocean Territory',
                'country_id' => 31,
            ),
            40 => 
            array (
                'id' => 541,
                'state_name' => 'Belait',
                'country_id' => 32,
            ),
            41 => 
            array (
                'id' => 542,
                'state_name' => 'Brunei-Muara',
                'country_id' => 32,
            ),
            42 => 
            array (
                'id' => 543,
                'state_name' => 'Temburong',
                'country_id' => 32,
            ),
            43 => 
            array (
                'id' => 544,
                'state_name' => 'Tutong',
                'country_id' => 32,
            ),
            44 => 
            array (
                'id' => 545,
                'state_name' => 'Blagoevgrad',
                'country_id' => 33,
            ),
            45 => 
            array (
                'id' => 546,
                'state_name' => 'Burgas',
                'country_id' => 33,
            ),
            46 => 
            array (
                'id' => 547,
                'state_name' => 'Dobrich',
                'country_id' => 33,
            ),
            47 => 
            array (
                'id' => 548,
                'state_name' => 'Gabrovo',
                'country_id' => 33,
            ),
            48 => 
            array (
                'id' => 549,
                'state_name' => 'Haskovo',
                'country_id' => 33,
            ),
            49 => 
            array (
                'id' => 550,
                'state_name' => 'Jambol',
                'country_id' => 33,
            ),
            50 => 
            array (
                'id' => 551,
                'state_name' => 'Kardzhali',
                'country_id' => 33,
            ),
            51 => 
            array (
                'id' => 552,
                'state_name' => 'Kjustendil',
                'country_id' => 33,
            ),
            52 => 
            array (
                'id' => 553,
                'state_name' => 'Lovech',
                'country_id' => 33,
            ),
            53 => 
            array (
                'id' => 554,
                'state_name' => 'Montana',
                'country_id' => 33,
            ),
            54 => 
            array (
                'id' => 555,
                'state_name' => 'Oblast Sofiya-Grad',
                'country_id' => 33,
            ),
            55 => 
            array (
                'id' => 556,
                'state_name' => 'Pazardzhik',
                'country_id' => 33,
            ),
            56 => 
            array (
                'id' => 557,
                'state_name' => 'Pernik',
                'country_id' => 33,
            ),
            57 => 
            array (
                'id' => 558,
                'state_name' => 'Pleven',
                'country_id' => 33,
            ),
            58 => 
            array (
                'id' => 559,
                'state_name' => 'Plovdiv',
                'country_id' => 33,
            ),
            59 => 
            array (
                'id' => 560,
                'state_name' => 'Razgrad',
                'country_id' => 33,
            ),
            60 => 
            array (
                'id' => 561,
                'state_name' => 'Ruse',
                'country_id' => 33,
            ),
            61 => 
            array (
                'id' => 562,
                'state_name' => 'Shumen',
                'country_id' => 33,
            ),
            62 => 
            array (
                'id' => 563,
                'state_name' => 'Silistra',
                'country_id' => 33,
            ),
            63 => 
            array (
                'id' => 564,
                'state_name' => 'Sliven',
                'country_id' => 33,
            ),
            64 => 
            array (
                'id' => 565,
                'state_name' => 'Smoljan',
                'country_id' => 33,
            ),
            65 => 
            array (
                'id' => 566,
                'state_name' => 'Sofija grad',
                'country_id' => 33,
            ),
            66 => 
            array (
                'id' => 567,
                'state_name' => 'Sofijska oblast',
                'country_id' => 33,
            ),
            67 => 
            array (
                'id' => 568,
                'state_name' => 'Stara Zagora',
                'country_id' => 33,
            ),
            68 => 
            array (
                'id' => 569,
                'state_name' => 'Targovishte',
                'country_id' => 33,
            ),
            69 => 
            array (
                'id' => 570,
                'state_name' => 'Varna',
                'country_id' => 33,
            ),
            70 => 
            array (
                'id' => 571,
                'state_name' => 'Veliko Tarnovo',
                'country_id' => 33,
            ),
            71 => 
            array (
                'id' => 572,
                'state_name' => 'Vidin',
                'country_id' => 33,
            ),
            72 => 
            array (
                'id' => 573,
                'state_name' => 'Vraca',
                'country_id' => 33,
            ),
            73 => 
            array (
                'id' => 574,
                'state_name' => 'Yablaniza',
                'country_id' => 33,
            ),
            74 => 
            array (
                'id' => 575,
                'state_name' => 'Bale',
                'country_id' => 34,
            ),
            75 => 
            array (
                'id' => 576,
                'state_name' => 'Bam',
                'country_id' => 34,
            ),
            76 => 
            array (
                'id' => 577,
                'state_name' => 'Bazega',
                'country_id' => 34,
            ),
            77 => 
            array (
                'id' => 578,
                'state_name' => 'Bougouriba',
                'country_id' => 34,
            ),
            78 => 
            array (
                'id' => 579,
                'state_name' => 'Boulgou',
                'country_id' => 34,
            ),
            79 => 
            array (
                'id' => 580,
                'state_name' => 'Boulkiemde',
                'country_id' => 34,
            ),
            80 => 
            array (
                'id' => 581,
                'state_name' => 'Comoe',
                'country_id' => 34,
            ),
            81 => 
            array (
                'id' => 582,
                'state_name' => 'Ganzourgou',
                'country_id' => 34,
            ),
            82 => 
            array (
                'id' => 583,
                'state_name' => 'Gnagna',
                'country_id' => 34,
            ),
            83 => 
            array (
                'id' => 584,
                'state_name' => 'Gourma',
                'country_id' => 34,
            ),
            84 => 
            array (
                'id' => 585,
                'state_name' => 'Houet',
                'country_id' => 34,
            ),
            85 => 
            array (
                'id' => 586,
                'state_name' => 'Ioba',
                'country_id' => 34,
            ),
            86 => 
            array (
                'id' => 587,
                'state_name' => 'Kadiogo',
                'country_id' => 34,
            ),
            87 => 
            array (
                'id' => 588,
                'state_name' => 'Kenedougou',
                'country_id' => 34,
            ),
            88 => 
            array (
                'id' => 589,
                'state_name' => 'Komandjari',
                'country_id' => 34,
            ),
            89 => 
            array (
                'id' => 590,
                'state_name' => 'Kompienga',
                'country_id' => 34,
            ),
            90 => 
            array (
                'id' => 591,
                'state_name' => 'Kossi',
                'country_id' => 34,
            ),
            91 => 
            array (
                'id' => 592,
                'state_name' => 'Kouritenga',
                'country_id' => 34,
            ),
            92 => 
            array (
                'id' => 593,
                'state_name' => 'Kourweogo',
                'country_id' => 34,
            ),
            93 => 
            array (
                'id' => 594,
                'state_name' => 'Leraba',
                'country_id' => 34,
            ),
            94 => 
            array (
                'id' => 595,
                'state_name' => 'Mouhoun',
                'country_id' => 34,
            ),
            95 => 
            array (
                'id' => 596,
                'state_name' => 'Nahouri',
                'country_id' => 34,
            ),
            96 => 
            array (
                'id' => 597,
                'state_name' => 'Namentenga',
                'country_id' => 34,
            ),
            97 => 
            array (
                'id' => 598,
                'state_name' => 'Noumbiel',
                'country_id' => 34,
            ),
            98 => 
            array (
                'id' => 599,
                'state_name' => 'Oubritenga',
                'country_id' => 34,
            ),
            99 => 
            array (
                'id' => 600,
                'state_name' => 'Oudalan',
                'country_id' => 34,
            ),
            100 => 
            array (
                'id' => 601,
                'state_name' => 'Passore',
                'country_id' => 34,
            ),
            101 => 
            array (
                'id' => 602,
                'state_name' => 'Poni',
                'country_id' => 34,
            ),
            102 => 
            array (
                'id' => 603,
                'state_name' => 'Sanguie',
                'country_id' => 34,
            ),
            103 => 
            array (
                'id' => 604,
                'state_name' => 'Sanmatenga',
                'country_id' => 34,
            ),
            104 => 
            array (
                'id' => 605,
                'state_name' => 'Seno',
                'country_id' => 34,
            ),
            105 => 
            array (
                'id' => 606,
                'state_name' => 'Sissili',
                'country_id' => 34,
            ),
            106 => 
            array (
                'id' => 607,
                'state_name' => 'Soum',
                'country_id' => 34,
            ),
            107 => 
            array (
                'id' => 608,
                'state_name' => 'Sourou',
                'country_id' => 34,
            ),
            108 => 
            array (
                'id' => 609,
                'state_name' => 'Tapoa',
                'country_id' => 34,
            ),
            109 => 
            array (
                'id' => 610,
                'state_name' => 'Tuy',
                'country_id' => 34,
            ),
            110 => 
            array (
                'id' => 611,
                'state_name' => 'Yatenga',
                'country_id' => 34,
            ),
            111 => 
            array (
                'id' => 612,
                'state_name' => 'Zondoma',
                'country_id' => 34,
            ),
            112 => 
            array (
                'id' => 613,
                'state_name' => 'Zoundweogo',
                'country_id' => 34,
            ),
            113 => 
            array (
                'id' => 614,
                'state_name' => 'Bubanza',
                'country_id' => 35,
            ),
            114 => 
            array (
                'id' => 615,
                'state_name' => 'Bujumbura',
                'country_id' => 35,
            ),
            115 => 
            array (
                'id' => 616,
                'state_name' => 'Bururi',
                'country_id' => 35,
            ),
            116 => 
            array (
                'id' => 617,
                'state_name' => 'Cankuzo',
                'country_id' => 35,
            ),
            117 => 
            array (
                'id' => 618,
                'state_name' => 'Cibitoke',
                'country_id' => 35,
            ),
            118 => 
            array (
                'id' => 619,
                'state_name' => 'Gitega',
                'country_id' => 35,
            ),
            119 => 
            array (
                'id' => 620,
                'state_name' => 'Karuzi',
                'country_id' => 35,
            ),
            120 => 
            array (
                'id' => 621,
                'state_name' => 'Kayanza',
                'country_id' => 35,
            ),
            121 => 
            array (
                'id' => 622,
                'state_name' => 'Kirundo',
                'country_id' => 35,
            ),
            122 => 
            array (
                'id' => 623,
                'state_name' => 'Makamba',
                'country_id' => 35,
            ),
            123 => 
            array (
                'id' => 624,
                'state_name' => 'Muramvya',
                'country_id' => 35,
            ),
            124 => 
            array (
                'id' => 625,
                'state_name' => 'Muyinga',
                'country_id' => 35,
            ),
            125 => 
            array (
                'id' => 626,
                'state_name' => 'Ngozi',
                'country_id' => 35,
            ),
            126 => 
            array (
                'id' => 627,
                'state_name' => 'Rutana',
                'country_id' => 35,
            ),
            127 => 
            array (
                'id' => 628,
                'state_name' => 'Ruyigi',
                'country_id' => 35,
            ),
            128 => 
            array (
                'id' => 629,
                'state_name' => 'Banteay Mean Chey',
                'country_id' => 36,
            ),
            129 => 
            array (
                'id' => 630,
                'state_name' => 'Bat Dambang',
                'country_id' => 36,
            ),
            130 => 
            array (
                'id' => 631,
                'state_name' => 'Kampong Cham',
                'country_id' => 36,
            ),
            131 => 
            array (
                'id' => 632,
                'state_name' => 'Kampong Chhnang',
                'country_id' => 36,
            ),
            132 => 
            array (
                'id' => 633,
                'state_name' => 'Kampong Spoeu',
                'country_id' => 36,
            ),
            133 => 
            array (
                'id' => 634,
                'state_name' => 'Kampong Thum',
                'country_id' => 36,
            ),
            134 => 
            array (
                'id' => 635,
                'state_name' => 'Kampot',
                'country_id' => 36,
            ),
            135 => 
            array (
                'id' => 636,
                'state_name' => 'Kandal',
                'country_id' => 36,
            ),
            136 => 
            array (
                'id' => 637,
                'state_name' => 'Kaoh Kong',
                'country_id' => 36,
            ),
            137 => 
            array (
                'id' => 638,
                'state_name' => 'Kracheh',
                'country_id' => 36,
            ),
            138 => 
            array (
                'id' => 639,
                'state_name' => 'Krong Kaeb',
                'country_id' => 36,
            ),
            139 => 
            array (
                'id' => 640,
                'state_name' => 'Krong Pailin',
                'country_id' => 36,
            ),
            140 => 
            array (
                'id' => 641,
                'state_name' => 'Krong Preah Sihanouk',
                'country_id' => 36,
            ),
            141 => 
            array (
                'id' => 642,
                'state_name' => 'Mondol Kiri',
                'country_id' => 36,
            ),
            142 => 
            array (
                'id' => 643,
                'state_name' => 'Otdar Mean Chey',
                'country_id' => 36,
            ),
            143 => 
            array (
                'id' => 644,
                'state_name' => 'Phnum Penh',
                'country_id' => 36,
            ),
            144 => 
            array (
                'id' => 645,
                'state_name' => 'Pousat',
                'country_id' => 36,
            ),
            145 => 
            array (
                'id' => 646,
                'state_name' => 'Preah Vihear',
                'country_id' => 36,
            ),
            146 => 
            array (
                'id' => 647,
                'state_name' => 'Prey Veaeng',
                'country_id' => 36,
            ),
            147 => 
            array (
                'id' => 648,
                'state_name' => 'Rotanak Kiri',
                'country_id' => 36,
            ),
            148 => 
            array (
                'id' => 649,
                'state_name' => 'Siem Reab',
                'country_id' => 36,
            ),
            149 => 
            array (
                'id' => 650,
                'state_name' => 'Stueng Traeng',
                'country_id' => 36,
            ),
            150 => 
            array (
                'id' => 651,
                'state_name' => 'Svay Rieng',
                'country_id' => 36,
            ),
            151 => 
            array (
                'id' => 652,
                'state_name' => 'Takaev',
                'country_id' => 36,
            ),
            152 => 
            array (
                'id' => 653,
                'state_name' => 'Adamaoua',
                'country_id' => 37,
            ),
            153 => 
            array (
                'id' => 654,
                'state_name' => 'Centre',
                'country_id' => 37,
            ),
            154 => 
            array (
                'id' => 655,
                'state_name' => 'Est',
                'country_id' => 37,
            ),
            155 => 
            array (
                'id' => 656,
                'state_name' => 'Littoral',
                'country_id' => 37,
            ),
            156 => 
            array (
                'id' => 657,
                'state_name' => 'Nord',
                'country_id' => 37,
            ),
            157 => 
            array (
                'id' => 658,
                'state_name' => 'Nord Extreme',
                'country_id' => 37,
            ),
            158 => 
            array (
                'id' => 659,
                'state_name' => 'Nordouest',
                'country_id' => 37,
            ),
            159 => 
            array (
                'id' => 660,
                'state_name' => 'Ouest',
                'country_id' => 37,
            ),
            160 => 
            array (
                'id' => 661,
                'state_name' => 'Sud',
                'country_id' => 37,
            ),
            161 => 
            array (
                'id' => 662,
                'state_name' => 'Sudouest',
                'country_id' => 37,
            ),
            162 => 
            array (
                'id' => 663,
                'state_name' => 'Alberta',
                'country_id' => 38,
            ),
            163 => 
            array (
                'id' => 664,
                'state_name' => 'British Columbia',
                'country_id' => 38,
            ),
            164 => 
            array (
                'id' => 665,
                'state_name' => 'Manitoba',
                'country_id' => 38,
            ),
            165 => 
            array (
                'id' => 666,
                'state_name' => 'New Brunswick',
                'country_id' => 38,
            ),
            166 => 
            array (
                'id' => 667,
                'state_name' => 'Newfoundland and Labrador',
                'country_id' => 38,
            ),
            167 => 
            array (
                'id' => 668,
                'state_name' => 'Northwest Territories',
                'country_id' => 38,
            ),
            168 => 
            array (
                'id' => 669,
                'state_name' => 'Nova Scotia',
                'country_id' => 38,
            ),
            169 => 
            array (
                'id' => 670,
                'state_name' => 'Nunavut',
                'country_id' => 38,
            ),
            170 => 
            array (
                'id' => 671,
                'state_name' => 'Ontario',
                'country_id' => 38,
            ),
            171 => 
            array (
                'id' => 672,
                'state_name' => 'Prince Edward Island',
                'country_id' => 38,
            ),
            172 => 
            array (
                'id' => 673,
                'state_name' => 'Quebec',
                'country_id' => 38,
            ),
            173 => 
            array (
                'id' => 674,
                'state_name' => 'Saskatchewan',
                'country_id' => 38,
            ),
            174 => 
            array (
                'id' => 675,
                'state_name' => 'Yukon',
                'country_id' => 38,
            ),
            175 => 
            array (
                'id' => 676,
                'state_name' => 'Boavista',
                'country_id' => 39,
            ),
            176 => 
            array (
                'id' => 677,
                'state_name' => 'Brava',
                'country_id' => 39,
            ),
            177 => 
            array (
                'id' => 678,
                'state_name' => 'Fogo',
                'country_id' => 39,
            ),
            178 => 
            array (
                'id' => 679,
                'state_name' => 'Maio',
                'country_id' => 39,
            ),
            179 => 
            array (
                'id' => 680,
                'state_name' => 'Sal',
                'country_id' => 39,
            ),
            180 => 
            array (
                'id' => 681,
                'state_name' => 'Santo Antao',
                'country_id' => 39,
            ),
            181 => 
            array (
                'id' => 682,
                'state_name' => 'Sao Nicolau',
                'country_id' => 39,
            ),
            182 => 
            array (
                'id' => 683,
                'state_name' => 'Sao Tiago',
                'country_id' => 39,
            ),
            183 => 
            array (
                'id' => 684,
                'state_name' => 'Sao Vicente',
                'country_id' => 39,
            ),
            184 => 
            array (
                'id' => 685,
                'state_name' => 'Grand Cayman',
                'country_id' => 40,
            ),
            185 => 
            array (
                'id' => 686,
                'state_name' => 'Bamingui-Bangoran',
                'country_id' => 41,
            ),
            186 => 
            array (
                'id' => 687,
                'state_name' => 'Bangui',
                'country_id' => 41,
            ),
            187 => 
            array (
                'id' => 688,
                'state_name' => 'Basse-Kotto',
                'country_id' => 41,
            ),
            188 => 
            array (
                'id' => 689,
                'state_name' => 'Haut-Mbomou',
                'country_id' => 41,
            ),
            189 => 
            array (
                'id' => 690,
                'state_name' => 'Haute-Kotto',
                'country_id' => 41,
            ),
            190 => 
            array (
                'id' => 691,
                'state_name' => 'Kemo',
                'country_id' => 41,
            ),
            191 => 
            array (
                'id' => 692,
                'state_name' => 'Lobaye',
                'country_id' => 41,
            ),
            192 => 
            array (
                'id' => 693,
                'state_name' => 'Mambere-Kadei',
                'country_id' => 41,
            ),
            193 => 
            array (
                'id' => 694,
                'state_name' => 'Mbomou',
                'country_id' => 41,
            ),
            194 => 
            array (
                'id' => 695,
                'state_name' => 'Nana-Gribizi',
                'country_id' => 41,
            ),
            195 => 
            array (
                'id' => 696,
                'state_name' => 'Nana-Mambere',
                'country_id' => 41,
            ),
            196 => 
            array (
                'id' => 697,
                'state_name' => 'Ombella Mpoko',
                'country_id' => 41,
            ),
            197 => 
            array (
                'id' => 698,
                'state_name' => 'Ouaka',
                'country_id' => 41,
            ),
            198 => 
            array (
                'id' => 699,
                'state_name' => 'Ouham',
                'country_id' => 41,
            ),
            199 => 
            array (
                'id' => 700,
                'state_name' => 'Ouham-Pende',
                'country_id' => 41,
            ),
            200 => 
            array (
                'id' => 701,
                'state_name' => 'Sangha-Mbaere',
                'country_id' => 41,
            ),
            201 => 
            array (
                'id' => 702,
                'state_name' => 'Vakaga',
                'country_id' => 41,
            ),
            202 => 
            array (
                'id' => 703,
                'state_name' => 'Batha',
                'country_id' => 42,
            ),
            203 => 
            array (
                'id' => 704,
                'state_name' => 'Biltine',
                'country_id' => 42,
            ),
            204 => 
            array (
                'id' => 705,
                'state_name' => 'Bourkou-Ennedi-Tibesti',
                'country_id' => 42,
            ),
            205 => 
            array (
                'id' => 706,
                'state_name' => 'Chari-Baguirmi',
                'country_id' => 42,
            ),
            206 => 
            array (
                'id' => 707,
                'state_name' => 'Guera',
                'country_id' => 42,
            ),
            207 => 
            array (
                'id' => 708,
                'state_name' => 'Kanem',
                'country_id' => 42,
            ),
            208 => 
            array (
                'id' => 709,
                'state_name' => 'Lac',
                'country_id' => 42,
            ),
            209 => 
            array (
                'id' => 710,
                'state_name' => 'Logone Occidental',
                'country_id' => 42,
            ),
            210 => 
            array (
                'id' => 711,
                'state_name' => 'Logone Oriental',
                'country_id' => 42,
            ),
            211 => 
            array (
                'id' => 712,
                'state_name' => 'Mayo-Kebbi',
                'country_id' => 42,
            ),
            212 => 
            array (
                'id' => 713,
                'state_name' => 'Moyen-Chari',
                'country_id' => 42,
            ),
            213 => 
            array (
                'id' => 714,
                'state_name' => 'Ouaddai',
                'country_id' => 42,
            ),
            214 => 
            array (
                'id' => 715,
                'state_name' => 'Salamat',
                'country_id' => 42,
            ),
            215 => 
            array (
                'id' => 716,
                'state_name' => 'Tandjile',
                'country_id' => 42,
            ),
            216 => 
            array (
                'id' => 717,
                'state_name' => 'Aisen',
                'country_id' => 43,
            ),
            217 => 
            array (
                'id' => 718,
                'state_name' => 'Antofagasta',
                'country_id' => 43,
            ),
            218 => 
            array (
                'id' => 719,
                'state_name' => 'Araucania',
                'country_id' => 43,
            ),
            219 => 
            array (
                'id' => 720,
                'state_name' => 'Atacama',
                'country_id' => 43,
            ),
            220 => 
            array (
                'id' => 721,
                'state_name' => 'Bio Bio',
                'country_id' => 43,
            ),
            221 => 
            array (
                'id' => 722,
                'state_name' => 'Coquimbo',
                'country_id' => 43,
            ),
            222 => 
            array (
                'id' => 723,
                'state_name' => 'Libertador General Bernardo O\'',
                'country_id' => 43,
            ),
            223 => 
            array (
                'id' => 724,
                'state_name' => 'Los Lagos',
                'country_id' => 43,
            ),
            224 => 
            array (
                'id' => 725,
                'state_name' => 'Magellanes',
                'country_id' => 43,
            ),
            225 => 
            array (
                'id' => 726,
                'state_name' => 'Maule',
                'country_id' => 43,
            ),
            226 => 
            array (
                'id' => 727,
                'state_name' => 'Metropolitana',
                'country_id' => 43,
            ),
            227 => 
            array (
                'id' => 728,
                'state_name' => 'Metropolitana de Santiago',
                'country_id' => 43,
            ),
            228 => 
            array (
                'id' => 729,
                'state_name' => 'Tarapaca',
                'country_id' => 43,
            ),
            229 => 
            array (
                'id' => 730,
                'state_name' => 'Valparaiso',
                'country_id' => 43,
            ),
            230 => 
            array (
                'id' => 731,
                'state_name' => 'Anhui',
                'country_id' => 44,
            ),
            231 => 
            array (
                'id' => 732,
                'state_name' => 'Anhui Province',
                'country_id' => 44,
            ),
            232 => 
            array (
                'id' => 733,
                'state_name' => 'Anhui Sheng',
                'country_id' => 44,
            ),
            233 => 
            array (
                'id' => 734,
                'state_name' => 'Aomen',
                'country_id' => 44,
            ),
            234 => 
            array (
                'id' => 735,
                'state_name' => 'Beijing',
                'country_id' => 44,
            ),
            235 => 
            array (
                'id' => 736,
                'state_name' => 'Beijing Shi',
                'country_id' => 44,
            ),
            236 => 
            array (
                'id' => 737,
                'state_name' => 'Chongqing',
                'country_id' => 44,
            ),
            237 => 
            array (
                'id' => 738,
                'state_name' => 'Fujian',
                'country_id' => 44,
            ),
            238 => 
            array (
                'id' => 739,
                'state_name' => 'Fujian Sheng',
                'country_id' => 44,
            ),
            239 => 
            array (
                'id' => 740,
                'state_name' => 'Gansu',
                'country_id' => 44,
            ),
            240 => 
            array (
                'id' => 741,
                'state_name' => 'Guangdong',
                'country_id' => 44,
            ),
            241 => 
            array (
                'id' => 742,
                'state_name' => 'Guangdong Sheng',
                'country_id' => 44,
            ),
            242 => 
            array (
                'id' => 743,
                'state_name' => 'Guangxi',
                'country_id' => 44,
            ),
            243 => 
            array (
                'id' => 744,
                'state_name' => 'Guizhou',
                'country_id' => 44,
            ),
            244 => 
            array (
                'id' => 745,
                'state_name' => 'Hainan',
                'country_id' => 44,
            ),
            245 => 
            array (
                'id' => 746,
                'state_name' => 'Hebei',
                'country_id' => 44,
            ),
            246 => 
            array (
                'id' => 747,
                'state_name' => 'Heilongjiang',
                'country_id' => 44,
            ),
            247 => 
            array (
                'id' => 748,
                'state_name' => 'Henan',
                'country_id' => 44,
            ),
            248 => 
            array (
                'id' => 749,
                'state_name' => 'Hubei',
                'country_id' => 44,
            ),
            249 => 
            array (
                'id' => 750,
                'state_name' => 'Hunan',
                'country_id' => 44,
            ),
            250 => 
            array (
                'id' => 751,
                'state_name' => 'Jiangsu',
                'country_id' => 44,
            ),
            251 => 
            array (
                'id' => 752,
                'state_name' => 'Jiangsu Sheng',
                'country_id' => 44,
            ),
            252 => 
            array (
                'id' => 753,
                'state_name' => 'Jiangxi',
                'country_id' => 44,
            ),
            253 => 
            array (
                'id' => 754,
                'state_name' => 'Jilin',
                'country_id' => 44,
            ),
            254 => 
            array (
                'id' => 755,
                'state_name' => 'Liaoning',
                'country_id' => 44,
            ),
            255 => 
            array (
                'id' => 756,
                'state_name' => 'Liaoning Sheng',
                'country_id' => 44,
            ),
            256 => 
            array (
                'id' => 757,
                'state_name' => 'Nei Monggol',
                'country_id' => 44,
            ),
            257 => 
            array (
                'id' => 758,
                'state_name' => 'Ningxia Hui',
                'country_id' => 44,
            ),
            258 => 
            array (
                'id' => 759,
                'state_name' => 'Qinghai',
                'country_id' => 44,
            ),
            259 => 
            array (
                'id' => 760,
                'state_name' => 'Shaanxi',
                'country_id' => 44,
            ),
            260 => 
            array (
                'id' => 761,
                'state_name' => 'Shandong',
                'country_id' => 44,
            ),
            261 => 
            array (
                'id' => 762,
                'state_name' => 'Shandong Sheng',
                'country_id' => 44,
            ),
            262 => 
            array (
                'id' => 763,
                'state_name' => 'Shanghai',
                'country_id' => 44,
            ),
            263 => 
            array (
                'id' => 764,
                'state_name' => 'Shanxi',
                'country_id' => 44,
            ),
            264 => 
            array (
                'id' => 765,
                'state_name' => 'Sichuan',
                'country_id' => 44,
            ),
            265 => 
            array (
                'id' => 766,
                'state_name' => 'Tianjin',
                'country_id' => 44,
            ),
            266 => 
            array (
                'id' => 767,
                'state_name' => 'Xianggang',
                'country_id' => 44,
            ),
            267 => 
            array (
                'id' => 768,
                'state_name' => 'Xinjiang',
                'country_id' => 44,
            ),
            268 => 
            array (
                'id' => 769,
                'state_name' => 'Xizang',
                'country_id' => 44,
            ),
            269 => 
            array (
                'id' => 770,
                'state_name' => 'Yunnan',
                'country_id' => 44,
            ),
            270 => 
            array (
                'id' => 771,
                'state_name' => 'Zhejiang',
                'country_id' => 44,
            ),
            271 => 
            array (
                'id' => 772,
                'state_name' => 'Zhejiang Sheng',
                'country_id' => 44,
            ),
            272 => 
            array (
                'id' => 773,
                'state_name' => 'Christmas Island',
                'country_id' => 45,
            ),
            273 => 
            array (
                'id' => 774,
            'state_name' => 'Cocos (Keeling) Islands',
                'country_id' => 46,
            ),
            274 => 
            array (
                'id' => 775,
                'state_name' => 'Amazonas',
                'country_id' => 47,
            ),
            275 => 
            array (
                'id' => 776,
                'state_name' => 'Antioquia',
                'country_id' => 47,
            ),
            276 => 
            array (
                'id' => 777,
                'state_name' => 'Arauca',
                'country_id' => 47,
            ),
            277 => 
            array (
                'id' => 778,
                'state_name' => 'Atlantico',
                'country_id' => 47,
            ),
            278 => 
            array (
                'id' => 779,
                'state_name' => 'Bogota',
                'country_id' => 47,
            ),
            279 => 
            array (
                'id' => 780,
                'state_name' => 'Bolivar',
                'country_id' => 47,
            ),
            280 => 
            array (
                'id' => 781,
                'state_name' => 'Boyaca',
                'country_id' => 47,
            ),
            281 => 
            array (
                'id' => 782,
                'state_name' => 'Caldas',
                'country_id' => 47,
            ),
            282 => 
            array (
                'id' => 783,
                'state_name' => 'Caqueta',
                'country_id' => 47,
            ),
            283 => 
            array (
                'id' => 784,
                'state_name' => 'Casanare',
                'country_id' => 47,
            ),
            284 => 
            array (
                'id' => 785,
                'state_name' => 'Cauca',
                'country_id' => 47,
            ),
            285 => 
            array (
                'id' => 786,
                'state_name' => 'Cesar',
                'country_id' => 47,
            ),
            286 => 
            array (
                'id' => 787,
                'state_name' => 'Choco',
                'country_id' => 47,
            ),
            287 => 
            array (
                'id' => 788,
                'state_name' => 'Cordoba',
                'country_id' => 47,
            ),
            288 => 
            array (
                'id' => 789,
                'state_name' => 'Cundinamarca',
                'country_id' => 47,
            ),
            289 => 
            array (
                'id' => 790,
                'state_name' => 'Guainia',
                'country_id' => 47,
            ),
            290 => 
            array (
                'id' => 791,
                'state_name' => 'Guaviare',
                'country_id' => 47,
            ),
            291 => 
            array (
                'id' => 792,
                'state_name' => 'Huila',
                'country_id' => 47,
            ),
            292 => 
            array (
                'id' => 793,
                'state_name' => 'La Guajira',
                'country_id' => 47,
            ),
            293 => 
            array (
                'id' => 794,
                'state_name' => 'Magdalena',
                'country_id' => 47,
            ),
            294 => 
            array (
                'id' => 795,
                'state_name' => 'Meta',
                'country_id' => 47,
            ),
            295 => 
            array (
                'id' => 796,
                'state_name' => 'Narino',
                'country_id' => 47,
            ),
            296 => 
            array (
                'id' => 797,
                'state_name' => 'Norte de Santander',
                'country_id' => 47,
            ),
            297 => 
            array (
                'id' => 798,
                'state_name' => 'Putumayo',
                'country_id' => 47,
            ),
            298 => 
            array (
                'id' => 799,
                'state_name' => 'Quindio',
                'country_id' => 47,
            ),
            299 => 
            array (
                'id' => 800,
                'state_name' => 'Risaralda',
                'country_id' => 47,
            ),
            300 => 
            array (
                'id' => 801,
                'state_name' => 'San Andres y Providencia',
                'country_id' => 47,
            ),
            301 => 
            array (
                'id' => 802,
                'state_name' => 'Santander',
                'country_id' => 47,
            ),
            302 => 
            array (
                'id' => 803,
                'state_name' => 'Sucre',
                'country_id' => 47,
            ),
            303 => 
            array (
                'id' => 804,
                'state_name' => 'Tolima',
                'country_id' => 47,
            ),
            304 => 
            array (
                'id' => 805,
                'state_name' => 'Valle del Cauca',
                'country_id' => 47,
            ),
            305 => 
            array (
                'id' => 806,
                'state_name' => 'Vaupes',
                'country_id' => 47,
            ),
            306 => 
            array (
                'id' => 807,
                'state_name' => 'Vichada',
                'country_id' => 47,
            ),
            307 => 
            array (
                'id' => 808,
                'state_name' => 'Mwali',
                'country_id' => 48,
            ),
            308 => 
            array (
                'id' => 809,
                'state_name' => 'Njazidja',
                'country_id' => 48,
            ),
            309 => 
            array (
                'id' => 810,
                'state_name' => 'Nzwani',
                'country_id' => 48,
            ),
            310 => 
            array (
                'id' => 811,
                'state_name' => 'Bouenza',
                'country_id' => 49,
            ),
            311 => 
            array (
                'id' => 812,
                'state_name' => 'Brazzaville',
                'country_id' => 49,
            ),
            312 => 
            array (
                'id' => 813,
                'state_name' => 'Cuvette',
                'country_id' => 49,
            ),
            313 => 
            array (
                'id' => 814,
                'state_name' => 'Kouilou',
                'country_id' => 49,
            ),
            314 => 
            array (
                'id' => 815,
                'state_name' => 'Lekoumou',
                'country_id' => 49,
            ),
            315 => 
            array (
                'id' => 816,
                'state_name' => 'Likouala',
                'country_id' => 49,
            ),
            316 => 
            array (
                'id' => 817,
                'state_name' => 'Niari',
                'country_id' => 49,
            ),
            317 => 
            array (
                'id' => 818,
                'state_name' => 'Plateaux',
                'country_id' => 49,
            ),
            318 => 
            array (
                'id' => 819,
                'state_name' => 'Pool',
                'country_id' => 49,
            ),
            319 => 
            array (
                'id' => 820,
                'state_name' => 'Sangha',
                'country_id' => 49,
            ),
            320 => 
            array (
                'id' => 821,
                'state_name' => 'Bandundu',
                'country_id' => 50,
            ),
            321 => 
            array (
                'id' => 822,
                'state_name' => 'Bas-Congo',
                'country_id' => 50,
            ),
            322 => 
            array (
                'id' => 823,
                'state_name' => 'Equateur',
                'country_id' => 50,
            ),
            323 => 
            array (
                'id' => 824,
                'state_name' => 'Haut-Congo',
                'country_id' => 50,
            ),
            324 => 
            array (
                'id' => 825,
                'state_name' => 'Kasai-Occidental',
                'country_id' => 50,
            ),
            325 => 
            array (
                'id' => 826,
                'state_name' => 'Kasai-Oriental',
                'country_id' => 50,
            ),
            326 => 
            array (
                'id' => 827,
                'state_name' => 'Katanga',
                'country_id' => 50,
            ),
            327 => 
            array (
                'id' => 828,
                'state_name' => 'Kinshasa',
                'country_id' => 50,
            ),
            328 => 
            array (
                'id' => 829,
                'state_name' => 'Maniema',
                'country_id' => 50,
            ),
            329 => 
            array (
                'id' => 830,
                'state_name' => 'Nord-Kivu',
                'country_id' => 50,
            ),
            330 => 
            array (
                'id' => 831,
                'state_name' => 'Sud-Kivu',
                'country_id' => 50,
            ),
            331 => 
            array (
                'id' => 832,
                'state_name' => 'Aitutaki',
                'country_id' => 51,
            ),
            332 => 
            array (
                'id' => 833,
                'state_name' => 'Atiu',
                'country_id' => 51,
            ),
            333 => 
            array (
                'id' => 834,
                'state_name' => 'Mangaia',
                'country_id' => 51,
            ),
            334 => 
            array (
                'id' => 835,
                'state_name' => 'Manihiki',
                'country_id' => 51,
            ),
            335 => 
            array (
                'id' => 836,
                'state_name' => 'Mauke',
                'country_id' => 51,
            ),
            336 => 
            array (
                'id' => 837,
                'state_name' => 'Mitiaro',
                'country_id' => 51,
            ),
            337 => 
            array (
                'id' => 838,
                'state_name' => 'Nassau',
                'country_id' => 51,
            ),
            338 => 
            array (
                'id' => 839,
                'state_name' => 'Pukapuka',
                'country_id' => 51,
            ),
            339 => 
            array (
                'id' => 840,
                'state_name' => 'Rakahanga',
                'country_id' => 51,
            ),
            340 => 
            array (
                'id' => 841,
                'state_name' => 'Rarotonga',
                'country_id' => 51,
            ),
            341 => 
            array (
                'id' => 842,
                'state_name' => 'Tongareva',
                'country_id' => 51,
            ),
            342 => 
            array (
                'id' => 843,
                'state_name' => 'Alajuela',
                'country_id' => 52,
            ),
            343 => 
            array (
                'id' => 844,
                'state_name' => 'Cartago',
                'country_id' => 52,
            ),
            344 => 
            array (
                'id' => 845,
                'state_name' => 'Guanacaste',
                'country_id' => 52,
            ),
            345 => 
            array (
                'id' => 846,
                'state_name' => 'Heredia',
                'country_id' => 52,
            ),
            346 => 
            array (
                'id' => 847,
                'state_name' => 'Limon',
                'country_id' => 52,
            ),
            347 => 
            array (
                'id' => 848,
                'state_name' => 'Puntarenas',
                'country_id' => 52,
            ),
            348 => 
            array (
                'id' => 849,
                'state_name' => 'San Jose',
                'country_id' => 52,
            ),
            349 => 
            array (
                'id' => 850,
                'state_name' => 'Abidjan',
                'country_id' => 53,
            ),
            350 => 
            array (
                'id' => 851,
                'state_name' => 'Agneby',
                'country_id' => 53,
            ),
            351 => 
            array (
                'id' => 852,
                'state_name' => 'Bafing',
                'country_id' => 53,
            ),
            352 => 
            array (
                'id' => 853,
                'state_name' => 'Denguele',
                'country_id' => 53,
            ),
            353 => 
            array (
                'id' => 854,
                'state_name' => 'Dix-huit Montagnes',
                'country_id' => 53,
            ),
            354 => 
            array (
                'id' => 855,
                'state_name' => 'Fromager',
                'country_id' => 53,
            ),
            355 => 
            array (
                'id' => 856,
                'state_name' => 'Haut-Sassandra',
                'country_id' => 53,
            ),
            356 => 
            array (
                'id' => 857,
                'state_name' => 'Lacs',
                'country_id' => 53,
            ),
            357 => 
            array (
                'id' => 858,
                'state_name' => 'Lagunes',
                'country_id' => 53,
            ),
            358 => 
            array (
                'id' => 859,
                'state_name' => 'Marahoue',
                'country_id' => 53,
            ),
            359 => 
            array (
                'id' => 860,
                'state_name' => 'Moyen-Cavally',
                'country_id' => 53,
            ),
            360 => 
            array (
                'id' => 861,
                'state_name' => 'Moyen-Comoe',
                'country_id' => 53,
            ),
            361 => 
            array (
                'id' => 862,
                'state_name' => 'N\'zi-Comoe',
                'country_id' => 53,
            ),
            362 => 
            array (
                'id' => 863,
                'state_name' => 'Sassandra',
                'country_id' => 53,
            ),
            363 => 
            array (
                'id' => 864,
                'state_name' => 'Savanes',
                'country_id' => 53,
            ),
            364 => 
            array (
                'id' => 865,
                'state_name' => 'Sud-Bandama',
                'country_id' => 53,
            ),
            365 => 
            array (
                'id' => 866,
                'state_name' => 'Sud-Comoe',
                'country_id' => 53,
            ),
            366 => 
            array (
                'id' => 867,
                'state_name' => 'Vallee du Bandama',
                'country_id' => 53,
            ),
            367 => 
            array (
                'id' => 868,
                'state_name' => 'Worodougou',
                'country_id' => 53,
            ),
            368 => 
            array (
                'id' => 869,
                'state_name' => 'Zanzan',
                'country_id' => 53,
            ),
            369 => 
            array (
                'id' => 870,
                'state_name' => 'Bjelovar-Bilogora',
                'country_id' => 54,
            ),
            370 => 
            array (
                'id' => 871,
                'state_name' => 'Dubrovnik-Neretva',
                'country_id' => 54,
            ),
            371 => 
            array (
                'id' => 872,
                'state_name' => 'Grad Zagreb',
                'country_id' => 54,
            ),
            372 => 
            array (
                'id' => 873,
                'state_name' => 'Istra',
                'country_id' => 54,
            ),
            373 => 
            array (
                'id' => 874,
                'state_name' => 'Karlovac',
                'country_id' => 54,
            ),
            374 => 
            array (
                'id' => 875,
                'state_name' => 'Koprivnica-Krizhevci',
                'country_id' => 54,
            ),
            375 => 
            array (
                'id' => 876,
                'state_name' => 'Krapina-Zagorje',
                'country_id' => 54,
            ),
            376 => 
            array (
                'id' => 877,
                'state_name' => 'Lika-Senj',
                'country_id' => 54,
            ),
            377 => 
            array (
                'id' => 878,
                'state_name' => 'Medhimurje',
                'country_id' => 54,
            ),
            378 => 
            array (
                'id' => 879,
                'state_name' => 'Medimurska Zupanija',
                'country_id' => 54,
            ),
            379 => 
            array (
                'id' => 880,
                'state_name' => 'Osijek-Baranja',
                'country_id' => 54,
            ),
            380 => 
            array (
                'id' => 881,
                'state_name' => 'Osjecko-Baranjska Zupanija',
                'country_id' => 54,
            ),
            381 => 
            array (
                'id' => 882,
                'state_name' => 'Pozhega-Slavonija',
                'country_id' => 54,
            ),
            382 => 
            array (
                'id' => 883,
                'state_name' => 'Primorje-Gorski Kotar',
                'country_id' => 54,
            ),
            383 => 
            array (
                'id' => 884,
                'state_name' => 'Shibenik-Knin',
                'country_id' => 54,
            ),
            384 => 
            array (
                'id' => 885,
                'state_name' => 'Sisak-Moslavina',
                'country_id' => 54,
            ),
            385 => 
            array (
                'id' => 886,
                'state_name' => 'Slavonski Brod-Posavina',
                'country_id' => 54,
            ),
            386 => 
            array (
                'id' => 887,
                'state_name' => 'Split-Dalmacija',
                'country_id' => 54,
            ),
            387 => 
            array (
                'id' => 888,
                'state_name' => 'Varazhdin',
                'country_id' => 54,
            ),
            388 => 
            array (
                'id' => 889,
                'state_name' => 'Virovitica-Podravina',
                'country_id' => 54,
            ),
            389 => 
            array (
                'id' => 890,
                'state_name' => 'Vukovar-Srijem',
                'country_id' => 54,
            ),
            390 => 
            array (
                'id' => 891,
                'state_name' => 'Zadar',
                'country_id' => 54,
            ),
            391 => 
            array (
                'id' => 892,
                'state_name' => 'Zagreb',
                'country_id' => 54,
            ),
            392 => 
            array (
                'id' => 893,
                'state_name' => 'Camaguey',
                'country_id' => 55,
            ),
            393 => 
            array (
                'id' => 894,
                'state_name' => 'Ciego de Avila',
                'country_id' => 55,
            ),
            394 => 
            array (
                'id' => 895,
                'state_name' => 'Cienfuegos',
                'country_id' => 55,
            ),
            395 => 
            array (
                'id' => 896,
                'state_name' => 'Ciudad de la Habana',
                'country_id' => 55,
            ),
            396 => 
            array (
                'id' => 897,
                'state_name' => 'Granma',
                'country_id' => 55,
            ),
            397 => 
            array (
                'id' => 898,
                'state_name' => 'Guantanamo',
                'country_id' => 55,
            ),
            398 => 
            array (
                'id' => 899,
                'state_name' => 'Habana',
                'country_id' => 55,
            ),
            399 => 
            array (
                'id' => 900,
                'state_name' => 'Holguin',
                'country_id' => 55,
            ),
            400 => 
            array (
                'id' => 901,
                'state_name' => 'Isla de la Juventud',
                'country_id' => 55,
            ),
            401 => 
            array (
                'id' => 902,
                'state_name' => 'La Habana',
                'country_id' => 55,
            ),
            402 => 
            array (
                'id' => 903,
                'state_name' => 'Las Tunas',
                'country_id' => 55,
            ),
            403 => 
            array (
                'id' => 904,
                'state_name' => 'Matanzas',
                'country_id' => 55,
            ),
            404 => 
            array (
                'id' => 905,
                'state_name' => 'Pinar del Rio',
                'country_id' => 55,
            ),
            405 => 
            array (
                'id' => 906,
                'state_name' => 'Sancti Spiritus',
                'country_id' => 55,
            ),
            406 => 
            array (
                'id' => 907,
                'state_name' => 'Santiago de Cuba',
                'country_id' => 55,
            ),
            407 => 
            array (
                'id' => 908,
                'state_name' => 'Villa Clara',
                'country_id' => 55,
            ),
            408 => 
            array (
                'id' => 909,
                'state_name' => 'Government controlled area',
                'country_id' => 56,
            ),
            409 => 
            array (
                'id' => 910,
                'state_name' => 'Limassol',
                'country_id' => 56,
            ),
            410 => 
            array (
                'id' => 911,
                'state_name' => 'Nicosia District',
                'country_id' => 56,
            ),
            411 => 
            array (
                'id' => 912,
                'state_name' => 'Paphos',
                'country_id' => 56,
            ),
            412 => 
            array (
                'id' => 913,
                'state_name' => 'Turkish controlled area',
                'country_id' => 56,
            ),
            413 => 
            array (
                'id' => 914,
                'state_name' => 'Central Bohemian',
                'country_id' => 57,
            ),
            414 => 
            array (
                'id' => 915,
                'state_name' => 'Frycovice',
                'country_id' => 57,
            ),
            415 => 
            array (
                'id' => 916,
                'state_name' => 'Jihocesky Kraj',
                'country_id' => 57,
            ),
            416 => 
            array (
                'id' => 917,
                'state_name' => 'Jihochesky',
                'country_id' => 57,
            ),
            417 => 
            array (
                'id' => 918,
                'state_name' => 'Jihomoravsky',
                'country_id' => 57,
            ),
            418 => 
            array (
                'id' => 919,
                'state_name' => 'Karlovarsky',
                'country_id' => 57,
            ),
            419 => 
            array (
                'id' => 920,
                'state_name' => 'Klecany',
                'country_id' => 57,
            ),
            420 => 
            array (
                'id' => 921,
                'state_name' => 'Kralovehradecky',
                'country_id' => 57,
            ),
            421 => 
            array (
                'id' => 922,
                'state_name' => 'Liberecky',
                'country_id' => 57,
            ),
            422 => 
            array (
                'id' => 923,
                'state_name' => 'Lipov',
                'country_id' => 57,
            ),
            423 => 
            array (
                'id' => 924,
                'state_name' => 'Moravskoslezsky',
                'country_id' => 57,
            ),
            424 => 
            array (
                'id' => 925,
                'state_name' => 'Olomoucky',
                'country_id' => 57,
            ),
            425 => 
            array (
                'id' => 926,
                'state_name' => 'Olomoucky Kraj',
                'country_id' => 57,
            ),
            426 => 
            array (
                'id' => 927,
                'state_name' => 'Pardubicky',
                'country_id' => 57,
            ),
            427 => 
            array (
                'id' => 928,
                'state_name' => 'Plzensky',
                'country_id' => 57,
            ),
            428 => 
            array (
                'id' => 929,
                'state_name' => 'Praha',
                'country_id' => 57,
            ),
            429 => 
            array (
                'id' => 930,
                'state_name' => 'Rajhrad',
                'country_id' => 57,
            ),
            430 => 
            array (
                'id' => 931,
                'state_name' => 'Smirice',
                'country_id' => 57,
            ),
            431 => 
            array (
                'id' => 932,
                'state_name' => 'South Moravian',
                'country_id' => 57,
            ),
            432 => 
            array (
                'id' => 933,
                'state_name' => 'Straz nad Nisou',
                'country_id' => 57,
            ),
            433 => 
            array (
                'id' => 934,
                'state_name' => 'Stredochesky',
                'country_id' => 57,
            ),
            434 => 
            array (
                'id' => 935,
                'state_name' => 'Unicov',
                'country_id' => 57,
            ),
            435 => 
            array (
                'id' => 936,
                'state_name' => 'Ustecky',
                'country_id' => 57,
            ),
            436 => 
            array (
                'id' => 937,
                'state_name' => 'Valletta',
                'country_id' => 57,
            ),
            437 => 
            array (
                'id' => 938,
                'state_name' => 'Velesin',
                'country_id' => 57,
            ),
            438 => 
            array (
                'id' => 939,
                'state_name' => 'Vysochina',
                'country_id' => 57,
            ),
            439 => 
            array (
                'id' => 940,
                'state_name' => 'Zlinsky',
                'country_id' => 57,
            ),
            440 => 
            array (
                'id' => 941,
                'state_name' => 'Arhus',
                'country_id' => 58,
            ),
            441 => 
            array (
                'id' => 942,
                'state_name' => 'Bornholm',
                'country_id' => 58,
            ),
            442 => 
            array (
                'id' => 943,
                'state_name' => 'Frederiksborg',
                'country_id' => 58,
            ),
            443 => 
            array (
                'id' => 944,
                'state_name' => 'Fyn',
                'country_id' => 58,
            ),
            444 => 
            array (
                'id' => 945,
                'state_name' => 'Hovedstaden',
                'country_id' => 58,
            ),
            445 => 
            array (
                'id' => 946,
                'state_name' => 'Kobenhavn',
                'country_id' => 58,
            ),
            446 => 
            array (
                'id' => 947,
                'state_name' => 'Kobenhavns Amt',
                'country_id' => 58,
            ),
            447 => 
            array (
                'id' => 948,
                'state_name' => 'Kobenhavns Kommune',
                'country_id' => 58,
            ),
            448 => 
            array (
                'id' => 949,
                'state_name' => 'Nordjylland',
                'country_id' => 58,
            ),
            449 => 
            array (
                'id' => 950,
                'state_name' => 'Ribe',
                'country_id' => 58,
            ),
            450 => 
            array (
                'id' => 951,
                'state_name' => 'Ringkobing',
                'country_id' => 58,
            ),
            451 => 
            array (
                'id' => 952,
                'state_name' => 'Roervig',
                'country_id' => 58,
            ),
            452 => 
            array (
                'id' => 953,
                'state_name' => 'Roskilde',
                'country_id' => 58,
            ),
            453 => 
            array (
                'id' => 954,
                'state_name' => 'Roslev',
                'country_id' => 58,
            ),
            454 => 
            array (
                'id' => 955,
                'state_name' => 'Sjaelland',
                'country_id' => 58,
            ),
            455 => 
            array (
                'id' => 956,
                'state_name' => 'Soeborg',
                'country_id' => 58,
            ),
            456 => 
            array (
                'id' => 957,
                'state_name' => 'Sonderjylland',
                'country_id' => 58,
            ),
            457 => 
            array (
                'id' => 958,
                'state_name' => 'Storstrom',
                'country_id' => 58,
            ),
            458 => 
            array (
                'id' => 959,
                'state_name' => 'Syddanmark',
                'country_id' => 58,
            ),
            459 => 
            array (
                'id' => 960,
                'state_name' => 'Toelloese',
                'country_id' => 58,
            ),
            460 => 
            array (
                'id' => 961,
                'state_name' => 'Vejle',
                'country_id' => 58,
            ),
            461 => 
            array (
                'id' => 962,
                'state_name' => 'Vestsjalland',
                'country_id' => 58,
            ),
            462 => 
            array (
                'id' => 963,
                'state_name' => 'Viborg',
                'country_id' => 58,
            ),
            463 => 
            array (
                'id' => 964,
                'state_name' => '\'Ali Sabih',
                'country_id' => 59,
            ),
            464 => 
            array (
                'id' => 965,
                'state_name' => 'Dikhil',
                'country_id' => 59,
            ),
            465 => 
            array (
                'id' => 966,
                'state_name' => 'Jibuti',
                'country_id' => 59,
            ),
            466 => 
            array (
                'id' => 967,
                'state_name' => 'Tajurah',
                'country_id' => 59,
            ),
            467 => 
            array (
                'id' => 968,
                'state_name' => 'Ubuk',
                'country_id' => 59,
            ),
            468 => 
            array (
                'id' => 969,
                'state_name' => 'Saint Andrew',
                'country_id' => 60,
            ),
            469 => 
            array (
                'id' => 970,
                'state_name' => 'Saint David',
                'country_id' => 60,
            ),
            470 => 
            array (
                'id' => 971,
                'state_name' => 'Saint George',
                'country_id' => 60,
            ),
            471 => 
            array (
                'id' => 972,
                'state_name' => 'Saint John',
                'country_id' => 60,
            ),
            472 => 
            array (
                'id' => 973,
                'state_name' => 'Saint Joseph',
                'country_id' => 60,
            ),
            473 => 
            array (
                'id' => 974,
                'state_name' => 'Saint Luke',
                'country_id' => 60,
            ),
            474 => 
            array (
                'id' => 975,
                'state_name' => 'Saint Mark',
                'country_id' => 60,
            ),
            475 => 
            array (
                'id' => 976,
                'state_name' => 'Saint Patrick',
                'country_id' => 60,
            ),
            476 => 
            array (
                'id' => 977,
                'state_name' => 'Saint Paul',
                'country_id' => 60,
            ),
            477 => 
            array (
                'id' => 978,
                'state_name' => 'Saint Peter',
                'country_id' => 60,
            ),
            478 => 
            array (
                'id' => 979,
                'state_name' => 'Azua',
                'country_id' => 61,
            ),
            479 => 
            array (
                'id' => 980,
                'state_name' => 'Bahoruco',
                'country_id' => 61,
            ),
            480 => 
            array (
                'id' => 981,
                'state_name' => 'Barahona',
                'country_id' => 61,
            ),
            481 => 
            array (
                'id' => 982,
                'state_name' => 'Dajabon',
                'country_id' => 61,
            ),
            482 => 
            array (
                'id' => 983,
                'state_name' => 'Distrito Nacional',
                'country_id' => 61,
            ),
            483 => 
            array (
                'id' => 984,
                'state_name' => 'Duarte',
                'country_id' => 61,
            ),
            484 => 
            array (
                'id' => 985,
                'state_name' => 'El Seybo',
                'country_id' => 61,
            ),
            485 => 
            array (
                'id' => 986,
                'state_name' => 'Elias Pina',
                'country_id' => 61,
            ),
            486 => 
            array (
                'id' => 987,
                'state_name' => 'Espaillat',
                'country_id' => 61,
            ),
            487 => 
            array (
                'id' => 988,
                'state_name' => 'Hato Mayor',
                'country_id' => 61,
            ),
            488 => 
            array (
                'id' => 989,
                'state_name' => 'Independencia',
                'country_id' => 61,
            ),
            489 => 
            array (
                'id' => 990,
                'state_name' => 'La Altagracia',
                'country_id' => 61,
            ),
            490 => 
            array (
                'id' => 991,
                'state_name' => 'La Romana',
                'country_id' => 61,
            ),
            491 => 
            array (
                'id' => 992,
                'state_name' => 'La Vega',
                'country_id' => 61,
            ),
            492 => 
            array (
                'id' => 993,
                'state_name' => 'Maria Trinidad Sanchez',
                'country_id' => 61,
            ),
            493 => 
            array (
                'id' => 994,
                'state_name' => 'Monsenor Nouel',
                'country_id' => 61,
            ),
            494 => 
            array (
                'id' => 995,
                'state_name' => 'Monte Cristi',
                'country_id' => 61,
            ),
            495 => 
            array (
                'id' => 996,
                'state_name' => 'Monte Plata',
                'country_id' => 61,
            ),
            496 => 
            array (
                'id' => 997,
                'state_name' => 'Pedernales',
                'country_id' => 61,
            ),
            497 => 
            array (
                'id' => 998,
                'state_name' => 'Peravia',
                'country_id' => 61,
            ),
            498 => 
            array (
                'id' => 999,
                'state_name' => 'Puerto Plata',
                'country_id' => 61,
            ),
            499 => 
            array (
                'id' => 1000,
                'state_name' => 'Salcedo',
                'country_id' => 61,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'state_name' => 'Samana',
                'country_id' => 61,
            ),
            1 => 
            array (
                'id' => 1002,
                'state_name' => 'San Cristobal',
                'country_id' => 61,
            ),
            2 => 
            array (
                'id' => 1003,
                'state_name' => 'San Juan',
                'country_id' => 61,
            ),
            3 => 
            array (
                'id' => 1004,
                'state_name' => 'San Pedro de Macoris',
                'country_id' => 61,
            ),
            4 => 
            array (
                'id' => 1005,
                'state_name' => 'Sanchez Ramirez',
                'country_id' => 61,
            ),
            5 => 
            array (
                'id' => 1006,
                'state_name' => 'Santiago',
                'country_id' => 61,
            ),
            6 => 
            array (
                'id' => 1007,
                'state_name' => 'Santiago Rodriguez',
                'country_id' => 61,
            ),
            7 => 
            array (
                'id' => 1008,
                'state_name' => 'Valverde',
                'country_id' => 61,
            ),
            8 => 
            array (
                'id' => 1009,
                'state_name' => 'Aileu',
                'country_id' => 62,
            ),
            9 => 
            array (
                'id' => 1010,
                'state_name' => 'Ainaro',
                'country_id' => 62,
            ),
            10 => 
            array (
                'id' => 1011,
                'state_name' => 'Ambeno',
                'country_id' => 62,
            ),
            11 => 
            array (
                'id' => 1012,
                'state_name' => 'Baucau',
                'country_id' => 62,
            ),
            12 => 
            array (
                'id' => 1013,
                'state_name' => 'Bobonaro',
                'country_id' => 62,
            ),
            13 => 
            array (
                'id' => 1014,
                'state_name' => 'Cova Lima',
                'country_id' => 62,
            ),
            14 => 
            array (
                'id' => 1015,
                'state_name' => 'Dili',
                'country_id' => 62,
            ),
            15 => 
            array (
                'id' => 1016,
                'state_name' => 'Ermera',
                'country_id' => 62,
            ),
            16 => 
            array (
                'id' => 1017,
                'state_name' => 'Lautem',
                'country_id' => 62,
            ),
            17 => 
            array (
                'id' => 1018,
                'state_name' => 'Liquica',
                'country_id' => 62,
            ),
            18 => 
            array (
                'id' => 1019,
                'state_name' => 'Manatuto',
                'country_id' => 62,
            ),
            19 => 
            array (
                'id' => 1020,
                'state_name' => 'Manufahi',
                'country_id' => 62,
            ),
            20 => 
            array (
                'id' => 1021,
                'state_name' => 'Viqueque',
                'country_id' => 62,
            ),
            21 => 
            array (
                'id' => 1022,
                'state_name' => 'Azuay',
                'country_id' => 63,
            ),
            22 => 
            array (
                'id' => 1023,
                'state_name' => 'Bolivar',
                'country_id' => 63,
            ),
            23 => 
            array (
                'id' => 1024,
                'state_name' => 'Canar',
                'country_id' => 63,
            ),
            24 => 
            array (
                'id' => 1025,
                'state_name' => 'Carchi',
                'country_id' => 63,
            ),
            25 => 
            array (
                'id' => 1026,
                'state_name' => 'Chimborazo',
                'country_id' => 63,
            ),
            26 => 
            array (
                'id' => 1027,
                'state_name' => 'Cotopaxi',
                'country_id' => 63,
            ),
            27 => 
            array (
                'id' => 1028,
                'state_name' => 'El Oro',
                'country_id' => 63,
            ),
            28 => 
            array (
                'id' => 1029,
                'state_name' => 'Esmeraldas',
                'country_id' => 63,
            ),
            29 => 
            array (
                'id' => 1030,
                'state_name' => 'Galapagos',
                'country_id' => 63,
            ),
            30 => 
            array (
                'id' => 1031,
                'state_name' => 'Guayas',
                'country_id' => 63,
            ),
            31 => 
            array (
                'id' => 1032,
                'state_name' => 'Imbabura',
                'country_id' => 63,
            ),
            32 => 
            array (
                'id' => 1033,
                'state_name' => 'Loja',
                'country_id' => 63,
            ),
            33 => 
            array (
                'id' => 1034,
                'state_name' => 'Los Rios',
                'country_id' => 63,
            ),
            34 => 
            array (
                'id' => 1035,
                'state_name' => 'Manabi',
                'country_id' => 63,
            ),
            35 => 
            array (
                'id' => 1036,
                'state_name' => 'Morona Santiago',
                'country_id' => 63,
            ),
            36 => 
            array (
                'id' => 1037,
                'state_name' => 'Napo',
                'country_id' => 63,
            ),
            37 => 
            array (
                'id' => 1038,
                'state_name' => 'Orellana',
                'country_id' => 63,
            ),
            38 => 
            array (
                'id' => 1039,
                'state_name' => 'Pastaza',
                'country_id' => 63,
            ),
            39 => 
            array (
                'id' => 1040,
                'state_name' => 'Pichincha',
                'country_id' => 63,
            ),
            40 => 
            array (
                'id' => 1041,
                'state_name' => 'Sucumbios',
                'country_id' => 63,
            ),
            41 => 
            array (
                'id' => 1042,
                'state_name' => 'Tungurahua',
                'country_id' => 63,
            ),
            42 => 
            array (
                'id' => 1043,
                'state_name' => 'Zamora Chinchipe',
                'country_id' => 63,
            ),
            43 => 
            array (
                'id' => 1044,
                'state_name' => 'Aswan',
                'country_id' => 64,
            ),
            44 => 
            array (
                'id' => 1045,
                'state_name' => 'Asyut',
                'country_id' => 64,
            ),
            45 => 
            array (
                'id' => 1046,
                'state_name' => 'Bani Suwayf',
                'country_id' => 64,
            ),
            46 => 
            array (
                'id' => 1047,
                'state_name' => 'Bur Sa\'id',
                'country_id' => 64,
            ),
            47 => 
            array (
                'id' => 1048,
                'state_name' => 'Cairo',
                'country_id' => 64,
            ),
            48 => 
            array (
                'id' => 1049,
                'state_name' => 'Dumyat',
                'country_id' => 64,
            ),
            49 => 
            array (
                'id' => 1050,
                'state_name' => 'Kafr-ash-Shaykh',
                'country_id' => 64,
            ),
            50 => 
            array (
                'id' => 1051,
                'state_name' => 'Matruh',
                'country_id' => 64,
            ),
            51 => 
            array (
                'id' => 1052,
                'state_name' => 'Muhafazat ad Daqahliyah',
                'country_id' => 64,
            ),
            52 => 
            array (
                'id' => 1053,
                'state_name' => 'Muhafazat al Fayyum',
                'country_id' => 64,
            ),
            53 => 
            array (
                'id' => 1054,
                'state_name' => 'Muhafazat al Gharbiyah',
                'country_id' => 64,
            ),
            54 => 
            array (
                'id' => 1055,
                'state_name' => 'Muhafazat al Iskandariyah',
                'country_id' => 64,
            ),
            55 => 
            array (
                'id' => 1056,
                'state_name' => 'Muhafazat al Qahirah',
                'country_id' => 64,
            ),
            56 => 
            array (
                'id' => 1057,
                'state_name' => 'Qina',
                'country_id' => 64,
            ),
            57 => 
            array (
                'id' => 1058,
                'state_name' => 'Sawhaj',
                'country_id' => 64,
            ),
            58 => 
            array (
                'id' => 1059,
                'state_name' => 'Sina al-Janubiyah',
                'country_id' => 64,
            ),
            59 => 
            array (
                'id' => 1060,
                'state_name' => 'Sina ash-Shamaliyah',
                'country_id' => 64,
            ),
            60 => 
            array (
                'id' => 1061,
                'state_name' => 'ad-Daqahliyah',
                'country_id' => 64,
            ),
            61 => 
            array (
                'id' => 1062,
                'state_name' => 'al-Bahr-al-Ahmar',
                'country_id' => 64,
            ),
            62 => 
            array (
                'id' => 1063,
                'state_name' => 'al-Buhayrah',
                'country_id' => 64,
            ),
            63 => 
            array (
                'id' => 1064,
                'state_name' => 'al-Fayyum',
                'country_id' => 64,
            ),
            64 => 
            array (
                'id' => 1065,
                'state_name' => 'al-Gharbiyah',
                'country_id' => 64,
            ),
            65 => 
            array (
                'id' => 1066,
                'state_name' => 'al-Iskandariyah',
                'country_id' => 64,
            ),
            66 => 
            array (
                'id' => 1067,
                'state_name' => 'al-Ismailiyah',
                'country_id' => 64,
            ),
            67 => 
            array (
                'id' => 1068,
                'state_name' => 'al-Jizah',
                'country_id' => 64,
            ),
            68 => 
            array (
                'id' => 1069,
                'state_name' => 'al-Minufiyah',
                'country_id' => 64,
            ),
            69 => 
            array (
                'id' => 1070,
                'state_name' => 'al-Minya',
                'country_id' => 64,
            ),
            70 => 
            array (
                'id' => 1071,
                'state_name' => 'al-Qahira',
                'country_id' => 64,
            ),
            71 => 
            array (
                'id' => 1072,
                'state_name' => 'al-Qalyubiyah',
                'country_id' => 64,
            ),
            72 => 
            array (
                'id' => 1073,
                'state_name' => 'al-Uqsur',
                'country_id' => 64,
            ),
            73 => 
            array (
                'id' => 1074,
                'state_name' => 'al-Wadi al-Jadid',
                'country_id' => 64,
            ),
            74 => 
            array (
                'id' => 1075,
                'state_name' => 'as-Suways',
                'country_id' => 64,
            ),
            75 => 
            array (
                'id' => 1076,
                'state_name' => 'ash-Sharqiyah',
                'country_id' => 64,
            ),
            76 => 
            array (
                'id' => 1077,
                'state_name' => 'Ahuachapan',
                'country_id' => 65,
            ),
            77 => 
            array (
                'id' => 1078,
                'state_name' => 'Cabanas',
                'country_id' => 65,
            ),
            78 => 
            array (
                'id' => 1079,
                'state_name' => 'Chalatenango',
                'country_id' => 65,
            ),
            79 => 
            array (
                'id' => 1080,
                'state_name' => 'Cuscatlan',
                'country_id' => 65,
            ),
            80 => 
            array (
                'id' => 1081,
                'state_name' => 'La Libertad',
                'country_id' => 65,
            ),
            81 => 
            array (
                'id' => 1082,
                'state_name' => 'La Paz',
                'country_id' => 65,
            ),
            82 => 
            array (
                'id' => 1083,
                'state_name' => 'La Union',
                'country_id' => 65,
            ),
            83 => 
            array (
                'id' => 1084,
                'state_name' => 'Morazan',
                'country_id' => 65,
            ),
            84 => 
            array (
                'id' => 1085,
                'state_name' => 'San Miguel',
                'country_id' => 65,
            ),
            85 => 
            array (
                'id' => 1086,
                'state_name' => 'San Salvador',
                'country_id' => 65,
            ),
            86 => 
            array (
                'id' => 1087,
                'state_name' => 'San Vicente',
                'country_id' => 65,
            ),
            87 => 
            array (
                'id' => 1088,
                'state_name' => 'Santa Ana',
                'country_id' => 65,
            ),
            88 => 
            array (
                'id' => 1089,
                'state_name' => 'Sonsonate',
                'country_id' => 65,
            ),
            89 => 
            array (
                'id' => 1090,
                'state_name' => 'Usulutan',
                'country_id' => 65,
            ),
            90 => 
            array (
                'id' => 1091,
                'state_name' => 'Annobon',
                'country_id' => 66,
            ),
            91 => 
            array (
                'id' => 1092,
                'state_name' => 'Bioko Norte',
                'country_id' => 66,
            ),
            92 => 
            array (
                'id' => 1093,
                'state_name' => 'Bioko Sur',
                'country_id' => 66,
            ),
            93 => 
            array (
                'id' => 1094,
                'state_name' => 'Centro Sur',
                'country_id' => 66,
            ),
            94 => 
            array (
                'id' => 1095,
                'state_name' => 'Kie-Ntem',
                'country_id' => 66,
            ),
            95 => 
            array (
                'id' => 1096,
                'state_name' => 'Litoral',
                'country_id' => 66,
            ),
            96 => 
            array (
                'id' => 1097,
                'state_name' => 'Wele-Nzas',
                'country_id' => 66,
            ),
            97 => 
            array (
                'id' => 1098,
                'state_name' => 'Anseba',
                'country_id' => 67,
            ),
            98 => 
            array (
                'id' => 1099,
                'state_name' => 'Debub',
                'country_id' => 67,
            ),
            99 => 
            array (
                'id' => 1100,
                'state_name' => 'Debub-Keih-Bahri',
                'country_id' => 67,
            ),
            100 => 
            array (
                'id' => 1101,
                'state_name' => 'Gash-Barka',
                'country_id' => 67,
            ),
            101 => 
            array (
                'id' => 1102,
                'state_name' => 'Maekel',
                'country_id' => 67,
            ),
            102 => 
            array (
                'id' => 1103,
                'state_name' => 'Semien-Keih-Bahri',
                'country_id' => 67,
            ),
            103 => 
            array (
                'id' => 1104,
                'state_name' => 'Harju',
                'country_id' => 68,
            ),
            104 => 
            array (
                'id' => 1105,
                'state_name' => 'Hiiu',
                'country_id' => 68,
            ),
            105 => 
            array (
                'id' => 1106,
                'state_name' => 'Ida-Viru',
                'country_id' => 68,
            ),
            106 => 
            array (
                'id' => 1107,
                'state_name' => 'Jarva',
                'country_id' => 68,
            ),
            107 => 
            array (
                'id' => 1108,
                'state_name' => 'Jogeva',
                'country_id' => 68,
            ),
            108 => 
            array (
                'id' => 1109,
                'state_name' => 'Laane',
                'country_id' => 68,
            ),
            109 => 
            array (
                'id' => 1110,
                'state_name' => 'Laane-Viru',
                'country_id' => 68,
            ),
            110 => 
            array (
                'id' => 1111,
                'state_name' => 'Parnu',
                'country_id' => 68,
            ),
            111 => 
            array (
                'id' => 1112,
                'state_name' => 'Polva',
                'country_id' => 68,
            ),
            112 => 
            array (
                'id' => 1113,
                'state_name' => 'Rapla',
                'country_id' => 68,
            ),
            113 => 
            array (
                'id' => 1114,
                'state_name' => 'Saare',
                'country_id' => 68,
            ),
            114 => 
            array (
                'id' => 1115,
                'state_name' => 'Tartu',
                'country_id' => 68,
            ),
            115 => 
            array (
                'id' => 1116,
                'state_name' => 'Valga',
                'country_id' => 68,
            ),
            116 => 
            array (
                'id' => 1117,
                'state_name' => 'Viljandi',
                'country_id' => 68,
            ),
            117 => 
            array (
                'id' => 1118,
                'state_name' => 'Voru',
                'country_id' => 68,
            ),
            118 => 
            array (
                'id' => 1119,
                'state_name' => 'Addis Abeba',
                'country_id' => 69,
            ),
            119 => 
            array (
                'id' => 1120,
                'state_name' => 'Afar',
                'country_id' => 69,
            ),
            120 => 
            array (
                'id' => 1121,
                'state_name' => 'Amhara',
                'country_id' => 69,
            ),
            121 => 
            array (
                'id' => 1122,
                'state_name' => 'Benishangul',
                'country_id' => 69,
            ),
            122 => 
            array (
                'id' => 1123,
                'state_name' => 'Diredawa',
                'country_id' => 69,
            ),
            123 => 
            array (
                'id' => 1124,
                'state_name' => 'Gambella',
                'country_id' => 69,
            ),
            124 => 
            array (
                'id' => 1125,
                'state_name' => 'Harar',
                'country_id' => 69,
            ),
            125 => 
            array (
                'id' => 1126,
                'state_name' => 'Jigjiga',
                'country_id' => 69,
            ),
            126 => 
            array (
                'id' => 1127,
                'state_name' => 'Mekele',
                'country_id' => 69,
            ),
            127 => 
            array (
                'id' => 1128,
                'state_name' => 'Oromia',
                'country_id' => 69,
            ),
            128 => 
            array (
                'id' => 1129,
                'state_name' => 'Somali',
                'country_id' => 69,
            ),
            129 => 
            array (
                'id' => 1130,
                'state_name' => 'Southern',
                'country_id' => 69,
            ),
            130 => 
            array (
                'id' => 1131,
                'state_name' => 'Tigray',
                'country_id' => 69,
            ),
            131 => 
            array (
                'id' => 1132,
                'state_name' => 'Christmas Island',
                'country_id' => 70,
            ),
            132 => 
            array (
                'id' => 1133,
                'state_name' => 'Cocos Islands',
                'country_id' => 70,
            ),
            133 => 
            array (
                'id' => 1134,
                'state_name' => 'Coral Sea Islands',
                'country_id' => 70,
            ),
            134 => 
            array (
                'id' => 1135,
                'state_name' => 'Falkland Islands',
                'country_id' => 71,
            ),
            135 => 
            array (
                'id' => 1136,
                'state_name' => 'South Georgia',
                'country_id' => 71,
            ),
            136 => 
            array (
                'id' => 1137,
                'state_name' => 'Klaksvik',
                'country_id' => 72,
            ),
            137 => 
            array (
                'id' => 1138,
                'state_name' => 'Nor ara Eysturoy',
                'country_id' => 72,
            ),
            138 => 
            array (
                'id' => 1139,
                'state_name' => 'Nor oy',
                'country_id' => 72,
            ),
            139 => 
            array (
                'id' => 1140,
                'state_name' => 'Sandoy',
                'country_id' => 72,
            ),
            140 => 
            array (
                'id' => 1141,
                'state_name' => 'Streymoy',
                'country_id' => 72,
            ),
            141 => 
            array (
                'id' => 1142,
                'state_name' => 'Su uroy',
                'country_id' => 72,
            ),
            142 => 
            array (
                'id' => 1143,
                'state_name' => 'Sy ra Eysturoy',
                'country_id' => 72,
            ),
            143 => 
            array (
                'id' => 1144,
                'state_name' => 'Torshavn',
                'country_id' => 72,
            ),
            144 => 
            array (
                'id' => 1145,
                'state_name' => 'Vaga',
                'country_id' => 72,
            ),
            145 => 
            array (
                'id' => 1146,
                'state_name' => 'Central',
                'country_id' => 73,
            ),
            146 => 
            array (
                'id' => 1147,
                'state_name' => 'Eastern',
                'country_id' => 73,
            ),
            147 => 
            array (
                'id' => 1148,
                'state_name' => 'Northern',
                'country_id' => 73,
            ),
            148 => 
            array (
                'id' => 1149,
                'state_name' => 'South Pacific',
                'country_id' => 73,
            ),
            149 => 
            array (
                'id' => 1150,
                'state_name' => 'Western',
                'country_id' => 73,
            ),
            150 => 
            array (
                'id' => 1151,
                'state_name' => 'Ahvenanmaa',
                'country_id' => 74,
            ),
            151 => 
            array (
                'id' => 1152,
                'state_name' => 'Etela-Karjala',
                'country_id' => 74,
            ),
            152 => 
            array (
                'id' => 1153,
                'state_name' => 'Etela-Pohjanmaa',
                'country_id' => 74,
            ),
            153 => 
            array (
                'id' => 1154,
                'state_name' => 'Etela-Savo',
                'country_id' => 74,
            ),
            154 => 
            array (
                'id' => 1155,
                'state_name' => 'Etela-Suomen Laani',
                'country_id' => 74,
            ),
            155 => 
            array (
                'id' => 1156,
                'state_name' => 'Ita-Suomen Laani',
                'country_id' => 74,
            ),
            156 => 
            array (
                'id' => 1157,
                'state_name' => 'Ita-Uusimaa',
                'country_id' => 74,
            ),
            157 => 
            array (
                'id' => 1158,
                'state_name' => 'Kainuu',
                'country_id' => 74,
            ),
            158 => 
            array (
                'id' => 1159,
                'state_name' => 'Kanta-Hame',
                'country_id' => 74,
            ),
            159 => 
            array (
                'id' => 1160,
                'state_name' => 'Keski-Pohjanmaa',
                'country_id' => 74,
            ),
            160 => 
            array (
                'id' => 1161,
                'state_name' => 'Keski-Suomi',
                'country_id' => 74,
            ),
            161 => 
            array (
                'id' => 1162,
                'state_name' => 'Kymenlaakso',
                'country_id' => 74,
            ),
            162 => 
            array (
                'id' => 1163,
                'state_name' => 'Lansi-Suomen Laani',
                'country_id' => 74,
            ),
            163 => 
            array (
                'id' => 1164,
                'state_name' => 'Lappi',
                'country_id' => 74,
            ),
            164 => 
            array (
                'id' => 1165,
                'state_name' => 'Northern Savonia',
                'country_id' => 74,
            ),
            165 => 
            array (
                'id' => 1166,
                'state_name' => 'Ostrobothnia',
                'country_id' => 74,
            ),
            166 => 
            array (
                'id' => 1167,
                'state_name' => 'Oulun Laani',
                'country_id' => 74,
            ),
            167 => 
            array (
                'id' => 1168,
                'state_name' => 'Paijat-Hame',
                'country_id' => 74,
            ),
            168 => 
            array (
                'id' => 1169,
                'state_name' => 'Pirkanmaa',
                'country_id' => 74,
            ),
            169 => 
            array (
                'id' => 1170,
                'state_name' => 'Pohjanmaa',
                'country_id' => 74,
            ),
            170 => 
            array (
                'id' => 1171,
                'state_name' => 'Pohjois-Karjala',
                'country_id' => 74,
            ),
            171 => 
            array (
                'id' => 1172,
                'state_name' => 'Pohjois-Pohjanmaa',
                'country_id' => 74,
            ),
            172 => 
            array (
                'id' => 1173,
                'state_name' => 'Pohjois-Savo',
                'country_id' => 74,
            ),
            173 => 
            array (
                'id' => 1174,
                'state_name' => 'Saarijarvi',
                'country_id' => 74,
            ),
            174 => 
            array (
                'id' => 1175,
                'state_name' => 'Satakunta',
                'country_id' => 74,
            ),
            175 => 
            array (
                'id' => 1176,
                'state_name' => 'Southern Savonia',
                'country_id' => 74,
            ),
            176 => 
            array (
                'id' => 1177,
                'state_name' => 'Tavastia Proper',
                'country_id' => 74,
            ),
            177 => 
            array (
                'id' => 1178,
                'state_name' => 'Uleaborgs Lan',
                'country_id' => 74,
            ),
            178 => 
            array (
                'id' => 1179,
                'state_name' => 'Uusimaa',
                'country_id' => 74,
            ),
            179 => 
            array (
                'id' => 1180,
                'state_name' => 'Varsinais-Suomi',
                'country_id' => 74,
            ),
            180 => 
            array (
                'id' => 1181,
                'state_name' => 'Ain',
                'country_id' => 75,
            ),
            181 => 
            array (
                'id' => 1182,
                'state_name' => 'Aisne',
                'country_id' => 75,
            ),
            182 => 
            array (
                'id' => 1183,
                'state_name' => 'Albi Le Sequestre',
                'country_id' => 75,
            ),
            183 => 
            array (
                'id' => 1184,
                'state_name' => 'Allier',
                'country_id' => 75,
            ),
            184 => 
            array (
                'id' => 1185,
                'state_name' => 'Alpes-Cote dAzur',
                'country_id' => 75,
            ),
            185 => 
            array (
                'id' => 1186,
                'state_name' => 'Alpes-Maritimes',
                'country_id' => 75,
            ),
            186 => 
            array (
                'id' => 1187,
                'state_name' => 'Alpes-de-Haute-Provence',
                'country_id' => 75,
            ),
            187 => 
            array (
                'id' => 1188,
                'state_name' => 'Alsace',
                'country_id' => 75,
            ),
            188 => 
            array (
                'id' => 1189,
                'state_name' => 'Aquitaine',
                'country_id' => 75,
            ),
            189 => 
            array (
                'id' => 1190,
                'state_name' => 'Ardeche',
                'country_id' => 75,
            ),
            190 => 
            array (
                'id' => 1191,
                'state_name' => 'Ardennes',
                'country_id' => 75,
            ),
            191 => 
            array (
                'id' => 1192,
                'state_name' => 'Ariege',
                'country_id' => 75,
            ),
            192 => 
            array (
                'id' => 1193,
                'state_name' => 'Aube',
                'country_id' => 75,
            ),
            193 => 
            array (
                'id' => 1194,
                'state_name' => 'Aude',
                'country_id' => 75,
            ),
            194 => 
            array (
                'id' => 1195,
                'state_name' => 'Auvergne',
                'country_id' => 75,
            ),
            195 => 
            array (
                'id' => 1196,
                'state_name' => 'Aveyron',
                'country_id' => 75,
            ),
            196 => 
            array (
                'id' => 1197,
                'state_name' => 'Bas-Rhin',
                'country_id' => 75,
            ),
            197 => 
            array (
                'id' => 1198,
                'state_name' => 'Basse-Normandie',
                'country_id' => 75,
            ),
            198 => 
            array (
                'id' => 1199,
                'state_name' => 'Bouches-du-Rhone',
                'country_id' => 75,
            ),
            199 => 
            array (
                'id' => 1200,
                'state_name' => 'Bourgogne',
                'country_id' => 75,
            ),
            200 => 
            array (
                'id' => 1201,
                'state_name' => 'Bretagne',
                'country_id' => 75,
            ),
            201 => 
            array (
                'id' => 1202,
                'state_name' => 'Brittany',
                'country_id' => 75,
            ),
            202 => 
            array (
                'id' => 1203,
                'state_name' => 'Burgundy',
                'country_id' => 75,
            ),
            203 => 
            array (
                'id' => 1204,
                'state_name' => 'Calvados',
                'country_id' => 75,
            ),
            204 => 
            array (
                'id' => 1205,
                'state_name' => 'Cantal',
                'country_id' => 75,
            ),
            205 => 
            array (
                'id' => 1206,
                'state_name' => 'Cedex',
                'country_id' => 75,
            ),
            206 => 
            array (
                'id' => 1207,
                'state_name' => 'Centre',
                'country_id' => 75,
            ),
            207 => 
            array (
                'id' => 1208,
                'state_name' => 'Charente',
                'country_id' => 75,
            ),
            208 => 
            array (
                'id' => 1209,
                'state_name' => 'Charente-Maritime',
                'country_id' => 75,
            ),
            209 => 
            array (
                'id' => 1210,
                'state_name' => 'Cher',
                'country_id' => 75,
            ),
            210 => 
            array (
                'id' => 1211,
                'state_name' => 'Correze',
                'country_id' => 75,
            ),
            211 => 
            array (
                'id' => 1212,
                'state_name' => 'Corse-du-Sud',
                'country_id' => 75,
            ),
            212 => 
            array (
                'id' => 1213,
                'state_name' => 'Cote-d\'Or',
                'country_id' => 75,
            ),
            213 => 
            array (
                'id' => 1214,
                'state_name' => 'Cotes-d\'Armor',
                'country_id' => 75,
            ),
            214 => 
            array (
                'id' => 1215,
                'state_name' => 'Creuse',
                'country_id' => 75,
            ),
            215 => 
            array (
                'id' => 1216,
                'state_name' => 'Crolles',
                'country_id' => 75,
            ),
            216 => 
            array (
                'id' => 1217,
                'state_name' => 'Deux-Sevres',
                'country_id' => 75,
            ),
            217 => 
            array (
                'id' => 1218,
                'state_name' => 'Dordogne',
                'country_id' => 75,
            ),
            218 => 
            array (
                'id' => 1219,
                'state_name' => 'Doubs',
                'country_id' => 75,
            ),
            219 => 
            array (
                'id' => 1220,
                'state_name' => 'Drome',
                'country_id' => 75,
            ),
            220 => 
            array (
                'id' => 1221,
                'state_name' => 'Essonne',
                'country_id' => 75,
            ),
            221 => 
            array (
                'id' => 1222,
                'state_name' => 'Eure',
                'country_id' => 75,
            ),
            222 => 
            array (
                'id' => 1223,
                'state_name' => 'Eure-et-Loir',
                'country_id' => 75,
            ),
            223 => 
            array (
                'id' => 1224,
                'state_name' => 'Feucherolles',
                'country_id' => 75,
            ),
            224 => 
            array (
                'id' => 1225,
                'state_name' => 'Finistere',
                'country_id' => 75,
            ),
            225 => 
            array (
                'id' => 1226,
                'state_name' => 'Franche-Comte',
                'country_id' => 75,
            ),
            226 => 
            array (
                'id' => 1227,
                'state_name' => 'Gard',
                'country_id' => 75,
            ),
            227 => 
            array (
                'id' => 1228,
                'state_name' => 'Gers',
                'country_id' => 75,
            ),
            228 => 
            array (
                'id' => 1229,
                'state_name' => 'Gironde',
                'country_id' => 75,
            ),
            229 => 
            array (
                'id' => 1230,
                'state_name' => 'Haut-Rhin',
                'country_id' => 75,
            ),
            230 => 
            array (
                'id' => 1231,
                'state_name' => 'Haute-Corse',
                'country_id' => 75,
            ),
            231 => 
            array (
                'id' => 1232,
                'state_name' => 'Haute-Garonne',
                'country_id' => 75,
            ),
            232 => 
            array (
                'id' => 1233,
                'state_name' => 'Haute-Loire',
                'country_id' => 75,
            ),
            233 => 
            array (
                'id' => 1234,
                'state_name' => 'Haute-Marne',
                'country_id' => 75,
            ),
            234 => 
            array (
                'id' => 1235,
                'state_name' => 'Haute-Saone',
                'country_id' => 75,
            ),
            235 => 
            array (
                'id' => 1236,
                'state_name' => 'Haute-Savoie',
                'country_id' => 75,
            ),
            236 => 
            array (
                'id' => 1237,
                'state_name' => 'Haute-Vienne',
                'country_id' => 75,
            ),
            237 => 
            array (
                'id' => 1238,
                'state_name' => 'Hautes-Alpes',
                'country_id' => 75,
            ),
            238 => 
            array (
                'id' => 1239,
                'state_name' => 'Hautes-Pyrenees',
                'country_id' => 75,
            ),
            239 => 
            array (
                'id' => 1240,
                'state_name' => 'Hauts-de-Seine',
                'country_id' => 75,
            ),
            240 => 
            array (
                'id' => 1241,
                'state_name' => 'Herault',
                'country_id' => 75,
            ),
            241 => 
            array (
                'id' => 1242,
                'state_name' => 'Ile-de-France',
                'country_id' => 75,
            ),
            242 => 
            array (
                'id' => 1243,
                'state_name' => 'Ille-et-Vilaine',
                'country_id' => 75,
            ),
            243 => 
            array (
                'id' => 1244,
                'state_name' => 'Indre',
                'country_id' => 75,
            ),
            244 => 
            array (
                'id' => 1245,
                'state_name' => 'Indre-et-Loire',
                'country_id' => 75,
            ),
            245 => 
            array (
                'id' => 1246,
                'state_name' => 'Isere',
                'country_id' => 75,
            ),
            246 => 
            array (
                'id' => 1247,
                'state_name' => 'Jura',
                'country_id' => 75,
            ),
            247 => 
            array (
                'id' => 1248,
                'state_name' => 'Klagenfurt',
                'country_id' => 75,
            ),
            248 => 
            array (
                'id' => 1249,
                'state_name' => 'Landes',
                'country_id' => 75,
            ),
            249 => 
            array (
                'id' => 1250,
                'state_name' => 'Languedoc-Roussillon',
                'country_id' => 75,
            ),
            250 => 
            array (
                'id' => 1251,
                'state_name' => 'Larcay',
                'country_id' => 75,
            ),
            251 => 
            array (
                'id' => 1252,
                'state_name' => 'Le Castellet',
                'country_id' => 75,
            ),
            252 => 
            array (
                'id' => 1253,
                'state_name' => 'Le Creusot',
                'country_id' => 75,
            ),
            253 => 
            array (
                'id' => 1254,
                'state_name' => 'Limousin',
                'country_id' => 75,
            ),
            254 => 
            array (
                'id' => 1255,
                'state_name' => 'Loir-et-Cher',
                'country_id' => 75,
            ),
            255 => 
            array (
                'id' => 1256,
                'state_name' => 'Loire',
                'country_id' => 75,
            ),
            256 => 
            array (
                'id' => 1257,
                'state_name' => 'Loire-Atlantique',
                'country_id' => 75,
            ),
            257 => 
            array (
                'id' => 1258,
                'state_name' => 'Loiret',
                'country_id' => 75,
            ),
            258 => 
            array (
                'id' => 1259,
                'state_name' => 'Lorraine',
                'country_id' => 75,
            ),
            259 => 
            array (
                'id' => 1260,
                'state_name' => 'Lot',
                'country_id' => 75,
            ),
            260 => 
            array (
                'id' => 1261,
                'state_name' => 'Lot-et-Garonne',
                'country_id' => 75,
            ),
            261 => 
            array (
                'id' => 1262,
                'state_name' => 'Lower Normandy',
                'country_id' => 75,
            ),
            262 => 
            array (
                'id' => 1263,
                'state_name' => 'Lozere',
                'country_id' => 75,
            ),
            263 => 
            array (
                'id' => 1264,
                'state_name' => 'Maine-et-Loire',
                'country_id' => 75,
            ),
            264 => 
            array (
                'id' => 1265,
                'state_name' => 'Manche',
                'country_id' => 75,
            ),
            265 => 
            array (
                'id' => 1266,
                'state_name' => 'Marne',
                'country_id' => 75,
            ),
            266 => 
            array (
                'id' => 1267,
                'state_name' => 'Mayenne',
                'country_id' => 75,
            ),
            267 => 
            array (
                'id' => 1268,
                'state_name' => 'Meurthe-et-Moselle',
                'country_id' => 75,
            ),
            268 => 
            array (
                'id' => 1269,
                'state_name' => 'Meuse',
                'country_id' => 75,
            ),
            269 => 
            array (
                'id' => 1270,
                'state_name' => 'Midi-Pyrenees',
                'country_id' => 75,
            ),
            270 => 
            array (
                'id' => 1271,
                'state_name' => 'Morbihan',
                'country_id' => 75,
            ),
            271 => 
            array (
                'id' => 1272,
                'state_name' => 'Moselle',
                'country_id' => 75,
            ),
            272 => 
            array (
                'id' => 1273,
                'state_name' => 'Nievre',
                'country_id' => 75,
            ),
            273 => 
            array (
                'id' => 1274,
                'state_name' => 'Nord',
                'country_id' => 75,
            ),
            274 => 
            array (
                'id' => 1275,
                'state_name' => 'Nord-Pas-de-Calais',
                'country_id' => 75,
            ),
            275 => 
            array (
                'id' => 1276,
                'state_name' => 'Oise',
                'country_id' => 75,
            ),
            276 => 
            array (
                'id' => 1277,
                'state_name' => 'Orne',
                'country_id' => 75,
            ),
            277 => 
            array (
                'id' => 1278,
                'state_name' => 'Paris',
                'country_id' => 75,
            ),
            278 => 
            array (
                'id' => 1279,
                'state_name' => 'Pas-de-Calais',
                'country_id' => 75,
            ),
            279 => 
            array (
                'id' => 1280,
                'state_name' => 'Pays de la Loire',
                'country_id' => 75,
            ),
            280 => 
            array (
                'id' => 1281,
                'state_name' => 'Pays-de-la-Loire',
                'country_id' => 75,
            ),
            281 => 
            array (
                'id' => 1282,
                'state_name' => 'Picardy',
                'country_id' => 75,
            ),
            282 => 
            array (
                'id' => 1283,
                'state_name' => 'Puy-de-Dome',
                'country_id' => 75,
            ),
            283 => 
            array (
                'id' => 1284,
                'state_name' => 'Pyrenees-Atlantiques',
                'country_id' => 75,
            ),
            284 => 
            array (
                'id' => 1285,
                'state_name' => 'Pyrenees-Orientales',
                'country_id' => 75,
            ),
            285 => 
            array (
                'id' => 1286,
                'state_name' => 'Quelmes',
                'country_id' => 75,
            ),
            286 => 
            array (
                'id' => 1287,
                'state_name' => 'Rhone',
                'country_id' => 75,
            ),
            287 => 
            array (
                'id' => 1288,
                'state_name' => 'Rhone-Alpes',
                'country_id' => 75,
            ),
            288 => 
            array (
                'id' => 1289,
                'state_name' => 'Saint Ouen',
                'country_id' => 75,
            ),
            289 => 
            array (
                'id' => 1290,
                'state_name' => 'Saint Viatre',
                'country_id' => 75,
            ),
            290 => 
            array (
                'id' => 1291,
                'state_name' => 'Saone-et-Loire',
                'country_id' => 75,
            ),
            291 => 
            array (
                'id' => 1292,
                'state_name' => 'Sarthe',
                'country_id' => 75,
            ),
            292 => 
            array (
                'id' => 1293,
                'state_name' => 'Savoie',
                'country_id' => 75,
            ),
            293 => 
            array (
                'id' => 1294,
                'state_name' => 'Seine-Maritime',
                'country_id' => 75,
            ),
            294 => 
            array (
                'id' => 1295,
                'state_name' => 'Seine-Saint-Denis',
                'country_id' => 75,
            ),
            295 => 
            array (
                'id' => 1296,
                'state_name' => 'Seine-et-Marne',
                'country_id' => 75,
            ),
            296 => 
            array (
                'id' => 1297,
                'state_name' => 'Somme',
                'country_id' => 75,
            ),
            297 => 
            array (
                'id' => 1298,
                'state_name' => 'Sophia Antipolis',
                'country_id' => 75,
            ),
            298 => 
            array (
                'id' => 1299,
                'state_name' => 'Souvans',
                'country_id' => 75,
            ),
            299 => 
            array (
                'id' => 1300,
                'state_name' => 'Tarn',
                'country_id' => 75,
            ),
            300 => 
            array (
                'id' => 1301,
                'state_name' => 'Tarn-et-Garonne',
                'country_id' => 75,
            ),
            301 => 
            array (
                'id' => 1302,
                'state_name' => 'Territoire de Belfort',
                'country_id' => 75,
            ),
            302 => 
            array (
                'id' => 1303,
                'state_name' => 'Treignac',
                'country_id' => 75,
            ),
            303 => 
            array (
                'id' => 1304,
                'state_name' => 'Upper Normandy',
                'country_id' => 75,
            ),
            304 => 
            array (
                'id' => 1305,
                'state_name' => 'Val-d\'Oise',
                'country_id' => 75,
            ),
            305 => 
            array (
                'id' => 1306,
                'state_name' => 'Val-de-Marne',
                'country_id' => 75,
            ),
            306 => 
            array (
                'id' => 1307,
                'state_name' => 'Var',
                'country_id' => 75,
            ),
            307 => 
            array (
                'id' => 1308,
                'state_name' => 'Vaucluse',
                'country_id' => 75,
            ),
            308 => 
            array (
                'id' => 1309,
                'state_name' => 'Vellise',
                'country_id' => 75,
            ),
            309 => 
            array (
                'id' => 1310,
                'state_name' => 'Vendee',
                'country_id' => 75,
            ),
            310 => 
            array (
                'id' => 1311,
                'state_name' => 'Vienne',
                'country_id' => 75,
            ),
            311 => 
            array (
                'id' => 1312,
                'state_name' => 'Vosges',
                'country_id' => 75,
            ),
            312 => 
            array (
                'id' => 1313,
                'state_name' => 'Yonne',
                'country_id' => 75,
            ),
            313 => 
            array (
                'id' => 1314,
                'state_name' => 'Yvelines',
                'country_id' => 75,
            ),
            314 => 
            array (
                'id' => 1315,
                'state_name' => 'Cayenne',
                'country_id' => 76,
            ),
            315 => 
            array (
                'id' => 1316,
                'state_name' => 'Saint-Laurent-du-Maroni',
                'country_id' => 76,
            ),
            316 => 
            array (
                'id' => 1317,
                'state_name' => 'Iles du Vent',
                'country_id' => 77,
            ),
            317 => 
            array (
                'id' => 1318,
                'state_name' => 'Iles sous le Vent',
                'country_id' => 77,
            ),
            318 => 
            array (
                'id' => 1319,
                'state_name' => 'Marquesas',
                'country_id' => 77,
            ),
            319 => 
            array (
                'id' => 1320,
                'state_name' => 'Tuamotu',
                'country_id' => 77,
            ),
            320 => 
            array (
                'id' => 1321,
                'state_name' => 'Tubuai',
                'country_id' => 77,
            ),
            321 => 
            array (
                'id' => 1322,
                'state_name' => 'Amsterdam',
                'country_id' => 78,
            ),
            322 => 
            array (
                'id' => 1323,
                'state_name' => 'Crozet Islands',
                'country_id' => 78,
            ),
            323 => 
            array (
                'id' => 1324,
                'state_name' => 'Kerguelen',
                'country_id' => 78,
            ),
            324 => 
            array (
                'id' => 1325,
                'state_name' => 'Estuaire',
                'country_id' => 79,
            ),
            325 => 
            array (
                'id' => 1326,
                'state_name' => 'Haut-Ogooue',
                'country_id' => 79,
            ),
            326 => 
            array (
                'id' => 1327,
                'state_name' => 'Moyen-Ogooue',
                'country_id' => 79,
            ),
            327 => 
            array (
                'id' => 1328,
                'state_name' => 'Ngounie',
                'country_id' => 79,
            ),
            328 => 
            array (
                'id' => 1329,
                'state_name' => 'Nyanga',
                'country_id' => 79,
            ),
            329 => 
            array (
                'id' => 1330,
                'state_name' => 'Ogooue-Ivindo',
                'country_id' => 79,
            ),
            330 => 
            array (
                'id' => 1331,
                'state_name' => 'Ogooue-Lolo',
                'country_id' => 79,
            ),
            331 => 
            array (
                'id' => 1332,
                'state_name' => 'Ogooue-Maritime',
                'country_id' => 79,
            ),
            332 => 
            array (
                'id' => 1333,
                'state_name' => 'Woleu-Ntem',
                'country_id' => 79,
            ),
            333 => 
            array (
                'id' => 1334,
                'state_name' => 'Banjul',
                'country_id' => 80,
            ),
            334 => 
            array (
                'id' => 1335,
                'state_name' => 'Basse',
                'country_id' => 80,
            ),
            335 => 
            array (
                'id' => 1336,
                'state_name' => 'Brikama',
                'country_id' => 80,
            ),
            336 => 
            array (
                'id' => 1337,
                'state_name' => 'Janjanbureh',
                'country_id' => 80,
            ),
            337 => 
            array (
                'id' => 1338,
                'state_name' => 'Kanifing',
                'country_id' => 80,
            ),
            338 => 
            array (
                'id' => 1339,
                'state_name' => 'Kerewan',
                'country_id' => 80,
            ),
            339 => 
            array (
                'id' => 1340,
                'state_name' => 'Kuntaur',
                'country_id' => 80,
            ),
            340 => 
            array (
                'id' => 1341,
                'state_name' => 'Mansakonko',
                'country_id' => 80,
            ),
            341 => 
            array (
                'id' => 1342,
                'state_name' => 'Abhasia',
                'country_id' => 81,
            ),
            342 => 
            array (
                'id' => 1343,
                'state_name' => 'Ajaria',
                'country_id' => 81,
            ),
            343 => 
            array (
                'id' => 1344,
                'state_name' => 'Guria',
                'country_id' => 81,
            ),
            344 => 
            array (
                'id' => 1345,
                'state_name' => 'Imereti',
                'country_id' => 81,
            ),
            345 => 
            array (
                'id' => 1346,
                'state_name' => 'Kaheti',
                'country_id' => 81,
            ),
            346 => 
            array (
                'id' => 1347,
                'state_name' => 'Kvemo Kartli',
                'country_id' => 81,
            ),
            347 => 
            array (
                'id' => 1348,
                'state_name' => 'Mcheta-Mtianeti',
                'country_id' => 81,
            ),
            348 => 
            array (
                'id' => 1349,
                'state_name' => 'Racha',
                'country_id' => 81,
            ),
            349 => 
            array (
                'id' => 1350,
                'state_name' => 'Samagrelo-Zemo Svaneti',
                'country_id' => 81,
            ),
            350 => 
            array (
                'id' => 1351,
                'state_name' => 'Samche-Zhavaheti',
                'country_id' => 81,
            ),
            351 => 
            array (
                'id' => 1352,
                'state_name' => 'Shida Kartli',
                'country_id' => 81,
            ),
            352 => 
            array (
                'id' => 1353,
                'state_name' => 'Tbilisi',
                'country_id' => 81,
            ),
            353 => 
            array (
                'id' => 1354,
                'state_name' => 'Auvergne',
                'country_id' => 82,
            ),
            354 => 
            array (
                'id' => 1355,
                'state_name' => 'Baden-Wurttemberg',
                'country_id' => 82,
            ),
            355 => 
            array (
                'id' => 1356,
                'state_name' => 'Bavaria',
                'country_id' => 82,
            ),
            356 => 
            array (
                'id' => 1357,
                'state_name' => 'Bayern',
                'country_id' => 82,
            ),
            357 => 
            array (
                'id' => 1358,
                'state_name' => 'Beilstein Wurtt',
                'country_id' => 82,
            ),
            358 => 
            array (
                'id' => 1359,
                'state_name' => 'Berlin',
                'country_id' => 82,
            ),
            359 => 
            array (
                'id' => 1360,
                'state_name' => 'Brandenburg',
                'country_id' => 82,
            ),
            360 => 
            array (
                'id' => 1361,
                'state_name' => 'Bremen',
                'country_id' => 82,
            ),
            361 => 
            array (
                'id' => 1362,
                'state_name' => 'Dreisbach',
                'country_id' => 82,
            ),
            362 => 
            array (
                'id' => 1363,
                'state_name' => 'Freistaat Bayern',
                'country_id' => 82,
            ),
            363 => 
            array (
                'id' => 1364,
                'state_name' => 'Hamburg',
                'country_id' => 82,
            ),
            364 => 
            array (
                'id' => 1365,
                'state_name' => 'Hannover',
                'country_id' => 82,
            ),
            365 => 
            array (
                'id' => 1366,
                'state_name' => 'Heroldstatt',
                'country_id' => 82,
            ),
            366 => 
            array (
                'id' => 1367,
                'state_name' => 'Hessen',
                'country_id' => 82,
            ),
            367 => 
            array (
                'id' => 1368,
                'state_name' => 'Kortenberg',
                'country_id' => 82,
            ),
            368 => 
            array (
                'id' => 1369,
                'state_name' => 'Laasdorf',
                'country_id' => 82,
            ),
            369 => 
            array (
                'id' => 1370,
                'state_name' => 'Land Baden-Wurttemberg',
                'country_id' => 82,
            ),
            370 => 
            array (
                'id' => 1371,
                'state_name' => 'Land Bayern',
                'country_id' => 82,
            ),
            371 => 
            array (
                'id' => 1372,
                'state_name' => 'Land Brandenburg',
                'country_id' => 82,
            ),
            372 => 
            array (
                'id' => 1373,
                'state_name' => 'Land Hessen',
                'country_id' => 82,
            ),
            373 => 
            array (
                'id' => 1374,
                'state_name' => 'Land Mecklenburg-Vorpommern',
                'country_id' => 82,
            ),
            374 => 
            array (
                'id' => 1375,
                'state_name' => 'Land Nordrhein-Westfalen',
                'country_id' => 82,
            ),
            375 => 
            array (
                'id' => 1376,
                'state_name' => 'Land Rheinland-Pfalz',
                'country_id' => 82,
            ),
            376 => 
            array (
                'id' => 1377,
                'state_name' => 'Land Sachsen',
                'country_id' => 82,
            ),
            377 => 
            array (
                'id' => 1378,
                'state_name' => 'Land Sachsen-Anhalt',
                'country_id' => 82,
            ),
            378 => 
            array (
                'id' => 1379,
                'state_name' => 'Land Thuringen',
                'country_id' => 82,
            ),
            379 => 
            array (
                'id' => 1380,
                'state_name' => 'Lower Saxony',
                'country_id' => 82,
            ),
            380 => 
            array (
                'id' => 1381,
                'state_name' => 'Mecklenburg-Vorpommern',
                'country_id' => 82,
            ),
            381 => 
            array (
                'id' => 1382,
                'state_name' => 'Mulfingen',
                'country_id' => 82,
            ),
            382 => 
            array (
                'id' => 1383,
                'state_name' => 'Munich',
                'country_id' => 82,
            ),
            383 => 
            array (
                'id' => 1384,
                'state_name' => 'Neubeuern',
                'country_id' => 82,
            ),
            384 => 
            array (
                'id' => 1385,
                'state_name' => 'Niedersachsen',
                'country_id' => 82,
            ),
            385 => 
            array (
                'id' => 1386,
                'state_name' => 'Noord-Holland',
                'country_id' => 82,
            ),
            386 => 
            array (
                'id' => 1387,
                'state_name' => 'Nordrhein-Westfalen',
                'country_id' => 82,
            ),
            387 => 
            array (
                'id' => 1388,
                'state_name' => 'North Rhine-Westphalia',
                'country_id' => 82,
            ),
            388 => 
            array (
                'id' => 1389,
                'state_name' => 'Osterode',
                'country_id' => 82,
            ),
            389 => 
            array (
                'id' => 1390,
                'state_name' => 'Rheinland-Pfalz',
                'country_id' => 82,
            ),
            390 => 
            array (
                'id' => 1391,
                'state_name' => 'Rhineland-Palatinate',
                'country_id' => 82,
            ),
            391 => 
            array (
                'id' => 1392,
                'state_name' => 'Saarland',
                'country_id' => 82,
            ),
            392 => 
            array (
                'id' => 1393,
                'state_name' => 'Sachsen',
                'country_id' => 82,
            ),
            393 => 
            array (
                'id' => 1394,
                'state_name' => 'Sachsen-Anhalt',
                'country_id' => 82,
            ),
            394 => 
            array (
                'id' => 1395,
                'state_name' => 'Saxony',
                'country_id' => 82,
            ),
            395 => 
            array (
                'id' => 1396,
                'state_name' => 'Schleswig-Holstein',
                'country_id' => 82,
            ),
            396 => 
            array (
                'id' => 1397,
                'state_name' => 'Thuringia',
                'country_id' => 82,
            ),
            397 => 
            array (
                'id' => 1398,
                'state_name' => 'Webling',
                'country_id' => 82,
            ),
            398 => 
            array (
                'id' => 1399,
                'state_name' => 'Weinstrabe',
                'country_id' => 82,
            ),
            399 => 
            array (
                'id' => 1400,
                'state_name' => 'schlobborn',
                'country_id' => 82,
            ),
            400 => 
            array (
                'id' => 1401,
                'state_name' => 'Ashanti',
                'country_id' => 83,
            ),
            401 => 
            array (
                'id' => 1402,
                'state_name' => 'Brong-Ahafo',
                'country_id' => 83,
            ),
            402 => 
            array (
                'id' => 1403,
                'state_name' => 'Central',
                'country_id' => 83,
            ),
            403 => 
            array (
                'id' => 1404,
                'state_name' => 'Eastern',
                'country_id' => 83,
            ),
            404 => 
            array (
                'id' => 1405,
                'state_name' => 'Greater Accra',
                'country_id' => 83,
            ),
            405 => 
            array (
                'id' => 1406,
                'state_name' => 'Northern',
                'country_id' => 83,
            ),
            406 => 
            array (
                'id' => 1407,
                'state_name' => 'Upper East',
                'country_id' => 83,
            ),
            407 => 
            array (
                'id' => 1408,
                'state_name' => 'Upper West',
                'country_id' => 83,
            ),
            408 => 
            array (
                'id' => 1409,
                'state_name' => 'Volta',
                'country_id' => 83,
            ),
            409 => 
            array (
                'id' => 1410,
                'state_name' => 'Western',
                'country_id' => 83,
            ),
            410 => 
            array (
                'id' => 1411,
                'state_name' => 'Gibraltar',
                'country_id' => 84,
            ),
            411 => 
            array (
                'id' => 1412,
                'state_name' => 'Acharnes',
                'country_id' => 85,
            ),
            412 => 
            array (
                'id' => 1413,
                'state_name' => 'Ahaia',
                'country_id' => 85,
            ),
            413 => 
            array (
                'id' => 1414,
                'state_name' => 'Aitolia kai Akarnania',
                'country_id' => 85,
            ),
            414 => 
            array (
                'id' => 1415,
                'state_name' => 'Argolis',
                'country_id' => 85,
            ),
            415 => 
            array (
                'id' => 1416,
                'state_name' => 'Arkadia',
                'country_id' => 85,
            ),
            416 => 
            array (
                'id' => 1417,
                'state_name' => 'Arta',
                'country_id' => 85,
            ),
            417 => 
            array (
                'id' => 1418,
                'state_name' => 'Attica',
                'country_id' => 85,
            ),
            418 => 
            array (
                'id' => 1419,
                'state_name' => 'Attiki',
                'country_id' => 85,
            ),
            419 => 
            array (
                'id' => 1420,
                'state_name' => 'Ayion Oros',
                'country_id' => 85,
            ),
            420 => 
            array (
                'id' => 1421,
                'state_name' => 'Crete',
                'country_id' => 85,
            ),
            421 => 
            array (
                'id' => 1422,
                'state_name' => 'Dodekanisos',
                'country_id' => 85,
            ),
            422 => 
            array (
                'id' => 1423,
                'state_name' => 'Drama',
                'country_id' => 85,
            ),
            423 => 
            array (
                'id' => 1424,
                'state_name' => 'Evia',
                'country_id' => 85,
            ),
            424 => 
            array (
                'id' => 1425,
                'state_name' => 'Evritania',
                'country_id' => 85,
            ),
            425 => 
            array (
                'id' => 1426,
                'state_name' => 'Evros',
                'country_id' => 85,
            ),
            426 => 
            array (
                'id' => 1427,
                'state_name' => 'Evvoia',
                'country_id' => 85,
            ),
            427 => 
            array (
                'id' => 1428,
                'state_name' => 'Florina',
                'country_id' => 85,
            ),
            428 => 
            array (
                'id' => 1429,
                'state_name' => 'Fokis',
                'country_id' => 85,
            ),
            429 => 
            array (
                'id' => 1430,
                'state_name' => 'Fthiotis',
                'country_id' => 85,
            ),
            430 => 
            array (
                'id' => 1431,
                'state_name' => 'Grevena',
                'country_id' => 85,
            ),
            431 => 
            array (
                'id' => 1432,
                'state_name' => 'Halandri',
                'country_id' => 85,
            ),
            432 => 
            array (
                'id' => 1433,
                'state_name' => 'Halkidiki',
                'country_id' => 85,
            ),
            433 => 
            array (
                'id' => 1434,
                'state_name' => 'Hania',
                'country_id' => 85,
            ),
            434 => 
            array (
                'id' => 1435,
                'state_name' => 'Heraklion',
                'country_id' => 85,
            ),
            435 => 
            array (
                'id' => 1436,
                'state_name' => 'Hios',
                'country_id' => 85,
            ),
            436 => 
            array (
                'id' => 1437,
                'state_name' => 'Ilia',
                'country_id' => 85,
            ),
            437 => 
            array (
                'id' => 1438,
                'state_name' => 'Imathia',
                'country_id' => 85,
            ),
            438 => 
            array (
                'id' => 1439,
                'state_name' => 'Ioannina',
                'country_id' => 85,
            ),
            439 => 
            array (
                'id' => 1440,
                'state_name' => 'Iraklion',
                'country_id' => 85,
            ),
            440 => 
            array (
                'id' => 1441,
                'state_name' => 'Karditsa',
                'country_id' => 85,
            ),
            441 => 
            array (
                'id' => 1442,
                'state_name' => 'Kastoria',
                'country_id' => 85,
            ),
            442 => 
            array (
                'id' => 1443,
                'state_name' => 'Kavala',
                'country_id' => 85,
            ),
            443 => 
            array (
                'id' => 1444,
                'state_name' => 'Kefallinia',
                'country_id' => 85,
            ),
            444 => 
            array (
                'id' => 1445,
                'state_name' => 'Kerkira',
                'country_id' => 85,
            ),
            445 => 
            array (
                'id' => 1446,
                'state_name' => 'Kiklades',
                'country_id' => 85,
            ),
            446 => 
            array (
                'id' => 1447,
                'state_name' => 'Kilkis',
                'country_id' => 85,
            ),
            447 => 
            array (
                'id' => 1448,
                'state_name' => 'Korinthia',
                'country_id' => 85,
            ),
            448 => 
            array (
                'id' => 1449,
                'state_name' => 'Kozani',
                'country_id' => 85,
            ),
            449 => 
            array (
                'id' => 1450,
                'state_name' => 'Lakonia',
                'country_id' => 85,
            ),
            450 => 
            array (
                'id' => 1451,
                'state_name' => 'Larisa',
                'country_id' => 85,
            ),
            451 => 
            array (
                'id' => 1452,
                'state_name' => 'Lasithi',
                'country_id' => 85,
            ),
            452 => 
            array (
                'id' => 1453,
                'state_name' => 'Lesvos',
                'country_id' => 85,
            ),
            453 => 
            array (
                'id' => 1454,
                'state_name' => 'Levkas',
                'country_id' => 85,
            ),
            454 => 
            array (
                'id' => 1455,
                'state_name' => 'Magnisia',
                'country_id' => 85,
            ),
            455 => 
            array (
                'id' => 1456,
                'state_name' => 'Messinia',
                'country_id' => 85,
            ),
            456 => 
            array (
                'id' => 1457,
                'state_name' => 'Nomos Attikis',
                'country_id' => 85,
            ),
            457 => 
            array (
                'id' => 1458,
                'state_name' => 'Nomos Zakynthou',
                'country_id' => 85,
            ),
            458 => 
            array (
                'id' => 1459,
                'state_name' => 'Pella',
                'country_id' => 85,
            ),
            459 => 
            array (
                'id' => 1460,
                'state_name' => 'Pieria',
                'country_id' => 85,
            ),
            460 => 
            array (
                'id' => 1461,
                'state_name' => 'Piraios',
                'country_id' => 85,
            ),
            461 => 
            array (
                'id' => 1462,
                'state_name' => 'Preveza',
                'country_id' => 85,
            ),
            462 => 
            array (
                'id' => 1463,
                'state_name' => 'Rethimni',
                'country_id' => 85,
            ),
            463 => 
            array (
                'id' => 1464,
                'state_name' => 'Rodopi',
                'country_id' => 85,
            ),
            464 => 
            array (
                'id' => 1465,
                'state_name' => 'Samos',
                'country_id' => 85,
            ),
            465 => 
            array (
                'id' => 1466,
                'state_name' => 'Serrai',
                'country_id' => 85,
            ),
            466 => 
            array (
                'id' => 1467,
                'state_name' => 'Thesprotia',
                'country_id' => 85,
            ),
            467 => 
            array (
                'id' => 1468,
                'state_name' => 'Thessaloniki',
                'country_id' => 85,
            ),
            468 => 
            array (
                'id' => 1469,
                'state_name' => 'Trikala',
                'country_id' => 85,
            ),
            469 => 
            array (
                'id' => 1470,
                'state_name' => 'Voiotia',
                'country_id' => 85,
            ),
            470 => 
            array (
                'id' => 1471,
                'state_name' => 'West Greece',
                'country_id' => 85,
            ),
            471 => 
            array (
                'id' => 1472,
                'state_name' => 'Xanthi',
                'country_id' => 85,
            ),
            472 => 
            array (
                'id' => 1473,
                'state_name' => 'Zakinthos',
                'country_id' => 85,
            ),
            473 => 
            array (
                'id' => 1474,
                'state_name' => 'Aasiaat',
                'country_id' => 86,
            ),
            474 => 
            array (
                'id' => 1475,
                'state_name' => 'Ammassalik',
                'country_id' => 86,
            ),
            475 => 
            array (
                'id' => 1476,
                'state_name' => 'Illoqqortoormiut',
                'country_id' => 86,
            ),
            476 => 
            array (
                'id' => 1477,
                'state_name' => 'Ilulissat',
                'country_id' => 86,
            ),
            477 => 
            array (
                'id' => 1478,
                'state_name' => 'Ivittuut',
                'country_id' => 86,
            ),
            478 => 
            array (
                'id' => 1479,
                'state_name' => 'Kangaatsiaq',
                'country_id' => 86,
            ),
            479 => 
            array (
                'id' => 1480,
                'state_name' => 'Maniitsoq',
                'country_id' => 86,
            ),
            480 => 
            array (
                'id' => 1481,
                'state_name' => 'Nanortalik',
                'country_id' => 86,
            ),
            481 => 
            array (
                'id' => 1482,
                'state_name' => 'Narsaq',
                'country_id' => 86,
            ),
            482 => 
            array (
                'id' => 1483,
                'state_name' => 'Nuuk',
                'country_id' => 86,
            ),
            483 => 
            array (
                'id' => 1484,
                'state_name' => 'Paamiut',
                'country_id' => 86,
            ),
            484 => 
            array (
                'id' => 1485,
                'state_name' => 'Qaanaaq',
                'country_id' => 86,
            ),
            485 => 
            array (
                'id' => 1486,
                'state_name' => 'Qaqortoq',
                'country_id' => 86,
            ),
            486 => 
            array (
                'id' => 1487,
                'state_name' => 'Qasigiannguit',
                'country_id' => 86,
            ),
            487 => 
            array (
                'id' => 1488,
                'state_name' => 'Qeqertarsuaq',
                'country_id' => 86,
            ),
            488 => 
            array (
                'id' => 1489,
                'state_name' => 'Sisimiut',
                'country_id' => 86,
            ),
            489 => 
            array (
                'id' => 1490,
                'state_name' => 'Udenfor kommunal inddeling',
                'country_id' => 86,
            ),
            490 => 
            array (
                'id' => 1491,
                'state_name' => 'Upernavik',
                'country_id' => 86,
            ),
            491 => 
            array (
                'id' => 1492,
                'state_name' => 'Uummannaq',
                'country_id' => 86,
            ),
            492 => 
            array (
                'id' => 1493,
                'state_name' => 'Carriacou-Petite Martinique',
                'country_id' => 87,
            ),
            493 => 
            array (
                'id' => 1494,
                'state_name' => 'Saint Andrew',
                'country_id' => 87,
            ),
            494 => 
            array (
                'id' => 1495,
                'state_name' => 'Saint Davids',
                'country_id' => 87,
            ),
            495 => 
            array (
                'id' => 1496,
                'state_name' => 'Saint George\'s',
                'country_id' => 87,
            ),
            496 => 
            array (
                'id' => 1497,
                'state_name' => 'Saint John',
                'country_id' => 87,
            ),
            497 => 
            array (
                'id' => 1498,
                'state_name' => 'Saint Mark',
                'country_id' => 87,
            ),
            498 => 
            array (
                'id' => 1499,
                'state_name' => 'Saint Patrick',
                'country_id' => 87,
            ),
            499 => 
            array (
                'id' => 1500,
                'state_name' => 'Basse-Terre',
                'country_id' => 88,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'state_name' => 'Grande-Terre',
                'country_id' => 88,
            ),
            1 => 
            array (
                'id' => 1502,
                'state_name' => 'Iles des Saintes',
                'country_id' => 88,
            ),
            2 => 
            array (
                'id' => 1503,
                'state_name' => 'La Desirade',
                'country_id' => 88,
            ),
            3 => 
            array (
                'id' => 1504,
                'state_name' => 'Marie-Galante',
                'country_id' => 88,
            ),
            4 => 
            array (
                'id' => 1505,
                'state_name' => 'Saint Barthelemy',
                'country_id' => 88,
            ),
            5 => 
            array (
                'id' => 1506,
                'state_name' => 'Saint Martin',
                'country_id' => 88,
            ),
            6 => 
            array (
                'id' => 1507,
                'state_name' => 'Agana Heights',
                'country_id' => 89,
            ),
            7 => 
            array (
                'id' => 1508,
                'state_name' => 'Agat',
                'country_id' => 89,
            ),
            8 => 
            array (
                'id' => 1509,
                'state_name' => 'Barrigada',
                'country_id' => 89,
            ),
            9 => 
            array (
                'id' => 1510,
                'state_name' => 'Chalan-Pago-Ordot',
                'country_id' => 89,
            ),
            10 => 
            array (
                'id' => 1511,
                'state_name' => 'Dededo',
                'country_id' => 89,
            ),
            11 => 
            array (
                'id' => 1512,
                'state_name' => 'Hagatna',
                'country_id' => 89,
            ),
            12 => 
            array (
                'id' => 1513,
                'state_name' => 'Inarajan',
                'country_id' => 89,
            ),
            13 => 
            array (
                'id' => 1514,
                'state_name' => 'Mangilao',
                'country_id' => 89,
            ),
            14 => 
            array (
                'id' => 1515,
                'state_name' => 'Merizo',
                'country_id' => 89,
            ),
            15 => 
            array (
                'id' => 1516,
                'state_name' => 'Mongmong-Toto-Maite',
                'country_id' => 89,
            ),
            16 => 
            array (
                'id' => 1517,
                'state_name' => 'Santa Rita',
                'country_id' => 89,
            ),
            17 => 
            array (
                'id' => 1518,
                'state_name' => 'Sinajana',
                'country_id' => 89,
            ),
            18 => 
            array (
                'id' => 1519,
                'state_name' => 'Talofofo',
                'country_id' => 89,
            ),
            19 => 
            array (
                'id' => 1520,
                'state_name' => 'Tamuning',
                'country_id' => 89,
            ),
            20 => 
            array (
                'id' => 1521,
                'state_name' => 'Yigo',
                'country_id' => 89,
            ),
            21 => 
            array (
                'id' => 1522,
                'state_name' => 'Yona',
                'country_id' => 89,
            ),
            22 => 
            array (
                'id' => 1523,
                'state_name' => 'Alta Verapaz',
                'country_id' => 90,
            ),
            23 => 
            array (
                'id' => 1524,
                'state_name' => 'Baja Verapaz',
                'country_id' => 90,
            ),
            24 => 
            array (
                'id' => 1525,
                'state_name' => 'Chimaltenango',
                'country_id' => 90,
            ),
            25 => 
            array (
                'id' => 1526,
                'state_name' => 'Chiquimula',
                'country_id' => 90,
            ),
            26 => 
            array (
                'id' => 1527,
                'state_name' => 'El Progreso',
                'country_id' => 90,
            ),
            27 => 
            array (
                'id' => 1528,
                'state_name' => 'Escuintla',
                'country_id' => 90,
            ),
            28 => 
            array (
                'id' => 1529,
                'state_name' => 'Guatemala',
                'country_id' => 90,
            ),
            29 => 
            array (
                'id' => 1530,
                'state_name' => 'Huehuetenango',
                'country_id' => 90,
            ),
            30 => 
            array (
                'id' => 1531,
                'state_name' => 'Izabal',
                'country_id' => 90,
            ),
            31 => 
            array (
                'id' => 1532,
                'state_name' => 'Jalapa',
                'country_id' => 90,
            ),
            32 => 
            array (
                'id' => 1533,
                'state_name' => 'Jutiapa',
                'country_id' => 90,
            ),
            33 => 
            array (
                'id' => 1534,
                'state_name' => 'Peten',
                'country_id' => 90,
            ),
            34 => 
            array (
                'id' => 1535,
                'state_name' => 'Quezaltenango',
                'country_id' => 90,
            ),
            35 => 
            array (
                'id' => 1536,
                'state_name' => 'Quiche',
                'country_id' => 90,
            ),
            36 => 
            array (
                'id' => 1537,
                'state_name' => 'Retalhuleu',
                'country_id' => 90,
            ),
            37 => 
            array (
                'id' => 1538,
                'state_name' => 'Sacatepequez',
                'country_id' => 90,
            ),
            38 => 
            array (
                'id' => 1539,
                'state_name' => 'San Marcos',
                'country_id' => 90,
            ),
            39 => 
            array (
                'id' => 1540,
                'state_name' => 'Santa Rosa',
                'country_id' => 90,
            ),
            40 => 
            array (
                'id' => 1541,
                'state_name' => 'Solola',
                'country_id' => 90,
            ),
            41 => 
            array (
                'id' => 1542,
                'state_name' => 'Suchitepequez',
                'country_id' => 90,
            ),
            42 => 
            array (
                'id' => 1543,
                'state_name' => 'Totonicapan',
                'country_id' => 90,
            ),
            43 => 
            array (
                'id' => 1544,
                'state_name' => 'Zacapa',
                'country_id' => 90,
            ),
            44 => 
            array (
                'id' => 1545,
                'state_name' => 'Alderney',
                'country_id' => 91,
            ),
            45 => 
            array (
                'id' => 1546,
                'state_name' => 'Castel',
                'country_id' => 91,
            ),
            46 => 
            array (
                'id' => 1547,
                'state_name' => 'Forest',
                'country_id' => 91,
            ),
            47 => 
            array (
                'id' => 1548,
                'state_name' => 'Saint Andrew',
                'country_id' => 91,
            ),
            48 => 
            array (
                'id' => 1549,
                'state_name' => 'Saint Martin',
                'country_id' => 91,
            ),
            49 => 
            array (
                'id' => 1550,
                'state_name' => 'Saint Peter Port',
                'country_id' => 91,
            ),
            50 => 
            array (
                'id' => 1551,
                'state_name' => 'Saint Pierre du Bois',
                'country_id' => 91,
            ),
            51 => 
            array (
                'id' => 1552,
                'state_name' => 'Saint Sampson',
                'country_id' => 91,
            ),
            52 => 
            array (
                'id' => 1553,
                'state_name' => 'Saint Saviour',
                'country_id' => 91,
            ),
            53 => 
            array (
                'id' => 1554,
                'state_name' => 'Sark',
                'country_id' => 91,
            ),
            54 => 
            array (
                'id' => 1555,
                'state_name' => 'Torteval',
                'country_id' => 91,
            ),
            55 => 
            array (
                'id' => 1556,
                'state_name' => 'Vale',
                'country_id' => 91,
            ),
            56 => 
            array (
                'id' => 1557,
                'state_name' => 'Beyla',
                'country_id' => 92,
            ),
            57 => 
            array (
                'id' => 1558,
                'state_name' => 'Boffa',
                'country_id' => 92,
            ),
            58 => 
            array (
                'id' => 1559,
                'state_name' => 'Boke',
                'country_id' => 92,
            ),
            59 => 
            array (
                'id' => 1560,
                'state_name' => 'Conakry',
                'country_id' => 92,
            ),
            60 => 
            array (
                'id' => 1561,
                'state_name' => 'Coyah',
                'country_id' => 92,
            ),
            61 => 
            array (
                'id' => 1562,
                'state_name' => 'Dabola',
                'country_id' => 92,
            ),
            62 => 
            array (
                'id' => 1563,
                'state_name' => 'Dalaba',
                'country_id' => 92,
            ),
            63 => 
            array (
                'id' => 1564,
                'state_name' => 'Dinguiraye',
                'country_id' => 92,
            ),
            64 => 
            array (
                'id' => 1565,
                'state_name' => 'Faranah',
                'country_id' => 92,
            ),
            65 => 
            array (
                'id' => 1566,
                'state_name' => 'Forecariah',
                'country_id' => 92,
            ),
            66 => 
            array (
                'id' => 1567,
                'state_name' => 'Fria',
                'country_id' => 92,
            ),
            67 => 
            array (
                'id' => 1568,
                'state_name' => 'Gaoual',
                'country_id' => 92,
            ),
            68 => 
            array (
                'id' => 1569,
                'state_name' => 'Gueckedou',
                'country_id' => 92,
            ),
            69 => 
            array (
                'id' => 1570,
                'state_name' => 'Kankan',
                'country_id' => 92,
            ),
            70 => 
            array (
                'id' => 1571,
                'state_name' => 'Kerouane',
                'country_id' => 92,
            ),
            71 => 
            array (
                'id' => 1572,
                'state_name' => 'Kindia',
                'country_id' => 92,
            ),
            72 => 
            array (
                'id' => 1573,
                'state_name' => 'Kissidougou',
                'country_id' => 92,
            ),
            73 => 
            array (
                'id' => 1574,
                'state_name' => 'Koubia',
                'country_id' => 92,
            ),
            74 => 
            array (
                'id' => 1575,
                'state_name' => 'Koundara',
                'country_id' => 92,
            ),
            75 => 
            array (
                'id' => 1576,
                'state_name' => 'Kouroussa',
                'country_id' => 92,
            ),
            76 => 
            array (
                'id' => 1577,
                'state_name' => 'Labe',
                'country_id' => 92,
            ),
            77 => 
            array (
                'id' => 1578,
                'state_name' => 'Lola',
                'country_id' => 92,
            ),
            78 => 
            array (
                'id' => 1579,
                'state_name' => 'Macenta',
                'country_id' => 92,
            ),
            79 => 
            array (
                'id' => 1580,
                'state_name' => 'Mali',
                'country_id' => 92,
            ),
            80 => 
            array (
                'id' => 1581,
                'state_name' => 'Mamou',
                'country_id' => 92,
            ),
            81 => 
            array (
                'id' => 1582,
                'state_name' => 'Mandiana',
                'country_id' => 92,
            ),
            82 => 
            array (
                'id' => 1583,
                'state_name' => 'Nzerekore',
                'country_id' => 92,
            ),
            83 => 
            array (
                'id' => 1584,
                'state_name' => 'Pita',
                'country_id' => 92,
            ),
            84 => 
            array (
                'id' => 1585,
                'state_name' => 'Siguiri',
                'country_id' => 92,
            ),
            85 => 
            array (
                'id' => 1586,
                'state_name' => 'Telimele',
                'country_id' => 92,
            ),
            86 => 
            array (
                'id' => 1587,
                'state_name' => 'Tougue',
                'country_id' => 92,
            ),
            87 => 
            array (
                'id' => 1588,
                'state_name' => 'Yomou',
                'country_id' => 92,
            ),
            88 => 
            array (
                'id' => 1589,
                'state_name' => 'Bafata',
                'country_id' => 93,
            ),
            89 => 
            array (
                'id' => 1590,
                'state_name' => 'Bissau',
                'country_id' => 93,
            ),
            90 => 
            array (
                'id' => 1591,
                'state_name' => 'Bolama',
                'country_id' => 93,
            ),
            91 => 
            array (
                'id' => 1592,
                'state_name' => 'Cacheu',
                'country_id' => 93,
            ),
            92 => 
            array (
                'id' => 1593,
                'state_name' => 'Gabu',
                'country_id' => 93,
            ),
            93 => 
            array (
                'id' => 1594,
                'state_name' => 'Oio',
                'country_id' => 93,
            ),
            94 => 
            array (
                'id' => 1595,
                'state_name' => 'Quinara',
                'country_id' => 93,
            ),
            95 => 
            array (
                'id' => 1596,
                'state_name' => 'Tombali',
                'country_id' => 93,
            ),
            96 => 
            array (
                'id' => 1597,
                'state_name' => 'Barima-Waini',
                'country_id' => 94,
            ),
            97 => 
            array (
                'id' => 1598,
                'state_name' => 'Cuyuni-Mazaruni',
                'country_id' => 94,
            ),
            98 => 
            array (
                'id' => 1599,
                'state_name' => 'Demerara-Mahaica',
                'country_id' => 94,
            ),
            99 => 
            array (
                'id' => 1600,
                'state_name' => 'East Berbice-Corentyne',
                'country_id' => 94,
            ),
            100 => 
            array (
                'id' => 1601,
                'state_name' => 'Essequibo Islands-West Demerar',
                'country_id' => 94,
            ),
            101 => 
            array (
                'id' => 1602,
                'state_name' => 'Mahaica-Berbice',
                'country_id' => 94,
            ),
            102 => 
            array (
                'id' => 1603,
                'state_name' => 'Pomeroon-Supenaam',
                'country_id' => 94,
            ),
            103 => 
            array (
                'id' => 1604,
                'state_name' => 'Potaro-Siparuni',
                'country_id' => 94,
            ),
            104 => 
            array (
                'id' => 1605,
                'state_name' => 'Upper Demerara-Berbice',
                'country_id' => 94,
            ),
            105 => 
            array (
                'id' => 1606,
                'state_name' => 'Upper Takutu-Upper Essequibo',
                'country_id' => 94,
            ),
            106 => 
            array (
                'id' => 1607,
                'state_name' => 'Artibonite',
                'country_id' => 95,
            ),
            107 => 
            array (
                'id' => 1608,
                'state_name' => 'Centre',
                'country_id' => 95,
            ),
            108 => 
            array (
                'id' => 1609,
                'state_name' => 'Grand\'Anse',
                'country_id' => 95,
            ),
            109 => 
            array (
                'id' => 1610,
                'state_name' => 'Nord',
                'country_id' => 95,
            ),
            110 => 
            array (
                'id' => 1611,
                'state_name' => 'Nord-Est',
                'country_id' => 95,
            ),
            111 => 
            array (
                'id' => 1612,
                'state_name' => 'Nord-Ouest',
                'country_id' => 95,
            ),
            112 => 
            array (
                'id' => 1613,
                'state_name' => 'Ouest',
                'country_id' => 95,
            ),
            113 => 
            array (
                'id' => 1614,
                'state_name' => 'Sud',
                'country_id' => 95,
            ),
            114 => 
            array (
                'id' => 1615,
                'state_name' => 'Sud-Est',
                'country_id' => 95,
            ),
            115 => 
            array (
                'id' => 1616,
                'state_name' => 'Heard and McDonald Islands',
                'country_id' => 96,
            ),
            116 => 
            array (
                'id' => 1617,
                'state_name' => 'Atlantida',
                'country_id' => 97,
            ),
            117 => 
            array (
                'id' => 1618,
                'state_name' => 'Choluteca',
                'country_id' => 97,
            ),
            118 => 
            array (
                'id' => 1619,
                'state_name' => 'Colon',
                'country_id' => 97,
            ),
            119 => 
            array (
                'id' => 1620,
                'state_name' => 'Comayagua',
                'country_id' => 97,
            ),
            120 => 
            array (
                'id' => 1621,
                'state_name' => 'Copan',
                'country_id' => 97,
            ),
            121 => 
            array (
                'id' => 1622,
                'state_name' => 'Cortes',
                'country_id' => 97,
            ),
            122 => 
            array (
                'id' => 1623,
                'state_name' => 'Distrito Central',
                'country_id' => 97,
            ),
            123 => 
            array (
                'id' => 1624,
                'state_name' => 'El Paraiso',
                'country_id' => 97,
            ),
            124 => 
            array (
                'id' => 1625,
                'state_name' => 'Francisco Morazan',
                'country_id' => 97,
            ),
            125 => 
            array (
                'id' => 1626,
                'state_name' => 'Gracias a Dios',
                'country_id' => 97,
            ),
            126 => 
            array (
                'id' => 1627,
                'state_name' => 'Intibuca',
                'country_id' => 97,
            ),
            127 => 
            array (
                'id' => 1628,
                'state_name' => 'Islas de la Bahia',
                'country_id' => 97,
            ),
            128 => 
            array (
                'id' => 1629,
                'state_name' => 'La Paz',
                'country_id' => 97,
            ),
            129 => 
            array (
                'id' => 1630,
                'state_name' => 'Lempira',
                'country_id' => 97,
            ),
            130 => 
            array (
                'id' => 1631,
                'state_name' => 'Ocotepeque',
                'country_id' => 97,
            ),
            131 => 
            array (
                'id' => 1632,
                'state_name' => 'Olancho',
                'country_id' => 97,
            ),
            132 => 
            array (
                'id' => 1633,
                'state_name' => 'Santa Barbara',
                'country_id' => 97,
            ),
            133 => 
            array (
                'id' => 1634,
                'state_name' => 'Valle',
                'country_id' => 97,
            ),
            134 => 
            array (
                'id' => 1635,
                'state_name' => 'Yoro',
                'country_id' => 97,
            ),
            135 => 
            array (
                'id' => 1636,
                'state_name' => 'Hong Kong',
                'country_id' => 98,
            ),
            136 => 
            array (
                'id' => 1637,
                'state_name' => 'Bacs-Kiskun',
                'country_id' => 99,
            ),
            137 => 
            array (
                'id' => 1638,
                'state_name' => 'Baranya',
                'country_id' => 99,
            ),
            138 => 
            array (
                'id' => 1639,
                'state_name' => 'Bekes',
                'country_id' => 99,
            ),
            139 => 
            array (
                'id' => 1640,
                'state_name' => 'Borsod-Abauj-Zemplen',
                'country_id' => 99,
            ),
            140 => 
            array (
                'id' => 1641,
                'state_name' => 'Budapest',
                'country_id' => 99,
            ),
            141 => 
            array (
                'id' => 1642,
                'state_name' => 'Csongrad',
                'country_id' => 99,
            ),
            142 => 
            array (
                'id' => 1643,
                'state_name' => 'Fejer',
                'country_id' => 99,
            ),
            143 => 
            array (
                'id' => 1644,
                'state_name' => 'Gyor-Moson-Sopron',
                'country_id' => 99,
            ),
            144 => 
            array (
                'id' => 1645,
                'state_name' => 'Hajdu-Bihar',
                'country_id' => 99,
            ),
            145 => 
            array (
                'id' => 1646,
                'state_name' => 'Heves',
                'country_id' => 99,
            ),
            146 => 
            array (
                'id' => 1647,
                'state_name' => 'Jasz-Nagykun-Szolnok',
                'country_id' => 99,
            ),
            147 => 
            array (
                'id' => 1648,
                'state_name' => 'Komarom-Esztergom',
                'country_id' => 99,
            ),
            148 => 
            array (
                'id' => 1649,
                'state_name' => 'Nograd',
                'country_id' => 99,
            ),
            149 => 
            array (
                'id' => 1650,
                'state_name' => 'Pest',
                'country_id' => 99,
            ),
            150 => 
            array (
                'id' => 1651,
                'state_name' => 'Somogy',
                'country_id' => 99,
            ),
            151 => 
            array (
                'id' => 1652,
                'state_name' => 'Szabolcs-Szatmar-Bereg',
                'country_id' => 99,
            ),
            152 => 
            array (
                'id' => 1653,
                'state_name' => 'Tolna',
                'country_id' => 99,
            ),
            153 => 
            array (
                'id' => 1654,
                'state_name' => 'Vas',
                'country_id' => 99,
            ),
            154 => 
            array (
                'id' => 1655,
                'state_name' => 'Veszprem',
                'country_id' => 99,
            ),
            155 => 
            array (
                'id' => 1656,
                'state_name' => 'Zala',
                'country_id' => 99,
            ),
            156 => 
            array (
                'id' => 1657,
                'state_name' => 'Austurland',
                'country_id' => 100,
            ),
            157 => 
            array (
                'id' => 1658,
                'state_name' => 'Gullbringusysla',
                'country_id' => 100,
            ),
            158 => 
            array (
                'id' => 1659,
                'state_name' => 'Hofu borgarsva i',
                'country_id' => 100,
            ),
            159 => 
            array (
                'id' => 1660,
                'state_name' => 'Nor urland eystra',
                'country_id' => 100,
            ),
            160 => 
            array (
                'id' => 1661,
                'state_name' => 'Nor urland vestra',
                'country_id' => 100,
            ),
            161 => 
            array (
                'id' => 1662,
                'state_name' => 'Su urland',
                'country_id' => 100,
            ),
            162 => 
            array (
                'id' => 1663,
                'state_name' => 'Su urnes',
                'country_id' => 100,
            ),
            163 => 
            array (
                'id' => 1664,
                'state_name' => 'Vestfir ir',
                'country_id' => 100,
            ),
            164 => 
            array (
                'id' => 1665,
                'state_name' => 'Vesturland',
                'country_id' => 100,
            ),
            165 => 
            array (
                'id' => 1666,
                'state_name' => 'Aceh',
                'country_id' => 102,
            ),
            166 => 
            array (
                'id' => 1667,
                'state_name' => 'Bali',
                'country_id' => 102,
            ),
            167 => 
            array (
                'id' => 1668,
                'state_name' => 'Bangka-Belitung',
                'country_id' => 102,
            ),
            168 => 
            array (
                'id' => 1669,
                'state_name' => 'Banten',
                'country_id' => 102,
            ),
            169 => 
            array (
                'id' => 1670,
                'state_name' => 'Bengkulu',
                'country_id' => 102,
            ),
            170 => 
            array (
                'id' => 1671,
                'state_name' => 'Gandaria',
                'country_id' => 102,
            ),
            171 => 
            array (
                'id' => 1672,
                'state_name' => 'Gorontalo',
                'country_id' => 102,
            ),
            172 => 
            array (
                'id' => 1673,
                'state_name' => 'Jakarta',
                'country_id' => 102,
            ),
            173 => 
            array (
                'id' => 1674,
                'state_name' => 'Jambi',
                'country_id' => 102,
            ),
            174 => 
            array (
                'id' => 1675,
                'state_name' => 'Jawa Barat',
                'country_id' => 102,
            ),
            175 => 
            array (
                'id' => 1676,
                'state_name' => 'Jawa Tengah',
                'country_id' => 102,
            ),
            176 => 
            array (
                'id' => 1677,
                'state_name' => 'Jawa Timur',
                'country_id' => 102,
            ),
            177 => 
            array (
                'id' => 1678,
                'state_name' => 'Kalimantan Barat',
                'country_id' => 102,
            ),
            178 => 
            array (
                'id' => 1679,
                'state_name' => 'Kalimantan Selatan',
                'country_id' => 102,
            ),
            179 => 
            array (
                'id' => 1680,
                'state_name' => 'Kalimantan Tengah',
                'country_id' => 102,
            ),
            180 => 
            array (
                'id' => 1681,
                'state_name' => 'Kalimantan Timur',
                'country_id' => 102,
            ),
            181 => 
            array (
                'id' => 1682,
                'state_name' => 'Kendal',
                'country_id' => 102,
            ),
            182 => 
            array (
                'id' => 1683,
                'state_name' => 'Lampung',
                'country_id' => 102,
            ),
            183 => 
            array (
                'id' => 1684,
                'state_name' => 'Maluku',
                'country_id' => 102,
            ),
            184 => 
            array (
                'id' => 1685,
                'state_name' => 'Maluku Utara',
                'country_id' => 102,
            ),
            185 => 
            array (
                'id' => 1686,
                'state_name' => 'Nusa Tenggara Barat',
                'country_id' => 102,
            ),
            186 => 
            array (
                'id' => 1687,
                'state_name' => 'Nusa Tenggara Timur',
                'country_id' => 102,
            ),
            187 => 
            array (
                'id' => 1688,
                'state_name' => 'Papua',
                'country_id' => 102,
            ),
            188 => 
            array (
                'id' => 1689,
                'state_name' => 'Riau',
                'country_id' => 102,
            ),
            189 => 
            array (
                'id' => 1690,
                'state_name' => 'Riau Kepulauan',
                'country_id' => 102,
            ),
            190 => 
            array (
                'id' => 1691,
                'state_name' => 'Solo',
                'country_id' => 102,
            ),
            191 => 
            array (
                'id' => 1692,
                'state_name' => 'Sulawesi Selatan',
                'country_id' => 102,
            ),
            192 => 
            array (
                'id' => 1693,
                'state_name' => 'Sulawesi Tengah',
                'country_id' => 102,
            ),
            193 => 
            array (
                'id' => 1694,
                'state_name' => 'Sulawesi Tenggara',
                'country_id' => 102,
            ),
            194 => 
            array (
                'id' => 1695,
                'state_name' => 'Sulawesi Utara',
                'country_id' => 102,
            ),
            195 => 
            array (
                'id' => 1696,
                'state_name' => 'Sumatera Barat',
                'country_id' => 102,
            ),
            196 => 
            array (
                'id' => 1697,
                'state_name' => 'Sumatera Selatan',
                'country_id' => 102,
            ),
            197 => 
            array (
                'id' => 1698,
                'state_name' => 'Sumatera Utara',
                'country_id' => 102,
            ),
            198 => 
            array (
                'id' => 1699,
                'state_name' => 'Yogyakarta',
                'country_id' => 102,
            ),
            199 => 
            array (
                'id' => 1700,
                'state_name' => 'Ardabil',
                'country_id' => 103,
            ),
            200 => 
            array (
                'id' => 1701,
                'state_name' => 'Azarbayjan-e Bakhtari',
                'country_id' => 103,
            ),
            201 => 
            array (
                'id' => 1702,
                'state_name' => 'Azarbayjan-e Khavari',
                'country_id' => 103,
            ),
            202 => 
            array (
                'id' => 1703,
                'state_name' => 'Bushehr',
                'country_id' => 103,
            ),
            203 => 
            array (
                'id' => 1704,
                'state_name' => 'Chahar Mahal-e Bakhtiari',
                'country_id' => 103,
            ),
            204 => 
            array (
                'id' => 1705,
                'state_name' => 'Esfahan',
                'country_id' => 103,
            ),
            205 => 
            array (
                'id' => 1706,
                'state_name' => 'Fars',
                'country_id' => 103,
            ),
            206 => 
            array (
                'id' => 1707,
                'state_name' => 'Gilan',
                'country_id' => 103,
            ),
            207 => 
            array (
                'id' => 1708,
                'state_name' => 'Golestan',
                'country_id' => 103,
            ),
            208 => 
            array (
                'id' => 1709,
                'state_name' => 'Hamadan',
                'country_id' => 103,
            ),
            209 => 
            array (
                'id' => 1710,
                'state_name' => 'Hormozgan',
                'country_id' => 103,
            ),
            210 => 
            array (
                'id' => 1711,
                'state_name' => 'Ilam',
                'country_id' => 103,
            ),
            211 => 
            array (
                'id' => 1712,
                'state_name' => 'Kerman',
                'country_id' => 103,
            ),
            212 => 
            array (
                'id' => 1713,
                'state_name' => 'Kermanshah',
                'country_id' => 103,
            ),
            213 => 
            array (
                'id' => 1714,
                'state_name' => 'Khorasan',
                'country_id' => 103,
            ),
            214 => 
            array (
                'id' => 1715,
                'state_name' => 'Khuzestan',
                'country_id' => 103,
            ),
            215 => 
            array (
                'id' => 1716,
                'state_name' => 'Kohgiluyeh-e Boyerahmad',
                'country_id' => 103,
            ),
            216 => 
            array (
                'id' => 1717,
                'state_name' => 'Kordestan',
                'country_id' => 103,
            ),
            217 => 
            array (
                'id' => 1718,
                'state_name' => 'Lorestan',
                'country_id' => 103,
            ),
            218 => 
            array (
                'id' => 1719,
                'state_name' => 'Markazi',
                'country_id' => 103,
            ),
            219 => 
            array (
                'id' => 1720,
                'state_name' => 'Mazandaran',
                'country_id' => 103,
            ),
            220 => 
            array (
                'id' => 1721,
                'state_name' => 'Ostan-e Esfahan',
                'country_id' => 103,
            ),
            221 => 
            array (
                'id' => 1722,
                'state_name' => 'Qazvin',
                'country_id' => 103,
            ),
            222 => 
            array (
                'id' => 1723,
                'state_name' => 'Qom',
                'country_id' => 103,
            ),
            223 => 
            array (
                'id' => 1724,
                'state_name' => 'Semnan',
                'country_id' => 103,
            ),
            224 => 
            array (
                'id' => 1725,
                'state_name' => 'Sistan-e Baluchestan',
                'country_id' => 103,
            ),
            225 => 
            array (
                'id' => 1726,
                'state_name' => 'Tehran',
                'country_id' => 103,
            ),
            226 => 
            array (
                'id' => 1727,
                'state_name' => 'Yazd',
                'country_id' => 103,
            ),
            227 => 
            array (
                'id' => 1728,
                'state_name' => 'Zanjan',
                'country_id' => 103,
            ),
            228 => 
            array (
                'id' => 1729,
                'state_name' => 'Babil',
                'country_id' => 104,
            ),
            229 => 
            array (
                'id' => 1730,
                'state_name' => 'Baghdad',
                'country_id' => 104,
            ),
            230 => 
            array (
                'id' => 1731,
                'state_name' => 'Dahuk',
                'country_id' => 104,
            ),
            231 => 
            array (
                'id' => 1732,
                'state_name' => 'Dhi Qar',
                'country_id' => 104,
            ),
            232 => 
            array (
                'id' => 1733,
                'state_name' => 'Diyala',
                'country_id' => 104,
            ),
            233 => 
            array (
                'id' => 1734,
                'state_name' => 'Erbil',
                'country_id' => 104,
            ),
            234 => 
            array (
                'id' => 1735,
                'state_name' => 'Irbil',
                'country_id' => 104,
            ),
            235 => 
            array (
                'id' => 1736,
                'state_name' => 'Karbala',
                'country_id' => 104,
            ),
            236 => 
            array (
                'id' => 1737,
                'state_name' => 'Kurdistan',
                'country_id' => 104,
            ),
            237 => 
            array (
                'id' => 1738,
                'state_name' => 'Maysan',
                'country_id' => 104,
            ),
            238 => 
            array (
                'id' => 1739,
                'state_name' => 'Ninawa',
                'country_id' => 104,
            ),
            239 => 
            array (
                'id' => 1740,
                'state_name' => 'Salah-ad-Din',
                'country_id' => 104,
            ),
            240 => 
            array (
                'id' => 1741,
                'state_name' => 'Wasit',
                'country_id' => 104,
            ),
            241 => 
            array (
                'id' => 1742,
                'state_name' => 'al-Anbar',
                'country_id' => 104,
            ),
            242 => 
            array (
                'id' => 1743,
                'state_name' => 'al-Basrah',
                'country_id' => 104,
            ),
            243 => 
            array (
                'id' => 1744,
                'state_name' => 'al-Muthanna',
                'country_id' => 104,
            ),
            244 => 
            array (
                'id' => 1745,
                'state_name' => 'al-Qadisiyah',
                'country_id' => 104,
            ),
            245 => 
            array (
                'id' => 1746,
                'state_name' => 'an-Najaf',
                'country_id' => 104,
            ),
            246 => 
            array (
                'id' => 1747,
                'state_name' => 'as-Sulaymaniyah',
                'country_id' => 104,
            ),
            247 => 
            array (
                'id' => 1748,
                'state_name' => 'at-Ta\'mim',
                'country_id' => 104,
            ),
            248 => 
            array (
                'id' => 1749,
                'state_name' => 'Armagh',
                'country_id' => 105,
            ),
            249 => 
            array (
                'id' => 1750,
                'state_name' => 'Carlow',
                'country_id' => 105,
            ),
            250 => 
            array (
                'id' => 1751,
                'state_name' => 'Cavan',
                'country_id' => 105,
            ),
            251 => 
            array (
                'id' => 1752,
                'state_name' => 'Clare',
                'country_id' => 105,
            ),
            252 => 
            array (
                'id' => 1753,
                'state_name' => 'Cork',
                'country_id' => 105,
            ),
            253 => 
            array (
                'id' => 1754,
                'state_name' => 'Donegal',
                'country_id' => 105,
            ),
            254 => 
            array (
                'id' => 1755,
                'state_name' => 'Dublin',
                'country_id' => 105,
            ),
            255 => 
            array (
                'id' => 1756,
                'state_name' => 'Galway',
                'country_id' => 105,
            ),
            256 => 
            array (
                'id' => 1757,
                'state_name' => 'Kerry',
                'country_id' => 105,
            ),
            257 => 
            array (
                'id' => 1758,
                'state_name' => 'Kildare',
                'country_id' => 105,
            ),
            258 => 
            array (
                'id' => 1759,
                'state_name' => 'Kilkenny',
                'country_id' => 105,
            ),
            259 => 
            array (
                'id' => 1760,
                'state_name' => 'Laois',
                'country_id' => 105,
            ),
            260 => 
            array (
                'id' => 1761,
                'state_name' => 'Leinster',
                'country_id' => 105,
            ),
            261 => 
            array (
                'id' => 1762,
                'state_name' => 'Leitrim',
                'country_id' => 105,
            ),
            262 => 
            array (
                'id' => 1763,
                'state_name' => 'Limerick',
                'country_id' => 105,
            ),
            263 => 
            array (
                'id' => 1764,
                'state_name' => 'Loch Garman',
                'country_id' => 105,
            ),
            264 => 
            array (
                'id' => 1765,
                'state_name' => 'Longford',
                'country_id' => 105,
            ),
            265 => 
            array (
                'id' => 1766,
                'state_name' => 'Louth',
                'country_id' => 105,
            ),
            266 => 
            array (
                'id' => 1767,
                'state_name' => 'Mayo',
                'country_id' => 105,
            ),
            267 => 
            array (
                'id' => 1768,
                'state_name' => 'Meath',
                'country_id' => 105,
            ),
            268 => 
            array (
                'id' => 1769,
                'state_name' => 'Monaghan',
                'country_id' => 105,
            ),
            269 => 
            array (
                'id' => 1770,
                'state_name' => 'Offaly',
                'country_id' => 105,
            ),
            270 => 
            array (
                'id' => 1771,
                'state_name' => 'Roscommon',
                'country_id' => 105,
            ),
            271 => 
            array (
                'id' => 1772,
                'state_name' => 'Sligo',
                'country_id' => 105,
            ),
            272 => 
            array (
                'id' => 1773,
                'state_name' => 'Tipperary North Riding',
                'country_id' => 105,
            ),
            273 => 
            array (
                'id' => 1774,
                'state_name' => 'Tipperary South Riding',
                'country_id' => 105,
            ),
            274 => 
            array (
                'id' => 1775,
                'state_name' => 'Ulster',
                'country_id' => 105,
            ),
            275 => 
            array (
                'id' => 1776,
                'state_name' => 'Waterford',
                'country_id' => 105,
            ),
            276 => 
            array (
                'id' => 1777,
                'state_name' => 'Westmeath',
                'country_id' => 105,
            ),
            277 => 
            array (
                'id' => 1778,
                'state_name' => 'Wexford',
                'country_id' => 105,
            ),
            278 => 
            array (
                'id' => 1779,
                'state_name' => 'Wicklow',
                'country_id' => 105,
            ),
            279 => 
            array (
                'id' => 1780,
                'state_name' => 'Beit Hanania',
                'country_id' => 106,
            ),
            280 => 
            array (
                'id' => 1781,
                'state_name' => 'Ben Gurion Airport',
                'country_id' => 106,
            ),
            281 => 
            array (
                'id' => 1782,
                'state_name' => 'Bethlehem',
                'country_id' => 106,
            ),
            282 => 
            array (
                'id' => 1783,
                'state_name' => 'Caesarea',
                'country_id' => 106,
            ),
            283 => 
            array (
                'id' => 1784,
                'state_name' => 'Centre',
                'country_id' => 106,
            ),
            284 => 
            array (
                'id' => 1785,
                'state_name' => 'Gaza',
                'country_id' => 106,
            ),
            285 => 
            array (
                'id' => 1786,
                'state_name' => 'Hadaron',
                'country_id' => 106,
            ),
            286 => 
            array (
                'id' => 1787,
                'state_name' => 'Haifa District',
                'country_id' => 106,
            ),
            287 => 
            array (
                'id' => 1788,
                'state_name' => 'Hamerkaz',
                'country_id' => 106,
            ),
            288 => 
            array (
                'id' => 1789,
                'state_name' => 'Hazafon',
                'country_id' => 106,
            ),
            289 => 
            array (
                'id' => 1790,
                'state_name' => 'Hebron',
                'country_id' => 106,
            ),
            290 => 
            array (
                'id' => 1791,
                'state_name' => 'Jaffa',
                'country_id' => 106,
            ),
            291 => 
            array (
                'id' => 1792,
                'state_name' => 'Jerusalem',
                'country_id' => 106,
            ),
            292 => 
            array (
                'id' => 1793,
                'state_name' => 'Khefa',
                'country_id' => 106,
            ),
            293 => 
            array (
                'id' => 1794,
                'state_name' => 'Kiryat Yam',
                'country_id' => 106,
            ),
            294 => 
            array (
                'id' => 1795,
                'state_name' => 'Lower Galilee',
                'country_id' => 106,
            ),
            295 => 
            array (
                'id' => 1796,
                'state_name' => 'Qalqilya',
                'country_id' => 106,
            ),
            296 => 
            array (
                'id' => 1797,
                'state_name' => 'Talme Elazar',
                'country_id' => 106,
            ),
            297 => 
            array (
                'id' => 1798,
                'state_name' => 'Tel Aviv',
                'country_id' => 106,
            ),
            298 => 
            array (
                'id' => 1799,
                'state_name' => 'Tsafon',
                'country_id' => 106,
            ),
            299 => 
            array (
                'id' => 1800,
                'state_name' => 'Umm El Fahem',
                'country_id' => 106,
            ),
            300 => 
            array (
                'id' => 1801,
                'state_name' => 'Yerushalayim',
                'country_id' => 106,
            ),
            301 => 
            array (
                'id' => 1802,
                'state_name' => 'Abruzzi',
                'country_id' => 107,
            ),
            302 => 
            array (
                'id' => 1803,
                'state_name' => 'Abruzzo',
                'country_id' => 107,
            ),
            303 => 
            array (
                'id' => 1804,
                'state_name' => 'Agrigento',
                'country_id' => 107,
            ),
            304 => 
            array (
                'id' => 1805,
                'state_name' => 'Alessandria',
                'country_id' => 107,
            ),
            305 => 
            array (
                'id' => 1806,
                'state_name' => 'Ancona',
                'country_id' => 107,
            ),
            306 => 
            array (
                'id' => 1807,
                'state_name' => 'Arezzo',
                'country_id' => 107,
            ),
            307 => 
            array (
                'id' => 1808,
                'state_name' => 'Ascoli Piceno',
                'country_id' => 107,
            ),
            308 => 
            array (
                'id' => 1809,
                'state_name' => 'Asti',
                'country_id' => 107,
            ),
            309 => 
            array (
                'id' => 1810,
                'state_name' => 'Avellino',
                'country_id' => 107,
            ),
            310 => 
            array (
                'id' => 1811,
                'state_name' => 'Bari',
                'country_id' => 107,
            ),
            311 => 
            array (
                'id' => 1812,
                'state_name' => 'Basilicata',
                'country_id' => 107,
            ),
            312 => 
            array (
                'id' => 1813,
                'state_name' => 'Belluno',
                'country_id' => 107,
            ),
            313 => 
            array (
                'id' => 1814,
                'state_name' => 'Benevento',
                'country_id' => 107,
            ),
            314 => 
            array (
                'id' => 1815,
                'state_name' => 'Bergamo',
                'country_id' => 107,
            ),
            315 => 
            array (
                'id' => 1816,
                'state_name' => 'Biella',
                'country_id' => 107,
            ),
            316 => 
            array (
                'id' => 1817,
                'state_name' => 'Bologna',
                'country_id' => 107,
            ),
            317 => 
            array (
                'id' => 1818,
                'state_name' => 'Bolzano',
                'country_id' => 107,
            ),
            318 => 
            array (
                'id' => 1819,
                'state_name' => 'Brescia',
                'country_id' => 107,
            ),
            319 => 
            array (
                'id' => 1820,
                'state_name' => 'Brindisi',
                'country_id' => 107,
            ),
            320 => 
            array (
                'id' => 1821,
                'state_name' => 'Calabria',
                'country_id' => 107,
            ),
            321 => 
            array (
                'id' => 1822,
                'state_name' => 'Campania',
                'country_id' => 107,
            ),
            322 => 
            array (
                'id' => 1823,
                'state_name' => 'Cartoceto',
                'country_id' => 107,
            ),
            323 => 
            array (
                'id' => 1824,
                'state_name' => 'Caserta',
                'country_id' => 107,
            ),
            324 => 
            array (
                'id' => 1825,
                'state_name' => 'Catania',
                'country_id' => 107,
            ),
            325 => 
            array (
                'id' => 1826,
                'state_name' => 'Chieti',
                'country_id' => 107,
            ),
            326 => 
            array (
                'id' => 1827,
                'state_name' => 'Como',
                'country_id' => 107,
            ),
            327 => 
            array (
                'id' => 1828,
                'state_name' => 'Cosenza',
                'country_id' => 107,
            ),
            328 => 
            array (
                'id' => 1829,
                'state_name' => 'Cremona',
                'country_id' => 107,
            ),
            329 => 
            array (
                'id' => 1830,
                'state_name' => 'Cuneo',
                'country_id' => 107,
            ),
            330 => 
            array (
                'id' => 1831,
                'state_name' => 'Emilia-Romagna',
                'country_id' => 107,
            ),
            331 => 
            array (
                'id' => 1832,
                'state_name' => 'Ferrara',
                'country_id' => 107,
            ),
            332 => 
            array (
                'id' => 1833,
                'state_name' => 'Firenze',
                'country_id' => 107,
            ),
            333 => 
            array (
                'id' => 1834,
                'state_name' => 'Florence',
                'country_id' => 107,
            ),
            334 => 
            array (
                'id' => 1835,
                'state_name' => 'Forli-Cesena ',
                'country_id' => 107,
            ),
            335 => 
            array (
                'id' => 1836,
                'state_name' => 'Friuli-Venezia Giulia',
                'country_id' => 107,
            ),
            336 => 
            array (
                'id' => 1837,
                'state_name' => 'Frosinone',
                'country_id' => 107,
            ),
            337 => 
            array (
                'id' => 1838,
                'state_name' => 'Genoa',
                'country_id' => 107,
            ),
            338 => 
            array (
                'id' => 1839,
                'state_name' => 'Gorizia',
                'country_id' => 107,
            ),
            339 => 
            array (
                'id' => 1840,
                'state_name' => 'L\'Aquila',
                'country_id' => 107,
            ),
            340 => 
            array (
                'id' => 1841,
                'state_name' => 'Lazio',
                'country_id' => 107,
            ),
            341 => 
            array (
                'id' => 1842,
                'state_name' => 'Lecce',
                'country_id' => 107,
            ),
            342 => 
            array (
                'id' => 1843,
                'state_name' => 'Lecco',
                'country_id' => 107,
            ),
            343 => 
            array (
                'id' => 1844,
                'state_name' => 'Lecco Province',
                'country_id' => 107,
            ),
            344 => 
            array (
                'id' => 1845,
                'state_name' => 'Liguria',
                'country_id' => 107,
            ),
            345 => 
            array (
                'id' => 1846,
                'state_name' => 'Lodi',
                'country_id' => 107,
            ),
            346 => 
            array (
                'id' => 1847,
                'state_name' => 'Lombardia',
                'country_id' => 107,
            ),
            347 => 
            array (
                'id' => 1848,
                'state_name' => 'Lombardy',
                'country_id' => 107,
            ),
            348 => 
            array (
                'id' => 1849,
                'state_name' => 'Macerata',
                'country_id' => 107,
            ),
            349 => 
            array (
                'id' => 1850,
                'state_name' => 'Mantova',
                'country_id' => 107,
            ),
            350 => 
            array (
                'id' => 1851,
                'state_name' => 'Marche',
                'country_id' => 107,
            ),
            351 => 
            array (
                'id' => 1852,
                'state_name' => 'Messina',
                'country_id' => 107,
            ),
            352 => 
            array (
                'id' => 1853,
                'state_name' => 'Milan',
                'country_id' => 107,
            ),
            353 => 
            array (
                'id' => 1854,
                'state_name' => 'Modena',
                'country_id' => 107,
            ),
            354 => 
            array (
                'id' => 1855,
                'state_name' => 'Molise',
                'country_id' => 107,
            ),
            355 => 
            array (
                'id' => 1856,
                'state_name' => 'Molteno',
                'country_id' => 107,
            ),
            356 => 
            array (
                'id' => 1857,
                'state_name' => 'Montenegro',
                'country_id' => 107,
            ),
            357 => 
            array (
                'id' => 1858,
                'state_name' => 'Monza and Brianza',
                'country_id' => 107,
            ),
            358 => 
            array (
                'id' => 1859,
                'state_name' => 'Naples',
                'country_id' => 107,
            ),
            359 => 
            array (
                'id' => 1860,
                'state_name' => 'Novara',
                'country_id' => 107,
            ),
            360 => 
            array (
                'id' => 1861,
                'state_name' => 'Padova',
                'country_id' => 107,
            ),
            361 => 
            array (
                'id' => 1862,
                'state_name' => 'Parma',
                'country_id' => 107,
            ),
            362 => 
            array (
                'id' => 1863,
                'state_name' => 'Pavia',
                'country_id' => 107,
            ),
            363 => 
            array (
                'id' => 1864,
                'state_name' => 'Perugia',
                'country_id' => 107,
            ),
            364 => 
            array (
                'id' => 1865,
                'state_name' => 'Pesaro-Urbino',
                'country_id' => 107,
            ),
            365 => 
            array (
                'id' => 1866,
                'state_name' => 'Piacenza',
                'country_id' => 107,
            ),
            366 => 
            array (
                'id' => 1867,
                'state_name' => 'Piedmont',
                'country_id' => 107,
            ),
            367 => 
            array (
                'id' => 1868,
                'state_name' => 'Piemonte',
                'country_id' => 107,
            ),
            368 => 
            array (
                'id' => 1869,
                'state_name' => 'Pisa',
                'country_id' => 107,
            ),
            369 => 
            array (
                'id' => 1870,
                'state_name' => 'Pordenone',
                'country_id' => 107,
            ),
            370 => 
            array (
                'id' => 1871,
                'state_name' => 'Potenza',
                'country_id' => 107,
            ),
            371 => 
            array (
                'id' => 1872,
                'state_name' => 'Puglia',
                'country_id' => 107,
            ),
            372 => 
            array (
                'id' => 1873,
                'state_name' => 'Reggio Emilia',
                'country_id' => 107,
            ),
            373 => 
            array (
                'id' => 1874,
                'state_name' => 'Rimini',
                'country_id' => 107,
            ),
            374 => 
            array (
                'id' => 1875,
                'state_name' => 'Roma',
                'country_id' => 107,
            ),
            375 => 
            array (
                'id' => 1876,
                'state_name' => 'Salerno',
                'country_id' => 107,
            ),
            376 => 
            array (
                'id' => 1877,
                'state_name' => 'Sardegna',
                'country_id' => 107,
            ),
            377 => 
            array (
                'id' => 1878,
                'state_name' => 'Sassari',
                'country_id' => 107,
            ),
            378 => 
            array (
                'id' => 1879,
                'state_name' => 'Savona',
                'country_id' => 107,
            ),
            379 => 
            array (
                'id' => 1880,
                'state_name' => 'Sicilia',
                'country_id' => 107,
            ),
            380 => 
            array (
                'id' => 1881,
                'state_name' => 'Siena',
                'country_id' => 107,
            ),
            381 => 
            array (
                'id' => 1882,
                'state_name' => 'Sondrio',
                'country_id' => 107,
            ),
            382 => 
            array (
                'id' => 1883,
                'state_name' => 'South Tyrol',
                'country_id' => 107,
            ),
            383 => 
            array (
                'id' => 1884,
                'state_name' => 'Taranto',
                'country_id' => 107,
            ),
            384 => 
            array (
                'id' => 1885,
                'state_name' => 'Teramo',
                'country_id' => 107,
            ),
            385 => 
            array (
                'id' => 1886,
                'state_name' => 'Torino',
                'country_id' => 107,
            ),
            386 => 
            array (
                'id' => 1887,
                'state_name' => 'Toscana',
                'country_id' => 107,
            ),
            387 => 
            array (
                'id' => 1888,
                'state_name' => 'Trapani',
                'country_id' => 107,
            ),
            388 => 
            array (
                'id' => 1889,
                'state_name' => 'Trentino-Alto Adige',
                'country_id' => 107,
            ),
            389 => 
            array (
                'id' => 1890,
                'state_name' => 'Trento',
                'country_id' => 107,
            ),
            390 => 
            array (
                'id' => 1891,
                'state_name' => 'Treviso',
                'country_id' => 107,
            ),
            391 => 
            array (
                'id' => 1892,
                'state_name' => 'Udine',
                'country_id' => 107,
            ),
            392 => 
            array (
                'id' => 1893,
                'state_name' => 'Umbria',
                'country_id' => 107,
            ),
            393 => 
            array (
                'id' => 1894,
                'state_name' => 'Valle d\'Aosta',
                'country_id' => 107,
            ),
            394 => 
            array (
                'id' => 1895,
                'state_name' => 'Varese',
                'country_id' => 107,
            ),
            395 => 
            array (
                'id' => 1896,
                'state_name' => 'Veneto',
                'country_id' => 107,
            ),
            396 => 
            array (
                'id' => 1897,
                'state_name' => 'Venezia',
                'country_id' => 107,
            ),
            397 => 
            array (
                'id' => 1898,
                'state_name' => 'Verbano-Cusio-Ossola',
                'country_id' => 107,
            ),
            398 => 
            array (
                'id' => 1899,
                'state_name' => 'Vercelli',
                'country_id' => 107,
            ),
            399 => 
            array (
                'id' => 1900,
                'state_name' => 'Verona',
                'country_id' => 107,
            ),
            400 => 
            array (
                'id' => 1901,
                'state_name' => 'Vicenza',
                'country_id' => 107,
            ),
            401 => 
            array (
                'id' => 1902,
                'state_name' => 'Viterbo',
                'country_id' => 107,
            ),
            402 => 
            array (
                'id' => 1903,
                'state_name' => 'Buxoro Viloyati',
                'country_id' => 108,
            ),
            403 => 
            array (
                'id' => 1904,
                'state_name' => 'Clarendon',
                'country_id' => 108,
            ),
            404 => 
            array (
                'id' => 1905,
                'state_name' => 'Hanover',
                'country_id' => 108,
            ),
            405 => 
            array (
                'id' => 1906,
                'state_name' => 'Kingston',
                'country_id' => 108,
            ),
            406 => 
            array (
                'id' => 1907,
                'state_name' => 'Manchester',
                'country_id' => 108,
            ),
            407 => 
            array (
                'id' => 1908,
                'state_name' => 'Portland',
                'country_id' => 108,
            ),
            408 => 
            array (
                'id' => 1909,
                'state_name' => 'Saint Andrews',
                'country_id' => 108,
            ),
            409 => 
            array (
                'id' => 1910,
                'state_name' => 'Saint Ann',
                'country_id' => 108,
            ),
            410 => 
            array (
                'id' => 1911,
                'state_name' => 'Saint Catherine',
                'country_id' => 108,
            ),
            411 => 
            array (
                'id' => 1912,
                'state_name' => 'Saint Elizabeth',
                'country_id' => 108,
            ),
            412 => 
            array (
                'id' => 1913,
                'state_name' => 'Saint James',
                'country_id' => 108,
            ),
            413 => 
            array (
                'id' => 1914,
                'state_name' => 'Saint Mary',
                'country_id' => 108,
            ),
            414 => 
            array (
                'id' => 1915,
                'state_name' => 'Saint Thomas',
                'country_id' => 108,
            ),
            415 => 
            array (
                'id' => 1916,
                'state_name' => 'Trelawney',
                'country_id' => 108,
            ),
            416 => 
            array (
                'id' => 1917,
                'state_name' => 'Westmoreland',
                'country_id' => 108,
            ),
            417 => 
            array (
                'id' => 1918,
                'state_name' => 'Aichi',
                'country_id' => 109,
            ),
            418 => 
            array (
                'id' => 1919,
                'state_name' => 'Akita',
                'country_id' => 109,
            ),
            419 => 
            array (
                'id' => 1920,
                'state_name' => 'Aomori',
                'country_id' => 109,
            ),
            420 => 
            array (
                'id' => 1921,
                'state_name' => 'Chiba',
                'country_id' => 109,
            ),
            421 => 
            array (
                'id' => 1922,
                'state_name' => 'Ehime',
                'country_id' => 109,
            ),
            422 => 
            array (
                'id' => 1923,
                'state_name' => 'Fukui',
                'country_id' => 109,
            ),
            423 => 
            array (
                'id' => 1924,
                'state_name' => 'Fukuoka',
                'country_id' => 109,
            ),
            424 => 
            array (
                'id' => 1925,
                'state_name' => 'Fukushima',
                'country_id' => 109,
            ),
            425 => 
            array (
                'id' => 1926,
                'state_name' => 'Gifu',
                'country_id' => 109,
            ),
            426 => 
            array (
                'id' => 1927,
                'state_name' => 'Gumma',
                'country_id' => 109,
            ),
            427 => 
            array (
                'id' => 1928,
                'state_name' => 'Hiroshima',
                'country_id' => 109,
            ),
            428 => 
            array (
                'id' => 1929,
                'state_name' => 'Hokkaido',
                'country_id' => 109,
            ),
            429 => 
            array (
                'id' => 1930,
                'state_name' => 'Hyogo',
                'country_id' => 109,
            ),
            430 => 
            array (
                'id' => 1931,
                'state_name' => 'Ibaraki',
                'country_id' => 109,
            ),
            431 => 
            array (
                'id' => 1932,
                'state_name' => 'Ishikawa',
                'country_id' => 109,
            ),
            432 => 
            array (
                'id' => 1933,
                'state_name' => 'Iwate',
                'country_id' => 109,
            ),
            433 => 
            array (
                'id' => 1934,
                'state_name' => 'Kagawa',
                'country_id' => 109,
            ),
            434 => 
            array (
                'id' => 1935,
                'state_name' => 'Kagoshima',
                'country_id' => 109,
            ),
            435 => 
            array (
                'id' => 1936,
                'state_name' => 'Kanagawa',
                'country_id' => 109,
            ),
            436 => 
            array (
                'id' => 1937,
                'state_name' => 'Kanto',
                'country_id' => 109,
            ),
            437 => 
            array (
                'id' => 1938,
                'state_name' => 'Kochi',
                'country_id' => 109,
            ),
            438 => 
            array (
                'id' => 1939,
                'state_name' => 'Kumamoto',
                'country_id' => 109,
            ),
            439 => 
            array (
                'id' => 1940,
                'state_name' => 'Kyoto',
                'country_id' => 109,
            ),
            440 => 
            array (
                'id' => 1941,
                'state_name' => 'Mie',
                'country_id' => 109,
            ),
            441 => 
            array (
                'id' => 1942,
                'state_name' => 'Miyagi',
                'country_id' => 109,
            ),
            442 => 
            array (
                'id' => 1943,
                'state_name' => 'Miyazaki',
                'country_id' => 109,
            ),
            443 => 
            array (
                'id' => 1944,
                'state_name' => 'Nagano',
                'country_id' => 109,
            ),
            444 => 
            array (
                'id' => 1945,
                'state_name' => 'Nagasaki',
                'country_id' => 109,
            ),
            445 => 
            array (
                'id' => 1946,
                'state_name' => 'Nara',
                'country_id' => 109,
            ),
            446 => 
            array (
                'id' => 1947,
                'state_name' => 'Niigata',
                'country_id' => 109,
            ),
            447 => 
            array (
                'id' => 1948,
                'state_name' => 'Oita',
                'country_id' => 109,
            ),
            448 => 
            array (
                'id' => 1949,
                'state_name' => 'Okayama',
                'country_id' => 109,
            ),
            449 => 
            array (
                'id' => 1950,
                'state_name' => 'Okinawa',
                'country_id' => 109,
            ),
            450 => 
            array (
                'id' => 1951,
                'state_name' => 'Osaka',
                'country_id' => 109,
            ),
            451 => 
            array (
                'id' => 1952,
                'state_name' => 'Saga',
                'country_id' => 109,
            ),
            452 => 
            array (
                'id' => 1953,
                'state_name' => 'Saitama',
                'country_id' => 109,
            ),
            453 => 
            array (
                'id' => 1954,
                'state_name' => 'Shiga',
                'country_id' => 109,
            ),
            454 => 
            array (
                'id' => 1955,
                'state_name' => 'Shimane',
                'country_id' => 109,
            ),
            455 => 
            array (
                'id' => 1956,
                'state_name' => 'Shizuoka',
                'country_id' => 109,
            ),
            456 => 
            array (
                'id' => 1957,
                'state_name' => 'Tochigi',
                'country_id' => 109,
            ),
            457 => 
            array (
                'id' => 1958,
                'state_name' => 'Tokushima',
                'country_id' => 109,
            ),
            458 => 
            array (
                'id' => 1959,
                'state_name' => 'Tokyo',
                'country_id' => 109,
            ),
            459 => 
            array (
                'id' => 1960,
                'state_name' => 'Tottori',
                'country_id' => 109,
            ),
            460 => 
            array (
                'id' => 1961,
                'state_name' => 'Toyama',
                'country_id' => 109,
            ),
            461 => 
            array (
                'id' => 1962,
                'state_name' => 'Wakayama',
                'country_id' => 109,
            ),
            462 => 
            array (
                'id' => 1963,
                'state_name' => 'Yamagata',
                'country_id' => 109,
            ),
            463 => 
            array (
                'id' => 1964,
                'state_name' => 'Yamaguchi',
                'country_id' => 109,
            ),
            464 => 
            array (
                'id' => 1965,
                'state_name' => 'Yamanashi',
                'country_id' => 109,
            ),
            465 => 
            array (
                'id' => 1966,
                'state_name' => 'Grouville',
                'country_id' => 110,
            ),
            466 => 
            array (
                'id' => 1967,
                'state_name' => 'Saint Brelade',
                'country_id' => 110,
            ),
            467 => 
            array (
                'id' => 1968,
                'state_name' => 'Saint Clement',
                'country_id' => 110,
            ),
            468 => 
            array (
                'id' => 1969,
                'state_name' => 'Saint Helier',
                'country_id' => 110,
            ),
            469 => 
            array (
                'id' => 1970,
                'state_name' => 'Saint John',
                'country_id' => 110,
            ),
            470 => 
            array (
                'id' => 1971,
                'state_name' => 'Saint Lawrence',
                'country_id' => 110,
            ),
            471 => 
            array (
                'id' => 1972,
                'state_name' => 'Saint Martin',
                'country_id' => 110,
            ),
            472 => 
            array (
                'id' => 1973,
                'state_name' => 'Saint Mary',
                'country_id' => 110,
            ),
            473 => 
            array (
                'id' => 1974,
                'state_name' => 'Saint Peter',
                'country_id' => 110,
            ),
            474 => 
            array (
                'id' => 1975,
                'state_name' => 'Saint Saviour',
                'country_id' => 110,
            ),
            475 => 
            array (
                'id' => 1976,
                'state_name' => 'Trinity',
                'country_id' => 110,
            ),
            476 => 
            array (
                'id' => 1977,
                'state_name' => '\'Ajlun',
                'country_id' => 111,
            ),
            477 => 
            array (
                'id' => 1978,
                'state_name' => 'Amman',
                'country_id' => 111,
            ),
            478 => 
            array (
                'id' => 1979,
                'state_name' => 'Irbid',
                'country_id' => 111,
            ),
            479 => 
            array (
                'id' => 1980,
                'state_name' => 'Jarash',
                'country_id' => 111,
            ),
            480 => 
            array (
                'id' => 1981,
                'state_name' => 'Ma\'an',
                'country_id' => 111,
            ),
            481 => 
            array (
                'id' => 1982,
                'state_name' => 'Madaba',
                'country_id' => 111,
            ),
            482 => 
            array (
                'id' => 1983,
                'state_name' => 'al-\'Aqabah',
                'country_id' => 111,
            ),
            483 => 
            array (
                'id' => 1984,
                'state_name' => 'al-Balqa\'',
                'country_id' => 111,
            ),
            484 => 
            array (
                'id' => 1985,
                'state_name' => 'al-Karak',
                'country_id' => 111,
            ),
            485 => 
            array (
                'id' => 1986,
                'state_name' => 'al-Mafraq',
                'country_id' => 111,
            ),
            486 => 
            array (
                'id' => 1987,
                'state_name' => 'at-Tafilah',
                'country_id' => 111,
            ),
            487 => 
            array (
                'id' => 1988,
                'state_name' => 'az-Zarqa\'',
                'country_id' => 111,
            ),
            488 => 
            array (
                'id' => 1989,
                'state_name' => 'Akmecet',
                'country_id' => 112,
            ),
            489 => 
            array (
                'id' => 1990,
                'state_name' => 'Akmola',
                'country_id' => 112,
            ),
            490 => 
            array (
                'id' => 1991,
                'state_name' => 'Aktobe',
                'country_id' => 112,
            ),
            491 => 
            array (
                'id' => 1992,
                'state_name' => 'Almati',
                'country_id' => 112,
            ),
            492 => 
            array (
                'id' => 1993,
                'state_name' => 'Atirau',
                'country_id' => 112,
            ),
            493 => 
            array (
                'id' => 1994,
                'state_name' => 'Batis Kazakstan',
                'country_id' => 112,
            ),
            494 => 
            array (
                'id' => 1995,
                'state_name' => 'Burlinsky Region',
                'country_id' => 112,
            ),
            495 => 
            array (
                'id' => 1996,
                'state_name' => 'Karagandi',
                'country_id' => 112,
            ),
            496 => 
            array (
                'id' => 1997,
                'state_name' => 'Kostanay',
                'country_id' => 112,
            ),
            497 => 
            array (
                'id' => 1998,
                'state_name' => 'Mankistau',
                'country_id' => 112,
            ),
            498 => 
            array (
                'id' => 1999,
                'state_name' => 'Ontustik Kazakstan',
                'country_id' => 112,
            ),
            499 => 
            array (
                'id' => 2000,
                'state_name' => 'Pavlodar',
                'country_id' => 112,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'state_name' => 'Sigis Kazakstan',
                'country_id' => 112,
            ),
            1 => 
            array (
                'id' => 2002,
                'state_name' => 'Soltustik Kazakstan',
                'country_id' => 112,
            ),
            2 => 
            array (
                'id' => 2003,
                'state_name' => 'Taraz',
                'country_id' => 112,
            ),
            3 => 
            array (
                'id' => 2004,
                'state_name' => 'Central',
                'country_id' => 113,
            ),
            4 => 
            array (
                'id' => 2005,
                'state_name' => 'Coast',
                'country_id' => 113,
            ),
            5 => 
            array (
                'id' => 2006,
                'state_name' => 'Eastern',
                'country_id' => 113,
            ),
            6 => 
            array (
                'id' => 2007,
                'state_name' => 'Nairobi',
                'country_id' => 113,
            ),
            7 => 
            array (
                'id' => 2008,
                'state_name' => 'North Eastern',
                'country_id' => 113,
            ),
            8 => 
            array (
                'id' => 2009,
                'state_name' => 'Nyanza',
                'country_id' => 113,
            ),
            9 => 
            array (
                'id' => 2010,
                'state_name' => 'Rift Valley',
                'country_id' => 113,
            ),
            10 => 
            array (
                'id' => 2011,
                'state_name' => 'Western',
                'country_id' => 113,
            ),
            11 => 
            array (
                'id' => 2012,
                'state_name' => 'Abaiang',
                'country_id' => 114,
            ),
            12 => 
            array (
                'id' => 2013,
                'state_name' => 'Abemana',
                'country_id' => 114,
            ),
            13 => 
            array (
                'id' => 2014,
                'state_name' => 'Aranuka',
                'country_id' => 114,
            ),
            14 => 
            array (
                'id' => 2015,
                'state_name' => 'Arorae',
                'country_id' => 114,
            ),
            15 => 
            array (
                'id' => 2016,
                'state_name' => 'Banaba',
                'country_id' => 114,
            ),
            16 => 
            array (
                'id' => 2017,
                'state_name' => 'Beru',
                'country_id' => 114,
            ),
            17 => 
            array (
                'id' => 2018,
                'state_name' => 'Butaritari',
                'country_id' => 114,
            ),
            18 => 
            array (
                'id' => 2019,
                'state_name' => 'Kiritimati',
                'country_id' => 114,
            ),
            19 => 
            array (
                'id' => 2020,
                'state_name' => 'Kuria',
                'country_id' => 114,
            ),
            20 => 
            array (
                'id' => 2021,
                'state_name' => 'Maiana',
                'country_id' => 114,
            ),
            21 => 
            array (
                'id' => 2022,
                'state_name' => 'Makin',
                'country_id' => 114,
            ),
            22 => 
            array (
                'id' => 2023,
                'state_name' => 'Marakei',
                'country_id' => 114,
            ),
            23 => 
            array (
                'id' => 2024,
                'state_name' => 'Nikunau',
                'country_id' => 114,
            ),
            24 => 
            array (
                'id' => 2025,
                'state_name' => 'Nonouti',
                'country_id' => 114,
            ),
            25 => 
            array (
                'id' => 2026,
                'state_name' => 'Onotoa',
                'country_id' => 114,
            ),
            26 => 
            array (
                'id' => 2027,
                'state_name' => 'Phoenix Islands',
                'country_id' => 114,
            ),
            27 => 
            array (
                'id' => 2028,
                'state_name' => 'Tabiteuea North',
                'country_id' => 114,
            ),
            28 => 
            array (
                'id' => 2029,
                'state_name' => 'Tabiteuea South',
                'country_id' => 114,
            ),
            29 => 
            array (
                'id' => 2030,
                'state_name' => 'Tabuaeran',
                'country_id' => 114,
            ),
            30 => 
            array (
                'id' => 2031,
                'state_name' => 'Tamana',
                'country_id' => 114,
            ),
            31 => 
            array (
                'id' => 2032,
                'state_name' => 'Tarawa North',
                'country_id' => 114,
            ),
            32 => 
            array (
                'id' => 2033,
                'state_name' => 'Tarawa South',
                'country_id' => 114,
            ),
            33 => 
            array (
                'id' => 2034,
                'state_name' => 'Teraina',
                'country_id' => 114,
            ),
            34 => 
            array (
                'id' => 2035,
                'state_name' => 'Chagangdo',
                'country_id' => 115,
            ),
            35 => 
            array (
                'id' => 2036,
                'state_name' => 'Hamgyeongbukto',
                'country_id' => 115,
            ),
            36 => 
            array (
                'id' => 2037,
                'state_name' => 'Hamgyeongnamdo',
                'country_id' => 115,
            ),
            37 => 
            array (
                'id' => 2038,
                'state_name' => 'Hwanghaebukto',
                'country_id' => 115,
            ),
            38 => 
            array (
                'id' => 2039,
                'state_name' => 'Hwanghaenamdo',
                'country_id' => 115,
            ),
            39 => 
            array (
                'id' => 2040,
                'state_name' => 'Kaeseong',
                'country_id' => 115,
            ),
            40 => 
            array (
                'id' => 2041,
                'state_name' => 'Kangweon',
                'country_id' => 115,
            ),
            41 => 
            array (
                'id' => 2042,
                'state_name' => 'Nampo',
                'country_id' => 115,
            ),
            42 => 
            array (
                'id' => 2043,
                'state_name' => 'Pyeonganbukto',
                'country_id' => 115,
            ),
            43 => 
            array (
                'id' => 2044,
                'state_name' => 'Pyeongannamdo',
                'country_id' => 115,
            ),
            44 => 
            array (
                'id' => 2045,
                'state_name' => 'Pyeongyang',
                'country_id' => 115,
            ),
            45 => 
            array (
                'id' => 2046,
                'state_name' => 'Yanggang',
                'country_id' => 115,
            ),
            46 => 
            array (
                'id' => 2047,
                'state_name' => 'Busan',
                'country_id' => 116,
            ),
            47 => 
            array (
                'id' => 2048,
                'state_name' => 'Cheju',
                'country_id' => 116,
            ),
            48 => 
            array (
                'id' => 2049,
                'state_name' => 'Chollabuk',
                'country_id' => 116,
            ),
            49 => 
            array (
                'id' => 2050,
                'state_name' => 'Chollanam',
                'country_id' => 116,
            ),
            50 => 
            array (
                'id' => 2051,
                'state_name' => 'Chungbuk',
                'country_id' => 116,
            ),
            51 => 
            array (
                'id' => 2052,
                'state_name' => 'Chungcheongbuk',
                'country_id' => 116,
            ),
            52 => 
            array (
                'id' => 2053,
                'state_name' => 'Chungcheongnam',
                'country_id' => 116,
            ),
            53 => 
            array (
                'id' => 2054,
                'state_name' => 'Chungnam',
                'country_id' => 116,
            ),
            54 => 
            array (
                'id' => 2055,
                'state_name' => 'Daegu',
                'country_id' => 116,
            ),
            55 => 
            array (
                'id' => 2056,
                'state_name' => 'Gangwon-do',
                'country_id' => 116,
            ),
            56 => 
            array (
                'id' => 2057,
                'state_name' => 'Goyang-si',
                'country_id' => 116,
            ),
            57 => 
            array (
                'id' => 2058,
                'state_name' => 'Gyeonggi-do',
                'country_id' => 116,
            ),
            58 => 
            array (
                'id' => 2059,
                'state_name' => 'Gyeongsang ',
                'country_id' => 116,
            ),
            59 => 
            array (
                'id' => 2060,
                'state_name' => 'Gyeongsangnam-do',
                'country_id' => 116,
            ),
            60 => 
            array (
                'id' => 2061,
                'state_name' => 'Incheon',
                'country_id' => 116,
            ),
            61 => 
            array (
                'id' => 2062,
                'state_name' => 'Jeju-Si',
                'country_id' => 116,
            ),
            62 => 
            array (
                'id' => 2063,
                'state_name' => 'Jeonbuk',
                'country_id' => 116,
            ),
            63 => 
            array (
                'id' => 2064,
                'state_name' => 'Kangweon',
                'country_id' => 116,
            ),
            64 => 
            array (
                'id' => 2065,
                'state_name' => 'Kwangju',
                'country_id' => 116,
            ),
            65 => 
            array (
                'id' => 2066,
                'state_name' => 'Kyeonggi',
                'country_id' => 116,
            ),
            66 => 
            array (
                'id' => 2067,
                'state_name' => 'Kyeongsangbuk',
                'country_id' => 116,
            ),
            67 => 
            array (
                'id' => 2068,
                'state_name' => 'Kyeongsangnam',
                'country_id' => 116,
            ),
            68 => 
            array (
                'id' => 2069,
                'state_name' => 'Kyonggi-do',
                'country_id' => 116,
            ),
            69 => 
            array (
                'id' => 2070,
                'state_name' => 'Kyungbuk-Do',
                'country_id' => 116,
            ),
            70 => 
            array (
                'id' => 2071,
                'state_name' => 'Kyunggi-Do',
                'country_id' => 116,
            ),
            71 => 
            array (
                'id' => 2072,
                'state_name' => 'Kyunggi-do',
                'country_id' => 116,
            ),
            72 => 
            array (
                'id' => 2073,
                'state_name' => 'Pusan',
                'country_id' => 116,
            ),
            73 => 
            array (
                'id' => 2074,
                'state_name' => 'Seoul',
                'country_id' => 116,
            ),
            74 => 
            array (
                'id' => 2075,
                'state_name' => 'Sudogwon',
                'country_id' => 116,
            ),
            75 => 
            array (
                'id' => 2076,
                'state_name' => 'Taegu',
                'country_id' => 116,
            ),
            76 => 
            array (
                'id' => 2077,
                'state_name' => 'Taejeon',
                'country_id' => 116,
            ),
            77 => 
            array (
                'id' => 2078,
                'state_name' => 'Taejon-gwangyoksi',
                'country_id' => 116,
            ),
            78 => 
            array (
                'id' => 2079,
                'state_name' => 'Ulsan',
                'country_id' => 116,
            ),
            79 => 
            array (
                'id' => 2080,
                'state_name' => 'Wonju',
                'country_id' => 116,
            ),
            80 => 
            array (
                'id' => 2081,
                'state_name' => 'gwangyoksi',
                'country_id' => 116,
            ),
            81 => 
            array (
                'id' => 2082,
                'state_name' => 'Al Asimah',
                'country_id' => 117,
            ),
            82 => 
            array (
                'id' => 2083,
                'state_name' => 'Hawalli',
                'country_id' => 117,
            ),
            83 => 
            array (
                'id' => 2084,
                'state_name' => 'Mishref',
                'country_id' => 117,
            ),
            84 => 
            array (
                'id' => 2085,
                'state_name' => 'Qadesiya',
                'country_id' => 117,
            ),
            85 => 
            array (
                'id' => 2086,
                'state_name' => 'Safat',
                'country_id' => 117,
            ),
            86 => 
            array (
                'id' => 2087,
                'state_name' => 'Salmiya',
                'country_id' => 117,
            ),
            87 => 
            array (
                'id' => 2088,
                'state_name' => 'al-Ahmadi',
                'country_id' => 117,
            ),
            88 => 
            array (
                'id' => 2089,
                'state_name' => 'al-Farwaniyah',
                'country_id' => 117,
            ),
            89 => 
            array (
                'id' => 2090,
                'state_name' => 'al-Jahra',
                'country_id' => 117,
            ),
            90 => 
            array (
                'id' => 2091,
                'state_name' => 'al-Kuwayt',
                'country_id' => 117,
            ),
            91 => 
            array (
                'id' => 2092,
                'state_name' => 'Batken',
                'country_id' => 118,
            ),
            92 => 
            array (
                'id' => 2093,
                'state_name' => 'Bishkek',
                'country_id' => 118,
            ),
            93 => 
            array (
                'id' => 2094,
                'state_name' => 'Chui',
                'country_id' => 118,
            ),
            94 => 
            array (
                'id' => 2095,
                'state_name' => 'Issyk-Kul',
                'country_id' => 118,
            ),
            95 => 
            array (
                'id' => 2096,
                'state_name' => 'Jalal-Abad',
                'country_id' => 118,
            ),
            96 => 
            array (
                'id' => 2097,
                'state_name' => 'Naryn',
                'country_id' => 118,
            ),
            97 => 
            array (
                'id' => 2098,
                'state_name' => 'Osh',
                'country_id' => 118,
            ),
            98 => 
            array (
                'id' => 2099,
                'state_name' => 'Talas',
                'country_id' => 118,
            ),
            99 => 
            array (
                'id' => 2100,
                'state_name' => 'Attopu',
                'country_id' => 119,
            ),
            100 => 
            array (
                'id' => 2101,
                'state_name' => 'Bokeo',
                'country_id' => 119,
            ),
            101 => 
            array (
                'id' => 2102,
                'state_name' => 'Bolikhamsay',
                'country_id' => 119,
            ),
            102 => 
            array (
                'id' => 2103,
                'state_name' => 'Champasak',
                'country_id' => 119,
            ),
            103 => 
            array (
                'id' => 2104,
                'state_name' => 'Houaphanh',
                'country_id' => 119,
            ),
            104 => 
            array (
                'id' => 2105,
                'state_name' => 'Khammouane',
                'country_id' => 119,
            ),
            105 => 
            array (
                'id' => 2106,
                'state_name' => 'Luang Nam Tha',
                'country_id' => 119,
            ),
            106 => 
            array (
                'id' => 2107,
                'state_name' => 'Luang Prabang',
                'country_id' => 119,
            ),
            107 => 
            array (
                'id' => 2108,
                'state_name' => 'Oudomxay',
                'country_id' => 119,
            ),
            108 => 
            array (
                'id' => 2109,
                'state_name' => 'Phongsaly',
                'country_id' => 119,
            ),
            109 => 
            array (
                'id' => 2110,
                'state_name' => 'Saravan',
                'country_id' => 119,
            ),
            110 => 
            array (
                'id' => 2111,
                'state_name' => 'Savannakhet',
                'country_id' => 119,
            ),
            111 => 
            array (
                'id' => 2112,
                'state_name' => 'Sekong',
                'country_id' => 119,
            ),
            112 => 
            array (
                'id' => 2113,
                'state_name' => 'Viangchan Prefecture',
                'country_id' => 119,
            ),
            113 => 
            array (
                'id' => 2114,
                'state_name' => 'Viangchan Province',
                'country_id' => 119,
            ),
            114 => 
            array (
                'id' => 2115,
                'state_name' => 'Xaignabury',
                'country_id' => 119,
            ),
            115 => 
            array (
                'id' => 2116,
                'state_name' => 'Xiang Khuang',
                'country_id' => 119,
            ),
            116 => 
            array (
                'id' => 2117,
                'state_name' => 'Aizkraukles',
                'country_id' => 120,
            ),
            117 => 
            array (
                'id' => 2118,
                'state_name' => 'Aluksnes',
                'country_id' => 120,
            ),
            118 => 
            array (
                'id' => 2119,
                'state_name' => 'Balvu',
                'country_id' => 120,
            ),
            119 => 
            array (
                'id' => 2120,
                'state_name' => 'Bauskas',
                'country_id' => 120,
            ),
            120 => 
            array (
                'id' => 2121,
                'state_name' => 'Cesu',
                'country_id' => 120,
            ),
            121 => 
            array (
                'id' => 2122,
                'state_name' => 'Daugavpils',
                'country_id' => 120,
            ),
            122 => 
            array (
                'id' => 2123,
                'state_name' => 'Daugavpils City',
                'country_id' => 120,
            ),
            123 => 
            array (
                'id' => 2124,
                'state_name' => 'Dobeles',
                'country_id' => 120,
            ),
            124 => 
            array (
                'id' => 2125,
                'state_name' => 'Gulbenes',
                'country_id' => 120,
            ),
            125 => 
            array (
                'id' => 2126,
                'state_name' => 'Jekabspils',
                'country_id' => 120,
            ),
            126 => 
            array (
                'id' => 2127,
                'state_name' => 'Jelgava',
                'country_id' => 120,
            ),
            127 => 
            array (
                'id' => 2128,
                'state_name' => 'Jelgavas',
                'country_id' => 120,
            ),
            128 => 
            array (
                'id' => 2129,
                'state_name' => 'Jurmala City',
                'country_id' => 120,
            ),
            129 => 
            array (
                'id' => 2130,
                'state_name' => 'Kraslavas',
                'country_id' => 120,
            ),
            130 => 
            array (
                'id' => 2131,
                'state_name' => 'Kuldigas',
                'country_id' => 120,
            ),
            131 => 
            array (
                'id' => 2132,
                'state_name' => 'Liepaja',
                'country_id' => 120,
            ),
            132 => 
            array (
                'id' => 2133,
                'state_name' => 'Liepajas',
                'country_id' => 120,
            ),
            133 => 
            array (
                'id' => 2134,
                'state_name' => 'Limbazhu',
                'country_id' => 120,
            ),
            134 => 
            array (
                'id' => 2135,
                'state_name' => 'Ludzas',
                'country_id' => 120,
            ),
            135 => 
            array (
                'id' => 2136,
                'state_name' => 'Madonas',
                'country_id' => 120,
            ),
            136 => 
            array (
                'id' => 2137,
                'state_name' => 'Ogres',
                'country_id' => 120,
            ),
            137 => 
            array (
                'id' => 2138,
                'state_name' => 'Preilu',
                'country_id' => 120,
            ),
            138 => 
            array (
                'id' => 2139,
                'state_name' => 'Rezekne',
                'country_id' => 120,
            ),
            139 => 
            array (
                'id' => 2140,
                'state_name' => 'Rezeknes',
                'country_id' => 120,
            ),
            140 => 
            array (
                'id' => 2141,
                'state_name' => 'Riga',
                'country_id' => 120,
            ),
            141 => 
            array (
                'id' => 2142,
                'state_name' => 'Rigas',
                'country_id' => 120,
            ),
            142 => 
            array (
                'id' => 2143,
                'state_name' => 'Saldus',
                'country_id' => 120,
            ),
            143 => 
            array (
                'id' => 2144,
                'state_name' => 'Talsu',
                'country_id' => 120,
            ),
            144 => 
            array (
                'id' => 2145,
                'state_name' => 'Tukuma',
                'country_id' => 120,
            ),
            145 => 
            array (
                'id' => 2146,
                'state_name' => 'Valkas',
                'country_id' => 120,
            ),
            146 => 
            array (
                'id' => 2147,
                'state_name' => 'Valmieras',
                'country_id' => 120,
            ),
            147 => 
            array (
                'id' => 2148,
                'state_name' => 'Ventspils',
                'country_id' => 120,
            ),
            148 => 
            array (
                'id' => 2149,
                'state_name' => 'Ventspils City',
                'country_id' => 120,
            ),
            149 => 
            array (
                'id' => 2150,
                'state_name' => 'Beirut',
                'country_id' => 121,
            ),
            150 => 
            array (
                'id' => 2151,
                'state_name' => 'Jabal Lubnan',
                'country_id' => 121,
            ),
            151 => 
            array (
                'id' => 2152,
                'state_name' => 'Mohafazat Liban-Nord',
                'country_id' => 121,
            ),
            152 => 
            array (
                'id' => 2153,
                'state_name' => 'Mohafazat Mont-Liban',
                'country_id' => 121,
            ),
            153 => 
            array (
                'id' => 2154,
                'state_name' => 'Sidon',
                'country_id' => 121,
            ),
            154 => 
            array (
                'id' => 2155,
                'state_name' => 'al-Biqa',
                'country_id' => 121,
            ),
            155 => 
            array (
                'id' => 2156,
                'state_name' => 'al-Janub',
                'country_id' => 121,
            ),
            156 => 
            array (
                'id' => 2157,
                'state_name' => 'an-Nabatiyah',
                'country_id' => 121,
            ),
            157 => 
            array (
                'id' => 2158,
                'state_name' => 'ash-Shamal',
                'country_id' => 121,
            ),
            158 => 
            array (
                'id' => 2159,
                'state_name' => 'Berea',
                'country_id' => 122,
            ),
            159 => 
            array (
                'id' => 2160,
                'state_name' => 'Butha-Buthe',
                'country_id' => 122,
            ),
            160 => 
            array (
                'id' => 2161,
                'state_name' => 'Leribe',
                'country_id' => 122,
            ),
            161 => 
            array (
                'id' => 2162,
                'state_name' => 'Mafeteng',
                'country_id' => 122,
            ),
            162 => 
            array (
                'id' => 2163,
                'state_name' => 'Maseru',
                'country_id' => 122,
            ),
            163 => 
            array (
                'id' => 2164,
                'state_name' => 'Mohale\'s Hoek',
                'country_id' => 122,
            ),
            164 => 
            array (
                'id' => 2165,
                'state_name' => 'Mokhotlong',
                'country_id' => 122,
            ),
            165 => 
            array (
                'id' => 2166,
                'state_name' => 'Qacha\'s Nek',
                'country_id' => 122,
            ),
            166 => 
            array (
                'id' => 2167,
                'state_name' => 'Quthing',
                'country_id' => 122,
            ),
            167 => 
            array (
                'id' => 2168,
                'state_name' => 'Thaba-Tseka',
                'country_id' => 122,
            ),
            168 => 
            array (
                'id' => 2169,
                'state_name' => 'Bomi',
                'country_id' => 123,
            ),
            169 => 
            array (
                'id' => 2170,
                'state_name' => 'Bong',
                'country_id' => 123,
            ),
            170 => 
            array (
                'id' => 2171,
                'state_name' => 'Grand Bassa',
                'country_id' => 123,
            ),
            171 => 
            array (
                'id' => 2172,
                'state_name' => 'Grand Cape Mount',
                'country_id' => 123,
            ),
            172 => 
            array (
                'id' => 2173,
                'state_name' => 'Grand Gedeh',
                'country_id' => 123,
            ),
            173 => 
            array (
                'id' => 2174,
                'state_name' => 'Loffa',
                'country_id' => 123,
            ),
            174 => 
            array (
                'id' => 2175,
                'state_name' => 'Margibi',
                'country_id' => 123,
            ),
            175 => 
            array (
                'id' => 2176,
                'state_name' => 'Maryland and Grand Kru',
                'country_id' => 123,
            ),
            176 => 
            array (
                'id' => 2177,
                'state_name' => 'Montserrado',
                'country_id' => 123,
            ),
            177 => 
            array (
                'id' => 2178,
                'state_name' => 'Nimba',
                'country_id' => 123,
            ),
            178 => 
            array (
                'id' => 2179,
                'state_name' => 'Rivercess',
                'country_id' => 123,
            ),
            179 => 
            array (
                'id' => 2180,
                'state_name' => 'Sinoe',
                'country_id' => 123,
            ),
            180 => 
            array (
                'id' => 2181,
                'state_name' => 'Ajdabiya',
                'country_id' => 124,
            ),
            181 => 
            array (
                'id' => 2183,
                'state_name' => 'Banghazi',
                'country_id' => 124,
            ),
            182 => 
            array (
                'id' => 2184,
                'state_name' => 'Darnah',
                'country_id' => 124,
            ),
            183 => 
            array (
                'id' => 2185,
                'state_name' => 'Ghadamis',
                'country_id' => 124,
            ),
            184 => 
            array (
                'id' => 2186,
                'state_name' => 'Gharyan',
                'country_id' => 124,
            ),
            185 => 
            array (
                'id' => 2187,
                'state_name' => 'Misratah',
                'country_id' => 124,
            ),
            186 => 
            array (
                'id' => 2188,
                'state_name' => 'Murzuq',
                'country_id' => 124,
            ),
            187 => 
            array (
                'id' => 2189,
                'state_name' => 'Sabha',
                'country_id' => 124,
            ),
            188 => 
            array (
                'id' => 2190,
                'state_name' => 'Sawfajjin',
                'country_id' => 124,
            ),
            189 => 
            array (
                'id' => 2191,
                'state_name' => 'Surt',
                'country_id' => 124,
            ),
            190 => 
            array (
                'id' => 2192,
                'state_name' => 'Tarabulus',
                'country_id' => 124,
            ),
            191 => 
            array (
                'id' => 2193,
                'state_name' => 'Tarhunah',
                'country_id' => 124,
            ),
            192 => 
            array (
                'id' => 2194,
                'state_name' => 'Tripolitania',
                'country_id' => 124,
            ),
            193 => 
            array (
                'id' => 2195,
                'state_name' => 'Tubruq',
                'country_id' => 124,
            ),
            194 => 
            array (
                'id' => 2196,
                'state_name' => 'Yafran',
                'country_id' => 124,
            ),
            195 => 
            array (
                'id' => 2197,
                'state_name' => 'Zlitan',
                'country_id' => 124,
            ),
            196 => 
            array (
                'id' => 2198,
                'state_name' => 'al-\'Aziziyah',
                'country_id' => 124,
            ),
            197 => 
            array (
                'id' => 2199,
                'state_name' => 'al-Fatih',
                'country_id' => 124,
            ),
            198 => 
            array (
                'id' => 2200,
                'state_name' => 'al-Jabal al Akhdar',
                'country_id' => 124,
            ),
            199 => 
            array (
                'id' => 2201,
                'state_name' => 'al-Jufrah',
                'country_id' => 124,
            ),
            200 => 
            array (
                'id' => 2202,
                'state_name' => 'al-Khums',
                'country_id' => 124,
            ),
            201 => 
            array (
                'id' => 2203,
                'state_name' => 'al-Kufrah',
                'country_id' => 124,
            ),
            202 => 
            array (
                'id' => 2204,
                'state_name' => 'an-Nuqat al-Khams',
                'country_id' => 124,
            ),
            203 => 
            array (
                'id' => 2205,
                'state_name' => 'ash-Shati\'',
                'country_id' => 124,
            ),
            204 => 
            array (
                'id' => 2206,
                'state_name' => 'az-Zawiyah',
                'country_id' => 124,
            ),
            205 => 
            array (
                'id' => 2207,
                'state_name' => 'Balzers',
                'country_id' => 125,
            ),
            206 => 
            array (
                'id' => 2208,
                'state_name' => 'Eschen',
                'country_id' => 125,
            ),
            207 => 
            array (
                'id' => 2209,
                'state_name' => 'Gamprin',
                'country_id' => 125,
            ),
            208 => 
            array (
                'id' => 2210,
                'state_name' => 'Mauren',
                'country_id' => 125,
            ),
            209 => 
            array (
                'id' => 2211,
                'state_name' => 'Planken',
                'country_id' => 125,
            ),
            210 => 
            array (
                'id' => 2212,
                'state_name' => 'Ruggell',
                'country_id' => 125,
            ),
            211 => 
            array (
                'id' => 2213,
                'state_name' => 'Schaan',
                'country_id' => 125,
            ),
            212 => 
            array (
                'id' => 2214,
                'state_name' => 'Schellenberg',
                'country_id' => 125,
            ),
            213 => 
            array (
                'id' => 2215,
                'state_name' => 'Triesen',
                'country_id' => 125,
            ),
            214 => 
            array (
                'id' => 2216,
                'state_name' => 'Triesenberg',
                'country_id' => 125,
            ),
            215 => 
            array (
                'id' => 2217,
                'state_name' => 'Vaduz',
                'country_id' => 125,
            ),
            216 => 
            array (
                'id' => 2218,
                'state_name' => 'Alytaus',
                'country_id' => 126,
            ),
            217 => 
            array (
                'id' => 2219,
                'state_name' => 'Anyksciai',
                'country_id' => 126,
            ),
            218 => 
            array (
                'id' => 2220,
                'state_name' => 'Kauno',
                'country_id' => 126,
            ),
            219 => 
            array (
                'id' => 2221,
                'state_name' => 'Klaipedos',
                'country_id' => 126,
            ),
            220 => 
            array (
                'id' => 2222,
                'state_name' => 'Marijampoles',
                'country_id' => 126,
            ),
            221 => 
            array (
                'id' => 2223,
                'state_name' => 'Panevezhio',
                'country_id' => 126,
            ),
            222 => 
            array (
                'id' => 2224,
                'state_name' => 'Panevezys',
                'country_id' => 126,
            ),
            223 => 
            array (
                'id' => 2225,
                'state_name' => 'Shiauliu',
                'country_id' => 126,
            ),
            224 => 
            array (
                'id' => 2226,
                'state_name' => 'Taurages',
                'country_id' => 126,
            ),
            225 => 
            array (
                'id' => 2227,
                'state_name' => 'Telshiu',
                'country_id' => 126,
            ),
            226 => 
            array (
                'id' => 2228,
                'state_name' => 'Telsiai',
                'country_id' => 126,
            ),
            227 => 
            array (
                'id' => 2229,
                'state_name' => 'Utenos',
                'country_id' => 126,
            ),
            228 => 
            array (
                'id' => 2230,
                'state_name' => 'Vilniaus',
                'country_id' => 126,
            ),
            229 => 
            array (
                'id' => 2231,
                'state_name' => 'Capellen',
                'country_id' => 127,
            ),
            230 => 
            array (
                'id' => 2232,
                'state_name' => 'Clervaux',
                'country_id' => 127,
            ),
            231 => 
            array (
                'id' => 2233,
                'state_name' => 'Diekirch',
                'country_id' => 127,
            ),
            232 => 
            array (
                'id' => 2234,
                'state_name' => 'Echternach',
                'country_id' => 127,
            ),
            233 => 
            array (
                'id' => 2235,
                'state_name' => 'Esch-sur-Alzette',
                'country_id' => 127,
            ),
            234 => 
            array (
                'id' => 2236,
                'state_name' => 'Grevenmacher',
                'country_id' => 127,
            ),
            235 => 
            array (
                'id' => 2237,
                'state_name' => 'Luxembourg',
                'country_id' => 127,
            ),
            236 => 
            array (
                'id' => 2238,
                'state_name' => 'Mersch',
                'country_id' => 127,
            ),
            237 => 
            array (
                'id' => 2239,
                'state_name' => 'Redange',
                'country_id' => 127,
            ),
            238 => 
            array (
                'id' => 2240,
                'state_name' => 'Remich',
                'country_id' => 127,
            ),
            239 => 
            array (
                'id' => 2241,
                'state_name' => 'Vianden',
                'country_id' => 127,
            ),
            240 => 
            array (
                'id' => 2242,
                'state_name' => 'Wiltz',
                'country_id' => 127,
            ),
            241 => 
            array (
                'id' => 2243,
                'state_name' => 'Macau',
                'country_id' => 128,
            ),
            242 => 
            array (
                'id' => 2244,
                'state_name' => 'Berovo',
                'country_id' => 129,
            ),
            243 => 
            array (
                'id' => 2245,
                'state_name' => 'Bitola',
                'country_id' => 129,
            ),
            244 => 
            array (
                'id' => 2246,
                'state_name' => 'Brod',
                'country_id' => 129,
            ),
            245 => 
            array (
                'id' => 2247,
                'state_name' => 'Debar',
                'country_id' => 129,
            ),
            246 => 
            array (
                'id' => 2248,
                'state_name' => 'Delchevo',
                'country_id' => 129,
            ),
            247 => 
            array (
                'id' => 2249,
                'state_name' => 'Demir Hisar',
                'country_id' => 129,
            ),
            248 => 
            array (
                'id' => 2250,
                'state_name' => 'Gevgelija',
                'country_id' => 129,
            ),
            249 => 
            array (
                'id' => 2251,
                'state_name' => 'Gostivar',
                'country_id' => 129,
            ),
            250 => 
            array (
                'id' => 2252,
                'state_name' => 'Kavadarci',
                'country_id' => 129,
            ),
            251 => 
            array (
                'id' => 2253,
                'state_name' => 'Kichevo',
                'country_id' => 129,
            ),
            252 => 
            array (
                'id' => 2254,
                'state_name' => 'Kochani',
                'country_id' => 129,
            ),
            253 => 
            array (
                'id' => 2255,
                'state_name' => 'Kratovo',
                'country_id' => 129,
            ),
            254 => 
            array (
                'id' => 2256,
                'state_name' => 'Kriva Palanka',
                'country_id' => 129,
            ),
            255 => 
            array (
                'id' => 2257,
                'state_name' => 'Krushevo',
                'country_id' => 129,
            ),
            256 => 
            array (
                'id' => 2258,
                'state_name' => 'Kumanovo',
                'country_id' => 129,
            ),
            257 => 
            array (
                'id' => 2259,
                'state_name' => 'Negotino',
                'country_id' => 129,
            ),
            258 => 
            array (
                'id' => 2260,
                'state_name' => 'Ohrid',
                'country_id' => 129,
            ),
            259 => 
            array (
                'id' => 2261,
                'state_name' => 'Prilep',
                'country_id' => 129,
            ),
            260 => 
            array (
                'id' => 2262,
                'state_name' => 'Probishtip',
                'country_id' => 129,
            ),
            261 => 
            array (
                'id' => 2263,
                'state_name' => 'Radovish',
                'country_id' => 129,
            ),
            262 => 
            array (
                'id' => 2264,
                'state_name' => 'Resen',
                'country_id' => 129,
            ),
            263 => 
            array (
                'id' => 2265,
                'state_name' => 'Shtip',
                'country_id' => 129,
            ),
            264 => 
            array (
                'id' => 2266,
                'state_name' => 'Skopje',
                'country_id' => 129,
            ),
            265 => 
            array (
                'id' => 2267,
                'state_name' => 'Struga',
                'country_id' => 129,
            ),
            266 => 
            array (
                'id' => 2268,
                'state_name' => 'Strumica',
                'country_id' => 129,
            ),
            267 => 
            array (
                'id' => 2269,
                'state_name' => 'Sveti Nikole',
                'country_id' => 129,
            ),
            268 => 
            array (
                'id' => 2270,
                'state_name' => 'Tetovo',
                'country_id' => 129,
            ),
            269 => 
            array (
                'id' => 2271,
                'state_name' => 'Valandovo',
                'country_id' => 129,
            ),
            270 => 
            array (
                'id' => 2272,
                'state_name' => 'Veles',
                'country_id' => 129,
            ),
            271 => 
            array (
                'id' => 2273,
                'state_name' => 'Vinica',
                'country_id' => 129,
            ),
            272 => 
            array (
                'id' => 2274,
                'state_name' => 'Antananarivo',
                'country_id' => 130,
            ),
            273 => 
            array (
                'id' => 2275,
                'state_name' => 'Antsiranana',
                'country_id' => 130,
            ),
            274 => 
            array (
                'id' => 2276,
                'state_name' => 'Fianarantsoa',
                'country_id' => 130,
            ),
            275 => 
            array (
                'id' => 2277,
                'state_name' => 'Mahajanga',
                'country_id' => 130,
            ),
            276 => 
            array (
                'id' => 2278,
                'state_name' => 'Toamasina',
                'country_id' => 130,
            ),
            277 => 
            array (
                'id' => 2279,
                'state_name' => 'Toliary',
                'country_id' => 130,
            ),
            278 => 
            array (
                'id' => 2280,
                'state_name' => 'Balaka',
                'country_id' => 131,
            ),
            279 => 
            array (
                'id' => 2281,
                'state_name' => 'Blantyre City',
                'country_id' => 131,
            ),
            280 => 
            array (
                'id' => 2282,
                'state_name' => 'Chikwawa',
                'country_id' => 131,
            ),
            281 => 
            array (
                'id' => 2283,
                'state_name' => 'Chiradzulu',
                'country_id' => 131,
            ),
            282 => 
            array (
                'id' => 2284,
                'state_name' => 'Chitipa',
                'country_id' => 131,
            ),
            283 => 
            array (
                'id' => 2285,
                'state_name' => 'Dedza',
                'country_id' => 131,
            ),
            284 => 
            array (
                'id' => 2286,
                'state_name' => 'Dowa',
                'country_id' => 131,
            ),
            285 => 
            array (
                'id' => 2287,
                'state_name' => 'Karonga',
                'country_id' => 131,
            ),
            286 => 
            array (
                'id' => 2288,
                'state_name' => 'Kasungu',
                'country_id' => 131,
            ),
            287 => 
            array (
                'id' => 2289,
                'state_name' => 'Lilongwe City',
                'country_id' => 131,
            ),
            288 => 
            array (
                'id' => 2290,
                'state_name' => 'Machinga',
                'country_id' => 131,
            ),
            289 => 
            array (
                'id' => 2291,
                'state_name' => 'Mangochi',
                'country_id' => 131,
            ),
            290 => 
            array (
                'id' => 2292,
                'state_name' => 'Mchinji',
                'country_id' => 131,
            ),
            291 => 
            array (
                'id' => 2293,
                'state_name' => 'Mulanje',
                'country_id' => 131,
            ),
            292 => 
            array (
                'id' => 2294,
                'state_name' => 'Mwanza',
                'country_id' => 131,
            ),
            293 => 
            array (
                'id' => 2295,
                'state_name' => 'Mzimba',
                'country_id' => 131,
            ),
            294 => 
            array (
                'id' => 2296,
                'state_name' => 'Mzuzu City',
                'country_id' => 131,
            ),
            295 => 
            array (
                'id' => 2297,
                'state_name' => 'Nkhata Bay',
                'country_id' => 131,
            ),
            296 => 
            array (
                'id' => 2298,
                'state_name' => 'Nkhotakota',
                'country_id' => 131,
            ),
            297 => 
            array (
                'id' => 2299,
                'state_name' => 'Nsanje',
                'country_id' => 131,
            ),
            298 => 
            array (
                'id' => 2300,
                'state_name' => 'Ntcheu',
                'country_id' => 131,
            ),
            299 => 
            array (
                'id' => 2301,
                'state_name' => 'Ntchisi',
                'country_id' => 131,
            ),
            300 => 
            array (
                'id' => 2302,
                'state_name' => 'Phalombe',
                'country_id' => 131,
            ),
            301 => 
            array (
                'id' => 2303,
                'state_name' => 'Rumphi',
                'country_id' => 131,
            ),
            302 => 
            array (
                'id' => 2304,
                'state_name' => 'Salima',
                'country_id' => 131,
            ),
            303 => 
            array (
                'id' => 2305,
                'state_name' => 'Thyolo',
                'country_id' => 131,
            ),
            304 => 
            array (
                'id' => 2306,
                'state_name' => 'Zomba Municipality',
                'country_id' => 131,
            ),
            305 => 
            array (
                'id' => 2307,
                'state_name' => 'Johor',
                'country_id' => 132,
            ),
            306 => 
            array (
                'id' => 2308,
                'state_name' => 'Kedah',
                'country_id' => 132,
            ),
            307 => 
            array (
                'id' => 2309,
                'state_name' => 'Kelantan',
                'country_id' => 132,
            ),
            308 => 
            array (
                'id' => 2310,
                'state_name' => 'Kuala Lumpur',
                'country_id' => 132,
            ),
            309 => 
            array (
                'id' => 2311,
                'state_name' => 'Labuan',
                'country_id' => 132,
            ),
            310 => 
            array (
                'id' => 2312,
                'state_name' => 'Melaka',
                'country_id' => 132,
            ),
            311 => 
            array (
                'id' => 2313,
                'state_name' => 'Negeri Johor',
                'country_id' => 132,
            ),
            312 => 
            array (
                'id' => 2314,
                'state_name' => 'Negeri Sembilan',
                'country_id' => 132,
            ),
            313 => 
            array (
                'id' => 2315,
                'state_name' => 'Pahang',
                'country_id' => 132,
            ),
            314 => 
            array (
                'id' => 2316,
                'state_name' => 'Penang',
                'country_id' => 132,
            ),
            315 => 
            array (
                'id' => 2317,
                'state_name' => 'Perak',
                'country_id' => 132,
            ),
            316 => 
            array (
                'id' => 2318,
                'state_name' => 'Perlis',
                'country_id' => 132,
            ),
            317 => 
            array (
                'id' => 2319,
                'state_name' => 'Pulau Pinang',
                'country_id' => 132,
            ),
            318 => 
            array (
                'id' => 2320,
                'state_name' => 'Sabah',
                'country_id' => 132,
            ),
            319 => 
            array (
                'id' => 2321,
                'state_name' => 'Sarawak',
                'country_id' => 132,
            ),
            320 => 
            array (
                'id' => 2322,
                'state_name' => 'Selangor',
                'country_id' => 132,
            ),
            321 => 
            array (
                'id' => 2323,
                'state_name' => 'Sembilan',
                'country_id' => 132,
            ),
            322 => 
            array (
                'id' => 2324,
                'state_name' => 'Terengganu',
                'country_id' => 132,
            ),
            323 => 
            array (
                'id' => 2325,
                'state_name' => 'Alif Alif',
                'country_id' => 133,
            ),
            324 => 
            array (
                'id' => 2326,
                'state_name' => 'Alif Dhaal',
                'country_id' => 133,
            ),
            325 => 
            array (
                'id' => 2327,
                'state_name' => 'Baa',
                'country_id' => 133,
            ),
            326 => 
            array (
                'id' => 2328,
                'state_name' => 'Dhaal',
                'country_id' => 133,
            ),
            327 => 
            array (
                'id' => 2329,
                'state_name' => 'Faaf',
                'country_id' => 133,
            ),
            328 => 
            array (
                'id' => 2330,
                'state_name' => 'Gaaf Alif',
                'country_id' => 133,
            ),
            329 => 
            array (
                'id' => 2331,
                'state_name' => 'Gaaf Dhaal',
                'country_id' => 133,
            ),
            330 => 
            array (
                'id' => 2332,
                'state_name' => 'Ghaviyani',
                'country_id' => 133,
            ),
            331 => 
            array (
                'id' => 2333,
                'state_name' => 'Haa Alif',
                'country_id' => 133,
            ),
            332 => 
            array (
                'id' => 2334,
                'state_name' => 'Haa Dhaal',
                'country_id' => 133,
            ),
            333 => 
            array (
                'id' => 2335,
                'state_name' => 'Kaaf',
                'country_id' => 133,
            ),
            334 => 
            array (
                'id' => 2336,
                'state_name' => 'Laam',
                'country_id' => 133,
            ),
            335 => 
            array (
                'id' => 2337,
                'state_name' => 'Lhaviyani',
                'country_id' => 133,
            ),
            336 => 
            array (
                'id' => 2338,
                'state_name' => 'Male',
                'country_id' => 133,
            ),
            337 => 
            array (
                'id' => 2339,
                'state_name' => 'Miim',
                'country_id' => 133,
            ),
            338 => 
            array (
                'id' => 2340,
                'state_name' => 'Nuun',
                'country_id' => 133,
            ),
            339 => 
            array (
                'id' => 2341,
                'state_name' => 'Raa',
                'country_id' => 133,
            ),
            340 => 
            array (
                'id' => 2342,
                'state_name' => 'Shaviyani',
                'country_id' => 133,
            ),
            341 => 
            array (
                'id' => 2343,
                'state_name' => 'Siin',
                'country_id' => 133,
            ),
            342 => 
            array (
                'id' => 2344,
                'state_name' => 'Thaa',
                'country_id' => 133,
            ),
            343 => 
            array (
                'id' => 2345,
                'state_name' => 'Vaav',
                'country_id' => 133,
            ),
            344 => 
            array (
                'id' => 2346,
                'state_name' => 'Bamako',
                'country_id' => 134,
            ),
            345 => 
            array (
                'id' => 2347,
                'state_name' => 'Gao',
                'country_id' => 134,
            ),
            346 => 
            array (
                'id' => 2348,
                'state_name' => 'Kayes',
                'country_id' => 134,
            ),
            347 => 
            array (
                'id' => 2349,
                'state_name' => 'Kidal',
                'country_id' => 134,
            ),
            348 => 
            array (
                'id' => 2350,
                'state_name' => 'Koulikoro',
                'country_id' => 134,
            ),
            349 => 
            array (
                'id' => 2351,
                'state_name' => 'Mopti',
                'country_id' => 134,
            ),
            350 => 
            array (
                'id' => 2352,
                'state_name' => 'Segou',
                'country_id' => 134,
            ),
            351 => 
            array (
                'id' => 2353,
                'state_name' => 'Sikasso',
                'country_id' => 134,
            ),
            352 => 
            array (
                'id' => 2354,
                'state_name' => 'Tombouctou',
                'country_id' => 134,
            ),
            353 => 
            array (
                'id' => 2355,
                'state_name' => 'Gozo and Comino',
                'country_id' => 135,
            ),
            354 => 
            array (
                'id' => 2356,
                'state_name' => 'Inner Harbour',
                'country_id' => 135,
            ),
            355 => 
            array (
                'id' => 2357,
                'state_name' => 'Northern',
                'country_id' => 135,
            ),
            356 => 
            array (
                'id' => 2358,
                'state_name' => 'Outer Harbour',
                'country_id' => 135,
            ),
            357 => 
            array (
                'id' => 2359,
                'state_name' => 'South Eastern',
                'country_id' => 135,
            ),
            358 => 
            array (
                'id' => 2360,
                'state_name' => 'Valletta',
                'country_id' => 135,
            ),
            359 => 
            array (
                'id' => 2361,
                'state_name' => 'Western',
                'country_id' => 135,
            ),
            360 => 
            array (
                'id' => 2362,
                'state_name' => 'Castletown',
                'country_id' => 136,
            ),
            361 => 
            array (
                'id' => 2363,
                'state_name' => 'Douglas',
                'country_id' => 136,
            ),
            362 => 
            array (
                'id' => 2364,
                'state_name' => 'Laxey',
                'country_id' => 136,
            ),
            363 => 
            array (
                'id' => 2365,
                'state_name' => 'Onchan',
                'country_id' => 136,
            ),
            364 => 
            array (
                'id' => 2366,
                'state_name' => 'Peel',
                'country_id' => 136,
            ),
            365 => 
            array (
                'id' => 2367,
                'state_name' => 'Port Erin',
                'country_id' => 136,
            ),
            366 => 
            array (
                'id' => 2368,
                'state_name' => 'Port Saint Mary',
                'country_id' => 136,
            ),
            367 => 
            array (
                'id' => 2369,
                'state_name' => 'Ramsey',
                'country_id' => 136,
            ),
            368 => 
            array (
                'id' => 2370,
                'state_name' => 'Ailinlaplap',
                'country_id' => 137,
            ),
            369 => 
            array (
                'id' => 2371,
                'state_name' => 'Ailuk',
                'country_id' => 137,
            ),
            370 => 
            array (
                'id' => 2372,
                'state_name' => 'Arno',
                'country_id' => 137,
            ),
            371 => 
            array (
                'id' => 2373,
                'state_name' => 'Aur',
                'country_id' => 137,
            ),
            372 => 
            array (
                'id' => 2374,
                'state_name' => 'Bikini',
                'country_id' => 137,
            ),
            373 => 
            array (
                'id' => 2375,
                'state_name' => 'Ebon',
                'country_id' => 137,
            ),
            374 => 
            array (
                'id' => 2376,
                'state_name' => 'Enewetak',
                'country_id' => 137,
            ),
            375 => 
            array (
                'id' => 2377,
                'state_name' => 'Jabat',
                'country_id' => 137,
            ),
            376 => 
            array (
                'id' => 2378,
                'state_name' => 'Jaluit',
                'country_id' => 137,
            ),
            377 => 
            array (
                'id' => 2379,
                'state_name' => 'Kili',
                'country_id' => 137,
            ),
            378 => 
            array (
                'id' => 2380,
                'state_name' => 'Kwajalein',
                'country_id' => 137,
            ),
            379 => 
            array (
                'id' => 2381,
                'state_name' => 'Lae',
                'country_id' => 137,
            ),
            380 => 
            array (
                'id' => 2382,
                'state_name' => 'Lib',
                'country_id' => 137,
            ),
            381 => 
            array (
                'id' => 2383,
                'state_name' => 'Likiep',
                'country_id' => 137,
            ),
            382 => 
            array (
                'id' => 2384,
                'state_name' => 'Majuro',
                'country_id' => 137,
            ),
            383 => 
            array (
                'id' => 2385,
                'state_name' => 'Maloelap',
                'country_id' => 137,
            ),
            384 => 
            array (
                'id' => 2386,
                'state_name' => 'Mejit',
                'country_id' => 137,
            ),
            385 => 
            array (
                'id' => 2387,
                'state_name' => 'Mili',
                'country_id' => 137,
            ),
            386 => 
            array (
                'id' => 2388,
                'state_name' => 'Namorik',
                'country_id' => 137,
            ),
            387 => 
            array (
                'id' => 2389,
                'state_name' => 'Namu',
                'country_id' => 137,
            ),
            388 => 
            array (
                'id' => 2390,
                'state_name' => 'Rongelap',
                'country_id' => 137,
            ),
            389 => 
            array (
                'id' => 2391,
                'state_name' => 'Ujae',
                'country_id' => 137,
            ),
            390 => 
            array (
                'id' => 2392,
                'state_name' => 'Utrik',
                'country_id' => 137,
            ),
            391 => 
            array (
                'id' => 2393,
                'state_name' => 'Wotho',
                'country_id' => 137,
            ),
            392 => 
            array (
                'id' => 2394,
                'state_name' => 'Wotje',
                'country_id' => 137,
            ),
            393 => 
            array (
                'id' => 2395,
                'state_name' => 'Fort-de-France',
                'country_id' => 138,
            ),
            394 => 
            array (
                'id' => 2396,
                'state_name' => 'La Trinite',
                'country_id' => 138,
            ),
            395 => 
            array (
                'id' => 2397,
                'state_name' => 'Le Marin',
                'country_id' => 138,
            ),
            396 => 
            array (
                'id' => 2398,
                'state_name' => 'Saint-Pierre',
                'country_id' => 138,
            ),
            397 => 
            array (
                'id' => 2399,
                'state_name' => 'Adrar',
                'country_id' => 139,
            ),
            398 => 
            array (
                'id' => 2400,
                'state_name' => 'Assaba',
                'country_id' => 139,
            ),
            399 => 
            array (
                'id' => 2401,
                'state_name' => 'Brakna',
                'country_id' => 139,
            ),
            400 => 
            array (
                'id' => 2402,
                'state_name' => 'Dhakhlat Nawadibu',
                'country_id' => 139,
            ),
            401 => 
            array (
                'id' => 2403,
                'state_name' => 'Hudh-al-Gharbi',
                'country_id' => 139,
            ),
            402 => 
            array (
                'id' => 2404,
                'state_name' => 'Hudh-ash-Sharqi',
                'country_id' => 139,
            ),
            403 => 
            array (
                'id' => 2405,
                'state_name' => 'Inshiri',
                'country_id' => 139,
            ),
            404 => 
            array (
                'id' => 2406,
                'state_name' => 'Nawakshut',
                'country_id' => 139,
            ),
            405 => 
            array (
                'id' => 2407,
                'state_name' => 'Qidimagha',
                'country_id' => 139,
            ),
            406 => 
            array (
                'id' => 2408,
                'state_name' => 'Qurqul',
                'country_id' => 139,
            ),
            407 => 
            array (
                'id' => 2409,
                'state_name' => 'Taqant',
                'country_id' => 139,
            ),
            408 => 
            array (
                'id' => 2410,
                'state_name' => 'Tiris Zammur',
                'country_id' => 139,
            ),
            409 => 
            array (
                'id' => 2411,
                'state_name' => 'Trarza',
                'country_id' => 139,
            ),
            410 => 
            array (
                'id' => 2412,
                'state_name' => 'Black River',
                'country_id' => 140,
            ),
            411 => 
            array (
                'id' => 2413,
                'state_name' => 'Eau Coulee',
                'country_id' => 140,
            ),
            412 => 
            array (
                'id' => 2414,
                'state_name' => 'Flacq',
                'country_id' => 140,
            ),
            413 => 
            array (
                'id' => 2415,
                'state_name' => 'Floreal',
                'country_id' => 140,
            ),
            414 => 
            array (
                'id' => 2416,
                'state_name' => 'Grand Port',
                'country_id' => 140,
            ),
            415 => 
            array (
                'id' => 2417,
                'state_name' => 'Moka',
                'country_id' => 140,
            ),
            416 => 
            array (
                'id' => 2418,
                'state_name' => 'Pamplempousses',
                'country_id' => 140,
            ),
            417 => 
            array (
                'id' => 2419,
                'state_name' => 'Plaines Wilhelm',
                'country_id' => 140,
            ),
            418 => 
            array (
                'id' => 2420,
                'state_name' => 'Port Louis',
                'country_id' => 140,
            ),
            419 => 
            array (
                'id' => 2421,
                'state_name' => 'Riviere du Rempart',
                'country_id' => 140,
            ),
            420 => 
            array (
                'id' => 2422,
                'state_name' => 'Rodrigues',
                'country_id' => 140,
            ),
            421 => 
            array (
                'id' => 2423,
                'state_name' => 'Rose Hill',
                'country_id' => 140,
            ),
            422 => 
            array (
                'id' => 2424,
                'state_name' => 'Savanne',
                'country_id' => 140,
            ),
            423 => 
            array (
                'id' => 2425,
                'state_name' => 'Mayotte',
                'country_id' => 141,
            ),
            424 => 
            array (
                'id' => 2426,
                'state_name' => 'Pamanzi',
                'country_id' => 141,
            ),
            425 => 
            array (
                'id' => 2427,
                'state_name' => 'Aguascalientes',
                'country_id' => 142,
            ),
            426 => 
            array (
                'id' => 2428,
                'state_name' => 'Baja California',
                'country_id' => 142,
            ),
            427 => 
            array (
                'id' => 2429,
                'state_name' => 'Baja California Sur',
                'country_id' => 142,
            ),
            428 => 
            array (
                'id' => 2430,
                'state_name' => 'Campeche',
                'country_id' => 142,
            ),
            429 => 
            array (
                'id' => 2431,
                'state_name' => 'Chiapas',
                'country_id' => 142,
            ),
            430 => 
            array (
                'id' => 2432,
                'state_name' => 'Chihuahua',
                'country_id' => 142,
            ),
            431 => 
            array (
                'id' => 2433,
                'state_name' => 'Coahuila',
                'country_id' => 142,
            ),
            432 => 
            array (
                'id' => 2434,
                'state_name' => 'Colima',
                'country_id' => 142,
            ),
            433 => 
            array (
                'id' => 2435,
                'state_name' => 'Distrito Federal',
                'country_id' => 142,
            ),
            434 => 
            array (
                'id' => 2436,
                'state_name' => 'Durango',
                'country_id' => 142,
            ),
            435 => 
            array (
                'id' => 2437,
                'state_name' => 'Estado de Mexico',
                'country_id' => 142,
            ),
            436 => 
            array (
                'id' => 2438,
                'state_name' => 'Guanajuato',
                'country_id' => 142,
            ),
            437 => 
            array (
                'id' => 2439,
                'state_name' => 'Guerrero',
                'country_id' => 142,
            ),
            438 => 
            array (
                'id' => 2440,
                'state_name' => 'Hidalgo',
                'country_id' => 142,
            ),
            439 => 
            array (
                'id' => 2441,
                'state_name' => 'Jalisco',
                'country_id' => 142,
            ),
            440 => 
            array (
                'id' => 2442,
                'state_name' => 'Mexico',
                'country_id' => 142,
            ),
            441 => 
            array (
                'id' => 2443,
                'state_name' => 'Michoacan',
                'country_id' => 142,
            ),
            442 => 
            array (
                'id' => 2444,
                'state_name' => 'Morelos',
                'country_id' => 142,
            ),
            443 => 
            array (
                'id' => 2445,
                'state_name' => 'Nayarit',
                'country_id' => 142,
            ),
            444 => 
            array (
                'id' => 2446,
                'state_name' => 'Nuevo Leon',
                'country_id' => 142,
            ),
            445 => 
            array (
                'id' => 2447,
                'state_name' => 'Oaxaca',
                'country_id' => 142,
            ),
            446 => 
            array (
                'id' => 2448,
                'state_name' => 'Puebla',
                'country_id' => 142,
            ),
            447 => 
            array (
                'id' => 2449,
                'state_name' => 'Queretaro',
                'country_id' => 142,
            ),
            448 => 
            array (
                'id' => 2450,
                'state_name' => 'Quintana Roo',
                'country_id' => 142,
            ),
            449 => 
            array (
                'id' => 2451,
                'state_name' => 'San Luis Potosi',
                'country_id' => 142,
            ),
            450 => 
            array (
                'id' => 2452,
                'state_name' => 'Sinaloa',
                'country_id' => 142,
            ),
            451 => 
            array (
                'id' => 2453,
                'state_name' => 'Sonora',
                'country_id' => 142,
            ),
            452 => 
            array (
                'id' => 2454,
                'state_name' => 'Tabasco',
                'country_id' => 142,
            ),
            453 => 
            array (
                'id' => 2455,
                'state_name' => 'Tamaulipas',
                'country_id' => 142,
            ),
            454 => 
            array (
                'id' => 2456,
                'state_name' => 'Tlaxcala',
                'country_id' => 142,
            ),
            455 => 
            array (
                'id' => 2457,
                'state_name' => 'Veracruz',
                'country_id' => 142,
            ),
            456 => 
            array (
                'id' => 2458,
                'state_name' => 'Yucatan',
                'country_id' => 142,
            ),
            457 => 
            array (
                'id' => 2459,
                'state_name' => 'Zacatecas',
                'country_id' => 142,
            ),
            458 => 
            array (
                'id' => 2460,
                'state_name' => 'Chuuk',
                'country_id' => 143,
            ),
            459 => 
            array (
                'id' => 2461,
                'state_name' => 'Kusaie',
                'country_id' => 143,
            ),
            460 => 
            array (
                'id' => 2462,
                'state_name' => 'Pohnpei',
                'country_id' => 143,
            ),
            461 => 
            array (
                'id' => 2463,
                'state_name' => 'Yap',
                'country_id' => 143,
            ),
            462 => 
            array (
                'id' => 2464,
                'state_name' => 'Balti',
                'country_id' => 144,
            ),
            463 => 
            array (
                'id' => 2465,
                'state_name' => 'Cahul',
                'country_id' => 144,
            ),
            464 => 
            array (
                'id' => 2466,
                'state_name' => 'Chisinau',
                'country_id' => 144,
            ),
            465 => 
            array (
                'id' => 2467,
                'state_name' => 'Chisinau Oras',
                'country_id' => 144,
            ),
            466 => 
            array (
                'id' => 2468,
                'state_name' => 'Edinet',
                'country_id' => 144,
            ),
            467 => 
            array (
                'id' => 2469,
                'state_name' => 'Gagauzia',
                'country_id' => 144,
            ),
            468 => 
            array (
                'id' => 2470,
                'state_name' => 'Lapusna',
                'country_id' => 144,
            ),
            469 => 
            array (
                'id' => 2471,
                'state_name' => 'Orhei',
                'country_id' => 144,
            ),
            470 => 
            array (
                'id' => 2472,
                'state_name' => 'Soroca',
                'country_id' => 144,
            ),
            471 => 
            array (
                'id' => 2473,
                'state_name' => 'Taraclia',
                'country_id' => 144,
            ),
            472 => 
            array (
                'id' => 2474,
                'state_name' => 'Tighina',
                'country_id' => 144,
            ),
            473 => 
            array (
                'id' => 2475,
                'state_name' => 'Transnistria',
                'country_id' => 144,
            ),
            474 => 
            array (
                'id' => 2476,
                'state_name' => 'Ungheni',
                'country_id' => 144,
            ),
            475 => 
            array (
                'id' => 2477,
                'state_name' => 'Fontvieille',
                'country_id' => 145,
            ),
            476 => 
            array (
                'id' => 2478,
                'state_name' => 'La Condamine',
                'country_id' => 145,
            ),
            477 => 
            array (
                'id' => 2479,
                'state_name' => 'Monaco-Ville',
                'country_id' => 145,
            ),
            478 => 
            array (
                'id' => 2480,
                'state_name' => 'Monte Carlo',
                'country_id' => 145,
            ),
            479 => 
            array (
                'id' => 2481,
                'state_name' => 'Arhangaj',
                'country_id' => 146,
            ),
            480 => 
            array (
                'id' => 2482,
                'state_name' => 'Bajan-Olgij',
                'country_id' => 146,
            ),
            481 => 
            array (
                'id' => 2483,
                'state_name' => 'Bajanhongor',
                'country_id' => 146,
            ),
            482 => 
            array (
                'id' => 2484,
                'state_name' => 'Bulgan',
                'country_id' => 146,
            ),
            483 => 
            array (
                'id' => 2485,
                'state_name' => 'Darhan-Uul',
                'country_id' => 146,
            ),
            484 => 
            array (
                'id' => 2486,
                'state_name' => 'Dornod',
                'country_id' => 146,
            ),
            485 => 
            array (
                'id' => 2487,
                'state_name' => 'Dornogovi',
                'country_id' => 146,
            ),
            486 => 
            array (
                'id' => 2488,
                'state_name' => 'Dundgovi',
                'country_id' => 146,
            ),
            487 => 
            array (
                'id' => 2489,
                'state_name' => 'Govi-Altaj',
                'country_id' => 146,
            ),
            488 => 
            array (
                'id' => 2490,
                'state_name' => 'Govisumber',
                'country_id' => 146,
            ),
            489 => 
            array (
                'id' => 2491,
                'state_name' => 'Hentij',
                'country_id' => 146,
            ),
            490 => 
            array (
                'id' => 2492,
                'state_name' => 'Hovd',
                'country_id' => 146,
            ),
            491 => 
            array (
                'id' => 2493,
                'state_name' => 'Hovsgol',
                'country_id' => 146,
            ),
            492 => 
            array (
                'id' => 2494,
                'state_name' => 'Omnogovi',
                'country_id' => 146,
            ),
            493 => 
            array (
                'id' => 2495,
                'state_name' => 'Orhon',
                'country_id' => 146,
            ),
            494 => 
            array (
                'id' => 2496,
                'state_name' => 'Ovorhangaj',
                'country_id' => 146,
            ),
            495 => 
            array (
                'id' => 2497,
                'state_name' => 'Selenge',
                'country_id' => 146,
            ),
            496 => 
            array (
                'id' => 2498,
                'state_name' => 'Suhbaatar',
                'country_id' => 146,
            ),
            497 => 
            array (
                'id' => 2499,
                'state_name' => 'Tov',
                'country_id' => 146,
            ),
            498 => 
            array (
                'id' => 2500,
                'state_name' => 'Ulaanbaatar',
                'country_id' => 146,
            ),
            499 => 
            array (
                'id' => 2501,
                'state_name' => 'Uvs',
                'country_id' => 146,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 2502,
                'state_name' => 'Zavhan',
                'country_id' => 146,
            ),
            1 => 
            array (
                'id' => 2503,
                'state_name' => 'Montserrat',
                'country_id' => 147,
            ),
            2 => 
            array (
                'id' => 2504,
                'state_name' => 'Agadir',
                'country_id' => 148,
            ),
            3 => 
            array (
                'id' => 2505,
                'state_name' => 'Casablanca',
                'country_id' => 148,
            ),
            4 => 
            array (
                'id' => 2506,
                'state_name' => 'Chaouia-Ouardigha',
                'country_id' => 148,
            ),
            5 => 
            array (
                'id' => 2507,
                'state_name' => 'Doukkala-Abda',
                'country_id' => 148,
            ),
            6 => 
            array (
                'id' => 2508,
                'state_name' => 'Fes-Boulemane',
                'country_id' => 148,
            ),
            7 => 
            array (
                'id' => 2509,
                'state_name' => 'Gharb-Chrarda-Beni Hssen',
                'country_id' => 148,
            ),
            8 => 
            array (
                'id' => 2510,
                'state_name' => 'Guelmim',
                'country_id' => 148,
            ),
            9 => 
            array (
                'id' => 2511,
                'state_name' => 'Kenitra',
                'country_id' => 148,
            ),
            10 => 
            array (
                'id' => 2512,
                'state_name' => 'Marrakech-Tensift-Al Haouz',
                'country_id' => 148,
            ),
            11 => 
            array (
                'id' => 2513,
                'state_name' => 'Meknes-Tafilalet',
                'country_id' => 148,
            ),
            12 => 
            array (
                'id' => 2514,
                'state_name' => 'Oriental',
                'country_id' => 148,
            ),
            13 => 
            array (
                'id' => 2515,
                'state_name' => 'Oujda',
                'country_id' => 148,
            ),
            14 => 
            array (
                'id' => 2516,
                'state_name' => 'Province de Tanger',
                'country_id' => 148,
            ),
            15 => 
            array (
                'id' => 2517,
                'state_name' => 'Rabat-Sale-Zammour-Zaer',
                'country_id' => 148,
            ),
            16 => 
            array (
                'id' => 2518,
                'state_name' => 'Sala Al Jadida',
                'country_id' => 148,
            ),
            17 => 
            array (
                'id' => 2519,
                'state_name' => 'Settat',
                'country_id' => 148,
            ),
            18 => 
            array (
                'id' => 2520,
                'state_name' => 'Souss Massa-Draa',
                'country_id' => 148,
            ),
            19 => 
            array (
                'id' => 2521,
                'state_name' => 'Tadla-Azilal',
                'country_id' => 148,
            ),
            20 => 
            array (
                'id' => 2522,
                'state_name' => 'Tangier-Tetouan',
                'country_id' => 148,
            ),
            21 => 
            array (
                'id' => 2523,
                'state_name' => 'Taza-Al Hoceima-Taounate',
                'country_id' => 148,
            ),
            22 => 
            array (
                'id' => 2524,
                'state_name' => 'Wilaya de Casablanca',
                'country_id' => 148,
            ),
            23 => 
            array (
                'id' => 2525,
                'state_name' => 'Wilaya de Rabat-Sale',
                'country_id' => 148,
            ),
            24 => 
            array (
                'id' => 2526,
                'state_name' => 'Cabo Delgado',
                'country_id' => 149,
            ),
            25 => 
            array (
                'id' => 2527,
                'state_name' => 'Gaza',
                'country_id' => 149,
            ),
            26 => 
            array (
                'id' => 2528,
                'state_name' => 'Inhambane',
                'country_id' => 149,
            ),
            27 => 
            array (
                'id' => 2529,
                'state_name' => 'Manica',
                'country_id' => 149,
            ),
            28 => 
            array (
                'id' => 2530,
                'state_name' => 'Maputo',
                'country_id' => 149,
            ),
            29 => 
            array (
                'id' => 2531,
                'state_name' => 'Maputo Provincia',
                'country_id' => 149,
            ),
            30 => 
            array (
                'id' => 2532,
                'state_name' => 'Nampula',
                'country_id' => 149,
            ),
            31 => 
            array (
                'id' => 2533,
                'state_name' => 'Niassa',
                'country_id' => 149,
            ),
            32 => 
            array (
                'id' => 2534,
                'state_name' => 'Sofala',
                'country_id' => 149,
            ),
            33 => 
            array (
                'id' => 2535,
                'state_name' => 'Tete',
                'country_id' => 149,
            ),
            34 => 
            array (
                'id' => 2536,
                'state_name' => 'Zambezia',
                'country_id' => 149,
            ),
            35 => 
            array (
                'id' => 2537,
                'state_name' => 'Ayeyarwady',
                'country_id' => 150,
            ),
            36 => 
            array (
                'id' => 2538,
                'state_name' => 'Bago',
                'country_id' => 150,
            ),
            37 => 
            array (
                'id' => 2539,
                'state_name' => 'Chin',
                'country_id' => 150,
            ),
            38 => 
            array (
                'id' => 2540,
                'state_name' => 'Kachin',
                'country_id' => 150,
            ),
            39 => 
            array (
                'id' => 2541,
                'state_name' => 'Kayah',
                'country_id' => 150,
            ),
            40 => 
            array (
                'id' => 2542,
                'state_name' => 'Kayin',
                'country_id' => 150,
            ),
            41 => 
            array (
                'id' => 2543,
                'state_name' => 'Magway',
                'country_id' => 150,
            ),
            42 => 
            array (
                'id' => 2544,
                'state_name' => 'Mandalay',
                'country_id' => 150,
            ),
            43 => 
            array (
                'id' => 2545,
                'state_name' => 'Mon',
                'country_id' => 150,
            ),
            44 => 
            array (
                'id' => 2546,
                'state_name' => 'Nay Pyi Taw',
                'country_id' => 150,
            ),
            45 => 
            array (
                'id' => 2547,
                'state_name' => 'Rakhine',
                'country_id' => 150,
            ),
            46 => 
            array (
                'id' => 2548,
                'state_name' => 'Sagaing',
                'country_id' => 150,
            ),
            47 => 
            array (
                'id' => 2549,
                'state_name' => 'Shan',
                'country_id' => 150,
            ),
            48 => 
            array (
                'id' => 2550,
                'state_name' => 'Tanintharyi',
                'country_id' => 150,
            ),
            49 => 
            array (
                'id' => 2551,
                'state_name' => 'Yangon',
                'country_id' => 150,
            ),
            50 => 
            array (
                'id' => 2552,
                'state_name' => 'Caprivi',
                'country_id' => 151,
            ),
            51 => 
            array (
                'id' => 2553,
                'state_name' => 'Erongo',
                'country_id' => 151,
            ),
            52 => 
            array (
                'id' => 2554,
                'state_name' => 'Hardap',
                'country_id' => 151,
            ),
            53 => 
            array (
                'id' => 2555,
                'state_name' => 'Karas',
                'country_id' => 151,
            ),
            54 => 
            array (
                'id' => 2556,
                'state_name' => 'Kavango',
                'country_id' => 151,
            ),
            55 => 
            array (
                'id' => 2557,
                'state_name' => 'Khomas',
                'country_id' => 151,
            ),
            56 => 
            array (
                'id' => 2558,
                'state_name' => 'Kunene',
                'country_id' => 151,
            ),
            57 => 
            array (
                'id' => 2559,
                'state_name' => 'Ohangwena',
                'country_id' => 151,
            ),
            58 => 
            array (
                'id' => 2560,
                'state_name' => 'Omaheke',
                'country_id' => 151,
            ),
            59 => 
            array (
                'id' => 2561,
                'state_name' => 'Omusati',
                'country_id' => 151,
            ),
            60 => 
            array (
                'id' => 2562,
                'state_name' => 'Oshana',
                'country_id' => 151,
            ),
            61 => 
            array (
                'id' => 2563,
                'state_name' => 'Oshikoto',
                'country_id' => 151,
            ),
            62 => 
            array (
                'id' => 2564,
                'state_name' => 'Otjozondjupa',
                'country_id' => 151,
            ),
            63 => 
            array (
                'id' => 2565,
                'state_name' => 'Yaren',
                'country_id' => 152,
            ),
            64 => 
            array (
                'id' => 2566,
                'state_name' => 'Bagmati',
                'country_id' => 153,
            ),
            65 => 
            array (
                'id' => 2567,
                'state_name' => 'Bheri',
                'country_id' => 153,
            ),
            66 => 
            array (
                'id' => 2568,
                'state_name' => 'Dhawalagiri',
                'country_id' => 153,
            ),
            67 => 
            array (
                'id' => 2569,
                'state_name' => 'Gandaki',
                'country_id' => 153,
            ),
            68 => 
            array (
                'id' => 2570,
                'state_name' => 'Janakpur',
                'country_id' => 153,
            ),
            69 => 
            array (
                'id' => 2571,
                'state_name' => 'Karnali',
                'country_id' => 153,
            ),
            70 => 
            array (
                'id' => 2572,
                'state_name' => 'Koshi',
                'country_id' => 153,
            ),
            71 => 
            array (
                'id' => 2573,
                'state_name' => 'Lumbini',
                'country_id' => 153,
            ),
            72 => 
            array (
                'id' => 2574,
                'state_name' => 'Mahakali',
                'country_id' => 153,
            ),
            73 => 
            array (
                'id' => 2575,
                'state_name' => 'Mechi',
                'country_id' => 153,
            ),
            74 => 
            array (
                'id' => 2576,
                'state_name' => 'Narayani',
                'country_id' => 153,
            ),
            75 => 
            array (
                'id' => 2577,
                'state_name' => 'Rapti',
                'country_id' => 153,
            ),
            76 => 
            array (
                'id' => 2578,
                'state_name' => 'Sagarmatha',
                'country_id' => 153,
            ),
            77 => 
            array (
                'id' => 2579,
                'state_name' => 'Seti',
                'country_id' => 153,
            ),
            78 => 
            array (
                'id' => 2580,
                'state_name' => 'Bonaire',
                'country_id' => 154,
            ),
            79 => 
            array (
                'id' => 2581,
                'state_name' => 'Curacao',
                'country_id' => 154,
            ),
            80 => 
            array (
                'id' => 2582,
                'state_name' => 'Saba',
                'country_id' => 154,
            ),
            81 => 
            array (
                'id' => 2583,
                'state_name' => 'Sint Eustatius',
                'country_id' => 154,
            ),
            82 => 
            array (
                'id' => 2584,
                'state_name' => 'Sint Maarten',
                'country_id' => 154,
            ),
            83 => 
            array (
                'id' => 2585,
                'state_name' => 'Amsterdam',
                'country_id' => 155,
            ),
            84 => 
            array (
                'id' => 2586,
                'state_name' => 'Benelux',
                'country_id' => 155,
            ),
            85 => 
            array (
                'id' => 2587,
                'state_name' => 'Drenthe',
                'country_id' => 155,
            ),
            86 => 
            array (
                'id' => 2588,
                'state_name' => 'Flevoland',
                'country_id' => 155,
            ),
            87 => 
            array (
                'id' => 2589,
                'state_name' => 'Friesland',
                'country_id' => 155,
            ),
            88 => 
            array (
                'id' => 2590,
                'state_name' => 'Gelderland',
                'country_id' => 155,
            ),
            89 => 
            array (
                'id' => 2591,
                'state_name' => 'Groningen',
                'country_id' => 155,
            ),
            90 => 
            array (
                'id' => 2592,
                'state_name' => 'Limburg',
                'country_id' => 155,
            ),
            91 => 
            array (
                'id' => 2593,
                'state_name' => 'Noord-Brabant',
                'country_id' => 155,
            ),
            92 => 
            array (
                'id' => 2594,
                'state_name' => 'Noord-Holland',
                'country_id' => 155,
            ),
            93 => 
            array (
                'id' => 2595,
                'state_name' => 'Overijssel',
                'country_id' => 155,
            ),
            94 => 
            array (
                'id' => 2596,
                'state_name' => 'South Holland',
                'country_id' => 155,
            ),
            95 => 
            array (
                'id' => 2597,
                'state_name' => 'Utrecht',
                'country_id' => 155,
            ),
            96 => 
            array (
                'id' => 2598,
                'state_name' => 'Zeeland',
                'country_id' => 155,
            ),
            97 => 
            array (
                'id' => 2599,
                'state_name' => 'Zuid-Holland',
                'country_id' => 155,
            ),
            98 => 
            array (
                'id' => 2600,
                'state_name' => 'Iles',
                'country_id' => 156,
            ),
            99 => 
            array (
                'id' => 2601,
                'state_name' => 'Nord',
                'country_id' => 156,
            ),
            100 => 
            array (
                'id' => 2602,
                'state_name' => 'Sud',
                'country_id' => 156,
            ),
            101 => 
            array (
                'id' => 2603,
                'state_name' => 'Area Outside Region',
                'country_id' => 157,
            ),
            102 => 
            array (
                'id' => 2604,
                'state_name' => 'Auckland',
                'country_id' => 157,
            ),
            103 => 
            array (
                'id' => 2605,
                'state_name' => 'Bay of Plenty',
                'country_id' => 157,
            ),
            104 => 
            array (
                'id' => 2606,
                'state_name' => 'Canterbury',
                'country_id' => 157,
            ),
            105 => 
            array (
                'id' => 2607,
                'state_name' => 'Christchurch',
                'country_id' => 157,
            ),
            106 => 
            array (
                'id' => 2608,
                'state_name' => 'Gisborne',
                'country_id' => 157,
            ),
            107 => 
            array (
                'id' => 2609,
                'state_name' => 'Hawke\'s Bay',
                'country_id' => 157,
            ),
            108 => 
            array (
                'id' => 2610,
                'state_name' => 'Manawatu-Wanganui',
                'country_id' => 157,
            ),
            109 => 
            array (
                'id' => 2611,
                'state_name' => 'Marlborough',
                'country_id' => 157,
            ),
            110 => 
            array (
                'id' => 2612,
                'state_name' => 'Nelson',
                'country_id' => 157,
            ),
            111 => 
            array (
                'id' => 2613,
                'state_name' => 'Northland',
                'country_id' => 157,
            ),
            112 => 
            array (
                'id' => 2614,
                'state_name' => 'Otago',
                'country_id' => 157,
            ),
            113 => 
            array (
                'id' => 2615,
                'state_name' => 'Rodney',
                'country_id' => 157,
            ),
            114 => 
            array (
                'id' => 2616,
                'state_name' => 'Southland',
                'country_id' => 157,
            ),
            115 => 
            array (
                'id' => 2617,
                'state_name' => 'Taranaki',
                'country_id' => 157,
            ),
            116 => 
            array (
                'id' => 2618,
                'state_name' => 'Tasman',
                'country_id' => 157,
            ),
            117 => 
            array (
                'id' => 2619,
                'state_name' => 'Waikato',
                'country_id' => 157,
            ),
            118 => 
            array (
                'id' => 2620,
                'state_name' => 'Wellington',
                'country_id' => 157,
            ),
            119 => 
            array (
                'id' => 2621,
                'state_name' => 'West Coast',
                'country_id' => 157,
            ),
            120 => 
            array (
                'id' => 2622,
                'state_name' => 'Atlantico Norte',
                'country_id' => 158,
            ),
            121 => 
            array (
                'id' => 2623,
                'state_name' => 'Atlantico Sur',
                'country_id' => 158,
            ),
            122 => 
            array (
                'id' => 2624,
                'state_name' => 'Boaco',
                'country_id' => 158,
            ),
            123 => 
            array (
                'id' => 2625,
                'state_name' => 'Carazo',
                'country_id' => 158,
            ),
            124 => 
            array (
                'id' => 2626,
                'state_name' => 'Chinandega',
                'country_id' => 158,
            ),
            125 => 
            array (
                'id' => 2627,
                'state_name' => 'Chontales',
                'country_id' => 158,
            ),
            126 => 
            array (
                'id' => 2628,
                'state_name' => 'Esteli',
                'country_id' => 158,
            ),
            127 => 
            array (
                'id' => 2629,
                'state_name' => 'Granada',
                'country_id' => 158,
            ),
            128 => 
            array (
                'id' => 2630,
                'state_name' => 'Jinotega',
                'country_id' => 158,
            ),
            129 => 
            array (
                'id' => 2631,
                'state_name' => 'Leon',
                'country_id' => 158,
            ),
            130 => 
            array (
                'id' => 2632,
                'state_name' => 'Madriz',
                'country_id' => 158,
            ),
            131 => 
            array (
                'id' => 2633,
                'state_name' => 'Managua',
                'country_id' => 158,
            ),
            132 => 
            array (
                'id' => 2634,
                'state_name' => 'Masaya',
                'country_id' => 158,
            ),
            133 => 
            array (
                'id' => 2635,
                'state_name' => 'Matagalpa',
                'country_id' => 158,
            ),
            134 => 
            array (
                'id' => 2636,
                'state_name' => 'Nueva Segovia',
                'country_id' => 158,
            ),
            135 => 
            array (
                'id' => 2637,
                'state_name' => 'Rio San Juan',
                'country_id' => 158,
            ),
            136 => 
            array (
                'id' => 2638,
                'state_name' => 'Rivas',
                'country_id' => 158,
            ),
            137 => 
            array (
                'id' => 2639,
                'state_name' => 'Agadez',
                'country_id' => 159,
            ),
            138 => 
            array (
                'id' => 2640,
                'state_name' => 'Diffa',
                'country_id' => 159,
            ),
            139 => 
            array (
                'id' => 2641,
                'state_name' => 'Dosso',
                'country_id' => 159,
            ),
            140 => 
            array (
                'id' => 2642,
                'state_name' => 'Maradi',
                'country_id' => 159,
            ),
            141 => 
            array (
                'id' => 2643,
                'state_name' => 'Niamey',
                'country_id' => 159,
            ),
            142 => 
            array (
                'id' => 2644,
                'state_name' => 'Tahoua',
                'country_id' => 159,
            ),
            143 => 
            array (
                'id' => 2645,
                'state_name' => 'Tillabery',
                'country_id' => 159,
            ),
            144 => 
            array (
                'id' => 2646,
                'state_name' => 'Zinder',
                'country_id' => 159,
            ),
            145 => 
            array (
                'id' => 2647,
                'state_name' => 'Abia',
                'country_id' => 160,
            ),
            146 => 
            array (
                'id' => 2648,
                'state_name' => 'Abuja Federal Capital Territor',
                'country_id' => 160,
            ),
            147 => 
            array (
                'id' => 2649,
                'state_name' => 'Adamawa',
                'country_id' => 160,
            ),
            148 => 
            array (
                'id' => 2650,
                'state_name' => 'Akwa Ibom',
                'country_id' => 160,
            ),
            149 => 
            array (
                'id' => 2651,
                'state_name' => 'Anambra',
                'country_id' => 160,
            ),
            150 => 
            array (
                'id' => 2652,
                'state_name' => 'Bauchi',
                'country_id' => 160,
            ),
            151 => 
            array (
                'id' => 2653,
                'state_name' => 'Bayelsa',
                'country_id' => 160,
            ),
            152 => 
            array (
                'id' => 2654,
                'state_name' => 'Benue',
                'country_id' => 160,
            ),
            153 => 
            array (
                'id' => 2655,
                'state_name' => 'Borno',
                'country_id' => 160,
            ),
            154 => 
            array (
                'id' => 2656,
                'state_name' => 'Cross River',
                'country_id' => 160,
            ),
            155 => 
            array (
                'id' => 2657,
                'state_name' => 'Delta',
                'country_id' => 160,
            ),
            156 => 
            array (
                'id' => 2658,
                'state_name' => 'Ebonyi',
                'country_id' => 160,
            ),
            157 => 
            array (
                'id' => 2659,
                'state_name' => 'Edo',
                'country_id' => 160,
            ),
            158 => 
            array (
                'id' => 2660,
                'state_name' => 'Ekiti',
                'country_id' => 160,
            ),
            159 => 
            array (
                'id' => 2661,
                'state_name' => 'Enugu',
                'country_id' => 160,
            ),
            160 => 
            array (
                'id' => 2662,
                'state_name' => 'Gombe',
                'country_id' => 160,
            ),
            161 => 
            array (
                'id' => 2663,
                'state_name' => 'Imo',
                'country_id' => 160,
            ),
            162 => 
            array (
                'id' => 2664,
                'state_name' => 'Jigawa',
                'country_id' => 160,
            ),
            163 => 
            array (
                'id' => 2665,
                'state_name' => 'Kaduna',
                'country_id' => 160,
            ),
            164 => 
            array (
                'id' => 2666,
                'state_name' => 'Kano',
                'country_id' => 160,
            ),
            165 => 
            array (
                'id' => 2667,
                'state_name' => 'Katsina',
                'country_id' => 160,
            ),
            166 => 
            array (
                'id' => 2668,
                'state_name' => 'Kebbi',
                'country_id' => 160,
            ),
            167 => 
            array (
                'id' => 2669,
                'state_name' => 'Kogi',
                'country_id' => 160,
            ),
            168 => 
            array (
                'id' => 2670,
                'state_name' => 'Kwara',
                'country_id' => 160,
            ),
            169 => 
            array (
                'id' => 2671,
                'state_name' => 'Lagos',
                'country_id' => 160,
            ),
            170 => 
            array (
                'id' => 2672,
                'state_name' => 'Nassarawa',
                'country_id' => 160,
            ),
            171 => 
            array (
                'id' => 2673,
                'state_name' => 'Niger',
                'country_id' => 160,
            ),
            172 => 
            array (
                'id' => 2674,
                'state_name' => 'Ogun',
                'country_id' => 160,
            ),
            173 => 
            array (
                'id' => 2675,
                'state_name' => 'Ondo',
                'country_id' => 160,
            ),
            174 => 
            array (
                'id' => 2676,
                'state_name' => 'Osun',
                'country_id' => 160,
            ),
            175 => 
            array (
                'id' => 2677,
                'state_name' => 'Oyo',
                'country_id' => 160,
            ),
            176 => 
            array (
                'id' => 2678,
                'state_name' => 'Plateau',
                'country_id' => 160,
            ),
            177 => 
            array (
                'id' => 2679,
                'state_name' => 'Rivers',
                'country_id' => 160,
            ),
            178 => 
            array (
                'id' => 2680,
                'state_name' => 'Sokoto',
                'country_id' => 160,
            ),
            179 => 
            array (
                'id' => 2681,
                'state_name' => 'Taraba',
                'country_id' => 160,
            ),
            180 => 
            array (
                'id' => 2682,
                'state_name' => 'Yobe',
                'country_id' => 160,
            ),
            181 => 
            array (
                'id' => 2683,
                'state_name' => 'Zamfara',
                'country_id' => 160,
            ),
            182 => 
            array (
                'id' => 2684,
                'state_name' => 'Niue',
                'country_id' => 161,
            ),
            183 => 
            array (
                'id' => 2685,
                'state_name' => 'Norfolk Island',
                'country_id' => 162,
            ),
            184 => 
            array (
                'id' => 2686,
                'state_name' => 'Northern Islands',
                'country_id' => 163,
            ),
            185 => 
            array (
                'id' => 2687,
                'state_name' => 'Rota',
                'country_id' => 163,
            ),
            186 => 
            array (
                'id' => 2688,
                'state_name' => 'Saipan',
                'country_id' => 163,
            ),
            187 => 
            array (
                'id' => 2689,
                'state_name' => 'Tinian',
                'country_id' => 163,
            ),
            188 => 
            array (
                'id' => 2690,
                'state_name' => 'Akershus',
                'country_id' => 164,
            ),
            189 => 
            array (
                'id' => 2691,
                'state_name' => 'Aust Agder',
                'country_id' => 164,
            ),
            190 => 
            array (
                'id' => 2692,
                'state_name' => 'Bergen',
                'country_id' => 164,
            ),
            191 => 
            array (
                'id' => 2693,
                'state_name' => 'Buskerud',
                'country_id' => 164,
            ),
            192 => 
            array (
                'id' => 2694,
                'state_name' => 'Finnmark',
                'country_id' => 164,
            ),
            193 => 
            array (
                'id' => 2695,
                'state_name' => 'Hedmark',
                'country_id' => 164,
            ),
            194 => 
            array (
                'id' => 2696,
                'state_name' => 'Hordaland',
                'country_id' => 164,
            ),
            195 => 
            array (
                'id' => 2697,
                'state_name' => 'Moere og Romsdal',
                'country_id' => 164,
            ),
            196 => 
            array (
                'id' => 2698,
                'state_name' => 'Nord Trondelag',
                'country_id' => 164,
            ),
            197 => 
            array (
                'id' => 2699,
                'state_name' => 'Nordland',
                'country_id' => 164,
            ),
            198 => 
            array (
                'id' => 2700,
                'state_name' => 'Oestfold',
                'country_id' => 164,
            ),
            199 => 
            array (
                'id' => 2701,
                'state_name' => 'Oppland',
                'country_id' => 164,
            ),
            200 => 
            array (
                'id' => 2702,
                'state_name' => 'Oslo',
                'country_id' => 164,
            ),
            201 => 
            array (
                'id' => 2703,
                'state_name' => 'Rogaland',
                'country_id' => 164,
            ),
            202 => 
            array (
                'id' => 2704,
                'state_name' => 'Soer Troendelag',
                'country_id' => 164,
            ),
            203 => 
            array (
                'id' => 2705,
                'state_name' => 'Sogn og Fjordane',
                'country_id' => 164,
            ),
            204 => 
            array (
                'id' => 2706,
                'state_name' => 'Stavern',
                'country_id' => 164,
            ),
            205 => 
            array (
                'id' => 2707,
                'state_name' => 'Sykkylven',
                'country_id' => 164,
            ),
            206 => 
            array (
                'id' => 2708,
                'state_name' => 'Telemark',
                'country_id' => 164,
            ),
            207 => 
            array (
                'id' => 2709,
                'state_name' => 'Troms',
                'country_id' => 164,
            ),
            208 => 
            array (
                'id' => 2710,
                'state_name' => 'Vest Agder',
                'country_id' => 164,
            ),
            209 => 
            array (
                'id' => 2711,
                'state_name' => 'Vestfold',
                'country_id' => 164,
            ),
            210 => 
            array (
                'id' => 2712,
                'state_name' => 'ÃƒÂ˜stfold',
                'country_id' => 164,
            ),
            211 => 
            array (
                'id' => 2713,
                'state_name' => 'Al Buraimi',
                'country_id' => 165,
            ),
            212 => 
            array (
                'id' => 2714,
                'state_name' => 'Dhufar',
                'country_id' => 165,
            ),
            213 => 
            array (
                'id' => 2715,
                'state_name' => 'Masqat',
                'country_id' => 165,
            ),
            214 => 
            array (
                'id' => 2716,
                'state_name' => 'Musandam',
                'country_id' => 165,
            ),
            215 => 
            array (
                'id' => 2717,
                'state_name' => 'Rusayl',
                'country_id' => 165,
            ),
            216 => 
            array (
                'id' => 2718,
                'state_name' => 'Wadi Kabir',
                'country_id' => 165,
            ),
            217 => 
            array (
                'id' => 2719,
                'state_name' => 'ad-Dakhiliyah',
                'country_id' => 165,
            ),
            218 => 
            array (
                'id' => 2720,
                'state_name' => 'adh-Dhahirah',
                'country_id' => 165,
            ),
            219 => 
            array (
                'id' => 2721,
                'state_name' => 'al-Batinah',
                'country_id' => 165,
            ),
            220 => 
            array (
                'id' => 2722,
                'state_name' => 'ash-Sharqiyah',
                'country_id' => 165,
            ),
            221 => 
            array (
                'id' => 2723,
                'state_name' => 'Baluchistan',
                'country_id' => 166,
            ),
            222 => 
            array (
                'id' => 2724,
                'state_name' => 'Federal Capital Area',
                'country_id' => 166,
            ),
            223 => 
            array (
                'id' => 2725,
                'state_name' => 'Federally administered Tribal ',
                'country_id' => 166,
            ),
            224 => 
            array (
                'id' => 2726,
                'state_name' => 'North-West Frontier',
                'country_id' => 166,
            ),
            225 => 
            array (
                'id' => 2727,
                'state_name' => 'Northern Areas',
                'country_id' => 166,
            ),
            226 => 
            array (
                'id' => 2728,
                'state_name' => 'Punjab',
                'country_id' => 166,
            ),
            227 => 
            array (
                'id' => 2729,
                'state_name' => 'Sind',
                'country_id' => 166,
            ),
            228 => 
            array (
                'id' => 2730,
                'state_name' => 'Aimeliik',
                'country_id' => 167,
            ),
            229 => 
            array (
                'id' => 2731,
                'state_name' => 'Airai',
                'country_id' => 167,
            ),
            230 => 
            array (
                'id' => 2732,
                'state_name' => 'Angaur',
                'country_id' => 167,
            ),
            231 => 
            array (
                'id' => 2733,
                'state_name' => 'Hatobohei',
                'country_id' => 167,
            ),
            232 => 
            array (
                'id' => 2734,
                'state_name' => 'Kayangel',
                'country_id' => 167,
            ),
            233 => 
            array (
                'id' => 2735,
                'state_name' => 'Koror',
                'country_id' => 167,
            ),
            234 => 
            array (
                'id' => 2736,
                'state_name' => 'Melekeok',
                'country_id' => 167,
            ),
            235 => 
            array (
                'id' => 2737,
                'state_name' => 'Ngaraard',
                'country_id' => 167,
            ),
            236 => 
            array (
                'id' => 2738,
                'state_name' => 'Ngardmau',
                'country_id' => 167,
            ),
            237 => 
            array (
                'id' => 2739,
                'state_name' => 'Ngaremlengui',
                'country_id' => 167,
            ),
            238 => 
            array (
                'id' => 2740,
                'state_name' => 'Ngatpang',
                'country_id' => 167,
            ),
            239 => 
            array (
                'id' => 2741,
                'state_name' => 'Ngchesar',
                'country_id' => 167,
            ),
            240 => 
            array (
                'id' => 2742,
                'state_name' => 'Ngerchelong',
                'country_id' => 167,
            ),
            241 => 
            array (
                'id' => 2743,
                'state_name' => 'Ngiwal',
                'country_id' => 167,
            ),
            242 => 
            array (
                'id' => 2744,
                'state_name' => 'Peleliu',
                'country_id' => 167,
            ),
            243 => 
            array (
                'id' => 2745,
                'state_name' => 'Sonsorol',
                'country_id' => 167,
            ),
            244 => 
            array (
                'id' => 2746,
                'state_name' => 'Ariha',
                'country_id' => 168,
            ),
            245 => 
            array (
                'id' => 2747,
                'state_name' => 'Bayt Lahm',
                'country_id' => 168,
            ),
            246 => 
            array (
                'id' => 2748,
                'state_name' => 'Bethlehem',
                'country_id' => 168,
            ),
            247 => 
            array (
                'id' => 2749,
                'state_name' => 'Dayr-al-Balah',
                'country_id' => 168,
            ),
            248 => 
            array (
                'id' => 2750,
                'state_name' => 'Ghazzah',
                'country_id' => 168,
            ),
            249 => 
            array (
                'id' => 2751,
                'state_name' => 'Ghazzah ash-Shamaliyah',
                'country_id' => 168,
            ),
            250 => 
            array (
                'id' => 2752,
                'state_name' => 'Janin',
                'country_id' => 168,
            ),
            251 => 
            array (
                'id' => 2753,
                'state_name' => 'Khan Yunis',
                'country_id' => 168,
            ),
            252 => 
            array (
                'id' => 2754,
                'state_name' => 'Nabulus',
                'country_id' => 168,
            ),
            253 => 
            array (
                'id' => 2755,
                'state_name' => 'Qalqilyah',
                'country_id' => 168,
            ),
            254 => 
            array (
                'id' => 2756,
                'state_name' => 'Rafah',
                'country_id' => 168,
            ),
            255 => 
            array (
                'id' => 2757,
                'state_name' => 'Ram Allah wal-Birah',
                'country_id' => 168,
            ),
            256 => 
            array (
                'id' => 2758,
                'state_name' => 'Salfit',
                'country_id' => 168,
            ),
            257 => 
            array (
                'id' => 2759,
                'state_name' => 'Tubas',
                'country_id' => 168,
            ),
            258 => 
            array (
                'id' => 2760,
                'state_name' => 'Tulkarm',
                'country_id' => 168,
            ),
            259 => 
            array (
                'id' => 2761,
                'state_name' => 'al-Khalil',
                'country_id' => 168,
            ),
            260 => 
            array (
                'id' => 2762,
                'state_name' => 'al-Quds',
                'country_id' => 168,
            ),
            261 => 
            array (
                'id' => 2763,
                'state_name' => 'Bocas del Toro',
                'country_id' => 169,
            ),
            262 => 
            array (
                'id' => 2764,
                'state_name' => 'Chiriqui',
                'country_id' => 169,
            ),
            263 => 
            array (
                'id' => 2765,
                'state_name' => 'Cocle',
                'country_id' => 169,
            ),
            264 => 
            array (
                'id' => 2766,
                'state_name' => 'Colon',
                'country_id' => 169,
            ),
            265 => 
            array (
                'id' => 2767,
                'state_name' => 'Darien',
                'country_id' => 169,
            ),
            266 => 
            array (
                'id' => 2768,
                'state_name' => 'Embera',
                'country_id' => 169,
            ),
            267 => 
            array (
                'id' => 2769,
                'state_name' => 'Herrera',
                'country_id' => 169,
            ),
            268 => 
            array (
                'id' => 2770,
                'state_name' => 'Kuna Yala',
                'country_id' => 169,
            ),
            269 => 
            array (
                'id' => 2771,
                'state_name' => 'Los Santos',
                'country_id' => 169,
            ),
            270 => 
            array (
                'id' => 2772,
                'state_name' => 'Ngobe Bugle',
                'country_id' => 169,
            ),
            271 => 
            array (
                'id' => 2773,
                'state_name' => 'Panama',
                'country_id' => 169,
            ),
            272 => 
            array (
                'id' => 2774,
                'state_name' => 'Veraguas',
                'country_id' => 169,
            ),
            273 => 
            array (
                'id' => 2775,
                'state_name' => 'East New Britain',
                'country_id' => 170,
            ),
            274 => 
            array (
                'id' => 2776,
                'state_name' => 'East Sepik',
                'country_id' => 170,
            ),
            275 => 
            array (
                'id' => 2777,
                'state_name' => 'Eastern Highlands',
                'country_id' => 170,
            ),
            276 => 
            array (
                'id' => 2778,
                'state_name' => 'Enga',
                'country_id' => 170,
            ),
            277 => 
            array (
                'id' => 2779,
                'state_name' => 'Fly River',
                'country_id' => 170,
            ),
            278 => 
            array (
                'id' => 2780,
                'state_name' => 'Gulf',
                'country_id' => 170,
            ),
            279 => 
            array (
                'id' => 2781,
                'state_name' => 'Madang',
                'country_id' => 170,
            ),
            280 => 
            array (
                'id' => 2782,
                'state_name' => 'Manus',
                'country_id' => 170,
            ),
            281 => 
            array (
                'id' => 2783,
                'state_name' => 'Milne Bay',
                'country_id' => 170,
            ),
            282 => 
            array (
                'id' => 2784,
                'state_name' => 'Morobe',
                'country_id' => 170,
            ),
            283 => 
            array (
                'id' => 2785,
                'state_name' => 'National Capital District',
                'country_id' => 170,
            ),
            284 => 
            array (
                'id' => 2786,
                'state_name' => 'New Ireland',
                'country_id' => 170,
            ),
            285 => 
            array (
                'id' => 2787,
                'state_name' => 'North Solomons',
                'country_id' => 170,
            ),
            286 => 
            array (
                'id' => 2788,
                'state_name' => 'Oro',
                'country_id' => 170,
            ),
            287 => 
            array (
                'id' => 2789,
                'state_name' => 'Sandaun',
                'country_id' => 170,
            ),
            288 => 
            array (
                'id' => 2790,
                'state_name' => 'Simbu',
                'country_id' => 170,
            ),
            289 => 
            array (
                'id' => 2791,
                'state_name' => 'Southern Highlands',
                'country_id' => 170,
            ),
            290 => 
            array (
                'id' => 2792,
                'state_name' => 'West New Britain',
                'country_id' => 170,
            ),
            291 => 
            array (
                'id' => 2793,
                'state_name' => 'Western Highlands',
                'country_id' => 170,
            ),
            292 => 
            array (
                'id' => 2794,
                'state_name' => 'Alto Paraguay',
                'country_id' => 171,
            ),
            293 => 
            array (
                'id' => 2795,
                'state_name' => 'Alto Parana',
                'country_id' => 171,
            ),
            294 => 
            array (
                'id' => 2796,
                'state_name' => 'Amambay',
                'country_id' => 171,
            ),
            295 => 
            array (
                'id' => 2797,
                'state_name' => 'Asuncion',
                'country_id' => 171,
            ),
            296 => 
            array (
                'id' => 2798,
                'state_name' => 'Boqueron',
                'country_id' => 171,
            ),
            297 => 
            array (
                'id' => 2799,
                'state_name' => 'Caaguazu',
                'country_id' => 171,
            ),
            298 => 
            array (
                'id' => 2800,
                'state_name' => 'Caazapa',
                'country_id' => 171,
            ),
            299 => 
            array (
                'id' => 2801,
                'state_name' => 'Canendiyu',
                'country_id' => 171,
            ),
            300 => 
            array (
                'id' => 2802,
                'state_name' => 'Central',
                'country_id' => 171,
            ),
            301 => 
            array (
                'id' => 2803,
                'state_name' => 'Concepcion',
                'country_id' => 171,
            ),
            302 => 
            array (
                'id' => 2804,
                'state_name' => 'Cordillera',
                'country_id' => 171,
            ),
            303 => 
            array (
                'id' => 2805,
                'state_name' => 'Guaira',
                'country_id' => 171,
            ),
            304 => 
            array (
                'id' => 2806,
                'state_name' => 'Itapua',
                'country_id' => 171,
            ),
            305 => 
            array (
                'id' => 2807,
                'state_name' => 'Misiones',
                'country_id' => 171,
            ),
            306 => 
            array (
                'id' => 2808,
                'state_name' => 'Neembucu',
                'country_id' => 171,
            ),
            307 => 
            array (
                'id' => 2809,
                'state_name' => 'Paraguari',
                'country_id' => 171,
            ),
            308 => 
            array (
                'id' => 2810,
                'state_name' => 'Presidente Hayes',
                'country_id' => 171,
            ),
            309 => 
            array (
                'id' => 2811,
                'state_name' => 'San Pedro',
                'country_id' => 171,
            ),
            310 => 
            array (
                'id' => 2812,
                'state_name' => 'Amazonas',
                'country_id' => 172,
            ),
            311 => 
            array (
                'id' => 2813,
                'state_name' => 'Ancash',
                'country_id' => 172,
            ),
            312 => 
            array (
                'id' => 2814,
                'state_name' => 'Apurimac',
                'country_id' => 172,
            ),
            313 => 
            array (
                'id' => 2815,
                'state_name' => 'Arequipa',
                'country_id' => 172,
            ),
            314 => 
            array (
                'id' => 2816,
                'state_name' => 'Ayacucho',
                'country_id' => 172,
            ),
            315 => 
            array (
                'id' => 2817,
                'state_name' => 'Cajamarca',
                'country_id' => 172,
            ),
            316 => 
            array (
                'id' => 2818,
                'state_name' => 'Cusco',
                'country_id' => 172,
            ),
            317 => 
            array (
                'id' => 2819,
                'state_name' => 'Huancavelica',
                'country_id' => 172,
            ),
            318 => 
            array (
                'id' => 2820,
                'state_name' => 'Huanuco',
                'country_id' => 172,
            ),
            319 => 
            array (
                'id' => 2821,
                'state_name' => 'Ica',
                'country_id' => 172,
            ),
            320 => 
            array (
                'id' => 2822,
                'state_name' => 'Junin',
                'country_id' => 172,
            ),
            321 => 
            array (
                'id' => 2823,
                'state_name' => 'La Libertad',
                'country_id' => 172,
            ),
            322 => 
            array (
                'id' => 2824,
                'state_name' => 'Lambayeque',
                'country_id' => 172,
            ),
            323 => 
            array (
                'id' => 2825,
                'state_name' => 'Lima y Callao',
                'country_id' => 172,
            ),
            324 => 
            array (
                'id' => 2826,
                'state_name' => 'Loreto',
                'country_id' => 172,
            ),
            325 => 
            array (
                'id' => 2827,
                'state_name' => 'Madre de Dios',
                'country_id' => 172,
            ),
            326 => 
            array (
                'id' => 2828,
                'state_name' => 'Moquegua',
                'country_id' => 172,
            ),
            327 => 
            array (
                'id' => 2829,
                'state_name' => 'Pasco',
                'country_id' => 172,
            ),
            328 => 
            array (
                'id' => 2830,
                'state_name' => 'Piura',
                'country_id' => 172,
            ),
            329 => 
            array (
                'id' => 2831,
                'state_name' => 'Puno',
                'country_id' => 172,
            ),
            330 => 
            array (
                'id' => 2832,
                'state_name' => 'San Martin',
                'country_id' => 172,
            ),
            331 => 
            array (
                'id' => 2833,
                'state_name' => 'Tacna',
                'country_id' => 172,
            ),
            332 => 
            array (
                'id' => 2834,
                'state_name' => 'Tumbes',
                'country_id' => 172,
            ),
            333 => 
            array (
                'id' => 2835,
                'state_name' => 'Ucayali',
                'country_id' => 172,
            ),
            334 => 
            array (
                'id' => 2836,
                'state_name' => 'Batangas',
                'country_id' => 173,
            ),
            335 => 
            array (
                'id' => 2837,
                'state_name' => 'Bicol',
                'country_id' => 173,
            ),
            336 => 
            array (
                'id' => 2838,
                'state_name' => 'Bulacan',
                'country_id' => 173,
            ),
            337 => 
            array (
                'id' => 2839,
                'state_name' => 'Cagayan',
                'country_id' => 173,
            ),
            338 => 
            array (
                'id' => 2840,
                'state_name' => 'Caraga',
                'country_id' => 173,
            ),
            339 => 
            array (
                'id' => 2841,
                'state_name' => 'Central Luzon',
                'country_id' => 173,
            ),
            340 => 
            array (
                'id' => 2842,
                'state_name' => 'Central Mindanao',
                'country_id' => 173,
            ),
            341 => 
            array (
                'id' => 2843,
                'state_name' => 'Central Visayas',
                'country_id' => 173,
            ),
            342 => 
            array (
                'id' => 2844,
                'state_name' => 'Cordillera',
                'country_id' => 173,
            ),
            343 => 
            array (
                'id' => 2845,
                'state_name' => 'Davao',
                'country_id' => 173,
            ),
            344 => 
            array (
                'id' => 2846,
                'state_name' => 'Eastern Visayas',
                'country_id' => 173,
            ),
            345 => 
            array (
                'id' => 2847,
                'state_name' => 'Greater Metropolitan Area',
                'country_id' => 173,
            ),
            346 => 
            array (
                'id' => 2848,
                'state_name' => 'Ilocos',
                'country_id' => 173,
            ),
            347 => 
            array (
                'id' => 2849,
                'state_name' => 'Laguna',
                'country_id' => 173,
            ),
            348 => 
            array (
                'id' => 2850,
                'state_name' => 'Luzon',
                'country_id' => 173,
            ),
            349 => 
            array (
                'id' => 2851,
                'state_name' => 'Mactan',
                'country_id' => 173,
            ),
            350 => 
            array (
                'id' => 2852,
                'state_name' => 'Metropolitan Manila Area',
                'country_id' => 173,
            ),
            351 => 
            array (
                'id' => 2853,
                'state_name' => 'Muslim Mindanao',
                'country_id' => 173,
            ),
            352 => 
            array (
                'id' => 2854,
                'state_name' => 'Northern Mindanao',
                'country_id' => 173,
            ),
            353 => 
            array (
                'id' => 2855,
                'state_name' => 'Southern Mindanao',
                'country_id' => 173,
            ),
            354 => 
            array (
                'id' => 2856,
                'state_name' => 'Southern Tagalog',
                'country_id' => 173,
            ),
            355 => 
            array (
                'id' => 2857,
                'state_name' => 'Western Mindanao',
                'country_id' => 173,
            ),
            356 => 
            array (
                'id' => 2858,
                'state_name' => 'Western Visayas',
                'country_id' => 173,
            ),
            357 => 
            array (
                'id' => 2859,
                'state_name' => 'Pitcairn Island',
                'country_id' => 174,
            ),
            358 => 
            array (
                'id' => 2860,
                'state_name' => 'Biale Blota',
                'country_id' => 175,
            ),
            359 => 
            array (
                'id' => 2861,
                'state_name' => 'Dobroszyce',
                'country_id' => 175,
            ),
            360 => 
            array (
                'id' => 2862,
                'state_name' => 'Dolnoslaskie',
                'country_id' => 175,
            ),
            361 => 
            array (
                'id' => 2863,
                'state_name' => 'Dziekanow Lesny',
                'country_id' => 175,
            ),
            362 => 
            array (
                'id' => 2864,
                'state_name' => 'Hopowo',
                'country_id' => 175,
            ),
            363 => 
            array (
                'id' => 2865,
                'state_name' => 'Kartuzy',
                'country_id' => 175,
            ),
            364 => 
            array (
                'id' => 2866,
                'state_name' => 'Koscian',
                'country_id' => 175,
            ),
            365 => 
            array (
                'id' => 2867,
                'state_name' => 'Krakow',
                'country_id' => 175,
            ),
            366 => 
            array (
                'id' => 2868,
                'state_name' => 'Kujawsko-Pomorskie',
                'country_id' => 175,
            ),
            367 => 
            array (
                'id' => 2869,
                'state_name' => 'Lodzkie',
                'country_id' => 175,
            ),
            368 => 
            array (
                'id' => 2870,
                'state_name' => 'Lubelskie',
                'country_id' => 175,
            ),
            369 => 
            array (
                'id' => 2871,
                'state_name' => 'Lubuskie',
                'country_id' => 175,
            ),
            370 => 
            array (
                'id' => 2872,
                'state_name' => 'Malomice',
                'country_id' => 175,
            ),
            371 => 
            array (
                'id' => 2873,
                'state_name' => 'Malopolskie',
                'country_id' => 175,
            ),
            372 => 
            array (
                'id' => 2874,
                'state_name' => 'Mazowieckie',
                'country_id' => 175,
            ),
            373 => 
            array (
                'id' => 2875,
                'state_name' => 'Mirkow',
                'country_id' => 175,
            ),
            374 => 
            array (
                'id' => 2876,
                'state_name' => 'Opolskie',
                'country_id' => 175,
            ),
            375 => 
            array (
                'id' => 2877,
                'state_name' => 'Ostrowiec',
                'country_id' => 175,
            ),
            376 => 
            array (
                'id' => 2878,
                'state_name' => 'Podkarpackie',
                'country_id' => 175,
            ),
            377 => 
            array (
                'id' => 2879,
                'state_name' => 'Podlaskie',
                'country_id' => 175,
            ),
            378 => 
            array (
                'id' => 2880,
                'state_name' => 'Polska',
                'country_id' => 175,
            ),
            379 => 
            array (
                'id' => 2881,
                'state_name' => 'Pomorskie',
                'country_id' => 175,
            ),
            380 => 
            array (
                'id' => 2882,
                'state_name' => 'Poznan',
                'country_id' => 175,
            ),
            381 => 
            array (
                'id' => 2883,
                'state_name' => 'Pruszkow',
                'country_id' => 175,
            ),
            382 => 
            array (
                'id' => 2884,
                'state_name' => 'Rymanowska',
                'country_id' => 175,
            ),
            383 => 
            array (
                'id' => 2885,
                'state_name' => 'Rzeszow',
                'country_id' => 175,
            ),
            384 => 
            array (
                'id' => 2886,
                'state_name' => 'Slaskie',
                'country_id' => 175,
            ),
            385 => 
            array (
                'id' => 2887,
                'state_name' => 'Stare Pole',
                'country_id' => 175,
            ),
            386 => 
            array (
                'id' => 2888,
                'state_name' => 'Swietokrzyskie',
                'country_id' => 175,
            ),
            387 => 
            array (
                'id' => 2889,
                'state_name' => 'Warminsko-Mazurskie',
                'country_id' => 175,
            ),
            388 => 
            array (
                'id' => 2890,
                'state_name' => 'Warsaw',
                'country_id' => 175,
            ),
            389 => 
            array (
                'id' => 2891,
                'state_name' => 'Wejherowo',
                'country_id' => 175,
            ),
            390 => 
            array (
                'id' => 2892,
                'state_name' => 'Wielkopolskie',
                'country_id' => 175,
            ),
            391 => 
            array (
                'id' => 2893,
                'state_name' => 'Wroclaw',
                'country_id' => 175,
            ),
            392 => 
            array (
                'id' => 2894,
                'state_name' => 'Zachodnio-Pomorskie',
                'country_id' => 175,
            ),
            393 => 
            array (
                'id' => 2895,
                'state_name' => 'Zukowo',
                'country_id' => 175,
            ),
            394 => 
            array (
                'id' => 2896,
                'state_name' => 'Abrantes',
                'country_id' => 176,
            ),
            395 => 
            array (
                'id' => 2897,
                'state_name' => 'Acores',
                'country_id' => 176,
            ),
            396 => 
            array (
                'id' => 2898,
                'state_name' => 'Alentejo',
                'country_id' => 176,
            ),
            397 => 
            array (
                'id' => 2899,
                'state_name' => 'Algarve',
                'country_id' => 176,
            ),
            398 => 
            array (
                'id' => 2900,
                'state_name' => 'Braga',
                'country_id' => 176,
            ),
            399 => 
            array (
                'id' => 2901,
                'state_name' => 'Centro',
                'country_id' => 176,
            ),
            400 => 
            array (
                'id' => 2902,
                'state_name' => 'Distrito de Leiria',
                'country_id' => 176,
            ),
            401 => 
            array (
                'id' => 2903,
                'state_name' => 'Distrito de Viana do Castelo',
                'country_id' => 176,
            ),
            402 => 
            array (
                'id' => 2904,
                'state_name' => 'Distrito de Vila Real',
                'country_id' => 176,
            ),
            403 => 
            array (
                'id' => 2905,
                'state_name' => 'Distrito do Porto',
                'country_id' => 176,
            ),
            404 => 
            array (
                'id' => 2906,
                'state_name' => 'Lisboa e Vale do Tejo',
                'country_id' => 176,
            ),
            405 => 
            array (
                'id' => 2907,
                'state_name' => 'Madeira',
                'country_id' => 176,
            ),
            406 => 
            array (
                'id' => 2908,
                'state_name' => 'Norte',
                'country_id' => 176,
            ),
            407 => 
            array (
                'id' => 2909,
                'state_name' => 'Paivas',
                'country_id' => 176,
            ),
            408 => 
            array (
                'id' => 2910,
                'state_name' => 'Arecibo',
                'country_id' => 177,
            ),
            409 => 
            array (
                'id' => 2911,
                'state_name' => 'Bayamon',
                'country_id' => 177,
            ),
            410 => 
            array (
                'id' => 2912,
                'state_name' => 'Carolina',
                'country_id' => 177,
            ),
            411 => 
            array (
                'id' => 2913,
                'state_name' => 'Florida',
                'country_id' => 177,
            ),
            412 => 
            array (
                'id' => 2914,
                'state_name' => 'Guayama',
                'country_id' => 177,
            ),
            413 => 
            array (
                'id' => 2915,
                'state_name' => 'Humacao',
                'country_id' => 177,
            ),
            414 => 
            array (
                'id' => 2916,
                'state_name' => 'Mayaguez-Aguadilla',
                'country_id' => 177,
            ),
            415 => 
            array (
                'id' => 2917,
                'state_name' => 'Ponce',
                'country_id' => 177,
            ),
            416 => 
            array (
                'id' => 2918,
                'state_name' => 'Salinas',
                'country_id' => 177,
            ),
            417 => 
            array (
                'id' => 2919,
                'state_name' => 'San Juan',
                'country_id' => 177,
            ),
            418 => 
            array (
                'id' => 2920,
                'state_name' => 'Doha',
                'country_id' => 178,
            ),
            419 => 
            array (
                'id' => 2921,
                'state_name' => 'Jarian-al-Batnah',
                'country_id' => 178,
            ),
            420 => 
            array (
                'id' => 2922,
                'state_name' => 'Umm Salal',
                'country_id' => 178,
            ),
            421 => 
            array (
                'id' => 2923,
                'state_name' => 'ad-Dawhah',
                'country_id' => 178,
            ),
            422 => 
            array (
                'id' => 2924,
                'state_name' => 'al-Ghuwayriyah',
                'country_id' => 178,
            ),
            423 => 
            array (
                'id' => 2925,
                'state_name' => 'al-Jumayliyah',
                'country_id' => 178,
            ),
            424 => 
            array (
                'id' => 2926,
                'state_name' => 'al-Khawr',
                'country_id' => 178,
            ),
            425 => 
            array (
                'id' => 2927,
                'state_name' => 'al-Wakrah',
                'country_id' => 178,
            ),
            426 => 
            array (
                'id' => 2928,
                'state_name' => 'ar-Rayyan',
                'country_id' => 178,
            ),
            427 => 
            array (
                'id' => 2929,
                'state_name' => 'ash-Shamal',
                'country_id' => 178,
            ),
            428 => 
            array (
                'id' => 2930,
                'state_name' => 'Saint-Benoit',
                'country_id' => 179,
            ),
            429 => 
            array (
                'id' => 2931,
                'state_name' => 'Saint-Denis',
                'country_id' => 179,
            ),
            430 => 
            array (
                'id' => 2932,
                'state_name' => 'Saint-Paul',
                'country_id' => 179,
            ),
            431 => 
            array (
                'id' => 2933,
                'state_name' => 'Saint-Pierre',
                'country_id' => 179,
            ),
            432 => 
            array (
                'id' => 2934,
                'state_name' => 'Alba',
                'country_id' => 180,
            ),
            433 => 
            array (
                'id' => 2935,
                'state_name' => 'Arad',
                'country_id' => 180,
            ),
            434 => 
            array (
                'id' => 2936,
                'state_name' => 'Arges',
                'country_id' => 180,
            ),
            435 => 
            array (
                'id' => 2937,
                'state_name' => 'Bacau',
                'country_id' => 180,
            ),
            436 => 
            array (
                'id' => 2938,
                'state_name' => 'Bihor',
                'country_id' => 180,
            ),
            437 => 
            array (
                'id' => 2939,
                'state_name' => 'Bistrita-Nasaud',
                'country_id' => 180,
            ),
            438 => 
            array (
                'id' => 2940,
                'state_name' => 'Botosani',
                'country_id' => 180,
            ),
            439 => 
            array (
                'id' => 2941,
                'state_name' => 'Braila',
                'country_id' => 180,
            ),
            440 => 
            array (
                'id' => 2942,
                'state_name' => 'Brasov',
                'country_id' => 180,
            ),
            441 => 
            array (
                'id' => 2943,
                'state_name' => 'Bucuresti',
                'country_id' => 180,
            ),
            442 => 
            array (
                'id' => 2944,
                'state_name' => 'Buzau',
                'country_id' => 180,
            ),
            443 => 
            array (
                'id' => 2945,
                'state_name' => 'Calarasi',
                'country_id' => 180,
            ),
            444 => 
            array (
                'id' => 2946,
                'state_name' => 'Caras-Severin',
                'country_id' => 180,
            ),
            445 => 
            array (
                'id' => 2947,
                'state_name' => 'Cluj',
                'country_id' => 180,
            ),
            446 => 
            array (
                'id' => 2948,
                'state_name' => 'Constanta',
                'country_id' => 180,
            ),
            447 => 
            array (
                'id' => 2949,
                'state_name' => 'Covasna',
                'country_id' => 180,
            ),
            448 => 
            array (
                'id' => 2950,
                'state_name' => 'Dambovita',
                'country_id' => 180,
            ),
            449 => 
            array (
                'id' => 2951,
                'state_name' => 'Dolj',
                'country_id' => 180,
            ),
            450 => 
            array (
                'id' => 2952,
                'state_name' => 'Galati',
                'country_id' => 180,
            ),
            451 => 
            array (
                'id' => 2953,
                'state_name' => 'Giurgiu',
                'country_id' => 180,
            ),
            452 => 
            array (
                'id' => 2954,
                'state_name' => 'Gorj',
                'country_id' => 180,
            ),
            453 => 
            array (
                'id' => 2955,
                'state_name' => 'Harghita',
                'country_id' => 180,
            ),
            454 => 
            array (
                'id' => 2956,
                'state_name' => 'Hunedoara',
                'country_id' => 180,
            ),
            455 => 
            array (
                'id' => 2957,
                'state_name' => 'Ialomita',
                'country_id' => 180,
            ),
            456 => 
            array (
                'id' => 2958,
                'state_name' => 'Iasi',
                'country_id' => 180,
            ),
            457 => 
            array (
                'id' => 2959,
                'state_name' => 'Ilfov',
                'country_id' => 180,
            ),
            458 => 
            array (
                'id' => 2960,
                'state_name' => 'Maramures',
                'country_id' => 180,
            ),
            459 => 
            array (
                'id' => 2961,
                'state_name' => 'Mehedinti',
                'country_id' => 180,
            ),
            460 => 
            array (
                'id' => 2962,
                'state_name' => 'Mures',
                'country_id' => 180,
            ),
            461 => 
            array (
                'id' => 2963,
                'state_name' => 'Neamt',
                'country_id' => 180,
            ),
            462 => 
            array (
                'id' => 2964,
                'state_name' => 'Olt',
                'country_id' => 180,
            ),
            463 => 
            array (
                'id' => 2965,
                'state_name' => 'Prahova',
                'country_id' => 180,
            ),
            464 => 
            array (
                'id' => 2966,
                'state_name' => 'Salaj',
                'country_id' => 180,
            ),
            465 => 
            array (
                'id' => 2967,
                'state_name' => 'Satu Mare',
                'country_id' => 180,
            ),
            466 => 
            array (
                'id' => 2968,
                'state_name' => 'Sibiu',
                'country_id' => 180,
            ),
            467 => 
            array (
                'id' => 2969,
                'state_name' => 'Sondelor',
                'country_id' => 180,
            ),
            468 => 
            array (
                'id' => 2970,
                'state_name' => 'Suceava',
                'country_id' => 180,
            ),
            469 => 
            array (
                'id' => 2971,
                'state_name' => 'Teleorman',
                'country_id' => 180,
            ),
            470 => 
            array (
                'id' => 2972,
                'state_name' => 'Timis',
                'country_id' => 180,
            ),
            471 => 
            array (
                'id' => 2973,
                'state_name' => 'Tulcea',
                'country_id' => 180,
            ),
            472 => 
            array (
                'id' => 2974,
                'state_name' => 'Valcea',
                'country_id' => 180,
            ),
            473 => 
            array (
                'id' => 2975,
                'state_name' => 'Vaslui',
                'country_id' => 180,
            ),
            474 => 
            array (
                'id' => 2976,
                'state_name' => 'Vrancea',
                'country_id' => 180,
            ),
            475 => 
            array (
                'id' => 2977,
                'state_name' => 'Adygeja',
                'country_id' => 181,
            ),
            476 => 
            array (
                'id' => 2978,
                'state_name' => 'Aga',
                'country_id' => 181,
            ),
            477 => 
            array (
                'id' => 2979,
                'state_name' => 'Alanija',
                'country_id' => 181,
            ),
            478 => 
            array (
                'id' => 2980,
                'state_name' => 'Altaj',
                'country_id' => 181,
            ),
            479 => 
            array (
                'id' => 2981,
                'state_name' => 'Amur',
                'country_id' => 181,
            ),
            480 => 
            array (
                'id' => 2982,
                'state_name' => 'Arhangelsk',
                'country_id' => 181,
            ),
            481 => 
            array (
                'id' => 2983,
                'state_name' => 'Astrahan',
                'country_id' => 181,
            ),
            482 => 
            array (
                'id' => 2984,
                'state_name' => 'Bashkortostan',
                'country_id' => 181,
            ),
            483 => 
            array (
                'id' => 2985,
                'state_name' => 'Belgorod',
                'country_id' => 181,
            ),
            484 => 
            array (
                'id' => 2986,
                'state_name' => 'Brjansk',
                'country_id' => 181,
            ),
            485 => 
            array (
                'id' => 2987,
                'state_name' => 'Burjatija',
                'country_id' => 181,
            ),
            486 => 
            array (
                'id' => 2988,
                'state_name' => 'Chechenija',
                'country_id' => 181,
            ),
            487 => 
            array (
                'id' => 2989,
                'state_name' => 'Cheljabinsk',
                'country_id' => 181,
            ),
            488 => 
            array (
                'id' => 2990,
                'state_name' => 'Chita',
                'country_id' => 181,
            ),
            489 => 
            array (
                'id' => 2991,
                'state_name' => 'Chukotka',
                'country_id' => 181,
            ),
            490 => 
            array (
                'id' => 2992,
                'state_name' => 'Chuvashija',
                'country_id' => 181,
            ),
            491 => 
            array (
                'id' => 2993,
                'state_name' => 'Dagestan',
                'country_id' => 181,
            ),
            492 => 
            array (
                'id' => 2994,
                'state_name' => 'Evenkija',
                'country_id' => 181,
            ),
            493 => 
            array (
                'id' => 2995,
                'state_name' => 'Gorno-Altaj',
                'country_id' => 181,
            ),
            494 => 
            array (
                'id' => 2996,
                'state_name' => 'Habarovsk',
                'country_id' => 181,
            ),
            495 => 
            array (
                'id' => 2997,
                'state_name' => 'Hakasija',
                'country_id' => 181,
            ),
            496 => 
            array (
                'id' => 2998,
                'state_name' => 'Hanty-Mansija',
                'country_id' => 181,
            ),
            497 => 
            array (
                'id' => 2999,
                'state_name' => 'Ingusetija',
                'country_id' => 181,
            ),
            498 => 
            array (
                'id' => 3000,
                'state_name' => 'Irkutsk',
                'country_id' => 181,
            ),
            499 => 
            array (
                'id' => 3001,
                'state_name' => 'Ivanovo',
                'country_id' => 181,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 3002,
                'state_name' => 'Jamalo-Nenets',
                'country_id' => 181,
            ),
            1 => 
            array (
                'id' => 3003,
                'state_name' => 'Jaroslavl',
                'country_id' => 181,
            ),
            2 => 
            array (
                'id' => 3004,
                'state_name' => 'Jevrej',
                'country_id' => 181,
            ),
            3 => 
            array (
                'id' => 3005,
                'state_name' => 'Kabardino-Balkarija',
                'country_id' => 181,
            ),
            4 => 
            array (
                'id' => 3006,
                'state_name' => 'Kaliningrad',
                'country_id' => 181,
            ),
            5 => 
            array (
                'id' => 3007,
                'state_name' => 'Kalmykija',
                'country_id' => 181,
            ),
            6 => 
            array (
                'id' => 3008,
                'state_name' => 'Kaluga',
                'country_id' => 181,
            ),
            7 => 
            array (
                'id' => 3009,
                'state_name' => 'Kamchatka',
                'country_id' => 181,
            ),
            8 => 
            array (
                'id' => 3010,
                'state_name' => 'Karachaj-Cherkessija',
                'country_id' => 181,
            ),
            9 => 
            array (
                'id' => 3011,
                'state_name' => 'Karelija',
                'country_id' => 181,
            ),
            10 => 
            array (
                'id' => 3012,
                'state_name' => 'Kemerovo',
                'country_id' => 181,
            ),
            11 => 
            array (
                'id' => 3013,
                'state_name' => 'Khabarovskiy Kray',
                'country_id' => 181,
            ),
            12 => 
            array (
                'id' => 3014,
                'state_name' => 'Kirov',
                'country_id' => 181,
            ),
            13 => 
            array (
                'id' => 3015,
                'state_name' => 'Komi',
                'country_id' => 181,
            ),
            14 => 
            array (
                'id' => 3016,
                'state_name' => 'Komi-Permjakija',
                'country_id' => 181,
            ),
            15 => 
            array (
                'id' => 3017,
                'state_name' => 'Korjakija',
                'country_id' => 181,
            ),
            16 => 
            array (
                'id' => 3018,
                'state_name' => 'Kostroma',
                'country_id' => 181,
            ),
            17 => 
            array (
                'id' => 3019,
                'state_name' => 'Krasnodar',
                'country_id' => 181,
            ),
            18 => 
            array (
                'id' => 3020,
                'state_name' => 'Krasnojarsk',
                'country_id' => 181,
            ),
            19 => 
            array (
                'id' => 3021,
                'state_name' => 'Krasnoyarskiy Kray',
                'country_id' => 181,
            ),
            20 => 
            array (
                'id' => 3022,
                'state_name' => 'Kurgan',
                'country_id' => 181,
            ),
            21 => 
            array (
                'id' => 3023,
                'state_name' => 'Kursk',
                'country_id' => 181,
            ),
            22 => 
            array (
                'id' => 3024,
                'state_name' => 'Leningrad',
                'country_id' => 181,
            ),
            23 => 
            array (
                'id' => 3025,
                'state_name' => 'Lipeck',
                'country_id' => 181,
            ),
            24 => 
            array (
                'id' => 3026,
                'state_name' => 'Magadan',
                'country_id' => 181,
            ),
            25 => 
            array (
                'id' => 3027,
                'state_name' => 'Marij El',
                'country_id' => 181,
            ),
            26 => 
            array (
                'id' => 3028,
                'state_name' => 'Mordovija',
                'country_id' => 181,
            ),
            27 => 
            array (
                'id' => 3029,
                'state_name' => 'Moscow',
                'country_id' => 181,
            ),
            28 => 
            array (
                'id' => 3030,
                'state_name' => 'Moskovskaja Oblast',
                'country_id' => 181,
            ),
            29 => 
            array (
                'id' => 3031,
                'state_name' => 'Moskovskaya Oblast',
                'country_id' => 181,
            ),
            30 => 
            array (
                'id' => 3032,
                'state_name' => 'Moskva',
                'country_id' => 181,
            ),
            31 => 
            array (
                'id' => 3033,
                'state_name' => 'Murmansk',
                'country_id' => 181,
            ),
            32 => 
            array (
                'id' => 3034,
                'state_name' => 'Nenets',
                'country_id' => 181,
            ),
            33 => 
            array (
                'id' => 3035,
                'state_name' => 'Nizhnij Novgorod',
                'country_id' => 181,
            ),
            34 => 
            array (
                'id' => 3036,
                'state_name' => 'Novgorod',
                'country_id' => 181,
            ),
            35 => 
            array (
                'id' => 3037,
                'state_name' => 'Novokusnezk',
                'country_id' => 181,
            ),
            36 => 
            array (
                'id' => 3038,
                'state_name' => 'Novosibirsk',
                'country_id' => 181,
            ),
            37 => 
            array (
                'id' => 3039,
                'state_name' => 'Omsk',
                'country_id' => 181,
            ),
            38 => 
            array (
                'id' => 3040,
                'state_name' => 'Orenburg',
                'country_id' => 181,
            ),
            39 => 
            array (
                'id' => 3041,
                'state_name' => 'Orjol',
                'country_id' => 181,
            ),
            40 => 
            array (
                'id' => 3042,
                'state_name' => 'Penza',
                'country_id' => 181,
            ),
            41 => 
            array (
                'id' => 3043,
                'state_name' => 'Perm',
                'country_id' => 181,
            ),
            42 => 
            array (
                'id' => 3044,
                'state_name' => 'Primorje',
                'country_id' => 181,
            ),
            43 => 
            array (
                'id' => 3045,
                'state_name' => 'Pskov',
                'country_id' => 181,
            ),
            44 => 
            array (
                'id' => 3046,
                'state_name' => 'Pskovskaya Oblast',
                'country_id' => 181,
            ),
            45 => 
            array (
                'id' => 3047,
                'state_name' => 'Rjazan',
                'country_id' => 181,
            ),
            46 => 
            array (
                'id' => 3048,
                'state_name' => 'Rostov',
                'country_id' => 181,
            ),
            47 => 
            array (
                'id' => 3049,
                'state_name' => 'Saha',
                'country_id' => 181,
            ),
            48 => 
            array (
                'id' => 3050,
                'state_name' => 'Sahalin',
                'country_id' => 181,
            ),
            49 => 
            array (
                'id' => 3051,
                'state_name' => 'Samara',
                'country_id' => 181,
            ),
            50 => 
            array (
                'id' => 3052,
                'state_name' => 'Samarskaya',
                'country_id' => 181,
            ),
            51 => 
            array (
                'id' => 3053,
                'state_name' => 'Sankt-Peterburg',
                'country_id' => 181,
            ),
            52 => 
            array (
                'id' => 3054,
                'state_name' => 'Saratov',
                'country_id' => 181,
            ),
            53 => 
            array (
                'id' => 3055,
                'state_name' => 'Smolensk',
                'country_id' => 181,
            ),
            54 => 
            array (
                'id' => 3056,
                'state_name' => 'Stavropol',
                'country_id' => 181,
            ),
            55 => 
            array (
                'id' => 3057,
                'state_name' => 'Sverdlovsk',
                'country_id' => 181,
            ),
            56 => 
            array (
                'id' => 3058,
                'state_name' => 'Tajmyrija',
                'country_id' => 181,
            ),
            57 => 
            array (
                'id' => 3059,
                'state_name' => 'Tambov',
                'country_id' => 181,
            ),
            58 => 
            array (
                'id' => 3060,
                'state_name' => 'Tatarstan',
                'country_id' => 181,
            ),
            59 => 
            array (
                'id' => 3061,
                'state_name' => 'Tjumen',
                'country_id' => 181,
            ),
            60 => 
            array (
                'id' => 3062,
                'state_name' => 'Tomsk',
                'country_id' => 181,
            ),
            61 => 
            array (
                'id' => 3063,
                'state_name' => 'Tula',
                'country_id' => 181,
            ),
            62 => 
            array (
                'id' => 3064,
                'state_name' => 'Tver',
                'country_id' => 181,
            ),
            63 => 
            array (
                'id' => 3065,
                'state_name' => 'Tyva',
                'country_id' => 181,
            ),
            64 => 
            array (
                'id' => 3066,
                'state_name' => 'Udmurtija',
                'country_id' => 181,
            ),
            65 => 
            array (
                'id' => 3067,
                'state_name' => 'Uljanovsk',
                'country_id' => 181,
            ),
            66 => 
            array (
                'id' => 3068,
                'state_name' => 'Ulyanovskaya Oblast',
                'country_id' => 181,
            ),
            67 => 
            array (
                'id' => 3069,
                'state_name' => 'Ust-Orda',
                'country_id' => 181,
            ),
            68 => 
            array (
                'id' => 3070,
                'state_name' => 'Vladimir',
                'country_id' => 181,
            ),
            69 => 
            array (
                'id' => 3071,
                'state_name' => 'Volgograd',
                'country_id' => 181,
            ),
            70 => 
            array (
                'id' => 3072,
                'state_name' => 'Vologda',
                'country_id' => 181,
            ),
            71 => 
            array (
                'id' => 3073,
                'state_name' => 'Voronezh',
                'country_id' => 181,
            ),
            72 => 
            array (
                'id' => 3074,
                'state_name' => 'Butare',
                'country_id' => 182,
            ),
            73 => 
            array (
                'id' => 3075,
                'state_name' => 'Byumba',
                'country_id' => 182,
            ),
            74 => 
            array (
                'id' => 3076,
                'state_name' => 'Cyangugu',
                'country_id' => 182,
            ),
            75 => 
            array (
                'id' => 3077,
                'state_name' => 'Gikongoro',
                'country_id' => 182,
            ),
            76 => 
            array (
                'id' => 3078,
                'state_name' => 'Gisenyi',
                'country_id' => 182,
            ),
            77 => 
            array (
                'id' => 3079,
                'state_name' => 'Gitarama',
                'country_id' => 182,
            ),
            78 => 
            array (
                'id' => 3080,
                'state_name' => 'Kibungo',
                'country_id' => 182,
            ),
            79 => 
            array (
                'id' => 3081,
                'state_name' => 'Kibuye',
                'country_id' => 182,
            ),
            80 => 
            array (
                'id' => 3082,
                'state_name' => 'Kigali-ngali',
                'country_id' => 182,
            ),
            81 => 
            array (
                'id' => 3083,
                'state_name' => 'Ruhengeri',
                'country_id' => 182,
            ),
            82 => 
            array (
                'id' => 3084,
                'state_name' => 'Ascension',
                'country_id' => 183,
            ),
            83 => 
            array (
                'id' => 3085,
                'state_name' => 'Gough Island',
                'country_id' => 183,
            ),
            84 => 
            array (
                'id' => 3086,
                'state_name' => 'Saint Helena',
                'country_id' => 183,
            ),
            85 => 
            array (
                'id' => 3087,
                'state_name' => 'Tristan da Cunha',
                'country_id' => 183,
            ),
            86 => 
            array (
                'id' => 3088,
                'state_name' => 'Christ Church Nichola Town',
                'country_id' => 184,
            ),
            87 => 
            array (
                'id' => 3089,
                'state_name' => 'Saint Anne Sandy Point',
                'country_id' => 184,
            ),
            88 => 
            array (
                'id' => 3090,
                'state_name' => 'Saint George Basseterre',
                'country_id' => 184,
            ),
            89 => 
            array (
                'id' => 3091,
                'state_name' => 'Saint George Gingerland',
                'country_id' => 184,
            ),
            90 => 
            array (
                'id' => 3092,
                'state_name' => 'Saint James Windward',
                'country_id' => 184,
            ),
            91 => 
            array (
                'id' => 3093,
                'state_name' => 'Saint John Capesterre',
                'country_id' => 184,
            ),
            92 => 
            array (
                'id' => 3094,
                'state_name' => 'Saint John Figtree',
                'country_id' => 184,
            ),
            93 => 
            array (
                'id' => 3095,
                'state_name' => 'Saint Mary Cayon',
                'country_id' => 184,
            ),
            94 => 
            array (
                'id' => 3096,
                'state_name' => 'Saint Paul Capesterre',
                'country_id' => 184,
            ),
            95 => 
            array (
                'id' => 3097,
                'state_name' => 'Saint Paul Charlestown',
                'country_id' => 184,
            ),
            96 => 
            array (
                'id' => 3098,
                'state_name' => 'Saint Peter Basseterre',
                'country_id' => 184,
            ),
            97 => 
            array (
                'id' => 3099,
                'state_name' => 'Saint Thomas Lowland',
                'country_id' => 184,
            ),
            98 => 
            array (
                'id' => 3100,
                'state_name' => 'Saint Thomas Middle Island',
                'country_id' => 184,
            ),
            99 => 
            array (
                'id' => 3101,
                'state_name' => 'Trinity Palmetto Point',
                'country_id' => 184,
            ),
            100 => 
            array (
                'id' => 3102,
                'state_name' => 'Anse-la-Raye',
                'country_id' => 185,
            ),
            101 => 
            array (
                'id' => 3103,
                'state_name' => 'Canaries',
                'country_id' => 185,
            ),
            102 => 
            array (
                'id' => 3104,
                'state_name' => 'Castries',
                'country_id' => 185,
            ),
            103 => 
            array (
                'id' => 3105,
                'state_name' => 'Choiseul',
                'country_id' => 185,
            ),
            104 => 
            array (
                'id' => 3106,
                'state_name' => 'Dennery',
                'country_id' => 185,
            ),
            105 => 
            array (
                'id' => 3107,
                'state_name' => 'Gros Inlet',
                'country_id' => 185,
            ),
            106 => 
            array (
                'id' => 3108,
                'state_name' => 'Laborie',
                'country_id' => 185,
            ),
            107 => 
            array (
                'id' => 3109,
                'state_name' => 'Micoud',
                'country_id' => 185,
            ),
            108 => 
            array (
                'id' => 3110,
                'state_name' => 'Soufriere',
                'country_id' => 185,
            ),
            109 => 
            array (
                'id' => 3111,
                'state_name' => 'Vieux Fort',
                'country_id' => 185,
            ),
            110 => 
            array (
                'id' => 3112,
                'state_name' => 'Miquelon-Langlade',
                'country_id' => 186,
            ),
            111 => 
            array (
                'id' => 3113,
                'state_name' => 'Saint-Pierre',
                'country_id' => 186,
            ),
            112 => 
            array (
                'id' => 3114,
                'state_name' => 'Charlotte',
                'country_id' => 187,
            ),
            113 => 
            array (
                'id' => 3115,
                'state_name' => 'Grenadines',
                'country_id' => 187,
            ),
            114 => 
            array (
                'id' => 3116,
                'state_name' => 'Saint Andrew',
                'country_id' => 187,
            ),
            115 => 
            array (
                'id' => 3117,
                'state_name' => 'Saint David',
                'country_id' => 187,
            ),
            116 => 
            array (
                'id' => 3118,
                'state_name' => 'Saint George',
                'country_id' => 187,
            ),
            117 => 
            array (
                'id' => 3119,
                'state_name' => 'Saint Patrick',
                'country_id' => 187,
            ),
            118 => 
            array (
                'id' => 3120,
                'state_name' => 'A\'ana',
                'country_id' => 188,
            ),
            119 => 
            array (
                'id' => 3121,
                'state_name' => 'Aiga-i-le-Tai',
                'country_id' => 188,
            ),
            120 => 
            array (
                'id' => 3122,
                'state_name' => 'Atua',
                'country_id' => 188,
            ),
            121 => 
            array (
                'id' => 3123,
                'state_name' => 'Fa\'asaleleaga',
                'country_id' => 188,
            ),
            122 => 
            array (
                'id' => 3124,
                'state_name' => 'Gaga\'emauga',
                'country_id' => 188,
            ),
            123 => 
            array (
                'id' => 3125,
                'state_name' => 'Gagaifomauga',
                'country_id' => 188,
            ),
            124 => 
            array (
                'id' => 3126,
                'state_name' => 'Palauli',
                'country_id' => 188,
            ),
            125 => 
            array (
                'id' => 3127,
                'state_name' => 'Satupa\'itea',
                'country_id' => 188,
            ),
            126 => 
            array (
                'id' => 3128,
                'state_name' => 'Tuamasaga',
                'country_id' => 188,
            ),
            127 => 
            array (
                'id' => 3129,
                'state_name' => 'Va\'a-o-Fonoti',
                'country_id' => 188,
            ),
            128 => 
            array (
                'id' => 3130,
                'state_name' => 'Vaisigano',
                'country_id' => 188,
            ),
            129 => 
            array (
                'id' => 3131,
                'state_name' => 'Acquaviva',
                'country_id' => 189,
            ),
            130 => 
            array (
                'id' => 3132,
                'state_name' => 'Borgo Maggiore',
                'country_id' => 189,
            ),
            131 => 
            array (
                'id' => 3133,
                'state_name' => 'Chiesanuova',
                'country_id' => 189,
            ),
            132 => 
            array (
                'id' => 3134,
                'state_name' => 'Domagnano',
                'country_id' => 189,
            ),
            133 => 
            array (
                'id' => 3135,
                'state_name' => 'Faetano',
                'country_id' => 189,
            ),
            134 => 
            array (
                'id' => 3136,
                'state_name' => 'Fiorentino',
                'country_id' => 189,
            ),
            135 => 
            array (
                'id' => 3137,
                'state_name' => 'Montegiardino',
                'country_id' => 189,
            ),
            136 => 
            array (
                'id' => 3138,
                'state_name' => 'San Marino',
                'country_id' => 189,
            ),
            137 => 
            array (
                'id' => 3139,
                'state_name' => 'Serravalle',
                'country_id' => 189,
            ),
            138 => 
            array (
                'id' => 3140,
                'state_name' => 'Agua Grande',
                'country_id' => 190,
            ),
            139 => 
            array (
                'id' => 3141,
                'state_name' => 'Cantagalo',
                'country_id' => 190,
            ),
            140 => 
            array (
                'id' => 3142,
                'state_name' => 'Lemba',
                'country_id' => 190,
            ),
            141 => 
            array (
                'id' => 3143,
                'state_name' => 'Lobata',
                'country_id' => 190,
            ),
            142 => 
            array (
                'id' => 3144,
                'state_name' => 'Me-Zochi',
                'country_id' => 190,
            ),
            143 => 
            array (
                'id' => 3145,
                'state_name' => 'Pague',
                'country_id' => 190,
            ),
            144 => 
            array (
                'id' => 3146,
                'state_name' => 'Al Khobar',
                'country_id' => 191,
            ),
            145 => 
            array (
                'id' => 3147,
                'state_name' => 'Aseer',
                'country_id' => 191,
            ),
            146 => 
            array (
                'id' => 3148,
                'state_name' => 'Ash Sharqiyah',
                'country_id' => 191,
            ),
            147 => 
            array (
                'id' => 3149,
                'state_name' => 'Asir',
                'country_id' => 191,
            ),
            148 => 
            array (
                'id' => 3150,
                'state_name' => 'Central Province',
                'country_id' => 191,
            ),
            149 => 
            array (
                'id' => 3151,
                'state_name' => 'Eastern Province',
                'country_id' => 191,
            ),
            150 => 
            array (
                'id' => 3152,
                'state_name' => 'Ha\'il',
                'country_id' => 191,
            ),
            151 => 
            array (
                'id' => 3153,
                'state_name' => 'Jawf',
                'country_id' => 191,
            ),
            152 => 
            array (
                'id' => 3154,
                'state_name' => 'Jizan',
                'country_id' => 191,
            ),
            153 => 
            array (
                'id' => 3155,
                'state_name' => 'Makkah',
                'country_id' => 191,
            ),
            154 => 
            array (
                'id' => 3156,
                'state_name' => 'Najran',
                'country_id' => 191,
            ),
            155 => 
            array (
                'id' => 3157,
                'state_name' => 'Qasim',
                'country_id' => 191,
            ),
            156 => 
            array (
                'id' => 3158,
                'state_name' => 'Tabuk',
                'country_id' => 191,
            ),
            157 => 
            array (
                'id' => 3159,
                'state_name' => 'Western Province',
                'country_id' => 191,
            ),
            158 => 
            array (
                'id' => 3160,
                'state_name' => 'al-Bahah',
                'country_id' => 191,
            ),
            159 => 
            array (
                'id' => 3161,
                'state_name' => 'al-Hudud-ash-Shamaliyah',
                'country_id' => 191,
            ),
            160 => 
            array (
                'id' => 3162,
                'state_name' => 'al-Madinah',
                'country_id' => 191,
            ),
            161 => 
            array (
                'id' => 3163,
                'state_name' => 'ar-Riyad',
                'country_id' => 191,
            ),
            162 => 
            array (
                'id' => 3164,
                'state_name' => 'Dakar',
                'country_id' => 192,
            ),
            163 => 
            array (
                'id' => 3165,
                'state_name' => 'Diourbel',
                'country_id' => 192,
            ),
            164 => 
            array (
                'id' => 3166,
                'state_name' => 'Fatick',
                'country_id' => 192,
            ),
            165 => 
            array (
                'id' => 3167,
                'state_name' => 'Kaolack',
                'country_id' => 192,
            ),
            166 => 
            array (
                'id' => 3168,
                'state_name' => 'Kolda',
                'country_id' => 192,
            ),
            167 => 
            array (
                'id' => 3169,
                'state_name' => 'Louga',
                'country_id' => 192,
            ),
            168 => 
            array (
                'id' => 3170,
                'state_name' => 'Saint-Louis',
                'country_id' => 192,
            ),
            169 => 
            array (
                'id' => 3171,
                'state_name' => 'Tambacounda',
                'country_id' => 192,
            ),
            170 => 
            array (
                'id' => 3172,
                'state_name' => 'Thies',
                'country_id' => 192,
            ),
            171 => 
            array (
                'id' => 3173,
                'state_name' => 'Ziguinchor',
                'country_id' => 192,
            ),
            172 => 
            array (
                'id' => 3174,
                'state_name' => 'Central Serbia',
                'country_id' => 193,
            ),
            173 => 
            array (
                'id' => 3175,
                'state_name' => 'Kosovo and Metohija',
                'country_id' => 193,
            ),
            174 => 
            array (
                'id' => 3176,
                'state_name' => 'Vojvodina',
                'country_id' => 193,
            ),
            175 => 
            array (
                'id' => 3177,
                'state_name' => 'Anse Boileau',
                'country_id' => 194,
            ),
            176 => 
            array (
                'id' => 3178,
                'state_name' => 'Anse Royale',
                'country_id' => 194,
            ),
            177 => 
            array (
                'id' => 3179,
                'state_name' => 'Cascade',
                'country_id' => 194,
            ),
            178 => 
            array (
                'id' => 3180,
                'state_name' => 'Takamaka',
                'country_id' => 194,
            ),
            179 => 
            array (
                'id' => 3181,
                'state_name' => 'Victoria',
                'country_id' => 194,
            ),
            180 => 
            array (
                'id' => 3182,
                'state_name' => 'Eastern',
                'country_id' => 195,
            ),
            181 => 
            array (
                'id' => 3183,
                'state_name' => 'Northern',
                'country_id' => 195,
            ),
            182 => 
            array (
                'id' => 3184,
                'state_name' => 'Southern',
                'country_id' => 195,
            ),
            183 => 
            array (
                'id' => 3185,
                'state_name' => 'Western',
                'country_id' => 195,
            ),
            184 => 
            array (
                'id' => 3186,
                'state_name' => 'Singapore',
                'country_id' => 196,
            ),
            185 => 
            array (
                'id' => 3187,
                'state_name' => 'Banskobystricky',
                'country_id' => 197,
            ),
            186 => 
            array (
                'id' => 3188,
                'state_name' => 'Bratislavsky',
                'country_id' => 197,
            ),
            187 => 
            array (
                'id' => 3189,
                'state_name' => 'Kosicky',
                'country_id' => 197,
            ),
            188 => 
            array (
                'id' => 3190,
                'state_name' => 'Nitriansky',
                'country_id' => 197,
            ),
            189 => 
            array (
                'id' => 3191,
                'state_name' => 'Presovsky',
                'country_id' => 197,
            ),
            190 => 
            array (
                'id' => 3192,
                'state_name' => 'Trenciansky',
                'country_id' => 197,
            ),
            191 => 
            array (
                'id' => 3193,
                'state_name' => 'Trnavsky',
                'country_id' => 197,
            ),
            192 => 
            array (
                'id' => 3194,
                'state_name' => 'Zilinsky',
                'country_id' => 197,
            ),
            193 => 
            array (
                'id' => 3195,
                'state_name' => 'Benedikt',
                'country_id' => 198,
            ),
            194 => 
            array (
                'id' => 3196,
                'state_name' => 'Gorenjska',
                'country_id' => 198,
            ),
            195 => 
            array (
                'id' => 3197,
                'state_name' => 'Gorishka',
                'country_id' => 198,
            ),
            196 => 
            array (
                'id' => 3198,
                'state_name' => 'Jugovzhodna Slovenija',
                'country_id' => 198,
            ),
            197 => 
            array (
                'id' => 3199,
                'state_name' => 'Koroshka',
                'country_id' => 198,
            ),
            198 => 
            array (
                'id' => 3200,
                'state_name' => 'Notranjsko-krashka',
                'country_id' => 198,
            ),
            199 => 
            array (
                'id' => 3201,
                'state_name' => 'Obalno-krashka',
                'country_id' => 198,
            ),
            200 => 
            array (
                'id' => 3202,
                'state_name' => 'Obcina Domzale',
                'country_id' => 198,
            ),
            201 => 
            array (
                'id' => 3203,
                'state_name' => 'Obcina Vitanje',
                'country_id' => 198,
            ),
            202 => 
            array (
                'id' => 3204,
                'state_name' => 'Osrednjeslovenska',
                'country_id' => 198,
            ),
            203 => 
            array (
                'id' => 3205,
                'state_name' => 'Podravska',
                'country_id' => 198,
            ),
            204 => 
            array (
                'id' => 3206,
                'state_name' => 'Pomurska',
                'country_id' => 198,
            ),
            205 => 
            array (
                'id' => 3207,
                'state_name' => 'Savinjska',
                'country_id' => 198,
            ),
            206 => 
            array (
                'id' => 3208,
                'state_name' => 'Slovenian Littoral',
                'country_id' => 198,
            ),
            207 => 
            array (
                'id' => 3209,
                'state_name' => 'Spodnjeposavska',
                'country_id' => 198,
            ),
            208 => 
            array (
                'id' => 3210,
                'state_name' => 'Zasavska',
                'country_id' => 198,
            ),
            209 => 
            array (
                'id' => 3211,
                'state_name' => 'Pitcairn',
                'country_id' => 199,
            ),
            210 => 
            array (
                'id' => 3212,
                'state_name' => 'Central',
                'country_id' => 200,
            ),
            211 => 
            array (
                'id' => 3213,
                'state_name' => 'Choiseul',
                'country_id' => 200,
            ),
            212 => 
            array (
                'id' => 3214,
                'state_name' => 'Guadalcanal',
                'country_id' => 200,
            ),
            213 => 
            array (
                'id' => 3215,
                'state_name' => 'Isabel',
                'country_id' => 200,
            ),
            214 => 
            array (
                'id' => 3216,
                'state_name' => 'Makira and Ulawa',
                'country_id' => 200,
            ),
            215 => 
            array (
                'id' => 3217,
                'state_name' => 'Malaita',
                'country_id' => 200,
            ),
            216 => 
            array (
                'id' => 3218,
                'state_name' => 'Rennell and Bellona',
                'country_id' => 200,
            ),
            217 => 
            array (
                'id' => 3219,
                'state_name' => 'Temotu',
                'country_id' => 200,
            ),
            218 => 
            array (
                'id' => 3220,
                'state_name' => 'Western',
                'country_id' => 200,
            ),
            219 => 
            array (
                'id' => 3221,
                'state_name' => 'Awdal',
                'country_id' => 201,
            ),
            220 => 
            array (
                'id' => 3222,
                'state_name' => 'Bakol',
                'country_id' => 201,
            ),
            221 => 
            array (
                'id' => 3223,
                'state_name' => 'Banadir',
                'country_id' => 201,
            ),
            222 => 
            array (
                'id' => 3224,
                'state_name' => 'Bari',
                'country_id' => 201,
            ),
            223 => 
            array (
                'id' => 3225,
                'state_name' => 'Bay',
                'country_id' => 201,
            ),
            224 => 
            array (
                'id' => 3226,
                'state_name' => 'Galgudug',
                'country_id' => 201,
            ),
            225 => 
            array (
                'id' => 3227,
                'state_name' => 'Gedo',
                'country_id' => 201,
            ),
            226 => 
            array (
                'id' => 3228,
                'state_name' => 'Hiran',
                'country_id' => 201,
            ),
            227 => 
            array (
                'id' => 3229,
                'state_name' => 'Jubbada Hose',
                'country_id' => 201,
            ),
            228 => 
            array (
                'id' => 3230,
                'state_name' => 'Jubbadha Dexe',
                'country_id' => 201,
            ),
            229 => 
            array (
                'id' => 3231,
                'state_name' => 'Mudug',
                'country_id' => 201,
            ),
            230 => 
            array (
                'id' => 3232,
                'state_name' => 'Nugal',
                'country_id' => 201,
            ),
            231 => 
            array (
                'id' => 3233,
                'state_name' => 'Sanag',
                'country_id' => 201,
            ),
            232 => 
            array (
                'id' => 3234,
                'state_name' => 'Shabellaha Dhexe',
                'country_id' => 201,
            ),
            233 => 
            array (
                'id' => 3235,
                'state_name' => 'Shabellaha Hose',
                'country_id' => 201,
            ),
            234 => 
            array (
                'id' => 3236,
                'state_name' => 'Togdher',
                'country_id' => 201,
            ),
            235 => 
            array (
                'id' => 3237,
                'state_name' => 'Woqoyi Galbed',
                'country_id' => 201,
            ),
            236 => 
            array (
                'id' => 3238,
                'state_name' => 'Eastern Cape',
                'country_id' => 202,
            ),
            237 => 
            array (
                'id' => 3239,
                'state_name' => 'Free State',
                'country_id' => 202,
            ),
            238 => 
            array (
                'id' => 3240,
                'state_name' => 'Gauteng',
                'country_id' => 202,
            ),
            239 => 
            array (
                'id' => 3241,
                'state_name' => 'Kempton Park',
                'country_id' => 202,
            ),
            240 => 
            array (
                'id' => 3242,
                'state_name' => 'Kramerville',
                'country_id' => 202,
            ),
            241 => 
            array (
                'id' => 3243,
                'state_name' => 'KwaZulu Natal',
                'country_id' => 202,
            ),
            242 => 
            array (
                'id' => 3244,
                'state_name' => 'Limpopo',
                'country_id' => 202,
            ),
            243 => 
            array (
                'id' => 3245,
                'state_name' => 'Mpumalanga',
                'country_id' => 202,
            ),
            244 => 
            array (
                'id' => 3246,
                'state_name' => 'North West',
                'country_id' => 202,
            ),
            245 => 
            array (
                'id' => 3247,
                'state_name' => 'Northern Cape',
                'country_id' => 202,
            ),
            246 => 
            array (
                'id' => 3248,
                'state_name' => 'Parow',
                'country_id' => 202,
            ),
            247 => 
            array (
                'id' => 3249,
                'state_name' => 'Table View',
                'country_id' => 202,
            ),
            248 => 
            array (
                'id' => 3250,
                'state_name' => 'Umtentweni',
                'country_id' => 202,
            ),
            249 => 
            array (
                'id' => 3251,
                'state_name' => 'Western Cape',
                'country_id' => 202,
            ),
            250 => 
            array (
                'id' => 3252,
                'state_name' => 'South Georgia',
                'country_id' => 203,
            ),
            251 => 
            array (
                'id' => 3253,
                'state_name' => 'Central Equatoria',
                'country_id' => 204,
            ),
            252 => 
            array (
                'id' => 3254,
                'state_name' => 'A Coruna',
                'country_id' => 205,
            ),
            253 => 
            array (
                'id' => 3255,
                'state_name' => 'Alacant',
                'country_id' => 205,
            ),
            254 => 
            array (
                'id' => 3256,
                'state_name' => 'Alava',
                'country_id' => 205,
            ),
            255 => 
            array (
                'id' => 3257,
                'state_name' => 'Albacete',
                'country_id' => 205,
            ),
            256 => 
            array (
                'id' => 3258,
                'state_name' => 'Almeria',
                'country_id' => 205,
            ),
            257 => 
            array (
                'id' => 3259,
                'state_name' => 'Andalucia',
                'country_id' => 205,
            ),
            258 => 
            array (
                'id' => 3260,
                'state_name' => 'Asturias',
                'country_id' => 205,
            ),
            259 => 
            array (
                'id' => 3261,
                'state_name' => 'Avila',
                'country_id' => 205,
            ),
            260 => 
            array (
                'id' => 3262,
                'state_name' => 'Badajoz',
                'country_id' => 205,
            ),
            261 => 
            array (
                'id' => 3263,
                'state_name' => 'Balears',
                'country_id' => 205,
            ),
            262 => 
            array (
                'id' => 3264,
                'state_name' => 'Barcelona',
                'country_id' => 205,
            ),
            263 => 
            array (
                'id' => 3265,
                'state_name' => 'Bertamirans',
                'country_id' => 205,
            ),
            264 => 
            array (
                'id' => 3266,
                'state_name' => 'Biscay',
                'country_id' => 205,
            ),
            265 => 
            array (
                'id' => 3267,
                'state_name' => 'Burgos',
                'country_id' => 205,
            ),
            266 => 
            array (
                'id' => 3268,
                'state_name' => 'Caceres',
                'country_id' => 205,
            ),
            267 => 
            array (
                'id' => 3269,
                'state_name' => 'Cadiz',
                'country_id' => 205,
            ),
            268 => 
            array (
                'id' => 3270,
                'state_name' => 'Cantabria',
                'country_id' => 205,
            ),
            269 => 
            array (
                'id' => 3271,
                'state_name' => 'Castello',
                'country_id' => 205,
            ),
            270 => 
            array (
                'id' => 3272,
                'state_name' => 'Catalunya',
                'country_id' => 205,
            ),
            271 => 
            array (
                'id' => 3273,
                'state_name' => 'Ceuta',
                'country_id' => 205,
            ),
            272 => 
            array (
                'id' => 3274,
                'state_name' => 'Ciudad Real',
                'country_id' => 205,
            ),
            273 => 
            array (
                'id' => 3275,
                'state_name' => 'Comunidad Autonoma de Canarias',
                'country_id' => 205,
            ),
            274 => 
            array (
                'id' => 3276,
                'state_name' => 'Comunidad Autonoma de Cataluna',
                'country_id' => 205,
            ),
            275 => 
            array (
                'id' => 3277,
                'state_name' => 'Comunidad Autonoma de Galicia',
                'country_id' => 205,
            ),
            276 => 
            array (
                'id' => 3278,
                'state_name' => 'Comunidad Autonoma de las Isla',
                'country_id' => 205,
            ),
            277 => 
            array (
                'id' => 3279,
                'state_name' => 'Comunidad Autonoma del Princip',
                'country_id' => 205,
            ),
            278 => 
            array (
                'id' => 3280,
                'state_name' => 'Comunidad Valenciana',
                'country_id' => 205,
            ),
            279 => 
            array (
                'id' => 3281,
                'state_name' => 'Cordoba',
                'country_id' => 205,
            ),
            280 => 
            array (
                'id' => 3282,
                'state_name' => 'Cuenca',
                'country_id' => 205,
            ),
            281 => 
            array (
                'id' => 3283,
                'state_name' => 'Gipuzkoa',
                'country_id' => 205,
            ),
            282 => 
            array (
                'id' => 3284,
                'state_name' => 'Girona',
                'country_id' => 205,
            ),
            283 => 
            array (
                'id' => 3285,
                'state_name' => 'Granada',
                'country_id' => 205,
            ),
            284 => 
            array (
                'id' => 3286,
                'state_name' => 'Guadalajara',
                'country_id' => 205,
            ),
            285 => 
            array (
                'id' => 3287,
                'state_name' => 'Guipuzcoa',
                'country_id' => 205,
            ),
            286 => 
            array (
                'id' => 3288,
                'state_name' => 'Huelva',
                'country_id' => 205,
            ),
            287 => 
            array (
                'id' => 3289,
                'state_name' => 'Huesca',
                'country_id' => 205,
            ),
            288 => 
            array (
                'id' => 3290,
                'state_name' => 'Jaen',
                'country_id' => 205,
            ),
            289 => 
            array (
                'id' => 3291,
                'state_name' => 'La Rioja',
                'country_id' => 205,
            ),
            290 => 
            array (
                'id' => 3292,
                'state_name' => 'Las Palmas',
                'country_id' => 205,
            ),
            291 => 
            array (
                'id' => 3293,
                'state_name' => 'Leon',
                'country_id' => 205,
            ),
            292 => 
            array (
                'id' => 3294,
                'state_name' => 'Lerida',
                'country_id' => 205,
            ),
            293 => 
            array (
                'id' => 3295,
                'state_name' => 'Lleida',
                'country_id' => 205,
            ),
            294 => 
            array (
                'id' => 3296,
                'state_name' => 'Lugo',
                'country_id' => 205,
            ),
            295 => 
            array (
                'id' => 3297,
                'state_name' => 'Madrid',
                'country_id' => 205,
            ),
            296 => 
            array (
                'id' => 3298,
                'state_name' => 'Malaga',
                'country_id' => 205,
            ),
            297 => 
            array (
                'id' => 3299,
                'state_name' => 'Melilla',
                'country_id' => 205,
            ),
            298 => 
            array (
                'id' => 3300,
                'state_name' => 'Murcia',
                'country_id' => 205,
            ),
            299 => 
            array (
                'id' => 3301,
                'state_name' => 'Navarra',
                'country_id' => 205,
            ),
            300 => 
            array (
                'id' => 3302,
                'state_name' => 'Ourense',
                'country_id' => 205,
            ),
            301 => 
            array (
                'id' => 3303,
                'state_name' => 'Pais Vasco',
                'country_id' => 205,
            ),
            302 => 
            array (
                'id' => 3304,
                'state_name' => 'Palencia',
                'country_id' => 205,
            ),
            303 => 
            array (
                'id' => 3305,
                'state_name' => 'Pontevedra',
                'country_id' => 205,
            ),
            304 => 
            array (
                'id' => 3306,
                'state_name' => 'Salamanca',
                'country_id' => 205,
            ),
            305 => 
            array (
                'id' => 3307,
                'state_name' => 'Santa Cruz de Tenerife',
                'country_id' => 205,
            ),
            306 => 
            array (
                'id' => 3308,
                'state_name' => 'Segovia',
                'country_id' => 205,
            ),
            307 => 
            array (
                'id' => 3309,
                'state_name' => 'Sevilla',
                'country_id' => 205,
            ),
            308 => 
            array (
                'id' => 3310,
                'state_name' => 'Soria',
                'country_id' => 205,
            ),
            309 => 
            array (
                'id' => 3311,
                'state_name' => 'Tarragona',
                'country_id' => 205,
            ),
            310 => 
            array (
                'id' => 3312,
                'state_name' => 'Tenerife',
                'country_id' => 205,
            ),
            311 => 
            array (
                'id' => 3313,
                'state_name' => 'Teruel',
                'country_id' => 205,
            ),
            312 => 
            array (
                'id' => 3314,
                'state_name' => 'Toledo',
                'country_id' => 205,
            ),
            313 => 
            array (
                'id' => 3315,
                'state_name' => 'Valencia',
                'country_id' => 205,
            ),
            314 => 
            array (
                'id' => 3316,
                'state_name' => 'Valladolid',
                'country_id' => 205,
            ),
            315 => 
            array (
                'id' => 3317,
                'state_name' => 'Vizcaya',
                'country_id' => 205,
            ),
            316 => 
            array (
                'id' => 3318,
                'state_name' => 'Zamora',
                'country_id' => 205,
            ),
            317 => 
            array (
                'id' => 3319,
                'state_name' => 'Zaragoza',
                'country_id' => 205,
            ),
            318 => 
            array (
                'id' => 3320,
                'state_name' => 'Amparai',
                'country_id' => 206,
            ),
            319 => 
            array (
                'id' => 3321,
                'state_name' => 'Anuradhapuraya',
                'country_id' => 206,
            ),
            320 => 
            array (
                'id' => 3322,
                'state_name' => 'Badulla',
                'country_id' => 206,
            ),
            321 => 
            array (
                'id' => 3323,
                'state_name' => 'Boralesgamuwa',
                'country_id' => 206,
            ),
            322 => 
            array (
                'id' => 3324,
                'state_name' => 'Colombo',
                'country_id' => 206,
            ),
            323 => 
            array (
                'id' => 3325,
                'state_name' => 'Galla',
                'country_id' => 206,
            ),
            324 => 
            array (
                'id' => 3326,
                'state_name' => 'Gampaha',
                'country_id' => 206,
            ),
            325 => 
            array (
                'id' => 3327,
                'state_name' => 'Hambantota',
                'country_id' => 206,
            ),
            326 => 
            array (
                'id' => 3328,
                'state_name' => 'Kalatura',
                'country_id' => 206,
            ),
            327 => 
            array (
                'id' => 3329,
                'state_name' => 'Kegalla',
                'country_id' => 206,
            ),
            328 => 
            array (
                'id' => 3330,
                'state_name' => 'Kilinochchi',
                'country_id' => 206,
            ),
            329 => 
            array (
                'id' => 3331,
                'state_name' => 'Kurunegala',
                'country_id' => 206,
            ),
            330 => 
            array (
                'id' => 3332,
                'state_name' => 'Madakalpuwa',
                'country_id' => 206,
            ),
            331 => 
            array (
                'id' => 3333,
                'state_name' => 'Maha Nuwara',
                'country_id' => 206,
            ),
            332 => 
            array (
                'id' => 3334,
                'state_name' => 'Malwana',
                'country_id' => 206,
            ),
            333 => 
            array (
                'id' => 3335,
                'state_name' => 'Mannarama',
                'country_id' => 206,
            ),
            334 => 
            array (
                'id' => 3336,
                'state_name' => 'Matale',
                'country_id' => 206,
            ),
            335 => 
            array (
                'id' => 3337,
                'state_name' => 'Matara',
                'country_id' => 206,
            ),
            336 => 
            array (
                'id' => 3338,
                'state_name' => 'Monaragala',
                'country_id' => 206,
            ),
            337 => 
            array (
                'id' => 3339,
                'state_name' => 'Mullaitivu',
                'country_id' => 206,
            ),
            338 => 
            array (
                'id' => 3340,
                'state_name' => 'North Eastern Province',
                'country_id' => 206,
            ),
            339 => 
            array (
                'id' => 3341,
                'state_name' => 'North Western Province',
                'country_id' => 206,
            ),
            340 => 
            array (
                'id' => 3342,
                'state_name' => 'Nuwara Eliya',
                'country_id' => 206,
            ),
            341 => 
            array (
                'id' => 3343,
                'state_name' => 'Polonnaruwa',
                'country_id' => 206,
            ),
            342 => 
            array (
                'id' => 3344,
                'state_name' => 'Puttalama',
                'country_id' => 206,
            ),
            343 => 
            array (
                'id' => 3345,
                'state_name' => 'Ratnapuraya',
                'country_id' => 206,
            ),
            344 => 
            array (
                'id' => 3346,
                'state_name' => 'Southern Province',
                'country_id' => 206,
            ),
            345 => 
            array (
                'id' => 3347,
                'state_name' => 'Tirikunamalaya',
                'country_id' => 206,
            ),
            346 => 
            array (
                'id' => 3348,
                'state_name' => 'Tuscany',
                'country_id' => 206,
            ),
            347 => 
            array (
                'id' => 3349,
                'state_name' => 'Vavuniyawa',
                'country_id' => 206,
            ),
            348 => 
            array (
                'id' => 3350,
                'state_name' => 'Western Province',
                'country_id' => 206,
            ),
            349 => 
            array (
                'id' => 3351,
                'state_name' => 'Yapanaya',
                'country_id' => 206,
            ),
            350 => 
            array (
                'id' => 3352,
                'state_name' => 'kadawatha',
                'country_id' => 206,
            ),
            351 => 
            array (
                'id' => 3353,
                'state_name' => 'A\'ali-an-Nil',
                'country_id' => 207,
            ),
            352 => 
            array (
                'id' => 3354,
                'state_name' => 'Bahr-al-Jabal',
                'country_id' => 207,
            ),
            353 => 
            array (
                'id' => 3355,
                'state_name' => 'Central Equatoria',
                'country_id' => 207,
            ),
            354 => 
            array (
                'id' => 3356,
                'state_name' => 'Gharb Bahr-al-Ghazal',
                'country_id' => 207,
            ),
            355 => 
            array (
                'id' => 3357,
                'state_name' => 'Gharb Darfur',
                'country_id' => 207,
            ),
            356 => 
            array (
                'id' => 3358,
                'state_name' => 'Gharb Kurdufan',
                'country_id' => 207,
            ),
            357 => 
            array (
                'id' => 3359,
                'state_name' => 'Gharb-al-Istiwa\'iyah',
                'country_id' => 207,
            ),
            358 => 
            array (
                'id' => 3360,
                'state_name' => 'Janub Darfur',
                'country_id' => 207,
            ),
            359 => 
            array (
                'id' => 3361,
                'state_name' => 'Janub Kurdufan',
                'country_id' => 207,
            ),
            360 => 
            array (
                'id' => 3362,
                'state_name' => 'Junqali',
                'country_id' => 207,
            ),
            361 => 
            array (
                'id' => 3363,
                'state_name' => 'Kassala',
                'country_id' => 207,
            ),
            362 => 
            array (
                'id' => 3364,
                'state_name' => 'Nahr-an-Nil',
                'country_id' => 207,
            ),
            363 => 
            array (
                'id' => 3365,
                'state_name' => 'Shamal Bahr-al-Ghazal',
                'country_id' => 207,
            ),
            364 => 
            array (
                'id' => 3366,
                'state_name' => 'Shamal Darfur',
                'country_id' => 207,
            ),
            365 => 
            array (
                'id' => 3367,
                'state_name' => 'Shamal Kurdufan',
                'country_id' => 207,
            ),
            366 => 
            array (
                'id' => 3368,
                'state_name' => 'Sharq-al-Istiwa\'iyah',
                'country_id' => 207,
            ),
            367 => 
            array (
                'id' => 3369,
                'state_name' => 'Sinnar',
                'country_id' => 207,
            ),
            368 => 
            array (
                'id' => 3370,
                'state_name' => 'Warab',
                'country_id' => 207,
            ),
            369 => 
            array (
                'id' => 3371,
                'state_name' => 'Wilayat al Khartum',
                'country_id' => 207,
            ),
            370 => 
            array (
                'id' => 3372,
                'state_name' => 'al-Bahr-al-Ahmar',
                'country_id' => 207,
            ),
            371 => 
            array (
                'id' => 3373,
                'state_name' => 'al-Buhayrat',
                'country_id' => 207,
            ),
            372 => 
            array (
                'id' => 3374,
                'state_name' => 'al-Jazirah',
                'country_id' => 207,
            ),
            373 => 
            array (
                'id' => 3375,
                'state_name' => 'al-Khartum',
                'country_id' => 207,
            ),
            374 => 
            array (
                'id' => 3376,
                'state_name' => 'al-Qadarif',
                'country_id' => 207,
            ),
            375 => 
            array (
                'id' => 3377,
                'state_name' => 'al-Wahdah',
                'country_id' => 207,
            ),
            376 => 
            array (
                'id' => 3378,
                'state_name' => 'an-Nil-al-Abyad',
                'country_id' => 207,
            ),
            377 => 
            array (
                'id' => 3379,
                'state_name' => 'an-Nil-al-Azraq',
                'country_id' => 207,
            ),
            378 => 
            array (
                'id' => 3380,
                'state_name' => 'ash-Shamaliyah',
                'country_id' => 207,
            ),
            379 => 
            array (
                'id' => 3381,
                'state_name' => 'Brokopondo',
                'country_id' => 208,
            ),
            380 => 
            array (
                'id' => 3382,
                'state_name' => 'Commewijne',
                'country_id' => 208,
            ),
            381 => 
            array (
                'id' => 3383,
                'state_name' => 'Coronie',
                'country_id' => 208,
            ),
            382 => 
            array (
                'id' => 3384,
                'state_name' => 'Marowijne',
                'country_id' => 208,
            ),
            383 => 
            array (
                'id' => 3385,
                'state_name' => 'Nickerie',
                'country_id' => 208,
            ),
            384 => 
            array (
                'id' => 3386,
                'state_name' => 'Para',
                'country_id' => 208,
            ),
            385 => 
            array (
                'id' => 3387,
                'state_name' => 'Paramaribo',
                'country_id' => 208,
            ),
            386 => 
            array (
                'id' => 3388,
                'state_name' => 'Saramacca',
                'country_id' => 208,
            ),
            387 => 
            array (
                'id' => 3389,
                'state_name' => 'Wanica',
                'country_id' => 208,
            ),
            388 => 
            array (
                'id' => 3390,
                'state_name' => 'Svalbard',
                'country_id' => 209,
            ),
            389 => 
            array (
                'id' => 3391,
                'state_name' => 'Hhohho',
                'country_id' => 210,
            ),
            390 => 
            array (
                'id' => 3392,
                'state_name' => 'Lubombo',
                'country_id' => 210,
            ),
            391 => 
            array (
                'id' => 3393,
                'state_name' => 'Manzini',
                'country_id' => 210,
            ),
            392 => 
            array (
                'id' => 3394,
                'state_name' => 'Shiselweni',
                'country_id' => 210,
            ),
            393 => 
            array (
                'id' => 3395,
                'state_name' => 'Alvsborgs Lan',
                'country_id' => 211,
            ),
            394 => 
            array (
                'id' => 3396,
                'state_name' => 'Angermanland',
                'country_id' => 211,
            ),
            395 => 
            array (
                'id' => 3397,
                'state_name' => 'Blekinge',
                'country_id' => 211,
            ),
            396 => 
            array (
                'id' => 3398,
                'state_name' => 'Bohuslan',
                'country_id' => 211,
            ),
            397 => 
            array (
                'id' => 3399,
                'state_name' => 'Dalarna',
                'country_id' => 211,
            ),
            398 => 
            array (
                'id' => 3400,
                'state_name' => 'Gavleborg',
                'country_id' => 211,
            ),
            399 => 
            array (
                'id' => 3401,
                'state_name' => 'Gaza',
                'country_id' => 211,
            ),
            400 => 
            array (
                'id' => 3402,
                'state_name' => 'Gotland',
                'country_id' => 211,
            ),
            401 => 
            array (
                'id' => 3403,
                'state_name' => 'Halland',
                'country_id' => 211,
            ),
            402 => 
            array (
                'id' => 3404,
                'state_name' => 'Jamtland',
                'country_id' => 211,
            ),
            403 => 
            array (
                'id' => 3405,
                'state_name' => 'Jonkoping',
                'country_id' => 211,
            ),
            404 => 
            array (
                'id' => 3406,
                'state_name' => 'Kalmar',
                'country_id' => 211,
            ),
            405 => 
            array (
                'id' => 3407,
                'state_name' => 'Kristianstads',
                'country_id' => 211,
            ),
            406 => 
            array (
                'id' => 3408,
                'state_name' => 'Kronoberg',
                'country_id' => 211,
            ),
            407 => 
            array (
                'id' => 3409,
                'state_name' => 'Norrbotten',
                'country_id' => 211,
            ),
            408 => 
            array (
                'id' => 3410,
                'state_name' => 'Orebro',
                'country_id' => 211,
            ),
            409 => 
            array (
                'id' => 3411,
                'state_name' => 'Ostergotland',
                'country_id' => 211,
            ),
            410 => 
            array (
                'id' => 3412,
                'state_name' => 'Saltsjo-Boo',
                'country_id' => 211,
            ),
            411 => 
            array (
                'id' => 3413,
                'state_name' => 'Skane',
                'country_id' => 211,
            ),
            412 => 
            array (
                'id' => 3414,
                'state_name' => 'Smaland',
                'country_id' => 211,
            ),
            413 => 
            array (
                'id' => 3415,
                'state_name' => 'Sodermanland',
                'country_id' => 211,
            ),
            414 => 
            array (
                'id' => 3416,
                'state_name' => 'Stockholm',
                'country_id' => 211,
            ),
            415 => 
            array (
                'id' => 3417,
                'state_name' => 'Uppsala',
                'country_id' => 211,
            ),
            416 => 
            array (
                'id' => 3418,
                'state_name' => 'Varmland',
                'country_id' => 211,
            ),
            417 => 
            array (
                'id' => 3419,
                'state_name' => 'Vasterbotten',
                'country_id' => 211,
            ),
            418 => 
            array (
                'id' => 3420,
                'state_name' => 'Vastergotland',
                'country_id' => 211,
            ),
            419 => 
            array (
                'id' => 3421,
                'state_name' => 'Vasternorrland',
                'country_id' => 211,
            ),
            420 => 
            array (
                'id' => 3422,
                'state_name' => 'Vastmanland',
                'country_id' => 211,
            ),
            421 => 
            array (
                'id' => 3423,
                'state_name' => 'Vastra Gotaland',
                'country_id' => 211,
            ),
            422 => 
            array (
                'id' => 3424,
                'state_name' => 'Aargau',
                'country_id' => 212,
            ),
            423 => 
            array (
                'id' => 3425,
                'state_name' => 'Appenzell Inner-Rhoden',
                'country_id' => 212,
            ),
            424 => 
            array (
                'id' => 3426,
                'state_name' => 'Appenzell-Ausser Rhoden',
                'country_id' => 212,
            ),
            425 => 
            array (
                'id' => 3427,
                'state_name' => 'Basel-Landschaft',
                'country_id' => 212,
            ),
            426 => 
            array (
                'id' => 3428,
                'state_name' => 'Basel-Stadt',
                'country_id' => 212,
            ),
            427 => 
            array (
                'id' => 3429,
                'state_name' => 'Bern',
                'country_id' => 212,
            ),
            428 => 
            array (
                'id' => 3430,
                'state_name' => 'Canton Ticino',
                'country_id' => 212,
            ),
            429 => 
            array (
                'id' => 3431,
                'state_name' => 'Fribourg',
                'country_id' => 212,
            ),
            430 => 
            array (
                'id' => 3432,
                'state_name' => 'Geneve',
                'country_id' => 212,
            ),
            431 => 
            array (
                'id' => 3433,
                'state_name' => 'Glarus',
                'country_id' => 212,
            ),
            432 => 
            array (
                'id' => 3434,
                'state_name' => 'Graubunden',
                'country_id' => 212,
            ),
            433 => 
            array (
                'id' => 3435,
                'state_name' => 'Heerbrugg',
                'country_id' => 212,
            ),
            434 => 
            array (
                'id' => 3436,
                'state_name' => 'Jura',
                'country_id' => 212,
            ),
            435 => 
            array (
                'id' => 3437,
                'state_name' => 'Kanton Aargau',
                'country_id' => 212,
            ),
            436 => 
            array (
                'id' => 3438,
                'state_name' => 'Luzern',
                'country_id' => 212,
            ),
            437 => 
            array (
                'id' => 3439,
                'state_name' => 'Morbio Inferiore',
                'country_id' => 212,
            ),
            438 => 
            array (
                'id' => 3440,
                'state_name' => 'Muhen',
                'country_id' => 212,
            ),
            439 => 
            array (
                'id' => 3441,
                'state_name' => 'Neuchatel',
                'country_id' => 212,
            ),
            440 => 
            array (
                'id' => 3442,
                'state_name' => 'Nidwalden',
                'country_id' => 212,
            ),
            441 => 
            array (
                'id' => 3443,
                'state_name' => 'Obwalden',
                'country_id' => 212,
            ),
            442 => 
            array (
                'id' => 3444,
                'state_name' => 'Sankt Gallen',
                'country_id' => 212,
            ),
            443 => 
            array (
                'id' => 3445,
                'state_name' => 'Schaffhausen',
                'country_id' => 212,
            ),
            444 => 
            array (
                'id' => 3446,
                'state_name' => 'Schwyz',
                'country_id' => 212,
            ),
            445 => 
            array (
                'id' => 3447,
                'state_name' => 'Solothurn',
                'country_id' => 212,
            ),
            446 => 
            array (
                'id' => 3448,
                'state_name' => 'Thurgau',
                'country_id' => 212,
            ),
            447 => 
            array (
                'id' => 3449,
                'state_name' => 'Ticino',
                'country_id' => 212,
            ),
            448 => 
            array (
                'id' => 3450,
                'state_name' => 'Uri',
                'country_id' => 212,
            ),
            449 => 
            array (
                'id' => 3451,
                'state_name' => 'Valais',
                'country_id' => 212,
            ),
            450 => 
            array (
                'id' => 3452,
                'state_name' => 'Vaud',
                'country_id' => 212,
            ),
            451 => 
            array (
                'id' => 3453,
                'state_name' => 'Vauffelin',
                'country_id' => 212,
            ),
            452 => 
            array (
                'id' => 3454,
                'state_name' => 'Zug',
                'country_id' => 212,
            ),
            453 => 
            array (
                'id' => 3455,
                'state_name' => 'Zurich',
                'country_id' => 212,
            ),
            454 => 
            array (
                'id' => 3456,
                'state_name' => 'Aleppo',
                'country_id' => 213,
            ),
            455 => 
            array (
                'id' => 3457,
                'state_name' => 'Dar\'a',
                'country_id' => 213,
            ),
            456 => 
            array (
                'id' => 3458,
                'state_name' => 'Dayr-az-Zawr',
                'country_id' => 213,
            ),
            457 => 
            array (
                'id' => 3459,
                'state_name' => 'Dimashq',
                'country_id' => 213,
            ),
            458 => 
            array (
                'id' => 3460,
                'state_name' => 'Halab',
                'country_id' => 213,
            ),
            459 => 
            array (
                'id' => 3461,
                'state_name' => 'Hamah',
                'country_id' => 213,
            ),
            460 => 
            array (
                'id' => 3462,
                'state_name' => 'Hims',
                'country_id' => 213,
            ),
            461 => 
            array (
                'id' => 3463,
                'state_name' => 'Idlib',
                'country_id' => 213,
            ),
            462 => 
            array (
                'id' => 3464,
                'state_name' => 'Madinat Dimashq',
                'country_id' => 213,
            ),
            463 => 
            array (
                'id' => 3465,
                'state_name' => 'Tartus',
                'country_id' => 213,
            ),
            464 => 
            array (
                'id' => 3466,
                'state_name' => 'al-Hasakah',
                'country_id' => 213,
            ),
            465 => 
            array (
                'id' => 3467,
                'state_name' => 'al-Ladhiqiyah',
                'country_id' => 213,
            ),
            466 => 
            array (
                'id' => 3468,
                'state_name' => 'al-Qunaytirah',
                'country_id' => 213,
            ),
            467 => 
            array (
                'id' => 3469,
                'state_name' => 'ar-Raqqah',
                'country_id' => 213,
            ),
            468 => 
            array (
                'id' => 3470,
                'state_name' => 'as-Suwayda',
                'country_id' => 213,
            ),
            469 => 
            array (
                'id' => 3471,
                'state_name' => 'Changhwa',
                'country_id' => 214,
            ),
            470 => 
            array (
                'id' => 3472,
                'state_name' => 'Chiayi Hsien',
                'country_id' => 214,
            ),
            471 => 
            array (
                'id' => 3473,
                'state_name' => 'Chiayi Shih',
                'country_id' => 214,
            ),
            472 => 
            array (
                'id' => 3474,
                'state_name' => 'Eastern Taipei',
                'country_id' => 214,
            ),
            473 => 
            array (
                'id' => 3475,
                'state_name' => 'Hsinchu Hsien',
                'country_id' => 214,
            ),
            474 => 
            array (
                'id' => 3476,
                'state_name' => 'Hsinchu Shih',
                'country_id' => 214,
            ),
            475 => 
            array (
                'id' => 3477,
                'state_name' => 'Hualien',
                'country_id' => 214,
            ),
            476 => 
            array (
                'id' => 3478,
                'state_name' => 'Ilan',
                'country_id' => 214,
            ),
            477 => 
            array (
                'id' => 3479,
                'state_name' => 'Kaohsiung Hsien',
                'country_id' => 214,
            ),
            478 => 
            array (
                'id' => 3480,
                'state_name' => 'Kaohsiung Shih',
                'country_id' => 214,
            ),
            479 => 
            array (
                'id' => 3481,
                'state_name' => 'Keelung Shih',
                'country_id' => 214,
            ),
            480 => 
            array (
                'id' => 3482,
                'state_name' => 'Kinmen',
                'country_id' => 214,
            ),
            481 => 
            array (
                'id' => 3483,
                'state_name' => 'Miaoli',
                'country_id' => 214,
            ),
            482 => 
            array (
                'id' => 3484,
                'state_name' => 'Nantou',
                'country_id' => 214,
            ),
            483 => 
            array (
                'id' => 3485,
                'state_name' => 'Northern Taiwan',
                'country_id' => 214,
            ),
            484 => 
            array (
                'id' => 3486,
                'state_name' => 'Penghu',
                'country_id' => 214,
            ),
            485 => 
            array (
                'id' => 3487,
                'state_name' => 'Pingtung',
                'country_id' => 214,
            ),
            486 => 
            array (
                'id' => 3488,
                'state_name' => 'Taichung',
                'country_id' => 214,
            ),
            487 => 
            array (
                'id' => 3489,
                'state_name' => 'Taichung Hsien',
                'country_id' => 214,
            ),
            488 => 
            array (
                'id' => 3490,
                'state_name' => 'Taichung Shih',
                'country_id' => 214,
            ),
            489 => 
            array (
                'id' => 3491,
                'state_name' => 'Tainan Hsien',
                'country_id' => 214,
            ),
            490 => 
            array (
                'id' => 3492,
                'state_name' => 'Tainan Shih',
                'country_id' => 214,
            ),
            491 => 
            array (
                'id' => 3493,
                'state_name' => 'Taipei Hsien',
                'country_id' => 214,
            ),
            492 => 
            array (
                'id' => 3494,
                'state_name' => 'Taipei Shih / Taipei Hsien',
                'country_id' => 214,
            ),
            493 => 
            array (
                'id' => 3495,
                'state_name' => 'Taitung',
                'country_id' => 214,
            ),
            494 => 
            array (
                'id' => 3496,
                'state_name' => 'Taoyuan',
                'country_id' => 214,
            ),
            495 => 
            array (
                'id' => 3497,
                'state_name' => 'Yilan',
                'country_id' => 214,
            ),
            496 => 
            array (
                'id' => 3498,
                'state_name' => 'Yun-Lin Hsien',
                'country_id' => 214,
            ),
            497 => 
            array (
                'id' => 3499,
                'state_name' => 'Yunlin',
                'country_id' => 214,
            ),
            498 => 
            array (
                'id' => 3500,
                'state_name' => 'Dushanbe',
                'country_id' => 215,
            ),
            499 => 
            array (
                'id' => 3501,
                'state_name' => 'Gorno-Badakhshan',
                'country_id' => 215,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 3502,
                'state_name' => 'Karotegin',
                'country_id' => 215,
            ),
            1 => 
            array (
                'id' => 3503,
                'state_name' => 'Khatlon',
                'country_id' => 215,
            ),
            2 => 
            array (
                'id' => 3504,
                'state_name' => 'Sughd',
                'country_id' => 215,
            ),
            3 => 
            array (
                'id' => 3505,
                'state_name' => 'Arusha',
                'country_id' => 216,
            ),
            4 => 
            array (
                'id' => 3506,
                'state_name' => 'Dar es Salaam',
                'country_id' => 216,
            ),
            5 => 
            array (
                'id' => 3507,
                'state_name' => 'Dodoma',
                'country_id' => 216,
            ),
            6 => 
            array (
                'id' => 3508,
                'state_name' => 'Iringa',
                'country_id' => 216,
            ),
            7 => 
            array (
                'id' => 3509,
                'state_name' => 'Kagera',
                'country_id' => 216,
            ),
            8 => 
            array (
                'id' => 3510,
                'state_name' => 'Kigoma',
                'country_id' => 216,
            ),
            9 => 
            array (
                'id' => 3511,
                'state_name' => 'Kilimanjaro',
                'country_id' => 216,
            ),
            10 => 
            array (
                'id' => 3512,
                'state_name' => 'Lindi',
                'country_id' => 216,
            ),
            11 => 
            array (
                'id' => 3513,
                'state_name' => 'Mara',
                'country_id' => 216,
            ),
            12 => 
            array (
                'id' => 3514,
                'state_name' => 'Mbeya',
                'country_id' => 216,
            ),
            13 => 
            array (
                'id' => 3515,
                'state_name' => 'Morogoro',
                'country_id' => 216,
            ),
            14 => 
            array (
                'id' => 3516,
                'state_name' => 'Mtwara',
                'country_id' => 216,
            ),
            15 => 
            array (
                'id' => 3517,
                'state_name' => 'Mwanza',
                'country_id' => 216,
            ),
            16 => 
            array (
                'id' => 3518,
                'state_name' => 'Pwani',
                'country_id' => 216,
            ),
            17 => 
            array (
                'id' => 3519,
                'state_name' => 'Rukwa',
                'country_id' => 216,
            ),
            18 => 
            array (
                'id' => 3520,
                'state_name' => 'Ruvuma',
                'country_id' => 216,
            ),
            19 => 
            array (
                'id' => 3521,
                'state_name' => 'Shinyanga',
                'country_id' => 216,
            ),
            20 => 
            array (
                'id' => 3522,
                'state_name' => 'Singida',
                'country_id' => 216,
            ),
            21 => 
            array (
                'id' => 3523,
                'state_name' => 'Tabora',
                'country_id' => 216,
            ),
            22 => 
            array (
                'id' => 3524,
                'state_name' => 'Tanga',
                'country_id' => 216,
            ),
            23 => 
            array (
                'id' => 3525,
                'state_name' => 'Zanzibar and Pemba',
                'country_id' => 216,
            ),
            24 => 
            array (
                'id' => 3526,
                'state_name' => 'Amnat Charoen',
                'country_id' => 217,
            ),
            25 => 
            array (
                'id' => 3527,
                'state_name' => 'Ang Thong',
                'country_id' => 217,
            ),
            26 => 
            array (
                'id' => 3528,
                'state_name' => 'Bangkok',
                'country_id' => 217,
            ),
            27 => 
            array (
                'id' => 3529,
                'state_name' => 'Buri Ram',
                'country_id' => 217,
            ),
            28 => 
            array (
                'id' => 3530,
                'state_name' => 'Chachoengsao',
                'country_id' => 217,
            ),
            29 => 
            array (
                'id' => 3531,
                'state_name' => 'Chai Nat',
                'country_id' => 217,
            ),
            30 => 
            array (
                'id' => 3532,
                'state_name' => 'Chaiyaphum',
                'country_id' => 217,
            ),
            31 => 
            array (
                'id' => 3533,
                'state_name' => 'Changwat Chaiyaphum',
                'country_id' => 217,
            ),
            32 => 
            array (
                'id' => 3534,
                'state_name' => 'Chanthaburi',
                'country_id' => 217,
            ),
            33 => 
            array (
                'id' => 3535,
                'state_name' => 'Chiang Mai',
                'country_id' => 217,
            ),
            34 => 
            array (
                'id' => 3536,
                'state_name' => 'Chiang Rai',
                'country_id' => 217,
            ),
            35 => 
            array (
                'id' => 3537,
                'state_name' => 'Chon Buri',
                'country_id' => 217,
            ),
            36 => 
            array (
                'id' => 3538,
                'state_name' => 'Chumphon',
                'country_id' => 217,
            ),
            37 => 
            array (
                'id' => 3539,
                'state_name' => 'Kalasin',
                'country_id' => 217,
            ),
            38 => 
            array (
                'id' => 3540,
                'state_name' => 'Kamphaeng Phet',
                'country_id' => 217,
            ),
            39 => 
            array (
                'id' => 3541,
                'state_name' => 'Kanchanaburi',
                'country_id' => 217,
            ),
            40 => 
            array (
                'id' => 3542,
                'state_name' => 'Khon Kaen',
                'country_id' => 217,
            ),
            41 => 
            array (
                'id' => 3543,
                'state_name' => 'Krabi',
                'country_id' => 217,
            ),
            42 => 
            array (
                'id' => 3544,
                'state_name' => 'Krung Thep',
                'country_id' => 217,
            ),
            43 => 
            array (
                'id' => 3545,
                'state_name' => 'Lampang',
                'country_id' => 217,
            ),
            44 => 
            array (
                'id' => 3546,
                'state_name' => 'Lamphun',
                'country_id' => 217,
            ),
            45 => 
            array (
                'id' => 3547,
                'state_name' => 'Loei',
                'country_id' => 217,
            ),
            46 => 
            array (
                'id' => 3548,
                'state_name' => 'Lop Buri',
                'country_id' => 217,
            ),
            47 => 
            array (
                'id' => 3549,
                'state_name' => 'Mae Hong Son',
                'country_id' => 217,
            ),
            48 => 
            array (
                'id' => 3550,
                'state_name' => 'Maha Sarakham',
                'country_id' => 217,
            ),
            49 => 
            array (
                'id' => 3551,
                'state_name' => 'Mukdahan',
                'country_id' => 217,
            ),
            50 => 
            array (
                'id' => 3552,
                'state_name' => 'Nakhon Nayok',
                'country_id' => 217,
            ),
            51 => 
            array (
                'id' => 3553,
                'state_name' => 'Nakhon Pathom',
                'country_id' => 217,
            ),
            52 => 
            array (
                'id' => 3554,
                'state_name' => 'Nakhon Phanom',
                'country_id' => 217,
            ),
            53 => 
            array (
                'id' => 3555,
                'state_name' => 'Nakhon Ratchasima',
                'country_id' => 217,
            ),
            54 => 
            array (
                'id' => 3556,
                'state_name' => 'Nakhon Sawan',
                'country_id' => 217,
            ),
            55 => 
            array (
                'id' => 3557,
                'state_name' => 'Nakhon Si Thammarat',
                'country_id' => 217,
            ),
            56 => 
            array (
                'id' => 3558,
                'state_name' => 'Nan',
                'country_id' => 217,
            ),
            57 => 
            array (
                'id' => 3559,
                'state_name' => 'Narathiwat',
                'country_id' => 217,
            ),
            58 => 
            array (
                'id' => 3560,
                'state_name' => 'Nong Bua Lam Phu',
                'country_id' => 217,
            ),
            59 => 
            array (
                'id' => 3561,
                'state_name' => 'Nong Khai',
                'country_id' => 217,
            ),
            60 => 
            array (
                'id' => 3562,
                'state_name' => 'Nonthaburi',
                'country_id' => 217,
            ),
            61 => 
            array (
                'id' => 3563,
                'state_name' => 'Pathum Thani',
                'country_id' => 217,
            ),
            62 => 
            array (
                'id' => 3564,
                'state_name' => 'Pattani',
                'country_id' => 217,
            ),
            63 => 
            array (
                'id' => 3565,
                'state_name' => 'Phangnga',
                'country_id' => 217,
            ),
            64 => 
            array (
                'id' => 3566,
                'state_name' => 'Phatthalung',
                'country_id' => 217,
            ),
            65 => 
            array (
                'id' => 3567,
                'state_name' => 'Phayao',
                'country_id' => 217,
            ),
            66 => 
            array (
                'id' => 3568,
                'state_name' => 'Phetchabun',
                'country_id' => 217,
            ),
            67 => 
            array (
                'id' => 3569,
                'state_name' => 'Phetchaburi',
                'country_id' => 217,
            ),
            68 => 
            array (
                'id' => 3570,
                'state_name' => 'Phichit',
                'country_id' => 217,
            ),
            69 => 
            array (
                'id' => 3571,
                'state_name' => 'Phitsanulok',
                'country_id' => 217,
            ),
            70 => 
            array (
                'id' => 3572,
                'state_name' => 'Phra Nakhon Si Ayutthaya',
                'country_id' => 217,
            ),
            71 => 
            array (
                'id' => 3573,
                'state_name' => 'Phrae',
                'country_id' => 217,
            ),
            72 => 
            array (
                'id' => 3574,
                'state_name' => 'Phuket',
                'country_id' => 217,
            ),
            73 => 
            array (
                'id' => 3575,
                'state_name' => 'Prachin Buri',
                'country_id' => 217,
            ),
            74 => 
            array (
                'id' => 3576,
                'state_name' => 'Prachuap Khiri Khan',
                'country_id' => 217,
            ),
            75 => 
            array (
                'id' => 3577,
                'state_name' => 'Ranong',
                'country_id' => 217,
            ),
            76 => 
            array (
                'id' => 3578,
                'state_name' => 'Ratchaburi',
                'country_id' => 217,
            ),
            77 => 
            array (
                'id' => 3579,
                'state_name' => 'Rayong',
                'country_id' => 217,
            ),
            78 => 
            array (
                'id' => 3580,
                'state_name' => 'Roi Et',
                'country_id' => 217,
            ),
            79 => 
            array (
                'id' => 3581,
                'state_name' => 'Sa Kaeo',
                'country_id' => 217,
            ),
            80 => 
            array (
                'id' => 3582,
                'state_name' => 'Sakon Nakhon',
                'country_id' => 217,
            ),
            81 => 
            array (
                'id' => 3583,
                'state_name' => 'Samut Prakan',
                'country_id' => 217,
            ),
            82 => 
            array (
                'id' => 3584,
                'state_name' => 'Samut Sakhon',
                'country_id' => 217,
            ),
            83 => 
            array (
                'id' => 3585,
                'state_name' => 'Samut Songkhran',
                'country_id' => 217,
            ),
            84 => 
            array (
                'id' => 3586,
                'state_name' => 'Saraburi',
                'country_id' => 217,
            ),
            85 => 
            array (
                'id' => 3587,
                'state_name' => 'Satun',
                'country_id' => 217,
            ),
            86 => 
            array (
                'id' => 3588,
                'state_name' => 'Si Sa Ket',
                'country_id' => 217,
            ),
            87 => 
            array (
                'id' => 3589,
                'state_name' => 'Sing Buri',
                'country_id' => 217,
            ),
            88 => 
            array (
                'id' => 3590,
                'state_name' => 'Songkhla',
                'country_id' => 217,
            ),
            89 => 
            array (
                'id' => 3591,
                'state_name' => 'Sukhothai',
                'country_id' => 217,
            ),
            90 => 
            array (
                'id' => 3592,
                'state_name' => 'Suphan Buri',
                'country_id' => 217,
            ),
            91 => 
            array (
                'id' => 3593,
                'state_name' => 'Surat Thani',
                'country_id' => 217,
            ),
            92 => 
            array (
                'id' => 3594,
                'state_name' => 'Surin',
                'country_id' => 217,
            ),
            93 => 
            array (
                'id' => 3595,
                'state_name' => 'Tak',
                'country_id' => 217,
            ),
            94 => 
            array (
                'id' => 3596,
                'state_name' => 'Trang',
                'country_id' => 217,
            ),
            95 => 
            array (
                'id' => 3597,
                'state_name' => 'Trat',
                'country_id' => 217,
            ),
            96 => 
            array (
                'id' => 3598,
                'state_name' => 'Ubon Ratchathani',
                'country_id' => 217,
            ),
            97 => 
            array (
                'id' => 3599,
                'state_name' => 'Udon Thani',
                'country_id' => 217,
            ),
            98 => 
            array (
                'id' => 3600,
                'state_name' => 'Uthai Thani',
                'country_id' => 217,
            ),
            99 => 
            array (
                'id' => 3601,
                'state_name' => 'Uttaradit',
                'country_id' => 217,
            ),
            100 => 
            array (
                'id' => 3602,
                'state_name' => 'Yala',
                'country_id' => 217,
            ),
            101 => 
            array (
                'id' => 3603,
                'state_name' => 'Yasothon',
                'country_id' => 217,
            ),
            102 => 
            array (
                'id' => 3604,
                'state_name' => 'Centre',
                'country_id' => 218,
            ),
            103 => 
            array (
                'id' => 3605,
                'state_name' => 'Kara',
                'country_id' => 218,
            ),
            104 => 
            array (
                'id' => 3606,
                'state_name' => 'Maritime',
                'country_id' => 218,
            ),
            105 => 
            array (
                'id' => 3607,
                'state_name' => 'Plateaux',
                'country_id' => 218,
            ),
            106 => 
            array (
                'id' => 3608,
                'state_name' => 'Savanes',
                'country_id' => 218,
            ),
            107 => 
            array (
                'id' => 3609,
                'state_name' => 'Atafu',
                'country_id' => 219,
            ),
            108 => 
            array (
                'id' => 3610,
                'state_name' => 'Fakaofo',
                'country_id' => 219,
            ),
            109 => 
            array (
                'id' => 3611,
                'state_name' => 'Nukunonu',
                'country_id' => 219,
            ),
            110 => 
            array (
                'id' => 3612,
                'state_name' => 'Eua',
                'country_id' => 220,
            ),
            111 => 
            array (
                'id' => 3613,
                'state_name' => 'Ha\'apai',
                'country_id' => 220,
            ),
            112 => 
            array (
                'id' => 3614,
                'state_name' => 'Niuas',
                'country_id' => 220,
            ),
            113 => 
            array (
                'id' => 3615,
                'state_name' => 'Tongatapu',
                'country_id' => 220,
            ),
            114 => 
            array (
                'id' => 3616,
                'state_name' => 'Vava\'u',
                'country_id' => 220,
            ),
            115 => 
            array (
                'id' => 3617,
                'state_name' => 'Arima-Tunapuna-Piarco',
                'country_id' => 221,
            ),
            116 => 
            array (
                'id' => 3618,
                'state_name' => 'Caroni',
                'country_id' => 221,
            ),
            117 => 
            array (
                'id' => 3619,
                'state_name' => 'Chaguanas',
                'country_id' => 221,
            ),
            118 => 
            array (
                'id' => 3620,
                'state_name' => 'Couva-Tabaquite-Talparo',
                'country_id' => 221,
            ),
            119 => 
            array (
                'id' => 3621,
                'state_name' => 'Diego Martin',
                'country_id' => 221,
            ),
            120 => 
            array (
                'id' => 3622,
                'state_name' => 'Glencoe',
                'country_id' => 221,
            ),
            121 => 
            array (
                'id' => 3623,
                'state_name' => 'Penal Debe',
                'country_id' => 221,
            ),
            122 => 
            array (
                'id' => 3624,
                'state_name' => 'Point Fortin',
                'country_id' => 221,
            ),
            123 => 
            array (
                'id' => 3625,
                'state_name' => 'Port of Spain',
                'country_id' => 221,
            ),
            124 => 
            array (
                'id' => 3626,
                'state_name' => 'Princes Town',
                'country_id' => 221,
            ),
            125 => 
            array (
                'id' => 3627,
                'state_name' => 'Saint George',
                'country_id' => 221,
            ),
            126 => 
            array (
                'id' => 3628,
                'state_name' => 'San Fernando',
                'country_id' => 221,
            ),
            127 => 
            array (
                'id' => 3629,
                'state_name' => 'San Juan',
                'country_id' => 221,
            ),
            128 => 
            array (
                'id' => 3630,
                'state_name' => 'Sangre Grande',
                'country_id' => 221,
            ),
            129 => 
            array (
                'id' => 3631,
                'state_name' => 'Siparia',
                'country_id' => 221,
            ),
            130 => 
            array (
                'id' => 3632,
                'state_name' => 'Tobago',
                'country_id' => 221,
            ),
            131 => 
            array (
                'id' => 3633,
                'state_name' => 'Aryanah',
                'country_id' => 222,
            ),
            132 => 
            array (
                'id' => 3634,
                'state_name' => 'Bajah',
                'country_id' => 222,
            ),
            133 => 
            array (
                'id' => 3635,
                'state_name' => 'Bin \'Arus',
                'country_id' => 222,
            ),
            134 => 
            array (
                'id' => 3636,
                'state_name' => 'Binzart',
                'country_id' => 222,
            ),
            135 => 
            array (
                'id' => 3637,
                'state_name' => 'Gouvernorat de Ariana',
                'country_id' => 222,
            ),
            136 => 
            array (
                'id' => 3638,
                'state_name' => 'Gouvernorat de Nabeul',
                'country_id' => 222,
            ),
            137 => 
            array (
                'id' => 3639,
                'state_name' => 'Gouvernorat de Sousse',
                'country_id' => 222,
            ),
            138 => 
            array (
                'id' => 3640,
                'state_name' => 'Hammamet Yasmine',
                'country_id' => 222,
            ),
            139 => 
            array (
                'id' => 3641,
                'state_name' => 'Jundubah',
                'country_id' => 222,
            ),
            140 => 
            array (
                'id' => 3642,
                'state_name' => 'Madaniyin',
                'country_id' => 222,
            ),
            141 => 
            array (
                'id' => 3643,
                'state_name' => 'Manubah',
                'country_id' => 222,
            ),
            142 => 
            array (
                'id' => 3644,
                'state_name' => 'Monastir',
                'country_id' => 222,
            ),
            143 => 
            array (
                'id' => 3645,
                'state_name' => 'Nabul',
                'country_id' => 222,
            ),
            144 => 
            array (
                'id' => 3646,
                'state_name' => 'Qabis',
                'country_id' => 222,
            ),
            145 => 
            array (
                'id' => 3647,
                'state_name' => 'Qafsah',
                'country_id' => 222,
            ),
            146 => 
            array (
                'id' => 3648,
                'state_name' => 'Qibili',
                'country_id' => 222,
            ),
            147 => 
            array (
                'id' => 3649,
                'state_name' => 'Safaqis',
                'country_id' => 222,
            ),
            148 => 
            array (
                'id' => 3650,
                'state_name' => 'Sfax',
                'country_id' => 222,
            ),
            149 => 
            array (
                'id' => 3651,
                'state_name' => 'Sidi Bu Zayd',
                'country_id' => 222,
            ),
            150 => 
            array (
                'id' => 3652,
                'state_name' => 'Silyanah',
                'country_id' => 222,
            ),
            151 => 
            array (
                'id' => 3653,
                'state_name' => 'Susah',
                'country_id' => 222,
            ),
            152 => 
            array (
                'id' => 3654,
                'state_name' => 'Tatawin',
                'country_id' => 222,
            ),
            153 => 
            array (
                'id' => 3655,
                'state_name' => 'Tawzar',
                'country_id' => 222,
            ),
            154 => 
            array (
                'id' => 3656,
                'state_name' => 'Tunis',
                'country_id' => 222,
            ),
            155 => 
            array (
                'id' => 3657,
                'state_name' => 'Zaghwan',
                'country_id' => 222,
            ),
            156 => 
            array (
                'id' => 3658,
                'state_name' => 'al-Kaf',
                'country_id' => 222,
            ),
            157 => 
            array (
                'id' => 3659,
                'state_name' => 'al-Mahdiyah',
                'country_id' => 222,
            ),
            158 => 
            array (
                'id' => 3660,
                'state_name' => 'al-Munastir',
                'country_id' => 222,
            ),
            159 => 
            array (
                'id' => 3661,
                'state_name' => 'al-Qasrayn',
                'country_id' => 222,
            ),
            160 => 
            array (
                'id' => 3662,
                'state_name' => 'al-Qayrawan',
                'country_id' => 222,
            ),
            161 => 
            array (
                'id' => 3663,
                'state_name' => 'Adana',
                'country_id' => 223,
            ),
            162 => 
            array (
                'id' => 3664,
                'state_name' => 'Adiyaman',
                'country_id' => 223,
            ),
            163 => 
            array (
                'id' => 3665,
                'state_name' => 'Afyon',
                'country_id' => 223,
            ),
            164 => 
            array (
                'id' => 3666,
                'state_name' => 'Agri',
                'country_id' => 223,
            ),
            165 => 
            array (
                'id' => 3667,
                'state_name' => 'Aksaray',
                'country_id' => 223,
            ),
            166 => 
            array (
                'id' => 3668,
                'state_name' => 'Amasya',
                'country_id' => 223,
            ),
            167 => 
            array (
                'id' => 3669,
                'state_name' => 'Ankara',
                'country_id' => 223,
            ),
            168 => 
            array (
                'id' => 3670,
                'state_name' => 'Antalya',
                'country_id' => 223,
            ),
            169 => 
            array (
                'id' => 3671,
                'state_name' => 'Ardahan',
                'country_id' => 223,
            ),
            170 => 
            array (
                'id' => 3672,
                'state_name' => 'Artvin',
                'country_id' => 223,
            ),
            171 => 
            array (
                'id' => 3673,
                'state_name' => 'Aydin',
                'country_id' => 223,
            ),
            172 => 
            array (
                'id' => 3674,
                'state_name' => 'Balikesir',
                'country_id' => 223,
            ),
            173 => 
            array (
                'id' => 3675,
                'state_name' => 'Bartin',
                'country_id' => 223,
            ),
            174 => 
            array (
                'id' => 3676,
                'state_name' => 'Batman',
                'country_id' => 223,
            ),
            175 => 
            array (
                'id' => 3677,
                'state_name' => 'Bayburt',
                'country_id' => 223,
            ),
            176 => 
            array (
                'id' => 3678,
                'state_name' => 'Bilecik',
                'country_id' => 223,
            ),
            177 => 
            array (
                'id' => 3679,
                'state_name' => 'Bingol',
                'country_id' => 223,
            ),
            178 => 
            array (
                'id' => 3680,
                'state_name' => 'Bitlis',
                'country_id' => 223,
            ),
            179 => 
            array (
                'id' => 3681,
                'state_name' => 'Bolu',
                'country_id' => 223,
            ),
            180 => 
            array (
                'id' => 3682,
                'state_name' => 'Burdur',
                'country_id' => 223,
            ),
            181 => 
            array (
                'id' => 3683,
                'state_name' => 'Bursa',
                'country_id' => 223,
            ),
            182 => 
            array (
                'id' => 3684,
                'state_name' => 'Canakkale',
                'country_id' => 223,
            ),
            183 => 
            array (
                'id' => 3685,
                'state_name' => 'Cankiri',
                'country_id' => 223,
            ),
            184 => 
            array (
                'id' => 3686,
                'state_name' => 'Corum',
                'country_id' => 223,
            ),
            185 => 
            array (
                'id' => 3687,
                'state_name' => 'Denizli',
                'country_id' => 223,
            ),
            186 => 
            array (
                'id' => 3688,
                'state_name' => 'Diyarbakir',
                'country_id' => 223,
            ),
            187 => 
            array (
                'id' => 3689,
                'state_name' => 'Duzce',
                'country_id' => 223,
            ),
            188 => 
            array (
                'id' => 3690,
                'state_name' => 'Edirne',
                'country_id' => 223,
            ),
            189 => 
            array (
                'id' => 3691,
                'state_name' => 'Elazig',
                'country_id' => 223,
            ),
            190 => 
            array (
                'id' => 3692,
                'state_name' => 'Erzincan',
                'country_id' => 223,
            ),
            191 => 
            array (
                'id' => 3693,
                'state_name' => 'Erzurum',
                'country_id' => 223,
            ),
            192 => 
            array (
                'id' => 3694,
                'state_name' => 'Eskisehir',
                'country_id' => 223,
            ),
            193 => 
            array (
                'id' => 3695,
                'state_name' => 'Gaziantep',
                'country_id' => 223,
            ),
            194 => 
            array (
                'id' => 3696,
                'state_name' => 'Giresun',
                'country_id' => 223,
            ),
            195 => 
            array (
                'id' => 3697,
                'state_name' => 'Gumushane',
                'country_id' => 223,
            ),
            196 => 
            array (
                'id' => 3698,
                'state_name' => 'Hakkari',
                'country_id' => 223,
            ),
            197 => 
            array (
                'id' => 3699,
                'state_name' => 'Hatay',
                'country_id' => 223,
            ),
            198 => 
            array (
                'id' => 3700,
                'state_name' => 'Icel',
                'country_id' => 223,
            ),
            199 => 
            array (
                'id' => 3701,
                'state_name' => 'Igdir',
                'country_id' => 223,
            ),
            200 => 
            array (
                'id' => 3702,
                'state_name' => 'Isparta',
                'country_id' => 223,
            ),
            201 => 
            array (
                'id' => 3703,
                'state_name' => 'Istanbul',
                'country_id' => 223,
            ),
            202 => 
            array (
                'id' => 3704,
                'state_name' => 'Izmir',
                'country_id' => 223,
            ),
            203 => 
            array (
                'id' => 3705,
                'state_name' => 'Kahramanmaras',
                'country_id' => 223,
            ),
            204 => 
            array (
                'id' => 3706,
                'state_name' => 'Karabuk',
                'country_id' => 223,
            ),
            205 => 
            array (
                'id' => 3707,
                'state_name' => 'Karaman',
                'country_id' => 223,
            ),
            206 => 
            array (
                'id' => 3708,
                'state_name' => 'Kars',
                'country_id' => 223,
            ),
            207 => 
            array (
                'id' => 3709,
                'state_name' => 'Karsiyaka',
                'country_id' => 223,
            ),
            208 => 
            array (
                'id' => 3710,
                'state_name' => 'Kastamonu',
                'country_id' => 223,
            ),
            209 => 
            array (
                'id' => 3711,
                'state_name' => 'Kayseri',
                'country_id' => 223,
            ),
            210 => 
            array (
                'id' => 3712,
                'state_name' => 'Kilis',
                'country_id' => 223,
            ),
            211 => 
            array (
                'id' => 3713,
                'state_name' => 'Kirikkale',
                'country_id' => 223,
            ),
            212 => 
            array (
                'id' => 3714,
                'state_name' => 'Kirklareli',
                'country_id' => 223,
            ),
            213 => 
            array (
                'id' => 3715,
                'state_name' => 'Kirsehir',
                'country_id' => 223,
            ),
            214 => 
            array (
                'id' => 3716,
                'state_name' => 'Kocaeli',
                'country_id' => 223,
            ),
            215 => 
            array (
                'id' => 3717,
                'state_name' => 'Konya',
                'country_id' => 223,
            ),
            216 => 
            array (
                'id' => 3718,
                'state_name' => 'Kutahya',
                'country_id' => 223,
            ),
            217 => 
            array (
                'id' => 3719,
                'state_name' => 'Lefkosa',
                'country_id' => 223,
            ),
            218 => 
            array (
                'id' => 3720,
                'state_name' => 'Malatya',
                'country_id' => 223,
            ),
            219 => 
            array (
                'id' => 3721,
                'state_name' => 'Manisa',
                'country_id' => 223,
            ),
            220 => 
            array (
                'id' => 3722,
                'state_name' => 'Mardin',
                'country_id' => 223,
            ),
            221 => 
            array (
                'id' => 3723,
                'state_name' => 'Mugla',
                'country_id' => 223,
            ),
            222 => 
            array (
                'id' => 3724,
                'state_name' => 'Mus',
                'country_id' => 223,
            ),
            223 => 
            array (
                'id' => 3725,
                'state_name' => 'Nevsehir',
                'country_id' => 223,
            ),
            224 => 
            array (
                'id' => 3726,
                'state_name' => 'Nigde',
                'country_id' => 223,
            ),
            225 => 
            array (
                'id' => 3727,
                'state_name' => 'Ordu',
                'country_id' => 223,
            ),
            226 => 
            array (
                'id' => 3728,
                'state_name' => 'Osmaniye',
                'country_id' => 223,
            ),
            227 => 
            array (
                'id' => 3729,
                'state_name' => 'Rize',
                'country_id' => 223,
            ),
            228 => 
            array (
                'id' => 3730,
                'state_name' => 'Sakarya',
                'country_id' => 223,
            ),
            229 => 
            array (
                'id' => 3731,
                'state_name' => 'Samsun',
                'country_id' => 223,
            ),
            230 => 
            array (
                'id' => 3732,
                'state_name' => 'Sanliurfa',
                'country_id' => 223,
            ),
            231 => 
            array (
                'id' => 3733,
                'state_name' => 'Siirt',
                'country_id' => 223,
            ),
            232 => 
            array (
                'id' => 3734,
                'state_name' => 'Sinop',
                'country_id' => 223,
            ),
            233 => 
            array (
                'id' => 3735,
                'state_name' => 'Sirnak',
                'country_id' => 223,
            ),
            234 => 
            array (
                'id' => 3736,
                'state_name' => 'Sivas',
                'country_id' => 223,
            ),
            235 => 
            array (
                'id' => 3737,
                'state_name' => 'Tekirdag',
                'country_id' => 223,
            ),
            236 => 
            array (
                'id' => 3738,
                'state_name' => 'Tokat',
                'country_id' => 223,
            ),
            237 => 
            array (
                'id' => 3739,
                'state_name' => 'Trabzon',
                'country_id' => 223,
            ),
            238 => 
            array (
                'id' => 3740,
                'state_name' => 'Tunceli',
                'country_id' => 223,
            ),
            239 => 
            array (
                'id' => 3741,
                'state_name' => 'Usak',
                'country_id' => 223,
            ),
            240 => 
            array (
                'id' => 3742,
                'state_name' => 'Van',
                'country_id' => 223,
            ),
            241 => 
            array (
                'id' => 3743,
                'state_name' => 'Yalova',
                'country_id' => 223,
            ),
            242 => 
            array (
                'id' => 3744,
                'state_name' => 'Yozgat',
                'country_id' => 223,
            ),
            243 => 
            array (
                'id' => 3745,
                'state_name' => 'Zonguldak',
                'country_id' => 223,
            ),
            244 => 
            array (
                'id' => 3746,
                'state_name' => 'Ahal',
                'country_id' => 224,
            ),
            245 => 
            array (
                'id' => 3747,
                'state_name' => 'Asgabat',
                'country_id' => 224,
            ),
            246 => 
            array (
                'id' => 3748,
                'state_name' => 'Balkan',
                'country_id' => 224,
            ),
            247 => 
            array (
                'id' => 3749,
                'state_name' => 'Dasoguz',
                'country_id' => 224,
            ),
            248 => 
            array (
                'id' => 3750,
                'state_name' => 'Lebap',
                'country_id' => 224,
            ),
            249 => 
            array (
                'id' => 3751,
                'state_name' => 'Mari',
                'country_id' => 224,
            ),
            250 => 
            array (
                'id' => 3752,
                'state_name' => 'Grand Turk',
                'country_id' => 225,
            ),
            251 => 
            array (
                'id' => 3753,
                'state_name' => 'South Caicos and East Caicos',
                'country_id' => 225,
            ),
            252 => 
            array (
                'id' => 3754,
                'state_name' => 'Funafuti',
                'country_id' => 226,
            ),
            253 => 
            array (
                'id' => 3755,
                'state_name' => 'Nanumanga',
                'country_id' => 226,
            ),
            254 => 
            array (
                'id' => 3756,
                'state_name' => 'Nanumea',
                'country_id' => 226,
            ),
            255 => 
            array (
                'id' => 3757,
                'state_name' => 'Niutao',
                'country_id' => 226,
            ),
            256 => 
            array (
                'id' => 3758,
                'state_name' => 'Nui',
                'country_id' => 226,
            ),
            257 => 
            array (
                'id' => 3759,
                'state_name' => 'Nukufetau',
                'country_id' => 226,
            ),
            258 => 
            array (
                'id' => 3760,
                'state_name' => 'Nukulaelae',
                'country_id' => 226,
            ),
            259 => 
            array (
                'id' => 3761,
                'state_name' => 'Vaitupu',
                'country_id' => 226,
            ),
            260 => 
            array (
                'id' => 3762,
                'state_name' => 'Central',
                'country_id' => 227,
            ),
            261 => 
            array (
                'id' => 3763,
                'state_name' => 'Eastern',
                'country_id' => 227,
            ),
            262 => 
            array (
                'id' => 3764,
                'state_name' => 'Northern',
                'country_id' => 227,
            ),
            263 => 
            array (
                'id' => 3765,
                'state_name' => 'Western',
                'country_id' => 227,
            ),
            264 => 
            array (
                'id' => 3766,
                'state_name' => 'Cherkas\'ka',
                'country_id' => 228,
            ),
            265 => 
            array (
                'id' => 3767,
                'state_name' => 'Chernihivs\'ka',
                'country_id' => 228,
            ),
            266 => 
            array (
                'id' => 3768,
                'state_name' => 'Chernivets\'ka',
                'country_id' => 228,
            ),
            267 => 
            array (
                'id' => 3769,
                'state_name' => 'Crimea',
                'country_id' => 228,
            ),
            268 => 
            array (
                'id' => 3770,
                'state_name' => 'Dnipropetrovska',
                'country_id' => 228,
            ),
            269 => 
            array (
                'id' => 3771,
                'state_name' => 'Donets\'ka',
                'country_id' => 228,
            ),
            270 => 
            array (
                'id' => 3772,
                'state_name' => 'Ivano-Frankivs\'ka',
                'country_id' => 228,
            ),
            271 => 
            array (
                'id' => 3773,
                'state_name' => 'Kharkiv',
                'country_id' => 228,
            ),
            272 => 
            array (
                'id' => 3774,
                'state_name' => 'Kharkov',
                'country_id' => 228,
            ),
            273 => 
            array (
                'id' => 3775,
                'state_name' => 'Khersonska',
                'country_id' => 228,
            ),
            274 => 
            array (
                'id' => 3776,
                'state_name' => 'Khmel\'nyts\'ka',
                'country_id' => 228,
            ),
            275 => 
            array (
                'id' => 3777,
                'state_name' => 'Kirovohrad',
                'country_id' => 228,
            ),
            276 => 
            array (
                'id' => 3778,
                'state_name' => 'Krym',
                'country_id' => 228,
            ),
            277 => 
            array (
                'id' => 3779,
                'state_name' => 'Kyyiv',
                'country_id' => 228,
            ),
            278 => 
            array (
                'id' => 3780,
                'state_name' => 'Kyyivs\'ka',
                'country_id' => 228,
            ),
            279 => 
            array (
                'id' => 3781,
                'state_name' => 'L\'vivs\'ka',
                'country_id' => 228,
            ),
            280 => 
            array (
                'id' => 3782,
                'state_name' => 'Luhans\'ka',
                'country_id' => 228,
            ),
            281 => 
            array (
                'id' => 3783,
                'state_name' => 'Mykolayivs\'ka',
                'country_id' => 228,
            ),
            282 => 
            array (
                'id' => 3784,
                'state_name' => 'Odes\'ka',
                'country_id' => 228,
            ),
            283 => 
            array (
                'id' => 3785,
                'state_name' => 'Odessa',
                'country_id' => 228,
            ),
            284 => 
            array (
                'id' => 3786,
                'state_name' => 'Poltavs\'ka',
                'country_id' => 228,
            ),
            285 => 
            array (
                'id' => 3787,
                'state_name' => 'Rivnens\'ka',
                'country_id' => 228,
            ),
            286 => 
            array (
                'id' => 3788,
                'state_name' => 'Sevastopol\'',
                'country_id' => 228,
            ),
            287 => 
            array (
                'id' => 3789,
                'state_name' => 'Sums\'ka',
                'country_id' => 228,
            ),
            288 => 
            array (
                'id' => 3790,
                'state_name' => 'Ternopil\'s\'ka',
                'country_id' => 228,
            ),
            289 => 
            array (
                'id' => 3791,
                'state_name' => 'Volyns\'ka',
                'country_id' => 228,
            ),
            290 => 
            array (
                'id' => 3792,
                'state_name' => 'Vynnyts\'ka',
                'country_id' => 228,
            ),
            291 => 
            array (
                'id' => 3793,
                'state_name' => 'Zakarpats\'ka',
                'country_id' => 228,
            ),
            292 => 
            array (
                'id' => 3794,
                'state_name' => 'Zaporizhia',
                'country_id' => 228,
            ),
            293 => 
            array (
                'id' => 3795,
                'state_name' => 'Zhytomyrs\'ka',
                'country_id' => 228,
            ),
            294 => 
            array (
                'id' => 3796,
                'state_name' => 'Abu Zabi',
                'country_id' => 229,
            ),
            295 => 
            array (
                'id' => 3797,
                'state_name' => 'Ajman',
                'country_id' => 229,
            ),
            296 => 
            array (
                'id' => 3798,
                'state_name' => 'Dubai',
                'country_id' => 229,
            ),
            297 => 
            array (
                'id' => 3799,
                'state_name' => 'Ras al-Khaymah',
                'country_id' => 229,
            ),
            298 => 
            array (
                'id' => 3800,
                'state_name' => 'Sharjah',
                'country_id' => 229,
            ),
            299 => 
            array (
                'id' => 3801,
                'state_name' => 'Sharjha',
                'country_id' => 229,
            ),
            300 => 
            array (
                'id' => 3802,
                'state_name' => 'Umm al Qaywayn',
                'country_id' => 229,
            ),
            301 => 
            array (
                'id' => 3803,
                'state_name' => 'al-Fujayrah',
                'country_id' => 229,
            ),
            302 => 
            array (
                'id' => 3804,
                'state_name' => 'ash-Shariqah',
                'country_id' => 229,
            ),
            303 => 
            array (
                'id' => 3805,
                'state_name' => 'Aberdeen',
                'country_id' => 230,
            ),
            304 => 
            array (
                'id' => 3806,
                'state_name' => 'Aberdeenshire',
                'country_id' => 230,
            ),
            305 => 
            array (
                'id' => 3807,
                'state_name' => 'Argyll',
                'country_id' => 230,
            ),
            306 => 
            array (
                'id' => 3808,
                'state_name' => 'Armagh',
                'country_id' => 230,
            ),
            307 => 
            array (
                'id' => 3809,
                'state_name' => 'Bedfordshire',
                'country_id' => 230,
            ),
            308 => 
            array (
                'id' => 3810,
                'state_name' => 'Belfast',
                'country_id' => 230,
            ),
            309 => 
            array (
                'id' => 3811,
                'state_name' => 'Berkshire',
                'country_id' => 230,
            ),
            310 => 
            array (
                'id' => 3812,
                'state_name' => 'Birmingham',
                'country_id' => 230,
            ),
            311 => 
            array (
                'id' => 3813,
                'state_name' => 'Brechin',
                'country_id' => 230,
            ),
            312 => 
            array (
                'id' => 3814,
                'state_name' => 'Bridgnorth',
                'country_id' => 230,
            ),
            313 => 
            array (
                'id' => 3815,
                'state_name' => 'Bristol',
                'country_id' => 230,
            ),
            314 => 
            array (
                'id' => 3816,
                'state_name' => 'Buckinghamshire',
                'country_id' => 230,
            ),
            315 => 
            array (
                'id' => 3817,
                'state_name' => 'Cambridge',
                'country_id' => 230,
            ),
            316 => 
            array (
                'id' => 3818,
                'state_name' => 'Cambridgeshire',
                'country_id' => 230,
            ),
            317 => 
            array (
                'id' => 3819,
                'state_name' => 'Channel Islands',
                'country_id' => 230,
            ),
            318 => 
            array (
                'id' => 3820,
                'state_name' => 'Cheshire',
                'country_id' => 230,
            ),
            319 => 
            array (
                'id' => 3821,
                'state_name' => 'Cleveland',
                'country_id' => 230,
            ),
            320 => 
            array (
                'id' => 3822,
                'state_name' => 'Co Fermanagh',
                'country_id' => 230,
            ),
            321 => 
            array (
                'id' => 3823,
                'state_name' => 'Conwy',
                'country_id' => 230,
            ),
            322 => 
            array (
                'id' => 3824,
                'state_name' => 'Cornwall',
                'country_id' => 230,
            ),
            323 => 
            array (
                'id' => 3825,
                'state_name' => 'Coventry',
                'country_id' => 230,
            ),
            324 => 
            array (
                'id' => 3826,
                'state_name' => 'Craven Arms',
                'country_id' => 230,
            ),
            325 => 
            array (
                'id' => 3827,
                'state_name' => 'Cumbria',
                'country_id' => 230,
            ),
            326 => 
            array (
                'id' => 3828,
                'state_name' => 'Denbighshire',
                'country_id' => 230,
            ),
            327 => 
            array (
                'id' => 3829,
                'state_name' => 'Derby',
                'country_id' => 230,
            ),
            328 => 
            array (
                'id' => 3830,
                'state_name' => 'Derbyshire',
                'country_id' => 230,
            ),
            329 => 
            array (
                'id' => 3831,
                'state_name' => 'Devon',
                'country_id' => 230,
            ),
            330 => 
            array (
                'id' => 3832,
                'state_name' => 'Dial Code Dungannon',
                'country_id' => 230,
            ),
            331 => 
            array (
                'id' => 3833,
                'state_name' => 'Didcot',
                'country_id' => 230,
            ),
            332 => 
            array (
                'id' => 3834,
                'state_name' => 'Dorset',
                'country_id' => 230,
            ),
            333 => 
            array (
                'id' => 3835,
                'state_name' => 'Dunbartonshire',
                'country_id' => 230,
            ),
            334 => 
            array (
                'id' => 3836,
                'state_name' => 'Durham',
                'country_id' => 230,
            ),
            335 => 
            array (
                'id' => 3837,
                'state_name' => 'East Dunbartonshire',
                'country_id' => 230,
            ),
            336 => 
            array (
                'id' => 3838,
                'state_name' => 'East Lothian',
                'country_id' => 230,
            ),
            337 => 
            array (
                'id' => 3839,
                'state_name' => 'East Midlands',
                'country_id' => 230,
            ),
            338 => 
            array (
                'id' => 3840,
                'state_name' => 'East Sussex',
                'country_id' => 230,
            ),
            339 => 
            array (
                'id' => 3841,
                'state_name' => 'East Yorkshire',
                'country_id' => 230,
            ),
            340 => 
            array (
                'id' => 3842,
                'state_name' => 'England',
                'country_id' => 230,
            ),
            341 => 
            array (
                'id' => 3843,
                'state_name' => 'Essex',
                'country_id' => 230,
            ),
            342 => 
            array (
                'id' => 3844,
                'state_name' => 'Fermanagh',
                'country_id' => 230,
            ),
            343 => 
            array (
                'id' => 3845,
                'state_name' => 'Fife',
                'country_id' => 230,
            ),
            344 => 
            array (
                'id' => 3846,
                'state_name' => 'Flintshire',
                'country_id' => 230,
            ),
            345 => 
            array (
                'id' => 3847,
                'state_name' => 'Fulham',
                'country_id' => 230,
            ),
            346 => 
            array (
                'id' => 3848,
                'state_name' => 'Gainsborough',
                'country_id' => 230,
            ),
            347 => 
            array (
                'id' => 3849,
                'state_name' => 'Glocestershire',
                'country_id' => 230,
            ),
            348 => 
            array (
                'id' => 3850,
                'state_name' => 'Gwent',
                'country_id' => 230,
            ),
            349 => 
            array (
                'id' => 3851,
                'state_name' => 'Hampshire',
                'country_id' => 230,
            ),
            350 => 
            array (
                'id' => 3852,
                'state_name' => 'Hants',
                'country_id' => 230,
            ),
            351 => 
            array (
                'id' => 3853,
                'state_name' => 'Herefordshire',
                'country_id' => 230,
            ),
            352 => 
            array (
                'id' => 3854,
                'state_name' => 'Hertfordshire',
                'country_id' => 230,
            ),
            353 => 
            array (
                'id' => 3855,
                'state_name' => 'Ireland',
                'country_id' => 230,
            ),
            354 => 
            array (
                'id' => 3856,
                'state_name' => 'Isle Of Man',
                'country_id' => 230,
            ),
            355 => 
            array (
                'id' => 3857,
                'state_name' => 'Isle of Wight',
                'country_id' => 230,
            ),
            356 => 
            array (
                'id' => 3858,
                'state_name' => 'Kenford',
                'country_id' => 230,
            ),
            357 => 
            array (
                'id' => 3859,
                'state_name' => 'Kent',
                'country_id' => 230,
            ),
            358 => 
            array (
                'id' => 3860,
                'state_name' => 'Kilmarnock',
                'country_id' => 230,
            ),
            359 => 
            array (
                'id' => 3861,
                'state_name' => 'Lanarkshire',
                'country_id' => 230,
            ),
            360 => 
            array (
                'id' => 3862,
                'state_name' => 'Lancashire',
                'country_id' => 230,
            ),
            361 => 
            array (
                'id' => 3863,
                'state_name' => 'Leicestershire',
                'country_id' => 230,
            ),
            362 => 
            array (
                'id' => 3864,
                'state_name' => 'Lincolnshire',
                'country_id' => 230,
            ),
            363 => 
            array (
                'id' => 3865,
                'state_name' => 'Llanymynech',
                'country_id' => 230,
            ),
            364 => 
            array (
                'id' => 3866,
                'state_name' => 'London',
                'country_id' => 230,
            ),
            365 => 
            array (
                'id' => 3867,
                'state_name' => 'Ludlow',
                'country_id' => 230,
            ),
            366 => 
            array (
                'id' => 3868,
                'state_name' => 'Manchester',
                'country_id' => 230,
            ),
            367 => 
            array (
                'id' => 3869,
                'state_name' => 'Mayfair',
                'country_id' => 230,
            ),
            368 => 
            array (
                'id' => 3870,
                'state_name' => 'Merseyside',
                'country_id' => 230,
            ),
            369 => 
            array (
                'id' => 3871,
                'state_name' => 'Mid Glamorgan',
                'country_id' => 230,
            ),
            370 => 
            array (
                'id' => 3872,
                'state_name' => 'Middlesex',
                'country_id' => 230,
            ),
            371 => 
            array (
                'id' => 3873,
                'state_name' => 'Mildenhall',
                'country_id' => 230,
            ),
            372 => 
            array (
                'id' => 3874,
                'state_name' => 'Monmouthshire',
                'country_id' => 230,
            ),
            373 => 
            array (
                'id' => 3875,
                'state_name' => 'Newton Stewart',
                'country_id' => 230,
            ),
            374 => 
            array (
                'id' => 3876,
                'state_name' => 'Norfolk',
                'country_id' => 230,
            ),
            375 => 
            array (
                'id' => 3877,
                'state_name' => 'North Humberside',
                'country_id' => 230,
            ),
            376 => 
            array (
                'id' => 3878,
                'state_name' => 'North Yorkshire',
                'country_id' => 230,
            ),
            377 => 
            array (
                'id' => 3879,
                'state_name' => 'Northamptonshire',
                'country_id' => 230,
            ),
            378 => 
            array (
                'id' => 3880,
                'state_name' => 'Northants',
                'country_id' => 230,
            ),
            379 => 
            array (
                'id' => 3881,
                'state_name' => 'Northern Ireland',
                'country_id' => 230,
            ),
            380 => 
            array (
                'id' => 3882,
                'state_name' => 'Northumberland',
                'country_id' => 230,
            ),
            381 => 
            array (
                'id' => 3883,
                'state_name' => 'Nottinghamshire',
                'country_id' => 230,
            ),
            382 => 
            array (
                'id' => 3884,
                'state_name' => 'Oxford',
                'country_id' => 230,
            ),
            383 => 
            array (
                'id' => 3885,
                'state_name' => 'Powys',
                'country_id' => 230,
            ),
            384 => 
            array (
                'id' => 3886,
                'state_name' => 'Roos-shire',
                'country_id' => 230,
            ),
            385 => 
            array (
                'id' => 3887,
                'state_name' => 'SUSSEX',
                'country_id' => 230,
            ),
            386 => 
            array (
                'id' => 3888,
                'state_name' => 'Sark',
                'country_id' => 230,
            ),
            387 => 
            array (
                'id' => 3889,
                'state_name' => 'Scotland',
                'country_id' => 230,
            ),
            388 => 
            array (
                'id' => 3890,
                'state_name' => 'Scottish Borders',
                'country_id' => 230,
            ),
            389 => 
            array (
                'id' => 3891,
                'state_name' => 'Shropshire',
                'country_id' => 230,
            ),
            390 => 
            array (
                'id' => 3892,
                'state_name' => 'Somerset',
                'country_id' => 230,
            ),
            391 => 
            array (
                'id' => 3893,
                'state_name' => 'South Glamorgan',
                'country_id' => 230,
            ),
            392 => 
            array (
                'id' => 3894,
                'state_name' => 'South Wales',
                'country_id' => 230,
            ),
            393 => 
            array (
                'id' => 3895,
                'state_name' => 'South Yorkshire',
                'country_id' => 230,
            ),
            394 => 
            array (
                'id' => 3896,
                'state_name' => 'Southwell',
                'country_id' => 230,
            ),
            395 => 
            array (
                'id' => 3897,
                'state_name' => 'Staffordshire',
                'country_id' => 230,
            ),
            396 => 
            array (
                'id' => 3898,
                'state_name' => 'Strabane',
                'country_id' => 230,
            ),
            397 => 
            array (
                'id' => 3899,
                'state_name' => 'Suffolk',
                'country_id' => 230,
            ),
            398 => 
            array (
                'id' => 3900,
                'state_name' => 'Surrey',
                'country_id' => 230,
            ),
            399 => 
            array (
                'id' => 3901,
                'state_name' => 'Sussex',
                'country_id' => 230,
            ),
            400 => 
            array (
                'id' => 3902,
                'state_name' => 'Twickenham',
                'country_id' => 230,
            ),
            401 => 
            array (
                'id' => 3903,
                'state_name' => 'Tyne and Wear',
                'country_id' => 230,
            ),
            402 => 
            array (
                'id' => 3904,
                'state_name' => 'Tyrone',
                'country_id' => 230,
            ),
            403 => 
            array (
                'id' => 3905,
                'state_name' => 'Utah',
                'country_id' => 230,
            ),
            404 => 
            array (
                'id' => 3906,
                'state_name' => 'Wales',
                'country_id' => 230,
            ),
            405 => 
            array (
                'id' => 3907,
                'state_name' => 'Warwickshire',
                'country_id' => 230,
            ),
            406 => 
            array (
                'id' => 3908,
                'state_name' => 'West Lothian',
                'country_id' => 230,
            ),
            407 => 
            array (
                'id' => 3909,
                'state_name' => 'West Midlands',
                'country_id' => 230,
            ),
            408 => 
            array (
                'id' => 3910,
                'state_name' => 'West Sussex',
                'country_id' => 230,
            ),
            409 => 
            array (
                'id' => 3911,
                'state_name' => 'West Yorkshire',
                'country_id' => 230,
            ),
            410 => 
            array (
                'id' => 3912,
                'state_name' => 'Whissendine',
                'country_id' => 230,
            ),
            411 => 
            array (
                'id' => 3913,
                'state_name' => 'Wiltshire',
                'country_id' => 230,
            ),
            412 => 
            array (
                'id' => 3914,
                'state_name' => 'Wokingham',
                'country_id' => 230,
            ),
            413 => 
            array (
                'id' => 3915,
                'state_name' => 'Worcestershire',
                'country_id' => 230,
            ),
            414 => 
            array (
                'id' => 3916,
                'state_name' => 'Wrexham',
                'country_id' => 230,
            ),
            415 => 
            array (
                'id' => 3917,
                'state_name' => 'Wurttemberg',
                'country_id' => 230,
            ),
            416 => 
            array (
                'id' => 3918,
                'state_name' => 'Yorkshire',
                'country_id' => 230,
            ),
            417 => 
            array (
                'id' => 3919,
                'state_name' => 'Alabama',
                'country_id' => 231,
            ),
            418 => 
            array (
                'id' => 3920,
                'state_name' => 'Alaska',
                'country_id' => 231,
            ),
            419 => 
            array (
                'id' => 3921,
                'state_name' => 'Arizona',
                'country_id' => 231,
            ),
            420 => 
            array (
                'id' => 3922,
                'state_name' => 'Arkansas',
                'country_id' => 231,
            ),
            421 => 
            array (
                'id' => 3923,
                'state_name' => 'Byram',
                'country_id' => 231,
            ),
            422 => 
            array (
                'id' => 3924,
                'state_name' => 'California',
                'country_id' => 231,
            ),
            423 => 
            array (
                'id' => 3925,
                'state_name' => 'Cokato',
                'country_id' => 231,
            ),
            424 => 
            array (
                'id' => 3926,
                'state_name' => 'Colorado',
                'country_id' => 231,
            ),
            425 => 
            array (
                'id' => 3927,
                'state_name' => 'Connecticut',
                'country_id' => 231,
            ),
            426 => 
            array (
                'id' => 3928,
                'state_name' => 'Delaware',
                'country_id' => 231,
            ),
            427 => 
            array (
                'id' => 3929,
                'state_name' => 'District of Columbia',
                'country_id' => 231,
            ),
            428 => 
            array (
                'id' => 3930,
                'state_name' => 'Florida',
                'country_id' => 231,
            ),
            429 => 
            array (
                'id' => 3931,
                'state_name' => 'Georgia',
                'country_id' => 231,
            ),
            430 => 
            array (
                'id' => 3932,
                'state_name' => 'Hawaii',
                'country_id' => 231,
            ),
            431 => 
            array (
                'id' => 3933,
                'state_name' => 'Idaho',
                'country_id' => 231,
            ),
            432 => 
            array (
                'id' => 3934,
                'state_name' => 'Illinois',
                'country_id' => 231,
            ),
            433 => 
            array (
                'id' => 3935,
                'state_name' => 'Indiana',
                'country_id' => 231,
            ),
            434 => 
            array (
                'id' => 3936,
                'state_name' => 'Iowa',
                'country_id' => 231,
            ),
            435 => 
            array (
                'id' => 3937,
                'state_name' => 'Kansas',
                'country_id' => 231,
            ),
            436 => 
            array (
                'id' => 3938,
                'state_name' => 'Kentucky',
                'country_id' => 231,
            ),
            437 => 
            array (
                'id' => 3939,
                'state_name' => 'Louisiana',
                'country_id' => 231,
            ),
            438 => 
            array (
                'id' => 3940,
                'state_name' => 'Lowa',
                'country_id' => 231,
            ),
            439 => 
            array (
                'id' => 3941,
                'state_name' => 'Maine',
                'country_id' => 231,
            ),
            440 => 
            array (
                'id' => 3942,
                'state_name' => 'Maryland',
                'country_id' => 231,
            ),
            441 => 
            array (
                'id' => 3943,
                'state_name' => 'Massachusetts',
                'country_id' => 231,
            ),
            442 => 
            array (
                'id' => 3944,
                'state_name' => 'Medfield',
                'country_id' => 231,
            ),
            443 => 
            array (
                'id' => 3945,
                'state_name' => 'Michigan',
                'country_id' => 231,
            ),
            444 => 
            array (
                'id' => 3946,
                'state_name' => 'Minnesota',
                'country_id' => 231,
            ),
            445 => 
            array (
                'id' => 3947,
                'state_name' => 'Mississippi',
                'country_id' => 231,
            ),
            446 => 
            array (
                'id' => 3948,
                'state_name' => 'Missouri',
                'country_id' => 231,
            ),
            447 => 
            array (
                'id' => 3949,
                'state_name' => 'Montana',
                'country_id' => 231,
            ),
            448 => 
            array (
                'id' => 3950,
                'state_name' => 'Nebraska',
                'country_id' => 231,
            ),
            449 => 
            array (
                'id' => 3951,
                'state_name' => 'Nevada',
                'country_id' => 231,
            ),
            450 => 
            array (
                'id' => 3952,
                'state_name' => 'New Hampshire',
                'country_id' => 231,
            ),
            451 => 
            array (
                'id' => 3953,
                'state_name' => 'New Jersey',
                'country_id' => 231,
            ),
            452 => 
            array (
                'id' => 3954,
                'state_name' => 'New Jersy',
                'country_id' => 231,
            ),
            453 => 
            array (
                'id' => 3955,
                'state_name' => 'New Mexico',
                'country_id' => 231,
            ),
            454 => 
            array (
                'id' => 3956,
                'state_name' => 'New York',
                'country_id' => 231,
            ),
            455 => 
            array (
                'id' => 3957,
                'state_name' => 'North Carolina',
                'country_id' => 231,
            ),
            456 => 
            array (
                'id' => 3958,
                'state_name' => 'North Dakota',
                'country_id' => 231,
            ),
            457 => 
            array (
                'id' => 3959,
                'state_name' => 'Ohio',
                'country_id' => 231,
            ),
            458 => 
            array (
                'id' => 3960,
                'state_name' => 'Oklahoma',
                'country_id' => 231,
            ),
            459 => 
            array (
                'id' => 3961,
                'state_name' => 'Ontario',
                'country_id' => 231,
            ),
            460 => 
            array (
                'id' => 3962,
                'state_name' => 'Oregon',
                'country_id' => 231,
            ),
            461 => 
            array (
                'id' => 3963,
                'state_name' => 'Pennsylvania',
                'country_id' => 231,
            ),
            462 => 
            array (
                'id' => 3964,
                'state_name' => 'Ramey',
                'country_id' => 231,
            ),
            463 => 
            array (
                'id' => 3965,
                'state_name' => 'Rhode Island',
                'country_id' => 231,
            ),
            464 => 
            array (
                'id' => 3966,
                'state_name' => 'South Carolina',
                'country_id' => 231,
            ),
            465 => 
            array (
                'id' => 3967,
                'state_name' => 'South Dakota',
                'country_id' => 231,
            ),
            466 => 
            array (
                'id' => 3968,
                'state_name' => 'Sublimity',
                'country_id' => 231,
            ),
            467 => 
            array (
                'id' => 3969,
                'state_name' => 'Tennessee',
                'country_id' => 231,
            ),
            468 => 
            array (
                'id' => 3970,
                'state_name' => 'Texas',
                'country_id' => 231,
            ),
            469 => 
            array (
                'id' => 3971,
                'state_name' => 'Trimble',
                'country_id' => 231,
            ),
            470 => 
            array (
                'id' => 3972,
                'state_name' => 'Utah',
                'country_id' => 231,
            ),
            471 => 
            array (
                'id' => 3973,
                'state_name' => 'Vermont',
                'country_id' => 231,
            ),
            472 => 
            array (
                'id' => 3974,
                'state_name' => 'Virginia',
                'country_id' => 231,
            ),
            473 => 
            array (
                'id' => 3975,
                'state_name' => 'Washington',
                'country_id' => 231,
            ),
            474 => 
            array (
                'id' => 3976,
                'state_name' => 'West Virginia',
                'country_id' => 231,
            ),
            475 => 
            array (
                'id' => 3977,
                'state_name' => 'Wisconsin',
                'country_id' => 231,
            ),
            476 => 
            array (
                'id' => 3978,
                'state_name' => 'Wyoming',
                'country_id' => 231,
            ),
            477 => 
            array (
                'id' => 3979,
                'state_name' => 'United States Minor Outlying I',
                'country_id' => 232,
            ),
            478 => 
            array (
                'id' => 3980,
                'state_name' => 'Artigas',
                'country_id' => 233,
            ),
            479 => 
            array (
                'id' => 3981,
                'state_name' => 'Canelones',
                'country_id' => 233,
            ),
            480 => 
            array (
                'id' => 3982,
                'state_name' => 'Cerro Largo',
                'country_id' => 233,
            ),
            481 => 
            array (
                'id' => 3983,
                'state_name' => 'Colonia',
                'country_id' => 233,
            ),
            482 => 
            array (
                'id' => 3984,
                'state_name' => 'Durazno',
                'country_id' => 233,
            ),
            483 => 
            array (
                'id' => 3985,
                'state_name' => 'FLorida',
                'country_id' => 233,
            ),
            484 => 
            array (
                'id' => 3986,
                'state_name' => 'Flores',
                'country_id' => 233,
            ),
            485 => 
            array (
                'id' => 3987,
                'state_name' => 'Lavalleja',
                'country_id' => 233,
            ),
            486 => 
            array (
                'id' => 3988,
                'state_name' => 'Maldonado',
                'country_id' => 233,
            ),
            487 => 
            array (
                'id' => 3989,
                'state_name' => 'Montevideo',
                'country_id' => 233,
            ),
            488 => 
            array (
                'id' => 3990,
                'state_name' => 'Paysandu',
                'country_id' => 233,
            ),
            489 => 
            array (
                'id' => 3991,
                'state_name' => 'Rio Negro',
                'country_id' => 233,
            ),
            490 => 
            array (
                'id' => 3992,
                'state_name' => 'Rivera',
                'country_id' => 233,
            ),
            491 => 
            array (
                'id' => 3993,
                'state_name' => 'Rocha',
                'country_id' => 233,
            ),
            492 => 
            array (
                'id' => 3994,
                'state_name' => 'Salto',
                'country_id' => 233,
            ),
            493 => 
            array (
                'id' => 3995,
                'state_name' => 'San Jose',
                'country_id' => 233,
            ),
            494 => 
            array (
                'id' => 3996,
                'state_name' => 'Soriano',
                'country_id' => 233,
            ),
            495 => 
            array (
                'id' => 3997,
                'state_name' => 'Tacuarembo',
                'country_id' => 233,
            ),
            496 => 
            array (
                'id' => 3998,
                'state_name' => 'Treinta y Tres',
                'country_id' => 233,
            ),
            497 => 
            array (
                'id' => 3999,
                'state_name' => 'Andijon',
                'country_id' => 234,
            ),
            498 => 
            array (
                'id' => 4000,
                'state_name' => 'Buhoro',
                'country_id' => 234,
            ),
            499 => 
            array (
                'id' => 4001,
                'state_name' => 'Buxoro Viloyati',
                'country_id' => 234,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 4002,
                'state_name' => 'Cizah',
                'country_id' => 234,
            ),
            1 => 
            array (
                'id' => 4003,
                'state_name' => 'Fargona',
                'country_id' => 234,
            ),
            2 => 
            array (
                'id' => 4004,
                'state_name' => 'Horazm',
                'country_id' => 234,
            ),
            3 => 
            array (
                'id' => 4005,
                'state_name' => 'Kaskadar',
                'country_id' => 234,
            ),
            4 => 
            array (
                'id' => 4006,
                'state_name' => 'Korakalpogiston',
                'country_id' => 234,
            ),
            5 => 
            array (
                'id' => 4007,
                'state_name' => 'Namangan',
                'country_id' => 234,
            ),
            6 => 
            array (
                'id' => 4008,
                'state_name' => 'Navoi',
                'country_id' => 234,
            ),
            7 => 
            array (
                'id' => 4009,
                'state_name' => 'Samarkand',
                'country_id' => 234,
            ),
            8 => 
            array (
                'id' => 4010,
                'state_name' => 'Sirdare',
                'country_id' => 234,
            ),
            9 => 
            array (
                'id' => 4011,
                'state_name' => 'Surhondar',
                'country_id' => 234,
            ),
            10 => 
            array (
                'id' => 4012,
                'state_name' => 'Toskent',
                'country_id' => 234,
            ),
            11 => 
            array (
                'id' => 4013,
                'state_name' => 'Malampa',
                'country_id' => 235,
            ),
            12 => 
            array (
                'id' => 4014,
                'state_name' => 'Penama',
                'country_id' => 235,
            ),
            13 => 
            array (
                'id' => 4015,
                'state_name' => 'Sanma',
                'country_id' => 235,
            ),
            14 => 
            array (
                'id' => 4016,
                'state_name' => 'Shefa',
                'country_id' => 235,
            ),
            15 => 
            array (
                'id' => 4017,
                'state_name' => 'Tafea',
                'country_id' => 235,
            ),
            16 => 
            array (
                'id' => 4018,
                'state_name' => 'Torba',
                'country_id' => 235,
            ),
            17 => 
            array (
                'id' => 4019,
            'state_name' => 'Vatican City State (Holy See)',
                'country_id' => 236,
            ),
            18 => 
            array (
                'id' => 4020,
                'state_name' => 'Amazonas',
                'country_id' => 237,
            ),
            19 => 
            array (
                'id' => 4021,
                'state_name' => 'Anzoategui',
                'country_id' => 237,
            ),
            20 => 
            array (
                'id' => 4022,
                'state_name' => 'Apure',
                'country_id' => 237,
            ),
            21 => 
            array (
                'id' => 4023,
                'state_name' => 'Aragua',
                'country_id' => 237,
            ),
            22 => 
            array (
                'id' => 4024,
                'state_name' => 'Barinas',
                'country_id' => 237,
            ),
            23 => 
            array (
                'id' => 4025,
                'state_name' => 'Bolivar',
                'country_id' => 237,
            ),
            24 => 
            array (
                'id' => 4026,
                'state_name' => 'Carabobo',
                'country_id' => 237,
            ),
            25 => 
            array (
                'id' => 4027,
                'state_name' => 'Cojedes',
                'country_id' => 237,
            ),
            26 => 
            array (
                'id' => 4028,
                'state_name' => 'Delta Amacuro',
                'country_id' => 237,
            ),
            27 => 
            array (
                'id' => 4029,
                'state_name' => 'Distrito Federal',
                'country_id' => 237,
            ),
            28 => 
            array (
                'id' => 4030,
                'state_name' => 'Falcon',
                'country_id' => 237,
            ),
            29 => 
            array (
                'id' => 4031,
                'state_name' => 'Guarico',
                'country_id' => 237,
            ),
            30 => 
            array (
                'id' => 4032,
                'state_name' => 'Lara',
                'country_id' => 237,
            ),
            31 => 
            array (
                'id' => 4033,
                'state_name' => 'Merida',
                'country_id' => 237,
            ),
            32 => 
            array (
                'id' => 4034,
                'state_name' => 'Miranda',
                'country_id' => 237,
            ),
            33 => 
            array (
                'id' => 4035,
                'state_name' => 'Monagas',
                'country_id' => 237,
            ),
            34 => 
            array (
                'id' => 4036,
                'state_name' => 'Nueva Esparta',
                'country_id' => 237,
            ),
            35 => 
            array (
                'id' => 4037,
                'state_name' => 'Portuguesa',
                'country_id' => 237,
            ),
            36 => 
            array (
                'id' => 4038,
                'state_name' => 'Sucre',
                'country_id' => 237,
            ),
            37 => 
            array (
                'id' => 4039,
                'state_name' => 'Tachira',
                'country_id' => 237,
            ),
            38 => 
            array (
                'id' => 4040,
                'state_name' => 'Trujillo',
                'country_id' => 237,
            ),
            39 => 
            array (
                'id' => 4041,
                'state_name' => 'Vargas',
                'country_id' => 237,
            ),
            40 => 
            array (
                'id' => 4042,
                'state_name' => 'Yaracuy',
                'country_id' => 237,
            ),
            41 => 
            array (
                'id' => 4043,
                'state_name' => 'Zulia',
                'country_id' => 237,
            ),
            42 => 
            array (
                'id' => 4044,
                'state_name' => 'Bac Giang',
                'country_id' => 238,
            ),
            43 => 
            array (
                'id' => 4045,
                'state_name' => 'Binh Dinh',
                'country_id' => 238,
            ),
            44 => 
            array (
                'id' => 4046,
                'state_name' => 'Binh Duong',
                'country_id' => 238,
            ),
            45 => 
            array (
                'id' => 4047,
                'state_name' => 'Da Nang',
                'country_id' => 238,
            ),
            46 => 
            array (
                'id' => 4048,
                'state_name' => 'Dong Bang Song Cuu Long',
                'country_id' => 238,
            ),
            47 => 
            array (
                'id' => 4049,
                'state_name' => 'Dong Bang Song Hong',
                'country_id' => 238,
            ),
            48 => 
            array (
                'id' => 4050,
                'state_name' => 'Dong Nai',
                'country_id' => 238,
            ),
            49 => 
            array (
                'id' => 4051,
                'state_name' => 'Dong Nam Bo',
                'country_id' => 238,
            ),
            50 => 
            array (
                'id' => 4052,
                'state_name' => 'Duyen Hai Mien Trung',
                'country_id' => 238,
            ),
            51 => 
            array (
                'id' => 4053,
                'state_name' => 'Hanoi',
                'country_id' => 238,
            ),
            52 => 
            array (
                'id' => 4054,
                'state_name' => 'Hung Yen',
                'country_id' => 238,
            ),
            53 => 
            array (
                'id' => 4055,
                'state_name' => 'Khu Bon Cu',
                'country_id' => 238,
            ),
            54 => 
            array (
                'id' => 4056,
                'state_name' => 'Long An',
                'country_id' => 238,
            ),
            55 => 
            array (
                'id' => 4057,
                'state_name' => 'Mien Nui Va Trung Du',
                'country_id' => 238,
            ),
            56 => 
            array (
                'id' => 4058,
                'state_name' => 'Thai Nguyen',
                'country_id' => 238,
            ),
            57 => 
            array (
                'id' => 4059,
                'state_name' => 'Thanh Pho Ho Chi Minh',
                'country_id' => 238,
            ),
            58 => 
            array (
                'id' => 4060,
                'state_name' => 'Thu Do Ha Noi',
                'country_id' => 238,
            ),
            59 => 
            array (
                'id' => 4061,
                'state_name' => 'Tinh Can Tho',
                'country_id' => 238,
            ),
            60 => 
            array (
                'id' => 4062,
                'state_name' => 'Tinh Da Nang',
                'country_id' => 238,
            ),
            61 => 
            array (
                'id' => 4063,
                'state_name' => 'Tinh Gia Lai',
                'country_id' => 238,
            ),
            62 => 
            array (
                'id' => 4064,
                'state_name' => 'Anegada',
                'country_id' => 239,
            ),
            63 => 
            array (
                'id' => 4065,
                'state_name' => 'Jost van Dyke',
                'country_id' => 239,
            ),
            64 => 
            array (
                'id' => 4066,
                'state_name' => 'Tortola',
                'country_id' => 239,
            ),
            65 => 
            array (
                'id' => 4067,
                'state_name' => 'Saint Croix',
                'country_id' => 240,
            ),
            66 => 
            array (
                'id' => 4068,
                'state_name' => 'Saint John',
                'country_id' => 240,
            ),
            67 => 
            array (
                'id' => 4069,
                'state_name' => 'Saint Thomas',
                'country_id' => 240,
            ),
            68 => 
            array (
                'id' => 4070,
                'state_name' => 'Alo',
                'country_id' => 241,
            ),
            69 => 
            array (
                'id' => 4071,
                'state_name' => 'Singave',
                'country_id' => 241,
            ),
            70 => 
            array (
                'id' => 4072,
                'state_name' => 'Wallis',
                'country_id' => 241,
            ),
            71 => 
            array (
                'id' => 4073,
                'state_name' => 'Bu Jaydur',
                'country_id' => 242,
            ),
            72 => 
            array (
                'id' => 4074,
                'state_name' => 'Wad-adh-Dhahab',
                'country_id' => 242,
            ),
            73 => 
            array (
                'id' => 4075,
                'state_name' => 'al-\'Ayun',
                'country_id' => 242,
            ),
            74 => 
            array (
                'id' => 4076,
                'state_name' => 'as-Samarah',
                'country_id' => 242,
            ),
            75 => 
            array (
                'id' => 4077,
                'state_name' => '\'Adan',
                'country_id' => 243,
            ),
            76 => 
            array (
                'id' => 4078,
                'state_name' => 'Abyan',
                'country_id' => 243,
            ),
            77 => 
            array (
                'id' => 4079,
                'state_name' => 'Dhamar',
                'country_id' => 243,
            ),
            78 => 
            array (
                'id' => 4080,
                'state_name' => 'Hadramaut',
                'country_id' => 243,
            ),
            79 => 
            array (
                'id' => 4081,
                'state_name' => 'Hajjah',
                'country_id' => 243,
            ),
            80 => 
            array (
                'id' => 4082,
                'state_name' => 'Hudaydah',
                'country_id' => 243,
            ),
            81 => 
            array (
                'id' => 4083,
                'state_name' => 'Ibb',
                'country_id' => 243,
            ),
            82 => 
            array (
                'id' => 4084,
                'state_name' => 'Lahij',
                'country_id' => 243,
            ),
            83 => 
            array (
                'id' => 4085,
                'state_name' => 'Ma\'rib',
                'country_id' => 243,
            ),
            84 => 
            array (
                'id' => 4086,
                'state_name' => 'Madinat San\'a',
                'country_id' => 243,
            ),
            85 => 
            array (
                'id' => 4087,
                'state_name' => 'Sa\'dah',
                'country_id' => 243,
            ),
            86 => 
            array (
                'id' => 4088,
                'state_name' => 'Sana',
                'country_id' => 243,
            ),
            87 => 
            array (
                'id' => 4089,
                'state_name' => 'Shabwah',
                'country_id' => 243,
            ),
            88 => 
            array (
                'id' => 4090,
                'state_name' => 'Ta\'izz',
                'country_id' => 243,
            ),
            89 => 
            array (
                'id' => 4091,
                'state_name' => 'al-Bayda',
                'country_id' => 243,
            ),
            90 => 
            array (
                'id' => 4092,
                'state_name' => 'al-Hudaydah',
                'country_id' => 243,
            ),
            91 => 
            array (
                'id' => 4093,
                'state_name' => 'al-Jawf',
                'country_id' => 243,
            ),
            92 => 
            array (
                'id' => 4094,
                'state_name' => 'al-Mahrah',
                'country_id' => 243,
            ),
            93 => 
            array (
                'id' => 4095,
                'state_name' => 'al-Mahwit',
                'country_id' => 243,
            ),
            94 => 
            array (
                'id' => 4096,
                'state_name' => 'Central Serbia',
                'country_id' => 244,
            ),
            95 => 
            array (
                'id' => 4097,
                'state_name' => 'Kosovo and Metohija',
                'country_id' => 244,
            ),
            96 => 
            array (
                'id' => 4098,
                'state_name' => 'Montenegro',
                'country_id' => 244,
            ),
            97 => 
            array (
                'id' => 4099,
                'state_name' => 'Republic of Serbia',
                'country_id' => 244,
            ),
            98 => 
            array (
                'id' => 4100,
                'state_name' => 'Serbia',
                'country_id' => 244,
            ),
            99 => 
            array (
                'id' => 4101,
                'state_name' => 'Vojvodina',
                'country_id' => 244,
            ),
            100 => 
            array (
                'id' => 4102,
                'state_name' => 'Central',
                'country_id' => 245,
            ),
            101 => 
            array (
                'id' => 4103,
                'state_name' => 'Copperbelt',
                'country_id' => 245,
            ),
            102 => 
            array (
                'id' => 4104,
                'state_name' => 'Eastern',
                'country_id' => 245,
            ),
            103 => 
            array (
                'id' => 4105,
                'state_name' => 'Luapala',
                'country_id' => 245,
            ),
            104 => 
            array (
                'id' => 4106,
                'state_name' => 'Lusaka',
                'country_id' => 245,
            ),
            105 => 
            array (
                'id' => 4107,
                'state_name' => 'North-Western',
                'country_id' => 245,
            ),
            106 => 
            array (
                'id' => 4108,
                'state_name' => 'Northern',
                'country_id' => 245,
            ),
            107 => 
            array (
                'id' => 4109,
                'state_name' => 'Southern',
                'country_id' => 245,
            ),
            108 => 
            array (
                'id' => 4110,
                'state_name' => 'Western',
                'country_id' => 245,
            ),
            109 => 
            array (
                'id' => 4111,
                'state_name' => 'Bulawayo',
                'country_id' => 246,
            ),
            110 => 
            array (
                'id' => 4112,
                'state_name' => 'Harare',
                'country_id' => 246,
            ),
            111 => 
            array (
                'id' => 4113,
                'state_name' => 'Manicaland',
                'country_id' => 246,
            ),
            112 => 
            array (
                'id' => 4114,
                'state_name' => 'Mashonaland Central',
                'country_id' => 246,
            ),
            113 => 
            array (
                'id' => 4115,
                'state_name' => 'Mashonaland East',
                'country_id' => 246,
            ),
            114 => 
            array (
                'id' => 4116,
                'state_name' => 'Mashonaland West',
                'country_id' => 246,
            ),
            115 => 
            array (
                'id' => 4117,
                'state_name' => 'Masvingo',
                'country_id' => 246,
            ),
            116 => 
            array (
                'id' => 4118,
                'state_name' => 'Matabeleland North',
                'country_id' => 246,
            ),
            117 => 
            array (
                'id' => 4119,
                'state_name' => 'Matabeleland South',
                'country_id' => 246,
            ),
            118 => 
            array (
                'id' => 4120,
                'state_name' => 'Midlands',
                'country_id' => 246,
            ),
        ));
        
        
    }
}