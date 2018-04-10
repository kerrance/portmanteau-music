<?php include 'header.php'; ?>

			<div id="row_intro">
            <a name="about"></a>
                <div class="alignleft">
                <img src="img/Content_About.png" />
                </div>
                <div class="seperator" style="width: 557px;">
                </div>
            </div>
            
            <div id="row_text">
            	<? include('about.php'); ?>
            </div>
            
            <div id="row_intro">
            <a name="recent"></a>
            	<div class="alignleft">
                <img src="img/Content_RecentPlacements.png" />
                </div>
                <div class="seperator" style="width: 430px;">
                </div>
            </div>
            
            <div id="row">
            	<? include('portfolio/Wide_LenovoYoga.php'); ?> 
            </div>
            
            <div id="row"> 
                <? include('portfolio/TheCanyons.php'); ?> 
                <? include('portfolio/TheFollowing.php'); ?>  
                <? include('portfolio/RoyalPains.php'); ?>          	  
        	</div>

			<div id="row">
				<? include('portfolio/BattleoftheExes.php'); ?>
				<? include('portfolio/StarWars.php'); ?>         	
				<? include('portfolio/IronLady.php'); ?> 
        	</div>
            
            <div id="row">
                <? include('portfolio/TheSacred.php'); ?>
            	<? include('portfolio/DiRT3.php'); ?>
				<? include('portfolio/FastFive.php'); ?>
        	</div>
            
            <div id="row">
                <? include('portfolio/TheChallengeRivals.php'); ?> 
                <? include('portfolio/TestDriveUnlimited2.php'); ?>
                <? include('portfolio/TrueBlood.php'); ?>
            </div>
            
            <div id="row">
            	<? include('portfolio/OneTreeHill.php'); ?>
            </div>

<?php include 'footer.php'; ?>