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
    $title = 'Hovercraft';

    $imageDemoName = '\items\hovercraft_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The hovercraft is a land vehicle which needs no fuel or other raw materials to transport the player.</p><p>Controls: <br>WASD to steer<br>Z to ascend<br>X to descend</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = '\items\hovercraft.png';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php
');
?> 
