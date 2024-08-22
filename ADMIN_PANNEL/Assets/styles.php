<?php header("Content-type: text/css"); ?>
*{
    margin: 0;
    padding: 0;
    font-family: Poppins;
}

#main{
    display: flex;
}
#navigation{
    flex: 2;
    height: 200vh;
    background: #ffc451;
}
#dashboard{ 
    flex:9;
    height: 200vh;
    background: #fff7e6;
}
#head{
    height: 80px;
    background: white;
    display: flex;
    position:sticky;
    top:0px;
}
.fa-bars{
    font-size:25px;
    margin-top: 30px;
    margin-left: 30px;
}
#search{
    width: 200px;
    height: 45px;
    margin-top: 20px;
    border: none;
    background: #ffeecb;
    margin-left: 40px;
    padding-left: 10px;
}
#search-button{
    height: 45px;
    font-size: 15px;
    border: none;
    margin-top: 20px;
    cursor: pointer;
    width: 100px;
    background: #ffc451;
    border-radius: 0px 4px 4px 0px;
}
.fa-bell{
    font-size:25px;
    margin-top: 30px;
    margin-left:300px;
    cursor: pointer;
}

.fa-gear{
    font-size:25px;
    margin-top: 30px;
    cursor: pointer;
    margin-left: 30px;
}
.fa-solid{
    font-size:25px;
    margin-top: 30px;
    margin-left: 30px;
    cursor: pointer;
}
#image{
    height: 50px;
    width: 50px;
    border-radius: 50%;
    margin-top: 20px;
    margin-left: 10px;    
}
#img1{
   
    margin-left: 100px;
    display: flex;
    width:250px;
}
#name{
    margin-top: 30px;
    margin-left: 20px;
}
#name-section{
    text-align: center;
    margin-top: 30px;
}
#nav{
    margin-left: 10px;
    margin-top: 30px;
}
#nav-elements{
    list-style-type: none;
    font-size: 19px;
}
#nav-elements1{
    margin-top: 20px;
    margin-left: 10px;
}
#task-display{
    display: flex;
}
.task-box{
    width:250px;
    background: white;
    margin-left:50px;
    text-align: center;
    height: 100px;
    border-radius: 10px;
    margin-top: 100px;
    padding-top: 10px;
    border: 2px solid black;
}
#add-task{
    background: white;
    width: 500px;
    padding-top: 10px;
    height: 500px;
    border-radius: 10px;
    margin-left: 400px;
    margin-top: 50px;
}
#add-task-elements{
    margin-left: 100px;
    width: 300px;
    height: 30px;
    padding-left: 10px;
    margin-top: 10px;

}
label{
    margin-left: 100px;
    font-size: 18px;
    margin-top: 20px;
}
#elements{
    margin-top: 30px;
}
#add-button{
    width: 100px;
    height: 40px;
    margin-left: 40%;
    background: #ffc451;
    border: none;
    border-radius: 5px;
}
a{
    text-decoration: none;
    color: black;
}
.fa-house{
    font-size: 15px;
}
.fa-bars-progress{
    font-size: 15px;
}
.fa-list-check{
    font-size: 15px;
}
table{
    margin-top: 30px;
    margin-left: 25%;
    line-height: 60px;
    text-align: center;
}
table, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
th {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
    background: #ffc451;
  }
#btn-update{
    width: 80px;
    height: 40px;
    background: green;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}
#btn-remove{
    width: 80px;
    height: 40px;
    background: red;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}
#btn-change{ width: 120px;
    height: 40px;
    background: #ffc451;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;

}
#dashboard-title{
    text-align: center;
    margin-top: 20px;
}
#add1-button{
   margin-left:70%;
   width: 100px;
   height: 50px;
   background-color: #ffc451;
   border: none;
   border-radius: 5px;
}
#page{
    width: 30px;
    height: 30px;
    background-color: #ffc451;
    margin-left: -5px;
}
#pagination{
    margin-top: 30px;
    margin-left:800px;
}
#page-arrow{
    margin-right: 10px;
}
#page-arrow1{
    margin-left: 5px;
}
#page{
    width: 30px;
    height: 30px;
    background-color: #ffc451;
    margin-left: -5px;
}
#pagination{
    margin-top: 30px;
    margin-left:550px;
}
#page-arrow{
    margin-right: 10px;
}
#page-arrow1{
    margin-left: 5px;
}
#btn-status{
   background-color:green;
   width:100px;
   height:40px;
   border:none;
   border-radius:5px;
   color:white;
}
#btn-delete{
   background-color:red;
   width:100px;
   height:40px;
   border:none;
   border-radius:5px;
   color:white;

}
.active{
    color:green;
    width:30px;
    height:30px;    
}


