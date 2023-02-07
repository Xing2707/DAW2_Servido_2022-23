from django.shortcuts import render
from django.http import HttpResponse,Http404
from .models import noticias_DAW,imagen

def lista_noticias(request):
    noticias = noticias_DAW.objects.all()
    contex = {
        'noticias' : noticias,
        'nombre' : 'noticias',
    }
    return render(request,'noticias/index.html',contex)



def detalle_noticias(request,titulo):
    try:
        detalle = noticias_DAW.objects.get(titulo = titulo)
        contex ={
            'detalle' : detalle,
            'titulo' : detalle.titulo.replace("_"," "),
            'text' : detalle.descripcion,
            'imagenes' : detalle.imagen.all
        }
    except noticias_DAW.DoesNotExist:
        raise Http404("404 the page dont exist")
    return render(request,'noticias/detalles.html',contex)