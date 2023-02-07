from django.shortcuts import render
from django.http import HttpResponse
from django.http import Http404
from .models import Equipo,Juego,Genero

def index(request):
        return HttpResponse("Hola bien venido a esports")

def detalle_equipo(request, nombre):
        try:
                equipo = Equipo.objects.get(nombre = nombre)
                contex = {
                        'equipo':equipo,
                        'publicidad':'publicidad de juan de la cierva'
                }
        except Equipo.DoesNotExist:
                raise Http404("404 equipo no existe")
        return render(request,'esports/equipo.html',contex)
                

def detalle_juego(request, nombre):
        j = Juego.objects.get(nombre = nombre)
        return HttpResponse(f"El nombre del juegos es: {j.nombre}")

def detalle_genero(request, nombre):
        e = Genero.objects.get(nombre = nombre)
        return HttpResponse(f"El nombre del equipo es: {e.nombre}")

