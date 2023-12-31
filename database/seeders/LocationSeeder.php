<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => 'Valencia',
            'description' => 'Valencia es una ciudad en España, conocida por su Ciudad de las Artes y las Ciencias y su festtividad de las Fallas.',
            'image_1' => 'https://image-proxy.libere.app/images/webp:1024/plain/https://air-production-cms-uploads.storage.googleapis.com/uploads/2022/03/31083557/oceanografic-III.jpg@webp',
            'image_2' => 'https://www.valenciabonita.es/wp-content/uploads/2018/11/Programaci%C3%B3n-Navidad-2018-Plaza-de-Toros-Valencia.jpg',
            'image_3' => 'https://viajes.nationalgeographic.com.es/medio/2023/03/03/crida-fallas_6126d9c5_230303102308_1280x853.jpg',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Galicia',
            'description' => 'Galicia es una comunidad autónoma en España, conocida por su gastronomía y sus paisajes.',
            'image_1' => 'https://www.inffinit.es/wp-content/uploads/arco-playa-catedrales-galicia.jpg',
            'image_2' => 'https://metropolitano.gal/wp-content/uploads/2017/05/mejor-banco-mundo-redondela-metropolitano-855x570.jpg',
            'image_3' => 'https://lonelyplanetes.cdnstatics2.com/sites/default/files/styles/max_1300x1300/public/blog/espana_galicia_castrobarona_shutterstock_582064048_luis_cagiao_shutterstock.jpg?itok=OdvmpvPv',
        ]);

        DB::table('locations')->insert([
            'name' => 'Sevilla',
            'description' => 'Sevilla es una ciudad en España, famosa por su Catedral y la Giralda.',
            'image_1' => 'https://media.timeout.com/images/105315015/750/422/image.jpg',
            'image_2' => 'https://s2.abcstatics.com/abc/sevilla/multimedia/sevilla/2022/10/26/plaza-espana-sevilla-RGatPHKYapyCsuC8b7DAh8L-1240x768@abc.jpg',
            'image_3' => 'https://image.urlaubspiraten.de/640/image/upload/v1617096024/Impressions%20and%20Other%20Assets/shutterstock_1840522828_tcbevm.jpg',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Madrid',
            'description' => 'Madrid es la capital de España, famosa por su Plaza Mayor y el Museo del Prado.',
            'image_1' => 'https://cloudfront-eu-central-1.images.arcpublishing.com/prisaradio/7J4H4NOLEBO23BUNNL6764T5TI.jpg',
            'image_2' => 'https://madridando.com/wp-content/uploads/2018/07/gran-via-noche.jpeg',
            'image_3' => 'https://a.cdn-hotels.com/gdcs/production9/d1285/34108d80-9beb-11e8-a942-0242ac110007.jpg?impolicy=fcrop&w=800&h=533&q=medium',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Barcelona',
            'description' => 'Barcelona es una ciudad en España, conocida por la Sagrada Familia y el Parque Güell.',
            'image_1' => 'https://www.sacyr.com/documents/121856245/121935575/IMG+0+Sagrada+Familia.jpg/581b6a0d-6ea2-c8c8-e24d-af942bebb396?t=1680604818400',
            'image_2' => 'https://images.musement.com/cover/0002/15/park-guell_header-114423.jpeg',
            'image_3' => 'https://media.traveler.es/photos/63838947050e0f92cd80c982/16:9/w_2560%2Cc_limit/GettyImages-1392907424.jpg',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Asturias',
            'description' => 'Asturias es una comunidad autónoma en España, famosa por sus paisajes y su gastronomía.',
            'image_1' => 'https://tablasdelcampillin.com/wp-content/uploads/2023/07/Los-lagos-de-Covadonga.jpg',
            'image_2' => 'https://i.pinimg.com/originals/fc/2b/c9/fc2bc98f06636300feecfe132cfbebb0.jpg',
            'image_3' => 'https://www.civitatis.com/blog/wp-content/uploads/2022/10/asturias-fin-semana.jpg',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Granada',
            'description' => 'Granada es una ciudad en España, conocida por su Alhambra y el barrio del Albaicín.',
            'image_1' => 'https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/andalucia/alhambra-granada-20044065-istock.jpg_1014274486.jpg',
            'image_2' => 'https://s1.eestatic.com/2021/07/20/ocio/597951246_195717058_1706x960.jpg',
            'image_3' => 'https://www.granadahoy.com/2023/06/09/vivir/Granada-ciudad-conocida-bloguera-neoyorquina_1800729930_186478953_667x375.jpg',
        ]);

        DB::table('locations')->insert([
            'name' => 'Málaga',
            'description' => 'Málaga es una ciudad en la costa sur de España, famosa por su clima, playas y el Museo Picasso.',
            'image_1' => 'https://s1.eestatic.com/2023/06/01/malaga/malaga-ciudad/768183395_233611299_1706x960.jpg',
            'image_2' => 'https://www.spain.info/.content/imagenes/cabeceras-grandes/andalucia/malaga-52886652-istock.jpg',
            'image_3' => 'https://viajes.nationalgeographic.com.es/medio/2021/03/12/del-turismo-de-sol-y-playa-al-turismo-cultural_74fe5a23_1200x630.jpg',
        ]);

        DB::table('locations')->insert([
            'name' => 'Bilbao',
            'description' => 'Bilbao es una ciudad en el norte de España, conocida por el Museo Guggenheim y su gastronomía vasca.',
            'image_1' => 'https://media.traveler.es/photos/64f59cd0756c466be81874ab/16:9/w_2560%2Cc_limit/david-vives--AQJPGnTVLE-unsplash.jpg',
            'image_2' => 'https://static.eldiario.es/clip/ee1a6976-9563-4d20-a835-249d814558ec_16-9-aspect-ratio_default_0.jpg',
            'image_3' => 'https://www.spain.info/export/sites/segtur/.content/imagenes/rutas/bilbao-dos-dias/bilbao-mercado-ribera-s410197552.jpg_1224728085.jpg',
        ]);

        DB::table('locations')->insert([
            'name' => 'Valle de Arán',
            'description' => 'El Valle de Arán es una comarca en los Pirineos de España, conocida por sus paisajes montañosos y su cultura.',
            'image_1' => 'https://cdn2.hubspot.net/hubfs/5974712/Imagenes%20Griselda/Destinos/Salardu/salard%C3%BAcabecera.jpg',
            'image_2' => 'https://photo620x400.mnstatic.com/5abf3941cfb0c1db91ffd59198579127/vall-daran.jpg',
            'image_3' => 'https://i.blogs.es/108e7b/valle-de-aran-6/450_1000.jpeg',
        ]);

        DB::table('locations')->insert([
            'name' => 'Córdoba',
            'description' => 'Córdoba es una ciudad en Andalucía, España, famosa por su Mezquita-Catedral y el Puente Romano.',
            'image_1' => 'https://www.ahoracordoba.es/wp-content/uploads/2021/11/Cordoba-1.jpg',
            'image_2' => 'https://www.turismodecordoba.org/sliders/2023/202312041019491701681589.041.jpg?v=1702822376',
            'image_3' => 'https://a.cdn-hotels.com/gdcs/production173/d1186/31cb607c-82bb-40c9-8e71-e2186617fa54.jpg?impolicy=fcrop&w=800&h=533&q=medium',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Tenerife',
            'description' => 'Tenerife es la más grande de las islas Canarias de España, frente a África Occidental',
            'image_1' => 'https://lp-cms-production.imgix.net/2023-02/shutterstockRF_1289685475.jpg',
            'image_2' => 'https://media.vogue.es/photos/642d6e7ae50e004205338143/master/w_1600%2Cc_limit/GettyImages-1433379868.jpg',
            'image_3' => 'https://www.diariodetenerife.info/wp-content/uploads/2020/03/20200303-crater_del_Teide.jpg',
        ]);
    }
}