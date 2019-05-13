/**
 * @param ${TYPE_HINT} ${PARAM_NAME}
 * @return self
 */
public function ${METHOD_NAME}(${TYPE_HINTED_PARAM}): self
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->add(${PARAM_NAME});
    // uncomment if you want to update other side
    //${PARAM_NAME}->set${THIS_CLASS_NAME}($this);
#else
    $this->${FIELD_NAME}[] = ${PARAM_NAME};
#end
    return $this;
}
