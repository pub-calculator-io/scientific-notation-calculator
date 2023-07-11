function calculate(){
  const toScientific = value => math.format(value, {notation: 'exponential'}).replace(/e\+?(-?)(\d+)/,' × 10<sup>$1$2</sup>');
  switch($('[data-tab].tab--active').dataset.tab){
    case '0': 
      // 1. init & validate
      let number = input.get('number').number().raw();
      if(!input.valid()) return;
    
      // 2. calculate
      const realNumber = math.evaluate(number);
      const eNotation = math.format(realNumber, {notation: 'exponential'});
      const scientificNotation = eNotation.replace(/e\+?(-?)(\d+)/,' × 10<sup>$1$2</sup>');
      const engineeringNotation = math.format(realNumber, {notation: 'engineering'})
        .replace(/e\+?(-?)(\d+)/,' × 10<sup>$1$2</sup>');

      // 3. output
      _('scientific_notation').innerHTML = scientificNotation;
      _('e_notation').innerHTML = eNotation;
      _('engineering_notation').innerHTML = engineeringNotation;
      _('real_number').innerHTML = realNumber;
    break;
    case '1':
      // 1. init & validate
      const value1 = input.get('value_1').scientific().raw();
      const value2 = input.get('value_2').scientific().raw();
      const operation = input.get('operation').raw();
      if(!input.valid()) return;
    
      // 2. calculate
      const a = math.evaluate(value1.replace('x','*','×'));
      const b = math.evaluate(value2.replace('x','*','×'));
      const operationsMap = {'add':'+','subtract':'−','multiply':'×','divide':'÷','pow':'^'};
      const result = `${toScientific(a)} ${operationsMap[operation]} ${toScientific(b)} = ${toScientific(math[operation](a, b))}`;
      
      // 3. output
      _('result').innerHTML = result;
    break;
  }
}

window.addEventListener('load', () => math.config({number:'BigNumber', precision: 25}));
