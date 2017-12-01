<?php



//Function prenant un tableau de users ayant les clés "permission" (true/false), "age" (int), "username" (string)
//Cette fontion parcour les users et affiche
//"Welcome {username}" si il a permission true et age > 18
//"Too young {username}" si il a permission a true mais age < 18
//"Denied" si il a pas la permission
