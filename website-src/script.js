/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = choosePic;

var myPix = new Array("images/Sailing1.jpg","images/Sailing2.jpg","images/Sailing3.jpg","images/Sailing4.jpg","images/Sailing5.jpg");

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture").src = myPix[randomNum];
 }


