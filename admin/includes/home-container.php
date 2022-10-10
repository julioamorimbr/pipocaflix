  <style type="text/css">
      
.container {
    
    width: 100%;
   
    
    padding: 20px;
    
}

.listWrap {
    
    height: 800px;
    width: 1000px;
    
}

.list {
    
    list-style: none;
    margin: 0;
    padding: 0;
    display: table;
    white-space: nowrap;
    width: 100%;
    
}

.list li {
    
    background-color: #f0f0f0;
    display: table-row;
    color: #5c5c5c;

}

.list li:nth-child(odd) {
    
    background-color: #f2f2f2;
    display: table-row;
    font-size: 9pt;
    color: #5c5c5c;

}



.list li:nth-child(even) {
    
    background-color: #e8e8e8;
    display: table-row;
    font-size: 9pt;
    color: #5c5c5c;

}



.list li:nth-child(1) span:first-child {
    
    border-top-left-radius: 6px;
    
}

.list li:nth-child(1) span:last-child {
    
    border-top-right-radius: 6px;
    
}


.list li:nth-child(1) {
    
    background-color: #201c2b;
    text-transform: uppercase;
    font-size: 8pt;
    font-weight: bold;
    color: #b8b5c0;

    
}

.list li:nth-child(1):hover {
    

    
}



.list li:nth-child(1) span {
    
    border-bottom: 2px solid #7d5bbe;
    padding: 14px;
    
}

.list span {
    
    text-align: left;
    display: table-cell;
    padding: 6px;
    vertical-align: middle;
    
}


.list span:nth-child(2) {
    
    
}




  </style>
  <h1>Olá, admin</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                            
                        <div class="col-md-7 col-sm-7 col-xs-12 gutter">


                        </div>

                    </div>
<div class="container">

    <div class="listWrap">
    
        <ul class="list">
        
            <li>
                <span>Id</span>
                <span>Ip</span>
                <span>Data</span>
                <span>Hora</span>
               
               
            </li>
           
            <?php while($top6 = mysql_fetch_assoc($top5)){ ?>
            <li>
                <span><?=$top6['id']?></span>
                <span><?=$top6['ip']?></span>
                <span><?=$top6['date']?></span>
                <span><span class="label label-warning"><?=$top6['hour']?></span></span>
               
            </li>
            <?php } ?>
            <li>

            </li>
        </ul>

    </div>

</div>

<script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE=" crossorigin="anonymous"></script>
                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
