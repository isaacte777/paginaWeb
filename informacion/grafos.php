<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php include("../template/cabecera.php")?>

<div class="container">
                <div class="jumbotron">
                        <h1 class="display-3">Estructura de datos. GRAFOS</h1>
                        <p class="lead">GRAFOS</p>
                        <hr class="my-2">
                            </div>
                    <div class="row">
                        <div class="container">
                          <div class="row">
                              <br>
                            <div class="container-fluid col col-3">
                            <img src="../img/1_nxTak23UNszpteFXrN_f9Q.gif" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-9">
                            <p>
                            El objetivo de este articulo es el de saber que son los “Grafos” en las estructuras de datos, 
                            sus formas de expresión, como buscar en un grafo y los algoritmos que se usan en ellos.
                            <br>
                            <br>
                            Los grafos son una estructura de datos no lineal parecida a la de los arboles, pero este seria un árbol sin las leyes de acomodo que rigen a un árbol normal.
                            <br>
                            Los grafos están conformados de nodos o también nombrados vértices los cuales son registros con datos y al menos un apuntador a otro nodo, y de aristas, las cuales son las conexiones que existen de un nodo a otro.
                            </p>
                            </div>
                            <hr class="my-2">
                            <div class="col col-12">
                            <h2>Aplicaciones de los grafos.</h2>
                            </div>
                            <div class="col col-4">
                            <img src="../img/grafo-3.png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-8">
                            <p>
                            Los grafos tienen muchos tipos de aplicaciones, tanto de mapas como aplicaciones matemáticas, 
                            como resolver problemas sobre búsqueda de caminos con el menor costo, por ejemplo, la ruta 
                            que usará el taxi para llevar a una persona a su destino. Otra aplicación puede ser la del 
                            teorema de los 4 colores, normalmente se usa para pintar mapas y, como el nombre lo dice, 
                            con 4 colores. Lo que busca es colorear los vértices del grafo sin que haya el mismo color 
                            a la par del vértice. Una aplicación matemática en los grafos, muy conocida, es la del 
                            algoritmo de Floyd y Warshall. Este algoritmo tiene como objetivo buscar el camino más 
                            corto en grafos etiquetados o ponderados.
                            <br>
                            <br>   
                            </p>
                            </div>
                            <b>Sistemas de Información Geográfica</b>
                            <p>
                            Se entiende como Sistema de Información Geográfica el grupo de datos que están relacionados en un espacio físico, 
                            que permite que los usuarios finales puedan crear, añadir, analizar y representar de una forma eficiente el tipo de 
                            información geográfica que esté asociada a un territorio. Dicha información geográfica debe tener un componente 
                            espacial, es decir, una ubicación y también debe tener un componente atributivo; este será el que dé con más 
                            detalle lo que se busca.
                            </p>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            <h2>
                            ¿A qué tipo de estructura de datos corresponde un grafo?
                            </h2>
                            <p>
                            Un grafo en el ámbito de las ciencias de la computación es una estructura de datos, 
                            en concreto un tipo abstracto de datos (TAD), que consiste en un conjunto de nodos 
                            (también llamados vértices) y un conjunto de arcos (aristas) que establecen relaciones 
                            entre los nodos.
                            </p>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Nodos o vértices.
                            </h2>
                            <p>
                            Los nodos son vértices, pero solo dos vértices son nodos, es decir, aquellos que comienzan 
                            y terminan una línea. Los nodos pueden subclasificarse en aquellos que son: Colgando, es 
                            decir, compartir su ubicación precisa X, Y sin otros nodos
                            </p>
                            <img src="../img/s9JyS.png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            
                            <div class="col-lg-4">
                            <h2>
                            Arista o arcos
                            </h2>
                            <p>
                            Arista (teoría de grafos) En teoría de grafos, una arista o línea 1 ​ corresponde a una 
                            relación entre dos vértices de un grafo. En un grafo no dirigido, se trata de relaciones 
                            simétricas sin dirección, mientras que en un grafo dirigido son relaciones direccionales, 
                            también conocidas como arcos. 2 ​
                            </p>
                            <div class="col-lg-8">
                            <img src="../img/8b3eb83f395d1f9fdb04bb9623f775a4.jpg" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Bucles.
                            </h2>
                            <p>
                            Conjunto de instrucciones que son ejecutadas de manera repetitiva, hasta que se cumpla una 
                            condición dada o se detenga manualmente el proceso.
                            </p>
                            <br>
                            <div class="col-lg-9">
                            <img src="../img/R (3).png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Orden del grafo.
                            </h2>
                            <p>
                            Por su parte el orden de un grafo se define por el número o cantidad de vértices que tenga 
                            un grafo. Esto quiere decir que la forma y la direccionalidad que tengan los vértices 
                            influyen de forma significativa en la composición de un grafo
                            </p>
                            <div class="col-lg-9">
                            <img src="../img/glosario-teoria-de-grafos.png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Grafo de orden cero.
                            </h2>
                            <p>
                            el gráfico nulo puede referirse al orden - gráfico cero o, alternativamente, a 
                            cualquier gráfico sin puentes (este último a veces se llama un gráfico vacío).
                            </p>
                            <br>
                            <br>
                            <div class="col-lg-10">
                            <img src="../img/Ejemplo Matriz Nula.jpg" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            Grafo simple
                            </h2>
                            <p>
                            Grafo simple. Dícese del grafo que no tiene lazos ni aristas múltiples entre sus vértices. 
                            En los textos difiere el concepto entre estas dos versiones: Sea un grafo G=<V,A> se dice 
                            que es un grafo simple si y solo si se cumple una de estas propiedades:
                            </p>
                            
                            <div class="col-lg-7">
                            <img src="../img/R (4).png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="container-fluid col col-10">
                                <h2>
                                Multígrafo
                                </h2>
                            <p>
                            un multigrafo o grafo multivariado es una generalización de un grafo que permite aristas 
                            múltiples, o equivalentemente, más de un conjunto de aristas. De esta forma, dos nodos pueden 
                            estar conectados por más de una arista.1​ Algunos autores permiten que los multigrafos tengan 
                            bucles, es decir, que una arista conecte a un nodo consigo mismo.
                            <br>
                        </div>
                        
                        <div class="container-fluid col col-2">
                            <img src="../img/220px-Multi-pseudograph.svg.png" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            </p>
                            <br>
                            <div class="col col-12">
                            <h2>
                            Grafo conexo y Grafo no conexo.
                            </h2>
                            </div>
                            <p>
                            En teoría de <b>grafos</b> , un grafo se dice <b>conexo</b> si, para cualquier par de vértices u y v en G, 
                            existe al menos una trayectoria (una sucesión de vértices adyacentes que no repita vértices) 
                            de u a v.Un grafo es conexo si cada par de vértices está conectado por un camino; es decir, 
                            si para cualquier par de vértices (a, b), existe al menos un camino posible desde a hacia b.
                            </p>
                            <p>
                           <b>Grafo disconexo</b> con tres componentes. es un grafo en que todos sus vértices están conectados 
                            por un camino (si el grafo es no dirigido) o por un semicamino (si el grafo es dirigido ). 
                            Un grafo que no es conexo se denomina grafo disconexo o inconexo. Los subgrafos conexos 
                            máximos de un grafo no dirigido se llaman componentes o componentes conexos.
                            </p>
                            <div class="container-fluid col col-4">
                            <img src="../img/grafo conexo.png" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-12">
                            <h2>Trayectoria de un grafo.</h2></div>
                            <div class="container-fluid col col-2">
                            <img src="../img/camino.gif" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="container-fluid col col-10">
                                <p>
                                Un camino en un grafo es una sucesión finita en la que aparecen alternadamente vértices y aristas de dicho grafo.
                                Un camino es una secuencia de arcos en que el extremo final de cada arco coincide con el extremo inicial del 
                                siguiente en la secuencia.
                                </p>
                                </div>
                                <hr class="my-2">
                            
                            <div class="col col-12">
                            <h2>Longitud de la trayectoria.</h2>
                            </div>
                            <p>
                            La trayectoria es el camino que tomo un objeto para lograr desplazarse, por ende, la 
                            longitud de la trayectoria es la <b>longitud de este camino</b>. Se suele medir en sistema 
                            internacional, es decir, en metros. La longitud de la trayectoria no necesariamente es 
                            igual al desplazamiento.
                            </p>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col col-6">
                            <p>
                            <strong>
                            Grafos dirigidos.
                            </strong>
                            </p>
                            <p>
                            Un grafo dirigido o digrafo es un tipo de grafo en el cual las aristas tienen un sentido 
                            definido,1​ a diferencia del grafo no dirigido, en el cual las aristas son relaciones 
                            simétricas y no apuntan en ningún sentido.
                        </p>
                        <br><br><br>
                        <div class="container-fluid col col-5">
                            <img src="../img/Directed.svg.png" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            
                            
                            <div class="col col-6">
                            <p>
                            <strong>Dirección del grafo dirigido.</strong>
                            </p>
                            <p>
                            Un grafo dirigido. Un grafo dirigido o digrafo es un tipo de grafo en el cual el conjunto de 
                            los vértices tiene una dirección definida [ 1], a diferencia del grafo generalizado, en el 
                            cual la dirección puede estar especificada o no. Al igual que en el grafo generalizado, el 
                            grafo dirigido está definido por un par de conjuntos, donde:
                            </p>
                            <div class="container-fluid col col-5">
                            <img src="../img/R.gif" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            <div class="col col-6">
                            <h2>
                            Grado interno de un nodo.
                            </h2>
                            <p>
                            El grado de un nodo es la cantidad de aristas que inciden en él. Una arista "incide" en un 
                            nodo si lo conecta con otro nodo (o consigo mismo, en el caso de un bucle). Dicho de otro 
                            modo: una arista incide en un nodo si lo "toca" con uno de sus dos lados. En un grafo simple, 
                            el grado de un nodo es igual a la cantidad de vecinos que éste tiene.
                            </div>
                            <div class="col col-6">
                            <h2>Grado externo de un nodo</h2>
                            <p>
                            El grado interno de un nodo es el número de arcos que llegan al nodo y su grado externo es el 
                            número de arcos que salen del nodo. Al sumar el grado interno de un nodo con su grado externo 
                            se obtiene el grado del nodo.
                            </p>
                            </div>
                            </p>
                            
                            <div class="col-lg-3">
                            <h2>
                            <b>
                            Grado del nodo.
                            </b>
                            </h2>
                            <p>
                            El grado de un nodo en una red (a veces denominado incorrectamente como conectividad) 
                            es el número de conexiones de un vértice o nodo con otros nodos.
                            </p>
                            
                            </div>
                            
                            <div class="col-lg-3">
                            <h2>
                            <b>Matriz de adyacencia.</b>
                            </h2>
                            <p>
                            La matriz de adyacencia es una matriz cuadrada que se utiliza como una forma de representar 
                            relaciones binarias. Se crea una matriz cero, cuyas columnas y filas representan los nodos 
                            del grafo. Por cada arista que une a dos nodos, se suma 1 al valor que hay actualmente en la 
                            ubicación correspondiente de la matriz.
                            </p>
                            </div>
                            <div class="col-lg-3">
                            <h2>
                            <b>Representación de la matriz de adyacencia para un grafo dirigido.</b>
                            </h2>
                            <p>
                            Una representación común de un grafo dirigido es la matriz de adyacencia. Sea G= (V, A) un grafo, donde V= {1, 2, 3..., n}. La matriz de adyacencia para G es una matriz booleana de dimensión nxn, donde cada elemento [i, j] vale 1 si y solo si, existe un arco (i, j).
                            </p>
                            </div>
                            
                            <div class="col-lg-3">
                            <h2>
                            <b>
                            Representación de la matriz de adyacencia para un grafo no dirigido.
                            </b>
                            </h2>
                            <p>
                            En el caso especial de un gráfico simple finito, la matriz de adyacencia es una matriz (0,1) con ceros en su diagonal. Si el gráfico no está dirigido (es decir, todos sus bordes son bidireccionales), la matriz de adyacencia es simétrica.
                            </p>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            <b>
                            Recorrido de grafos.
                            </b>
                            </h2>
                            <p>
                            Recorrer un grafo significa tratar de alcanzar todos los nodos que estén relacionados con uno que llamaremos nodo de salida. Se parte de un nodo dado y se visitan los vértices del grafo de manera ordenada y sistemática, pasando de un vértice a otro a través de las aristas del grafo.
                            </p>
                            
                            </div>
                            
                            <div class="col-lg-4">
                            <h2>
                            <b>Recorrido en amplitud</b>
                            </h2>
                            <p>
                            Recorrido en amplitud es otra forma sistemática de visitar los vértices. Este enfoque se denomina en amplitud porque desde cada vértice v que se visita se busca en forma tan amplia como sea posible, visitando todos los vértices adyacentes a v. Es una generalización del recorrido por niveles de un árbol
                            </p>
                            </div>
                            <div class="col-lg-4">
                            <h2>
                            <b>Recorrido en profundidad.</b>
                            </h2>
                            <p>
                            Un Recorrido en profundidad (en inglés DFS o Depth First Search) es un algoritmo que permite recorrer todos los nodos de un grafo. Es una generalización del recorrido preorden de un árbol. La estrategia consiste en partir de un vértice determinado v y a partir de alli, cuando se visita un nuevo vértice, explorar cada camino que salga de él.
                            </p>
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <hr class="my-2">
                            </div>
                            </div>
                            
                            </div>
                            
                          </div>
                        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<?php include("../template/pie.php")?>