# from django.shortcuts import render
from django.shortcuts import render,get_object_or_404
from django.http import HttpResponse, HttpResponseRedirect

from django.http import Http404
from django.urls import reverse
from django.http import HttpResponse
from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request,'index.html')
