function mostrarDescripcion(prenda) {
    var descripcion = '';
    var imagenSrc = '';

    switch (prenda) {
        case 'olan':
            descripcion = 'El olan es una pieza de tela que se coloca generalmente sobre los hombros o la cabeza, y en algunos casos se usa como un chal o una capa. Es típicamente de algodón o lana, y a menudo está adornado con bordados o flecos. En Juchitán, el olan es una prenda que forma parte del vestuario tradicional de las mujeres zapotecas, especialmente durante las festividades y ocasiones especiales.';
            imagenSrc = 'olan.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'rabona':
            descripcion = 'La rabona es una falda larga y ancha que se usa principalmente por las mujeres juchitecas. La prenda tiene un diseño muy sencillo y práctico, generalmente de algodón o lino, y se amarra a la cintura con una cinta o cuerda. La rabona es conocida por su comodidad y practicidad, ya que permite a las mujeres moverse libremente, especialmente en el trabajo en el campo y en las actividades cotidianas.';
            imagenSrc = 'rabona.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'cadenilla':
            descripcion = 'La cadenilla es una cadena de oro o plata que se utiliza como adorno personal. En Juchitán, la cadenilla es muy importante como parte del atavio tradicional de la mujer zapoteca. Se usa en el cuello, a menudo en combinación con otros adornos, como pendientes o broches.';
            imagenSrc = 'cadenilla.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'traje_regional':
            descripcion = 'El traje regional de Juchitán de Zaragoza es muy característico y se utiliza especialmente en festividades y celebraciones culturales. Para las mujeres, el traje incluye una blusa bordada, una falda larga o rabona, un mantón o olan, y adornos como cadenillas, collares y pulseras de oro.';
            imagenSrc = 'traje_regional.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'guayabera':
            descripcion = 'La guayabera en Juchitán de Zaragoza es una camisa ligera de algodón o lino. Se caracteriza por tener cuatro bolsillos y alforzas o pliegues en la parte frontal. Es comúnmente de manga corta o larga y se usa tanto en eventos informales como en ocasiones especiales.';
            imagenSrc = 'guayabera.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'huipil':
            descripcion = 'El huipil en Juchitán es una prenda femenina tradicional, hecha generalmente de algodón o seda. Es una blusa larga o túnica que se extiende hasta las caderas o incluso más abajo, con bordados que representan motivos florales, geométricos y animales.';
            imagenSrc = 'huipil.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'traje_gala':
            descripcion = 'El traje de gala en Juchitán es un atuendo formal usado en ocasiones especiales, como bodas, fiestas importantes o celebraciones religiosas. Incluye huipil bordado, falda larga de colores brillantes y adornos de oro.';
            imagenSrc = 'traje_gala.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'filipina':
            descripcion = 'La filipina en Juchitán es una camisa ligera que generalmente llevan los hombres, hecha de algodón o lino, adecuada para el clima cálido del Istmo de Tehuantepec.';
            imagenSrc = 'filipina.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'huaraches':
            descripcion = 'Los huaraches de piel son sandalias tradicionales hechas de cuero trenzado. Son muy resistentes y cómodos, ideales para caminar largas distancias en terrenos irregulares.';
            imagenSrc = 'huaraches.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        case 'liston':
            descripcion = 'El listón o tocado es un accesorio que se usa principalmente en el cabello de las mujeres, especialmente en celebraciones y festividades. Se trata de cintas de tela que se colocan en el cabello y pueden ir acompañadas de flores, plumas o perlas.';
            imagenSrc = 'liston.jpg';  // Asegúrate de que la imagen esté en el directorio correcto
            break;
        default:
            descripcion = 'Selecciona una vestimenta para ver más detalles.';
            imagenSrc = '';
            break;
    }

    // Actualiza la imagen y el texto de la descripción
    document.getElementById('imagenDescripcion').src = imagenSrc;
    document.getElementById('descripcionTexto').textContent = descripcion;
}
