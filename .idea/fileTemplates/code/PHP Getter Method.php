/**
 * @return ${TYPE_HINT}
 */
public ${STATIC} function ${GET_OR_IS}${NAME}()#if(${RETURN_TYPE}): ${RETURN_TYPE}#else#end
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->getAttribute('${FIELD_NAME}');
#end
}
