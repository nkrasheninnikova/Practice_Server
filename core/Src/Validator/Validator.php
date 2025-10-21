<?php

namespace Src\Validator;

class Validator
{
    // Разрешенные валидаторы
    private array $validators = [];
    // Итоговые ошибки
    private array $errors = [];
    // Проверяемые поля (данные из формы)
    private array $fields = [];
    // Массив правил валидации
    private array $rules = [];
    // Кастомные сообщения об ошибках
    private array $messages = [];

    public function __construct(array $fields, array $rules, array $messages = [])
    {
        $this->validators = app()->settings->app['validators'] ?? [];
        $this->fields = $fields;
        $this->rules = $rules;
        $this->messages = $messages;
        $this->validate();
    }

    // Перебираем список всех валидируемых полей и для каждого поля вызываем validateField()
    private function validate(): void
    {
        foreach ($this->rules as $fieldName => $fieldValidators) {
            $this->validateField($fieldName, $fieldValidators);
        }
    }

    // Валидация отдельного поля
    private function validateField(string $fieldName, array $fieldValidators): void
    {
        // Перебираем все валидаторы, ассоциированные с полем
        foreach ($fieldValidators as $validatorName) {
            // Отделяем от имени валидатора дополнительные аргументы (например: 'in:М,Ж')
            $tmp = explode(':', $validatorName);
            [$validatorName, $args] = count($tmp) > 1 ? [$tmp[0], $tmp[1]] : [$validatorName, null];
            $args = isset($args) ? explode(',', $args) : [];

            // Проверяем, зарегистрирован ли такой валидатор
            if (!isset($this->validators[$validatorName])) {
                continue;
            }

            $validatorClass = $this->validators[$validatorName];
            if (!class_exists($validatorClass)) {
                continue;
            }

            // Безопасно получаем значение поля и сообщение
            $fieldValue = $this->fields[$fieldName] ?? null;
            $message = $this->messages[$validatorName] ?? null;

            // Создаем объект валидатора
            $validator = new $validatorClass(
                $fieldName,
                $fieldValue,
                $args,
                $message
            );

            // Если валидация не прошла — добавляем ошибку
            if (!$validator->rule()) {
                $this->errors[$fieldName][] = $validator->validate();
            }
        }
    }

    // Возврат массива найденных ошибок
    public function errors(): array
    {
        return $this->errors;
    }

    // Признак неуспешной валидации (true = есть ошибки)
    public function fails(): bool
    {
        return !empty($this->errors);
    }
}