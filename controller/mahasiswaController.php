<?php 
    require_once "../API/model.php";
    class mahasiswaController{
        function deleteMahasiswa($nim)
        {
            model::callAPI("DELETE", "http://localhost:8080/".$nim, false);
            header("Location:../view/index.php");
        }
    }
?>