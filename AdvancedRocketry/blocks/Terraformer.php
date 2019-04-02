<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference. 

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time. 

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:
            
            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png
        
        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.
    
    */    
    
    //NAME OF BLOCK
    $title = '';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>YOUR TEXT HERE</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = '';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
<?php
    $title = 'Terraformer';
    
    $mainContent = '<h1 title="2Greggy4me">'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <img align="left" src="../img/terraformer_demo.jpg" />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;The terraformer can increase and decrease the atmosphere pressure on an entire planet planet by using connected <a href="../items/biomeChanger.php">Biome changing remote</a>.</p>
    <p>The Terraformer requires 40 mb/t of nitrogen and oxygen and 1000RF/t for the duration of the terraforming process.</p>
    <p>The Terraformer takes about an 15 minutes (configurable) to raise/lower the atmosphere by 0.01%</p>
    <br>
    <p>Each 0.01% increase/decrease in atmosphere requires 720 buckets of Oxygen and Nitrogen as well as 18 Million RF</p>
    <p>Once the atmosphere on a planet reaches a critical point (0.25atm, 0.75atm, 1.25atm) the planet\'s biomes will be modified to reflect the change.</p>
    <p>Chunks that have not been loaded will appear to have been generated with the new biomes, chunks that have alredy been loaded will slowly change to the new biome set.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/electrolyser_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<br />Nitrogen: 40 mb/s<br />Oxygen: 40 mb/s<br />Energy: 1000RF/t';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
