<?php
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
} else {
  $lang = 'es';
}

if ($lang === 'en') {
  define('TRANSLATIONS', array(
    'main_title' => 'Architect Rodolfo López Rey',
    'desc' => 'Life and work of Architect Rodolfo López Rey.',
    'biography' => 'Biography',
    'bio_pic_alt' => 'Portait of Ar. Rodolfo López Rey',
    'projects' => 'Projects',
    'copyright' => '(c) ' . date('Y') . ' All rights reserved.',
    'tooltip_photo' => 'Click to enlarge',
    'personal_header' => 'Personal Photos',
    'link_biography' => 'Biography',
    'link_personal' => 'Personal Photos',
    'link_projects' => 'Projects',
    'link_language' => 'Versión español',
    'href_language' => '?lang=es',
    'bio' => '_bio-en.php',
    'previous' => 'anterior',
    'next' => 'siguiente',
    'close' => 'cerrar',
    'enlarge' => 'Enlarge',
    'reduce' => 'Reduce',
    'letters' => 'Letters',
    'letter_from' => 'Letter from',
    'photo' => 'Photo',
  ));
} else {
  define('TRANSLATIONS', array(
    'main_title' => 'Arquitecto Rodolfo López Rey',
    'desc' => 'Vida y obra del Arquitecto Rodolfo López Rey.',
    'biography' => 'Biografía',
    'bio_pic_alt' => 'Retrato del Arq. Rodolfo López Rey',
    'projects' => 'Obras',
    'personal_header' => 'Fotos personales',
    'copyright' => '(c) ' . date('Y') . ' Todos los derechos reservados.',
    'tooltip_photo' => 'Click para agrandar',
    'link_biography' => 'Biografía',
    'link_personal' => 'Fotos Personales',
    'link_projects' => 'Obras',
    'link_language' => 'English version',
    'href_language' => '?lang=en',
    'bio' => '_bio-es.php',
    'previous' => 'anterior',
    'next' => 'siguiente',
    'close' => 'cerrar',
    'enlarge' => 'Agrandar',
    'reduce' => 'Achicar',
    'letters' => 'Cartas',
    'letter_from' => 'Carta del',
    'photo' => 'Foto',
  ));
}

$projects = array(
  'Edificio_Centenario' => array(
    'name' => 'Edificio Centenario',
    'location' => 'Montevideo',
    'imgCount' => 4,
  ),
  'Puerto' => array(
    'name' => 'Edificio Puerto',
    'location' => 'Punta del Este',
    'imgCount' => 7,
  ),
  'Corrientes' => array(
    'name' => 'Edificio Corrientes',
    'location' => 'Montevideo',
    'imgCount' => 5,
  ),
  'Residencia_Pepe_Suarez' => array(
    'name' => 'Residencia Pepe Suárez',
    'location' => 'Punta del Este',
    'imgCount' => 9,
  ),
  'Socaire' => array(
    'name' => 'Residencia Socaire',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Taller_Scalone' => array(
    'name' => 'Taller Scalone',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Rcia_Son_Pura' => array(
    'name' => 'Residencia Son Pura',
    'location' => 'Punta del Este',
    'imgCount' => 6,
  ),
  'Residencia_Lopez_Rey' => array(
    'name' => 'Residencia López Rey &ldquo;Ahel&rdquo;',
    'location' => 'Punta del Este',
    'imgCount' => 17,
  ),
  'Finisterre' => array(
    'name' => 'Edificio Finisterre',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Rcia_Poyo_Roc' => array(
    'name' => 'Residencia Poyo Roc',
    'location' => 'Punta del Este',
    'imgCount' => 6,
  ),
  'Continental' => array(
    'name' => 'Edificio Continental',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Fantasias_Italianas' => array(
    'name' => 'Fantasías Italianas',
    'location' => 'Milán',
    'imgCount' => 9,
  ),
  'San_Michelle' => array(
    'name' => 'Edificio San Michelle',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'Tres_Marias' => array(
    'name' => 'Residencia Las Tres Marías',
    'location' => 'Punta del Este',
    'imgCount' => 4,
  ),
  'El_Fortin' => array(
    'name' => 'Edificio El Fortín',
    'location' => 'Punta del Este',
    'imgCount' => 4,
  ),
  'La_Caldera' => array(
    'name' => 'Residencia La Caldera',
    'location' => 'Punta del Este',
    'imgCount' => 15,
  ),
  'Alianza_Francesa' => array(
    'name' => 'Edificio de la Alliance Francaise',
    'location' => 'Montevideo',
    'imgCount' => 5,
  ),
  'Berna' => array(
    'name' => 'Edificio Berna',
    'location' => 'Montevideo',
    'imgCount' => 4,
  ),
  'Casa_El_Monarca' => array(
    'name' => 'Residencia El Monarca',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Paz_Marina' => array(
    'name' => 'Edificio Paz Marina',
    'location' => 'Punta del Este',
    'imgCount' => 5,
  ),
  'Yacht' => array(
    'name' => 'Edificio Yacht',
    'location' => 'Punta del Este',
    'imgCount' => 4,
  ),
  'El_Remanso' => array(
    'name' => 'Edificio El Remanso',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Coop_Vivienda' => array(
    'name' => 'Cooperativa de viviendas',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Residencia_Saulieu' => array(
    'name' => 'Residencia Saulieu',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Ampliacion_Banco_Holandes_Unido' => array(
    'name' => 'Ampliación del Banco Holandés Unido',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'Residencia_Goldfarb' => array(
    'name' => 'Residencia Goldfarb',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Rcia_Taranto' => array(
    'name' => 'Residencia Taranto',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Hogar_Espanol' => array(
    'name' => 'Hogar Español de Ancianos',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Residencia_Lecueder' => array(
    'name' => 'Residencia Lecueder',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Virazon' => array(
    'name' => 'Edificio Virazón',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Arrecifes' => array(
    'name' => 'Edificio Arrecifes',
    'location' => 'Punta del Este',
    'imgCount' => 4,
  ),
  'Vendaval' => array(
    'name' => 'Edificio Vendaval',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Costa_Azul' => array(
    'name' => 'Edificio Costa Azul',
    'location' => 'Punta del Este',
    'imgCount' => 4,
  ),
  'Varadero' => array(
    'name' => 'Edificio Varadero',
    'location' => 'Punta del Este',
    'imgCount' => 5,
  ),
  'Lobos' => array(
    'name' => 'Edificio Lobos',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Malecon_I_II_III' => array(
    'name' => 'Edificios Malecón I, II y III',
    'location' => 'Punta del Este',
    'imgCount' => 6,
  ),
  'Malecon_IV' => array(
    'name' => 'Edificio Malecón IV',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'La_Caleta' => array(
    'name' => 'Edificio La Caleta',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Recalada' => array(
    'name' => 'Recalada',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'El_Monarca' => array(
    'name' => 'Edificio El Monarca',
    'location' => 'Punta del Este',
    'imgCount' => 6,
  ),
  'Torres_Plata' => array(
    'name' => 'Conjunto Torres del Plata, Torre I, Torre II, Torre III',
    'location' => 'Punta del Este',
    'imgCount' => 6,
  ),
  'Puerto_del_Sol' => array(
    'name' => 'Puerto del Sol - Edificios  Galeón,  Goleta, y Fragata',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Galeon' => array(
    'name' => 'Puerto del Sol - Edificio Galeón',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Goleta' => array(
    'name' => 'Puerto del Sol - Edificio Goleta',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Fragata' => array(
    'name' => 'Puerto del Sol - Edificio Fragata',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Torre_Gattas' => array(
    'name' => 'Torre Gattas',
    'location' => 'Punta del Este',
    'imgCount' => 3,
  ),
  'Del_Puerto' => array(
    'name' => 'Edificio Del Puerto',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'MEC' => array(
    'name' => 'Ministerio de Cultura',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Terrazas_Carrasco' => array(
    'name' => 'Edificio Terrazas de Carrasco',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'Presidente' => array(
    'name' => 'Edificio Presidente',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Regidor' => array(
    'name' => 'Edificio de oficinas Regidor',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Mdeo_Shopping' => array(
    'name' => 'Montevideo Shopping Center',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Agencia_Banco_Holandes_Unido' => array(
    'name' => 'Agencia del Banco Holandés Unido',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'Agencia_Banco_Holandes_Bvar' => array(
    'name' => 'Agencia del Banco Holandés',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Del_Barco' => array(
    'name' => 'Edificio del Barco',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'Agencia_Banco_Holandes_Pblo_Maria' => array(
    'name' => 'Agencia del Banco Holandés',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Avda_Callao_Arenales' => array(
    'name' => 'Avda. Callao y Arenales',
    'location' => 'Buenos Aires',
    'imgCount' => 5,
  ),
  'Muebleria_Caviglia' => array(
    'name' => 'Reciclaje del Edificio de la antigua Mueblería Caviglia',
    'location' => 'Montevideo',
    'imgCount' => 15,
  ),
  'Primer_Premio_Concurso_Propuestas_Innovacion' => array(
    'name' => 'Primer Premio del concurso para la mejor idea de Propuestas para Innovación',
    'location' => 'Montevideo',
    'imgCount' => 6,
  ),
  'Propuesta_Similar_Cnia_Gas' => array(
    'name' => 'Propuesta similar que finalmente se presenta para el predio de la Carbonera de la Compañía del Gas',
    'location' => 'Montevideo',
    'imgCount' => 5,
  ),
  'Rcia_Scasso' => array(
    'name' => 'Residencia en la Calle Scasso',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'La_Villete' => array(
    'name' => 'Edificio La Villette',
    'location' => 'Montevideo',
    'imgCount' => 3,
  ),
  'Ocean_Drive' => array(
    'name' => 'Edificio Ocean Drive',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Palmas_del_Golf' => array(
    'name' => 'Edificio Palmas del Golf',
    'location' => 'Montevideo',
    'imgCount' => 6,
  ),
  'Punta_Brava' => array(
    'name' => 'Edificio Faro de Punta Brava',
    'location' => 'Montevideo',
    'imgCount' => 4,
  ),
  'Antep_Concurso_Edif_Notarial' => array(
    'name' => 'Concurso Edificio Caja Notarial',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Antep_Concurso_BHU' => array(
    'name' => 'Concurso Banco Hipotecario',
    'location' => 'Montevideo',
    'imgCount' => 1,
  ),
  'Antep_Resid_Tiferes' => array(
    'name' => 'Residencia Tres Pantallas',
    'location' => 'Punta del Este',
    'imgCount' => 6,
  ),
  'Antep_Edif_El_Ombu' => array(
    'name' => 'Edificio El Ombú',
    'location' => 'Montevideo',
    'imgCount' => 5,
  ),
  'Antep_Edif_El_Emir' => array(
    'name' => 'Edificio El Emir',
    'location' => 'Punta del Este',
    'imgCount' => 1,
  ),
  'Antep_Resid_Punta_Del_Este' => array(
    'name' => 'Residencia Tres Pilares',
    'location' => 'Punta del Este',
    'imgCount' => 7,
  ),
  'Torre_Continua_Tiphaine' => array(
    'name' => 'Torre continua Tiphaine',
    'location' => 'Buenos Aires',
    'imgCount' => 2,
  ),
  'Complejo_Turistico_La_Paloma' => array(
    'name' => 'Complejo turístico en La Paloma',
    'location' => 'Rocha',
    'imgCount' => 3,
  ),
  'Concurso_Terminal_Buenos_Aires' => array(
    'name' => 'Concurso Terminal de Ómnibus de Buenos Aires',
    'location' => 'Buenos Aires',
    'imgCount' => 1,
  ),
  'Proy_Urban_Anteproyecto_Fermin_Ferreira' => array(
    'name' => 'Anteproyecto Fermín Ferreira',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
  'Proy_Urban_Proyecto_Lobos' => array(
    'name' => 'Proyecto Lobos',
    'location' => 'Punta del Este',
    'imgCount' => 2,
  ),
  'Proy_Urban_Vilazar_Del_Mar' => array(
    'name' => 'Ciudad Satélite Vilazar del Mar. Con Arq. Raúl Sichero Punta Yeguas',
    'location' => 'Montevideo',
    'imgCount' => 2,
  ),
);

$pictures = array(
  'Su padre',
  'Con su padre y su madre',
  'A los 6 años',
  'Despedida 1º año Taller Payseé',
  'Concurso Banco Hipotecario Estudio Arq. Muñoz del Campo',
  'Concurso Banco Hipotecario Estudio Arq. Muñoz del Campo',
  'Despedida de soltero',
  'Con su esposa Lea Verdesio',
  'Con su esposa Lea Verdesio',
  'En Milán con su esposa Lea y el pintor Vicente Martin',
  'En Milán',
  'En Punta del Este con Carmen Helena Pares, Arq. González Almeida, María Luisa Torrens, Vicente Martín y Lea Verdesio',
  'En su estudio de Regidor',
  'Con Arq. Alfredo Nebel',
  'En Buenos Aires con Vicente Martin y Arq. Barañano',
  'En Bs.As. con Vicente Martin y Federico Brill',
  'Con Arq. Raúl Sichero',
  'Con Arq. Miguel Amato y Arq. Raúl Sichero',
);
