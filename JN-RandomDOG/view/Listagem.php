<!doctype html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1">
    <meta name="description" content="Hello World, This Is Dog">
    <meta name="author" content="AdenFlorian">
    <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>random.dog.Listagem</title>
    <link rel="icon" href="favicon.ico">
    <style type="text/css">
        .modal {
	        position: fixed;
	        width: 40vw;
	        height: 75vh;
	        left: 12vw;
	        top: 12vh;
	        display: none;
        }
        .close {
	        position: absolute;
	        top: 0px;
	        right: -40px;
	        background: red;
	        color: white;
	        font-size: 18px;
	        font-weight: bold;
	        width: 32px;
	        height: 32px;
	        text-align: center;
	        line-height: 32px;
	        cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <br><br>
        <a class="btn btn-danger" href="index.php?controle=linksControle&metodo=CarregarPagina">Home</a>  
        <a class="btn btn-warning" href="index.php?controle=linksControle&metodo=CarregarListagem">Listagem</a> 
        <br><br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Listagem</h5> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Visualizar</th>
                                    <th scope="col">Alterar</th>
                                    <th scope="col">Excluir</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                    if(count($ret) > 0) {
                                    
                                    	foreach($ret as $dado) {
                                    		echo "<tr>";
                                    		echo "<td>{$dado->descricao}</td>";
                                    		echo "<td><button class='btn btn-warning show' value='{$dado->link}'>Visualizar</button></td>";
                                    		echo "<td><a class='btn btn-primary' href='index.php?controle=linksControle&metodo=Editar&id={$dado->link_id}'>Alterar</a></td>";
                                    		echo "<td><a class='btn btn-danger' href='index.php?controle=linksControle&metodo=Excluir&id={$dado->link_id}'>Excluir</a></td>";
                                    		echo "</tr>";
                                    	}
                                    }
                                    else {
                                    	echo "Não há links cadastrados!";
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <div id="modalIMG" class="modal row  flex-grid featured-content">
                            <div class="col-lg-10 col-sm-6 portfolio-item">
                                <div class="card h-100 grid-item-wrapper">
                                    <div class="card">
                                    	<span class="close">X</span>
                                        <img class="modal-content card-img-top grid-item-bg-img" id="img"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="modalMP4" class="modal row  flex-grid featured-content">
                            <div class="col-lg-10 col-sm-6 portfolio-item">
                                <div class="card h-100 grid-item-wrapper">
                                    <div class="card">
                                    	<span class="close">X</span>
                                        <video id="mp4" class="modal-content card-img-top grid-item-bg-img"  autoplay loop muted></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">

                            function showModal() {
                             
                             	if ((this.value.split('.').pop() == 'mp4') || (this.value.split('.').pop() == 'webm') ) {
                             		modalMP4.style.display = "block";
	                            	bMP4.src = this.value;
                             	} 
                             	else {
                             		modalIMG.style.display = "block";
	                            	bIMG.src = this.value;	
                             	}
                            }
                            
                            //Elementos de IMG
                            var modalIMG = document.getElementById('modalIMG');
                            var bIMG = document.getElementById("img");	

                            var modalCloseIMG = modalIMG.querySelector(".close");

                            //Elementos de MP4
                            var modalMP4 = document.getElementById('modalMP4');
                            var bMP4 = document.getElementById("mp4");	

                            var modalCloseMP4 = modalMP4.querySelector(".close");
                            
                            //Pegar os objetos que tem a tag show
                            var images = document.querySelectorAll(".show");
                            
                            //Carrega o evento OnClick nos objetos tag show
                            for (let i = 0; i < images.length; i++) {
                            	images[i].addEventListener("click", showModal);
                            	//alert(images[i].value.split('.').pop());
                            }
                            
                            modalCloseIMG.addEventListener("click", 

                            	function() {
                            		modalIMG.style.display = "none";
                            	}
                            );

                            modalCloseMP4.addEventListener("click", 
                            	
                            	function() {
                            		modalMP4.style.display = "none";
                            	}
                            );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>