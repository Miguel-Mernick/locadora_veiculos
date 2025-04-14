# 🚘 Painel do Usuário - Locadora de Veículos

> Interface de usuário simples e funcional para visualização de veículos disponíveis e simulação de valores de aluguel. Ideal para clientes que desejam consultar o catálogo e verificar ofertas.

---

## Estrutura do Projeto 📁

### HTML + PHP
A página é composta por elementos HTML e PHP, estruturados para uma navegação simples e funcional.

- **Cabeçalho**: Exibe uma saudação ao usuário e botão de logout.
- **Simulador de Aluguel**: Ferramenta para calcular a previsão do valor com base no tipo de veículo e número de dias.
- **Ofertas Especiais**: Exibe promoções em destaque para atrair o usuário.
- **Tabela de Veículos**: Mostra os veículos disponíveis com seus respectivos status.

---

## Estilo e Design 🎨

Utiliza o **Bootstrap 5.3.3** para uma interface responsiva e moderna, com ícones fornecidos pela biblioteca **Bootstrap Icons**.

- **Tipografia clara**
- **Badges coloridos** para indicar status
- **Cards** organizados lado a lado com responsividade
- **Layout adaptável** para diferentes dispositivos

---

## Funcionalidades 🔧

- **Simulação de Preço**:
  - Usuário escolhe tipo de veículo e insere a quantidade de dias.
  - Um botão "Calcular previsão" executa a simulação (em implementação).

- **Ofertas Visuais**:
  - Exibição de promoções como o aluguel de submarino com desconto.
  
- **Tabela de Veículos**:
  - Lista veículos por tipo, modelo, placa e status.
  - Cores identificam status: `Disponível`, `Alugado`, `Afundado`.

---

## Tecnologias Utilizadas 💻

- **HTML5**
- **PHP**
- **CSS3 (via Bootstrap)**
- **Bootstrap Icons**
- **JavaScript (a ser implementado para funcionalidades futuras)**

---

## Como Funciona 🌐

### 1. **Cabeçalho do Sistema**
> Exibe o título do sistema e saudação ao usuário logado, com botão de logout.

---

### 2. **Simulador de Aluguel**
> Usuário seleciona o tipo de veículo (carro, moto, helicóptero, caminhão) e informa a quantidade de dias. A previsão pode ser calculada com base nessa entrada.

---

### 3. **Ofertas Especiais**
> Uma seção em destaque mostra promoções, como o aluguel de um Submarino Classe Los Angeles por um valor reduzido.

---

### 4. **Veículos Cadastrados**
> Tabela que exibe todos os veículos disponíveis no sistema, incluindo:

- Tipo
- Modelo
- Placa
- Status visual com *badges* coloridos

---

## Exemplo de Veículos:

| Tipo         | Modelo           | Placa     | Status     |
|--------------|------------------|-----------|------------|
| Carro        | Golf GTI         | FGS1D35   | Alugado    |
| Moto         | Tracer 900       | OSD5913   | Disponível |
| Helicóptero  | Ka-52 Alligator  | 123654    | Disponível |
| Caminhão     | KBP PANTSIR-S1   | DDWD346E  | Afundado   |

---
