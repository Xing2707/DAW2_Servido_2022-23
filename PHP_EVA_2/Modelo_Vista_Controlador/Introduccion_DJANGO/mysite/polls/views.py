from django.http import HttpResponse


def index(request):
    return HttpResponse("Hello, world. You're at the polls index.")

def saludo(request):
    return HttpResponse("Hola Xing Chen")

def navegador(request):
    user_agent = request.META['HTTP_USER_AGENT']
    user_agent = user_agent[0:user_agent.index("/")]

    return HttpResponse(f"su navegador es: {user_agent}")

    #libreria de sacar user agent por metodo get.
        # from ua_parser import user_agent_parser
        # user_agent = request.META.get('HTTP_USER_AGENT','')
        # ua_info = user_agent_parser.Parse(user_agent)
        # navegador = ua_info['user_agent']['family']
        # version = ua_info['user_agent']['major']
        # os = ua_info['os']['family'] ver Sistema operativo de navegador que esta visitando
        # return HttpResponse(f"Navegador:{navegador}, Version:{version}")

