<?php
/**
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RepositoryForms\FieldType;

use Symfony\Component\Form\FormInterface;
use EzSystems\RepositoryForms\Data\Content\FieldData;

interface FieldValueFormMapperInterface
{
    /**
     * "Maps" Field form to current FieldType.
     * Allows to add form fields for content edition.
     *
     * @param FormInterface $fieldForm Form for the current Field.
     * @param FieldData $data Underlying data for current Field form.
     */
    public function mapFieldValueForm(FormInterface $fieldForm, FieldData $data);
}
