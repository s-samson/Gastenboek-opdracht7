<?php


function getBericht():array
{
global $pdo,$params;
$sth=$pdo->prepare('select * FROM berichten order by datumtijd Desc');
$sth ->execute();
return $sth->fetchAll(PDO::FETCH_CLASS, 'gastenboek');

}

function saveBericht($naam, $bericht, $datumtijd):void
{
    global $pdo;
    {
        $sth = $pdo->prepare('insert into berichten(naam,bericht,datumtijd) VALUES (?,NOW(),?,?)');
        $sth->bindParam(1, $naam);
        $sth->bindParam(2, $bericht);
        $sth->bindParam(3, $datumtijd);
        $sth->execute();
    }
}
