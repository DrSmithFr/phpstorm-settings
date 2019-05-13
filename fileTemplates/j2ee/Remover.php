/**
 * @param ${TYPE_HINT} ${PARAM_NAME}
 * @return self
 */
public function ${METHOD_NAME}(${TYPE_HINTED_PARAM}): self
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->removeElement(${PARAM_NAME});
    // uncomment if you want to update other side
    //${PARAM_NAME}->set${THIS_CLASS_NAME}(null);
#else
    if (false !== $key = array_search(${PARAM_NAME}, $this->${FIELD_NAME}, true)) {
        array_splice($this->${FIELD_NAME}, $key, 1);
    }
#end
    return $this;
}
