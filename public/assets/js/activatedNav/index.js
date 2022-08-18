const currentLocation = location.pathname;
const beranda = document.getElementById('beranda')
const information = document.getElementById('information')
const agenda = document.getElementById('agenda')
const karir = document.getElementById('karir')
const registrasi = document.getElementById('registrasi')
const alumni = document.getElementById('alumni')
const tentang = document.getElementById('tentang')


if ('/' == currentLocation) 
{
    beranda.className = '';
    beranda.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
else if ('/ikafti/information' == currentLocation || '/ikafti/information/id' == currentLocation) 
{
    information.className = '';
    information.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
else if ('/ikafti/agenda' == currentLocation || '/ikafti/agenda/id' == currentLocation) 
{
    agenda.className = '';
    agenda.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
else if ('/ikafti/karir' == currentLocation || '/ikafti/karir/id' == currentLocation) 
{
    karir.className = '';
    karir.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
else if ('/ikafti/form-register' == currentLocation) 
{
    registrasi.className = '';
    registrasi.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
else if ('/ikafti/list-alumni' == currentLocation) 
{
    alumni.className = '';
    alumni.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
else if ('/ikafti/tentang-kami' == currentLocation) 
{
    tentang.className = '';
    tentang.className = 'block bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-full';
}
