<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: ../../crud");
    exit; 
}
?>

<style>
    header {
    background: linear-gradient(to right, #FF416C, #FF4B2B);
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-family: Arial, sans-serif;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}



.wrapper {
    background: linear-gradient(to right, #FF416C, #FF4B2B);
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    h1 {
    font-size: 36px;
    margin: 0;
}
}

.logout-btn {
    background-color: #fff;
    color: #FF416C;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
}

.logout-btn:hover {
    background-color: #FF416C;
    color: #fff;
    box-shadow: 0 0 15px 10px rgba(255, 255, 255, 1);
}

</style>

<script>
window.addEventListener("beforeunload", function (event) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "code/auth/logout.php", true);
    xhr.send();
});
</script>

<header>
    <div class="wrapper">
        <div class="container">
            <h1>Stefanie's Wish</h1>
        </div>
        <button class="logout-btn" onclick="window.location.href ='/pets-fancy/login' ">Logout</button>
    </div>
</header>