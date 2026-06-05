<?php

declare(strict_types=1);

return [
	'ai_summary' => [
		'summarize' => 'AI Summarize',
		'provider' => 'AI Provider',
		'api_key' => 'API Key',
		'api_key_help' => 'Not required for Ollama.',
		'model' => 'Model',
		'model_placeholder' => 'Leave empty for default',
		'model_help' => 'Defaults: OpenAI: gpt-4o-mini, Claude: claude-sonnet-4-6, Gemini: gemini-2.5-flash, Ollama: llama3.2',
		'api_url' => 'API URL',
		'api_url_help' => 'Only required for Ollama. Default: http://localhost:11434',
		'prompt' => 'Custom Prompt',
		'prompt_placeholder' => 'Based on the following requirements, please analyze the article and produce the output that includes a concise summary, key takeaways, and additional contextual insights. The output language should be {language}. Placeholders: {language}, {title}, {content}.',
		'prompt_help' => 'Leave empty to use the default prompt. Available placeholders: {language}, {title}, {content}',
		'language' => 'Summary Language',
		'language_auto' => 'Auto (use FreshRSS language)',
		'language_help' => 'Language used for generated summaries. Auto uses your FreshRSS interface language.',
		'timeout' => 'Request Timeout (seconds)',
		'timeout_help' => 'Maximum seconds to wait for the AI provider to respond. Default: 30. Range: 1-300.',
		'reasoning_effort' => 'Reasoning Effort',
		'reasoning_effort_none' => 'None',
		'reasoning_effort_low' => 'Low',
		'reasoning_effort_high' => 'High',
		'reasoning_effort_help' => 'Controls how much the model reasons before answering. Higher effort uses more tokens and time but may produce better results. Only available for certain models.',
		'save' => 'Save',
	],
];
