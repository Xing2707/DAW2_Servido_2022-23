from django.shortcuts import get_object_or_404,render
from django.http import HttpResponse
from .models import noticias_DAW,imagen

def lista_noticias(request):
    noticias = noticias_DAW.objects.all()
    contex = {
        'noticias' : noticias,
        'nombre' : 'noticias',
    }
    return render(request,'noticias/index.html',contex)



def detalle_noticias(request,titulo):
    detalle = get_object_or_404(noticias_DAW,titulo=titulo)
    contex ={
        'detalle' : detalle,
        'titulo' : detalle.titulo.replace("_"," "),
        'text' : detalle.descripcion,
        'imagenes' : detalle.imagen.all
    }
    return render(request,'noticias/detalles.html',contex)