<?php

namespace App\Enum;

enum CommentStatus: string
{
    case Pending = 'pending';
    case Published = 'published';
    case Moderated = 'moderated';
    
    public function getLabel(): string
    {
        return match ($this) {
            self::Pending => 'Envoi',
            self::Published => 'Publié',
            self::Moderated => 'En cours de validation',
        };
    }
}