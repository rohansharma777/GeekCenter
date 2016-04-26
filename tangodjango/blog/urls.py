from django.conf.urls import url
from . import views
from django.conf.urls.static import static
from django.conf import settings

urlpatterns = [
    url(r'^$', views.home_page, name='home_page'),
    url(r'^BlogGen$', views.post_list, name='post_list'),
    url(r'^BlogGen/post/(?P<pk>[0-9]+)/$',
        views.post_detail, name='post_detail'),
    url(r'^BlogGen/post/new/$', views.post_new, name='post_new'),
    url(r'^BlogGen/post/(?P<pk>[0-9]+)/edit/$',
        views.post_edit, name='post_edit'),
]

if settings.DEBUG:
    urlpatterns += static(settings.STATIC_URL,
                          document_root=settings.STATIC_ROOT)
