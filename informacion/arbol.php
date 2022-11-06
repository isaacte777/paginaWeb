<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php include("../template/cabecera.php")?>

<div class="container">
                <div class="jumbotron">
                        <h1 class="display-3">Conversión de árboles generales en árboles binarios</h1>
                        <p class="lead">Arboles Generales</p>
                        <hr class="my-2">
                            </div>
                    <div class="row">
                        <div class="container">
                          <div class="row">
                              <br>
                            <div class="container-fluid col col-3">
                            <img src="../img/General-Tree.jpg" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-9">
                            <p>
                            Un árbol general es aquella estructura de datos en árbol en la que guardas información en los 
                            nodos sin seguir una regla especial, simplemente, por ejemplo, siguiendo la estructura de un 
                            XML o algo parecido. Para pasar de un árbol general a binario propongo la siguiente solución:
                            <br>
                            <br>
                            1. Recorrer el árbol general (como tu quieras, inroden, etc)
                            <br>
                            2. Guardar los datos de los nodos en una lista
                            <br>
                            3. Ordenar la lista
                            <br>
                            4. Tomar el dato de la mita de la lista como raíz del árbol binario y eliminarlo de la lista
                            <br>
                            5. Recorrer la lista e ir insertando los nodos de acuerdo con las reglas del árbol binario:
                            en el subárbol de la izquierda de la raíz los valores menores, en el subárbol de la derecha de la raíz los valores mayores.
                            </p>
                            <p>
                            De esta manera es muy probable que el árbol binario te quede totalmente balanceado, evitando el riesgo de que el 
                            árbol te quede como una lista simple.
                            </p>
                            </div>
                            <hr class="my-2">
                            <div class="col col-12">
                            <h2>Árbol binario :</h2>
                            </div>
                            <div class="col col-4">
                            <img src="../img/Untitled-Diagram631.png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-8">
                            <p>
                            un árbol binario es la versión especializada del árbol general. Un árbol binario es un árbol 
                            en el que cada nodo puede tener como máximo dos nodos. En un árbol binario, existe una 
                            limitación en el grado de un nodo porque los nodos en un árbol binario no pueden tener 
                            más de dos nodos secundarios (o grado dos). El nodo superior de un árbol binario se llama 
                            nodo raíz y hay principalmente dos subárboles, uno es <b> el subárbol izquierdo </b>y el otro <b> es el 
                            subárbol derecho </b> . A diferencia del árbol general, el árbol binario puede estar vacío. 
                            A diferencia del árbol general, el subárbol de un árbol binario está ordenado porque los 
                            nodos de un árbol binario se pueden ordenar de acuerdo con criterios específicos.
                            <br>
                            <br>
                            Para el manejo de los datos se cuenta con dos operaciones básicas: apilar (push), que coloca 
                            un objeto en la pila, y su operación inversa, retirar (o desapilar, pop), que retira el último elemento apilado
                            </p>
                            
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Nodos hijos
                            </h2>
                            <p>
                            Los hijos son todos aquellos nodos que tiene un padre.
                            </p>
                            
                            </div>
                            
                            <div class="col-lg-4">
                            <h2>
                            Nodos hermanos
                            </h2>
                            <p>
                            Los nodos hermanos son aquellos nodos que comparte a un mismo padre en común dentro de la estructura.
                            </p>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Nivel del árbol
                            </h2>
                            <p>
                            Nivel es el número de arcos que deben ser recorridos para llegar a un determinado nodo. Por definición, 
                            la raíz tiene nivel 1. *Alturadel árbol es el máximo número de niveles de todos los nodos del árbol. es la raíz del árbol
                            </p>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Altura del árbol
                            </h2>
                            <p>
                            Altura total del árbol, medida a partir de un tocón de un pie. 2. Altura comercial. 
                            La altura comercial es la altura del árbol desde su tocón hasta un diámetro en el que 
                            el tronco es demasiado pequeño para ser comercializable (Figura 2.2).
                            </p>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Peso del árbol.
                            </h2>
                            <p>
                            Conocemos como peso a el número de nodos que tiene un Árbol. 
                            Este factor es importante por que nos da una idea del tamaño del árbol y el tamaño en 
                            memoria que nos puede ocupar en tiempo de ejecución (Complejidad Espacial en análisis de 
                            algoritmos.)
                            </p>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Bosque
                            </h2>
                            <p>
                            Un bosque es un ecosistema donde la vegetación predominante la constituyen los árboles y arbustos
                            </p>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="container-fluid col col-6">
                            <p>
                            Aplicaciones de árboles. Un árbol binario es una estructura de datos útil cuando se trata 
                            de hacer modelos de procesos en donde se requiere tomar decisiones en uno de dos sentidos en 
                            cada parte del proceso. Por ejemplo, supongamos que tenemos un arreglo en donde queremos 
                            encontrar todos los duplicados..
                            <br>
                        </div>
                        
                        <div class="container-fluid col col-6">
                            <img src="../img/árbol binario.jpg" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            </p>
                            <br>
                            <div class="col col-12">
                            <h2>
                            ¿A qué tipo de estructura de datos corresponde un árbol?
                            </h2>
                            </div>
                            <p>
                            Un árbol es una estructura de datos no lineal. Las estructuras de datos lineales se 
                            caracterizan por que a cada elemento le corresponde no más que un elemento siguiente. 
                            En las estructuras de datos no lineales, como el árbol, un elemento puede tener diferentes 
                            " siguientes elementos ", introduciendo una estructura de bifurcación, también conocidas como 
                            estructuras multi enlazada.
                            </p>
                            <div class="container-fluid col col-4">
                            <img src="../img/c.png" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-12">
                            <h2>Árboles binarios similares.</h2>
                                <p>
                                Breve introducción: El método para juzgar si el árbol binario es similar es: T1, 
                                T2 son todos los árboles vacíos, o el árbol binario tiene solo un nodo raíz, o 
                                T1 es similar al subtree de T2 Algoritmo : La idea de recursión es determinar que 
                                cada nodo puede considerarse como un "nodo raíz" para la operación
                                </p>
                                <hr class="my-2">
                            </div>
                            <div class="col col-12">
                            <h2>¿Cuáles son las operaciones sobre pilas?</h2>
                            </div>
                            <p>
                            Las principales operaciones que podemos realizar en una pila son: Insertar un elemento (push). 
                            Eliminar un elemento (pop). Los algoritmos para realizar cada una de estas operaciones se 
                            muestran a continuación. La variable máximo para hacer referencia al máximo número de elementos 
                            en la pila.
                            </p>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col col-6">
                            <p>
                            <strong>
                            Árboles binarios equivalentes.
                            </strong>
                            </p>
                            <p>
                            El código anterior implementa las funciones básicas de un árbol binario. Implementemos la 
                            comparación de árboles binarios. Para comparar si dos árboles binarios son consistentes. 
                            Creamos una función. Igual (t1, t2 * árbol) bool Para comparar árboles binarios, es necesario 
                            poner el valor del árbol binario en un canal.
                        </p>
                            </div>
                            
                            
                            <div class="col col-6">
                            <p>
                            <strong>Árbol binario completo.</strong>
                            </p>
                            <p>
                            Un árbol binario completo es un árbol binario de profundidad K que tiene todos los nodos 
                            posibles hasta el penúltimo nivel (profundidad K - 1), y donde los elementos del último 
                            nivel están colocados de izquierda a derecha sin dejar huecos entre ellos
                            </p>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col col-12">
                            <h2>
                            Árbol binario casi completo.
                            </h2>
                            </div>
                            
                            <div class="col col-9">
                            <p>
                            Un árbol cuyos elementos tienen como máximo 2 hijos se llama árbol binario. Dado que cada elemento en un árbol binario puede tener solo 2 elementos secundarios, generalmente los denominamos elementos secundarios izquierdo y derecho.
                            </div>
                            <p> <b>Características o propiedades que distinguen un árbol binario de un árbol general</b> </p>
                            </p>
                            <p>
                            un b árbol binario es la versión especializada del <b>árbol general.</b> 
                            Un árbol binario es un árbol en el que cada nodo puede tener como máximo dos nodos. 
                            En un <b>árbol binario</b>, existe una limitación en el grado de un nodo porque los nodos en 
                            un árbol binario no pueden tener más de dos nodos secundarios (o grado dos).
                            </p>
                            <div class="col-lg-3">
                            <h2>
                            <b>
                            Recorrido de árboles:
                            </b>
                            </h2>
                            <p>
                            el recorrido de árboles se refiere al proceso de visitar de una manera sistemática, 
                            exactamente una vez, cada nodo en una estructura de datos de árbol 
                            (examinando y/o actualizando los datos en los nodos). Tales recorridos están clasificados 
                            por el orden en el cual son visitados los nodos. Los siguientes algoritmos son descritos 
                            para un árbol binario, pero también pueden ser generalizados a otros árboles.
                            </p>
                            
                            </div>
                            
                            <div class="col-lg-3">
                            <h2>
                            <b>Pre orden:</b>
                            </h2>
                            <p>
                            raíz – subárbol izquierdo – subárbol derecho.

                            En  pre orden, la raíz  se recorre  antes  que los  recorridos  de  los  subárboles izquierdo y derecho.
                            </p>
                            </div>
                            <div class="col-lg-3">
                            <h2>
                            <b>In orden:</b>
                            </h2>
                            <p>
                            subárbol izquierdo – raíz – subárbol derecho.

                            En inorden, la raíz se recorre entre los recorridos de los árboles izquierdo y derecho.
                            </p>
                            </div>
                            
                            <div class="col-lg-3">
                            <h2>
                            <b>
                            Post orden:
                            </b>
                            </h2>
                            <p>
                            subárbol izquierdo – subárbol derecho – raíz

                            En  postorden, la  raíz  se recorre  después  de  los recorridos  por  el  subárbol izquierdo y el derecho.
                            </p>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            </div>
                            <div class="col col-6">
                            <img src="../img/R (2).png" 
                            class="mx-auto img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            
                            </div>
                            
                          </div>
                        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<?php include("../template/pie.php")?>