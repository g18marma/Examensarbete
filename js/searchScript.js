// ==UserScript==
// @name         Search word
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        http://localhost/Examensarbete/Examensarbete/searchForm.php
// @grant        none
// ==/UserScript==


var cnt = parseInt(localStorage.getItem("Counter"));

//finish if all iterations have been exectuted
if (cnt > 50) {
    alert("Finished!" + cnt);
    console.log(localStorage.getItem("oldVal"));
} else {
    if (isNaN(cnt)) cnt = 0;

    if (cnt == 0) {
        str="Old value: \n";
        location.reload();
    } else {
        //set time after clicking on search button
        console.log(cnt-1);
        document.getElementById('searchTerm').value = cnt;
        click();
        var oldVal = new Date();
        oldVal = oldVal.getTime();
        var str = localStorage.getItem("oldVal");
        str+= oldVal +"\n";
    }

    // Increase counter and save data to local storage
    cnt++;
    localStorage.setItem("Counter",cnt);
    localStorage.setItem("oldVal",str);
}

function click(){
    setTimeout(() => document.getElementById('searchButton').dispatchEvent(new MouseEvent('click', {
        view: window,
        bubbles: true,
        cancelable: true
    })), );
}