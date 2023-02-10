from django.shortcuts import render
from django.http import HttpResponse

def index(request):
    return HttpResponse("Hello, world. You're at the polls index.")

def saludo(request):
    return HttpResponse("Jorge Dueñas")

def navegador(request):
    return HttpResponse(f"Tu navegador dice: {request.META['HTTP_USER_AGENT']}")