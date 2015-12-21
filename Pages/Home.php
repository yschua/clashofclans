<?php 

    // First we execute our common code to connection to the database and start the session 
    require($_SERVER['DOCUMENT_ROOT']."/clashofclans/database.php"); 

    $query = " 
        SELECT 
            tag, 
            name, 
            type,
            description,
            locationName,
            clanBadgeImg_s,
            clanBadgeImg_xl,
            warFrequency,
            clanLevel,
            warWins,
            warLosses,
            warTies,
            clanPoints,
            requiredTrophies,
            members 
        FROM clan_details 
    "; 
     
    try 
    { 
        // These two statements run the query against your database table. 
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) 
    { 
        // Note: On a production website, you should not output $ex->getMessage(). 
        // It may provide an attacker with helpful information about your code.  
        die("Failed to run query: " . $ex->getMessage()); 
    } 
         
    // Finally, we can retrieve all of the found rows into an array using fetchAll 
    $row = $stmt->fetchAll(); 
?> 

<!-- <div>
    <h1 class="page-header">Home</h1>
</div> -->

<div class="outer-clan-details-container enter-effect">
    <div class="black-overlay">
    	<div class="clan-details-container">
    		<div class="clan-badge">
                <?php echo '<img src="'.$row[0]['clanBadgeImg_xl'].'" width="122" height="122" />'; ?>
                <span class="clan-level"><?php echo $row[0]['clanLevel']; ?></span>
            </div>
    		<div class="clan-name"><?php echo $row[0]['name']; ?></div>
    		<div class="clan-description"><?php echo $row[0]['description']; ?></div>
    		<div class="clan-tag"><?php echo $row[0]['tag']; ?></div>
            <div class="clan-details-wrapper">
                <div class="clan-total-points"><?php echo '<img class="clan-details-trophy-image" src="https://clashofclans.com/img/shared/trophy.png" width="45" height="47" />'; echo $row[0]['clanPoints']; ?></div>
                <div class="clan-war-wins">
                    <?php
                        echo '<img class="clan-details-wars-image" src="https://clashofclans.com/img/shared/wars.png" width="53" height="47" />';
                        echo $row[0]['warWins'].'/';
                        echo $row[0]['warLosses'].'/';
                        echo $row[0]['warTies'];
                    ?>
                </div>
                <div class="clan-members-frequency">
                    Members: 
                    <span class="clan-supercell">
                        <?php echo $row[0]['members']; ?>
                    </span>
                    <br>
                    War Frequency: 
                    <span class="clan-supercell">
                        <?php echo ucfirst($row[0]['warFrequency']); ?>
                    </span>
                </div>
                <div class="clan-type-required">
                    Type: 
                    <span class="clan-supercell">
                        <?php echo ucfirst($row[0]['type']); ?>
                    </span>
                    <br>
                    Required Trophies: 
                    <span class="clan-supercell">
                        <?php echo $row[0]['requiredTrophies']; ?>
                    </span>
                </div>
            </div>
            <div class="clan-tag">&lt;&lt; To get started, click on the sidebar</div>
    	</div>
    </div>
</div>