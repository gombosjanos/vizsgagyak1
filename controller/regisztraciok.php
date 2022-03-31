 <?php
    if(isset($_POST["kuld"])){
        $success=array();
        $danger=array();
        $warning=array();
        $valami=true;


        if(empty($_POST['name'])){
            echo 'Kérem adja meg a nevét!';
            $valami=false;

        }
        if(empty($_POST['email'])){
            echo 'Kérem adja meg az email címét!';
            $valami=false;

        }
        if(empty($_POST['bdate'])){
            echo 'Kérem adja meg a születési idejét!';
            $valami=false;

        }
        if(empty($_POST['sex'])){
            echo 'Kérem adja meg a nemét!';
            $valami=false;

        }
        if(isset($_POST['bdate'])){
            $dateNOW =time();
            $date1=strtotime($_POST['bdate']);
            $diff=($dateNOW-$date1);
            $asd= $diff /(60 *60 *24);
            if($asd > 1) {
                $valami=true;

            }else{
                $valami=false;
                echo 'A regisztrációhoz legalább 14 évesnek kell lenni!';

            }
        }

        if($valami){
            $nev=mysqli_real_escape_string($conn, $_POST['name']);
            $szulnap=mysqli_real_escape_string($conn, $_POST['bdate']);
            $email=mysqli_real_escape_string($conn, $_POST['email']);
            $nem=mysqli_real_escape_string($conn, $_POST['sex']);

            $sql="INSERT INTO jelentkezes(nev, email, szulnap, nem) VALUES ('$nev','$email','$szulnap','$nem')";
            if ($conn->query($sql)) {
               header('Location: index.php?successfulreg=true&uzenet=Sikeres regisztráció!');
            } else {
                header('Location: index.php?successfulreg=true&uzenet=Ezzel a TAJ számmal már van regisztráció!');
            }
        }




    }

    include 'view/index.php';

?>