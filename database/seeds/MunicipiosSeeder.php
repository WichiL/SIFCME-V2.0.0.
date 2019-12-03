<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('municipios')->truncate();

        App\Municipio::create([
            'name' =>  'Aguascalientes',
            'estado_id' => '01',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Asientos',
            'estado_id' => '01',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Calvillo',
            'estado_id' => '01',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Cosío',
            'estado_id' => '01',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Jesús María',
            'estado_id' => '01',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Pabellón de Arteaga',
            'estado_id' => '01',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Rincón de Romos',
            'estado_id' => '01',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'San José de Gracia',
            'estado_id' => '01',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Tepezalá',
            'estado_id' => '01',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'El Llano',
            'estado_id' => '01',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco de los Romo',
            'estado_id' => '01',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Ensenada',
            'estado_id' => '02',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Mexicali',
            'estado_id' => '02',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Tecate',
            'estado_id' => '02',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Tijuana',
            'estado_id' => '02',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Playas de Rosarito',
            'estado_id' => '02',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Comondú',
            'estado_id' => '03',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Mulegé',
            'estado_id' => '03',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'La Paz',
            'estado_id' => '03',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Los Cabos',
            'estado_id' => '03',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Loreto',
            'estado_id' => '03',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Calkiní',
            'estado_id' => '04',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Campeche',
            'estado_id' => '04',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Carmen',
            'estado_id' => '04',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Champotón',
            'estado_id' => '04',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Hecelchakán',
            'estado_id' => '04',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Hopelchén',
            'estado_id' => '04',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Palizada',
            'estado_id' => '04',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Tenabo',
            'estado_id' => '04',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Escárcega',
            'estado_id' => '04',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Calakmul',
            'estado_id' => '04',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Candelaria',
            'estado_id' => '04',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Abasolo',
            'estado_id' => '05',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acuña',
            'estado_id' => '05',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Allende',
            'estado_id' => '05',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Arteaga',
            'estado_id' => '05',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Candela',
            'estado_id' => '05',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Castaños',
            'estado_id' => '05',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Cuatro Ciénegas',
            'estado_id' => '05',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Escobedo',
            'estado_id' => '05',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Francisco I. Madero',
            'estado_id' => '05',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Frontera',
            'estado_id' => '05',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'General Cepeda',
            'estado_id' => '05',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Guerrero',
            'estado_id' => '05',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgo',
            'estado_id' => '05',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Jiménez',
            'estado_id' => '05',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Juárez',
            'estado_id' => '05',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Lamadrid',
            'estado_id' => '05',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Matamoros',
            'estado_id' => '05',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Monclova',
            'estado_id' => '05',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Morelos',
            'estado_id' => '05',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Múzquiz',
            'estado_id' => '05',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Nadadores',
            'estado_id' => '05',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Nava',
            'estado_id' => '05',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Ocampo',
            'estado_id' => '05',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Parras',
            'estado_id' => '05',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Piedras Negras',
            'estado_id' => '05',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Progreso',
            'estado_id' => '05',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Ramos Arizpe',
            'estado_id' => '05',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Sabinas',
            'estado_id' => '05',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Sacramento',
            'estado_id' => '05',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Saltillo',
            'estado_id' => '05',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'San Buenaventura',
            'estado_id' => '05',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan de Sabinas',
            'estado_id' => '05',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro',
            'estado_id' => '05',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Sierra Mojada',
            'estado_id' => '05',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Torreón',
            'estado_id' => '05',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Viesca',
            'estado_id' => '05',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Unión',
            'estado_id' => '05',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Zaragoza',
            'estado_id' => '05',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Armería',
            'estado_id' => '06',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Colima',
            'estado_id' => '06',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Comala',
            'estado_id' => '06',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Coquimatlán',
            'estado_id' => '06',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '06',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlahuacán',
            'estado_id' => '06',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Manzanillo',
            'estado_id' => '06',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Minatitlán',
            'estado_id' => '06',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Tecomán',
            'estado_id' => '06',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Álvarez',
            'estado_id' => '06',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Acacoyagua',
            'estado_id' => '07',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acala',
            'estado_id' => '07',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Acapetahua',
            'estado_id' => '07',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Altamirano',
            'estado_id' => '07',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Amatán',
            'estado_id' => '07',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Amatenango de la Frontera',
            'estado_id' => '07',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Amatenango del Valle',
            'estado_id' => '07',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Angel Albino Corzo',
            'estado_id' => '07',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Arriaga',
            'estado_id' => '07',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Bejucal de Ocampo',
            'estado_id' => '07',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Bella Vista',
            'estado_id' => '07',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Berriozábal',
            'estado_id' => '07',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Bochil',
            'estado_id' => '07',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'El Bosque',
            'estado_id' => '07',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Cacahoatán',
            'estado_id' => '07',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Catazajá',
            'estado_id' => '07',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Cintalapa',
            'estado_id' => '07',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Coapilla',
            'estado_id' => '07',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Comitán de Domínguez',
            'estado_id' => '07',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'La Concordia',
            'estado_id' => '07',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Copainalá',
            'estado_id' => '07',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Chalchihuitán',
            'estado_id' => '07',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Chamula',
            'estado_id' => '07',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Chanal',
            'estado_id' => '07',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Chapultenango',
            'estado_id' => '07',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Chenalhó',
            'estado_id' => '07',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Chiapa de Corzo',
            'estado_id' => '07',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Chiapilla',
            'estado_id' => '07',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Chicoasén',
            'estado_id' => '07',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Chicomuselo',
            'estado_id' => '07',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Chilón',
            'estado_id' => '07',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Escuintla',
            'estado_id' => '07',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Francisco León',
            'estado_id' => '07',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Frontera Comalapa',
            'estado_id' => '07',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Frontera Hidalgo',
            'estado_id' => '07',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'La Grandeza',
            'estado_id' => '07',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetán',
            'estado_id' => '07',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Huixtán',
            'estado_id' => '07',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Huitiupán',
            'estado_id' => '07',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Huixtla',
            'estado_id' => '07',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'La Independencia',
            'estado_id' => '07',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Ixhuatán',
            'estado_id' => '07',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtacomitán',
            'estado_id' => '07',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtapa',
            'estado_id' => '07',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtapangajoya',
            'estado_id' => '07',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Jiquipilas',
            'estado_id' => '07',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Jitotol',
            'estado_id' => '07',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Juárez',
            'estado_id' => '07',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Larráinzar',
            'estado_id' => '07',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'La Libertad',
            'estado_id' => '07',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Mapastepec',
            'estado_id' => '07',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Las Margaritas',
            'estado_id' => '07',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Mazapa de Madero',
            'estado_id' => '07',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Mazatán',
            'estado_id' => '07',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Metapa',
            'estado_id' => '07',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Mitontic',
            'estado_id' => '07',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Motozintla',
            'estado_id' => '07',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Nicolás Ruíz',
            'estado_id' => '07',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Ocosingo',
            'estado_id' => '07',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Ocotepec',
            'estado_id' => '07',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Ocozocoautla de Espinosa',
            'estado_id' => '07',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Ostuacán',
            'estado_id' => '07',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Osumacinta',
            'estado_id' => '07',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Oxchuc',
            'estado_id' => '07',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Palenque',
            'estado_id' => '07',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Pantelhó',
            'estado_id' => '07',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Pantepec',
            'estado_id' => '07',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Pichucalco',
            'estado_id' => '07',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Pijijiapan',
            'estado_id' => '07',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'El Porvenir',
            'estado_id' => '07',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Comaltitlán',
            'estado_id' => '07',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Pueblo Nuevo Solistahuacán',
            'estado_id' => '07',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Rayón',
            'estado_id' => '07',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Reforma',
            'estado_id' => '07',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Las Rosas',
            'estado_id' => '07',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Sabanilla',
            'estado_id' => '07',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Salto de Agua',
            'estado_id' => '07',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'San Cristóbal de las Casas',
            'estado_id' => '07',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'San Fernando',
            'estado_id' => '07',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Siltepec',
            'estado_id' => '07',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Simojovel',
            'estado_id' => '07',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Sitalá',
            'estado_id' => '07',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Socoltenango',
            'estado_id' => '07',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Solosuchiapa',
            'estado_id' => '07',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Soyaló',
            'estado_id' => '07',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Suchiapa',
            'estado_id' => '07',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Suchiate',
            'estado_id' => '07',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Sunuapa',
            'estado_id' => '07',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Tapachula',
            'estado_id' => '07',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Tapalapa',
            'estado_id' => '07',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Tapilula',
            'estado_id' => '07',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Tecpatán',
            'estado_id' => '07',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Tenejapa',
            'estado_id' => '07',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Teopisca',
            'estado_id' => '07',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'Tila',
            'estado_id' => '07',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Tonalá',
            'estado_id' => '07',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'Totolapa',
            'estado_id' => '07',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'La Trinitaria',
            'estado_id' => '07',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Tumbalá',
            'estado_id' => '07',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxtla Gutiérrez',
            'estado_id' => '07',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxtla Chico',
            'estado_id' => '07',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Tuzantán',
            'estado_id' => '07',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Tzimol',
            'estado_id' => '07',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Unión Juárez',
            'estado_id' => '07',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '07',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Corzo',
            'estado_id' => '07',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'Villaflores',
            'estado_id' => '07',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'Yajalón',
            'estado_id' => '07',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas',
            'estado_id' => '07',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'Zinacantán',
            'estado_id' => '07',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Cancuc',
            'estado_id' => '07',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'Aldama',
            'estado_id' => '07',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'Benemérito de las Américas',
            'estado_id' => '07',
            'number' =>  '114',
        ]);
        App\Municipio::create([
            'name' =>  'Maravilla Tenejapa',
            'estado_id' => '07',
            'number' =>  '115',
        ]);
        App\Municipio::create([
            'name' =>  'Marqués de Comillas',
            'estado_id' => '07',
            'number' =>  '116',
        ]);
        App\Municipio::create([
            'name' =>  'Montecristo de Guerrero',
            'estado_id' => '07',
            'number' =>  '117',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Duraznal',
            'estado_id' => '07',
            'number' =>  '118',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago el Pinar',
            'estado_id' => '07',
            'number' =>  '119',
        ]);
        App\Municipio::create([
            'name' =>  'Ahumada',
            'estado_id' => '08',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Aldama',
            'estado_id' => '08',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Allende',
            'estado_id' => '08',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Aquiles Serdán',
            'estado_id' => '08',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Ascensión',
            'estado_id' => '08',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Bachíniva',
            'estado_id' => '08',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Balleza',
            'estado_id' => '08',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Batopilas',
            'estado_id' => '08',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Bocoyna',
            'estado_id' => '08',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Buenaventura',
            'estado_id' => '08',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Camargo',
            'estado_id' => '08',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Carichí',
            'estado_id' => '08',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Casas Grandes',
            'estado_id' => '08',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Coronado',
            'estado_id' => '08',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Coyame del Sotol',
            'estado_id' => '08',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'La Cruz',
            'estado_id' => '08',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '08',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Cusihuiriachi',
            'estado_id' => '08',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Chihuahua',
            'estado_id' => '08',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Chínipas',
            'estado_id' => '08',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Delicias',
            'estado_id' => '08',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Dr. Belisario Domínguez',
            'estado_id' => '08',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Galeana',
            'estado_id' => '08',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Isabel',
            'estado_id' => '08',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Gómez Farías',
            'estado_id' => '08',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Gran Morelos',
            'estado_id' => '08',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Guachochi',
            'estado_id' => '08',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe',
            'estado_id' => '08',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe y Calvo',
            'estado_id' => '08',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Guazapares',
            'estado_id' => '08',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Guerrero',
            'estado_id' => '08',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgo del Parral',
            'estado_id' => '08',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Huejotitán',
            'estado_id' => '08',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Ignacio Zaragoza',
            'estado_id' => '08',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Janos',
            'estado_id' => '08',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Jiménez',
            'estado_id' => '08',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Juárez',
            'estado_id' => '08',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Julimes',
            'estado_id' => '08',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'López',
            'estado_id' => '08',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Madera',
            'estado_id' => '08',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Maguarichi',
            'estado_id' => '08',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Manuel Benavides',
            'estado_id' => '08',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Matachí',
            'estado_id' => '08',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Matamoros',
            'estado_id' => '08',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Meoqui',
            'estado_id' => '08',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Morelos',
            'estado_id' => '08',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Moris',
            'estado_id' => '08',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Namiquipa',
            'estado_id' => '08',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Nonoava',
            'estado_id' => '08',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Casas Grandes',
            'estado_id' => '08',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Ocampo',
            'estado_id' => '08',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Ojinaga',
            'estado_id' => '08',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Praxedis G. Guerrero',
            'estado_id' => '08',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Riva Palacio',
            'estado_id' => '08',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Rosales',
            'estado_id' => '08',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Rosario',
            'estado_id' => '08',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco de Borja',
            'estado_id' => '08',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco de Conchos',
            'estado_id' => '08',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco del Oro',
            'estado_id' => '08',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Bárbara',
            'estado_id' => '08',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Satevó',
            'estado_id' => '08',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Saucillo',
            'estado_id' => '08',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Temósachic',
            'estado_id' => '08',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'El Tule',
            'estado_id' => '08',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Urique',
            'estado_id' => '08',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Uruachi',
            'estado_id' => '08',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Valle de Zaragoza',
            'estado_id' => '08',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Azcapotzalco',
            'estado_id' => '09',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Coyoacán',
            'estado_id' => '09',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Cuajimalpa de Morelos',
            'estado_id' => '09',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Gustavo A. Madero',
            'estado_id' => '09',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Iztacalco',
            'estado_id' => '09',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Iztapalapa',
            'estado_id' => '09',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'La Magdalena Contreras',
            'estado_id' => '09',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Milpa Alta',
            'estado_id' => '09',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Álvaro Obregón',
            'estado_id' => '09',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Tláhuac',
            'estado_id' => '09',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalpan',
            'estado_id' => '09',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Xochimilco',
            'estado_id' => '09',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '09',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '09',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Miguel Hidalgo',
            'estado_id' => '09',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '09',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Canatlán',
            'estado_id' => '10',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Canelas',
            'estado_id' => '10',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Coneto de Comonfort',
            'estado_id' => '10',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Cuencamé',
            'estado_id' => '10',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Durango',
            'estado_id' => '10',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'General Simón Bolívar',
            'estado_id' => '10',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Gómez Palacio',
            'estado_id' => '10',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe Victoria',
            'estado_id' => '10',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Guanaceví',
            'estado_id' => '10',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgo',
            'estado_id' => '10',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Indé',
            'estado_id' => '10',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Lerdo',
            'estado_id' => '10',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Mapimí',
            'estado_id' => '10',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Mezquital',
            'estado_id' => '10',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Nazas',
            'estado_id' => '10',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Nombre de Dios',
            'estado_id' => '10',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Ocampo',
            'estado_id' => '10',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'El Oro',
            'estado_id' => '10',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Otáez',
            'estado_id' => '10',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Pánuco de Coronado',
            'estado_id' => '10',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Peñón Blanco',
            'estado_id' => '10',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Poanas',
            'estado_id' => '10',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Pueblo Nuevo',
            'estado_id' => '10',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Rodeo',
            'estado_id' => '10',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'San Bernardo',
            'estado_id' => '10',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'San Dimas',
            'estado_id' => '10',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan de Guadalupe',
            'estado_id' => '10',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan del Río',
            'estado_id' => '10',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'San Luis del Cordero',
            'estado_id' => '10',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro del Gallo',
            'estado_id' => '10',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Clara',
            'estado_id' => '10',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Papasquiaro',
            'estado_id' => '10',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Súchil',
            'estado_id' => '10',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Tamazula',
            'estado_id' => '10',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Tepehuanes',
            'estado_id' => '10',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Tlahualilo',
            'estado_id' => '10',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Topia',
            'estado_id' => '10',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Vicente Guerrero',
            'estado_id' => '10',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Ideal',
            'estado_id' => '10',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Abasolo',
            'estado_id' => '11',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acámbaro',
            'estado_id' => '11',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel de Allende',
            'estado_id' => '11',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Apaseo el Alto',
            'estado_id' => '11',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Apaseo el Grande',
            'estado_id' => '11',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Atarjea',
            'estado_id' => '11',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Celaya',
            'estado_id' => '11',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Manuel Doblado',
            'estado_id' => '11',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Comonfort',
            'estado_id' => '11',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Coroneo',
            'estado_id' => '11',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Cortazar',
            'estado_id' => '11',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Cuerámaro',
            'estado_id' => '11',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Doctor Mora',
            'estado_id' => '11',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'estado_id' => '11',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Guanajuato',
            'estado_id' => '11',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Huanímaro',
            'estado_id' => '11',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Irapuato',
            'estado_id' => '11',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Jaral del Progreso',
            'estado_id' => '11',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Jerécuaro',
            'estado_id' => '11',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'León',
            'estado_id' => '11',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Moroleón',
            'estado_id' => '11',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Ocampo',
            'estado_id' => '11',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Pénjamo',
            'estado_id' => '11',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Pueblo Nuevo',
            'estado_id' => '11',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Purísima del Rincón',
            'estado_id' => '11',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Romita',
            'estado_id' => '11',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Salamanca',
            'estado_id' => '11',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Salvatierra',
            'estado_id' => '11',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'San Diego de la Unión',
            'estado_id' => '11',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe',
            'estado_id' => '11',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco del Rincón',
            'estado_id' => '11',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'San José Iturbide',
            'estado_id' => '11',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'San Luis de la Paz',
            'estado_id' => '11',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina',
            'estado_id' => '11',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz de Juventino Rosas',
            'estado_id' => '11',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Maravatío',
            'estado_id' => '11',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Silao de la Victoria',
            'estado_id' => '11',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Tarandacuao',
            'estado_id' => '11',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Tarimoro',
            'estado_id' => '11',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Tierra Blanca',
            'estado_id' => '11',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Uriangato',
            'estado_id' => '11',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Valle de Santiago',
            'estado_id' => '11',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Victoria',
            'estado_id' => '11',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Villagrán',
            'estado_id' => '11',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Xichú',
            'estado_id' => '11',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Yuriria',
            'estado_id' => '11',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Acapulco de Juárez',
            'estado_id' => '12',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Ahuacuotzingo',
            'estado_id' => '12',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Ajuchitlán del Progreso',
            'estado_id' => '12',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Alcozauca de Guerrero',
            'estado_id' => '12',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Alpoyeca',
            'estado_id' => '12',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Apaxtla',
            'estado_id' => '12',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Arcelia',
            'estado_id' => '12',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Atenango del Río',
            'estado_id' => '12',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Atlamajalcingo del Monte',
            'estado_id' => '12',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Atlixtac',
            'estado_id' => '12',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Atoyac de Álvarez',
            'estado_id' => '12',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Ayutla de los Libres',
            'estado_id' => '12',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Azoyú',
            'estado_id' => '12',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '12',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Buenavista de Cuéllar',
            'estado_id' => '12',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Coahuayutla de José María Izazaga',
            'estado_id' => '12',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Cocula',
            'estado_id' => '12',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Copala',
            'estado_id' => '12',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Copalillo',
            'estado_id' => '12',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Copanatoyac',
            'estado_id' => '12',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Coyuca de Benítez',
            'estado_id' => '12',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Coyuca de Catalán',
            'estado_id' => '12',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Cuajinicuilapa',
            'estado_id' => '12',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Cualác',
            'estado_id' => '12',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautepec',
            'estado_id' => '12',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Cuetzala del Progreso',
            'estado_id' => '12',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Cutzamala de Pinzón',
            'estado_id' => '12',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Chilapa de Álvarez',
            'estado_id' => '12',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Chilpancingo de los Bravo',
            'estado_id' => '12',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Florencio Villarreal',
            'estado_id' => '12',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'General Canuto A. Neri',
            'estado_id' => '12',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'General Heliodoro Castillo',
            'estado_id' => '12',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Huamuxtitlán',
            'estado_id' => '12',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Huitzuco de los Figueroa',
            'estado_id' => '12',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Iguala de la Independencia',
            'estado_id' => '12',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Igualapa',
            'estado_id' => '12',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Ixcateopan de Cuauhtémoc',
            'estado_id' => '12',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Zihuatanejo de Azueta',
            'estado_id' => '12',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Juan R. Escudero',
            'estado_id' => '12',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Leonardo Bravo',
            'estado_id' => '12',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Malinaltepec',
            'estado_id' => '12',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Mártir de Cuilapan',
            'estado_id' => '12',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Metlatónoc',
            'estado_id' => '12',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Mochitlán',
            'estado_id' => '12',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Olinalá',
            'estado_id' => '12',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Ometepec',
            'estado_id' => '12',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Pedro Ascencio Alquisiras',
            'estado_id' => '12',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Petatlán',
            'estado_id' => '12',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Pilcaya',
            'estado_id' => '12',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Pungarabato',
            'estado_id' => '12',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Quechultenango',
            'estado_id' => '12',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'San Luis Acatlán',
            'estado_id' => '12',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'San Marcos',
            'estado_id' => '12',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Totolapan',
            'estado_id' => '12',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Taxco de Alarcón',
            'estado_id' => '12',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Tecoanapa',
            'estado_id' => '12',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Técpan de Galeana',
            'estado_id' => '12',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Teloloapan',
            'estado_id' => '12',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Tepecoacuilco de Trujano',
            'estado_id' => '12',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Tetipac',
            'estado_id' => '12',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Tixtla de Guerrero',
            'estado_id' => '12',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacoachistlahuaca',
            'estado_id' => '12',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacoapa',
            'estado_id' => '12',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalchapa',
            'estado_id' => '12',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalixtaquilla de Maldonado',
            'estado_id' => '12',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Tlapa de Comonfort',
            'estado_id' => '12',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Tlapehuala',
            'estado_id' => '12',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'La Unión de Isidoro Montes de Oca',
            'estado_id' => '12',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Xalpatláhuac',
            'estado_id' => '12',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Xochihuehuetlán',
            'estado_id' => '12',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Xochistlahuaca',
            'estado_id' => '12',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotitlán Tablas',
            'estado_id' => '12',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Zirándaro',
            'estado_id' => '12',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Zitlala',
            'estado_id' => '12',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Eduardo Neri',
            'estado_id' => '12',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Acatepec',
            'estado_id' => '12',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Marquelia',
            'estado_id' => '12',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Cochoapa el Grande',
            'estado_id' => '12',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'José Joaquín de Herrera',
            'estado_id' => '12',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Juchitán',
            'estado_id' => '12',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Iliatenco',
            'estado_id' => '12',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Acatlán',
            'estado_id' => '13',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acaxochitlán',
            'estado_id' => '13',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Actopan',
            'estado_id' => '13',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Agua Blanca de Iturbide',
            'estado_id' => '13',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Ajacuba',
            'estado_id' => '13',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Alfajayucan',
            'estado_id' => '13',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Almoloya',
            'estado_id' => '13',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Apan',
            'estado_id' => '13',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'El Arenal',
            'estado_id' => '13',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Atitalaquia',
            'estado_id' => '13',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Atlapexco',
            'estado_id' => '13',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Atotonilco el Grande',
            'estado_id' => '13',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Atotonilco de Tula',
            'estado_id' => '13',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Calnali',
            'estado_id' => '13',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Cardonal',
            'estado_id' => '13',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautepec de Hinojosa',
            'estado_id' => '13',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Chapantongo',
            'estado_id' => '13',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Chapulhuacán',
            'estado_id' => '13',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Chilcuautla',
            'estado_id' => '13',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Eloxochitlán',
            'estado_id' => '13',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '13',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Epazoyucan',
            'estado_id' => '13',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Francisco I. Madero',
            'estado_id' => '13',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Huasca de Ocampo',
            'estado_id' => '13',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Huautla',
            'estado_id' => '13',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Huazalingo',
            'estado_id' => '13',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetla',
            'estado_id' => '13',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Huejutla de Reyes',
            'estado_id' => '13',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Huichapan',
            'estado_id' => '13',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Ixmiquilpan',
            'estado_id' => '13',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Jacala de Ledezma',
            'estado_id' => '13',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Jaltocán',
            'estado_id' => '13',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Juárez Hidalgo',
            'estado_id' => '13',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Lolotla',
            'estado_id' => '13',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Metepec',
            'estado_id' => '13',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Metzquititlán',
            'estado_id' => '13',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Metztitlán',
            'estado_id' => '13',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Mineral del Chico',
            'estado_id' => '13',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Mineral del Monte',
            'estado_id' => '13',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'La Misión',
            'estado_id' => '13',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Mixquiahuala de Juárez',
            'estado_id' => '13',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Molango de Escamilla',
            'estado_id' => '13',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Nicolás Flores',
            'estado_id' => '13',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Nopala de Villagrán',
            'estado_id' => '13',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Omitlán de Juárez',
            'estado_id' => '13',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe Orizatlán',
            'estado_id' => '13',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Pacula',
            'estado_id' => '13',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Pachuca de Soto',
            'estado_id' => '13',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Pisaflores',
            'estado_id' => '13',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Progreso de Obregón',
            'estado_id' => '13',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Mineral de la Reforma',
            'estado_id' => '13',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Tlaxiaca',
            'estado_id' => '13',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolo Tutotepec',
            'estado_id' => '13',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'San Salvador',
            'estado_id' => '13',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago de Anaya',
            'estado_id' => '13',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tulantepec de Lugo Guerrero',
            'estado_id' => '13',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Singuilucan',
            'estado_id' => '13',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Tasquillo',
            'estado_id' => '13',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Tecozautla',
            'estado_id' => '13',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Tenango de Doria',
            'estado_id' => '13',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeapulco',
            'estado_id' => '13',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Tepehuacán de Guerrero',
            'estado_id' => '13',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeji del Río de Ocampo',
            'estado_id' => '13',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetitlán',
            'estado_id' => '13',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Tetepango',
            'estado_id' => '13',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Tezontepec',
            'estado_id' => '13',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Tezontepec de Aldama',
            'estado_id' => '13',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Tianguistengo',
            'estado_id' => '13',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Tizayuca',
            'estado_id' => '13',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Tlahuelilpan',
            'estado_id' => '13',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Tlahuiltepa',
            'estado_id' => '13',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Tlanalapa',
            'estado_id' => '13',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Tlanchinol',
            'estado_id' => '13',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaxcoapan',
            'estado_id' => '13',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Tolcayuca',
            'estado_id' => '13',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Tula de Allende',
            'estado_id' => '13',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Tulancingo de Bravo',
            'estado_id' => '13',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Xochiatipan',
            'estado_id' => '13',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Xochicoatlán',
            'estado_id' => '13',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Yahualica',
            'estado_id' => '13',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Zacualtipán de Ángeles',
            'estado_id' => '13',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotlán de Juárez',
            'estado_id' => '13',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Zempoala',
            'estado_id' => '13',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Zimapán',
            'estado_id' => '13',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Acatic',
            'estado_id' => '14',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acatlán de Juárez',
            'estado_id' => '14',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Ahualulco de Mercado',
            'estado_id' => '14',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Amacueca',
            'estado_id' => '14',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Amatitán',
            'estado_id' => '14',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Ameca',
            'estado_id' => '14',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'San Juanito de Escobedo',
            'estado_id' => '14',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Arandas',
            'estado_id' => '14',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'El Arenal',
            'estado_id' => '14',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Atemajac de Brizuela',
            'estado_id' => '14',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Atengo',
            'estado_id' => '14',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Atenguillo',
            'estado_id' => '14',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Atotonilco el Alto',
            'estado_id' => '14',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Atoyac',
            'estado_id' => '14',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Autlán de Navarro',
            'estado_id' => '14',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Ayotlán',
            'estado_id' => '14',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Ayutla',
            'estado_id' => '14',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'La Barca',
            'estado_id' => '14',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Bolaños',
            'estado_id' => '14',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Cabo Corrientes',
            'estado_id' => '14',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Casimiro Castillo',
            'estado_id' => '14',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Cihuatlán',
            'estado_id' => '14',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotlán el Grande',
            'estado_id' => '14',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Cocula',
            'estado_id' => '14',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Colotlán',
            'estado_id' => '14',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Concepción de Buenos Aires',
            'estado_id' => '14',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautitlán de García Barragán',
            'estado_id' => '14',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautla',
            'estado_id' => '14',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Cuquío',
            'estado_id' => '14',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Chapala',
            'estado_id' => '14',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Chimaltitán',
            'estado_id' => '14',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Chiquilistlán',
            'estado_id' => '14',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Degollado',
            'estado_id' => '14',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Ejutla',
            'estado_id' => '14',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Encarnación de Díaz',
            'estado_id' => '14',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Etzatlán',
            'estado_id' => '14',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'El Grullo',
            'estado_id' => '14',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Guachinango',
            'estado_id' => '14',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalajara',
            'estado_id' => '14',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Hostotipaquillo',
            'estado_id' => '14',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Huejúcar',
            'estado_id' => '14',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Huejuquilla el Alto',
            'estado_id' => '14',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'La Huerta',
            'estado_id' => '14',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlahuacán de los Membrillos',
            'estado_id' => '14',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlahuacán del Río',
            'estado_id' => '14',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Jalostotitlán',
            'estado_id' => '14',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Jamay',
            'estado_id' => '14',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Jesús María',
            'estado_id' => '14',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Jilotlán de los Dolores',
            'estado_id' => '14',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Jocotepec',
            'estado_id' => '14',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Juanacatlán',
            'estado_id' => '14',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Juchitlán',
            'estado_id' => '14',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Lagos de Moreno',
            'estado_id' => '14',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'El Limón',
            'estado_id' => '14',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena',
            'estado_id' => '14',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María del Oro',
            'estado_id' => '14',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'La Manzanilla de la Paz',
            'estado_id' => '14',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Mascota',
            'estado_id' => '14',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Mazamitla',
            'estado_id' => '14',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Mexticacán',
            'estado_id' => '14',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Mezquitic',
            'estado_id' => '14',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Mixtlán',
            'estado_id' => '14',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Ocotlán',
            'estado_id' => '14',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Ojuelos de Jalisco',
            'estado_id' => '14',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Pihuamo',
            'estado_id' => '14',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Poncitlán',
            'estado_id' => '14',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Puerto Vallarta',
            'estado_id' => '14',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Purificación',
            'estado_id' => '14',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Quitupan',
            'estado_id' => '14',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'El Salto',
            'estado_id' => '14',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'San Cristóbal de la Barranca',
            'estado_id' => '14',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'San Diego de Alejandría',
            'estado_id' => '14',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan de los Lagos',
            'estado_id' => '14',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'San Julián',
            'estado_id' => '14',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'San Marcos',
            'estado_id' => '14',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín de Bolaños',
            'estado_id' => '14',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Hidalgo',
            'estado_id' => '14',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel el Alto',
            'estado_id' => '14',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Gómez Farías',
            'estado_id' => '14',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián del Oeste',
            'estado_id' => '14',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María de los Ángeles',
            'estado_id' => '14',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Sayula',
            'estado_id' => '14',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Tala',
            'estado_id' => '14',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Talpa de Allende',
            'estado_id' => '14',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Tamazula de Gordiano',
            'estado_id' => '14',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Tapalpa',
            'estado_id' => '14',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Tecalitlán',
            'estado_id' => '14',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Tecolotlán',
            'estado_id' => '14',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Techaluta de Montenegro',
            'estado_id' => '14',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Tenamaxtlán',
            'estado_id' => '14',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Teocaltiche',
            'estado_id' => '14',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Teocuitatlán de Corona',
            'estado_id' => '14',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Tepatitlán de Morelos',
            'estado_id' => '14',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Tequila',
            'estado_id' => '14',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'Teuchitlán',
            'estado_id' => '14',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'Tizapán el Alto',
            'estado_id' => '14',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Tlajomulco de Zúñiga',
            'estado_id' => '14',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Tlaquepaque',
            'estado_id' => '14',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'Tolimán',
            'estado_id' => '14',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Tomatlán',
            'estado_id' => '14',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Tonalá',
            'estado_id' => '14',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Tonaya',
            'estado_id' => '14',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Tonila',
            'estado_id' => '14',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Totatiche',
            'estado_id' => '14',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Tototlán',
            'estado_id' => '14',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxcacuesco',
            'estado_id' => '14',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxcueca',
            'estado_id' => '14',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxpan',
            'estado_id' => '14',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'Unión de San Antonio',
            'estado_id' => '14',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'Unión de Tula',
            'estado_id' => '14',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'Valle de Guadalupe',
            'estado_id' => '14',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'Valle de Juárez',
            'estado_id' => '14',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'San Gabriel',
            'estado_id' => '14',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Corona',
            'estado_id' => '14',
            'number' =>  '114',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Guerrero',
            'estado_id' => '14',
            'number' =>  '115',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '14',
            'number' =>  '116',
        ]);
        App\Municipio::create([
            'name' =>  'Cañadas de Obregón',
            'estado_id' => '14',
            'number' =>  '117',
        ]);
        App\Municipio::create([
            'name' =>  'Yahualica de González Gallo',
            'estado_id' => '14',
            'number' =>  '118',
        ]);
        App\Municipio::create([
            'name' =>  'Zacoalco de Torres',
            'estado_id' => '14',
            'number' =>  '119',
        ]);
        App\Municipio::create([
            'name' =>  'Zapopan',
            'estado_id' => '14',
            'number' =>  '120',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotiltic',
            'estado_id' => '14',
            'number' =>  '121',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotitlán de Vadillo',
            'estado_id' => '14',
            'number' =>  '122',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotlán del Rey',
            'estado_id' => '14',
            'number' =>  '123',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotlanejo',
            'estado_id' => '14',
            'number' =>  '124',
        ]);
        App\Municipio::create([
            'name' =>  'San Ignacio Cerro Gordo',
            'estado_id' => '14',
            'number' =>  '125',
        ]);
        App\Municipio::create([
            'name' =>  'Acambay de Ruíz Castañeda',
            'estado_id' => '15',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acolman',
            'estado_id' => '15',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Aculco',
            'estado_id' => '15',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Almoloya de Alquisiras',
            'estado_id' => '15',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Almoloya de Juárez',
            'estado_id' => '15',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Almoloya del Río',
            'estado_id' => '15',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Amanalco',
            'estado_id' => '15',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Amatepec',
            'estado_id' => '15',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Amecameca',
            'estado_id' => '15',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Apaxco',
            'estado_id' => '15',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Atenco',
            'estado_id' => '15',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Atizapán',
            'estado_id' => '15',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Atizapán de Zaragoza',
            'estado_id' => '15',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Atlacomulco',
            'estado_id' => '15',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Atlautla',
            'estado_id' => '15',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Axapusco',
            'estado_id' => '15',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Ayapango',
            'estado_id' => '15',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Calimaya',
            'estado_id' => '15',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Capulhuac',
            'estado_id' => '15',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Coacalco de Berriozábal',
            'estado_id' => '15',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Coatepec Harinas',
            'estado_id' => '15',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Cocotitlán',
            'estado_id' => '15',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Coyotepec',
            'estado_id' => '15',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautitlán',
            'estado_id' => '15',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Chalco',
            'estado_id' => '15',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Chapa de Mota',
            'estado_id' => '15',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Chapultepec',
            'estado_id' => '15',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Chiautla',
            'estado_id' => '15',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Chicoloapan',
            'estado_id' => '15',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Chiconcuac',
            'estado_id' => '15',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Chimalhuacán',
            'estado_id' => '15',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Donato Guerra',
            'estado_id' => '15',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Ecatepec de Morelos',
            'estado_id' => '15',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Ecatzingo',
            'estado_id' => '15',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetoca',
            'estado_id' => '15',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Hueypoxtla',
            'estado_id' => '15',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Huixquilucan',
            'estado_id' => '15',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Isidro Fabela',
            'estado_id' => '15',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtapaluca',
            'estado_id' => '15',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtapan de la Sal',
            'estado_id' => '15',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtapan del Oro',
            'estado_id' => '15',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlahuaca',
            'estado_id' => '15',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Xalatlaco',
            'estado_id' => '15',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Jaltenco',
            'estado_id' => '15',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Jilotepec',
            'estado_id' => '15',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Jilotzingo',
            'estado_id' => '15',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Jiquipilco',
            'estado_id' => '15',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Jocotitlán',
            'estado_id' => '15',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Joquicingo',
            'estado_id' => '15',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Juchitepec',
            'estado_id' => '15',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Lerma',
            'estado_id' => '15',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Malinalco',
            'estado_id' => '15',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Melchor Ocampo',
            'estado_id' => '15',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Metepec',
            'estado_id' => '15',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Mexicaltzingo',
            'estado_id' => '15',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Morelos',
            'estado_id' => '15',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Naucalpan de Juárez',
            'estado_id' => '15',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Nezahualcóyotl',
            'estado_id' => '15',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Nextlalpan',
            'estado_id' => '15',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Nicolás Romero',
            'estado_id' => '15',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Nopaltepec',
            'estado_id' => '15',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Ocoyoacac',
            'estado_id' => '15',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Ocuilan',
            'estado_id' => '15',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'El Oro',
            'estado_id' => '15',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Otumba',
            'estado_id' => '15',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Otzoloapan',
            'estado_id' => '15',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Otzolotepec',
            'estado_id' => '15',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Ozumba',
            'estado_id' => '15',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Papalotla',
            'estado_id' => '15',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'La Paz',
            'estado_id' => '15',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Polotitlán',
            'estado_id' => '15',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Rayón',
            'estado_id' => '15',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio la Isla',
            'estado_id' => '15',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe del Progreso',
            'estado_id' => '15',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín de las Pirámides',
            'estado_id' => '15',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Atenco',
            'estado_id' => '15',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'San Simón de Guerrero',
            'estado_id' => '15',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Tomás',
            'estado_id' => '15',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Soyaniquilpan de Juárez',
            'estado_id' => '15',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Sultepec',
            'estado_id' => '15',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Tecámac',
            'estado_id' => '15',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Tejupilco',
            'estado_id' => '15',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Temamatla',
            'estado_id' => '15',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Temascalapa',
            'estado_id' => '15',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Temascalcingo',
            'estado_id' => '15',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Temascaltepec',
            'estado_id' => '15',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Temoaya',
            'estado_id' => '15',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Tenancingo',
            'estado_id' => '15',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Tenango del Aire',
            'estado_id' => '15',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Tenango del Valle',
            'estado_id' => '15',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Teoloyucan',
            'estado_id' => '15',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Teotihuacán',
            'estado_id' => '15',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetlaoxtoc',
            'estado_id' => '15',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetlixpa',
            'estado_id' => '15',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'Tepotzotlán',
            'estado_id' => '15',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'Tequixquiac',
            'estado_id' => '15',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Texcaltitlán',
            'estado_id' => '15',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'Texcalyacac',
            'estado_id' => '15',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'Texcoco',
            'estado_id' => '15',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Tezoyuca',
            'estado_id' => '15',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Tianguistenco',
            'estado_id' => '15',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Timilpan',
            'estado_id' => '15',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalmanalco',
            'estado_id' => '15',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalnepantla de Baz',
            'estado_id' => '15',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Tlatlaya',
            'estado_id' => '15',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Toluca',
            'estado_id' => '15',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Tonatico',
            'estado_id' => '15',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'Tultepec',
            'estado_id' => '15',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'Tultitlán',
            'estado_id' => '15',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'Valle de Bravo',
            'estado_id' => '15',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Allende',
            'estado_id' => '15',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'Villa del Carbón',
            'estado_id' => '15',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Guerrero',
            'estado_id' => '15',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Victoria',
            'estado_id' => '15',
            'number' =>  '114',
        ]);
        App\Municipio::create([
            'name' =>  'Xonacatlán',
            'estado_id' => '15',
            'number' =>  '115',
        ]);
        App\Municipio::create([
            'name' =>  'Zacazonapan',
            'estado_id' => '15',
            'number' =>  '116',
        ]);
        App\Municipio::create([
            'name' =>  'Zacualpan',
            'estado_id' => '15',
            'number' =>  '117',
        ]);
        App\Municipio::create([
            'name' =>  'Zinacantepec',
            'estado_id' => '15',
            'number' =>  '118',
        ]);
        App\Municipio::create([
            'name' =>  'Zumpahuacán',
            'estado_id' => '15',
            'number' =>  '119',
        ]);
        App\Municipio::create([
            'name' =>  'Zumpango',
            'estado_id' => '15',
            'number' =>  '120',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautitlán Izcalli',
            'estado_id' => '15',
            'number' =>  '121',
        ]);
        App\Municipio::create([
            'name' =>  'Valle de Chalco Solidaridad',
            'estado_id' => '15',
            'number' =>  '122',
        ]);
        App\Municipio::create([
            'name' =>  'Luvianos',
            'estado_id' => '15',
            'number' =>  '123',
        ]);
        App\Municipio::create([
            'name' =>  'San José del Rincón',
            'estado_id' => '15',
            'number' =>  '124',
        ]);
        App\Municipio::create([
            'name' =>  'Tonanitla',
            'estado_id' => '15',
            'number' =>  '125',
        ]);
        App\Municipio::create([
            'name' =>  'Acuitzio',
            'estado_id' => '16',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Aguililla',
            'estado_id' => '16',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Álvaro Obregón',
            'estado_id' => '16',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Angamacutiro',
            'estado_id' => '16',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Angangueo',
            'estado_id' => '16',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Apatzingán',
            'estado_id' => '16',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Aporo',
            'estado_id' => '16',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Aquila',
            'estado_id' => '16',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Ario',
            'estado_id' => '16',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Arteaga',
            'estado_id' => '16',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Briseñas',
            'estado_id' => '16',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Buenavista',
            'estado_id' => '16',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Carácuaro',
            'estado_id' => '16',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Coahuayana',
            'estado_id' => '16',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Coalcomán de Vázquez Pallares',
            'estado_id' => '16',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Coeneo',
            'estado_id' => '16',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Contepec',
            'estado_id' => '16',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Copándaro',
            'estado_id' => '16',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Cotija',
            'estado_id' => '16',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Cuitzeo',
            'estado_id' => '16',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Charapan',
            'estado_id' => '16',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Charo',
            'estado_id' => '16',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Chavinda',
            'estado_id' => '16',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Cherán',
            'estado_id' => '16',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Chilchota',
            'estado_id' => '16',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Chinicuila',
            'estado_id' => '16',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Chucándiro',
            'estado_id' => '16',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Churintzio',
            'estado_id' => '16',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Churumuco',
            'estado_id' => '16',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Ecuandureo',
            'estado_id' => '16',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Epitacio Huerta',
            'estado_id' => '16',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Erongarícuaro',
            'estado_id' => '16',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Gabriel Zamora',
            'estado_id' => '16',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgo',
            'estado_id' => '16',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'La Huacana',
            'estado_id' => '16',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Huandacareo',
            'estado_id' => '16',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Huaniqueo',
            'estado_id' => '16',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Huetamo',
            'estado_id' => '16',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Huiramba',
            'estado_id' => '16',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Indaparapeo',
            'estado_id' => '16',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Irimbo',
            'estado_id' => '16',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlán',
            'estado_id' => '16',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Jacona',
            'estado_id' => '16',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Jiménez',
            'estado_id' => '16',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Jiquilpan',
            'estado_id' => '16',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Juárez',
            'estado_id' => '16',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Jungapeo',
            'estado_id' => '16',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Lagunillas',
            'estado_id' => '16',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Madero',
            'estado_id' => '16',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Maravatío',
            'estado_id' => '16',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Marcos Castellanos',
            'estado_id' => '16',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Lázaro Cárdenas',
            'estado_id' => '16',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Morelia',
            'estado_id' => '16',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Morelos',
            'estado_id' => '16',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Múgica',
            'estado_id' => '16',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Nahuatzen',
            'estado_id' => '16',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Nocupétaro',
            'estado_id' => '16',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Parangaricutiro',
            'estado_id' => '16',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Urecho',
            'estado_id' => '16',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Numarán',
            'estado_id' => '16',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Ocampo',
            'estado_id' => '16',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Pajacuarán',
            'estado_id' => '16',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Panindícuaro',
            'estado_id' => '16',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Parácuaro',
            'estado_id' => '16',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Paracho',
            'estado_id' => '16',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Pátzcuaro',
            'estado_id' => '16',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Penjamillo',
            'estado_id' => '16',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Peribán',
            'estado_id' => '16',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'La Piedad',
            'estado_id' => '16',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Purépero',
            'estado_id' => '16',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Puruándiro',
            'estado_id' => '16',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Queréndaro',
            'estado_id' => '16',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Quiroga',
            'estado_id' => '16',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Cojumatlán de Régules',
            'estado_id' => '16',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Los Reyes',
            'estado_id' => '16',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Sahuayo',
            'estado_id' => '16',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas',
            'estado_id' => '16',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Maya',
            'estado_id' => '16',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Salvador Escalante',
            'estado_id' => '16',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Senguio',
            'estado_id' => '16',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Susupuato',
            'estado_id' => '16',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Tacámbaro',
            'estado_id' => '16',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Tancítaro',
            'estado_id' => '16',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Tangamandapio',
            'estado_id' => '16',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Tangancícuaro',
            'estado_id' => '16',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Tanhuato',
            'estado_id' => '16',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Taretan',
            'estado_id' => '16',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Tarímbaro',
            'estado_id' => '16',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Tepalcatepec',
            'estado_id' => '16',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Tingambato',
            'estado_id' => '16',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Tingüindín',
            'estado_id' => '16',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Tiquicheo de Nicolás Romero',
            'estado_id' => '16',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalpujahua',
            'estado_id' => '16',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Tlazazalca',
            'estado_id' => '16',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'Tocumbo',
            'estado_id' => '16',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'Tumbiscatío',
            'estado_id' => '16',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Turicato',
            'estado_id' => '16',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxpan',
            'estado_id' => '16',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'Tuzantla',
            'estado_id' => '16',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Tzintzuntzan',
            'estado_id' => '16',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Tzitzio',
            'estado_id' => '16',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Uruapan',
            'estado_id' => '16',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '16',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Villamar',
            'estado_id' => '16',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Vista Hermosa',
            'estado_id' => '16',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Yurécuaro',
            'estado_id' => '16',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Zacapu',
            'estado_id' => '16',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'Zamora',
            'estado_id' => '16',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'Zináparo',
            'estado_id' => '16',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'Zinapécuaro',
            'estado_id' => '16',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'Ziracuaretiro',
            'estado_id' => '16',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'Zitácuaro',
            'estado_id' => '16',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'José Sixto Verduzco',
            'estado_id' => '16',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'Amacuzac',
            'estado_id' => '17',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Atlatlahucan',
            'estado_id' => '17',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Axochiapan',
            'estado_id' => '17',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Ayala',
            'estado_id' => '17',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Coatlán del Río',
            'estado_id' => '17',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautla',
            'estado_id' => '17',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Cuernavaca',
            'estado_id' => '17',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '17',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Huitzilac',
            'estado_id' => '17',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Jantetelco',
            'estado_id' => '17',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Jiutepec',
            'estado_id' => '17',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Jojutla',
            'estado_id' => '17',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Jonacatepec',
            'estado_id' => '17',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Mazatepec',
            'estado_id' => '17',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Miacatlán',
            'estado_id' => '17',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Ocuituco',
            'estado_id' => '17',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Puente de Ixtla',
            'estado_id' => '17',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Temixco',
            'estado_id' => '17',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Tepalcingo',
            'estado_id' => '17',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Tepoztlán',
            'estado_id' => '17',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Tetecala',
            'estado_id' => '17',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Tetela del Volcán',
            'estado_id' => '17',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalnepantla',
            'estado_id' => '17',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaltizapán de Zapata',
            'estado_id' => '17',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaquiltenango',
            'estado_id' => '17',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Tlayacapan',
            'estado_id' => '17',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Totolapan',
            'estado_id' => '17',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Xochitepec',
            'estado_id' => '17',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Yautepec',
            'estado_id' => '17',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Yecapixtla',
            'estado_id' => '17',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Zacatepec',
            'estado_id' => '17',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Zacualpan de Amilpas',
            'estado_id' => '17',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Temoac',
            'estado_id' => '17',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Acaponeta',
            'estado_id' => '18',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Ahuacatlán',
            'estado_id' => '18',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Amatlán de Cañas',
            'estado_id' => '18',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Compostela',
            'estado_id' => '18',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Huajicori',
            'estado_id' => '18',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlán del Río',
            'estado_id' => '18',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Jala',
            'estado_id' => '18',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Xalisco',
            'estado_id' => '18',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Del Nayar',
            'estado_id' => '18',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Rosamorada',
            'estado_id' => '18',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Ruíz',
            'estado_id' => '18',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'San Blas',
            'estado_id' => '18',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Lagunillas',
            'estado_id' => '18',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María del Oro',
            'estado_id' => '18',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Ixcuintla',
            'estado_id' => '18',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Tecuala',
            'estado_id' => '18',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Tepic',
            'estado_id' => '18',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxpan',
            'estado_id' => '18',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'La Yesca',
            'estado_id' => '18',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Bahía de Banderas',
            'estado_id' => '18',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Abasolo',
            'estado_id' => '19',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Agualeguas',
            'estado_id' => '19',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Los Aldamas',
            'estado_id' => '19',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Allende',
            'estado_id' => '19',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Anáhuac',
            'estado_id' => '19',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Apodaca',
            'estado_id' => '19',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Aramberri',
            'estado_id' => '19',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Bustamante',
            'estado_id' => '19',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Cadereyta Jiménez',
            'estado_id' => '19',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'El Carmen',
            'estado_id' => '19',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Cerralvo',
            'estado_id' => '19',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Ciénega de Flores',
            'estado_id' => '19',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'China',
            'estado_id' => '19',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Doctor Arroyo',
            'estado_id' => '19',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Doctor Coss',
            'estado_id' => '19',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Doctor González',
            'estado_id' => '19',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Galeana',
            'estado_id' => '19',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'García',
            'estado_id' => '19',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Garza García',
            'estado_id' => '19',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'General Bravo',
            'estado_id' => '19',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'General Escobedo',
            'estado_id' => '19',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'General Terán',
            'estado_id' => '19',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'General Treviño',
            'estado_id' => '19',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'General Zaragoza',
            'estado_id' => '19',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'General Zuazua',
            'estado_id' => '19',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe',
            'estado_id' => '19',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Los Herreras',
            'estado_id' => '19',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Higueras',
            'estado_id' => '19',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Hualahuises',
            'estado_id' => '19',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Iturbide',
            'estado_id' => '19',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Juárez',
            'estado_id' => '19',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Lampazos de Naranjo',
            'estado_id' => '19',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Linares',
            'estado_id' => '19',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Marín',
            'estado_id' => '19',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Melchor Ocampo',
            'estado_id' => '19',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Mier y Noriega',
            'estado_id' => '19',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Mina',
            'estado_id' => '19',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Montemorelos',
            'estado_id' => '19',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Monterrey',
            'estado_id' => '19',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Parás',
            'estado_id' => '19',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Pesquería',
            'estado_id' => '19',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Los Ramones',
            'estado_id' => '19',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Rayones',
            'estado_id' => '19',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Sabinas Hidalgo',
            'estado_id' => '19',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Salinas Victoria',
            'estado_id' => '19',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás de los Garza',
            'estado_id' => '19',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgo',
            'estado_id' => '19',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina',
            'estado_id' => '19',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago',
            'estado_id' => '19',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Vallecillo',
            'estado_id' => '19',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Villaldama',
            'estado_id' => '19',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Abejones',
            'estado_id' => '20',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acatlán de Pérez Figueroa',
            'estado_id' => '20',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Asunción Cacalotepec',
            'estado_id' => '20',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Asunción Cuyotepeji',
            'estado_id' => '20',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Asunción Ixtaltepec',
            'estado_id' => '20',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Asunción Nochixtlán',
            'estado_id' => '20',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Asunción Ocotlán',
            'estado_id' => '20',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Asunción Tlacolulita',
            'estado_id' => '20',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Ayotzintepec',
            'estado_id' => '20',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'El Barrio de la Soledad',
            'estado_id' => '20',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Calihualá',
            'estado_id' => '20',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Candelaria Loxicha',
            'estado_id' => '20',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Ciénega de Zimatlán',
            'estado_id' => '20',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Ciudad Ixtepec',
            'estado_id' => '20',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Coatecas Altas',
            'estado_id' => '20',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Coicoyán de las Flores',
            'estado_id' => '20',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'La Compañía',
            'estado_id' => '20',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Concepción Buenavista',
            'estado_id' => '20',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Concepción Pápalo',
            'estado_id' => '20',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Constancia del Rosario',
            'estado_id' => '20',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Cosolapa',
            'estado_id' => '20',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Cosoltepec',
            'estado_id' => '20',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Cuilápam de Guerrero',
            'estado_id' => '20',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Cuyamecalco Villa de Zaragoza',
            'estado_id' => '20',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Chahuites',
            'estado_id' => '20',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Chalcatongo de Hidalgo',
            'estado_id' => '20',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Chiquihuitlán de Benito Juárez',
            'estado_id' => '20',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Heroica Ciudad de Ejutla de Crespo',
            'estado_id' => '20',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Eloxochitlán de Flores Magón',
            'estado_id' => '20',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'El Espinal',
            'estado_id' => '20',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Tamazulápam del Espíritu Santo',
            'estado_id' => '20',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Fresnillo de Trujano',
            'estado_id' => '20',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe Etla',
            'estado_id' => '20',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe de Ramírez',
            'estado_id' => '20',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Guelatao de Juárez',
            'estado_id' => '20',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Guevea de Humboldt',
            'estado_id' => '20',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Mesones Hidalgo',
            'estado_id' => '20',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '20',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Heroica Ciudad de Huajuapan de León',
            'estado_id' => '20',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Huautepec',
            'estado_id' => '20',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Huautla de Jiménez',
            'estado_id' => '20',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtlán de Juárez',
            'estado_id' => '20',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'estado_id' => '20',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Loma Bonita',
            'estado_id' => '20',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Apasco',
            'estado_id' => '20',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Jaltepec',
            'estado_id' => '20',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Magdalena Jicotlán',
            'estado_id' => '20',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Mixtepec',
            'estado_id' => '20',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Ocotlán',
            'estado_id' => '20',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Peñasco',
            'estado_id' => '20',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Teitipac',
            'estado_id' => '20',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Tequisistlán',
            'estado_id' => '20',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Tlacotepec',
            'estado_id' => '20',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Zahuatlán',
            'estado_id' => '20',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Mariscala de Juárez',
            'estado_id' => '20',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Mártires de Tacubaya',
            'estado_id' => '20',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Matías Romero Avendaño',
            'estado_id' => '20',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Mazatlán Villa de Flores',
            'estado_id' => '20',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Miahuatlán de Porfirio Díaz',
            'estado_id' => '20',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Mixistlán de la Reforma',
            'estado_id' => '20',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Monjas',
            'estado_id' => '20',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Natividad',
            'estado_id' => '20',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Nazareno Etla',
            'estado_id' => '20',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Nejapa de Madero',
            'estado_id' => '20',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Ixpantepec Nieves',
            'estado_id' => '20',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Niltepec',
            'estado_id' => '20',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Oaxaca de Juárez',
            'estado_id' => '20',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Ocotlán de Morelos',
            'estado_id' => '20',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'La Pe',
            'estado_id' => '20',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Pinotepa de Don Luis',
            'estado_id' => '20',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Pluma Hidalgo',
            'estado_id' => '20',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'San José del Progreso',
            'estado_id' => '20',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Putla Villa de Guerrero',
            'estado_id' => '20',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Quioquitani',
            'estado_id' => '20',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Reforma de Pineda',
            'estado_id' => '20',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'La Reforma',
            'estado_id' => '20',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Reyes Etla',
            'estado_id' => '20',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Rojas de Cuauhtémoc',
            'estado_id' => '20',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Salina Cruz',
            'estado_id' => '20',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Amatengo',
            'estado_id' => '20',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Atenango',
            'estado_id' => '20',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Chayuco',
            'estado_id' => '20',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín de las Juntas',
            'estado_id' => '20',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Etla',
            'estado_id' => '20',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Loxicha',
            'estado_id' => '20',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Tlacotepec',
            'estado_id' => '20',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'San Agustín Yatareni',
            'estado_id' => '20',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Cabecera Nueva',
            'estado_id' => '20',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Dinicuiti',
            'estado_id' => '20',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Huaxpaltepec',
            'estado_id' => '20',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Huayápam',
            'estado_id' => '20',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Ixtlahuaca',
            'estado_id' => '20',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Lagunas',
            'estado_id' => '20',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Nuxiño',
            'estado_id' => '20',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Paxtlán',
            'estado_id' => '20',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Sinaxtla',
            'estado_id' => '20',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Solaga',
            'estado_id' => '20',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Teotilálpam',
            'estado_id' => '20',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Tepetlapa',
            'estado_id' => '20',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Yaá',
            'estado_id' => '20',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Zabache',
            'estado_id' => '20',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Zautla',
            'estado_id' => '20',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonino Castillo Velasco',
            'estado_id' => '20',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonino el Alto',
            'estado_id' => '20',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonino Monte Verde',
            'estado_id' => '20',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio Acutla',
            'estado_id' => '20',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio de la Cal',
            'estado_id' => '20',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio Huitepec',
            'estado_id' => '20',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio Nanahuatípam',
            'estado_id' => '20',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio Sinicahua',
            'estado_id' => '20',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio Tepetlapa',
            'estado_id' => '20',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'San Baltazar Chichicápam',
            'estado_id' => '20',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'San Baltazar Loxicha',
            'estado_id' => '20',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'San Baltazar Yatzachi el Bajo',
            'estado_id' => '20',
            'number' =>  '114',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolo Coyotepec',
            'estado_id' => '20',
            'number' =>  '115',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolomé Ayautla',
            'estado_id' => '20',
            'number' =>  '116',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolomé Loxicha',
            'estado_id' => '20',
            'number' =>  '117',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolomé Quialana',
            'estado_id' => '20',
            'number' =>  '118',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolomé Yucuañe',
            'estado_id' => '20',
            'number' =>  '119',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolomé Zoogocho',
            'estado_id' => '20',
            'number' =>  '120',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolo Soyaltepec',
            'estado_id' => '20',
            'number' =>  '121',
        ]);
        App\Municipio::create([
            'name' =>  'San Bartolo Yautepec',
            'estado_id' => '20',
            'number' =>  '122',
        ]);
        App\Municipio::create([
            'name' =>  'San Bernardo Mixtepec',
            'estado_id' => '20',
            'number' =>  '123',
        ]);
        App\Municipio::create([
            'name' =>  'San Blas Atempa',
            'estado_id' => '20',
            'number' =>  '124',
        ]);
        App\Municipio::create([
            'name' =>  'San Carlos Yautepec',
            'estado_id' => '20',
            'number' =>  '125',
        ]);
        App\Municipio::create([
            'name' =>  'San Cristóbal Amatlán',
            'estado_id' => '20',
            'number' =>  '126',
        ]);
        App\Municipio::create([
            'name' =>  'San Cristóbal Amoltepec',
            'estado_id' => '20',
            'number' =>  '127',
        ]);
        App\Municipio::create([
            'name' =>  'San Cristóbal Lachirioag',
            'estado_id' => '20',
            'number' =>  '128',
        ]);
        App\Municipio::create([
            'name' =>  'San Cristóbal Suchixtlahuaca',
            'estado_id' => '20',
            'number' =>  '129',
        ]);
        App\Municipio::create([
            'name' =>  'San Dionisio del Mar',
            'estado_id' => '20',
            'number' =>  '130',
        ]);
        App\Municipio::create([
            'name' =>  'San Dionisio Ocotepec',
            'estado_id' => '20',
            'number' =>  '131',
        ]);
        App\Municipio::create([
            'name' =>  'San Dionisio Ocotlán',
            'estado_id' => '20',
            'number' =>  '132',
        ]);
        App\Municipio::create([
            'name' =>  'San Esteban Atatlahuca',
            'estado_id' => '20',
            'number' =>  '133',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe Jalapa de Díaz',
            'estado_id' => '20',
            'number' =>  '134',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe Tejalápam',
            'estado_id' => '20',
            'number' =>  '135',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe Usila',
            'estado_id' => '20',
            'number' =>  '136',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Cahuacuá',
            'estado_id' => '20',
            'number' =>  '137',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Cajonos',
            'estado_id' => '20',
            'number' =>  '138',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Chapulapa',
            'estado_id' => '20',
            'number' =>  '139',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Chindúa',
            'estado_id' => '20',
            'number' =>  '140',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco del Mar',
            'estado_id' => '20',
            'number' =>  '141',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Huehuetlán',
            'estado_id' => '20',
            'number' =>  '142',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Ixhuatán',
            'estado_id' => '20',
            'number' =>  '143',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Jaltepetongo',
            'estado_id' => '20',
            'number' =>  '144',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Lachigoló',
            'estado_id' => '20',
            'number' =>  '145',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Logueche',
            'estado_id' => '20',
            'number' =>  '146',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Nuxaño',
            'estado_id' => '20',
            'number' =>  '147',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Ozolotepec',
            'estado_id' => '20',
            'number' =>  '148',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Sola',
            'estado_id' => '20',
            'number' =>  '149',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Telixtlahuaca',
            'estado_id' => '20',
            'number' =>  '150',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Teopan',
            'estado_id' => '20',
            'number' =>  '151',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Tlapancingo',
            'estado_id' => '20',
            'number' =>  '152',
        ]);
        App\Municipio::create([
            'name' =>  'San Gabriel Mixtepec',
            'estado_id' => '20',
            'number' =>  '153',
        ]);
        App\Municipio::create([
            'name' =>  'San Ildefonso Amatlán',
            'estado_id' => '20',
            'number' =>  '154',
        ]);
        App\Municipio::create([
            'name' =>  'San Ildefonso Sola',
            'estado_id' => '20',
            'number' =>  '155',
        ]);
        App\Municipio::create([
            'name' =>  'San Ildefonso Villa Alta',
            'estado_id' => '20',
            'number' =>  '156',
        ]);
        App\Municipio::create([
            'name' =>  'San Jacinto Amilpas',
            'estado_id' => '20',
            'number' =>  '157',
        ]);
        App\Municipio::create([
            'name' =>  'San Jacinto Tlacotepec',
            'estado_id' => '20',
            'number' =>  '158',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Coatlán',
            'estado_id' => '20',
            'number' =>  '159',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Silacayoapilla',
            'estado_id' => '20',
            'number' =>  '160',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Sosola',
            'estado_id' => '20',
            'number' =>  '161',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Taviche',
            'estado_id' => '20',
            'number' =>  '162',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Tecóatl',
            'estado_id' => '20',
            'number' =>  '163',
        ]);
        App\Municipio::create([
            'name' =>  'San Jorge Nuchita',
            'estado_id' => '20',
            'number' =>  '164',
        ]);
        App\Municipio::create([
            'name' =>  'San José Ayuquila',
            'estado_id' => '20',
            'number' =>  '165',
        ]);
        App\Municipio::create([
            'name' =>  'San José Chiltepec',
            'estado_id' => '20',
            'number' =>  '166',
        ]);
        App\Municipio::create([
            'name' =>  'San José del Peñasco',
            'estado_id' => '20',
            'number' =>  '167',
        ]);
        App\Municipio::create([
            'name' =>  'San José Estancia Grande',
            'estado_id' => '20',
            'number' =>  '168',
        ]);
        App\Municipio::create([
            'name' =>  'San José Independencia',
            'estado_id' => '20',
            'number' =>  '169',
        ]);
        App\Municipio::create([
            'name' =>  'San José Lachiguiri',
            'estado_id' => '20',
            'number' =>  '170',
        ]);
        App\Municipio::create([
            'name' =>  'San José Tenango',
            'estado_id' => '20',
            'number' =>  '171',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Achiutla',
            'estado_id' => '20',
            'number' =>  '172',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Atepec',
            'estado_id' => '20',
            'number' =>  '173',
        ]);
        App\Municipio::create([
            'name' =>  'Ánimas Trujano',
            'estado_id' => '20',
            'number' =>  '174',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Atatlahuca',
            'estado_id' => '20',
            'number' =>  '175',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Coixtlahuaca',
            'estado_id' => '20',
            'number' =>  '176',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Cuicatlán',
            'estado_id' => '20',
            'number' =>  '177',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Guelache',
            'estado_id' => '20',
            'number' =>  '178',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Jayacatlán',
            'estado_id' => '20',
            'number' =>  '179',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Lo de Soto',
            'estado_id' => '20',
            'number' =>  '180',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Suchitepec',
            'estado_id' => '20',
            'number' =>  '181',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Tlacoatzintepec',
            'estado_id' => '20',
            'number' =>  '182',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Tlachichilco',
            'estado_id' => '20',
            'number' =>  '183',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Tuxtepec',
            'estado_id' => '20',
            'number' =>  '184',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Cacahuatepec',
            'estado_id' => '20',
            'number' =>  '185',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Cieneguilla',
            'estado_id' => '20',
            'number' =>  '186',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Coatzóspam',
            'estado_id' => '20',
            'number' =>  '187',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Colorado',
            'estado_id' => '20',
            'number' =>  '188',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Comaltepec',
            'estado_id' => '20',
            'number' =>  '189',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Cotzocón',
            'estado_id' => '20',
            'number' =>  '190',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Chicomezúchil',
            'estado_id' => '20',
            'number' =>  '191',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Chilateca',
            'estado_id' => '20',
            'number' =>  '192',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan del Estado',
            'estado_id' => '20',
            'number' =>  '193',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan del Río',
            'estado_id' => '20',
            'number' =>  '194',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Diuxi',
            'estado_id' => '20',
            'number' =>  '195',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Evangelista Analco',
            'estado_id' => '20',
            'number' =>  '196',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Guelavía',
            'estado_id' => '20',
            'number' =>  '197',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Guichicovi',
            'estado_id' => '20',
            'number' =>  '198',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Ihualtepec',
            'estado_id' => '20',
            'number' =>  '199',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Juquila Mixes',
            'estado_id' => '20',
            'number' =>  '200',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Juquila Vijanos',
            'estado_id' => '20',
            'number' =>  '201',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Lachao',
            'estado_id' => '20',
            'number' =>  '202',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Lachigalla',
            'estado_id' => '20',
            'number' =>  '203',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Lajarcia',
            'estado_id' => '20',
            'number' =>  '204',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Lalana',
            'estado_id' => '20',
            'number' =>  '205',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan de los Cués',
            'estado_id' => '20',
            'number' =>  '206',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Mazatlán',
            'estado_id' => '20',
            'number' =>  '207',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'number' =>  '208',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'number' =>  '209',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Ñumí',
            'estado_id' => '20',
            'number' =>  '210',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Ozolotepec',
            'estado_id' => '20',
            'number' =>  '211',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Petlapa',
            'estado_id' => '20',
            'number' =>  '212',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Quiahije',
            'estado_id' => '20',
            'number' =>  '213',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Quiotepec',
            'estado_id' => '20',
            'number' =>  '214',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Sayultepec',
            'estado_id' => '20',
            'number' =>  '215',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Tabaá',
            'estado_id' => '20',
            'number' =>  '216',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Tamazola',
            'estado_id' => '20',
            'number' =>  '217',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Teita',
            'estado_id' => '20',
            'number' =>  '218',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Teitipac',
            'estado_id' => '20',
            'number' =>  '219',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Tepeuxila',
            'estado_id' => '20',
            'number' =>  '220',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Teposcolula',
            'estado_id' => '20',
            'number' =>  '221',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Yaeé',
            'estado_id' => '20',
            'number' =>  '222',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Yatzona',
            'estado_id' => '20',
            'number' =>  '223',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Yucuita',
            'estado_id' => '20',
            'number' =>  '224',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo',
            'estado_id' => '20',
            'number' =>  '225',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo Albarradas',
            'estado_id' => '20',
            'number' =>  '226',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo Cacaotepec',
            'estado_id' => '20',
            'number' =>  '227',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo Cuaunecuiltitla',
            'estado_id' => '20',
            'number' =>  '228',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo Texmelúcan',
            'estado_id' => '20',
            'number' =>  '229',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo Victoria',
            'estado_id' => '20',
            'number' =>  '230',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas Camotlán',
            'estado_id' => '20',
            'number' =>  '231',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas Ojitlán',
            'estado_id' => '20',
            'number' =>  '232',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas Quiaviní',
            'estado_id' => '20',
            'number' =>  '233',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas Zoquiápam',
            'estado_id' => '20',
            'number' =>  '234',
        ]);
        App\Municipio::create([
            'name' =>  'San Luis Amatlán',
            'estado_id' => '20',
            'number' =>  '235',
        ]);
        App\Municipio::create([
            'name' =>  'San Marcial Ozolotepec',
            'estado_id' => '20',
            'number' =>  '236',
        ]);
        App\Municipio::create([
            'name' =>  'San Marcos Arteaga',
            'estado_id' => '20',
            'number' =>  '237',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín de los Cansecos',
            'estado_id' => '20',
            'number' =>  '238',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Huamelúlpam',
            'estado_id' => '20',
            'number' =>  '239',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Itunyoso',
            'estado_id' => '20',
            'number' =>  '240',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Lachilá',
            'estado_id' => '20',
            'number' =>  '241',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Peras',
            'estado_id' => '20',
            'number' =>  '242',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Tilcajete',
            'estado_id' => '20',
            'number' =>  '243',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Toxpalan',
            'estado_id' => '20',
            'number' =>  '244',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Zacatepec',
            'estado_id' => '20',
            'number' =>  '245',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Cajonos',
            'estado_id' => '20',
            'number' =>  '246',
        ]);
        App\Municipio::create([
            'name' =>  'Capulálpam de Méndez',
            'estado_id' => '20',
            'number' =>  '247',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo del Mar',
            'estado_id' => '20',
            'number' =>  '248',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Yoloxochitlán',
            'estado_id' => '20',
            'number' =>  '249',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Etlatongo',
            'estado_id' => '20',
            'number' =>  '250',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Nejápam',
            'estado_id' => '20',
            'number' =>  '251',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Peñasco',
            'estado_id' => '20',
            'number' =>  '252',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Piñas',
            'estado_id' => '20',
            'number' =>  '253',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Río Hondo',
            'estado_id' => '20',
            'number' =>  '254',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Sindihui',
            'estado_id' => '20',
            'number' =>  '255',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Tlapiltepec',
            'estado_id' => '20',
            'number' =>  '256',
        ]);
        App\Municipio::create([
            'name' =>  'San Melchor Betaza',
            'estado_id' => '20',
            'number' =>  '257',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Achiutla',
            'estado_id' => '20',
            'number' =>  '258',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Ahuehuetitlán',
            'estado_id' => '20',
            'number' =>  '259',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Aloápam',
            'estado_id' => '20',
            'number' =>  '260',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Amatitlán',
            'estado_id' => '20',
            'number' =>  '261',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Amatlán',
            'estado_id' => '20',
            'number' =>  '262',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Coatlán',
            'estado_id' => '20',
            'number' =>  '263',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Chicahua',
            'estado_id' => '20',
            'number' =>  '264',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Chimalapa',
            'estado_id' => '20',
            'number' =>  '265',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel del Puerto',
            'estado_id' => '20',
            'number' =>  '266',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel del Río',
            'estado_id' => '20',
            'number' =>  '267',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Ejutla',
            'estado_id' => '20',
            'number' =>  '268',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel el Grande',
            'estado_id' => '20',
            'number' =>  '269',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Huautla',
            'estado_id' => '20',
            'number' =>  '270',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Mixtepec',
            'estado_id' => '20',
            'number' =>  '271',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Panixtlahuaca',
            'estado_id' => '20',
            'number' =>  '272',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Peras',
            'estado_id' => '20',
            'number' =>  '273',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Piedras',
            'estado_id' => '20',
            'number' =>  '274',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Quetzaltepec',
            'estado_id' => '20',
            'number' =>  '275',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Santa Flor',
            'estado_id' => '20',
            'number' =>  '276',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Sola de Vega',
            'estado_id' => '20',
            'number' =>  '277',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Soyaltepec',
            'estado_id' => '20',
            'number' =>  '278',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Suchixtepec',
            'estado_id' => '20',
            'number' =>  '279',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Talea de Castro',
            'estado_id' => '20',
            'number' =>  '280',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tecomatlán',
            'estado_id' => '20',
            'number' =>  '281',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tenango',
            'estado_id' => '20',
            'number' =>  '282',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tequixtepec',
            'estado_id' => '20',
            'number' =>  '283',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tilquiápam',
            'estado_id' => '20',
            'number' =>  '284',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tlacamama',
            'estado_id' => '20',
            'number' =>  '285',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tlacotepec',
            'estado_id' => '20',
            'number' =>  '286',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Tulancingo',
            'estado_id' => '20',
            'number' =>  '287',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Yotao',
            'estado_id' => '20',
            'number' =>  '288',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás',
            'estado_id' => '20',
            'number' =>  '289',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás Hidalgo',
            'estado_id' => '20',
            'number' =>  '290',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Coatlán',
            'estado_id' => '20',
            'number' =>  '291',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Cuatro Venados',
            'estado_id' => '20',
            'number' =>  '292',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Etla',
            'estado_id' => '20',
            'number' =>  '293',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Huitzo',
            'estado_id' => '20',
            'number' =>  '294',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Huixtepec',
            'estado_id' => '20',
            'number' =>  '295',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Macuiltianguis',
            'estado_id' => '20',
            'number' =>  '296',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Tijaltepec',
            'estado_id' => '20',
            'number' =>  '297',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Villa de Mitla',
            'estado_id' => '20',
            'number' =>  '298',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Yaganiza',
            'estado_id' => '20',
            'number' =>  '299',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Amuzgos',
            'estado_id' => '20',
            'number' =>  '300',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Apóstol',
            'estado_id' => '20',
            'number' =>  '301',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Atoyac',
            'estado_id' => '20',
            'number' =>  '302',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Cajonos',
            'estado_id' => '20',
            'number' =>  '303',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Coxcaltepec Cántaros',
            'estado_id' => '20',
            'number' =>  '304',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Comitancillo',
            'estado_id' => '20',
            'number' =>  '305',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro el Alto',
            'estado_id' => '20',
            'number' =>  '306',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Huamelula',
            'estado_id' => '20',
            'number' =>  '307',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Huilotepec',
            'estado_id' => '20',
            'number' =>  '308',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Ixcatlán',
            'estado_id' => '20',
            'number' =>  '309',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Ixtlahuaca',
            'estado_id' => '20',
            'number' =>  '310',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Jaltepetongo',
            'estado_id' => '20',
            'number' =>  '311',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Jicayán',
            'estado_id' => '20',
            'number' =>  '312',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Jocotipac',
            'estado_id' => '20',
            'number' =>  '313',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Juchatengo',
            'estado_id' => '20',
            'number' =>  '314',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Mártir',
            'estado_id' => '20',
            'number' =>  '315',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Mártir Quiechapa',
            'estado_id' => '20',
            'number' =>  '316',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Mártir Yucuxaco',
            'estado_id' => '20',
            'number' =>  '317',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'number' =>  '318',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'number' =>  '319',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Molinos',
            'estado_id' => '20',
            'number' =>  '320',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Nopala',
            'estado_id' => '20',
            'number' =>  '321',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Ocopetatillo',
            'estado_id' => '20',
            'number' =>  '322',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Ocotepec',
            'estado_id' => '20',
            'number' =>  '323',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Pochutla',
            'estado_id' => '20',
            'number' =>  '324',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Quiatoni',
            'estado_id' => '20',
            'number' =>  '325',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Sochiápam',
            'estado_id' => '20',
            'number' =>  '326',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Tapanatepec',
            'estado_id' => '20',
            'number' =>  '327',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Taviche',
            'estado_id' => '20',
            'number' =>  '328',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Teozacoalco',
            'estado_id' => '20',
            'number' =>  '329',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Teutila',
            'estado_id' => '20',
            'number' =>  '330',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Tidaá',
            'estado_id' => '20',
            'number' =>  '331',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Topiltepec',
            'estado_id' => '20',
            'number' =>  '332',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Totolápam',
            'estado_id' => '20',
            'number' =>  '333',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Tututepec de Melchor Ocampo',
            'estado_id' => '20',
            'number' =>  '334',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Yaneri',
            'estado_id' => '20',
            'number' =>  '335',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Yólox',
            'estado_id' => '20',
            'number' =>  '336',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro y San Pablo Ayutla',
            'estado_id' => '20',
            'number' =>  '337',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Etla',
            'estado_id' => '20',
            'number' =>  '338',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro y San Pablo Teposcolula',
            'estado_id' => '20',
            'number' =>  '339',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro y San Pablo Tequixtepec',
            'estado_id' => '20',
            'number' =>  '340',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Yucunama',
            'estado_id' => '20',
            'number' =>  '341',
        ]);
        App\Municipio::create([
            'name' =>  'San Raymundo Jalpan',
            'estado_id' => '20',
            'number' =>  '342',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Abasolo',
            'estado_id' => '20',
            'number' =>  '343',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Coatlán',
            'estado_id' => '20',
            'number' =>  '344',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Ixcapa',
            'estado_id' => '20',
            'number' =>  '345',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Nicananduta',
            'estado_id' => '20',
            'number' =>  '346',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Río Hondo',
            'estado_id' => '20',
            'number' =>  '347',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Tecomaxtlahuaca',
            'estado_id' => '20',
            'number' =>  '348',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Teitipac',
            'estado_id' => '20',
            'number' =>  '349',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Tutla',
            'estado_id' => '20',
            'number' =>  '350',
        ]);
        App\Municipio::create([
            'name' =>  'San Simón Almolongas',
            'estado_id' => '20',
            'number' =>  '351',
        ]);
        App\Municipio::create([
            'name' =>  'San Simón Zahuatlán',
            'estado_id' => '20',
            'number' =>  '352',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana',
            'estado_id' => '20',
            'number' =>  '353',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Ateixtlahuaca',
            'estado_id' => '20',
            'number' =>  '354',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Cuauhtémoc',
            'estado_id' => '20',
            'number' =>  '355',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana del Valle',
            'estado_id' => '20',
            'number' =>  '356',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Tavela',
            'estado_id' => '20',
            'number' =>  '357',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Tlapacoyan',
            'estado_id' => '20',
            'number' =>  '358',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Yareni',
            'estado_id' => '20',
            'number' =>  '359',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Zegache',
            'estado_id' => '20',
            'number' =>  '360',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catalina Quierí',
            'estado_id' => '20',
            'number' =>  '361',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Cuixtla',
            'estado_id' => '20',
            'number' =>  '362',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Ixtepeji',
            'estado_id' => '20',
            'number' =>  '363',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Juquila',
            'estado_id' => '20',
            'number' =>  '364',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Lachatao',
            'estado_id' => '20',
            'number' =>  '365',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Loxicha',
            'estado_id' => '20',
            'number' =>  '366',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Mechoacán',
            'estado_id' => '20',
            'number' =>  '367',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Minas',
            'estado_id' => '20',
            'number' =>  '368',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Quiané',
            'estado_id' => '20',
            'number' =>  '369',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Tayata',
            'estado_id' => '20',
            'number' =>  '370',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Ticuá',
            'estado_id' => '20',
            'number' =>  '371',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Yosonotú',
            'estado_id' => '20',
            'number' =>  '372',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Zapoquila',
            'estado_id' => '20',
            'number' =>  '373',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Acatepec',
            'estado_id' => '20',
            'number' =>  '374',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Amilpas',
            'estado_id' => '20',
            'number' =>  '375',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz de Bravo',
            'estado_id' => '20',
            'number' =>  '376',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Itundujia',
            'estado_id' => '20',
            'number' =>  '377',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Mixtepec',
            'estado_id' => '20',
            'number' =>  '378',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Nundaco',
            'estado_id' => '20',
            'number' =>  '379',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Papalutla',
            'estado_id' => '20',
            'number' =>  '380',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Tacache de Mina',
            'estado_id' => '20',
            'number' =>  '381',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Tacahua',
            'estado_id' => '20',
            'number' =>  '382',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Tayata',
            'estado_id' => '20',
            'number' =>  '383',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Xitla',
            'estado_id' => '20',
            'number' =>  '384',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Xoxocotlán',
            'estado_id' => '20',
            'number' =>  '385',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Zenzontepec',
            'estado_id' => '20',
            'number' =>  '386',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Gertrudis',
            'estado_id' => '20',
            'number' =>  '387',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Inés del Monte',
            'estado_id' => '20',
            'number' =>  '388',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Inés Yatzeche',
            'estado_id' => '20',
            'number' =>  '389',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Lucía del Camino',
            'estado_id' => '20',
            'number' =>  '390',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Lucía Miahuatlán',
            'estado_id' => '20',
            'number' =>  '391',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Lucía Monteverde',
            'estado_id' => '20',
            'number' =>  '392',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Lucía Ocotlán',
            'estado_id' => '20',
            'number' =>  '393',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Alotepec',
            'estado_id' => '20',
            'number' =>  '394',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Apazco',
            'estado_id' => '20',
            'number' =>  '395',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María la Asunción',
            'estado_id' => '20',
            'number' =>  '396',
        ]);
        App\Municipio::create([
            'name' =>  'Heroica Ciudad de Tlaxiaco',
            'estado_id' => '20',
            'number' =>  '397',
        ]);
        App\Municipio::create([
            'name' =>  'Ayoquezco de Aldama',
            'estado_id' => '20',
            'number' =>  '398',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Atzompa',
            'estado_id' => '20',
            'number' =>  '399',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Camotlán',
            'estado_id' => '20',
            'number' =>  '400',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Colotepec',
            'estado_id' => '20',
            'number' =>  '401',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Cortijo',
            'estado_id' => '20',
            'number' =>  '402',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Coyotepec',
            'estado_id' => '20',
            'number' =>  '403',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Chachoápam',
            'estado_id' => '20',
            'number' =>  '404',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Chilapa de Díaz',
            'estado_id' => '20',
            'number' =>  '405',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Chilchotla',
            'estado_id' => '20',
            'number' =>  '406',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Chimalapa',
            'estado_id' => '20',
            'number' =>  '407',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María del Rosario',
            'estado_id' => '20',
            'number' =>  '408',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María del Tule',
            'estado_id' => '20',
            'number' =>  '409',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Ecatepec',
            'estado_id' => '20',
            'number' =>  '410',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Guelacé',
            'estado_id' => '20',
            'number' =>  '411',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Guienagati',
            'estado_id' => '20',
            'number' =>  '412',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Huatulco',
            'estado_id' => '20',
            'number' =>  '413',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Huazolotitlán',
            'estado_id' => '20',
            'number' =>  '414',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Ipalapa',
            'estado_id' => '20',
            'number' =>  '415',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Ixcatlán',
            'estado_id' => '20',
            'number' =>  '416',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Jacatepec',
            'estado_id' => '20',
            'number' =>  '417',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Jalapa del Marqués',
            'estado_id' => '20',
            'number' =>  '418',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Jaltianguis',
            'estado_id' => '20',
            'number' =>  '419',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Lachixío',
            'estado_id' => '20',
            'number' =>  '420',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Mixtequilla',
            'estado_id' => '20',
            'number' =>  '421',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Nativitas',
            'estado_id' => '20',
            'number' =>  '422',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Nduayaco',
            'estado_id' => '20',
            'number' =>  '423',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Ozolotepec',
            'estado_id' => '20',
            'number' =>  '424',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Pápalo',
            'estado_id' => '20',
            'number' =>  '425',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Peñoles',
            'estado_id' => '20',
            'number' =>  '426',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Petapa',
            'estado_id' => '20',
            'number' =>  '427',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Quiegolani',
            'estado_id' => '20',
            'number' =>  '428',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Sola',
            'estado_id' => '20',
            'number' =>  '429',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Tataltepec',
            'estado_id' => '20',
            'number' =>  '430',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Tecomavaca',
            'estado_id' => '20',
            'number' =>  '431',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Temaxcalapa',
            'estado_id' => '20',
            'number' =>  '432',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Temaxcaltepec',
            'estado_id' => '20',
            'number' =>  '433',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Teopoxco',
            'estado_id' => '20',
            'number' =>  '434',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Tepantlali',
            'estado_id' => '20',
            'number' =>  '435',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Texcatitlán',
            'estado_id' => '20',
            'number' =>  '436',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Tlahuitoltepec',
            'estado_id' => '20',
            'number' =>  '437',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Tlalixtac',
            'estado_id' => '20',
            'number' =>  '438',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Tonameca',
            'estado_id' => '20',
            'number' =>  '439',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Totolapilla',
            'estado_id' => '20',
            'number' =>  '440',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Xadani',
            'estado_id' => '20',
            'number' =>  '441',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Yalina',
            'estado_id' => '20',
            'number' =>  '442',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Yavesía',
            'estado_id' => '20',
            'number' =>  '443',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Yolotepec',
            'estado_id' => '20',
            'number' =>  '444',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Yosoyúa',
            'estado_id' => '20',
            'number' =>  '445',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Yucuhiti',
            'estado_id' => '20',
            'number' =>  '446',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Zacatepec',
            'estado_id' => '20',
            'number' =>  '447',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Zaniza',
            'estado_id' => '20',
            'number' =>  '448',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María Zoquitlán',
            'estado_id' => '20',
            'number' =>  '449',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Amoltepec',
            'estado_id' => '20',
            'number' =>  '450',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Apoala',
            'estado_id' => '20',
            'number' =>  '451',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Apóstol',
            'estado_id' => '20',
            'number' =>  '452',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Astata',
            'estado_id' => '20',
            'number' =>  '453',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Atitlán',
            'estado_id' => '20',
            'number' =>  '454',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Ayuquililla',
            'estado_id' => '20',
            'number' =>  '455',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Cacaloxtepec',
            'estado_id' => '20',
            'number' =>  '456',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Camotlán',
            'estado_id' => '20',
            'number' =>  '457',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Comaltepec',
            'estado_id' => '20',
            'number' =>  '458',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Chazumba',
            'estado_id' => '20',
            'number' =>  '459',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Choápam',
            'estado_id' => '20',
            'number' =>  '460',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago del Río',
            'estado_id' => '20',
            'number' =>  '461',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Huajolotitlán',
            'estado_id' => '20',
            'number' =>  '462',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Huauclilla',
            'estado_id' => '20',
            'number' =>  '463',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Ihuitlán Plumas',
            'estado_id' => '20',
            'number' =>  '464',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Ixcuintepec',
            'estado_id' => '20',
            'number' =>  '465',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Ixtayutla',
            'estado_id' => '20',
            'number' =>  '466',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Jamiltepec',
            'estado_id' => '20',
            'number' =>  '467',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Jocotepec',
            'estado_id' => '20',
            'number' =>  '468',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Juxtlahuaca',
            'estado_id' => '20',
            'number' =>  '469',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Lachiguiri',
            'estado_id' => '20',
            'number' =>  '470',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Lalopa',
            'estado_id' => '20',
            'number' =>  '471',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Laollaga',
            'estado_id' => '20',
            'number' =>  '472',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Laxopa',
            'estado_id' => '20',
            'number' =>  '473',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Llano Grande',
            'estado_id' => '20',
            'number' =>  '474',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Matatlán',
            'estado_id' => '20',
            'number' =>  '475',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Miltepec',
            'estado_id' => '20',
            'number' =>  '476',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Minas',
            'estado_id' => '20',
            'number' =>  '477',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Nacaltepec',
            'estado_id' => '20',
            'number' =>  '478',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Nejapilla',
            'estado_id' => '20',
            'number' =>  '479',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Nundiche',
            'estado_id' => '20',
            'number' =>  '480',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Nuyoó',
            'estado_id' => '20',
            'number' =>  '481',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Pinotepa Nacional',
            'estado_id' => '20',
            'number' =>  '482',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Suchilquitongo',
            'estado_id' => '20',
            'number' =>  '483',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tamazola',
            'estado_id' => '20',
            'number' =>  '484',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tapextla',
            'estado_id' => '20',
            'number' =>  '485',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Tejúpam de la Unión',
            'estado_id' => '20',
            'number' =>  '486',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tenango',
            'estado_id' => '20',
            'number' =>  '487',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tepetlapa',
            'estado_id' => '20',
            'number' =>  '488',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tetepec',
            'estado_id' => '20',
            'number' =>  '489',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Texcalcingo',
            'estado_id' => '20',
            'number' =>  '490',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Textitlán',
            'estado_id' => '20',
            'number' =>  '491',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tilantongo',
            'estado_id' => '20',
            'number' =>  '492',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tillo',
            'estado_id' => '20',
            'number' =>  '493',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tlazoyaltepec',
            'estado_id' => '20',
            'number' =>  '494',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Xanica',
            'estado_id' => '20',
            'number' =>  '495',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Xiacuí',
            'estado_id' => '20',
            'number' =>  '496',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Yaitepec',
            'estado_id' => '20',
            'number' =>  '497',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Yaveo',
            'estado_id' => '20',
            'number' =>  '498',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Yolomécatl',
            'estado_id' => '20',
            'number' =>  '499',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Yosondúa',
            'estado_id' => '20',
            'number' =>  '500',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Yucuyachi',
            'estado_id' => '20',
            'number' =>  '501',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Zacatepec',
            'estado_id' => '20',
            'number' =>  '502',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Zoochila',
            'estado_id' => '20',
            'number' =>  '503',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Zoquiápam',
            'estado_id' => '20',
            'number' =>  '504',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Ingenio',
            'estado_id' => '20',
            'number' =>  '505',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Albarradas',
            'estado_id' => '20',
            'number' =>  '506',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Armenta',
            'estado_id' => '20',
            'number' =>  '507',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Chihuitán',
            'estado_id' => '20',
            'number' =>  '508',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo de Morelos',
            'estado_id' => '20',
            'number' =>  '509',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Ixcatlán',
            'estado_id' => '20',
            'number' =>  '510',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Nuxaá',
            'estado_id' => '20',
            'number' =>  '511',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Ozolotepec',
            'estado_id' => '20',
            'number' =>  '512',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Petapa',
            'estado_id' => '20',
            'number' =>  '513',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Roayaga',
            'estado_id' => '20',
            'number' =>  '514',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Tehuantepec',
            'estado_id' => '20',
            'number' =>  '515',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Teojomulco',
            'estado_id' => '20',
            'number' =>  '516',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Tepuxtepec',
            'estado_id' => '20',
            'number' =>  '517',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Tlatayápam',
            'estado_id' => '20',
            'number' =>  '518',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Tomaltepec',
            'estado_id' => '20',
            'number' =>  '519',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Tonalá',
            'estado_id' => '20',
            'number' =>  '520',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Tonaltepec',
            'estado_id' => '20',
            'number' =>  '521',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Xagacía',
            'estado_id' => '20',
            'number' =>  '522',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Yanhuitlán',
            'estado_id' => '20',
            'number' =>  '523',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Yodohino',
            'estado_id' => '20',
            'number' =>  '524',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo Zanatepec',
            'estado_id' => '20',
            'number' =>  '525',
        ]);
        App\Municipio::create([
            'name' =>  'Santos Reyes Nopala',
            'estado_id' => '20',
            'number' =>  '526',
        ]);
        App\Municipio::create([
            'name' =>  'Santos Reyes Pápalo',
            'estado_id' => '20',
            'number' =>  '527',
        ]);
        App\Municipio::create([
            'name' =>  'Santos Reyes Tepejillo',
            'estado_id' => '20',
            'number' =>  '528',
        ]);
        App\Municipio::create([
            'name' =>  'Santos Reyes Yucuná',
            'estado_id' => '20',
            'number' =>  '529',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Tomás Jalieza',
            'estado_id' => '20',
            'number' =>  '530',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Tomás Mazaltepec',
            'estado_id' => '20',
            'number' =>  '531',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Tomás Ocotepec',
            'estado_id' => '20',
            'number' =>  '532',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Tomás Tamazulapan',
            'estado_id' => '20',
            'number' =>  '533',
        ]);
        App\Municipio::create([
            'name' =>  'San Vicente Coatlán',
            'estado_id' => '20',
            'number' =>  '534',
        ]);
        App\Municipio::create([
            'name' =>  'San Vicente Lachixío',
            'estado_id' => '20',
            'number' =>  '535',
        ]);
        App\Municipio::create([
            'name' =>  'San Vicente Nuñú',
            'estado_id' => '20',
            'number' =>  '536',
        ]);
        App\Municipio::create([
            'name' =>  'Silacayoápam',
            'estado_id' => '20',
            'number' =>  '537',
        ]);
        App\Municipio::create([
            'name' =>  'Sitio de Xitlapehua',
            'estado_id' => '20',
            'number' =>  '538',
        ]);
        App\Municipio::create([
            'name' =>  'Soledad Etla',
            'estado_id' => '20',
            'number' =>  '539',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Tamazulápam del Progreso',
            'estado_id' => '20',
            'number' =>  '540',
        ]);
        App\Municipio::create([
            'name' =>  'Tanetze de Zaragoza',
            'estado_id' => '20',
            'number' =>  '541',
        ]);
        App\Municipio::create([
            'name' =>  'Taniche',
            'estado_id' => '20',
            'number' =>  '542',
        ]);
        App\Municipio::create([
            'name' =>  'Tataltepec de Valdés',
            'estado_id' => '20',
            'number' =>  '543',
        ]);
        App\Municipio::create([
            'name' =>  'Teococuilco de Marcos Pérez',
            'estado_id' => '20',
            'number' =>  '544',
        ]);
        App\Municipio::create([
            'name' =>  'Teotitlán de Flores Magón',
            'estado_id' => '20',
            'number' =>  '545',
        ]);
        App\Municipio::create([
            'name' =>  'Teotitlán del Valle',
            'estado_id' => '20',
            'number' =>  '546',
        ]);
        App\Municipio::create([
            'name' =>  'Teotongo',
            'estado_id' => '20',
            'number' =>  '547',
        ]);
        App\Municipio::create([
            'name' =>  'Tepelmeme Villa de Morelos',
            'estado_id' => '20',
            'number' =>  '548',
        ]);
        App\Municipio::create([
            'name' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'estado_id' => '20',
            'number' =>  '549',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Tlacochahuaya',
            'estado_id' => '20',
            'number' =>  '550',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacolula de Matamoros',
            'estado_id' => '20',
            'number' =>  '551',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacotepec Plumas',
            'estado_id' => '20',
            'number' =>  '552',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalixtac de Cabrera',
            'estado_id' => '20',
            'number' =>  '553',
        ]);
        App\Municipio::create([
            'name' =>  'Totontepec Villa de Morelos',
            'estado_id' => '20',
            'number' =>  '554',
        ]);
        App\Municipio::create([
            'name' =>  'Trinidad Zaachila',
            'estado_id' => '20',
            'number' =>  '555',
        ]);
        App\Municipio::create([
            'name' =>  'La Trinidad Vista Hermosa',
            'estado_id' => '20',
            'number' =>  '556',
        ]);
        App\Municipio::create([
            'name' =>  'Unión Hidalgo',
            'estado_id' => '20',
            'number' =>  '557',
        ]);
        App\Municipio::create([
            'name' =>  'Valerio Trujano',
            'estado_id' => '20',
            'number' =>  '558',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Bautista Valle Nacional',
            'estado_id' => '20',
            'number' =>  '559',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Díaz Ordaz',
            'estado_id' => '20',
            'number' =>  '560',
        ]);
        App\Municipio::create([
            'name' =>  'Yaxe',
            'estado_id' => '20',
            'number' =>  '561',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena Yodocono de Porfirio Díaz',
            'estado_id' => '20',
            'number' =>  '562',
        ]);
        App\Municipio::create([
            'name' =>  'Yogana',
            'estado_id' => '20',
            'number' =>  '563',
        ]);
        App\Municipio::create([
            'name' =>  'Yutanduchi de Guerrero',
            'estado_id' => '20',
            'number' =>  '564',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Zaachila',
            'estado_id' => '20',
            'number' =>  '565',
        ]);
        App\Municipio::create([
            'name' =>  'San Mateo Yucutindoo',
            'estado_id' => '20',
            'number' =>  '566',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotitlán Lagunas',
            'estado_id' => '20',
            'number' =>  '567',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotitlán Palmas',
            'estado_id' => '20',
            'number' =>  '568',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Inés de Zaragoza',
            'estado_id' => '20',
            'number' =>  '569',
        ]);
        App\Municipio::create([
            'name' =>  'Zimatlán de Álvarez',
            'estado_id' => '20',
            'number' =>  '570',
        ]);
        App\Municipio::create([
            'name' =>  'Acajete',
            'estado_id' => '21',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acateno',
            'estado_id' => '21',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Acatlán',
            'estado_id' => '21',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Acatzingo',
            'estado_id' => '21',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Acteopan',
            'estado_id' => '21',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Ahuacatlán',
            'estado_id' => '21',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Ahuatlán',
            'estado_id' => '21',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Ahuazotepec',
            'estado_id' => '21',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Ahuehuetitla',
            'estado_id' => '21',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Ajalpan',
            'estado_id' => '21',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Albino Zertuche',
            'estado_id' => '21',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Aljojuca',
            'estado_id' => '21',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Altepexi',
            'estado_id' => '21',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Amixtlán',
            'estado_id' => '21',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Amozoc',
            'estado_id' => '21',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Aquixtla',
            'estado_id' => '21',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Atempan',
            'estado_id' => '21',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Atexcal',
            'estado_id' => '21',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Atlixco',
            'estado_id' => '21',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Atoyatempan',
            'estado_id' => '21',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Atzala',
            'estado_id' => '21',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Atzitzihuacán',
            'estado_id' => '21',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Atzitzintla',
            'estado_id' => '21',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Axutla',
            'estado_id' => '21',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Ayotoxco de Guerrero',
            'estado_id' => '21',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Calpan',
            'estado_id' => '21',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Caltepec',
            'estado_id' => '21',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Camocuautla',
            'estado_id' => '21',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Caxhuacan',
            'estado_id' => '21',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Coatepec',
            'estado_id' => '21',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Coatzingo',
            'estado_id' => '21',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Cohetzala',
            'estado_id' => '21',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Cohuecan',
            'estado_id' => '21',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Coronango',
            'estado_id' => '21',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Coxcatlán',
            'estado_id' => '21',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Coyomeapan',
            'estado_id' => '21',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Coyotepec',
            'estado_id' => '21',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Cuapiaxtla de Madero',
            'estado_id' => '21',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautempan',
            'estado_id' => '21',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautinchán',
            'estado_id' => '21',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Cuautlancingo',
            'estado_id' => '21',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Cuayuca de Andrade',
            'estado_id' => '21',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Cuetzalan del Progreso',
            'estado_id' => '21',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Cuyoaco',
            'estado_id' => '21',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Chalchicomula de Sesma',
            'estado_id' => '21',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Chapulco',
            'estado_id' => '21',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Chiautla',
            'estado_id' => '21',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Chiautzingo',
            'estado_id' => '21',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Chiconcuautla',
            'estado_id' => '21',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Chichiquila',
            'estado_id' => '21',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Chietla',
            'estado_id' => '21',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Chigmecatitlán',
            'estado_id' => '21',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Chignahuapan',
            'estado_id' => '21',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Chignautla',
            'estado_id' => '21',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Chila',
            'estado_id' => '21',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Chila de la Sal',
            'estado_id' => '21',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Honey',
            'estado_id' => '21',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Chilchotla',
            'estado_id' => '21',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Chinantla',
            'estado_id' => '21',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Domingo Arenas',
            'estado_id' => '21',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Eloxochitlán',
            'estado_id' => '21',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Epatlán',
            'estado_id' => '21',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Esperanza',
            'estado_id' => '21',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Francisco Z. Mena',
            'estado_id' => '21',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'General Felipe Ángeles',
            'estado_id' => '21',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe',
            'estado_id' => '21',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe Victoria',
            'estado_id' => '21',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Hermenegildo Galeana',
            'estado_id' => '21',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Huaquechula',
            'estado_id' => '21',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Huatlatlauca',
            'estado_id' => '21',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Huauchinango',
            'estado_id' => '21',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetla',
            'estado_id' => '21',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetlán el Chico',
            'estado_id' => '21',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Huejotzingo',
            'estado_id' => '21',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Hueyapan',
            'estado_id' => '21',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Hueytamalco',
            'estado_id' => '21',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Hueytlalpan',
            'estado_id' => '21',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Huitzilan de Serdán',
            'estado_id' => '21',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Huitziltepec',
            'estado_id' => '21',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Atlequizayan',
            'estado_id' => '21',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Ixcamilpa de Guerrero',
            'estado_id' => '21',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Ixcaquixtla',
            'estado_id' => '21',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtacamaxtitlán',
            'estado_id' => '21',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtepec',
            'estado_id' => '21',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Izúcar de Matamoros',
            'estado_id' => '21',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Jalpan',
            'estado_id' => '21',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Jolalpan',
            'estado_id' => '21',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Jonotla',
            'estado_id' => '21',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Jopala',
            'estado_id' => '21',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Juan C. Bonilla',
            'estado_id' => '21',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Juan Galindo',
            'estado_id' => '21',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Juan N. Méndez',
            'estado_id' => '21',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Lafragua',
            'estado_id' => '21',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Libres',
            'estado_id' => '21',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'La Magdalena Tlatlauquitepec',
            'estado_id' => '21',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'Mazapiltepec de Juárez',
            'estado_id' => '21',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Mixtla',
            'estado_id' => '21',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'Molcaxac',
            'estado_id' => '21',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'Cañada Morelos',
            'estado_id' => '21',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Naupan',
            'estado_id' => '21',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Nauzontla',
            'estado_id' => '21',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Nealtican',
            'estado_id' => '21',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Nicolás Bravo',
            'estado_id' => '21',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Nopalucan',
            'estado_id' => '21',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Ocotepec',
            'estado_id' => '21',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Ocoyucan',
            'estado_id' => '21',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Olintla',
            'estado_id' => '21',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'Oriental',
            'estado_id' => '21',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'Pahuatlán',
            'estado_id' => '21',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'Palmar de Bravo',
            'estado_id' => '21',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'Pantepec',
            'estado_id' => '21',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'Petlalcingo',
            'estado_id' => '21',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'Piaxtla',
            'estado_id' => '21',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'Puebla',
            'estado_id' => '21',
            'number' =>  '114',
        ]);
        App\Municipio::create([
            'name' =>  'Quecholac',
            'estado_id' => '21',
            'number' =>  '115',
        ]);
        App\Municipio::create([
            'name' =>  'Quimixtlán',
            'estado_id' => '21',
            'number' =>  '116',
        ]);
        App\Municipio::create([
            'name' =>  'Rafael Lara Grajales',
            'estado_id' => '21',
            'number' =>  '117',
        ]);
        App\Municipio::create([
            'name' =>  'Los Reyes de Juárez',
            'estado_id' => '21',
            'number' =>  '118',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Cholula',
            'estado_id' => '21',
            'number' =>  '119',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio Cañada',
            'estado_id' => '21',
            'number' =>  '120',
        ]);
        App\Municipio::create([
            'name' =>  'San Diego la Mesa Tochimiltzingo',
            'estado_id' => '21',
            'number' =>  '121',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe Teotlalcingo',
            'estado_id' => '21',
            'number' =>  '122',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe Tepatlán',
            'estado_id' => '21',
            'number' =>  '123',
        ]);
        App\Municipio::create([
            'name' =>  'San Gabriel Chilac',
            'estado_id' => '21',
            'number' =>  '124',
        ]);
        App\Municipio::create([
            'name' =>  'San Gregorio Atzompa',
            'estado_id' => '21',
            'number' =>  '125',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Tecuanipan',
            'estado_id' => '21',
            'number' =>  '126',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Xayacatlán',
            'estado_id' => '21',
            'number' =>  '127',
        ]);
        App\Municipio::create([
            'name' =>  'San José Chiapa',
            'estado_id' => '21',
            'number' =>  '128',
        ]);
        App\Municipio::create([
            'name' =>  'San José Miahuatlán',
            'estado_id' => '21',
            'number' =>  '129',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Atenco',
            'estado_id' => '21',
            'number' =>  '130',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Atzompa',
            'estado_id' => '21',
            'number' =>  '131',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Texmelucan',
            'estado_id' => '21',
            'number' =>  '132',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Totoltepec',
            'estado_id' => '21',
            'number' =>  '133',
        ]);
        App\Municipio::create([
            'name' =>  'San Matías Tlalancaleca',
            'estado_id' => '21',
            'number' =>  '134',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Ixitlán',
            'estado_id' => '21',
            'number' =>  '135',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel Xoxtla',
            'estado_id' => '21',
            'number' =>  '136',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás Buenos Aires',
            'estado_id' => '21',
            'number' =>  '137',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás de los Ranchos',
            'estado_id' => '21',
            'number' =>  '138',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo Anicano',
            'estado_id' => '21',
            'number' =>  '139',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Cholula',
            'estado_id' => '21',
            'number' =>  '140',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro Yeloixtlahuaca',
            'estado_id' => '21',
            'number' =>  '141',
        ]);
        App\Municipio::create([
            'name' =>  'San Salvador el Seco',
            'estado_id' => '21',
            'number' =>  '142',
        ]);
        App\Municipio::create([
            'name' =>  'San Salvador el Verde',
            'estado_id' => '21',
            'number' =>  '143',
        ]);
        App\Municipio::create([
            'name' =>  'San Salvador Huixcolotla',
            'estado_id' => '21',
            'number' =>  '144',
        ]);
        App\Municipio::create([
            'name' =>  'San Sebastián Tlacotepec',
            'estado_id' => '21',
            'number' =>  '145',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Tlaltempan',
            'estado_id' => '21',
            'number' =>  '146',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Inés Ahuatempan',
            'estado_id' => '21',
            'number' =>  '147',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Isabel Cholula',
            'estado_id' => '21',
            'number' =>  '148',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Miahuatlán',
            'estado_id' => '21',
            'number' =>  '149',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetlán el Grande',
            'estado_id' => '21',
            'number' =>  '150',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Tomás Hueyotlipan',
            'estado_id' => '21',
            'number' =>  '151',
        ]);
        App\Municipio::create([
            'name' =>  'Soltepec',
            'estado_id' => '21',
            'number' =>  '152',
        ]);
        App\Municipio::create([
            'name' =>  'Tecali de Herrera',
            'estado_id' => '21',
            'number' =>  '153',
        ]);
        App\Municipio::create([
            'name' =>  'Tecamachalco',
            'estado_id' => '21',
            'number' =>  '154',
        ]);
        App\Municipio::create([
            'name' =>  'Tecomatlán',
            'estado_id' => '21',
            'number' =>  '155',
        ]);
        App\Municipio::create([
            'name' =>  'Tehuacán',
            'estado_id' => '21',
            'number' =>  '156',
        ]);
        App\Municipio::create([
            'name' =>  'Tehuitzingo',
            'estado_id' => '21',
            'number' =>  '157',
        ]);
        App\Municipio::create([
            'name' =>  'Tenampulco',
            'estado_id' => '21',
            'number' =>  '158',
        ]);
        App\Municipio::create([
            'name' =>  'Teopantlán',
            'estado_id' => '21',
            'number' =>  '159',
        ]);
        App\Municipio::create([
            'name' =>  'Teotlalco',
            'estado_id' => '21',
            'number' =>  '160',
        ]);
        App\Municipio::create([
            'name' =>  'Tepanco de López',
            'estado_id' => '21',
            'number' =>  '161',
        ]);
        App\Municipio::create([
            'name' =>  'Tepango de Rodríguez',
            'estado_id' => '21',
            'number' =>  '162',
        ]);
        App\Municipio::create([
            'name' =>  'Tepatlaxco de Hidalgo',
            'estado_id' => '21',
            'number' =>  '163',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeaca',
            'estado_id' => '21',
            'number' =>  '164',
        ]);
        App\Municipio::create([
            'name' =>  'Tepemaxalco',
            'estado_id' => '21',
            'number' =>  '165',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeojuma',
            'estado_id' => '21',
            'number' =>  '166',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetzintla',
            'estado_id' => '21',
            'number' =>  '167',
        ]);
        App\Municipio::create([
            'name' =>  'Tepexco',
            'estado_id' => '21',
            'number' =>  '168',
        ]);
        App\Municipio::create([
            'name' =>  'Tepexi de Rodríguez',
            'estado_id' => '21',
            'number' =>  '169',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeyahualco',
            'estado_id' => '21',
            'number' =>  '170',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeyahualco de Cuauhtémoc',
            'estado_id' => '21',
            'number' =>  '171',
        ]);
        App\Municipio::create([
            'name' =>  'Tetela de Ocampo',
            'estado_id' => '21',
            'number' =>  '172',
        ]);
        App\Municipio::create([
            'name' =>  'Teteles de Avila Castillo',
            'estado_id' => '21',
            'number' =>  '173',
        ]);
        App\Municipio::create([
            'name' =>  'Teziutlán',
            'estado_id' => '21',
            'number' =>  '174',
        ]);
        App\Municipio::create([
            'name' =>  'Tianguismanalco',
            'estado_id' => '21',
            'number' =>  '175',
        ]);
        App\Municipio::create([
            'name' =>  'Tilapa',
            'estado_id' => '21',
            'number' =>  '176',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacotepec de Benito Juárez',
            'estado_id' => '21',
            'number' =>  '177',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacuilotepec',
            'estado_id' => '21',
            'number' =>  '178',
        ]);
        App\Municipio::create([
            'name' =>  'Tlachichuca',
            'estado_id' => '21',
            'number' =>  '179',
        ]);
        App\Municipio::create([
            'name' =>  'Tlahuapan',
            'estado_id' => '21',
            'number' =>  '180',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaltenango',
            'estado_id' => '21',
            'number' =>  '181',
        ]);
        App\Municipio::create([
            'name' =>  'Tlanepantla',
            'estado_id' => '21',
            'number' =>  '182',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaola',
            'estado_id' => '21',
            'number' =>  '183',
        ]);
        App\Municipio::create([
            'name' =>  'Tlapacoya',
            'estado_id' => '21',
            'number' =>  '184',
        ]);
        App\Municipio::create([
            'name' =>  'Tlapanalá',
            'estado_id' => '21',
            'number' =>  '185',
        ]);
        App\Municipio::create([
            'name' =>  'Tlatlauquitepec',
            'estado_id' => '21',
            'number' =>  '186',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaxco',
            'estado_id' => '21',
            'number' =>  '187',
        ]);
        App\Municipio::create([
            'name' =>  'Tochimilco',
            'estado_id' => '21',
            'number' =>  '188',
        ]);
        App\Municipio::create([
            'name' =>  'Tochtepec',
            'estado_id' => '21',
            'number' =>  '189',
        ]);
        App\Municipio::create([
            'name' =>  'Totoltepec de Guerrero',
            'estado_id' => '21',
            'number' =>  '190',
        ]);
        App\Municipio::create([
            'name' =>  'Tulcingo',
            'estado_id' => '21',
            'number' =>  '191',
        ]);
        App\Municipio::create([
            'name' =>  'Tuzamapan de Galeana',
            'estado_id' => '21',
            'number' =>  '192',
        ]);
        App\Municipio::create([
            'name' =>  'Tzicatlacoyan',
            'estado_id' => '21',
            'number' =>  '193',
        ]);
        App\Municipio::create([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '21',
            'number' =>  '194',
        ]);
        App\Municipio::create([
            'name' =>  'Vicente Guerrero',
            'estado_id' => '21',
            'number' =>  '195',
        ]);
        App\Municipio::create([
            'name' =>  'Xayacatlán de Bravo',
            'estado_id' => '21',
            'number' =>  '196',
        ]);
        App\Municipio::create([
            'name' =>  'Xicotepec',
            'estado_id' => '21',
            'number' =>  '197',
        ]);
        App\Municipio::create([
            'name' =>  'Xicotlán',
            'estado_id' => '21',
            'number' =>  '198',
        ]);
        App\Municipio::create([
            'name' =>  'Xiutetelco',
            'estado_id' => '21',
            'number' =>  '199',
        ]);
        App\Municipio::create([
            'name' =>  'Xochiapulco',
            'estado_id' => '21',
            'number' =>  '200',
        ]);
        App\Municipio::create([
            'name' =>  'Xochiltepec',
            'estado_id' => '21',
            'number' =>  '201',
        ]);
        App\Municipio::create([
            'name' =>  'Xochitlán de Vicente Suárez',
            'estado_id' => '21',
            'number' =>  '202',
        ]);
        App\Municipio::create([
            'name' =>  'Xochitlán Todos Santos',
            'estado_id' => '21',
            'number' =>  '203',
        ]);
        App\Municipio::create([
            'name' =>  'Yaonáhuac',
            'estado_id' => '21',
            'number' =>  '204',
        ]);
        App\Municipio::create([
            'name' =>  'Yehualtepec',
            'estado_id' => '21',
            'number' =>  '205',
        ]);
        App\Municipio::create([
            'name' =>  'Zacapala',
            'estado_id' => '21',
            'number' =>  '206',
        ]);
        App\Municipio::create([
            'name' =>  'Zacapoaxtla',
            'estado_id' => '21',
            'number' =>  '207',
        ]);
        App\Municipio::create([
            'name' =>  'Zacatlán',
            'estado_id' => '21',
            'number' =>  '208',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotitlán',
            'estado_id' => '21',
            'number' =>  '209',
        ]);
        App\Municipio::create([
            'name' =>  'Zapotitlán de Méndez',
            'estado_id' => '21',
            'number' =>  '210',
        ]);
        App\Municipio::create([
            'name' =>  'Zaragoza',
            'estado_id' => '21',
            'number' =>  '211',
        ]);
        App\Municipio::create([
            'name' =>  'Zautla',
            'estado_id' => '21',
            'number' =>  '212',
        ]);
        App\Municipio::create([
            'name' =>  'Zihuateutla',
            'estado_id' => '21',
            'number' =>  '213',
        ]);
        App\Municipio::create([
            'name' =>  'Zinacatepec',
            'estado_id' => '21',
            'number' =>  '214',
        ]);
        App\Municipio::create([
            'name' =>  'Zongozotla',
            'estado_id' => '21',
            'number' =>  '215',
        ]);
        App\Municipio::create([
            'name' =>  'Zoquiapan',
            'estado_id' => '21',
            'number' =>  '216',
        ]);
        App\Municipio::create([
            'name' =>  'Zoquitlán',
            'estado_id' => '21',
            'number' =>  '217',
        ]);
        App\Municipio::create([
            'name' =>  'Amealco de Bonfil',
            'estado_id' => '22',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Pinal de Amoles',
            'estado_id' => '22',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Arroyo Seco',
            'estado_id' => '22',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Cadereyta de Montes',
            'estado_id' => '22',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Colón',
            'estado_id' => '22',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Corregidora',
            'estado_id' => '22',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Ezequiel Montes',
            'estado_id' => '22',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Huimilpan',
            'estado_id' => '22',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Jalpan de Serra',
            'estado_id' => '22',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Landa de Matamoros',
            'estado_id' => '22',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'El Marqués',
            'estado_id' => '22',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Pedro Escobedo',
            'estado_id' => '22',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Peñamiller',
            'estado_id' => '22',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Querétaro',
            'estado_id' => '22',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'San Joaquín',
            'estado_id' => '22',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan del Río',
            'estado_id' => '22',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Tequisquiapan',
            'estado_id' => '22',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Tolimán',
            'estado_id' => '22',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Cozumel',
            'estado_id' => '23',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Felipe Carrillo Puerto',
            'estado_id' => '23',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Isla Mujeres',
            'estado_id' => '23',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Othón P. Blanco',
            'estado_id' => '23',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '23',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'José María Morelos',
            'estado_id' => '23',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Lázaro Cárdenas',
            'estado_id' => '23',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Solidaridad',
            'estado_id' => '23',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Tulum',
            'estado_id' => '23',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Bacalar',
            'estado_id' => '23',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Ahualulco',
            'estado_id' => '24',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Alaquines',
            'estado_id' => '24',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Aquismón',
            'estado_id' => '24',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Armadillo de los Infante',
            'estado_id' => '24',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Cárdenas',
            'estado_id' => '24',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Catorce',
            'estado_id' => '24',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Cedral',
            'estado_id' => '24',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Cerritos',
            'estado_id' => '24',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Cerro de San Pedro',
            'estado_id' => '24',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Ciudad del Maíz',
            'estado_id' => '24',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Ciudad Fernández',
            'estado_id' => '24',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Tancanhuitz',
            'estado_id' => '24',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Ciudad Valles',
            'estado_id' => '24',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Coxcatlán',
            'estado_id' => '24',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Charcas',
            'estado_id' => '24',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Ebano',
            'estado_id' => '24',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalcázar',
            'estado_id' => '24',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Huehuetlán',
            'estado_id' => '24',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Lagunillas',
            'estado_id' => '24',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Matehuala',
            'estado_id' => '24',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Mexquitic de Carmona',
            'estado_id' => '24',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Moctezuma',
            'estado_id' => '24',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Rayón',
            'estado_id' => '24',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Rioverde',
            'estado_id' => '24',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Salinas',
            'estado_id' => '24',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'San Antonio',
            'estado_id' => '24',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'San Ciro de Acosta',
            'estado_id' => '24',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'San Luis Potosí',
            'estado_id' => '24',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'San Martín Chalchicuautla',
            'estado_id' => '24',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás Tolentino',
            'estado_id' => '24',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina',
            'estado_id' => '24',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María del Río',
            'estado_id' => '24',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Santo Domingo',
            'estado_id' => '24',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'San Vicente Tancuayalab',
            'estado_id' => '24',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Soledad de Graciano Sánchez',
            'estado_id' => '24',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Tamasopo',
            'estado_id' => '24',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Tamazunchale',
            'estado_id' => '24',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Tampacán',
            'estado_id' => '24',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Tampamolón Corona',
            'estado_id' => '24',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Tamuín',
            'estado_id' => '24',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Tanlajás',
            'estado_id' => '24',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Tanquián de Escobedo',
            'estado_id' => '24',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Tierra Nueva',
            'estado_id' => '24',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Vanegas',
            'estado_id' => '24',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Venado',
            'estado_id' => '24',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Arriaga',
            'estado_id' => '24',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Guadalupe',
            'estado_id' => '24',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de la Paz',
            'estado_id' => '24',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Ramos',
            'estado_id' => '24',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Reyes',
            'estado_id' => '24',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '24',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Juárez',
            'estado_id' => '24',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Axtla de Terrazas',
            'estado_id' => '24',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Xilitla',
            'estado_id' => '24',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Zaragoza',
            'estado_id' => '24',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Arista',
            'estado_id' => '24',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Matlapa',
            'estado_id' => '24',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'El Naranjo',
            'estado_id' => '24',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Ahome',
            'estado_id' => '25',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Angostura',
            'estado_id' => '25',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Badiraguato',
            'estado_id' => '25',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Concordia',
            'estado_id' => '25',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Cosalá',
            'estado_id' => '25',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Culiacán',
            'estado_id' => '25',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Choix',
            'estado_id' => '25',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Elota',
            'estado_id' => '25',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Escuinapa',
            'estado_id' => '25',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'El Fuerte',
            'estado_id' => '25',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Guasave',
            'estado_id' => '25',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Mazatlán',
            'estado_id' => '25',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Mocorito',
            'estado_id' => '25',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Rosario',
            'estado_id' => '25',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Salvador Alvarado',
            'estado_id' => '25',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'San Ignacio',
            'estado_id' => '25',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Sinaloa',
            'estado_id' => '25',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Navolato',
            'estado_id' => '25',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Aconchi',
            'estado_id' => '26',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Agua Prieta',
            'estado_id' => '26',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Alamos',
            'estado_id' => '26',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Altar',
            'estado_id' => '26',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Arivechi',
            'estado_id' => '26',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Arizpe',
            'estado_id' => '26',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Atil',
            'estado_id' => '26',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Bacadéhuachi',
            'estado_id' => '26',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Bacanora',
            'estado_id' => '26',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Bacerac',
            'estado_id' => '26',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Bacoachi',
            'estado_id' => '26',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Bácum',
            'estado_id' => '26',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Banámichi',
            'estado_id' => '26',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Baviácora',
            'estado_id' => '26',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Bavispe',
            'estado_id' => '26',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Benjamín Hill',
            'estado_id' => '26',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Caborca',
            'estado_id' => '26',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Cajeme',
            'estado_id' => '26',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Cananea',
            'estado_id' => '26',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Carbó',
            'estado_id' => '26',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'La Colorada',
            'estado_id' => '26',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Cucurpe',
            'estado_id' => '26',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Cumpas',
            'estado_id' => '26',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Divisaderos',
            'estado_id' => '26',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Empalme',
            'estado_id' => '26',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Etchojoa',
            'estado_id' => '26',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Fronteras',
            'estado_id' => '26',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Granados',
            'estado_id' => '26',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Guaymas',
            'estado_id' => '26',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Hermosillo',
            'estado_id' => '26',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Huachinera',
            'estado_id' => '26',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Huásabas',
            'estado_id' => '26',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Huatabampo',
            'estado_id' => '26',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Huépac',
            'estado_id' => '26',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Imuris',
            'estado_id' => '26',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena',
            'estado_id' => '26',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Mazatán',
            'estado_id' => '26',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Moctezuma',
            'estado_id' => '26',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Naco',
            'estado_id' => '26',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Nácori Chico',
            'estado_id' => '26',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Nacozari de García',
            'estado_id' => '26',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Navojoa',
            'estado_id' => '26',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Nogales',
            'estado_id' => '26',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Onavas',
            'estado_id' => '26',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Opodepe',
            'estado_id' => '26',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Oquitoa',
            'estado_id' => '26',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Pitiquito',
            'estado_id' => '26',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Puerto Peñasco',
            'estado_id' => '26',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Quiriego',
            'estado_id' => '26',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Rayón',
            'estado_id' => '26',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Rosario',
            'estado_id' => '26',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Sahuaripa',
            'estado_id' => '26',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe de Jesús',
            'estado_id' => '26',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'San Javier',
            'estado_id' => '26',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'San Luis Río Colorado',
            'estado_id' => '26',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'San Miguel de Horcasitas',
            'estado_id' => '26',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'San Pedro de la Cueva',
            'estado_id' => '26',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana',
            'estado_id' => '26',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz',
            'estado_id' => '26',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Sáric',
            'estado_id' => '26',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Soyopa',
            'estado_id' => '26',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Suaqui Grande',
            'estado_id' => '26',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Tepache',
            'estado_id' => '26',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Trincheras',
            'estado_id' => '26',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Tubutama',
            'estado_id' => '26',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Ures',
            'estado_id' => '26',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '26',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Pesqueira',
            'estado_id' => '26',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Yécora',
            'estado_id' => '26',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'General Plutarco Elías Calles',
            'estado_id' => '26',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '26',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'San Ignacio Río Muerto',
            'estado_id' => '26',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Balancán',
            'estado_id' => '27',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Cárdenas',
            'estado_id' => '27',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Centla',
            'estado_id' => '27',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Centro',
            'estado_id' => '27',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Comalcalco',
            'estado_id' => '27',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Cunduacán',
            'estado_id' => '27',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '27',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Huimanguillo',
            'estado_id' => '27',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Jalapa',
            'estado_id' => '27',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Jalpa de Méndez',
            'estado_id' => '27',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Jonuta',
            'estado_id' => '27',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Macuspana',
            'estado_id' => '27',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Nacajuca',
            'estado_id' => '27',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Paraíso',
            'estado_id' => '27',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Tacotalpa',
            'estado_id' => '27',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Teapa',
            'estado_id' => '27',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Tenosique',
            'estado_id' => '27',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Abasolo',
            'estado_id' => '28',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Aldama',
            'estado_id' => '28',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Altamira',
            'estado_id' => '28',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Antiguo Morelos',
            'estado_id' => '28',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Burgos',
            'estado_id' => '28',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Bustamante',
            'estado_id' => '28',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Camargo',
            'estado_id' => '28',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Casas',
            'estado_id' => '28',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Ciudad Madero',
            'estado_id' => '28',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Cruillas',
            'estado_id' => '28',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Gómez Farías',
            'estado_id' => '28',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'González',
            'estado_id' => '28',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Güémez',
            'estado_id' => '28',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Guerrero',
            'estado_id' => '28',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Gustavo Díaz Ordaz',
            'estado_id' => '28',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgo',
            'estado_id' => '28',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Jaumave',
            'estado_id' => '28',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Jiménez',
            'estado_id' => '28',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Llera',
            'estado_id' => '28',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Mainero',
            'estado_id' => '28',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'El Mante',
            'estado_id' => '28',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Matamoros',
            'estado_id' => '28',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Méndez',
            'estado_id' => '28',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Mier',
            'estado_id' => '28',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Miguel Alemán',
            'estado_id' => '28',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Miquihuana',
            'estado_id' => '28',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Laredo',
            'estado_id' => '28',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Nuevo Morelos',
            'estado_id' => '28',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Ocampo',
            'estado_id' => '28',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Padilla',
            'estado_id' => '28',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Palmillas',
            'estado_id' => '28',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Reynosa',
            'estado_id' => '28',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Río Bravo',
            'estado_id' => '28',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'San Carlos',
            'estado_id' => '28',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'San Fernando',
            'estado_id' => '28',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'San Nicolás',
            'estado_id' => '28',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Soto la Marina',
            'estado_id' => '28',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Tampico',
            'estado_id' => '28',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Tula',
            'estado_id' => '28',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Valle Hermoso',
            'estado_id' => '28',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Victoria',
            'estado_id' => '28',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Villagrán',
            'estado_id' => '28',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Xicoténcatl',
            'estado_id' => '28',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Amaxac de Guerrero',
            'estado_id' => '29',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Apetatitlán de Antonio Carvajal',
            'estado_id' => '29',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Atlangatepec',
            'estado_id' => '29',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Atltzayanca',
            'estado_id' => '29',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Apizaco',
            'estado_id' => '29',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Calpulalpan',
            'estado_id' => '29',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'El Carmen Tequexquitla',
            'estado_id' => '29',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Cuapiaxtla',
            'estado_id' => '29',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Cuaxomulco',
            'estado_id' => '29',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Chiautempan',
            'estado_id' => '29',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Muñoz de Domingo Arenas',
            'estado_id' => '29',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Españita',
            'estado_id' => '29',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Huamantla',
            'estado_id' => '29',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Hueyotlipan',
            'estado_id' => '29',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtacuixtla de Mariano Matamoros',
            'estado_id' => '29',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtenco',
            'estado_id' => '29',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Mazatecochco de José María Morelos',
            'estado_id' => '29',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Contla de Juan Cuamatzi',
            'estado_id' => '29',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetitla de Lardizábal',
            'estado_id' => '29',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Sanctórum de Lázaro Cárdenas',
            'estado_id' => '29',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Nanacamilpa de Mariano Arista',
            'estado_id' => '29',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Acuamanala de Miguel Hidalgo',
            'estado_id' => '29',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Natívitas',
            'estado_id' => '29',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Panotla',
            'estado_id' => '29',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'San Pablo del Monte',
            'estado_id' => '29',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Tlaxcala',
            'estado_id' => '29',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Tenancingo',
            'estado_id' => '29',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Teolocholco',
            'estado_id' => '29',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Tepeyanco',
            'estado_id' => '29',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Terrenate',
            'estado_id' => '29',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Tetla de la Solidaridad',
            'estado_id' => '29',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Tetlatlahuca',
            'estado_id' => '29',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaxcala',
            'estado_id' => '29',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaxco',
            'estado_id' => '29',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Tocatlán',
            'estado_id' => '29',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Totolac',
            'estado_id' => '29',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'estado_id' => '29',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Tzompantepec',
            'estado_id' => '29',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Xaloztoc',
            'estado_id' => '29',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Xaltocan',
            'estado_id' => '29',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Papalotla de Xicohténcatl',
            'estado_id' => '29',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Xicohtzinco',
            'estado_id' => '29',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Yauhquemehcan',
            'estado_id' => '29',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Zacatelco',
            'estado_id' => '29',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '29',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '29',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Lázaro Cárdenas',
            'estado_id' => '29',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'La Magdalena Tlaltelulco',
            'estado_id' => '29',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'San Damián Texóloc',
            'estado_id' => '29',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'San Francisco Tetlanohcan',
            'estado_id' => '29',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'San Jerónimo Zacualpan',
            'estado_id' => '29',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'San José Teacalco',
            'estado_id' => '29',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Huactzinco',
            'estado_id' => '29',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'San Lorenzo Axocomanitla',
            'estado_id' => '29',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'San Lucas Tecopilco',
            'estado_id' => '29',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Ana Nopalucan',
            'estado_id' => '29',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Apolonia Teacalco',
            'estado_id' => '29',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Catarina Ayometla',
            'estado_id' => '29',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Cruz Quilehtla',
            'estado_id' => '29',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Isabel Xiloxoxtla',
            'estado_id' => '29',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Acajete',
            'estado_id' => '30',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acatlán',
            'estado_id' => '30',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Acayucan',
            'estado_id' => '30',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Actopan',
            'estado_id' => '30',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Acula',
            'estado_id' => '30',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Acultzingo',
            'estado_id' => '30',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Camarón de Tejeda',
            'estado_id' => '30',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Alpatláhuac',
            'estado_id' => '30',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Alto Lucero de Gutiérrez Barrios',
            'estado_id' => '30',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Altotonga',
            'estado_id' => '30',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Alvarado',
            'estado_id' => '30',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Amatitlán',
            'estado_id' => '30',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Naranjos Amatlán',
            'estado_id' => '30',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Amatlán de los Reyes',
            'estado_id' => '30',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Angel R. Cabada',
            'estado_id' => '30',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'La Antigua',
            'estado_id' => '30',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Apazapan',
            'estado_id' => '30',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Aquila',
            'estado_id' => '30',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Astacinga',
            'estado_id' => '30',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Atlahuilco',
            'estado_id' => '30',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Atoyac',
            'estado_id' => '30',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Atzacan',
            'estado_id' => '30',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Atzalan',
            'estado_id' => '30',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaltetela',
            'estado_id' => '30',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Ayahualulco',
            'estado_id' => '30',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Banderilla',
            'estado_id' => '30',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '30',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Boca del Río',
            'estado_id' => '30',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Calcahualco',
            'estado_id' => '30',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Camerino Z. Mendoza',
            'estado_id' => '30',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Carrillo Puerto',
            'estado_id' => '30',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Catemaco',
            'estado_id' => '30',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Cazones de Herrera',
            'estado_id' => '30',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Cerro Azul',
            'estado_id' => '30',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Citlaltépetl',
            'estado_id' => '30',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Coacoatzintla',
            'estado_id' => '30',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Coahuitlán',
            'estado_id' => '30',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Coatepec',
            'estado_id' => '30',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Coatzacoalcos',
            'estado_id' => '30',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Coatzintla',
            'estado_id' => '30',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Coetzala',
            'estado_id' => '30',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Colipa',
            'estado_id' => '30',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Comapa',
            'estado_id' => '30',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Córdoba',
            'estado_id' => '30',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Cosamaloapan de Carpio',
            'estado_id' => '30',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Cosautlán de Carvajal',
            'estado_id' => '30',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Coscomatepec',
            'estado_id' => '30',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Cosoleacaque',
            'estado_id' => '30',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Cotaxtla',
            'estado_id' => '30',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Coxquihui',
            'estado_id' => '30',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Coyutla',
            'estado_id' => '30',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Cuichapa',
            'estado_id' => '30',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Cuitláhuac',
            'estado_id' => '30',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Chacaltianguis',
            'estado_id' => '30',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Chalma',
            'estado_id' => '30',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Chiconamel',
            'estado_id' => '30',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Chiconquiaco',
            'estado_id' => '30',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Chicontepec',
            'estado_id' => '30',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Chinameca',
            'estado_id' => '30',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Chinampa de Gorostiza',
            'estado_id' => '30',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Las Choapas',
            'estado_id' => '30',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Chocamán',
            'estado_id' => '30',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Chontla',
            'estado_id' => '30',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Chumatlán',
            'estado_id' => '30',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '30',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Espinal',
            'estado_id' => '30',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Filomeno Mata',
            'estado_id' => '30',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Fortín',
            'estado_id' => '30',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Gutiérrez Zamora',
            'estado_id' => '30',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Hidalgotitlán',
            'estado_id' => '30',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Huatusco',
            'estado_id' => '30',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Huayacocotla',
            'estado_id' => '30',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Hueyapan de Ocampo',
            'estado_id' => '30',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Huiloapan de Cuauhtémoc',
            'estado_id' => '30',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Ignacio de la Llave',
            'estado_id' => '30',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Ilamatlán',
            'estado_id' => '30',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Isla',
            'estado_id' => '30',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Ixcatepec',
            'estado_id' => '30',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Ixhuacán de los Reyes',
            'estado_id' => '30',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Ixhuatlán del Café',
            'estado_id' => '30',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Ixhuatlancillo',
            'estado_id' => '30',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Ixhuatlán del Sureste',
            'estado_id' => '30',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Ixhuatlán de Madero',
            'estado_id' => '30',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Ixmatlahuacan',
            'estado_id' => '30',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Ixtaczoquitlán',
            'estado_id' => '30',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Jalacingo',
            'estado_id' => '30',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Xalapa',
            'estado_id' => '30',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Jalcomulco',
            'estado_id' => '30',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Jáltipan',
            'estado_id' => '30',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Jamapa',
            'estado_id' => '30',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Jesús Carranza',
            'estado_id' => '30',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Xico',
            'estado_id' => '30',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Jilotepec',
            'estado_id' => '30',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Juan Rodríguez Clara',
            'estado_id' => '30',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'Juchique de Ferrer',
            'estado_id' => '30',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'Landero y Coss',
            'estado_id' => '30',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Lerdo de Tejada',
            'estado_id' => '30',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'Magdalena',
            'estado_id' => '30',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'Maltrata',
            'estado_id' => '30',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Manlio Fabio Altamirano',
            'estado_id' => '30',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Mariano Escobedo',
            'estado_id' => '30',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Martínez de la Torre',
            'estado_id' => '30',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Mecatlán',
            'estado_id' => '30',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Mecayapan',
            'estado_id' => '30',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Medellín de Bravo',
            'estado_id' => '30',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Miahuatlán',
            'estado_id' => '30',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Las Minas',
            'estado_id' => '30',
            'number' =>  '107',
        ]);
        App\Municipio::create([
            'name' =>  'Minatitlán',
            'estado_id' => '30',
            'number' =>  '108',
        ]);
        App\Municipio::create([
            'name' =>  'Misantla',
            'estado_id' => '30',
            'number' =>  '109',
        ]);
        App\Municipio::create([
            'name' =>  'Mixtla de Altamirano',
            'estado_id' => '30',
            'number' =>  '110',
        ]);
        App\Municipio::create([
            'name' =>  'Moloacán',
            'estado_id' => '30',
            'number' =>  '111',
        ]);
        App\Municipio::create([
            'name' =>  'Naolinco',
            'estado_id' => '30',
            'number' =>  '112',
        ]);
        App\Municipio::create([
            'name' =>  'Naranjal',
            'estado_id' => '30',
            'number' =>  '113',
        ]);
        App\Municipio::create([
            'name' =>  'Nautla',
            'estado_id' => '30',
            'number' =>  '114',
        ]);
        App\Municipio::create([
            'name' =>  'Nogales',
            'estado_id' => '30',
            'number' =>  '115',
        ]);
        App\Municipio::create([
            'name' =>  'Oluta',
            'estado_id' => '30',
            'number' =>  '116',
        ]);
        App\Municipio::create([
            'name' =>  'Omealca',
            'estado_id' => '30',
            'number' =>  '117',
        ]);
        App\Municipio::create([
            'name' =>  'Orizaba',
            'estado_id' => '30',
            'number' =>  '118',
        ]);
        App\Municipio::create([
            'name' =>  'Otatitlán',
            'estado_id' => '30',
            'number' =>  '119',
        ]);
        App\Municipio::create([
            'name' =>  'Oteapan',
            'estado_id' => '30',
            'number' =>  '120',
        ]);
        App\Municipio::create([
            'name' =>  'Ozuluama de Mascareñas',
            'estado_id' => '30',
            'number' =>  '121',
        ]);
        App\Municipio::create([
            'name' =>  'Pajapan',
            'estado_id' => '30',
            'number' =>  '122',
        ]);
        App\Municipio::create([
            'name' =>  'Pánuco',
            'estado_id' => '30',
            'number' =>  '123',
        ]);
        App\Municipio::create([
            'name' =>  'Papantla',
            'estado_id' => '30',
            'number' =>  '124',
        ]);
        App\Municipio::create([
            'name' =>  'Paso del Macho',
            'estado_id' => '30',
            'number' =>  '125',
        ]);
        App\Municipio::create([
            'name' =>  'Paso de Ovejas',
            'estado_id' => '30',
            'number' =>  '126',
        ]);
        App\Municipio::create([
            'name' =>  'La Perla',
            'estado_id' => '30',
            'number' =>  '127',
        ]);
        App\Municipio::create([
            'name' =>  'Perote',
            'estado_id' => '30',
            'number' =>  '128',
        ]);
        App\Municipio::create([
            'name' =>  'Platón Sánchez',
            'estado_id' => '30',
            'number' =>  '129',
        ]);
        App\Municipio::create([
            'name' =>  'Playa Vicente',
            'estado_id' => '30',
            'number' =>  '130',
        ]);
        App\Municipio::create([
            'name' =>  'Poza Rica de Hidalgo',
            'estado_id' => '30',
            'number' =>  '131',
        ]);
        App\Municipio::create([
            'name' =>  'Las Vigas de Ramírez',
            'estado_id' => '30',
            'number' =>  '132',
        ]);
        App\Municipio::create([
            'name' =>  'Pueblo Viejo',
            'estado_id' => '30',
            'number' =>  '133',
        ]);
        App\Municipio::create([
            'name' =>  'Puente Nacional',
            'estado_id' => '30',
            'number' =>  '134',
        ]);
        App\Municipio::create([
            'name' =>  'Rafael Delgado',
            'estado_id' => '30',
            'number' =>  '135',
        ]);
        App\Municipio::create([
            'name' =>  'Rafael Lucio',
            'estado_id' => '30',
            'number' =>  '136',
        ]);
        App\Municipio::create([
            'name' =>  'Los Reyes',
            'estado_id' => '30',
            'number' =>  '137',
        ]);
        App\Municipio::create([
            'name' =>  'Río Blanco',
            'estado_id' => '30',
            'number' =>  '138',
        ]);
        App\Municipio::create([
            'name' =>  'Saltabarranca',
            'estado_id' => '30',
            'number' =>  '139',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Tenejapan',
            'estado_id' => '30',
            'number' =>  '140',
        ]);
        App\Municipio::create([
            'name' =>  'San Andrés Tuxtla',
            'estado_id' => '30',
            'number' =>  '141',
        ]);
        App\Municipio::create([
            'name' =>  'San Juan Evangelista',
            'estado_id' => '30',
            'number' =>  '142',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Tuxtla',
            'estado_id' => '30',
            'number' =>  '143',
        ]);
        App\Municipio::create([
            'name' =>  'Sayula de Alemán',
            'estado_id' => '30',
            'number' =>  '144',
        ]);
        App\Municipio::create([
            'name' =>  'Soconusco',
            'estado_id' => '30',
            'number' =>  '145',
        ]);
        App\Municipio::create([
            'name' =>  'Sochiapa',
            'estado_id' => '30',
            'number' =>  '146',
        ]);
        App\Municipio::create([
            'name' =>  'Soledad Atzompa',
            'estado_id' => '30',
            'number' =>  '147',
        ]);
        App\Municipio::create([
            'name' =>  'Soledad de Doblado',
            'estado_id' => '30',
            'number' =>  '148',
        ]);
        App\Municipio::create([
            'name' =>  'Soteapan',
            'estado_id' => '30',
            'number' =>  '149',
        ]);
        App\Municipio::create([
            'name' =>  'Tamalín',
            'estado_id' => '30',
            'number' =>  '150',
        ]);
        App\Municipio::create([
            'name' =>  'Tamiahua',
            'estado_id' => '30',
            'number' =>  '151',
        ]);
        App\Municipio::create([
            'name' =>  'Tampico Alto',
            'estado_id' => '30',
            'number' =>  '152',
        ]);
        App\Municipio::create([
            'name' =>  'Tancoco',
            'estado_id' => '30',
            'number' =>  '153',
        ]);
        App\Municipio::create([
            'name' =>  'Tantima',
            'estado_id' => '30',
            'number' =>  '154',
        ]);
        App\Municipio::create([
            'name' =>  'Tantoyuca',
            'estado_id' => '30',
            'number' =>  '155',
        ]);
        App\Municipio::create([
            'name' =>  'Tatatila',
            'estado_id' => '30',
            'number' =>  '156',
        ]);
        App\Municipio::create([
            'name' =>  'Castillo de Teayo',
            'estado_id' => '30',
            'number' =>  '157',
        ]);
        App\Municipio::create([
            'name' =>  'Tecolutla',
            'estado_id' => '30',
            'number' =>  '158',
        ]);
        App\Municipio::create([
            'name' =>  'Tehuipango',
            'estado_id' => '30',
            'number' =>  '159',
        ]);
        App\Municipio::create([
            'name' =>  'Álamo Temapache',
            'estado_id' => '30',
            'number' =>  '160',
        ]);
        App\Municipio::create([
            'name' =>  'Tempoal',
            'estado_id' => '30',
            'number' =>  '161',
        ]);
        App\Municipio::create([
            'name' =>  'Tenampa',
            'estado_id' => '30',
            'number' =>  '162',
        ]);
        App\Municipio::create([
            'name' =>  'Tenochtitlán',
            'estado_id' => '30',
            'number' =>  '163',
        ]);
        App\Municipio::create([
            'name' =>  'Teocelo',
            'estado_id' => '30',
            'number' =>  '164',
        ]);
        App\Municipio::create([
            'name' =>  'Tepatlaxco',
            'estado_id' => '30',
            'number' =>  '165',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetlán',
            'estado_id' => '30',
            'number' =>  '166',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetzintla',
            'estado_id' => '30',
            'number' =>  '167',
        ]);
        App\Municipio::create([
            'name' =>  'Tequila',
            'estado_id' => '30',
            'number' =>  '168',
        ]);
        App\Municipio::create([
            'name' =>  'José Azueta',
            'estado_id' => '30',
            'number' =>  '169',
        ]);
        App\Municipio::create([
            'name' =>  'Texcatepec',
            'estado_id' => '30',
            'number' =>  '170',
        ]);
        App\Municipio::create([
            'name' =>  'Texhuacán',
            'estado_id' => '30',
            'number' =>  '171',
        ]);
        App\Municipio::create([
            'name' =>  'Texistepec',
            'estado_id' => '30',
            'number' =>  '172',
        ]);
        App\Municipio::create([
            'name' =>  'Tezonapa',
            'estado_id' => '30',
            'number' =>  '173',
        ]);
        App\Municipio::create([
            'name' =>  'Tierra Blanca',
            'estado_id' => '30',
            'number' =>  '174',
        ]);
        App\Municipio::create([
            'name' =>  'Tihuatlán',
            'estado_id' => '30',
            'number' =>  '175',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacojalpan',
            'estado_id' => '30',
            'number' =>  '176',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacolulan',
            'estado_id' => '30',
            'number' =>  '177',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacotalpan',
            'estado_id' => '30',
            'number' =>  '178',
        ]);
        App\Municipio::create([
            'name' =>  'Tlacotepec de Mejía',
            'estado_id' => '30',
            'number' =>  '179',
        ]);
        App\Municipio::create([
            'name' =>  'Tlachichilco',
            'estado_id' => '30',
            'number' =>  '180',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalixcoyan',
            'estado_id' => '30',
            'number' =>  '181',
        ]);
        App\Municipio::create([
            'name' =>  'Tlalnelhuayocan',
            'estado_id' => '30',
            'number' =>  '182',
        ]);
        App\Municipio::create([
            'name' =>  'Tlapacoyan',
            'estado_id' => '30',
            'number' =>  '183',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaquilpa',
            'estado_id' => '30',
            'number' =>  '184',
        ]);
        App\Municipio::create([
            'name' =>  'Tlilapan',
            'estado_id' => '30',
            'number' =>  '185',
        ]);
        App\Municipio::create([
            'name' =>  'Tomatlán',
            'estado_id' => '30',
            'number' =>  '186',
        ]);
        App\Municipio::create([
            'name' =>  'Tonayán',
            'estado_id' => '30',
            'number' =>  '187',
        ]);
        App\Municipio::create([
            'name' =>  'Totutla',
            'estado_id' => '30',
            'number' =>  '188',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxpan',
            'estado_id' => '30',
            'number' =>  '189',
        ]);
        App\Municipio::create([
            'name' =>  'Tuxtilla',
            'estado_id' => '30',
            'number' =>  '190',
        ]);
        App\Municipio::create([
            'name' =>  'Ursulo Galván',
            'estado_id' => '30',
            'number' =>  '191',
        ]);
        App\Municipio::create([
            'name' =>  'Vega de Alatorre',
            'estado_id' => '30',
            'number' =>  '192',
        ]);
        App\Municipio::create([
            'name' =>  'Veracruz',
            'estado_id' => '30',
            'number' =>  '193',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Aldama',
            'estado_id' => '30',
            'number' =>  '194',
        ]);
        App\Municipio::create([
            'name' =>  'Xoxocotla',
            'estado_id' => '30',
            'number' =>  '195',
        ]);
        App\Municipio::create([
            'name' =>  'Yanga',
            'estado_id' => '30',
            'number' =>  '196',
        ]);
        App\Municipio::create([
            'name' =>  'Yecuatla',
            'estado_id' => '30',
            'number' =>  '197',
        ]);
        App\Municipio::create([
            'name' =>  'Zacualpan',
            'estado_id' => '30',
            'number' =>  '198',
        ]);
        App\Municipio::create([
            'name' =>  'Zaragoza',
            'estado_id' => '30',
            'number' =>  '199',
        ]);
        App\Municipio::create([
            'name' =>  'Zentla',
            'estado_id' => '30',
            'number' =>  '200',
        ]);
        App\Municipio::create([
            'name' =>  'Zongolica',
            'estado_id' => '30',
            'number' =>  '201',
        ]);
        App\Municipio::create([
            'name' =>  'Zontecomatlán de López y Fuentes',
            'estado_id' => '30',
            'number' =>  '202',
        ]);
        App\Municipio::create([
            'name' =>  'Zozocolco de Hidalgo',
            'estado_id' => '30',
            'number' =>  '203',
        ]);
        App\Municipio::create([
            'name' =>  'Agua Dulce',
            'estado_id' => '30',
            'number' =>  '204',
        ]);
        App\Municipio::create([
            'name' =>  'El Higo',
            'estado_id' => '30',
            'number' =>  '205',
        ]);
        App\Municipio::create([
            'name' =>  'Nanchital de Lázaro Cárdenas del Río',
            'estado_id' => '30',
            'number' =>  '206',
        ]);
        App\Municipio::create([
            'name' =>  'Tres Valles',
            'estado_id' => '30',
            'number' =>  '207',
        ]);
        App\Municipio::create([
            'name' =>  'Carlos A. Carrillo',
            'estado_id' => '30',
            'number' =>  '208',
        ]);
        App\Municipio::create([
            'name' =>  'Tatahuicapan de Juárez',
            'estado_id' => '30',
            'number' =>  '209',
        ]);
        App\Municipio::create([
            'name' =>  'Uxpanapa',
            'estado_id' => '30',
            'number' =>  '210',
        ]);
        App\Municipio::create([
            'name' =>  'San Rafael',
            'estado_id' => '30',
            'number' =>  '211',
        ]);
        App\Municipio::create([
            'name' =>  'Santiago Sochiapan',
            'estado_id' => '30',
            'number' =>  '212',
        ]);
        App\Municipio::create([
            'name' =>  'Abalá',
            'estado_id' => '31',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Acanceh',
            'estado_id' => '31',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Akil',
            'estado_id' => '31',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Baca',
            'estado_id' => '31',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Bokobá',
            'estado_id' => '31',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Buctzotz',
            'estado_id' => '31',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Cacalchén',
            'estado_id' => '31',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Calotmul',
            'estado_id' => '31',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Cansahcab',
            'estado_id' => '31',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Cantamayec',
            'estado_id' => '31',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Celestún',
            'estado_id' => '31',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Cenotillo',
            'estado_id' => '31',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'Conkal',
            'estado_id' => '31',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'Cuncunul',
            'estado_id' => '31',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'Cuzamá',
            'estado_id' => '31',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'Chacsinkín',
            'estado_id' => '31',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Chankom',
            'estado_id' => '31',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Chapab',
            'estado_id' => '31',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Chemax',
            'estado_id' => '31',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Chicxulub Pueblo',
            'estado_id' => '31',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Chichimilá',
            'estado_id' => '31',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Chikindzonot',
            'estado_id' => '31',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Chocholá',
            'estado_id' => '31',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Chumayel',
            'estado_id' => '31',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Dzán',
            'estado_id' => '31',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Dzemul',
            'estado_id' => '31',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Dzidzantún',
            'estado_id' => '31',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Dzilam de Bravo',
            'estado_id' => '31',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Dzilam González',
            'estado_id' => '31',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Dzitás',
            'estado_id' => '31',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Dzoncauich',
            'estado_id' => '31',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Espita',
            'estado_id' => '31',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Halachó',
            'estado_id' => '31',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Hocabá',
            'estado_id' => '31',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Hoctún',
            'estado_id' => '31',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Homún',
            'estado_id' => '31',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Huhí',
            'estado_id' => '31',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Hunucmá',
            'estado_id' => '31',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Ixil',
            'estado_id' => '31',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Izamal',
            'estado_id' => '31',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'Kanasín',
            'estado_id' => '31',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Kantunil',
            'estado_id' => '31',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Kaua',
            'estado_id' => '31',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Kinchil',
            'estado_id' => '31',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Kopomá',
            'estado_id' => '31',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Mama',
            'estado_id' => '31',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Maní',
            'estado_id' => '31',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Maxcanú',
            'estado_id' => '31',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Mayapán',
            'estado_id' => '31',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Mérida',
            'estado_id' => '31',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Mocochá',
            'estado_id' => '31',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Motul',
            'estado_id' => '31',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Muna',
            'estado_id' => '31',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Muxupip',
            'estado_id' => '31',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Opichén',
            'estado_id' => '31',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Oxkutzcab',
            'estado_id' => '31',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Panabá',
            'estado_id' => '31',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Peto',
            'estado_id' => '31',
            'number' =>  '058',
        ]);
        App\Municipio::create([
            'name' =>  'Progreso',
            'estado_id' => '31',
            'number' =>  '059',
        ]);
        App\Municipio::create([
            'name' =>  'Quintana Roo',
            'estado_id' => '31',
            'number' =>  '060',
        ]);
        App\Municipio::create([
            'name' =>  'Río Lagartos',
            'estado_id' => '31',
            'number' =>  '061',
        ]);
        App\Municipio::create([
            'name' =>  'Sacalum',
            'estado_id' => '31',
            'number' =>  '062',
        ]);
        App\Municipio::create([
            'name' =>  'Samahil',
            'estado_id' => '31',
            'number' =>  '063',
        ]);
        App\Municipio::create([
            'name' =>  'Sanahcat',
            'estado_id' => '31',
            'number' =>  '064',
        ]);
        App\Municipio::create([
            'name' =>  'San Felipe',
            'estado_id' => '31',
            'number' =>  '065',
        ]);
        App\Municipio::create([
            'name' =>  'Santa Elena',
            'estado_id' => '31',
            'number' =>  '066',
        ]);
        App\Municipio::create([
            'name' =>  'Seyé',
            'estado_id' => '31',
            'number' =>  '067',
        ]);
        App\Municipio::create([
            'name' =>  'Sinanché',
            'estado_id' => '31',
            'number' =>  '068',
        ]);
        App\Municipio::create([
            'name' =>  'Sotuta',
            'estado_id' => '31',
            'number' =>  '069',
        ]);
        App\Municipio::create([
            'name' =>  'Sucilá',
            'estado_id' => '31',
            'number' =>  '070',
        ]);
        App\Municipio::create([
            'name' =>  'Sudzal',
            'estado_id' => '31',
            'number' =>  '071',
        ]);
        App\Municipio::create([
            'name' =>  'Suma',
            'estado_id' => '31',
            'number' =>  '072',
        ]);
        App\Municipio::create([
            'name' =>  'Tahdziú',
            'estado_id' => '31',
            'number' =>  '073',
        ]);
        App\Municipio::create([
            'name' =>  'Tahmek',
            'estado_id' => '31',
            'number' =>  '074',
        ]);
        App\Municipio::create([
            'name' =>  'Teabo',
            'estado_id' => '31',
            'number' =>  '075',
        ]);
        App\Municipio::create([
            'name' =>  'Tecoh',
            'estado_id' => '31',
            'number' =>  '076',
        ]);
        App\Municipio::create([
            'name' =>  'Tekal de Venegas',
            'estado_id' => '31',
            'number' =>  '077',
        ]);
        App\Municipio::create([
            'name' =>  'Tekantó',
            'estado_id' => '31',
            'number' =>  '078',
        ]);
        App\Municipio::create([
            'name' =>  'Tekax',
            'estado_id' => '31',
            'number' =>  '079',
        ]);
        App\Municipio::create([
            'name' =>  'Tekit',
            'estado_id' => '31',
            'number' =>  '080',
        ]);
        App\Municipio::create([
            'name' =>  'Tekom',
            'estado_id' => '31',
            'number' =>  '081',
        ]);
        App\Municipio::create([
            'name' =>  'Telchac Pueblo',
            'estado_id' => '31',
            'number' =>  '082',
        ]);
        App\Municipio::create([
            'name' =>  'Telchac Puerto',
            'estado_id' => '31',
            'number' =>  '083',
        ]);
        App\Municipio::create([
            'name' =>  'Temax',
            'estado_id' => '31',
            'number' =>  '084',
        ]);
        App\Municipio::create([
            'name' =>  'Temozón',
            'estado_id' => '31',
            'number' =>  '085',
        ]);
        App\Municipio::create([
            'name' =>  'Tepakán',
            'estado_id' => '31',
            'number' =>  '086',
        ]);
        App\Municipio::create([
            'name' =>  'Tetiz',
            'estado_id' => '31',
            'number' =>  '087',
        ]);
        App\Municipio::create([
            'name' =>  'Teya',
            'estado_id' => '31',
            'number' =>  '088',
        ]);
        App\Municipio::create([
            'name' =>  'Ticul',
            'estado_id' => '31',
            'number' =>  '089',
        ]);
        App\Municipio::create([
            'name' =>  'Timucuy',
            'estado_id' => '31',
            'number' =>  '090',
        ]);
        App\Municipio::create([
            'name' =>  'Tinum',
            'estado_id' => '31',
            'number' =>  '091',
        ]);
        App\Municipio::create([
            'name' =>  'Tixcacalcupul',
            'estado_id' => '31',
            'number' =>  '092',
        ]);
        App\Municipio::create([
            'name' =>  'Tixkokob',
            'estado_id' => '31',
            'number' =>  '093',
        ]);
        App\Municipio::create([
            'name' =>  'Tixmehuac',
            'estado_id' => '31',
            'number' =>  '094',
        ]);
        App\Municipio::create([
            'name' =>  'Tixpéhual',
            'estado_id' => '31',
            'number' =>  '095',
        ]);
        App\Municipio::create([
            'name' =>  'Tizimín',
            'estado_id' => '31',
            'number' =>  '096',
        ]);
        App\Municipio::create([
            'name' =>  'Tunkás',
            'estado_id' => '31',
            'number' =>  '097',
        ]);
        App\Municipio::create([
            'name' =>  'Tzucacab',
            'estado_id' => '31',
            'number' =>  '098',
        ]);
        App\Municipio::create([
            'name' =>  'Uayma',
            'estado_id' => '31',
            'number' =>  '099',
        ]);
        App\Municipio::create([
            'name' =>  'Ucú',
            'estado_id' => '31',
            'number' =>  '100',
        ]);
        App\Municipio::create([
            'name' =>  'Umán',
            'estado_id' => '31',
            'number' =>  '101',
        ]);
        App\Municipio::create([
            'name' =>  'Valladolid',
            'estado_id' => '31',
            'number' =>  '102',
        ]);
        App\Municipio::create([
            'name' =>  'Xocchel',
            'estado_id' => '31',
            'number' =>  '103',
        ]);
        App\Municipio::create([
            'name' =>  'Yaxcabá',
            'estado_id' => '31',
            'number' =>  '104',
        ]);
        App\Municipio::create([
            'name' =>  'Yaxkukul',
            'estado_id' => '31',
            'number' =>  '105',
        ]);
        App\Municipio::create([
            'name' =>  'Yobaín',
            'estado_id' => '31',
            'number' =>  '106',
        ]);
        App\Municipio::create([
            'name' =>  'Apozol',
            'estado_id' => '32',
            'number' =>  '001',
        ]);
        App\Municipio::create([
            'name' =>  'Apulco',
            'estado_id' => '32',
            'number' =>  '002',
        ]);
        App\Municipio::create([
            'name' =>  'Atolinga',
            'estado_id' => '32',
            'number' =>  '003',
        ]);
        App\Municipio::create([
            'name' =>  'Benito Juárez',
            'estado_id' => '32',
            'number' =>  '004',
        ]);
        App\Municipio::create([
            'name' =>  'Calera',
            'estado_id' => '32',
            'number' =>  '005',
        ]);
        App\Municipio::create([
            'name' =>  'Cañitas de Felipe Pescador',
            'estado_id' => '32',
            'number' =>  '006',
        ]);
        App\Municipio::create([
            'name' =>  'Concepción del Oro',
            'estado_id' => '32',
            'number' =>  '007',
        ]);
        App\Municipio::create([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '32',
            'number' =>  '008',
        ]);
        App\Municipio::create([
            'name' =>  'Chalchihuites',
            'estado_id' => '32',
            'number' =>  '009',
        ]);
        App\Municipio::create([
            'name' =>  'Fresnillo',
            'estado_id' => '32',
            'number' =>  '010',
        ]);
        App\Municipio::create([
            'name' =>  'Trinidad García de la Cadena',
            'estado_id' => '32',
            'number' =>  '011',
        ]);
        App\Municipio::create([
            'name' =>  'Genaro Codina',
            'estado_id' => '32',
            'number' =>  '012',
        ]);
        App\Municipio::create([
            'name' =>  'General Enrique Estrada',
            'estado_id' => '32',
            'number' =>  '013',
        ]);
        App\Municipio::create([
            'name' =>  'General Francisco R. Murguía',
            'estado_id' => '32',
            'number' =>  '014',
        ]);
        App\Municipio::create([
            'name' =>  'El Plateado de Joaquín Amaro',
            'estado_id' => '32',
            'number' =>  '015',
        ]);
        App\Municipio::create([
            'name' =>  'General Pánfilo Natera',
            'estado_id' => '32',
            'number' =>  '016',
        ]);
        App\Municipio::create([
            'name' =>  'Guadalupe',
            'estado_id' => '32',
            'number' =>  '017',
        ]);
        App\Municipio::create([
            'name' =>  'Huanusco',
            'estado_id' => '32',
            'number' =>  '018',
        ]);
        App\Municipio::create([
            'name' =>  'Jalpa',
            'estado_id' => '32',
            'number' =>  '019',
        ]);
        App\Municipio::create([
            'name' =>  'Jerez',
            'estado_id' => '32',
            'number' =>  '020',
        ]);
        App\Municipio::create([
            'name' =>  'Jiménez del Teul',
            'estado_id' => '32',
            'number' =>  '021',
        ]);
        App\Municipio::create([
            'name' =>  'Juan Aldama',
            'estado_id' => '32',
            'number' =>  '022',
        ]);
        App\Municipio::create([
            'name' =>  'Juchipila',
            'estado_id' => '32',
            'number' =>  '023',
        ]);
        App\Municipio::create([
            'name' =>  'Loreto',
            'estado_id' => '32',
            'number' =>  '024',
        ]);
        App\Municipio::create([
            'name' =>  'Luis Moya',
            'estado_id' => '32',
            'number' =>  '025',
        ]);
        App\Municipio::create([
            'name' =>  'Mazapil',
            'estado_id' => '32',
            'number' =>  '026',
        ]);
        App\Municipio::create([
            'name' =>  'Melchor Ocampo',
            'estado_id' => '32',
            'number' =>  '027',
        ]);
        App\Municipio::create([
            'name' =>  'Mezquital del Oro',
            'estado_id' => '32',
            'number' =>  '028',
        ]);
        App\Municipio::create([
            'name' =>  'Miguel Auza',
            'estado_id' => '32',
            'number' =>  '029',
        ]);
        App\Municipio::create([
            'name' =>  'Momax',
            'estado_id' => '32',
            'number' =>  '030',
        ]);
        App\Municipio::create([
            'name' =>  'Monte Escobedo',
            'estado_id' => '32',
            'number' =>  '031',
        ]);
        App\Municipio::create([
            'name' =>  'Morelos',
            'estado_id' => '32',
            'number' =>  '032',
        ]);
        App\Municipio::create([
            'name' =>  'Moyahua de Estrada',
            'estado_id' => '32',
            'number' =>  '033',
        ]);
        App\Municipio::create([
            'name' =>  'Nochistlán de Mejía',
            'estado_id' => '32',
            'number' =>  '034',
        ]);
        App\Municipio::create([
            'name' =>  'Noria de Ángeles',
            'estado_id' => '32',
            'number' =>  '035',
        ]);
        App\Municipio::create([
            'name' =>  'Ojocaliente',
            'estado_id' => '32',
            'number' =>  '036',
        ]);
        App\Municipio::create([
            'name' =>  'Pánuco',
            'estado_id' => '32',
            'number' =>  '037',
        ]);
        App\Municipio::create([
            'name' =>  'Pinos',
            'estado_id' => '32',
            'number' =>  '038',
        ]);
        App\Municipio::create([
            'name' =>  'Río Grande',
            'estado_id' => '32',
            'number' =>  '039',
        ]);
        App\Municipio::create([
            'name' =>  'Sain Alto',
            'estado_id' => '32',
            'number' =>  '040',
        ]);
        App\Municipio::create([
            'name' =>  'El Salvador',
            'estado_id' => '32',
            'number' =>  '041',
        ]);
        App\Municipio::create([
            'name' =>  'Sombrerete',
            'estado_id' => '32',
            'number' =>  '042',
        ]);
        App\Municipio::create([
            'name' =>  'Susticacán',
            'estado_id' => '32',
            'number' =>  '043',
        ]);
        App\Municipio::create([
            'name' =>  'Tabasco',
            'estado_id' => '32',
            'number' =>  '044',
        ]);
        App\Municipio::create([
            'name' =>  'Tepechitlán',
            'estado_id' => '32',
            'number' =>  '045',
        ]);
        App\Municipio::create([
            'name' =>  'Tepetongo',
            'estado_id' => '32',
            'number' =>  '046',
        ]);
        App\Municipio::create([
            'name' =>  'Teúl de González Ortega',
            'estado_id' => '32',
            'number' =>  '047',
        ]);
        App\Municipio::create([
            'name' =>  'Tlaltenango de Sánchez Román',
            'estado_id' => '32',
            'number' =>  '048',
        ]);
        App\Municipio::create([
            'name' =>  'Valparaíso',
            'estado_id' => '32',
            'number' =>  '049',
        ]);
        App\Municipio::create([
            'name' =>  'Vetagrande',
            'estado_id' => '32',
            'number' =>  '050',
        ]);
        App\Municipio::create([
            'name' =>  'Villa de Cos',
            'estado_id' => '32',
            'number' =>  '051',
        ]);
        App\Municipio::create([
            'name' =>  'Villa García',
            'estado_id' => '32',
            'number' =>  '052',
        ]);
        App\Municipio::create([
            'name' =>  'Villa González Ortega',
            'estado_id' => '32',
            'number' =>  '053',
        ]);
        App\Municipio::create([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '32',
            'number' =>  '054',
        ]);
        App\Municipio::create([
            'name' =>  'Villanueva',
            'estado_id' => '32',
            'number' =>  '055',
        ]);
        App\Municipio::create([
            'name' =>  'Zacatecas',
            'estado_id' => '32',
            'number' =>  '056',
        ]);
        App\Municipio::create([
            'name' =>  'Trancoso',
            'estado_id' => '32',
            'number' =>  '057',
        ]);
        App\Municipio::create([
            'name' =>  'Santa María de la Paz',
            'estado_id' => '32',
            'number' =>  '058',
        ]);
    }
}
