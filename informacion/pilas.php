<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php include("../template/cabecera.php")?>

<div class="container">
                <div class="jumbotron">
                        <h1 class="display-3">Pila (Estructura de datos)</h1>
                        <p class="lead">Más informaciones de Pilas</p>
                        <hr class="my-2">
                            </div>
                    <div class="row">
                        <div class="container">
                          <div class="row">
                              <br>
                            <div class="container-fluid col col-3">
                            <img src="../img/pilas2.jpg" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-9">
                            <p>
                            Una pila es un generador primario de energía eléctrica, (genera energía por sí mismo), 
                            compuesto por una celda electrolítica, dos electrodos metálicos (uno positivo, llamado cátodo, 
                            y uno negativo, llamado ánodo) y un medio líquido o pastoso llamado electrolito.
                            <br>
                            <br>
                            Para el manejo de los datos se cuenta con dos operaciones básicas: apilar (push), que coloca 
                            un objeto en la pila, y su operación inversa, retirar (o desapilar, pop), que retira el último elemento apilado
                            </p>
                            </div>
                            <hr class="my-2">
                            <div class="col col-12">
                            <h2>Estructuras de una pila.</h2>
                            </div>
                            <div class="col col-6">
                            <img src="../img/pilas1.png" 
                            class="img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-6">
                            <p>
                            Pila (informática).Una pila (stack en inglés) es una lista ordinal o estructura de datos en la que el modo de acceso a 
                            sus elementos es de tipo LIFO (del inglés Last In First Out, último en entrar, primero en salir) que permite almacenar
                            y recuperar datos. Se aplica en multitud de ocasiones en informática debido a su simplicidad y ordenación implícita 
                            en la propia estructura. Representación gráfica de una pila
                            <br>
                            <br>
                            Para el manejo de los datos se cuenta con dos operaciones básicas: apilar (push), que coloca 
                            un objeto en la pila, y su operación inversa, retirar (o desapilar, pop), que retira el último elemento apilado
                            </p>
                            </div>
                            <div class="col col-12">
                            <h2>
                            ¿Representación en memoria de una pila
                            </h2>
                            </div>
                            <p>
                            Las pilas no son estructuras de datos fundamentales, es decir, no están definidas como tales 
                            en los lenguajes de programación. Las pilas pueden representarse mediante el uso de :
                            </p>
                            <br>
                            <p>
                           <ul>
                               <li>
                                   <i class="fas fa-marker    ">Arreglos.</i>
                               </li>
                               <li>
                                   <i class="fas fa-marker    ">Listas enlazadas..</i>
                               </li>
                           </ul>
                            </p>
                            
                            <p>
                            Nosotros ahora usaremos los arreglos. Por lo tanto debemos definir el tamaño máximo de la pila, 
                            además de un apuntador al último elemento insertado en la pila el cual denominaremos SP. 
                            La representación gráfica de una pila es la siguiente:
                            </p>
                            <div class="container-fluid col col-3">
                            <img src="../img/pilas3.gif" 
                            class="img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="container-fluid col col-9">
                            <p>
                            Como utilizamos arreglos para implementar pilas, tenemos la limitante de <b> espacio de memoria 
                            reservada.</b> Una vez establecido un máximo de capacidad para la pila, ya no es posible insertar más elementos.
                            <br>
                            
                            <br>
                            Una posible solución a este problema es el uso de espacios <b> compartidos de memoria.</b> Supongase 
                            que se necesitan dos pilas , cada una con un tamaño máximo de n elementos. En este caso se 
                            definirá un solo arreglo de 2*n elementos, en lugar que dos arreglos de n elementos.
                            En este caso utilizaremos dos <b>apuntadores:</b> SP1 para apuntar al último elemento insertado en 
                            la pila 1 y SP2 para apuntar al último elemento insertado en la pila 2. Cada una de las pilas 
                            insertará sus elementos por los extremos opuestos, es decir, la pila 1 iniciará a partir de la 
                            localidad 1 del arreglo y la pila 2 iniciará en la localidad 2n. De este modo si la pila 1 
                            necesita más de n espacios (hay que recordar que a cada pila se le asignaron n localidades) y 
                            la pila 2 no tiene ocupados sus n lugares, entonces se podrán seguir insertando elementos en 
                            la pila 1 sin caer en un error de desbordamiento.
                        </div>
                            
                            </p>
                            <br>
                            <div class="col col-12">
                            <h2>
                                Escribe ejemplos de pilas en la vida real
                            </h2>
                            </div>
                            <p>
                            Pilas. Una pila es una estructura de datos en la que los datos similar a una lista en la que 
                            los datos se introducen y se sacan por el mismo lugar. Un ejemplo de la vida real puede ser 
                            una caja de CD tipo torre, en la que los CD solamente se pueden introducir o sacar por arriba.
                            </p>
                            <div class="col col-12">
                            <h2>Escribe ejemplos de aplicaciones de pilas</h2>
                            
                            </div>
                            <p>Lee y reflexiona…</p>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Usos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">PILAS PRIMARIAS (se desechan una vez agotadas)</th>
                                    <td>Litio</td>
                                    <td>Aplicaciones específicas Cámaras fotográficas Telefonía Maquinaria tecnológica Usos militares</td>
                                    </tr>

                                    <tr>
                                    <th scope="row">PILAS SECUNDARIAS (son recargables, también denominadas «baterías»)</th>
                                    <td>Niquel-Cadmio (las más comunes</td>
                                    <td>Aparatos eléctricos en general</td>
                                    </tr>
                                </tbody>
                                </table>

                                <hr class="my-2">
                            <div class="col col-12">
                            <h2>¿Cuáles son las operaciones sobre pilas?</h2>
                            </div>
                            <p>
                            Las principales operaciones que podemos realizar en una pila son: Insertar un elemento (push). 
                            Eliminar un elemento (pop). Los algoritmos para realizar cada una de estas operaciones se 
                            muestran a continuación. La variable máximo para hacer referencia al máximo número de elementos 
                            en la pila.
                            </p>
                            <div class="col col-6">
                            <p>
                            <strong>Inserción (Push)</strong>
                            </p>
                            <pre>
                                <code>
                                si sp=máximo entonces
	                                    mensaje (overflow)
	                            en caso contrario
	                                    sp<-- sp+1
	                                    pila[sp]<-- valor
                                </code>
                            </pre>
                            </div>
                            <div class="col col-6">
                            <p>
                            <strong>Eliminación (Pop)</strong>
                            </p>
                            <pre>
                                <code>
                                si sp=0 entonces
                                        mensaje (underflow)
                                en caso contrario
                                        x&lt;--pila[sp]
                                        sp&lt;--sp-1
                                </code>
                            </pre>
                            
                            </div>
                            <div class="col col-12">
                            <h2>¿Cuáles son las operaciones sobre pilas?</h2>
                            </div>
                            
                            <div class="col col-9">
                            <p>
                            En primer lugar hay que decir que esta operación es muy comúnmente denominada push.
                            <br>
                            La inserción en una pila se realiza en su cima, considerando la cima como el último elemento 
                            insertado. Esta es una de las particularidades de las pilas, mientras el resto de estructuras 
                            de datos lineales se representan gráficamente en horizontal, las pilas se representan 
                            verticalmente. Por esta razón es por lo que se habla de cima de la pila y no de cola de la cima. 
                            Aunque en el fondo sea lo mismo, el último elemento de la estructura de datos.
                            <br>
                            Las operaciones a realizar para realizar la inserción en la pila son muy simples, hacer que el 
                            nuevo nodo apunte a la cima anterior, y definir el nuevo nodo como cima de la pila.
                            </div>
                            <div class="col col-6">
                            Vamos a ver un ejemplo de una inserción:
                            <div class="col col-3">
                            <img src="../img/pilas-insercion1.gif" 
                            class="mx-auto img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <div class="col col-6">
                            Al insertar sobre esta pila el elemento 0, la pila resultante sería:
                            <div class="col col-3">
                            <img src="../img/pilas-insercion2.gif" 
                            class="mx-auto img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            </div>
                            <p> <b>Borrar</b> </p>
                            </p>
                            <p>
                            Esta operación es normalmente conocida como pop.

                            Cuando se elimina un elemento de la pila, el elemento que se borra es el elemento situado en la cima de la pila, el que menos tiempo lleva en la estructura.

                            Las operaciones a realizar son muy simples, avanzar el puntero que apunta a la cima y extraer la cima anterior.

                            Si aplicamos la operación pop a la pila de 4 elementos representada arriba el resultado sería:
                            </p>
                            <div class="col col-12">
                            <img src="../img/pilas-insercion2.gif" 
                            class="mx-auto img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <p>
                                <b>
                                Otras operaciones
                                </b>
                            </p>
                            <p>
                            Como en el resto de estructuras lineales me remito a las operaciones secundarias descritas en la página de listas, ya que son análogas a las allí descritas.
                            </p>
                            <div class="col col-6">
                                <h2>Entrada y salida de una pila</h2>
                            <img src="../img/R.png" 
                            class="mx-auto img-resposive img-thumbnail img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="¿">
                            </div>
                            <div class="col col-6">
                                <h2>
                                ¿Cuál es el tope de la pila?
                                </h2>
                                <p>
                                La definición de pila especifica que un solo extremo de la pila se designa como tope. 
                                Pueden colocarse nuevos elementos en el tope de la pila o se pueden quitar elementos de él. 
                                La característica más importante de la pila es que el último elemento insertado en ella es el 
                                primero en suprimirse.
                                </p>
                            </div>
                            <div class="col col-12">
                                <h2>
                                ¿Cuántos elementos hay en una pila de nueva creación?
                                </h2>
                                <p>
                                Dependiendo del tipo de pila, sus componentes están constituidos por sustancias tóxicas como el Hg, 
                                Pb, Ni, y Cd, y otras veces por elementos no tóxicos como el Zn, que en cantidades balanceadas forma 
                                parte de nuestro organismo (oligoelemento). El tercer componente es un conductor iónico denominado 
                                electrolito.
                                </p>
                            </div>
                            </div>
                            
                          </div>
                        </div>
                        <hr class="my-2">
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                        </p>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<?php include("../template/pie.php")?>