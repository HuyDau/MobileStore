

window.onload = function(){
    khoiTao();

    var tags = ["Iphone","Samsung","Oppo","Xiaomi"];
    for(var t of tags) addTags(t, "index.php?search" +t);
}