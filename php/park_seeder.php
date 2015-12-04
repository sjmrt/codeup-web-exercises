<?php
require 'park_config.php';
require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$delete = "TRUNCATE national_parks;";

$dbc->exec($delete);

$parks = [
    ['name'            => 'Big Bend',            
    'url'              => 'https://github.com/bbatsche', 
    'location'         => 'Texas',          
    'date_established' => '1944-06-12', 
    'area_in_acres'    => 801163.21, 
    'description'      => 'Named for the prominent bend in the Rio Grande along the US Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],
    
    ['name'            => 'Guadalupe Mountains', 
    'url'              => 'https://en.wikipedia.org/wiki/Guadalupe_Mountains_National_Park', 
    'location'         => 'Texas',          
    'date_established' => '1966-10-15', 
    'area_in_acres'    => 86415.97, 
    'description'      => 'This park boasts Guadalupe Peak, the highest point in Texas; the scenic McKittrick Canyon filled with bigtooth maples; a corner of the arid Chihuahuan Desert; and a fossilized coral reef from the Permian era.'],
    
    ['name'            => 'Zion',                
    'url'              => 'https://en.wikipedia.org/wiki/Zion_National_Park', 
    'location'         => 'Utah',           
    'date_established' => '1919-11-19', 
    'area_in_acres'    => 146597.6, 
    'description'      => 'Located at the junction of the Colorado Plateau, Great Basin, and Mojave Desert, this geological wonder has colorful sandstone canyons, mountainous mesas, and countless rock towers. Natural arches and exposed plateau formations compose a large wilderness roughly divided into four ecosystems: desert, riparian, woodland, and coniferous forest.'],
    
    ['name'            => 'Wind Cave',           
    'url'              => 'https://en.wikipedia.org/wiki/Wind_Cave_National_Park', 
    'location'         => 'South Dakota',   
    'date_established' => '1903-01-09', 
    'area_in_acres'    => 28295.03, 
    'description'      => 'Wind Cave is distinctive for its calcite fin formations called boxwork and needle-like growths called frostwork. The cave, which was discovered by a sound like that of wind coming from a hole in the ground, is the world\'s densest cave system. Above ground is a mixed-grass prairie with animals such as bison, black-footed ferrets, and prairie dogs.[63] and ponderosa pine forests home to cougars and elk'],
    
    ['name'            => 'Voyageurs',           
    'url'              => 'https://en.wikipedia.org/wiki/Voyageurs_National_Park', 
    'location'         => 'Minnesota',      
    'date_established' => '1971-01-08', 
    'area_in_acres'    => 218200.17, 
    'description'      => 'This park protecting four lakes near the Canadian border is a site for canoeing, kayaking, and fishing, and preserves a history populated by Ojibwe Native Americans, French fur traders called voyageurs, and ambitious gold-miners. Formed by glaciers, the region features tall bluffs, rock gardens, scenic islands and bays, and several historic buildings.'],
    
    ['name'            => 'Virgin Islands',      
    'url'              => 'https://en.wikipedia.org/wiki/Virgin_Islands_National_Park', 
    'location'         => 'Virgin Islands', 
    'date_established' => '1956-08-02', 
    'area_in_acres'    => 14688.87, 
    'description'      => 'The island of Saint John has rich human and natural histories. Taino archaeological sites and ruins of sugar plantations from Columbus\' time litter the coast. Past the pristine beaches are mangrove forests, seagrass beds, coral reefs, and vast algal plains.'],
    
    ['name'            => 'Shenandoah',          
    'url'              => 'https://en.wikipedia.org/wiki/Shenandoah_National_Park', 
    'location'         => 'Virginia',       
    'date_established' => '1926-05-22', 
    'area_in_acres'    => 199045.23, 
    'description'      => 'Shenandoah\'s Blue Ridge Mountains are covered by sprawling hardwood forests that teem with tens of thousands of animals. The Skyline Drive and Appalachian Trail run the entire length of this narrow park, along with more than 500 miles (800 km) of hiking trails passing scenic overlooks and cataracts of the Shenandoah River.'],
    
    ['name'            => 'Sequoia',             
    'url'              => 'https://en.wikipedia.org/wiki/Sequoia_National_Park', 
    'location'         => 'California',     
    'date_established' => '1890-09-25', 
    'area_in_acres'    => 404051.17, 
    'description'      => 'This park protects the Giant Forest, which boasts some of the world\'s largest trees, the General Sherman being the largest in the park. It also has over 240 caves, a scenic segment of the Sierra Nevada including the tallest mountain in the contiguous United States, and Moro Rock, a photogenic granite dome.'],
    
    ['name'            => 'Olympic',             
    'url'              => 'https://en.wikipedia.org/wiki/Olympic_National_Park', 
    'location'         => 'Washington',     
    'date_established' => '1938-06-29', 
    'area_in_acres'    => 922650.86, 
    'description'      => 'Situated on the Olympic Peninsula, this park straddles a diversity of ecosystems from Pacific shoreline to temperate rainforests to the alpine slopes of Mount Olympus. The scenic Olympic Mountains overlook the Hoh Rain Forest and Quinault Rain Forest, the wettest area in the continental United States.'],
    
    ['name'            => 'Katmai',              
    'url'              => 'https://en.wikipedia.org/wiki/Katmai_National_Park_and_Preserve', 
    'location'         => 'Alaska',         
    'date_established' => '1980-12-02', 
    'area_in_acres'    => 3674529.68, 
    'description'      => 'Initially designated because of its violent volcanic history, the monument and surrounding lands became appreciated for their abundance of sockeye salmon, the grizzly bears that fed upon them, and a wide variety of other Alaskan wildlife and marine life.']
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, url, location, date_established, area_in_acres, description) VALUES (:name, :url, :location, :date_established, :area_in_acres, :description)');

foreach($parks as $park){
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':url', $park['url'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_INT);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
	$stmt->execute();
}