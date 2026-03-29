# União Engenharia — Landing Page

Landing page vitrine para empresa de serviços de refrigeração e climatização empresarial.

## Sobre o Projeto

Site institucional desenvolvido para apresentar os serviços da União Engenharia: instalação, manutenção preventiva/corretiva e projetos de climatização com foco em ambientes corporativos (escritórios, lojas, galpões e indústrias).

A página funciona como uma vitrine digital — exibindo serviços, diferenciais, depoimentos de clientes e canais de contato rápido via WhatsApp.

## Por que Laravel para uma Landing Page?

O Laravel pode parecer robusto demais para uma página estática, mas a escolha foi **estratégica e pensada no longo prazo**:

- **CRM integrado** — o próximo passo é um módulo de gestão de clientes, orçamentos e histórico de serviços, aproveitando o Eloquent ORM e Migrations do Laravel com MySQL
- **Notificações automatizadas** — envio de lembretes de manutenção preventiva, follow-up de orçamentos e atualizações de status via e-mail e WhatsApp, usando o sistema de Queues e Notifications nativo
- **Painel administrativo** — área restrita para a equipe gerenciar serviços, clientes e agendamentos, com autenticação já pronta no ecossistema
- **API para integrações** — possibilidade futura de app mobile ou integrações com ERPs, usando as rotas API do Laravel

Começar com Laravel desde o dia 1 evita uma migração custosa no futuro e garante que a base de código já está preparada para escalar.

## Tech Stack

| Camada     | Tecnologia        |
|------------|--------------------|
| Backend    | Laravel 12 (PHP)   |
| Banco      | MySQL              |
| Frontend   | Blade + Tailwind CSS |
| Build      | Vite               |

## Roadmap

- [x] Landing page institucional
- [x] Design responsivo (mobile, tablet, desktop)
- [x] Integração WhatsApp (botão flutuante + CTAs)
- [ ] Painel administrativo (autenticação + dashboard)
- [ ] CRM — cadastro de clientes e orçamentos
- [ ] Notificações — lembretes de manutenção via e-mail/WhatsApp
- [ ] Agendamento online de visitas técnicas
- [ ] API REST para integrações externas

## Como Rodar

```bash
# Clonar o repositório
git clone <repo-url>
cd refrigeracao

# Instalar dependências
composer install
npm install

# Configurar ambiente
cp .env.example .env
php artisan key:generate

# Banco de dados (configurar .env com credenciais MySQL)
php artisan migrate

# Rodar em desenvolvimento
php artisan serve
npm run dev
```

O site estará disponível em `http://localhost:8000`.
