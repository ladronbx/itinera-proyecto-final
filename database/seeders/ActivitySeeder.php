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
            'duration' => 4,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Playa de la Malvarrosa',
            'description' => 'Disfruta de un día de sol en la famosa Playa de la Malvarrosa.',
            'duration' => 5,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Casco Antiguo',
            'description' => 'Recorre las estrechas calles del Casco Antiguo de Valencia.',
            'duration' => 3,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Bioparc Valencia',
            'description' => 'Descubre la vida salvaje en el Bioparc de Valencia.',
            'duration' => 5,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Oceanografico',
            'description' => 'Sumérgete en el Oceanografico, el acuario más grande de Europa.',
            'duration' => 4,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Albufera Natural Park',
            'description' => 'Navega por la Albufera, un hermoso parque natural cerca de Valencia.',
            'duration' => 4,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Hemisférico',
            'description' => 'Disfruta de proyecciones y espectáculos en el Hemisférico de Valencia.',
            'duration' => 2,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Mercado Central',
            'description' => 'Explora el bullicioso Mercado Central de Valencia.',
            'duration' => 3,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Torres de Serranos',
            'description' => 'Visita las históricas Torres de Serranos en Valencia.',
            'duration' => 2,
            'location_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por la Costa da Morte',
            'description' => 'Explora la impresionante Costa da Morte en Galicia, descubriendo sus paisajes marítimos y pintorescos pueblos pesqueros.',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por la Ribeira Sacra',
            'description' => 'Descubre la Ribeira Sacra, una región en Galicia conocida por sus viñedos y monasterios.',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por las Islas Cíes',
            'description' => 'Visita las Islas Cíes, un archipiélago en Galicia conocido por sus playas y su naturaleza.',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por las Islas Ons',
            'description' => 'Explora las Islas Ons, un archipiélago en Galicia conocido por sus playas y su naturaleza.',
            'duration' => 3,
            'location_id' => 2
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por las Islas Sálvora',
            'description' => 'Visita las Islas Sálvora, un archipiélago en Galicia conocido por sus playas y su naturaleza.',
            'duration' => 3,
            'location_id' => 2
        ]);
        DB::table('activities')->insert([
            'name' => 'Flamenco en Triana',
            'description' => 'Experimenta la pasión del flamenco en el barrio de Triana en Sevilla. Disfruta de un espectáculo en vivo que captura la esencia del arte flamenco, con música, cante y baile.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Catedral de Sevilla',
            'description' => 'Visita la Catedral de Sevilla, la catedral gótica más grande del mundo.',
            'duration' => 3,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Giralda',
            'description' => 'Visita la Giralda, el campanario de la Catedral de Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Real Alcázar',
            'description' => 'Explora el Real Alcázar de Sevilla, un palacio real en Sevilla.',
            'duration' => 3,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Plaza de España',
            'description' => 'Visita la Plaza de España, una plaza en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio de Santa Cruz',
            'description' => 'Explora el Barrio de Santa Cruz, un barrio en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Archivo de Indias',
            'description' => 'Visita el Archivo de Indias, un archivo en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Torre del Oro',
            'description' => 'Visita la Torre del Oro, una torre en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Parque de María Luisa',
            'description' => 'Explora el Parque de María Luisa, un parque en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo de Bellas Artes',
            'description' => 'Visita el Museo de Bellas Artes de Sevilla, un museo en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Arqueológico',
            'description' => 'Visita el Museo Arqueológico de Sevilla, un museo en Sevilla.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Puenting en Madrid',
            'description' => 'Experimenta la adrenalina del puenting en Madrid.',
            'duration' => 2,
            'location_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo del Prado',
            'description' => 'Sumérgete en la rica historia del arte con un tour por el Museo del Prado en Madrid. Descubre obras maestras de artistas reconocidos y disfruta de la impresionante colección de pinturas.',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Palacio Real',
            'description' => 'Explora el Palacio Real de Madrid, un palacio real en Madrid.',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Parque del Retiro',
            'description' => 'Explora el Parque del Retiro, un parque en Madrid.',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Plaza Mayor',
            'description' => 'Visita la Plaza Mayor, una plaza en Madrid.',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por la Puerta del Sol',
            'description' => 'Visita la Puerta del Sol, una plaza en Madrid.',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Templo de Debod',
            'description' => 'Visita el Templo de Debod, un templo en Madrid.',
            'duration' => 2,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Reina Sofía',
            'description' => 'Visita el Museo Reina Sofía, un museo en Madrid.',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Thyssen-Bornemisza',
            'description' => 'Visita el Museo Thyssen-Bornemisza, un museo en Madrid.',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo Arqueológico',
            'description' => 'Visita el Museo Arqueológico Nacional, un museo en Madrid.',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Museo de Cera',
            'description' => 'Visita el Museo de Cera de Madrid, un museo en Madrid.',
            'duration' => 3,
            'location_id' => 4 
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita a la Sagrada Familia',
            'description' => 'Explora la famosa Sagrada Familia en Barcelona, obra maestra de Antoni Gaudí. Descubre la arquitectura única y la historia detrás de esta icónica basílica.',
            'duration' => 2,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque Güell',
            'description' => 'Pasea por el Parque Güell, otro proyecto magistral de Gaudí en Barcelona. Disfruta de la arquitectura modernista, los mosaicos coloridos y las vistas panorámicas de la ciudad.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Paseo por Las Ramblas',
            'description' => 'Sumérgete en la vibrante vida urbana de Barcelona dando un paseo por Las Ramblas. Descubre tiendas, restaurantes, artistas callejeros y la energía única de esta famosa avenida.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio Gótico',
            'description' => 'Explora el Barrio Gótico de Barcelona, un barrio en el centro de la ciudad. Descubre la historia de la ciudad y disfruta de la arquitectura medieval.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio del Born',
            'description' => 'Explora el Barrio del Born de Barcelona, un barrio en el centro de la ciudad. Descubre la historia de la ciudad y disfruta de la arquitectura medieval.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio de Gracia',
            'description' => 'Explora el Barrio de Gracia de Barcelona, un barrio en el centro de la ciudad. Descubre la historia de la ciudad y disfruta de la arquitectura medieval.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Tour por el Barrio de Sants',
            'description' => 'Explora el Barrio de Sants de Barcelona, un barrio en el centro de la ciudad. Descubre la historia de la ciudad y disfruta de la arquitectura medieval.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita al Camp Nou',
            'description' => 'Visita el Camp Nou, el estadio del FC Barcelona.',
            'duration' => 3,
            'location_id' => 5
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta por los Picos de Europa',
            'description' => 'Embárcate en una emocionante ruta por los Picos de Europa en Asturias. Descubre impresionantes paisajes montañosos y disfruta de la naturaleza en su máxima expresión.',
            'duration' => 4,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta Gastronómica por Oviedo',
            'description' => 'Embárcate en una ruta gastronómica por las calles de Oviedo, la capital de Asturias. Descubre los sabores de la cocina asturiana, probando platos tradicionales como la sidra y el cabrales.',
            'duration' => 3,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita a la Catedral de Oviedo',
            'description' => 'Explora la histórica Catedral de Oviedo, un impresionante monumento de estilo gótico que alberga numerosos tesoros artísticos y religiosos.',
            'duration' => 2,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Recorrido por los Lagos de Covadonga',
            'description' => 'Realiza un recorrido por los Lagos de Covadonga, un paraje natural de gran belleza en los Picos de Europa. Disfruta de la naturaleza y las vistas panorámicas.',
            'duration' => 4,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Cata de Sidra en una Sidrería Tradicional',
            'description' => 'Sumérgete en la cultura sidrera de Asturias con una cata de sidra en una sidrería tradicional. Aprende sobre la elaboración de la sidra y degusta diferentes variedades.',
            'duration' => 2,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Cocina Asturiana',
            'description' => 'Explora la rica tradición gastronómica de Asturias con una experiencia culinaria. Degusta platos típicos como la fabada asturiana y la sidra local.',
            'duration' => 2,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Playa de Gulpiyuri',
            'description' => 'Relájate en la playa de Gulpiyuri, una joya natural escondida en Asturias. Disfruta de aguas cristalinas y un entorno sereno.',
            'duration' => 3,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Playa de Torimbia',
            'description' => 'Relájate en la playa de Torimbia, una playa en Asturias. Disfruta de aguas cristalinas y un entorno sereno.',
            'duration' => 3,
            'location_id' => 6
        ]);

        DB::table('activities')->insert([
            'name' => 'Alhambra',
            'description' => 'Visita la majestuosa Alhambra, un complejo palaciego y fortaleza en Granada. Explora los hermosos jardines, patios y salones con influencias islámicas.',
            'duration' => 4,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Catedral de Granada',
            'description' => 'Descubre la Catedral de Granada, una obra maestra arquitectónica que combina estilos gótico y renacentista. Explora la Capilla Real y disfruta de las vistas desde la torre.',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Barrio del Albaicín',
            'description' => 'Pasea por las estrechas calles empedradas del Albaicín, el antiguo barrio árabe de Granada. Disfruta de la arquitectura morisca, las tiendas artesanales y las vistas a la Alhambra.',
            'duration' => 3,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Mirador de San Nicolás',
            'description' => 'Contempla las impresionantes vistas de la Alhambra desde el Mirador de San Nicolás en el Albaicín. Un lugar icónico para disfrutar de la puesta de sol sobre Granada.',
            'duration' => 1,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Baños Árabes El Bañuelo',
            'description' => 'Sumérgete en la historia en los Baños Árabes El Bañuelo, antiguos baños públicos islámicos en el Albaicín. Admira la arquitectura y aprende sobre las costumbres de la época.',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Flamenco en Sacromonte',
            'description' => 'Vive la experiencia del flamenco en el barrio de Sacromonte, conocido por sus cuevas donde se celebran espectáculos flamencos. Disfruta del cante, el baile y la guitarra en un entorno único.',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Monasterio de San Jerónimo',
            'description' => 'Explora el Monasterio de San Jerónimo, un impresionante edificio renacentista en Granada. Descubre la arquitectura, el claustro y la historia religiosa del lugar.',
            'duration' => 2,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque de las Ciencias',
            'description' => 'Visita el Parque de las Ciencias, un museo interactivo y centro cultural en Granada. Disfruta de exhibiciones científicas, planetario y actividades educativas.',
            'duration' => 3,
            'location_id' => 7
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita al Museo Picasso',
            'description' => 'Explora la obra del famoso pintor Pablo Picasso en el Museo Picasso de Málaga. Descubre una colección única de sus obras y su impacto en el arte moderno.',
            'duration' => 2,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Paseo por el Casco Antiguo',
            'description' => 'Disfruta de un pintoresco paseo por el casco antiguo de Málaga. Explora estrechas calles, descubre plazas encantadoras y sumérgete en la atmósfera histórica.',
            'duration' => 3,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Alcazaba y Teatro Romano',
            'description' => 'Visita la Alcazaba de Málaga, una fortaleza árabe con impresionantes vistas a la ciudad. Descubre también el Teatro Romano, un vestigio histórico.',
            'duration' => 4,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Día de Playa en La Malagueta',
            'description' => 'Relájate en la playa de La Malagueta y disfruta del sol y del mar. Experimenta la vida playera y prueba la deliciosa gastronomía local en los chiringuitos.',
            'duration' => 1,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Caminito del Rey',
            'description' => 'Aventúrate en el impresionante Caminito del Rey, un camino de pasarelas suspendidas en las gargantas del Desfiladero de los Gaitanes.',
            'duration' => 5,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Museo Carmen Thyssen',
            'description' => 'Descubre la colección de arte español del Museo Carmen Thyssen en Málaga. Explora pinturas y esculturas que abarcan desde el siglo XIII hasta el siglo XX.',
            'duration' => 2,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Gibralfaro y Mirador de Málaga',
            'description' => 'Sube al Castillo de Gibralfaro y disfruta de vistas panorámicas de Málaga. Un lugar ideal para capturar la belleza de la ciudad desde las alturas.',
            'duration' => 3,
            'location_id' => 8
        ]);

        DB::table('activities')->insert([
            'name' => 'Museo Guggenheim Bilbao',
            'description' => 'Explora el icónico Museo Guggenheim Bilbao, una obra maestra de la arquitectura contemporánea diseñada por Frank Gehry. Descubre una impresionante colección de arte moderno y contemporáneo.',
            'duration' => 3,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Casco Viejo',
            'description' => 'Sumérgete en la historia y la cultura de Bilbao explorando el Casco Viejo. Descubre sus estrechas calles, plazas animadas y disfruta de la gastronomía vasca en los pintxos.',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Puente Zubizuri',
            'description' => 'Pasea por el Puente Zubizuri, un puente peatonal diseñado por Santiago Calatrava. Disfruta de las vistas del río Nervión y la arquitectura moderna del puente.',
            'duration' => 1,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Museo de Bellas Artes de Bilbao',
            'description' => 'Visita el Museo de Bellas Artes de Bilbao, que alberga una rica colección de pinturas, esculturas y arte decorativo desde el siglo XIII hasta la actualidad.',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Funicular de Artxanda',
            'description' => 'Sube al Funicular de Artxanda para disfrutar de vistas panorámicas de Bilbao desde la colina de Artxanda. Un lugar ideal para contemplar la ciudad y sus alrededores.',
            'duration' => 1,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Palacio Euskalduna',
            'description' => 'Descubre el Palacio Euskalduna, un moderno centro de conferencias y artes escénicas en Bilbao. Explora su arquitectura contemporánea y, si es posible, asiste a un evento cultural.',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque de Doña Casilda',
            'description' => 'Relájate en el Parque de Doña Casilda, un hermoso parque en el corazón de Bilbao. Disfruta de la naturaleza, los jardines y la tranquilidad del entorno.',
            'duration' => 1,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Azkuna Zentroa',
            'description' => 'Visita Azkuna Zentroa, un espacio cultural y de ocio ubicado en un antiguo almacén de vinos. Descubre exposiciones, eventos y disfruta de la arquitectura del lugar.',
            'duration' => 2,
            'location_id' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Esquí en Baqueira Beret',
            'description' => 'Disfruta de la experiencia de esquí en la estación de Baqueira Beret, una de las más prestigiosas de los Pirineos. Descubre pistas emocionantes y hermosos paisajes invernales.',
            'duration' => 4,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Rutas de Senderismo en Aigüestortes',
            'description' => 'Explora las impresionantes rutas de senderismo en el Parque Nacional de Aigüestortes y Estany de Sant Maurici. Descubre lagos, bosques y montañas en un entorno natural único.',
            'duration' => 3,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Visita a Vielha',
            'description' => 'Pasea por las encantadoras calles de Vielha, la capital del Valle de Arán. Descubre la arquitectura tradicional, tiendas locales y disfruta de la gastronomía regional.',
            'duration' => 2,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Parque Nacional de Aigüestortes',
            'description' => 'Adéntrate en el Parque Nacional de Aigüestortes y Estany de Sant Maurici. Observa la diversidad de flora y fauna, así como impresionantes formaciones geológicas.',
            'duration' => 4,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Ruta en BTT por el Valle',
            'description' => 'Experimenta la emoción del ciclismo de montaña con una ruta en BTT por los senderos del Valle de Arán. Disfruta de paisajes alpinos y desafiantes descensos.',
            'duration' => 3,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Termas de Les',
            'description' => 'Relájate en las Termas de Les, aguas termales situadas en un entorno natural. Disfruta de la tranquilidad y los beneficios para la salud de estas aguas termales.',
            'duration' => 2,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Montgarri y la Ruta de las Iglesias',
            'description' => 'Descubre el encanto histórico de Montgarri y sigue la Ruta de las Iglesias, que te llevará a iglesias románicas enclavadas en paisajes de montaña.',
            'duration' => 3,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Pesca en los Ríos Aranés',
            'description' => 'Disfruta de la pesca en los ríos araneses, famosos por su rica variedad de truchas. Experimenta la pesca deportiva en un entorno natural y relajante.',
            'duration' => 1,
            'location_id' => 10
        ]);

        DB::table('activities')->insert([
            'name' => 'Mezquita-Catedral de Córdoba',
            'description' => 'Visita la impresionante Mezquita-Catedral de Córdoba, un lugar de culto que combina elementos islámicos y cristianos. Explora los patios, la sala de oración y la catedral.',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Alcázar de los Reyes Cristianos',
            'description' => 'Explora el Alcázar de los Reyes Cristianos, un antiguo palacio fortificado con hermosos jardines y vistas al río Guadalquivir. Descubre la historia de este lugar emblemático.',
            'duration' => 3,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Barrio de la Judería',
            'description' => 'Pasea por el encantador Barrio de la Judería, con sus estrechas calles empedradas y casas encaladas. Descubre la historia y la cultura judía de Córdoba.',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Puente Romano',
            'description' => 'Cruza el Puente Romano sobre el río Guadalquivir. Disfruta de las vistas de la ciudad y descubre la estructura romana que ha perdurado a lo largo de los siglos.',
            'duration' => 1,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Patios de Córdoba',
            'description' => 'Explora los famosos Patios de Córdoba, especialmente impresionantes durante el Festival de los Patios en mayo. Admira la arquitectura y la belleza de estos patios floridos.',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Baños Califales',
            'description' => 'Sumérgete en la historia en los Baños Califales, antiguos baños árabes en Córdoba. Descubre la arquitectura y las tradiciones de la época.',
            'duration' => 1,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Flamenco en Tablao',
            'description' => 'Vive la auténtica experiencia flamenca en un tablao de Córdoba. Disfruta del cante, el baile y la guitarra en un ambiente íntimo y apasionado.',
            'duration' => 2,
            'location_id' => 11
        ]);

        DB::table('activities')->insert([
            'name' => 'Palacio de Viana',
            'description' => 'Visita el Palacio de Viana, un hermoso palacio renacentista con doce patios diferentes. Explora los jardines y descubre la riqueza arquitectónica de este lugar.',
            'duration' => 2,
            'location_id' => 11
        ]);

    }
}
