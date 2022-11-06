<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php include("../template/cabecera.php")?>

                <div class="container">
                <div class="jumbotron">
                        <h1 class="display-3">Listas Ligadas</h1>
                        <p class="lead">Más informaciones de Listas Ligadas</p>
                        <hr class="my-2">
                            </div>
                    <div class="row">
                        <div class="container">
                          <div class="row">
                              <br>
                            <div class="container-fluid col col-6">
                            <img src="../img/listaligadaagregar.png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-6">
                            <p>
                            Listas ligadas o enlazadas simple n n Una lista ligada o enlazada es una estructura de datos dinámica, esto es, que crece 
                            y se reduce durante la ejecución. Una lista ligada es una colección lineal de objetos, conocidos como nodos, 
                            que están conectados mediante ligas o enlaces de apuntadores. cabeza Dato Nodo M. C. Yalu Galicia Hdez. (FCC/BUAP) 2
                            <br>
                            <br>
                            Acceso a la lista n n Se puede tener acceso a una lista ligada mediante un apuntador al primer nodo de la lista, 
                            llamado generalmente cabeza o inicio. El acceso a los nodos subsecuentes se obtiene mediante un apuntador de enlace almacenado 
                            en cada nodo. Por convención, el apuntador de enlace en el último nodo de la lista se establece como nulo, para marcar el final de 
                            la misma Los datos en una lista se almacenan dinámicamente: 
                            Cada nodo se crea en tiempo de ejecución según el usuario lo requiera. M. C. Yalu Galicia Hdez. (FCC/BUAP) 3
                            </p>
                            
                            </div>
                            <hr class="my-2">
                            <div class="col col-12">
                            <h2>Tipos de Listas.</h2>
                            </div>
                            <div class="col col-6">
                            <img src="../img/listaligada.png" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-6">
                            <p>
                            Abierta: cualquier persona puede subscribirse o borrarse de la lista.
                            Cerrada: la subscripción de ser aprobada por el propietario de la lista.
                            Estática: los integrantes de la lista son definidos junto con la lista y no se admiten altas o bajas.
                            <br>
                            <br>
                            Los tipos de listas en HTML son los siguientes: Listas ordenadas. Listas desordenadas. Listas de definiciones….
                            <br>
                            Tipo de lista ordenada: type
                                <br>
                            1 – Listas decimales.
                            <br>
                            a – Listas alfabéticas en minúsculas.
                            <br>
                            A – Listas alfabéticas en mayúsculas.
                            <br>
                            i – Listas de números romanos en minúsculas.
                            <br>
                            I – Listas de números romanos en mayúsculas.
                            </p>
                            </div>
                            <div class="col col-12">
                            <h2>
                                ¿Cuáles son las diferencias entre listas ligadas, listas circulares ligadas, listas 
                                doblemente ligadas?
                            </h2>
                            </div>
                            <p>
                                Una lista simplemente enlazada en la que el último elemento (cola) se enlaza al primer elemento (cabeza) de tal modo que la 
                                lista puede ser recorrida de modo circular (“en anillo”). Lista circular doblemente enlazada. 
                                Una lista doblemente enlazada en la que el último elemento se enlaza al primer elemento y viceversa.
                            </p>
                            <div class="col col-12">
                            <h2>¿Cómo se sabe que una lista está vacía?</h2>
                            </div>
                            <p>
                            Un caso de una lista es una representación computacional del concepto matemático de una secuencia finita. 
                            ¿Cómo se sabe si una lista enlazada está vacía? Si los punteros anterior y siguiente apuntan al Nodo Centinela la 
                            lista se considera vacía. 
                            En otro caso, si a la lista se le añaden elementos ambos puntero apuntarán a otros nodos
                            </p>
                            <div class="col col-12">
                            <h2>¿Cuáles son los costos de una lista ligada?</h2>
                            </div>
                            <p>
                            Al entrar en el mundo de las estructuras de datos, que no son más que las maneras de representar y optimizar datos de todo equipo de computo, te encontraras con un tema muy interesante que son las listas doblemente ligadas.
                            A lo largo de este artículo se describirá de manera detallada en que consiste esta estructura de datos, como es su comportamiento en el uso de memoria, algunas operaciones comunes o de interés en C++.
                            Antes de aventurarnos dentro de las listas doblemente ligadas, es muy importante conocer la base que son las listas simplemente ligada.
                            Se puede definir una lista ligada como un conjunto de elementos unidos en secuencia, es decir, cada elemento de la lista está directamente conectada a un solo elemento de la lista. Estos elementos tienen un nombre en particular que es nodos y se conectan con otros nodos por medio de un enlace.
                            </p>
                            <div class="col col-6">
                            <img src="../img/img1.png" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <p>
                            Ahora, es importante saber cuál es el primer elemento de la lista. Esto porque a diferencia de una 
                            estructura como el arreglo, no tiene un indicador específico para acceder directamente a algún elemento en particular. Entonces, 
                            se utilizan dos únicos apuntadores que nos ayudarán a recorrer la lista y estos son: cabeza y cola.
                            </p>
                            <div class="col col-6">
                            <img src="../img/img2.png" 
                            class="mx-auto img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-12">
                            <h2>¿Cuáles son las operaciones básicas en una lista ligada?</h2>
                            </div>
                            <p>
                            Una lista enlazada requiere unos controles para la gestión de los elementos contenidos en ellas. Estos controles se manifiestan en forma de operaciones que tendrán las siguientes funciones:
                            Declaración de los tipos nodo y puntero a nodo.
                            Inicialización o creación.
                            Insertar elementos en una lista.
                            Eliminar elementos de una lista.
                            Buscar elementos de una lista (comprobar la existencia de elementos en una lista).
                            Recorrer una lista enlazada (visitar cada nodo de la lista).
                            </p>
                            
                          </div>
                        </div>
                        <hr class="my-2">
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                        </p>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<?php include("../template/pie.php")?>