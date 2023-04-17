// FUNÇÃO PARA ALTERAR O ESTADO DOS ELEMENTOS
function setVisibility(element, visible) {
  element.classList.toggle('hidden', !visible);
}

// search-input.js
function initSearchInput() {
  // Obtenha a referência do elemento 'search'
  const searchLink = document.getElementById('search');
  // Crie um elemento de entrada de texto
  const inputBox = document.createElement('input');
  // Estilize a caixa de entrada
  inputBox.placeholder = 'busca rápida';
  inputBox.type = 'text';
  inputBox.style.position = 'absolute';
  inputBox.style.right = '0';
  inputBox.style.top = '50px';
  inputBox.style.width = '0';
  inputBox.style.opacity = '0';
  inputBox.style.overflow = 'hidden';
  inputBox.style.transition = 'width 0.3s ease, opacity 0.3s ease';
  // Anexe a caixa de entrada ao link de pesquisa
  searchLink.appendChild(inputBox);

  // Evite que o evento de clique na caixa de entrada se propague ao link de pesquisa
  inputBox.addEventListener('click', (event) => {
    event.stopPropagation();
  });

  // Adicione um ouvinte de eventos de clique ao link de pesquisa para alternar a caixa de entrada
  searchLink.addEventListener('click', (event) => {
    event.preventDefault();
    inputBox.style.width = inputBox.style.width === '0px' ? '190px' : '0px';
    inputBox.style.opacity = inputBox.style.opacity === '0' ? '1' : '0';
    inputBox.classList.remove('valid-search');
    inputBox.focus();
  });

  // Defina os dados das páginas e suas palavras-chave
  const pagesData = [
    { title: 'Home', url: '/', keywords: ['home', 'inicio'] },
    {
      title: 'Sobre nós',
      url: '/#intro',
      keywords: ['sobre nos', 'empresa', 'informações', 'sobre'],
    },
    {
      title: 'Nosso Expertise',
      url: '/pages/nosso-expertise.php',
      keywords: ['nosso expertise', 'serviços', 'especialidades'],
    },
    {
      title: 'Nossos Especialistas',
      url: '/pages/nossos-especialistas.php',
      keywords: ['nossos especialistas', 'profissionais', 'equipe'],
    },
    {
      title: 'Cursos & Eventos',
      url: '/pages/cursos-eventos.php',
      keywords: ['cursos', 'eventos', 'capacitação', 'workshops', 'palestras'],
    },
    {
      title: 'Normas',
      url: '/pages/normas.php',
      keywords: ['normas', 'regulamentos', 'padrões', 'regras'],
    },
    {
      title: 'Contato',
      url: '#contato',
      keywords: ['contato', 'fale conosco', 'atendimento', 'suporte'],
    },
  ];

  // Função para remover acentos de uma string
  const removeAccents = (str) => {
    const accents = 'ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçìíîïÌÍÎÏÙÚÛÜùúûüÿÑñ';
    const accentsOut = 'AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCciiiiIIIIUUUUuuuuyNn';
    return str
      .split('')
      .map((char) => accentsOut[accents.indexOf(char)] || char)
      .join('');
  };

  // Função para filtrar páginas com base na consulta de pesquisa
  const filterPages = (searchQuery) => {
    searchQuery = removeAccents(searchQuery.toLowerCase());
    return pagesData.filter((page) => {
      return page.keywords.some((keyword) => {
        const keywordRegex = new RegExp(
          `\\b${removeAccents(keyword.toLowerCase())}\\b`
        );
        return searchQuery.match(keywordRegex);
      });
    });
  };

  // Função debounce para limitar a frequência com que uma função é chamada
  function debounce(func, wait) {
    let timeout;
    return function (...args) {
      const context = this;
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(context, args), wait);
    };
  }

  // Função para exibir os resultados da pesquisa
  function displaySearchResults(searchResults) {
    if (searchResults.length > 0) {
      inputBox.classList.remove('valid-search-red');
      inputBox.classList.add('valid-search-green');
      inputBox.placeholder = 'busca rápida';
    } else {
      inputBox.classList.remove('valid-search-green');
      inputBox.classList.add('valid-search-red');
      inputBox.placeholder = 'página não encontrada';
    }
  }

  // Debounced função para exibir os resultados da pesquisa
  const debouncedDisplaySearchResults = debounce(function () {
    const searchQuery = inputBox.value.trim();
    if (searchQuery.length > 0) {
      const searchResults = filterPages(searchQuery);
      displaySearchResults(searchResults);
    }
  }, 500);

  // Adicione um ouvinte de eventos de entrada à caixa de entrada para exibir os resultados da pesquisa
  inputBox.addEventListener('input', debouncedDisplaySearchResults);

  // Adicione um ouvinte de eventos de keydown à caixa de entrada para lidar com a tecla Enter
  inputBox.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      const searchQuery = inputBox.value.trim();
      if (searchQuery.length > 0) {
        const searchResults = filterPages(searchQuery);
        if (searchResults.length > 0) {
          const page = searchResults[0];
          window.location.href = page.url;
        }
      }
    }
  });
}

// VOLTAR PARA CIMA
function initToTopButton() {
  // Obtenha a referência do botão 'scroll-to-top' e do cabeçalho
  const button = document.getElementById('scroll-to-top');
  const header = document.getElementById('header');

  // Inicialmente, torne o botão invisível
  setVisibility(button, false);

  // Adicione um ouvinte de evento de rolagem à janela
  window.addEventListener('scroll', () => {
    // Atualize a visibilidade do botão com base na posição do cabeçalho ou na rolagem da página
    setVisibility(
      button,
      header.getBoundingClientRect().top < 0 ||
        document.documentElement.scrollTop > 0
    );
  });

  // Adicione um ouvinte de evento de clique ao botão
  button.addEventListener('click', () => {
    // Role a janela para o topo com um comportamento suave
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// SELETOR DE CONTEUDO
function initContentSelector() {
  // CHACHE DE SELETORES
  const links = document.querySelectorAll('#seletor_evento button');
  const imagem = document.querySelector('#bg');
  const title = document.querySelector('#title');

  // SELETORES CURSOS E EVENTOS
  const feiras = document.getElementById('feiras');
  const conteudo = document.getElementById('conteudo_digital');
  const cursos = document.getElementById('cursos');

  // SELETORES EXPERTISES
  const mapeamento = document.getElementById('mapeamento');
  const qualificacao = document.getElementById('qualificacao');
  const validacao = document.getElementById('validacao');
  const documentacao = document.getElementById('documentacao');
  const consultoria = document.getElementById('consultoria');

  // ATUALIZA O TITULO E IMAGEM DO BANNER
  function updateContent(titleText, imgSrc) {
    imagem.src = imgSrc;
    title.innerText = titleText;
  }

  // começam Visiveis
  if (window.location.href.includes('/pages/nosso-expertise.php')) {
    mapeamento.classList.remove('hidden');
  }

  // começam Visiveis
  if (window.location.href.includes('/pages/cursos-eventos.php')) {
    feiras.classList.remove('hidden');
  }

  // CURSOS E EVENTOS
  function handleEventosClick(link) {
    const setVisibilityForEvents = (
      element1,
      element2,
      element3,
      visible1,
      visible2,
      visible3
    ) => {
      setVisibility(element1, visible1);
      setVisibility(element2, visible2);
      setVisibility(element3, visible3);
    };

    if (link.innerText === 'Feiras e Workshops') {
      updateContent(
        'Feiras e Workshops',
        '/assets/imgs/backGrounds/bg_feiras.webp'
      );

      setVisibilityForEvents(feiras, conteudo, cursos, true, false, false);
    } else if (link.innerText === 'Conteúdo Digital') {
      updateContent(
        'Conteúdo Digital',
        '/assets/imgs/backGrounds/bg_conteudo-digital.webp'
      );

      setVisibilityForEvents(feiras, conteudo, cursos, false, true, false);
    } else if (link.innerText === 'Cursos') {
      updateContent('Cursos', '/assets/imgs/backGrounds/bg_cursos.webp');

      setVisibilityForEvents(feiras, conteudo, cursos, false, false, true);
    }
  }

  // EXPERTISES
  function handleExpertiseClick(link) {
    // FUNÇÃO DE DEFINIÇÃO DE VISIBILIDADE PARA EXPERTISES
    const setVisibilityForExpertise = (
      element1,
      element2,
      element3,
      element4,
      element5,
      visible1,
      visible2,
      visible3,
      visible4,
      visible5
    ) => {
      setVisibility(element1, visible1);
      setVisibility(element2, visible2);
      setVisibility(element3, visible3);
      setVisibility(element4, visible4);
      setVisibility(element5, visible5);
    };

    // REMOVE O PARAGRAFO E O BOTÃO ANTERIOR
    function removePreviousInfo() {
      const prevInfo = document.querySelector('#eventos figure p');
      const prevButton = document.querySelector('#eventos figure button');
      if (prevInfo) {
        prevInfo.remove();
      }
      if (prevButton) {
        prevButton.remove();
      }
    }

    // Cria elemento com informações adicionais
    const createInfoElement = (info) => {
      const p = document.createElement('p');
      p.innerText = info;
      return p;
    };

    if (link.innerText === 'Mapeamento Térmico') {
      removePreviousInfo();

      updateContent(
        'Mapeamento Térmico',
        '/assets/imgs/backGrounds/bg_mapa-termico.webp'
      );

      setVisibilityForExpertise(
        mapeamento,
        qualificacao,
        validacao,
        documentacao,
        consultoria,
        true,
        false,
        false,
        false,
        false
      );
    } else if (link.innerText === 'Qualificação Térmica') {
      removePreviousInfo();

      updateContent(
        'Qualificação Térmica',
        '/assets/imgs/backGrounds/bg_qualificacao.webp'
      );

      setVisibilityForExpertise(
        mapeamento,
        qualificacao,
        validacao,
        documentacao,
        consultoria,
        false,
        true,
        false,
        false,
        false
      );

      const info = createInfoElement(
        'A qualificação térmica é essencial na armazenagem, distribuição e transporte de produtos termolábeis, que são sensíveis à variação de temperatura. Ambientes e equipamentos devem ser qualificados termicamente antes do uso para garantir a uniformidade e homogeneidade da distribuição de calor em seu interior. Sendo imprescindível para garantir a integridade de produtos, principalmente de medicamentos e vacinas.'
      );

      title.insertAdjacentElement('afterend', info);
    } else if (link.innerText === 'Validação') {
      removePreviousInfo();

      updateContent('Validação', '/assets/imgs/backGrounds/bg_validacao.webp');

      setVisibilityForExpertise(
        mapeamento,
        qualificacao,
        validacao,
        documentacao,
        consultoria,
        false,
        false,
        true,
        false,
        false
      );

      const info = createInfoElement(
        'A validação é um serviço essencial para certificar a funcionalidade correta de processos e sistemas. Permitindo o atingimento da qualidade e eficácia.'
      );

      title.insertAdjacentElement('afterend', info);
    } else if (link.innerText === 'Documentação') {
      removePreviousInfo();

      updateContent(
        'Documentação',
        '/assets/imgs/backGrounds/bg_documentacao.webp'
      );

      setVisibilityForExpertise(
        mapeamento,
        qualificacao,
        validacao,
        documentacao,
        consultoria,
        false,
        false,
        false,
        true,
        false
      );

      const info = createInfoElement(
        'Fornecemos análises de risco, protocolos e relatórios de qualificação dentro de todo o escopo de nossos serviços. Todos os dados são minuciosamente elaborados pela nossa equipe técnica, formada por profissionais altamente qualificados.'
      );

      title.insertAdjacentElement('afterend', info);
    } else if (link.innerText === 'Consultoria e Treinamentos Técnicos') {
      removePreviousInfo();

      updateContent(
        'Consultoria e Treinamentos Técnicos',
        '/assets/imgs/backGrounds/bg_consultoria.webp'
      );

      setVisibilityForExpertise(
        mapeamento,
        qualificacao,
        validacao,
        documentacao,
        consultoria,
        false,
        false,
        false,
        false,
        true
      );

      const button = document.createElement('button');
      button.innerText = 'Fale com nossos especialistas!';

      const info = createInfoElement(
        'Ministramos cursos e treinamentos com conteúdos personalizados, ideais para capacitar pessoas e equipes nos mais variados temas. Entre em contato conosco e informe o tema de sua necessidade. Nossos especialistas estão aptos para atender sua demanda.'
      );

      title.insertAdjacentElement('afterend', info);
      info.insertAdjacentElement('afterend', button);
    }
  }

  // Itera sobre todos os links
  links.forEach((link) => {
    // Adiciona um ouvinte de evento de clique em cada link
    link.addEventListener('click', (event) => {
      // Remove a classe 'active' de todos os links
      links.forEach((link) => {
        link.classList.remove('active');
      });

      // Adiciona a classe 'active' ao link clicado
      link.classList.add('active');

      // LIDANDO COM OS CLICKS DE EVENTOS E CURSOS
      handleEventosClick(link);

      // LIDANDO COM OS CLICKS DE EXPETISE
      handleExpertiseClick(link);
    });
  });
}

// MODAL CONTENT
function initModalContent() {
  const cardBtns = document.querySelectorAll('.cardComponent button');

  const modalTitle = document.querySelector('.modal-title');
  const modalBanner = document.querySelector('.modal-banner');
  const modalBody = document.querySelector('.modal-body');

  cardBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const cardTitle = btn.closest('.card-body').querySelector('h5').innerText;

      // Here you would need to map the card title to the appropriate modal content
      // and update the image source and body text accordingly

      // MAPEAMENTO TERMICO
      if (cardTitle === 'Mapeamento Térmico de Rotas') {
        modalTitle.innerText = 'Mapeamento Tèrmico de Rotas';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_mapeamento.webp';
        modalBody.innerHTML = `
        <p>Através de uma análise crítica e personalizada das rotas, é possível conhecer o cenário atual da cadeia de distribuição, entender as variações térmicas do modal utilizado no transporte e propor soluções na medida de cada desafio afim de definir o perfil de temperatura. Este dado direcionará o desenvolvimento e escolha do sistema de transporte para controle de temperatura e umidade (quando necessário), bem como a realização de testes de qualificação.</p>
        <p>Os dados de temperatura e umidade coletados diretamente da cadeia de distribuição auxilia no desenvolvimento de perfis térmicos para a qualificação de operação dos sistemas de transporte, bem como apresenta, de forma inteligente, as oportunidades de melhoria, sustentadas pela ferramenta de análise de riscos.</p>
      `;
      }
      if (cardTitle === 'Mapeamento Térmico de Armazéns') {
        modalTitle.innerText = 'Mapeamento Térmico de Armazéns';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_armazens.webp';
        modalBody.innerHTML = `
        <p>O mapeamento térmico de armazéns é uma ferramenta para conhecer a homogeneidade e distribuição de temperatura e umidade de uma determinada área. Como resultado, em nossos relatórios, são apontados de forma detalhada os dados brutos e as devidas conclusões como por exemplo, a identificação dos pontos de temperatura mais quentes e mais frios, e aqueles com maior suscetibilidade a variações.</p>
        <p>Nossos especialistas executam este serviço com base em normas nacionais e internacionais, de forma a atender os requisitos regulatórios.</p>
      `;
      }
      if (cardTitle === 'Qualificação Térmica de Veículos') {
        modalTitle.innerText = 'Qualificação Térmica de Veículos';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_qualificacao.webp';
        modalBody.innerHTML = `
        <p>A qualificação térmica é essencial e item regulatório na armazenagem, distribuição e transporte de produtos termolábeis, que são sensíveis à variação de temperatura. Sistemas de transporte, ambientes e equipamentos devem ser qualificados termicamente antes do uso para garantir a uniformidade e homogeneidade da distribuição de calor em seu interior. Sendo imprescindível para garantir o controle da temperatura e integridade de produtos, principalmente de medicamentos e vacinas.</p>
      `;
      }

      // QUALIFICAÇÃO TERMICA
      if (cardTitle === 'Embalagens') {
        modalTitle.innerText = 'Embalagens';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_embalagens.webp';
        modalBody.innerHTML = `
        <p>A qualificação térmica de embalagens e sistemas de transporte deve ser realizada seguindo o Guia para a Qualificação de Transporte dos Produtos Biológicos da Anvisa (2017), onde executamos três etapas principais: Qualificação de Desenho, Operação e Desempenho.</p>
        <p>A Qualificação de Desenho (QD) ou projeto é caracterizada pela definição dos tipos, dimensões dos materiais de embalagem, elementos refrigerantes e materiais auxiliares, tendo como base testes térmicos para determinação de uma pré-configuração, garantindo que os requisitos do transporte sejam atingíveis e reais.</p>
        <p>A Qualificação de Operação (QO) é caracterizada por ações que estabeleçam, sob condições controladas através de uma câmara climática em laboratório, que uma embalagem opere conforme o previsto, dentro dos parâmetros pré-estabelecidos de massa térmica, cubagem da caixa térmica, materiais auxiliares, tempo e temperatura.</p>
        <p>A Qualificação de Performance ou Desempenho (QP) é uma evidência documentada de que uma embalagem térmica foi desenhada em conformidade com os critérios de aceitação e de acordo com os requisitos das Boas Práticas de Transporte. Caracteriza-se pelo envio das embalagens térmicas através das rotas críticas, consideradas piores casos para envio de produtos sensíveis a temperatura segundo as características de transporte da sua empresa, para demonstrar se a embalagem é efetiva, robusta e reprodutível.
        Contamos ainda com os requisitos de outros guias nacionais e internacionais para o desenvolvimento dos projetos.</p>
        <p>O Valida fornece toda infraestrutura e equipamentos adequados para a realização das mesmas, bem como a documentação mais robusta e completa do mercado. Como referência no tema, nossa documentação é amplamente aceita em auditorias nacionais, internacionais e certificações. Confie em quem é pioneiro!
        Todos os nossos projetos são personalizados, atendendo individualmente a necessidade de cada um de nossos clientes!</p>
      `;
      }
      if (cardTitle === 'Armazéns e salas climatizadas') {
        modalTitle.innerText = 'Armazéns e salas climatizadas';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_climatizadas.webp';
        modalBody.innerHTML = `
        <p>Através da característica do ambiente determinamos junto ao cliente as etapas de qualificação ou requalificação que são necessárias.</p>
        <p>O Valida fornece toda infraestrutura e equipamentos adequados para a realização das mesmas, bem como a documentação mais robusta e completa do mercado. Como referência no tema, nossa documentação é amplamente aceita em auditorias nacionais, internacionais e certificações. Confie em quem é pioneiro!</p>
        <p>A Qualificação de Instalação (QI) é um conjunto de operações realizadas para assegurar que instalações, como equipamentos, infraestrutura, instrumentos de medição, utilidades e áreas de fabricação utilizadas nos processos produtivos estejam selecionadas e feitas corretamente, de acordo com os requisitos estabelecidos.</p>
        <p>A Qualificação de Operação (QO) é um conjunto de operações estabelecidas sob condições especificadas, para que o sistema opere conforme o previsto, em todas as faixas operacionais consideradas. Todos os equipamentos utilizados na execução dos testes devem ser identificados e calibrados.</p>
        <p>A Qualificação de Desempenho ou Performance (QD) é o processo de verificação e documentação do desempenho de equipamentos, de acordo com parâmetros pré-estabelecidos.</p>
      `;
      }
      if (cardTitle === 'Câmaras frias e congeladoras') {
        modalTitle.innerText = 'Câmaras frias e congeladoras';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_camaras.webp';
        modalBody.innerHTML = `
        <p>A qualificação térmica de uma câmara fria ou congeladora é feita totalmente de acordo com a necessidade e aplicação do cliente, com base em plantas baixas, procedimentos e tipos de equipamentos específicos. Realizamos estudos térmicos considerando ambientes com e sem cargas, fluxo e distribuição de ar, analisando as faixas de temperatura ideais. Esse tipo de qualificação é conduzida de maneira minuciosa, por profissionais técnicos capacitados.</p>
      `;
      }
      if (cardTitle === 'Equipamentos de refrigeração e aquecimento') {
        modalTitle.innerText = 'Equipamentos de refrigeração e aquecimento';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_equipaments.webp';
        modalBody.innerHTML = `
        <p>Qualificar equipamentos que operam para processos de refrigeração e aquecimento é essencial para o alcance de resultados eficazes e satisfatórios. Para garantir a integridade de cargas e mercadorias, os equipamentos que controlam a temperatura precisam operar com precisão e confiabilidade.</p>
      `;
      }
      if (cardTitle === 'Veículos e containers') {
        modalTitle.innerText = 'Veículos e containers';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_veiculos.webp';
        modalBody.innerHTML = `
        <p>A qualificação térmica de frotas refrigeradas ou climatizadas é de suma importância para diversos setores, principalmente farmacêutico, veterinário e alimentício. A qualificação térmica deve ser realizada emaviões, baús de caminhões e veículos de pequeno e/ou grande porte afim de garantir a distribuição correta da temperatura para o transporte de produtos sensíveis termicamente, como os medicamentos que requerem controle durante o transporte através da RDC 430 e 653/2022.</p>
      `;
      }
      if (cardTitle === 'Estufas e Autoclaves') {
        modalTitle.innerText = 'Estufas e Autoclaves';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_estufas.webp';
        modalBody.innerHTML = `
        <p>Atendemos todas as normas e especificações para a qualificação térmica de estufas e autoclaves, fornecendo todos os registros e a documentação necessária para a interpretação dos resultados térmicos. Setores industriais, alimentícios, hospitalares e laboratoriais requerem que seus equipamentos operem de maneira segura e confiável.</p>
      `;
      }
      if (cardTitle === 'Banho Maria') {
        modalTitle.innerText = 'Banho Maria';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_banho-maria.webp';
        modalBody.innerHTML = `
        <p>Qualificar esse tipo de equipamento é essencial para que o mesmo mantenha a temperatura ideal, estabelecida para o aquecimento de substância líquidas ou sólidas.</p>
      `;
      }
      if (cardTitle === 'Incubadoras') {
        modalTitle.innerText = 'Incubadoras';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_incubadoras.webp';
        modalBody.innerHTML = `
        <p>Incubadoras são muito utilizadas em ambientes que atendem normas rigorosas, como laboratórios farmacêuticos e ambientes hospitalares. É preciso demonstrar e atestar homogeneidade térmica para atender com segurança e eficácia o objetivo ao qual o equipamento se propõe.</p>
      `;
      }
      if (cardTitle === 'Lavadoras e Termo-Desinfectora') {
        modalTitle.innerText = 'Lavadoras e Termo-Desinfectora';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_lavadoras.webp';
        modalBody.innerHTML = `
        <p>As normas vigentes para processos de esterilização exigem a qualificação térmica para assegurar que a faixa de temperatura do equipamento esteja adequada, eliminando a possibilidade de erros no processo.</p>
      `;
      }
      if (cardTitle === 'Túneis de Despirogenização') {
        modalTitle.innerText = 'Túneis de Despirogenização';
        modalBanner.src = '/assets/imgs/backGrounds/bg_modal_tuneis.webp';
        modalBody.innerHTML = `
        <p>A esterilização por calor seco reduz o nível de fungos e bactérias com o uso de ar quente em temperaturas que variam de 160 ° C até 400 ° C. Com isso, a qualificação térmica torna-se crucial para assegurar que as temperaturas do equipamento estejam em níveis operacionais adequados.</p>
      `;
      }

      // VALIDAÇÃO
      if (cardTitle === 'Sistemas Computadorizados') {
        modalTitle.innerText = 'Sistemas Computadorizados';
        modalBanner.src =
          '/assets/imgs/backGrounds/bg_modal_computadorizados.webp';
        modalBody.innerHTML = `
        <p>Validar um sistema computadorizado permite maior segurança dos processos, assegurando a qualidade do produto final.</p>
      `;
      }
    });
  });
}

if (window.location.href.includes('/pages/nosso-expertise.php')) {
  initModalContent();
}

if (
  window.location.href.includes('/pages/nosso-expertise.php') ||
  window.location.href.includes('/pages/cursos-eventos.php')
) {
  initContentSelector();
}

initSearchInput();

initToTopButton();
