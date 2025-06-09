# Chain of Responsibility Pattern Example

This is an implementation of the Chain of Responsibility pattern in PHP. The pattern allows passing requests along a chain of handlers, where each handler decides either to process the request or pass it to the next handler in the chain.

## Structure

- `Regras` (Interface)
    - Defines the contract for all handlers
    - Methods: `proximo()`, `processar()`

- `RegrasBase` (Abstract Class)
    - Base implementation of the `Regras` interface
    - Implements the chain linking logic
    - Contains abstract method `podeProcessar()`

- Concrete Handlers:
    - `PodeBeber`
    - `PodeComer`
    - `PodeDancar`

## Usage

```php
// Create instances of handlers
$podeBeber = new PodeBeber();
$podeComer = new PodeComer();
$podeDancar = new PodeDancar();

// Set up the chain
$podeBeber->proximo($podeComer);
$podeComer->proximo($podeDancar);

// Process a request
$podeBeber->processar("some text");
```

## How It Works

1. Each handler decides if it can process the request
2. If it can't process, it passes the request to the next handler
3. If there are no more handlers, returns null

## License

MIT