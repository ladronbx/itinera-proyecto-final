<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('activities')->insert([
            'name' => 'Ciudad de las Artes y las Ciencias',
            'description' => 'Explora la impresionante Ciudad de las Artes y las Ciencias en Valencia.',
            'image_1' => 'https://forbes.es/wp-content/uploads/2021/02/GettyImages-486960529.jpg',
            'image_2' => 'https://www.emozionviajes.com/i-img/es/blog/la-ciudad-de-las-artes-y-las-ciencias/gr-la-ciudad-de-las-artes-y-las-ciencias.jpg',
            'duration' => 4,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Playa de la Malvarrosa',
            'description' => 'Disfruta de un día de sol en la famosa Playa de la Malvarrosa.',
            'image_1' => 'https://mediaim.expedia.com/destination/3/cf70eaf8aa1e2f846be48fd251e5708c.jpg',
            'image_2' => 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2020/09/playa-de-la-malvarrosa.jpg',
            'duration' => 5,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Casco Antiguo',
            'description' => 'Recorre las estrechas calles del Casco Antiguo de Valencia.',
            'image_1' => 'https://www.valenciabus.com/wp-content/uploads/que-visitar-en-valencia.jpeg',
            'image_2' => 'https://mentavalencia.com/wp-content/uploads/2018/08/plaza-redonda.jpg',
            'duration' => 3,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Bioparc Valencia',
            'description' => 'Descubre la vida salvaje en el Bioparc de Valencia.',
            'image_1' => 'https://thumbnail.pa-community.com/18/0e/0721b647cc19c03c943cf73f735d/270f14f735736a5d65c2da892f627029.jpg',
            'image_2' => 'https://www.shutterstock.com/image-photo/valencia-spain-october-27-2021-600nw-2106155255.jpg',
            'duration' => 5,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Oceanogràfic',
            'description' => 'Sumérgete en el Oceanogràfic, el acuario más grande de Europa.',
            'image_1' => 'https://cdn-imgix.headout.com/category/2700/image/0727d0ae-748f-4345-8db4-108b891ee11b-2700-valencia-01-valencia--attractions-oceanografic-tickets-01.jpg',
            'image_2' => 'https://www.valenciabonita.es/wp-content/uploads/2018/01/31604090441_fbe1ca0d62_o-1.jpg',
            'duration' => 4,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Albufera Natural Park',
            'description' => 'Navega por la Albufera, un hermoso parque natural cerca de Valencia.',
            'image_1' => 'https://www.visitvalencia.com/sites/default/files/media/media-images/images/Albufera-VV-17696_1024-%20Foto_Josep_Gil.jpg',
            'image_2' => 'https://hostalandres-elsaler.es/wp-content/uploads/2018/06/shutterstock_248853742-1.jpg',
            'duration' => 4,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Hemisfèric',
            'description' => 'Disfruta de proyecciones y espectáculos en el Hemisfèric de Valencia.',
            'image_1' => 'https://www.jardindelturia.com/wp-content/uploads/hemisferic-letras.jpg',
            'image_2' => 'https://www.ticketsnet.es/ticketspro/app/web/upload/calendars/image_1/296354cc5e11655ea131516595af6857.jpg',
            'duration' => 2,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Mercado Central',
            'description' => 'Explora el bullicioso Mercado Central de Valencia.',
            'image_1' => 'https://f.hubspotusercontent40.net/hubfs/5897040/mercado-central-valencia-entrada-1.jpg',
            'image_2' => 'https://blog.visitvalencia.com/hs-fs/hubfs/mercado-central-valencia-cupula-1.jpg?width=800&name=mercado-central-valencia-cupula-1.jpg',
            'duration' => 3,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Torres de Serranos',
            'description' => 'Visita las históricas Torres de Serranos en Valencia.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/7/72/Puerta_de_los_Serranos%2C_Valencia%2C_Espa%C3%B1a%2C_2014-06-30%2C_DD_86.JPG',
            'image_2' => 'https://offloadmedia.feverup.com/valenciasecreta.com/wp-content/uploads/2016/11/21101435/fallas_unesco.jpg',
            'duration' => 2,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por la Costa da Morte',
            'description' => 'Explora la impresionante Costa da Morte en Galicia, descubriendo sus paisajes marítimos y pintorescos pueblos pesqueros.',
            'image_1' => 'https://i0.wp.com/www.galiciatips.com/en/files/2021/10/camarinas.jpeg?fit=600%2C400&ssl=1',
            'image_2' => 'https://www.spain.info/.content/imagenes/cabeceras-grandes/galicia/cabo-vilan-faro-galicia-c-hector-martinez-u1602145.jpg',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por la Ribeira Sacra',
            'description' => 'Descubre la Ribeira Sacra, una región en Galicia conocida por sus viñedos y monasterios.',
            'image_1' => 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2022/09/ourense-canones-del-sil-888.jpg',
            'image_2' => 'https://www.turismo.gal/osdam/filestore/3/7/8/2_eedf6f0a4a9511d/3782scr_3c4a1dcd550d1d0.jpg',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por las Islas Cíes',
            'description' => 'Visita las Islas Cíes, un archipiélago en Galicia conocido por sus playas y su naturaleza.',
            'image_1' => 'https://www.crucerosriasbaixas.com/wp-content/uploads/2019/06/islas-cies-vigo-7.jpg',
            'image_2' => 'https://www.interrias.com/wp-content/uploads/2017/08/FOTO-PRINCIPAL-POST-r-1200x675-1-1080x675.jpg',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por las Islas Ons',
            'description' => 'Explora las Islas Ons, un archipiélago en Galicia conocido por sus playas y su naturaleza.',
            'image_1' => 'https://www.mardeons.es/wp-content/uploads/2020/06/curiosidades-sobre-la-isla-de-ons-en-galicia.jpg',
            'image_2' => 'https://www.sientegalicia.com/blog/wp-content/uploads/2016/06/Mirador-de-la-Isla-de-Ons.jpg',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por las Islas Sálvora',
            'description' => 'Visita las Islas Sálvora, un archipiélago en Galicia conocido por sus playas y su naturaleza.',
            'image_1' => 'https://www.crucerosdoulla.com/activities/visita-isla-de-salvora/images/sirena-isla-salvora.jpg',
            'image_2' => 'https://www.charternatura.com/uploads/2/1/5/3/21533860/isla-salvora-a-coruna-5669-1_orig.jpg',
            'duration' => 3,
            'location_id' => 2
        ]);
        DB::table('activities')->insert([
            'name' => 'Flamenco en Triana',
            'description' => 'Experimenta la pasión del flamenco en el barrio de Triana en Sevilla. Disfruta de un espectáculo en vivo que captura la esencia del arte flamenco, con música, cante y baile.',
            'image_1' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/23/c9/d4/cb/fin-de-fiesta-en-el-teatro.jpg?w=1200&h=1200&s=1',
            'image_2' => 'https://cd1.taquilla.com/data/images/t/15/teatro-flamenco-triana.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Catedral de Sevilla',
            'description' => 'Visita la Catedral de Sevilla, la catedral gótica más grande del mundo.',
            'image_1' => 'https://cdn.getyourguide.com/img/tour/b203ad7fded51715.jpeg/97.jpg',
            'image_2' => 'https://multimedia.andalucia.org/media/30C5694873514DF5BFE17164EAF1B940/img/D7A3268E8AA94F1594FAC32FB03380E3/1611304799973slider-interior-catedral7909304964114478417.jpg?responsive',
            'duration' => 3,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Giralda',
            'description' => 'Visita la Giralda, el campanario de la Catedral de Sevilla.',
            'image_1' => 'https://cometeelmundo.net/sites/default/files/styles/max_900x900/public/media/blog/visitar-la-giralda-de-sevilla.jpg?itok=1i2CjMbP',
            'image_2' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/8f/05/18.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Real Alcázar',
            'description' => 'Explora el Real Alcázar de Sevilla, un conjunto palaciego amurallado construido en diferentes etapas históricas',
            'image_1' => 'https://www.alcazarsevilla.org/wp-content/uploads/2019/03/Historia-1.jpg',
            'image_2' => 'https://offloadmedia.feverup.com/sevillasecreta.co/wp-content/uploads/2016/02/20100207/shutterstock_389603563-1-1024x597.jpg',
            'duration' => 3,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Plaza de España',
            'description' => 'Visita la Plaza de España que simboliza la comunión con los antiguos territorios americanos.',
            'image_1' => 'https://www.diariodesevilla.es/2021/10/08/vivirensevilla/Plaza-Espana_1618048552_145101326_1200x675.jpg',
            'image_2' => 'https://www.artesaniasevilla.com/modules/ph_simpleblog/covers/35.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio de Santa Cruz',
            'description' => 'Explora el Barrio de Santa Cruz, que se asienta en parte de la antigua judería de la ciudad.',
            'image_1' => 'https://media.traveler.es/photos/61376e8ad7c7024f9175eb3b/16:9/w_1968,h_1107,c_limit/136286.jpg',
            'image_2' => 'https://www.101viajes.com/sites/default/files/casco-historico-santa-cruz-sevilla_0.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Archivo de Indias',
            'description' => 'Visita el Archivo de Indias, un edificio renacentista considerado patrimonio de la humanidad que exhibe documentos sobre el Imperio español.',
            'image_1' => 'https://offloadmedia.feverup.com/sevillasecreta.co/wp-content/uploads/2015/11/19140934/shutterstock_541372600-1.jpg',
            'image_2' => 'https://elcorreoweb.es/documents/10157/0/675x450/0c25/675d400/none/10703/KJIA/image_content_18792973_20170317101239.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Torre del Oro',
            'description' => 'Visita la Torre del Oro, una atalaya defensiva de época almohade famosa por sus reflejos dorados, protagonista de leyendas.',
            'image_1' => 'https://offloadmedia.feverup.com/sevillasecreta.co/wp-content/uploads/2016/01/20100526/Torre-del-Oro-en-Sevilla.jpg',
            'image_2' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/20/ce/75/49/caption.jpg?w=1200&h=900&s=1',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Parque de María Luisa',
            'description' => 'Explora el Parque de María Luisa, el primer parque urbano de Sevilla y uno de sus pulmones verdes.',
            'image_1' => 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2019/04/parque-de-maria-luisa.jpg',
            'image_2' => 'https://offloadmedia.feverup.com/sevillasecreta.co/wp-content/uploads/2020/06/24070607/shutterstock_1324665797-1-1024x651.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo de Bellas Artes',
            'description' => 'Visita el Museo de Bellas Artes de Sevilla, es considerada una de las pinacotecas más importantes de España.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Fachada_Museo.jpg',
            'image_2' => 'https://www.diariodesevilla.es/2018/01/05/ocio/Interior-Bellas-Artes-Murillo-Sevilla_1206489430_79012571_667x375.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Arqueológico',
            'description' => 'Visita el Museo Arqueológico de Sevilla, que exhibe el tesoro de El Carambolo, encontrado en la zona, además de reliquias romanas y mosaicos.',
            'image_1' => 'https://www.diariodesevilla.es/2023/06/05/sevilla/Vista-Museo-Arqueologico-Sevilla_1799530200_186191691_1200x675.jpg',
            'image_2' => 'https://www.sevillaluxuryrentals.com/wp-content/uploads/2020/01/Arqueologico.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Puenting en Madrid',
            'description' => 'Experimenta la adrenalina del puenting en Madrid.',
            'image_1' => 'https://media.timeout.com/images/105941115/image.jpg',
            'image_2' => 'https://cdn1.yumping.com/emp/fotos/6/3/7/0/5/tb_p-63705-76710680-2494358380660761-8885370729273491456-o_15753627782972.jpg',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo del Prado',
            'description' => 'Sumérgete en la rica historia del arte con un tour por el Museo del Prado en Madrid. Descubre obras maestras de artistas reconocidos y disfruta de la impresionante colección de pinturas.',
            'image_1' => 'https://www.lavanguardia.com/files/og_thumbnail/uploads/2019/11/19/5fa53648e38b2.jpeg',
            'image_2' => 'https://img.interempresas.net/fotos/3884163.jpeg',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Palacio Real',
            'description' => 'Explora el Palacio Real de Madrid, es el más grande de Europa Occidental y uno de los más grandes del mundo.',
            'image_1' => 'https://images.musement.com/cover/0003/11/royal-palace-of-madrid_header-210276.jpeg?q=30&fit=crop&auto=format&w=1024&h=400',
            'image_2' => 'https://www.patrimonionacional.es/sites/default/files/styles/full/public/2020-05/6-salon_del_trono_cabecera_.jpg?itok=VS6lBvub',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Parque del Retiro',
            'description' => 'Explora el Parque del Retiro, amplio parque del siglo XIX con lago para barcas y rosaleda, además de diversas fuentes y estatuas.',
            'image_1' => 'https://patrimonioypaisaje.madrid.es/FWProjects/monumenta/Edificios/90002/03.05-img%201.jpg',
            'image_2' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/348000/348829-El-Retiro-Park.jpg',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Plaza Mayor',
            'description' => 'Visita la Plaza Mayor. Este recinto fue escenario en tiempos pasados de numerosos actos públicos, tales como corridas de toros, procesiones, fiestas, representaciones de teatro, juicios de la Inquisición e incluso ejecuciones capitales.',
            'image_1' => 'https://okdiario.com/img/2017/10/26/las-curiosidades-de-la-plaza-mayor-de-madrid-que-no-conocias-3.jpg',
            'image_2' => 'https://static.eldiario.es/clip/4f847c17-2908-4160-90ad-44f3b6fa7d67_16-9-discover-aspect-ratio_default_0.jpg',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Puerta del Sol',
            'description' => 'Visita la Puerta del Sol, en ella se encuentra desde 1950 el denominado kilómetro cero de las carreteras radiales del país.',
            'image_1' => 'https://madridando.com/wp-content/uploads/2018/07/puerta-del-sol-madrid.jpeg',
            'image_2' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/349000/349163-Puerta-Del-Sol.jpg',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Templo de Debod',
            'description' => 'Visita el Templo de Debod, fue un regalo de Egipto a España en 1968 en compensación por la ayuda española tras el llamamiento internacional realizado por la Unesco para salvar los templos de Nubia.',
            'image_1' => 'https://urbanity.one/uploads/default/original/2X/2/287b029774d95c2ef4c4c4f77236a0e40b1255a3.jpeg',
            'image_2' => 'https://media.timeout.com/images/105778754/750/422/image.jpg',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Reina Sofía',
            'description' => 'Visita el Museo Reina Sofía, es un museo de arte del siglo XX y contemporáneo.',
            'image_1' => 'https://static2.museoreinasofia.es/sites/default/files/snippet_museo_sede_principal_5.png',
            'image_2' => 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2023/09/guernica-3127614.jpg?tf=3840x',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Thyssen-Bornemisza',
            'description' => 'Visita el Museo Thyssen-Bornemisza, es una pinacoteca de maestros antiguos y modernos.',
            'image_1' => 'https://www.hotelindiana.es/wp-content/uploads/2020/05/museo-thyssen-gratis.jpg',
            'image_2' => 'https://saposyprincesas.elmundo.es/wp-content/uploads/2012/09/madrid-museo-thyssen-005.jpg',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Arqueológico',
            'description' => 'Visita el Museo Arqueológico Nacional, es el principal museo español dedicado a la arqueología. Su colección se basa en piezas originarias de España, desde la Prehistoria hasta la Edad Moderna.',
            'image_1' => 'https://saposyprincesas.elmundo.es/wp-content/uploads/2015/01/museo-arqueologico-nacional.jpg',
            'image_2' => 'https://turismomadrid.es/images/Contenido/veryhacer/cultura/museos/Sala%20de%20Grecia_MAN%20Luis%20Asn.jpg',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo de Cera',
            'description' => 'Visita el Museo de Cera de Madrid, cuenta con más de 450 figuras de cera de conocidos personajes históricos, del mundo del deporte y del espectáculo.',
            'image_1' => 'https://www.museoceramadrid.com/wp-content/uploads/Que-hacer-en-el-Museo-de-Cera-de-Madrid..jpg',
            'image_2' => 'https://www.65ymas.com/uploads/s1/10/93/44/6/museo-cera-madrid.jpeg',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita a la Sagrada Familia',
            'description' => 'Explora la famosa Sagrada Familia en Barcelona, obra maestra de Antoni Gaudí. Descubre la arquitectura única y la historia detrás de esta icónica basílica.',
            'image_1' => 'https://www.sacyr.com/documents/121856245/121935575/IMG+0+Sagrada+Familia.jpg/581b6a0d-6ea2-c8c8-e24d-af942bebb396?t=1680604818400',
            'image_2' => 'https://www.spain.info/export/sites/segtur/.content/imagenes/reportajes/cataluna/sagrada-familia-interior.jpg',
            'duration' => 2,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque Güell',
            'description' => 'Pasea por el Parque Güell, otro proyecto magistral de Gaudí en Barcelona. Disfruta de la arquitectura modernista, los mosaicos coloridos y las vistas panorámicas de la ciudad.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/G%C3%BCell_BCN.jpg',
            'image_2' => 'https://img2.rtve.es/imagenes/jardines-historia-parque-guell/1650732387265.jpg',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Paseo por Las Ramblas',
            'description' => 'Sumérgete en la vibrante vida urbana de Barcelona dando un paseo por Las Ramblas. Descubre tiendas, restaurantes, artistas callejeros y la energía única de esta famosa avenida.',
            'image_1' => 'https://static-resources.mirai.com/wp-content/uploads/sites/1745/20210603081005/esta-Las-Ramblas-de-Barcelona-.jpg',
            'image_2' => 'https://beaviajera.com/wp-content/uploads/2020/09/Las-Ramblas-11.jpg',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio Gótico',
            'description' => 'Explora el Barrio Gótico de Barcelona, un distrito con encanto que tiene estrechos callejones medievales repletos de bares de moda, pubs y restaurantes.',
            'image_1' => 'https://barcelonando.com/es/wp-content/uploads/2018/11/barrio_gotico.jpeg',
            'image_2' => 'https://www.gratisbarcelona.com/assets/images/barrio-gotico010.jpg',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio del Born',
            'description' => 'Explora el Barrio del Born de Barcelona, uno de los barrios más de moda de Barcelona. Cosmopolita, multicultural y alternativo.',
            'image_1' => 'https://barcelonando.com/es/wp-content/uploads/2018/07/el-born-barcelona.jpeg',
            'image_2' => 'https://beaviajera.com/wp-content/uploads/2020/01/El-Born-8-1024x768.jpg',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio de Gracia',
            'description' => 'Explora el Barrio de Gracia de Barcelona, un distrito elegante que destaca por sus bulevares y calles peatonales del siglo XIX repletas de boutiques alternativas, galerías y salas de cine.',
            'image_1' => 'https://s3.eu-west-1.amazonaws.com/pro.static.portalstdo.tmb.cat/styles/galeria_slider/s3/2018-03/REF_BARRIO_DE_GRACIA_CT6A0756-web.jpg?itok=8YHbmYXI',
            'image_2' => 'https://www.willysplan.com/wp-content/uploads/2022/10/tour-por-el-barrio-de-gracia-de-barcelona.jpg',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio de Sants',
            'description' => 'Explora el Barrio de Sants de Barcelona, es una zona residencial tranquila alejada de la ciudad.',
            'image_1' => 'https://megustavolar.iberia.com/wp-content/uploads/mgv/Barcelona-Barrio-Sants-Espa%C3%B1a-Dani-Keral-Un-Viaje-Creativo-640x441.jpg',
            'image_2' => 'https://images.adsttc.com/media/images/5849/1a54/e58e/ce64/7c00/0162/newsletter/_AG_2575.jpg?1481185830',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita al Camp Nou',
            'description' => 'Visita el Camp Nou, el estadio del FC Barcelona.',
            'image_1' => 'https://www.historia.com/wp-content/uploads/2017/06/camp-nou-vista-aerea.jpg',
            'image_2' => 'https://www.apropacultura.org/sites/default/files/styles/header_780w/public/equipment/vo230607a80001_1.jpg?itok=MWUiLznO',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por los Picos de Europa',
            'description' => 'Embárcate en una emocionante ruta por los Picos de Europa en Asturias. Descubre impresionantes paisajes montañosos y disfruta de la naturaleza en su máxima expresión.',
            'image_1' => 'https://s1.ppllstatics.com/elcorreo/www/multimedia/202212/01/media/cortadas/Picu%20Urriellu-RZls5ztBmVS98PuQIHL4h6J-1248x770@El%20Correo.jpg',
            'image_2' => 'https://www.escapadarural.com/blog/wp-content/uploads/2017/03/Picos-de-Europa-1-1-585x390.jpg',
            'duration' => 4,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta Gastronómica por Oviedo',
            'description' => 'Disfruta en una ruta gastronómica por las calles de Oviedo, la capital de Asturias. Descubre los sabores de la cocina asturiana, probando platos tradicionales como la sidra y el cabrales.',
            'image_1' => 'https://blog.renfe.com/wp-content/uploads/2022/04/4_MG_0009-scaled.jpg',
            'image_2' => 'https://elpiguena.com/wp-content/uploads/2021/03/sidreria-en-gasgona-oviedo-asturias-piguena.jpg',
            'duration' => 3,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita a la Catedral de Oviedo',
            'description' => 'Explora la histórica Catedral de Oviedo, un impresionante monumento de estilo gótico que alberga numerosos tesoros artísticos y religiosos.',
            'image_1' => 'https://www.elcaminoconcorreos.com/admin/files/articulos/397/catedral-san-salvador-oviedo.jpg',
            'image_2' => 'https://saposyprincesas.elmundo.es/wp-content/uploads/2020/06/CatedraldeOviedo.jpg',
            'duration' => 2,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Recorrido por los Lagos de Covadonga',
            'description' => 'Realiza un recorrido por los Lagos de Covadonga, un paraje natural de gran belleza en los Picos de Europa. Disfruta de la naturaleza y las vistas panorámicas.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/d/d6/LAGOS_DE_COVADONGA_5.jpg',
            'image_2' => 'https://fronteraverde.com/wp-content/uploads/2017/02/DSCN4603.jpg',
            'duration' => 4,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Cata de Sidra en una Sidrería Tradicional',
            'description' => 'Sumérgete en la cultura sidrera de Asturias con una cata de sidra en una sidrería tradicional. Aprende sobre la elaboración de la sidra y degusta diferentes variedades.',
            'image_1' => 'https://www.turismoasturias.es/documents/39908/67956/sidrerias-2.jpg/8bf9431c-183b-7e14-221d-f19513d1b81e',
            'image_2' => 'https://www.65ymas.com/uploads/s1/70/80/mejores-sidrerias-asturias-sidreria-lena.jpeg',
            'duration' => 2,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Cocina Asturiana',
            'description' => 'Explora la rica tradición gastronómica de Asturias con una experiencia culinaria. Degusta platos típicos como la fabada asturiana y la sidra local.',
            'image_1' => 'https://i.blogs.es/6a8dcb/fabada_sidra/1366_2000.jpg',
            'image_2' => 'https://www.jaireviajes.com/wp-content/uploads/2017/11/comida-asturiana.png',
            'duration' => 2,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Playa de Gulpiyuri',
            'description' => 'Relájate en la playa de Gulpiyuri, una joya natural escondida en Asturias. Disfruta de aguas cristalinas y un entorno sereno.',
            'image_1' => 'https://queverenasturias.es/wp-content/uploads/2017/09/gulpiyuri-playa-asturias-03.jpg',
            'image_2' => 'https://www.edicionlimitada.es/wp-content/uploads/2021/07/playa_Gulpiyuri_Asturias3.jpg',
            'duration' => 3,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Playa de Torimbia',
            'description' => 'Relájate en la playa de Torimbia, considerada paisaje protegido.',
            'image_1' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/7d/22/c5/torimbia-desde-el-aparcamiento.jpg?w=1200&h=1200&s=1',
            'image_2' => 'https://estaticos-cdn.prensaiberica.es/clip/66b7bf87-3bec-4af5-849c-f46aa3ceb8d6_16-9-aspect-ratio_default_0.jpg',
            'duration' => 3,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Alhambra',
            'description' => 'Visita la majestuosa Alhambra, un complejo palaciego y fortaleza en Granada. Explora los hermosos jardines, patios y salones con influencias islámicas.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/d/de/Dawn_Charles_V_Palace_Alhambra_Granada_Andalusia_Spain.jpg',
            'image_2' => 'https://www.spain.info/.content/imagenes/cabeceras-grandes/andalucia/patio-de-los-leones-la-alhambra-de-granada-s617241374.jpg',
            'duration' => 4,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Catedral de Granada',
            'description' => 'Descubre la Catedral de Granada, una obra maestra arquitectónica que combina estilos gótico y renacentista. Explora la Capilla Real y disfruta de las vistas desde la torre.',
            'image_1' => 'https://www.hitocultural.com/wp-content/uploads/2020/12/Catedral-Granada.jpg',
            'image_2' => 'https://ticketsgranadacristiana.com/uploads/products/catedral04-1-60c315fbf2c6c.jpg',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Barrio del Albaicín',
            'description' => 'Pasea por las estrechas calles empedradas del Albaicín, el antiguo barrio árabe de Granada. Disfruta de la arquitectura morisca, las tiendas artesanales y las vistas a la Alhambra.',
            'image_1' => 'https://i.pinimg.com/736x/87/f4/03/87f403e90d72ff76edc7cb16a78b5d36.jpg',
            'image_2' => 'https://espanafascinante.com/wp-content/uploads/panoramica_andalucia_granada_albaicin_flickr-1-672x372.jpg',
            'duration' => 3,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Mirador de San Nicolás',
            'description' => 'Contempla las impresionantes vistas de la Alhambra desde el Mirador de San Nicolás en el Albaicín. Un lugar icónico para disfrutar de la puesta de sol sobre Granada.',
            'image_1' => 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2018/07/mirador-san-nicolas-plan.jpg',
            'image_2' => 'https://phantom-expansion.unidadeditorial.es/7bb0bf4704b05ad572dcca4c844d228b/resize/640/assets/multimedia/imagenes/2021/02/25/16142564364280.jpg',
            'duration' => 1,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Baños Árabes El Bañuelo',
            'description' => 'Sumérgete en la historia en los Baños Árabes El Bañuelo, antiguos baños públicos islámicos en el Albaicín. Admira la arquitectura y aprende sobre las costumbres de la época.',
            'image_1' => 'https://multimedia.andalucia.org/content_images/main_image_75086.jpeg',
            'image_2' => 'https://go2alhambra.com/images/elbanuelogranada.jpg',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Flamenco en Sacromonte',
            'description' => 'Vive la experiencia del flamenco en el barrio de Sacromonte, conocido por sus cuevas donde se celebran espectáculos flamencos. Disfruta del cante, el baile y la guitarra en un entorno único.',
            'image_1' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/07/01/51/91.jpg',
            'image_2' => 'https://cometeelmundo.net/sites/default/files/styles/max_1300x1300/public/media/blog/flamenco-en-el-sacromonte.jpg?itok=AbUaoj4l',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Monasterio de San Jerónimo',
            'description' => 'Explora el Monasterio de San Jerónimo, un impresionante edificio renacentista en Granada. Descubre la arquitectura, el claustro y la historia religiosa del lugar.',
            'image_1' => 'https://ticketsgranadacristiana.com/uploads/products/sanjeronimo-05-60d19dfdc9c78.jpg',
            'image_2' => 'https://www2.ual.es/ideimand/wp-content/uploads/2018/01/Copia-de-fig-4.jpg',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque de las Ciencias',
            'description' => 'Visita el Parque de las Ciencias, un museo interactivo y centro cultural en Granada. Disfruta de exhibiciones científicas, planetario y actividades educativas.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/4/4a/ParqueCiencias_Macroscopio.jpg',
            'image_2' => 'https://www.juntadeandalucia.es/presidencia/portavoz/resources/files/2018/8/7/1533635087097EDU%20Planetario%20Parque%20de%20las%20Ciencias%20Granada.jpg',
            'duration' => 3,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita al Museo Picasso',
            'description' => 'Explora la obra del famoso pintor Pablo Picasso en el Museo Picasso de Málaga. Descubre una colección única de sus obras y su impacto en el arte moderno.',
            'image_1' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/42/a1/0d/caption.jpg?w=1200&h=-1&s=1',
            'image_2' => 'https://www.museopicassomalaga.org/cms/uploads/xxlarge_El_eco_de_Picasse_Home_de42517cbf.jpg',
            'duration' => 2,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Paseo por el Casco Antiguo',
            'description' => 'Disfruta de un pintoresco paseo por el casco antiguo de Málaga. Explora estrechas calles, descubre plazas encantadoras y sumérgete en la atmósfera histórica.',
            'image_1' => 'https://static.costadelsolmalaga.org/visita/subidas/imagenes/2/6/arc_19362_g.png',
            'image_2' => 'https://www.travelechoes.com/sites/default/files/inline-images/frigiliana.jpg',
            'duration' => 3,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Alcazaba y Teatro Romano',
            'description' => 'Visita la Alcazaba de Málaga, una fortaleza árabe con impresionantes vistas a la ciudad. Descubre también el Teatro Romano, un vestigio histórico.',
            'image_1' => 'https://static.wixstatic.com/media/15cb1d_c24b567700324a82a32be5b8f77772c1~mv2.webp',
            'image_2' => 'https://www.civitatis.com/f/espana/malaga/galeria/teatro-romano-malaga.jpg',
            'duration' => 4,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Día de Playa en La Malagueta',
            'description' => 'Relájate en la playa de La Malagueta y disfruta del sol y del mar. Experimenta la vida playera y prueba la deliciosa gastronomía local en los chiringuitos.',
            'image_1' => 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2019/07/la-malagueta1.jpg',
            'image_2' => 'https://iloftmalaga.com/wp-content/uploads/2020/09/malagueta1.jpg',
            'duration' => 1,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Caminito del Rey',
            'description' => 'Aventúrate en el impresionante Caminito del Rey, un camino de pasarelas suspendidas en las gargantas del Desfiladero de los Gaitanes.',
            'image_1' => 'https://www.spain.info/.content/imagenes/cabeceras-grandes/andalucia/caminito-rey_s724133308.jpg',
            'image_2' => 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Desfiladero_de_los_Gaitanes05.jpg',
            'duration' => 5,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Museo Carmen Thyssen',
            'description' => 'Descubre la colección de arte español del Museo Carmen Thyssen en Málaga. Explora pinturas y esculturas que abarcan desde el siglo XIII hasta el siglo XX.',
            'image_1' => 'https://static.costadelsolmalaga.org/visita/subidas/imagenes/2/1/arc_27512_g.jpg',
            'image_2' => 'https://malagadecultura.com/wp-content/uploads/2022/10/Arte-belga.-Del-impresionismo-a-Magritte.-Musee-dIxelles-696x462.jpg',
            'duration' => 2,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Gibralfaro y Mirador de Málaga',
            'description' => 'Sube al Castillo de Gibralfaro y disfruta de vistas panorámicas de Málaga. Un lugar ideal para capturar la belleza de la ciudad desde las alturas.',
            'image_1' => 'https://www.mardefrades.es/guia-azul/wp-content/uploads/sites/2/2022/06/mirador-de-gibralfaro-03.jpg',
            'image_2' => 'https://www.andalucia360travel.com/wp-content/uploads/2021/09/miradores-de-malaga-fb.jpg',
            'duration' => 3,
            'location_id' => 8
        ]);

        DB::table('activities')->insert([
            'name' => 'Museo Guggenheim Bilbao',
            'description' => 'Explora el icónico Museo Guggenheim Bilbao, una obra maestra de la arquitectura contemporánea diseñada por Frank Gehry. Descubre una impresionante colección de arte moderno y contemporáneo.',
            'image_1' => 'https://cms.guggenheim-bilbao.eus/uploads/2021/03/2-1.jpg',
            'image_2' => 'https://cms.guggenheim-bilbao.eus/uploads/2022/12/obras-maestras-de-la-coleccion.jpg',
            'duration' => 3,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Casco Viejo',
            'description' => 'Sumérgete en la historia y la cultura de Bilbao explorando el Casco Viejo. Descubre sus estrechas calles, plazas animadas y disfruta de la gastronomía vasca en los pintxos.',
            'image_1' => 'https://cms.guggenheim-bilbao.eus/uploads/2019/08/casco-viejo-bilbao.jpg',
            'image_2' => 'https://espanafascinante.com/wp-content/uploads/panoramica-bilbao4-672x350.jpg',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Puente Zubizuri',
            'description' => 'Pasea por el Puente Zubizuri, un puente peatonal diseñado por Santiago Calatrava. Disfruta de las vistas del río Nervión y la arquitectura moderna del puente.',
            'image_1' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Bilbao_-_Zubizuri_07.jpg',
            'image_2' => 'https://www.spain.info/.content/imagenes/cabeceras-grandes/pais-vasco/Zubizuri-puente-y-Isozaki-tower.jpg',
            'duration' => 1,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Museo de Bellas Artes de Bilbao',
            'description' => 'Visita el Museo de Bellas Artes de Bilbao, que alberga una rica colección de pinturas, esculturas y arte decorativo desde el siglo XIII hasta la actualidad.',
            'image_1' => 'https://www.disfrutabizkaia.com/wp-content/uploads/2021/04/museo-bellas-artes-1024x444.png',
            'image_2' => 'https://img.remediosdigitales.com/a6e3b7/mbab/450_1000.jpg',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Funicular de Artxanda',
            'description' => 'Sube al Funicular de Artxanda para disfrutar de vistas panorámicas de Bilbao desde la colina de Artxanda. Un lugar ideal para contemplar la ciudad y sus alrededores.',
            'image_1' => 'https://www.disfrutabizkaia.com/wp-content/uploads/2021/04/funicular-artxanda-bilbao.jpg',
            'image_2' => 'https://funicularartxanda.bilbao.eus/wp-content/uploads/2018/03/02-artxanda.jpg',
            'duration' => 1,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Palacio Euskalduna',
            'description' => 'Descubre el Palacio Euskalduna, un moderno centro de conferencias y artes escénicas en Bilbao. Explora su arquitectura contemporánea y, si es posible, asiste a un evento cultural.',
            'image_1' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/0a/79/64/euskalduna-bilbao.jpg?w=1200&h=-1&s=1',
            'image_2' => 'https://www.euskadi.eus/contenidos/equipamiento/20150929125726/es_def/images/euskalduna1.jpg',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque de Doña Casilda',
            'description' => 'Relájate en el Parque de Doña Casilda, un hermoso parque en el corazón de Bilbao. Disfruta de la naturaleza, los jardines y la tranquilidad del entorno.',
            'image_1' => 'https://images11.eitb.eus/multimedia/images/2017/12/14/2224681/20171214154532_dona-casilda-id1472011895_foto610x342.jpg',
            'image_2' => 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2019/02/parque-dona-casilda-fuente.jpg',
            'duration' => 1,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Azkuna Zentroa',
            'description' => 'Visita Azkuna Zentroa, un espacio cultural y de ocio ubicado en un antiguo almacén de vinos. Descubre exposiciones, eventos y disfruta de la arquitectura del lugar.',
            'image_1' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/8b/39/cb/fachada-dos-fundos-do.jpg?w=1200&h=-1&s=1',
            'image_2' => 'https://pbs.twimg.com/media/DejTm_GXcAAAiDU.jpg',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Esquí en Baqueira Beret',
            'description' => 'Disfruta de la experiencia de esquí en la estación de Baqueira Beret, una de las más prestigiosas de los Pirineos. Descubre pistas emocionantes y hermosos paisajes invernales.',
            'image_1' => 'https://apartamentos.totiaranalquilerbaqueira.com/hubfs/1574939882_433352_1574949416_sumario_normal-jpg.jpeg',
            'image_2' => 'https://images.hola.com/imagenes/viajes/20191126154896/vacaciones-invierno-rafael-la-pleta-hotel-baqueira-beret/0-750-723/bypletavistaaerea-t.jpg',
            'duration' => 4,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Rutas de Senderismo en Aigüestortes',
            'description' => 'Explora las impresionantes rutas de senderismo en el Parque Nacional de Aigüestortes y Estany de Sant Maurici. Descubre lagos, bosques y montañas en un entorno natural único.',
            'image_1' => 'https://www.estiber.com/blog/wp-content/uploads/2021/06/aiguestortes1.jpg',
            'image_2' => 'https://images.hola.com/imagenes/viajes/20180611125462/ruta-coche-aiguestortes-valle-boi-lleida-pirinero/0-575-202/lleida-t.jpg',
            'duration' => 3,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita a Vielha',
            'description' => 'Pasea por las encantadoras calles de Vielha, la capital del Valle de Arán. Descubre la arquitectura tradicional, tiendas locales y disfruta de la gastronomía regional.',
            'image_1' => 'https://equipatgedema.com/wp-content/uploads/2014/12/IMG_0376.jpg',
            'image_2' => 'https://turismeacatalunya.cat/wp-content/uploads/2022/03/PORTADA-VIELHA-1.jpg',
            'duration' => 2,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque Nacional de Aigüestortes',
            'description' => 'Adéntrate en el Parque Nacional de Aigüestortes y Estany de Sant Maurici. Observa la diversidad de flora y fauna, así como impresionantes formaciones geológicas.',
            'image_1' => 'https://www.moventis.es/sites/moventis/files/article/2019/07/els-encantats-lago-san-mauricio.png',
            'image_2' => 'https://que-ver.somrurals.com/wp-content/uploads/2018/10/aiguestortes.jpg',
            'duration' => 4,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta en BTT por el Valle',
            'description' => 'Experimenta la emoción del ciclismo de montaña con una ruta en BTT por los senderos del Valle de Arán. Disfruta de paisajes alpinos y desafiantes descensos.',
            'image_1' => 'https://www.visitvaldaran.com/wp-content/uploads/2015/05/btt.jpg',
            'image_2' => 'https://www.lugaresdeaventura.com/sites/default/files/2020-06/reportaje-val-aran-mtb-portada.jpg',
            'duration' => 3,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Termas de Les',
            'description' => 'Relájate en las Termas de Les, aguas termales situadas en un entorno natural. Disfruta de la tranquilidad y los beneficios para la salud de estas aguas termales.',
            'image_1' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/70/31/f2/termas-baronia-de-les.jpg?w=1200&h=1200&s=1',
            'image_2' => 'https://static.wixstatic.com/media/df7b4c_369e0c10e0f04e1592e4499a8b11f697~mv2.jpg/v1/fill/w_800,h_533,al_c/df7b4c_369e0c10e0f04e1592e4499a8b11f697~mv2.jpg',
            'duration' => 2,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Montgarri y la Ruta de las Iglesias',
            'description' => 'Descubre el encanto histórico de Montgarri y sigue la Ruta de las Iglesias, que te llevará a iglesias románicas enclavadas en paisajes de montaña.',
            'image_1' => 'https://infomapas.com/wp-content/uploads/2019/09/montgarri_val-daran.jpg',
            'image_2' => 'https://www.visitvaldaran.com/wp-content/uploads/2014/06/slide-montgarri-1-1024x1024.jpg',
            'duration' => 3,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Pesca en los Ríos Aranés',
            'description' => 'Disfruta de la pesca en los ríos araneses, famosos por su rica variedad de truchas. Experimenta la pesca deportiva en un entorno natural y relajante.',
            'image_1' => 'https://www.visitvaldaran.com/wp-content/uploads/2016/03/pesca-2016-web.jpg',
            'image_2' => 'https://sietelagos.cl/wp-content/uploads/2023/09/Pesca-en-Panguipulli-Choshuenco-Sietelagos-Sietelagos-Chile-los-Rios-2.jpg',
            'duration' => 1,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Mezquita-Catedral de Córdoba',
            'description' => 'Visita la impresionante Mezquita-Catedral de Córdoba, un lugar de culto que combina elementos islámicos y cristianos. Explora los patios, la sala de oración y la catedral.',
            'image_1' => 'https://s1.eestatic.com/2018/09/16/cultura/patrimonio/cordoba_-municipio-patrimonio-mezquitas_338479073_97401098_1706x960.jpg',
            'image_2' => 'https://mymodernmet.com/wp/wp-content/uploads/2020/02/Mezquita-Cordoba-1.jpg',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Alcázar de los Reyes Cristianos',
            'description' => 'Explora el Alcázar de los Reyes Cristianos, un antiguo palacio fortificado con hermosos jardines y vistas al río Guadalquivir. Descubre la historia de este lugar emblemático.',
            'image_1' => 'https://beticaromana.org/wp-content/uploads/2014/03/alcazar-reyes.jpg',
            'image_2' => 'https://www.aepjp.es/wp-content/uploads/2019/02/k2_items_src_d9bdb14eb0a9b1023a46137e4aceaf72.jpg',
            'duration' => 3,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Barrio de la Judería',
            'description' => 'Pasea por el encantador Barrio de la Judería, con sus estrechas calles empedradas y casas encaladas. Descubre la historia y la cultura judía de Córdoba.',
            'image_1' => 'https://eventourcordoba.es/wp-content/uploads/2016/11/juderia-alcazar-int2.jpg',
            'image_2' => 'https://vueltia.com/viajes/tours/cordoba/barrio_de_la_juderia_cordoba.jpg',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Puente Romano',
            'description' => 'Cruza el Puente Romano sobre el río Guadalquivir. Disfruta de las vistas de la ciudad y descubre la estructura romana que ha perdurado a lo largo de los siglos.',
            'image_1' => 'https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2021/01/25/16115899558059.jpg',
            'image_2' => 'https://cordobea.com/wp-content/uploads/2023/01/Puente-Romano-de-Cordoba-01-REVISTA-EA-DESCUBRE-CORDOBA.jpg',
            'duration' => 1,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Patios de Córdoba',
            'description' => 'Explora los famosos Patios de Córdoba, especialmente impresionantes durante el Festival de los Patios en mayo. Admira la arquitectura y la belleza de estos patios floridos.',
            'image_1' => 'https://viajes.nationalgeographic.com.es/medio/2023/05/02/patios-de-cordoba_616a653d_230502170608_1280x853.jpg',
            'image_2' => 'https://static.eldiario.es/clip/4be60a07-0e2e-43d0-b7bb-dcb524449c13_16-9-aspect-ratio_default_0.jpg',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Baños Califales',
            'description' => 'Sumérgete en la historia en los Baños Califales, antiguos baños árabes en Córdoba. Descubre la arquitectura y las tradiciones de la época.',
            'image_1' => 'https://www.turismodecordoba.org/archivos/2019/201908121216340000001565604994.1423.jpg',
            'image_2' => 'https://cordoba.hammamalandalus.com/wp-content/uploads/sites/4/2019/09/Hammam_COR_Arquitectura_Octubre_2018_0R3A0919-1800x1200.jpg',
            'duration' => 1,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Flamenco en Tablao',
            'description' => 'Vive la auténtica experiencia flamenca en un tablao de Córdoba. Disfruta del cante, el baile y la guitarra en un ambiente íntimo y apasionado.',
            'image_1' => 'https://cordobatickets.com/wp-content/uploads/2020/01/tablao-arte-y-sabores-de-cordoba.jpg',
            'image_2' => 'https://cordobatickets.com/wp-content/uploads/2020/01/tablao-el-cardenal.jpg',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Palacio de Viana',
            'description' => 'Visita el Palacio de Viana, un hermoso palacio renacentista con doce patios diferentes. Explora los jardines y descubre la riqueza arquitectónica de este lugar.',
            'image_1' => 'https://www.civitatis.com/f/espana/cordoba/visita-patios-palacio-viana-589x392.jpg',
            'image_2' => 'https://saposyprincesas.elmundo.es/wp-content/uploads/2019/10/palacio-1.jpg',
            'duration' => 2,
            'location_id' => 11
        ]);

    }
}
