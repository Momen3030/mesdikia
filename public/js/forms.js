function dispaly_form() {
    var products = document.getElementById("products").value;
    if(products == "cars"){
        document.getElementById('cars_d').style.display = "block";
        document.getElementById('vichles_d').style.display = "none";
        document.getElementById('jewl_d').style.display = "none";
        document.getElementById('builds_d').style.display = "none";
        document.getElementById('high_d').style.display = "none";

    }
    else  if(products == "vichles"){
        document.getElementById('cars_d').style.display = "none";
        document.getElementById('vichles_d').style.display = "block";
        document.getElementById('jewl_d').style.display = "none";
        document.getElementById('builds_d').style.display = "none";
        document.getElementById('high_d').style.display = "none";

    }
    else  if(products == "jewl"){
        document.getElementById('cars_d').style.display = "none";
        document.getElementById('vichles_d').style.display = "none";
        document.getElementById('jewl_d').style.display = "block";
        document.getElementById('builds_d').style.display = "none";
        document.getElementById('high_d').style.display = "none";

    }
    else  if(products == "build"){
        document.getElementById('cars_d').style.display = "none";
        document.getElementById('vichles_d').style.display = "none";
        document.getElementById('jewl_d').style.display = "none";
        document.getElementById('builds_d').style.display = "block";
        document.getElementById('high_d').style.display = "none";

    }
    else  if(products == "high"){
        document.getElementById('cars_d').style.display = "none";
        document.getElementById('vichles_d').style.display = "none";
        document.getElementById('jewl_d').style.display = "none";
        document.getElementById('builds_d').style.display = "none";
        document.getElementById('high_d').style.display = "block";

    }
    else{
        document.getElementById('cars_d').style.display = "none";
        document.getElementById('vichles_d').style.display = "none";
        document.getElementById('jewl_d').style.display = "none";
        document.getElementById('builds_d').style.display = "none";
        document.getElementById('high_d').style.display = "none";
    }
}
function dispaly_time_car() {
    var product_time_car = document.getElementById("mazad_fawery_car").value;
    if (product_time_car == "مزاد فورى"){
        document.getElementById('period_product_car').style.display = "flex";
    }
    else {
        document.getElementById('period_product_car').style.display = "none";
    }
}
function dispaly_time_jew() {
    var product_time_jew = document.getElementById("mazad_fawery_jew").value;
    if (product_time_jew == "مزاد فورى"){
        document.getElementById('period_product_jew').style.display = "flex";
    }
    else {
        document.getElementById('period_product_jew').style.display = "none";
    }
}
function dispaly_time_pro() {
    var product_time_pro = document.getElementById("mazad_fawery_pro").value;
    if (product_time_pro == "مزاد فورى"){
        document.getElementById('period_product_pro').style.display = "flex";
    }
    else {
        document.getElementById('period_product_pro').style.display = "none";
    }
}
function dispaly_time_vic() {
    var product_time_vic = document.getElementById("mazad_fawery_vic").value;
    if (product_time_vic == "مزاد فورى"){
        document.getElementById('period_product_vic').style.display = "flex";
    }
    else {
        document.getElementById('period_product_vic').style.display = "none";
    }
}
function dispaly_time_high() {
    var product_time_high = document.getElementById("mazad_fawery_high").value;
    if (product_time_high == "مزاد فورى"){
        document.getElementById('period_product_high').style.display = "flex";
    }
    else {
        document.getElementById('period_product_high').style.display = "none";
    }
}
