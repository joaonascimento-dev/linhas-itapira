function loadSection(sectionName) {
    // Remove a classe 'ativa' de todos os elementos <a> com a classe 'secao-link'
    const links = document.querySelectorAll('.secao-link');
    links.forEach(link => {
        link.classList.remove('active');
    });

    // Adiciona a classe 'ativa' ao elemento <a> que corresponde à seção atual
    const activeLink = document.querySelector('.secao-link[href="#"][onclick="loadSection(\'' + sectionName + '\')"]');
    if (activeLink) {
        activeLink.classList.add('active');
    }

    fetch(sectionName + '.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('content').innerHTML = data;
        })
        .catch(error => {
            console.error('Erro ao carregar a seção:', error);
        });

}