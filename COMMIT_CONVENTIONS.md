# Guia de Commits – Padrão Conventional Commits

Este documento define como devem ser escritas as mensagens de commit neste projeto, seguindo o padrão [Conventional Commits](https://www.conventionalcommits.org/).

---

## Formato básico
```
<tipo>(escopo): descrição curta

[corpo opcional]
[footer opcional]
```

---

## Tipos permitidos
- **feat**: nova funcionalidade  
- **fix**: correção de bug  
- **refactor**: refatoração de código sem alterar comportamento  
- **docs**: mudanças na documentação  
- **style**: ajustes de formatação, sem impacto no código  
- **chore**: tarefas diversas (dependências, scripts etc.)  

---

## Escopo (opcional)
Especifique onde a mudança foi feita:
- **users** – funcionalidades de usuários  
- **posts** – posts/blog  
- **settings** – configurações do site  
- **dashboard** – painel administrativo  
- **api** – rotas/API  

---

## Exemplos práticos
```
feat(settings): adiciona campo favicon às configurações
fix(posts): corrige erro ao salvar post sem imagem
refactor(dashboard): simplifica lógica de carregamento no Livewire
docs: adiciona instruções para rodar o projeto localmente
```

---

## Boas práticas
1. Use **descrições curtas** na primeira linha (máx. 72 caracteres).  
2. Use o **corpo** para explicar detalhes técnicos ou motivos da mudança.  
3. Commits pequenos e frequentes facilitam o histórico e revisão.  
4. **Português ou inglês?** — Escolha um idioma e mantenha consistência (recomendado inglês para projetos públicos).